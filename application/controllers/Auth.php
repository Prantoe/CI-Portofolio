<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('email') != '') {
            redirect('admin/design');
        }
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required', 'valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login page';
            $this->load->view('auth/login', $data);
        } else {
            //ketika benar
            $this->login();
        }
    }
    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $users = $this->db->get_where('users', ['email' => $email])->row_array();

        //jika usernya ada
        if ($users) {
            //jika user aktif
            if ($users['is_active'] == 1) {
                //cek passwordnya ya
                if (password_verify($password, $users['password'])) {
                    $data = [
                        'email' => $users['email']
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin/design');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong password! </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                This email has not been activated! </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered! </div>');
            redirect('auth');
        }
    }


    public function registration()
    {
        // divalidasi dulu
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
            'is_unique' => 'This email has already registred!'
        ]);
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont mathc!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'User registration';
            $this->load->view('auth/registration', $data);
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                // htmlspecialchars($this->input->post('name', true));
                'email' => htmlspecialchars($this->input->post('email', true)),
                // htmlspecialchars($this->input->post('email'true));
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'is_active' => 1
            ];
            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulations! your account has ben created </div>');
            redirect('auth');
        }
    }
}