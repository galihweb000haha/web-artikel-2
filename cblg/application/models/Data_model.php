<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Data_model extends CI_Model{
    public function getCategory(){
        // $this->db->select('*');
        // $this->db->from('nilai_belajar_siswa');
        // $this->db->join('siswa', 'siswa.id_siswa=nilai_belajar_siswa.id_siswa');
        // $this->db->join('mapel', 'mapel.id_mapel=nilai_belajar_siswa.id_mapel');
        // $this->db->where('id_siswa', $id);
        // return $this->db->get()->result();
        $query = "SELECT id_kategori, kategori, COUNT(*) AS jml_artikel FROM kategori JOIN artikel USING(id_kategori) GROUP BY kategori";

        return $this->db->query($query)->result_array();
    }
    public function getTrending(){
        $query = "SELECT id_artikel, judul_artikel FROM artikel ORDER BY hits DESC LIMIT 4";
        return $this->db->query($query)->result_array();
    }
    public function getArtikel($limit, $start){
        return $this->db->get('artikel', $limit, $start)->result_array();
    }
    public function getArtikelById($id_artikel){
       $query = "SELECT user.nama_pengguna, kategori.kategori, artikel.judul_artikel, artikel.waktu_artikel, artikel.id_artikel, artikel.isi_artikel,artikel.gambar_artikel FROM artikel INNER JOIN kategori ON kategori.id_kategori=artikel.id_kategori INNER JOIN user ON user.id_user=artikel.id_user WHERE id_artikel = $id_artikel";


        return $this->db->query($query)->row_array();
    }
    public function getArtikelByKeyword($keyword){
        $query = "SELECT user.nama_pengguna, kategori.kategori, artikel.judul_artikel, artikel.waktu_artikel, artikel.id_artikel, artikel.isi_artikel,artikel.gambar_artikel FROM artikel INNER JOIN kategori ON kategori.id_kategori=artikel.id_kategori INNER JOIN user ON user.id_user=artikel.id_user WHERE judul_artikel LIKE '%$keyword%'";
        
        return $this->db->query($query)->result_array();
        
    }
    public function getSuka($id_artikel){
        $query = "SELECT id_artikel, COUNT(*) AS jml_suka FROM suka WHERE id_artikel = $id_artikel GROUP BY id_artikel";
        $result = $this->db->query($query)->row_array();
        return $result['jml_suka'];
    }
    public function getKomentar($id_artikel){        
        $query = "SELECT * FROM komentar JOIN user USING(id_user) WHERE id_artikel = $id_artikel ";
        $result = $this->db->query($query)->result_array();
        
        return $result;
    }
    public function getArtikelByIdKategori($id_kategori, $limit, $start){
        
        // $query = "SELECT user.nama_pengguna, kategori.kategori, artikel.judul_artikel, artikel.waktu_artikel, artikel.id_artikel, artikel.isi_artikel,artikel.gambar_artikel FROM artikel INNER JOIN kategori ON kategori.id_kategori=artikel.id_kategori INNER JOIN user ON user.id_user=artikel.id_user WHERE kategori.id_kategori = $id_kategori LIMIT $limit, 0";
        // return $this->db->query($query)->result_array();
        // var_dump($this->db->get('artikel', $limit, $start)->result_array());die;
        
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->get('artikel', $limit, $start)->result_array();
        
    }
    public function countAllArticle(){
        return $this->db->get('artikel')->num_rows(); 
    }
    public function countAllKategori($id_kategori){
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->get('artikel')->num_rows(); 
    }
  
}
