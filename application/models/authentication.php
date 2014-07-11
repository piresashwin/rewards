<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Authentication extends CI_Model {

    public function authenticate($username, $password) {
        
        $where = array(
            "username" => $username,
            "password" => md5($password),
            "stat" => 'A',
        );
        
        $result = $this->db->get_where("users",$where);
        
        return $result->num_rows() == 1 ? $result->row() : FALSE;
    }

}
