<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // load model data_model
        $this->load->model('data_model');
        
    }
    public function index(){
        // konfigurasi pagination
        $config['base_url'] = base_url('home/index/');
        $config['total_rows'] = $this->data_model->countAllArticle();
        $config['per_page'] = 5;
        
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</nav></ul>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        // inisialisasi konfigurasi pagination
        $this->pagination->initialize($config);

        // menyusun data
        $data['start'] = $this->uri->segment(3);        
        $data['artikel'] = $this->data_model->getArtikel($config['per_page'], $data['start']);
        $data['category'] = $this->data_model->getCategory();
        $data['trending'] = $this->data_model->getTrending();

        // load view dan kirim data
        $this->load->view('templates/header');
        $this->load->view('home/index', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/footer');
    }
    public function faq(){
        $data['category'] = $this->data_model->getCategory();
        $data['trending'] = $this->data_model->getTrending();
        $this->load->view('templates/header');
        $this->load->view('faq/index');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/footer');
    }
    public function disclaimer(){
        $data['category'] = $this->data_model->getCategory();
        $data['trending'] = $this->data_model->getTrending();
        $this->load->view('templates/header');
        $this->load->view('disclaimer/index');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/footer');
    }
    public function terms(){
        $data['category'] = $this->data_model->getCategory();
        $data['trending'] = $this->data_model->getTrending();
        $this->load->view('templates/header');
        $this->load->view('terms/index');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/footer');
    }
    public function about(){
        $data['category'] = $this->data_model->getCategory();
        $data['trending'] = $this->data_model->getTrending();
        $this->load->view('templates/header');
        $this->load->view('about/index');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/footer');
    }
    public function detailArtikel($id_artikel){
        $data['username'] = $this->session->userdata('username');  
        $user = $this->db->get_where('user', ['username' => $data['username']])->row_array();
        $query = "SELECT * FROM komentar JOIN user USING(id_user) WHERE id_artikel = $id_artikel ";
        $data['komentar'] = $this->db->query($query)->result_array();
                

        $query = "UPDATE artikel SET hits = hits+1 WHERE id_artikel = $id_artikel";
        $this->db->query($query);

        $data['artikel'] = $this->data_model->getArtikelById($id_artikel);   
        $data['suka'] = $this->data_model->getSuka($id_artikel);
        $data['category'] = $this->data_model->getCategory();
        $data['trending'] = $this->data_model->getTrending();

        $this->load->view('templates/header');
        $this->load->view('home/detail', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/footer');
    }
    public function detaillive($keyword){
        
        
        
    
        $data['search'] = $keyword;
        $data['artikel'] = $this->data_model->getArtikelByKeyword($keyword);
        $data['category'] = $this->data_model->getCategory();
        $data['trending'] = $this->data_model->getTrending();
        
        $this->load->view('home/detail', $data);
       
        
    }
    
    public function detailArtikelByIdKategori($id_kategori){
        $config['base_url'] = base_url('home/detailArtikelByIdKategori/').$id_kategori;
        $config['total_rows'] = $this->data_model->countAllKategori($id_kategori);
        $config['per_page'] = 5;


        $query = "SELECT kategori FROM kategori WHERE id_kategori = $id_kategori";        

        $data['categoryName'] = $this->db->query($query)->row();
        $data['filter'] = $id_kategori; 
        $data['artikel'] = $this->data_model->getArtikelByIdKategori($id_kategori,

        $config['per_page'], $this->uri->segment(4));

        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</nav></ul>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');


        $this->pagination->initialize($config);

        $data['category'] = $this->data_model->getCategory();
        $data['trending'] = $this->data_model->getTrending();

        $this->load->view('templates/header');
        $this->load->view('home/index', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/footer');

    }
    public function likeArtikel($id_artikel){
        
        if($this->session->userdata('username') != null){
            
            $username = $this->session->userdata('username');
            $this->db->where('username', $username);  
            $user = $this->db->get('user')->row_array();
            $id_user = $user['id_user'];
            $query = "SELECT * FROM suka WHERE id_user = $id_user AND id_artikel = $id_artikel";
            $suka = $this->db->query($query)->row_array();
            $id_suka = $suka['id_suka'];
            if($this->db->query($query)->num_rows() > 0 ){
                $this->db->where('id_suka', $id_suka);
                $this->db->delete('suka');
                redirect('home');
            }
            $data = [
                'id_user' => $user['id_user'],
                'id_artikel' => $id_artikel,
                'time' => date('Y-m-d')
            ];
            $this->db->insert('suka', $data);
        }
        redirect('home');
    }
    public function sukaAjax($id_artikel){
       $suka = $this->data_model->getSuka($id_artikel);
       echo $suka;
    }
    public function commentsAjax($id_artikel){
        
        $data['username'] = $this->session->userdata('username');  
        $user = $this->db->get_where('user', ['username' => $data['username']])->row_array();
        $komentar = $this->input->post('comments');        
        $data = [
            'id_user' => $user['id_user'],
            'id_artikel' => $id_artikel,
            'waktu' => date('H:i:s'),
            'komentar' => $komentar
        ];
        
        $this->db->insert('komentar', $data);
        
        redirect("home/detailArtikel/$id_artikel");

     }
     public function komentarArtikel($id_artikel){
        $komentar = $this->data_model->getKomentar($id_artikel);
        
        foreach($komentar as $kom){
            $nama_user = $kom['nama_pengguna'];
            
           echo '<div class="card text-dark bg-light mb-3" >';             
             echo  '<div class="card-body">';
                echo '<h5 class="card-title">'.$nama_user.'</h5>';
                echo '<p class="card-text">'.$kom['komentar'].'</p>';
                echo '<span class="text-muted float-right ">'.$kom["waktu"].'</span>';
              echo '</div>';
            echo '</div>';
        }
     }
}