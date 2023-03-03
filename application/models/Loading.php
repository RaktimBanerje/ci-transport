<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Loading extends CI_Model {
        private $table = "loadings";

        public function get($id = NULL, $limit = NULL, $start = 0) {
            if($id) {
                return $this->db->select("loadings.*, loading_points.name as loading_point, pumps.name as pump, brokers.name as broker, vehicles.registration_no as vehicle, materials.name as material")
                                ->from($this->table)
                                ->join("loading_points", "loading_points.id = loadings.loading_point_id", "left")
                                ->join("pumps", "pumps.id = loadings.pump_id", "left")
                                ->join("brokers", "brokers.id = loadings.broker_id", "left")
                                ->join("vehicles", "vehicles.id = loadings.vehicle_id", "left")
                                ->join("materials", "materials.id = loadings.material_id", "left")
                                ->where(["loadings.id" => $id, "loadings.deleted" => 0])
                                ->get()
                                ->row_array();
            }
            else {
                return $this->db->select("loadings.*, loading_points.name as loading_point, pumps.name as pump, brokers.name as broker, vehicles.registration_no as vehicle, materials.name as material")
                                ->from($this->table)
                                ->join("loading_points", "loading_points.id = loadings.loading_point_id", "left")
                                ->join("pumps", "pumps.id = loadings.pump_id", "left")
                                ->join("brokers", "brokers.id = loadings.broker_id", "left")
                                ->join("vehicles", "vehicles.id = loadings.vehicle_id", "left")
                                ->join("materials", "materials.id = loadings.material_id", "left")
                                ->where("loadings.deleted", 0)
                                ->limit($limit, $start)
                                ->get()
                                ->result_array();
            }
        }

        public function insert($data) {
            return $this->db->insert($this->table, $data);
        }

        public function get_broker_rate($broker_id, $loading_date) {
            return $this->db->select("materials.broker_rate as broker_rate")
                            ->from("materials")
                            ->where(["broker_id" => $broker_id, "broker_from_date <=" => $loading_date, "broker_to_date >=" => $loading_date])
                            ->get()
                            ->row_array();
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