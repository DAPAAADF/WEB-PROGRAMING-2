<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Signup_model extends MY_Model {

    protected $table = 'user';

    public function getDefaultValues() {
        return [
            'name'      => '',
            'email'     => '',
            'password'  => '',
            'role'      => '',
            'image'     => '',
            'is_active' => 0
        ];
    }

    public function getValidationRules() {
        $validationRules = [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'trim|required',
            ],
            [
                'field'     => 'email',
                'label'     => 'Email',
                'rules'     => 'trim|required|is_unique[user.email]',
                'errors'    => [
                    'is_unique' => 'This %s already exists.'
                ]
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[8]', //|min_length[8]
            ],
            [
                'field' => 'password_confirmation',
                'label' => 'Confirm Password',
                'rules' => 'required|matches[password]',
            ],
        ];

        return $validationRules;
    }

    public function run($input) {
        $this->load->helper('string');
        $data           = [
            'name'      => $input->name,
            'email'     => strtolower($input->email),
            'password'  => hashEncrypt($input->password),
            'role'      => 'Cashier'
        ];

        $user          = $this->create($data);

        $sess_data      = [
            'id'        => $user,
            'name'      => $data['name'],
            'email'     => $data['email'],
            'role'      => $data['role'],
            'image'     => $data['image'],
            'is_login'  => false
        ];

        $this->session->set_userdata($sess_data);
        return true;
    }
}

/* End of file Register_model.php */