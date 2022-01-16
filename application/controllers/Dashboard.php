<?php
class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();

        $this->load->model([
            'Muser'
        ]);

        if($this->session->userdata('masuk') != TRUE){
            $this->session->set_flashdata('msg', "Login To Your Account");
            redirect('login', 'refresh');
        }
    }

    function index(){
        $role = $this->session->userdata('role');
        $userid = $this->session->userdata('id');

        if($role == 1){

        }elseif($role == 2){
            $var = [
                'role' => $role,
                'userid' => $userid,
                'user' => $this->Muser->getById($userid),
                'title' => "Dashboard Client",
                'contents' => [
                    'coach/dashboard'
                ],
            ];

        }elseif($role == 3){
            $var = [
                'role' => $role,
                'userid' => $userid,
                'user' => $this->Muser->getById($userid),
                'title' => "Dashboard Client",
                'contents' => [
                    'clients/dashboard'
                ],
            ];
        }

        $this->load->view('templates/template', $var);
    }
}