<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->auth_user = false;
        $this->data_user = false;
    }
    public function index()
    {
        if (isset($_SESSION['int_user'])) {
            redirect('default_project');
        } else {
            $this->login();
        }
    }

    public function authenticate()
    {
        $user_id = $this->input->post('xxx');
        $inputs = $this->input->post('yyy');
        $obj['username'] = $user_id;
        $this->auth_user = $obj;
        $_SESSION['int_user'] = $this->data_user;
        redirect('dashboard/index', 'refresh');
    }
    public function login()
    {
        if (isset($_SESSION['int_user'])) {
            unset($_SESSION['int_user']);
            session_destroy();
        }
        $this->load->view('login_page');
    }
}
