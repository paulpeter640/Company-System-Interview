<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array();
        $body = array(
            'header' => array(
                'title' => 'Company System'
            ),
            'data' => $data
        );
        $this->load->view('layout/header', $body);
        $this->load->view("dashboard/home", $body);
        $this->load->view('layout/footer', $body);
    }

    public function register()
    {
        $this->load->view("register");
    }

    public function ra()
    {
        $data = array();
        $body = array(
            'header' => array(
                'title' => 'Company System'
            ),
            'data' => $data
        );
        $this->load->view('layout/header', $body);
        $this->load->view("dashboard/ra", $body);
        $this->load->view('layout/footer', $body);
    }
    public function bc()
    {
        $data = array();
        $body = array(
            'header' => array(
                'title' => 'Company System'
            ),
            'data' => $data
        );
        $this->load->view('layout/header', $body);
        $this->load->view("dashboard/bc", $body);
        $this->load->view('layout/footer', $body);
    }
    public function vs()
    {
        $data = array();
        $body = array(
            'header' => array(
                'title' => 'Company System'
            ),
            'data' => $data
        );
        $this->load->view('layout/header', $body);
        $this->load->view("dashboard/vs", $body);
        $this->load->view('layout/footer', $body);
    }
    public function accept()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:3050/register');
        curl_setopt($ch, CURLOPT_HTTPGET, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        $result = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);
        redirect('dashboard/index');
    }
}
