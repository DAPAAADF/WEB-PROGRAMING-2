<?php

class Transactions extends My_Controller {
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
        $data['title'] = 'Transactions';
        $data['page'] = 'pages/transactions/index';

        $this->view($data);
    }
}
