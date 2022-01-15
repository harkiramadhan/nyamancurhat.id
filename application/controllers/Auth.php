<?php
class Auth extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('login');
    }

    function signup(){
        $this->load->view('signup');
    }

    function check(){

    }
}