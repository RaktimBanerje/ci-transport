<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class LoadingController extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->config->load('pagination', TRUE);
            $this->load->model("Loading");
            $this->load->model("Broker");
            $this->load->model("Vehicle");
            $this->load->model("Material");
        }

        public function index() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $pagination = $this->config->item('pagination');
            $pagination["base_url"] = base_url().'loading';
            $pagination["total_rows"] = count($this->Loading->get());
            $pagination["per_page"] = $this->uri->segment(2)? $this->uri->segment(2) : 10;
            $this->pagination->initialize($pagination);

            $page = $this->uri->segment(3)? $this->uri->segment(3) : 1;
            $start = ($page - 1) * $pagination["per_page"];

            $data = array(
                'pagination_link'  => $this->pagination->create_links(),
                'loadings'   => $this->Loading->get(NULL, $pagination["per_page"], $start),
                'limit' => $pagination["per_page"],
            );

            $this->load->view("inc/header");
            $this->load->view("Loading/index", $data);
            $this->load->view("inc/footer");
        }

        public function paginate(){
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $pagination = $this->config->item('pagination');
            $pagination["base_url"] = base_url().'loading';
            $pagination["uri_segment"] = 4;
            $pagination["total_rows"] = count($this->Loading->get());
            $pagination["per_page"] = $this->uri->segment(3)? (int)$this->uri->segment(3) : 10;
            $this->pagination->initialize($pagination);

            $page = $this->uri->segment(4)? $this->uri->segment(4) : 1;
            $start = ($page - 1) * $pagination["per_page"];

            $data = array(
                'pagination_link'  => $this->pagination->create_links(),
                'loadings'   => $this->Loading->get(NULL, $pagination["per_page"], $start),
            );

            header("content-type: application/json");

            echo json_encode($data);
        }

        public function create() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $data = [
                "brokers" => $this->Broker->get(),
                "vehicles" => $this->Vehicle->get(),
                "materils" => $this->Material->get()
            ];

            $this->load->view("inc/header");
            $this->load->view("Loading/create", $data);
            $this->load->view("inc/footer");
        }

        public function store() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $data = [
                "broker_id" => trim($this->input->post("broker_id")),
                "loading_date" => trim($this->input->post("loading_date")),
                "vehicle_id" => trim($this->input->post("vehicle_id")),
                "fright_slip_no " => trim($this->input->post("fright_slip_no")),
                "challan_no" => trim($this->input->post("challan_no")),
                
                "loading_qun" => trim($this->input->post("loading_qun")),
                "material_id" => trim($this->input->post("material_id")),
                "price" => trim($this->input->post("price")),
                "loading_point " => trim($this->input->post("loading_point")),
                "cash_advance" => trim($this->input->post("cash_advance")),

                "bank_advance" => trim($this->input->post("bank_advance")),
                "pump_id" => trim($this->input->post("pump_id")),
                "diesal_advance_amount" => trim($this->input->post("diesal_advance_amount")),
                "broker_advance " => trim($this->input->post("broker_advance")),
                "driver_commission" => trim($this->input->post("driver_commission")),
            ];

            $this->Loading->insert($data);

            $this->session->set_flashdata("success", "New record inserted");;
            return redirect(base_url() . "loading/create");
        }

        public function show($id) {
            if(!$this->session->user) {
                return redirect(base_url());
            }
        
            header("content-type: application/json");

            $loading = $this->Loading->get($id);

            echo json_encode($loading);
        }

        public function edit($id) {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $data = [
                "brokers" => $this->Broker->get(),
                "clients" => $this->Client->get(),
                "loading" => $this->Loading->get($id)
            ];

            $this->load->view("inc/header");
            $this->load->view("Loading/edit", $data);
            $this->load->view("inc/footer");
        }

        public function update() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $id = trim($this->input->post("id"));
            
            $data = [
                "broker_id" => trim($this->input->post("broker_id")),
                "loading_date" => trim($this->input->post("loading_date")),
                "vehicle_id" => trim($this->input->post("vehicle_id")),
                "fright_slip_no " => trim($this->input->post("fright_slip_no")),
                "challan_no" => trim($this->input->post("challan_no")),
                
                "loading_qun" => trim($this->input->post("loading_qun")),
                "material_id" => trim($this->input->post("material_id")),
                "price" => trim($this->input->post("price")),
                "loading_point " => trim($this->input->post("loading_point")),
                "cash_advance" => trim($this->input->post("cash_advance")),

                "bank_advance" => trim($this->input->post("bank_advance")),
                "pump_id" => trim($this->input->post("pump_id")),
                "diesal_advance_amount" => trim($this->input->post("diesal_advance_amount")),
                "broker_advance " => trim($this->input->post("broker_advance")),
                "driver_commission" => trim($this->input->post("driver_commission")),
            ];

            $this->Loading->Update($id, $data);

            $this->session->set_flashdata("success", "Record updated");
            return redirect(base_url() . "loading");
            
        }

        public function delete($id) {
            if(!$this->session->user) {
                return redirect(base_url());
            }          
            
            $this->Loading->delete($id, date("Y-m-d H:i", time()));

            $this->session->set_flashdata("success", "Record deleted");
            return redirect(base_url() . "loading");
        }

        public function restore($id) {
            if(!$this->session->user) {
                return redirect(base_url() . "loading");
            }          
            
            $this->Loading->restore($id);

            $this->session->set_flashdata("success", "Record restored");;
            return redirect(base_url() . "loading");
        }
    }