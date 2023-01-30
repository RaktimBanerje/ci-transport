<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class User extends CI_Model {

        private $table = "users";

        public function add($username, $hash) {
            $this->db->insert($this->table, [
                "username" => $username,
                "hash" => $hash
            ]);
        }

        public function get($username) {
            return $this->db->where('username', $username)->get($this->table)->row();
        }
    }