<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Products_model extends MY_Model {

    public $table    = 'product';

    public function getDefaultValues() {
        return [
            'id_category'   => '',
            'name'          => '',
            'description'   => '',
            'price'         => '',
            'stock'         => '',
            'image'         => ''
        ];
    }

    public function getValidationRules() {
        $validationRules = [
            [
                'field' => 'id_category',
                'label' => 'Category',
                'rules' => 'required'
            ],
            [
                'field' => 'name',
                'label' => 'Product Name',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'price',
                'label' => 'Price',
                'rules' => 'trim|required|numeric'
            ],
            [
                'field' => 'stock',
                'label' => 'Stock',
                'rules' => 'trim|required|numeric'
            ],
        ];

        return $validationRules;
    }

    public function uploadImage($fieldName, $fileName) {
        $config = [
            'upload_path'       => './images/product',
            'file_name'         => $fileName,
            'allowed_types'     => 'jpg|gif|png|jpeg|JPG|PNG',
            'max_size'          => 2064,
            'max_width'         => 0,
            'max_height'        => 0,
            'overwrite'         => true,
            'file_ext_tolower'  => true
        ];

        $this->load->library('upload', $config);

        if ($this->upload->do_upload($fieldName)) {
            return $this->upload->data();
        } else {
            $this->session->set_flashdata('image_error', $this->upload->display_errors('', ''));
            return false;
        }
    }

    public function deleteImage($fileName) {
        if (file_exists("./image/product/$fileName")) {
            unlink("./image/product/$fileName");
        }
    }
}

/* End of file Shopping_model.php */