<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Cash extends CI_Model {
        private $table = "cashes";

        public function get($id = NULL, $limit = NULL, $start = 0) {
            if($id) {
                return $this->db->select("cashes.*, cashers.name as casher_name")
                                ->from($this->table)
                                ->join("cashers", "cashes.id = cashers.id")
                                ->where(["cashes.id" => $id, "cashes.deleted" => 0])
                                ->get()
                                ->row_array();
            }
            else {
                return $this->db->select("cashes.*, cashers.name as casher_name")
                                ->from($this->table)
                                ->join("cashers", "cashes.id = cashers.id")
                                ->limit($limit, $start)
                                ->get()
                                ->result_array();
            }
        }

        public function insert($data) {
            return $this->db->insert($this->table, $data);
        }

        public function update($id, $data) {
            return $this->db->where(["id" => $id, "deleted" => 0])->update($this->table, $data);
        }

        public function delete($id, $deleted_at) {
            return $this->db->where("id", $id)->update($this->table, ["deleted" => 1, "deleted_at" => $deleted_at]);
        }

        public function restore($id) {
            return $this->db->where("id", $id)->update($this->table, ["deleted" => 0]);
        }

    }