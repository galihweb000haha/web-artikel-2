<?php
function is_logged_in(){
    $ci = get_instance();
    if(!$ci->session->userdata('username')){
        redirect('auth');
    }else{
        $username = $ci->session->userdata('username');
        $data = $ci->db->get_where('user', ['username' => $username])->row_array();
        
        return $data;
    }

}