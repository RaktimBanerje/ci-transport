<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Place extends CI_Model {
        private $table = "places";

        public function get($id = NULL, $limit = NULL, $start = 0) {
            if($id) {
                return $this->db
                            ->select("places.*, clients.name as client_name")
                            ->from($this->table)
                            ->join("clients", "clients.id = places.client_id")
                            ->where(["places.id" => $id, "places.deleted" => 0])
                            ->get()
                            ->row_array();
            }
            else {
                return $this->db
                            ->select("places.*, clients.name as client_name")
                            ->from($this->table)
                            ->join("clients", "clients.id = places.client_id")
                            ->where("places.deleted", 0)
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