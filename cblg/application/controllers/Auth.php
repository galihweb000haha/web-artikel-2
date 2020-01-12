<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
    public function index(){
        if(($this->session->userdata('username') !== NULL)){
            
            redirect('admin');
        }


        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','required');
       
        if($this->form_validation->run() == FALSE){
            $this->load->view('auth/index');
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->db->get_where('user', ["username => $username"])->row_array();
            if($user){
                if(password_verify($password, $user['password'])){
                    $data = ['username' => $username];
                    $this->session->set_userdata($data);
                    redirect('admin');
                }
                else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username / Password salah cu!</div>');
                    redirect('auth/index');
                }
            }
            else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username / Password salah cu!</div>');
                redirect('auth/index');
            }
        }
       
    }    
    public function logout(){
        $data = ['username' => NULL];
        $this->session->set_userdata($data);
        redirect('home');
    }
}