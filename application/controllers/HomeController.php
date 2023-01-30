<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class HomeController extends CI_Controller {
        public function __construct() {
            parent::__construct();
        }

        public function index() {
            if($this->session->user) {
                $this->load->view("inc/header-glassmorphism");
                $this->load->view("dashboard");
                $this->load->view("inc/footer");
            }
            else {
                $this->load->view("login");
            }
        }

        public function get_buyer_outstanding_report() {

            if(!$this->session->user) {
                return redirect(base_url());
            }
            
            date_default_timezone_set("Asia/Kolkata");
            $today = date("Y-m-d", time());
            $from_date = date("Y-m-d", strtotime($today . ' +1 day'));

            $buyers = $this->Buyer->get();

            $records = [];

            foreach ($buyers as $key => $buyer) {
                $prev_records = $this->BuyerLedger->getOutstandingAmount($buyer["id"], $from_date);

                $outstanding_balance = 0;
    
                for ($index = 0; $index < count($prev_records); $index++) { 
                    
                    $type = explode("_", array_keys($prev_records[$index])[0])[0];
                    
                    if($type == "credit") {
                        $outstanding_balance = $outstanding_balance + $prev_records[$index]["credit_amount"];
                    }
                    if($type == "journal") {
                        $outstanding_balance = $outstanding_balance - $prev_records[$index]["journal_amount"];
                    }
                    if($type == "debit") {
                        $outstanding_balance = $outstanding_balance - $prev_records[$index]["debit_amount"];
                    }
                }

                $records[] = [
                    "name"          => $buyer["name"],
                    "mobile_no"     => $buyer["mobile_no"],
                    "gst_no"        => $buyer["gst_no"],
                    "outstanding"   => number_format($outstanding_balance, 2, ".", "")
                ];
            }

            header("content-type: application/json");

            echo json_encode($records);
        }   

        public function get_seller_outstanding_report() {

            if(!$this->session->user) {
                return redirect(base_url());
            }

            date_default_timezone_set("Asia/Kolkata");
            $today = date("Y-m-d", time());
            $from_date = date("Y-m-d", strtotime($today . ' +1 day'));

            $sellers = $this->Seller->get();

            $records = [];

            foreach ($sellers as $key => $seller) {
                $prev_records = $this->SellerLedger->getOutstandingAmount($seller["id"], $from_date);

                $outstanding_balance = 0;
    
                for ($index=0; $index < count($prev_records); $index++) { 
                    
                    $type = explode("_", array_keys($prev_records[$index])[0])[0];
                    
                    if($type == "credit") {
                        $outstanding_balance = $outstanding_balance - $prev_records[$index]["credit_amount"];
                    }
                    if($type == "journal") {
                        $outstanding_balance = $outstanding_balance - $prev_records[$index]["journal_amount"];
                    }
                    if($type == "debit") {
                        $outstanding_balance = $outstanding_balance + $prev_records[$index]["debit_amount"];
                    }
                }
                
                $records[] = [
                    "name"          => $seller["name"],
                    "mobile_no"     => $seller["mobile_no"],
                    "gst_no"        => $seller["gst_no"],
                    "outstanding"   => number_format($outstanding_balance, 2, ".", "")
                ];
            }

            header("content-type: application/json");

            echo json_encode($records);
        }
    }