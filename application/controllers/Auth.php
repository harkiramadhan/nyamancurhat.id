<?php
class Auth extends CI_Controller{
    function __construct(){
        parent::__construct();

        $this->load->model([
            'Muser'
        ]);
    }

    function index(){
        $this->load->view('login');
    }

    function signup(){
        $this->load->view('signup');
    }

    function validate(){
        $email = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);

        $cek = $this->Muser->check($email, $password);
        if($cek->num_rows() > 0){
            $data = $cek->row();
            
            if($data->status != 0){
                $this->session->set_userdata('masuk', TRUE);
                $this->session->set_userdata('role', $data->role);
                $this->session->set_userdata('id', $data->id);

                redirect('dashboard', 'refresh');
            }else{
                $this->session->set_flashdata('msg', "Your account is not active");
                redirect($_SERVER['HTTP_REFERER']);
            }
        }else{
            $this->session->set_flashdata('msg', "Invalid email or password");
            $this->session->set_flashdata('msg_pswd', "Invalid email or password");
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    function register(){
        $this->load->library('form_validation');
        $f_name = $this->input->post('f_name', TRUE);
        $l_name = $this->input->post('l_name', TRUE);
        $email = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);

        $this->form_validation->set_rules('f_name', 'First Name', 'required', [
            'required' => 'First Name is required'
        ]);
        $this->form_validation->set_rules('l_name', 'Last Name', 'required', [
            'required' => 'Last Name is required'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email.'.$email.']', [
            'is_unique' => 'Email is already taken',
            'valid_email' => 'Email must be valid'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required',[
            'required' => 'Password is required'
        ]);

        if($this->form_validation->run() != false){
            $data = [
                'status' => 1,
                'role' => 3,
                'f_name' => $f_name,
                'l_name' => $l_name,
                'email' => $email,
                'password' => md5($password),
                'pwd_raw' => $password,
                'created_at' => date('Y-m-d H:i:s')
            ];
            $this->db->insert('users', $data);
            redirect($_SERVER['HTTP_REFERER']);
            
            // $this->output->set_content_type('application/json')->set_output(json_encode($data));
        }else{
            $this->session->set_flashdata('msg', validation_errors());
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    function forgot_password(){

    }

    function logout(){
        $this->session->sess_destroy();
        redirect('', 'refresh');
    }
}