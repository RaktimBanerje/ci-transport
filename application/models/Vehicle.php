<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Vehicle extends CI_Model {
        private $table = "vehicles";

        public function get($id = NULL, $limit = NULL, $start = 0) {
            if($id) {
                return $this->db->where(["id" => $id, "deleted" => 0])->get($this->table)->row_array();
            }
            else {
                return $this->db->where("deleted", 0)->limit($limit, $start)->get($this->table)->result_array();
            }
        }

        public function insert($data) {
            return $this->db->insert($this->table, $data);
        }

        public function update($id, $data) {
            return $this->db->where(["id" => $id, "deleted" => 0])->update($this->table, $data);
        }

        public function delete($id) {
            return $this->db->where("id", $id)->update($this->table, ["deleted" => 1]);
        }

        public function restore($id) {
            return $this->db->where("id", $id)->update($this->table, ["deleted" => 0]);
        }

    }