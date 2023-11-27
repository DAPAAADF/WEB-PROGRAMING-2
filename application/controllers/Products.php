<?php

class Products extends My_Controller {
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
        $data['title']      = 'Products';
        $data['products']   = $this->products->select([
            'product.id', 'product.name AS product_name', 'product.description',
            'product.image', 'product.price', 'product.stock',
            'category.name AS category_name',
        ])->join('category')->get();

        $data['page']       = 'pages/products/index';

        $this->view($data);
    }

    public function add() {
        if (!$_POST) {
            $input  = (object) $this->products->getDefaultValues();
        } else {
            $input  = (object) $this->input->post(null, true);
        }

        if (!empty($_FILES) && $_FILES['image']['name'] !== '') {
            $imageName  = url_title($input->title, '-', true) . '-' . date('Ymdhis');
            $upload     = $this->products->uploadImage('image', $imageName);
            if ($upload) {
                $input->image   = $upload['file_name'];
            } else {
                redirect(base_url('products/add'));
            }
        }

        if (!$this->products->validate()) {
            $data['title']          = 'Add New Product';
            $data['input']          = $input;
            $data['form_action']    = base_url('products/add');
            $data['page']           = 'pages/products/add';

            $this->view($data);
            return;
        }

        if ($this->products->create($input)) {
            $this->session->set_flashdata('success', 'New product successfully created.');
        } else {
            $this->session->set_flashdata('error', 'Oops! Something went wrong');
        }

        redirect(base_url('products'));
    }
}
