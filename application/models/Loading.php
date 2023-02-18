<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Loading extends CI_Model {
        private $table = "loadings";

        public function get($id = NULL, $limit = NULL, $start = 0) {
            if($id) {
                return $this->db->select("*, brokers.name as broker, vehicles.registration_no as vehicle, materials.name as material")
                                ->from($this->table)
                                ->join("brokers", "brokers.id = loadings.broker_id")
                                ->join("vehicles", "vehicles.id = loadings.vehicle_id")
                                ->join("materials", "materials.id = loadings.material_id")
                                ->where(["id" => $id, "loadings.deleted" => 0])
                                ->get()
                                ->row_array();
            }
            else {
                return $this->db->select("*, brokers.name as broker, vehicles.registration_no as vehicle, materials.name as material")
                                ->from($this->table)
                                ->join("brokers", "brokers.id = loadings.broker_id")
                                ->join("vehicles", "vehicles.id = loadings.vehicle_id")
                                ->join("materials", "materials.id = loadings.material_id")
                                ->where("loadings.deleted", 0)
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