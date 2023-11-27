<?php

class Dashboard extends MY_Controller {
    private $id;

    public function __construct() {
        parent::__construct();
        $is_login   = $this->session->userdata('is_login');
        $this->id   = $this->session->userdata('id');

        if (!$is_login) {
            $this->session->set_flashdata('error', 'Please Login first.');
            redirect(base_url('login'));
            return;
        }
    }

    public function index() {
        $data['title']  = "Dashboard";
        $data['page']   = 'pages/dashboard/index';

        $this->view($data);
    }
}
