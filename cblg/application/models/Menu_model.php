<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Menu_model extends CI_Model{
    public function getSubMenu(){
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu` 
        FROM `user_sub_menu` JOIN `user_menu`
        ON `user_sub_menu`.`menu_id` =  `user_menu`.`id`";
        return $this->db->query($query)->result_array();
    }
    public function deleteMenuByID($id){

        $this->db->where('id', $id);
        return $this->db->delete('user_menu');

    }
    public function ubahMenuByID($id){
       
// harusanya di halaman ini hanya mengupdate role_id

        $admin = $this->input->post('admin');
        $member = $this->input->post('member');
       
        if($admin){
            $data = [
                'role_id' => 1
            ];
            $this->db->where('menu_id', $id);
            $this->db->update('user_access_menu', $data);
        }
        if($member){
            $data = [
                'role_id' => 2
            ];
            $this->db->where('menu_id', $id);
            $this->db->update('user_access_menu', $data);
        }
        

        $data = [
            'menu' => $this->input->post('name')
        ];
        $this->db->where('id', $id);
        return $this->db->update('user_menu', $data);

    }
    public function deleteRoleByID($id){
        $this->db->where('id', $id);
        return $this->db->delete('user_role');
    }
}