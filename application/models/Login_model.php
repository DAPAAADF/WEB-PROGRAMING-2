<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends MY_Model {

    protected $table = 'user';

    public function getDefaultValues() {
        return [
            'email'     => '',
            'password'  => '',
        ];
    }


    public function getValidationRules() {
        $validationRules = [
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            ]
        ];
        return $validationRules;
    }


    public function run($input) {
        $query    = $this->where('email', strtolower($input->email))
            ->where('is_active', 1)
            ->first();

        if (!empty($query) && hashEncryptVerify($input->password, $query->password)) {
            $sess_data = [
                'id'        => $query->id,
                'name'      => $query->name,
                'email'     => $query->email,
                'role_id'   => $query->role_id,
                'image'     => $query->image,
                'is_login'  => true,
            ];
            $this->session->set_userdata($sess_data);
            return true;
        }

        return false;
    }
}

/* End of file Login_model.php */