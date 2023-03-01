<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Casher extends CI_Model {
        private $table = "cashers";

        public function get($id = NULL, $limit = NULL, $start = 0) {
            if($id) {
                $casher = $this->db->where(["id" => $id, "deleted" => 0])->get($this->table)->row_array();

                $cashes = $this->db->where(["id" => $casher['id'], "deleted" => 0])->get("cashes")->result_array();
                $total_balance = 0;

                foreach($cashes as $cash) {
                    $total_balance = $total_balance + $cash['amount'];
                }

                $casher['balance'] = $total_balance;

                return $casher;
            }
            else {
                $cashers = $this->db->where("deleted", 0)->limit($limit, $start)->get($this->table)->result_array();

                for($i = 0; $i < count($cashers); $i++) {
                        
                    $cashes = $this->db->where(["id" => $cashers[$i]['id'], "deleted" => 0])->get("cashes")->result_array();
                    $total_balance = 0;
    
                    foreach($cashes as $cash) {
                        $total_balance = $total_balance + $cash['amount'];
                    }
    
                    $cashers[$i]['balance'] = $total_balance;
                }

                return $cashers;
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