<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class UserController extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->load->library("session");
            $this->load->library("form_validation");
            $this->load->model("User");
        }

        public function register() {
            $username = $this->input->post("username");
            $password = $this->input->post("password");

            if(!$username || !$password) {
                $this->session->set_flashdata('error', "Please enter your username and password");
                return redirect(base_url());
            }

            $user = $this->User->get($username);

            if($user) {
                $this->session->set_flashdata('error', "This username is already exist");
                return redirect(base_url());
            }

            $hash = password_hash($password, PASSWORD_BCRYPT);

            $this->User->add($username, $hash);

            $user = $this->User->get($username);
            $this->session->user = ["id" => $user->id, "username" => $user->username];

            // $this->session->set_flashdata('success', "Your account has been created");
            return redirect(base_url());
        }

        public function login() {
            $username = $this->input->post("username");
            $password = $this->input->post("password");

            if(!$username || !$password) {
                $this->session->set_flashdata('error', "Please enter your username and password");
                return redirect(base_url());
            }

            $user = $this->User->get($username);

            if(password_verify($password, $user->hash)) {
                $this->session->user = ["id" => $user->id, "username" => $user->username];
                return redirect(base_url());
            }
            else {
                $this->session->set_flashdata('error', "You have entered wrong username or password");
                return redirect(base_url());
            }
        }

        public function logout(){
            $this->session->sess_destroy();
            return redirect(base_url());
        }
    }