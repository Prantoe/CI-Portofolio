<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Design extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('email') == '') {
            redirect('auth');
        }
        $this->load->model("Design_M");
    }

    public function index()
    {
        $data['title'] = 'Admin page';
        $data["design"] = $this->Design_M->getAll();
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        // echo 'halo' . $data['users']['name'];
        $this->load->view("admin/overview", $data);
    }

    function list()
    {
        $data['title'] = 'Show design';
        $data["design"] = $this->Design_M->getAll();
        $this->load->view("admin/design/list", $data);
    }

    // controller add
    public function add()
    {
        $data['title'] = 'Insert design';

        $design = $this->Design_M;
        $validation = $this->form_validation;
        $validation->set_rules($design->rules());

        if ($validation->run()) {

            $design->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/design/new_form", $data);
    }

    // controller edit
    public function edit($id = null)
    {
        $data['title'] = 'Edit design';
        if (!isset($id)) {
            redirect('admin/design');
        }

        $design = $this->Design_M;
        $validation = $this->form_validation;
        $validation->set_rules($design->rules());

        if ($validation->run()) {
            $design->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["design"] = $design->getById($id);
        if (!$data["design"]) {
            show_404();
        }

        $this->load->view("admin/design/edit_form", $data);
    }

    // controller delete

    public function delete($id = null)
    {
        if (!isset($id)) {
            show_404();
        }

        if ($this->Design_M->delete($id)) {
            redirect(site_url('admin/design/list'));
        }
    }
    public function logout()
    {
        // hancurkan semua sesi
        $userdata = $this->session->all_userdata();
        $this->session->unset_userdata($userdata);
        $this->session->sess_destroy();

        redirect(site_url('auth'));
    }
}