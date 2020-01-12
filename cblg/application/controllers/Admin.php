<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('data_model');
       
        
        // var_dump($data);die;
    }
    public function index(){
        

        if($this->session->userdata('username') !== NULL){
            $data['username'] = $this->session->userdata('username');  
            $data['user'] = $this->db->get_where('user', ['username' => $data['username']])->row_array();
        }else{
            redirect('auth');
        }

        $this->form_validation->set_rules('judul_artikel','Judul artikel','trim|required');
        $this->form_validation->set_rules('isi_artikel','Konten','trim|required');

        if($this->form_validation->run() == FALSE){
        $artikel = $this->db->get('artikel')->result_array();
        $jumlahDataPerHalaman = 5;
        $jumlahData = count($artikel);
        $data['jumlahHalaman'] = ceil($jumlahData / $jumlahDataPerHalaman);
        $data['halamanAktif'] = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $awalData = ($data['halamanAktif'] * $jumlahDataPerHalaman) - $jumlahDataPerHalaman;
        $data['awalData'] = $awalData;

        $query = "SELECT user.nama_pengguna, kategori.kategori, artikel.judul_artikel, artikel.waktu_artikel, artikel.id_artikel, artikel.isi_artikel,artikel.gambar_artikel FROM artikel INNER JOIN kategori ON kategori.id_kategori=artikel.id_kategori INNER JOIN user ON user.id_user=artikel.id_user ORDER BY id_artikel DESC LIMIT $awalData,$jumlahDataPerHalaman";
        // $query = "SELECT user.nama_pengguna, kategori.kategori, artikel.judul_artikel, artikel.waktu_artikel, artikel.id_artikel, artikel.isi_artikel,artikel.gambar_artikel FROM artikel INNER JOIN kategori ON kategori.id_kategori=artikel.id_kategori INNER JOIN user ON user.id_user=artikel.id_user ORDER BY id_artikel DESC";
        $data['artikel'] = $this->db->query($query)->result_array();
        $data['kategori'] = $this->db->get('kategori')->result_array();

        
        $this->load->view('template-admin/header', $data);
        $this->load->view('template-admin/sidebar');
        $this->load->view('admin/index', $data);
        $this->load->view('template-admin/footer');

        
        }else{
            $image = $_FILES['image'];
            $image_name = $image['name'];

            if($image){
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/artikel/';

                $this->load->library('upload', $config);
                    if($this->upload->do_upload('image')){
                    $image = $this->upload->data('file_name');
                    
                }else{
                    $image = "code.jpg";
                    
                }

            }
            $data = array(
                'judul_artikel' => $this->input->post('judul_artikel'),
                'waktu_artikel' => date('Y-m-d'),
                'id_kategori' => $this->input->post('kategori'),
                'id_user' => $data['user']['id_user'],
                'isi_artikel' => $this->input->post('isi_artikel'),
                'gambar_artikel' => $image,
                'hits' => 0
            );
            
            $this->db->insert('artikel', $data);

            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin');
        }
    }    
    public function deleteArtikel($id){
        $this->db->where('id_artikel', $id);
        $this->db->delete('artikel');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin');
    }
   
    public function editArtikel($id){
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $this->db->where('id_artikel', $id);        
        $data['artikel'] = $this->db->get('artikel')->row_array();
        $id_user = $data['artikel']['id_user'];
        $this->db->where('id_user', $id_user);
        $data['user'] = $this->db->get('user')->row_array();
        
        $this->form_validation->set_rules('judul_artikel', 'Judul artikel', 'trim|required');
        $this->form_validation->set_rules('isi_artikel', 'Konten', 'trim|required');
        if( $this->form_validation->run() == FALSE ){
            $this->load->view('template-admin/header', $data);
            $this->load->view('template-admin/sidebar');
            $this->load->view('admin/edit', $data);
            $this->load->view('template-admin/footer');
        }else{
            $image = $_FILES['image'];
            $image_name = $image['name'];
           
            if($image){
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '6789';
                $config['upload_path'] = './assets/img/artikel/';

                $this->load->library('upload', $config);
                $old_image = $data['artikel']['gambar_artikel'];
                if($this->upload->do_upload('image')){
                    
                    $image = $this->upload->data('file_name');
                    
                    if($old_image !== 'code.jpg'){
                        unlink(FCPATH . 'assets/img/artikel/' . $old_image);
                    }
                }else{
                    
                    $image = $old_image;
                    
                    
                }

            }
            

            $id_artikel = $data['artikel']['id_artikel'];
            $data = array(
                'judul_artikel' => $this->input->post('judul_artikel'),
                'waktu_artikel' => date('Y-m-d'),
                'id_kategori' => $this->input->post('kategori'),
                
                'isi_artikel' => $this->input->post('isi_artikel'),
                'gambar_artikel' => $image,
                'hits' => 0
            );
            
            $this->db->set($data);
            $this->db->where('id_artikel', $id_artikel);
            $this->db->update('artikel');
            

            $this->session->set_flashdata('flash', 'Diupdate');
            redirect('admin');
        }
       

        
        
       
    }
    public function changeKey(){
        $username = $this->session->userdata('username');
        $data['user'] = $this->db->get_where('user', ['username' => $username])->row_array();
        
        $this->form_validation->set_rules('old_password', 'Password lama', 'trim|required');
        $this->form_validation->set_rules('password', 'Password baru', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('new_password', 'Konfirmasi Password', 'trim|required|min_length[6]|matches[password]');
        if($this->form_validation->run() == FALSE){
            $this->load->view('template-admin/header', $data);
            $this->load->view('template-admin/sidebar');        
            $this->load->view('admin/changeKey', $data);
            $this->load->view('template-admin/footer');
        }else{
            $new_password = $this->input->post('new_password');
            $this->db->where('username', $username);
            $user = $this->db->get('user')->row_array();
            $old_password = $user['password'];                     
            if(!password_verify($this->input->post('old_password'), $old_password)){
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kamu memasukan password yang <b>salah</b></div>');
                redirect('admin/changeKey');
            }
            if($new_password == $old_password){
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Kamu memasukan password yang lama</div>');
                redirect('admin/changeKey');
            }
            if($new_password !== $this->input->post('password')){
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Password tidak match, ulangi jangan menyerah!</div>');
                redirect('admin/changeKey');
            }
            $new_password = password_hash($new_password, PASSWORD_BCRYPT);
            
            $this->db->set('password', $new_password);
            $this->db->where('username', $username);
            $this->db->update('user');

            $this->session->set_flashdata('flash', 'Diupdate');
            redirect('admin');
        }
    }
    public function resultSearch($keyword){
        $this->db->like('judul_artikel', $keyword, 'both');
        $artikel = $this->db->get('artikel')->result_array();
        $jumlahDataPerHalaman = 5;
        $jumlahData = count($artikel);
        $data['jumlahHalaman'] = ceil($jumlahData / $jumlahDataPerHalaman);
        $data['halamanAktif'] = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $awalData = ($data['halamanAktif'] * $jumlahDataPerHalaman) - $jumlahDataPerHalaman;
        $data['awalData'] = $awalData;

        $query = "SELECT user.nama_pengguna, kategori.kategori, artikel.judul_artikel, artikel.waktu_artikel, artikel.id_artikel, artikel.isi_artikel,artikel.gambar_artikel FROM artikel INNER JOIN kategori ON kategori.id_kategori=artikel.id_kategori INNER JOIN user ON user.id_user=artikel.id_user WHERE artikel.judul_artikel LIKE '%$keyword%' ORDER BY id_artikel DESC";

        $data['artikel'] = $this->db->query($query)->result_array();
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['search'] = $keyword;                
        // var_dump($data['artikel']);die;
        $this->load->view('admin/result', $data);
    }
    public function report(){
        if($this->session->userdata('username') !== NULL){
            $data['username'] = $this->session->userdata('username');  
            $data['user'] = $this->db->get_where('user', ['username' => $data['username']])->row_array();
        }else{
            redirect('auth');
        }
      
        

        $this->load->view('template-admin/header', $data);
        $this->load->view('template-admin/sidebar');        
        $this->load->view('admin/report', $data);
        $this->load->view('template-admin/footer');
        
    }
    public function get_kategori(){
        $this->db->select('kategori');
        $kategori = $this->db->get('kategori')->result_array();        
        $list = [];
        foreach($kategori as $kat){
            $list[] = $kat['kategori'];
        }
        echo json_encode($list);
    }
    public function get_jmlArtikel(){
        
        $sql = "SELECT COUNT(*) AS jml_artikel FROM kategori JOIN artikel USING(id_kategori) GROUP BY kategori";
        $jmlArtikel = $this->db->query($sql)->result_array();                                
        $list = [];
        foreach($jmlArtikel as $h){
            $list[] = $h['jml_artikel'];
        }
        
        echo json_encode($list);
        
        
    }
    public function setting(){
        
        $data['username'] = $this->session->userdata('username');  
        $data['user'] = $this->db->get_where('user', ['username' => $data['username']])->row_array();
        $this->form_validation->set_rules('nama_pengguna', 'Nama pengguna','trim|required|min_length[3]|max_length[9]');
        
        if($this->form_validation->run() == FALSE){

            $this->load->view('template-admin/header', $data);
            $this->load->view('template-admin/sidebar');        
            $this->load->view('admin/setting', $data);
            $this->load->view('template-admin/footer');
        }else{

            $image = $_FILES['foto'];
            $image_name = $image['name'];
           
            if($image){
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '6789';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);
                $old_image = $data['user']['foto'];
                if($this->upload->do_upload('foto')){
                    
                    $image = $this->upload->data('file_name');
                    if($old_image !== 'code.jpg'){
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                }else{
                    
                    $image = $old_image;
                    
                }

            }
            

            $id_user = $data['user']['id_user'];
            $data = array(
                'nama_pengguna' => $this->input->post('nama_pengguna'),
                'foto' => $image
            );
            
            $this->db->set($data);
            $this->db->where('id_user', $id_user);
            $this->db->update('user');
            

            $this->session->set_flashdata('flash', 'Diupdate');
            redirect('admin');




            
            
            
            
            
            
            
        }
        
    }
    public function setDashboard(){
        if($this->session->userdata('username') !== NULL){
            $data['username'] = $this->session->userdata('username');  
            $data['user'] = $this->db->get_where('user', ['username' => $data['username']])->row_array();
        }else{
            redirect('auth');
        }
        $this->load->view('template-admin/header', $data);
        $this->load->view('template-admin/sidebar');        
        $this->load->view('admin/setDashboard', $data);
        $this->load->view('template-admin/footer');
    }
}