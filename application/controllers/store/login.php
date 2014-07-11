<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class login extends CI_Controller {

    public function index() {
        $this->load->view("admin/login");
    }

    /**
     * Description : Authenticate Users
     */
    public function authenticate() {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $result = 0;

        if ($username && $password) {
            $result = $this->authentication->authenticate($username, $password);
        }
        
        if ($result):
            //login to desired page
            $this->session->userdata("userId",)
        else:
            //send errors to the page
        endif;
    }

}
