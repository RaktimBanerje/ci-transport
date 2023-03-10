<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class VehicleController extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->config->load('pagination', TRUE);
            $this->load->model("Vehicle");
        }

        public function index() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $pagination = $this->config->item('pagination');
            $pagination["base_url"] = base_url().'vehicle';
            $pagination["total_rows"] = count($this->Vehicle->get());
            $pagination["per_page"] = $this->uri->segment(2)? $this->uri->segment(2) : 10;
            $this->pagination->initialize($pagination);

            $page = $this->uri->segment(3)? $this->uri->segment(3) : 1;
            $start = ($page - 1) * $pagination["per_page"];

            $data = array(
                'pagination_link'  => $this->pagination->create_links(),
                'vehicles'   => $this->Vehicle->get(NULL, $pagination["per_page"], $start),
                'limit' => $pagination["per_page"],
            );

            $this->load->view("inc/header");
            $this->load->view("Vehicle/index", $data);
            $this->load->view("inc/footer");
        }

        public function paginate(){
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $pagination = $this->config->item('pagination');
            $pagination["base_url"] = base_url().'vehicle';
            $pagination["uri_segment"] = 4;
            $pagination["total_rows"] = count($this->Vehicle->get());
            $pagination["per_page"] = $this->uri->segment(3)? (int)$this->uri->segment(3) : 10;
            $this->pagination->initialize($pagination);

            $page = $this->uri->segment(4)? $this->uri->segment(4) : 1;
            $start = ($page - 1) * $pagination["per_page"];

            $data = array(
                'pagination_link'  => $this->pagination->create_links(),
                'vehicles'   => $this->Vehicle->get(NULL, $pagination["per_page"], $start),
            );

            header("content-type: application/json");

            echo json_encode($data);
        }

        public function create() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $this->load->view("inc/header");
            $this->load->view("Vehicle/create");
            $this->load->view("inc/footer");
        }

        public function store() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $data = [
                "registration_no" => strtoupper(trim($this->input->post("registration_no"))),
                "wheel_type" => strtoupper(trim($this->input->post("wheel_type"))),
                "registration_copy" => null,
                "owner_name" => strtoupper(trim($this->input->post("owner_name"))),
                "owner_phone" => strtoupper(trim($this->input->post("owner_phone"))),
                "owner_pan" => null,
                "bank_name" => strtoupper(trim($this->input->post("bank_name"))),
                "bank_account_no" => strtoupper(trim($this->input->post("bank_account_no"))),
                "bank_ifsc" => strtoupper(trim($this->input->post("bank_ifsc"))),
                "bank_branch_name" => strtoupper(trim($this->input->post("bank_branch_name")))
            ];

            $registration_copy = $this->upload_file("storage/registrations", "registration_copy", time());
            if($registration_copy["status"] == true) {
                $data["registration_copy"] = $registration_copy['upload_data']['file_name'];
            }

            $owner_pan = $this->upload_file("storage/pans", "owner_pan", time());
            if($owner_pan["status"] == true) {
                $data["owner_pan"] = $owner_pan['upload_data']['file_name'];
            }

            $this->Vehicle->insert($data);

            $this->session->set_flashdata("success", "New record inserted");;
            return redirect(base_url() . "vehicle/create");
        }

        public function show($id) {
            if(!$this->session->user) {
                return redirect(base_url());
            }
        
            header("content-type: application/json");

            $vehicle = $this->Vehicle->get($id);

            echo json_encode($vehicle);
        }

        public function edit($id) {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $vehicle = $this->Vehicle->get($id);

            $this->load->view("inc/header");
            $this->load->view("Vehicle/edit", ["vehicle" => $vehicle]);
            $this->load->view("inc/footer");
        }

        public function update() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $id = trim($this->input->post("id"));
            $old_vehicle = $this->Vehicle->get($id);

            $data = [
                "registration_no" => strtoupper(trim($this->input->post("registration_no"))),
                "wheel_type" => strtoupper(trim($this->input->post("wheel_type"))),
                "owner_name" => strtoupper(trim($this->input->post("owner_name"))),
                "owner_phone" => strtoupper(trim($this->input->post("owner_phone"))),
                "bank_name" => strtoupper(trim($this->input->post("bank_name"))),
                "bank_account_no" => strtoupper(trim($this->input->post("bank_account_no"))),
                "bank_ifsc" => strtoupper(trim($this->input->post("bank_ifsc"))),
                "bank_branch_name" => strtoupper(trim($this->input->post("bank_branch_name")))
            ];

            $registration_copy = $this->upload_file("storage/registrations", "registration_copy", time());
            if($registration_copy["status"] == true) {
                $data["registration_copy"] = $registration_copy['upload_data']['file_name'];
                $this->delete_file("storage/registrations/".$old_vehicle["registration_copy"]);
            }

            $owner_pan = $this->upload_file("storage/pans", "owner_pan", time());
            if($owner_pan["status"] == true) {
                $data["owner_pan"] = $owner_pan['upload_data']['file_name'];
                $this->delete_file("storage/pans/".$old_vehicle["owner_pan"]);
            }

            $this->Vehicle->Update($id, $data);

            $this->session->set_flashdata("success", "Record updated");
            return redirect(base_url() . "vehicle");
        }

        public function delete($id) {
            if(!$this->session->user) {
                return redirect(base_url());
            }          
            
            $this->Vehicle->delete($id, date("Y-m-d H:i", time()));

            $this->session->set_flashdata("success", "Record deleted");
            return redirect(base_url() . "vehicle");
        }

        public function restore($id) {
            if(!$this->session->user) {
                return redirect(base_url() . "vehicle");
            }          
            
            $this->Vehicle->restore($id);

            $this->session->set_flashdata("success", "Record restored");;
            return redirect(base_url() . "vehicle");
        }

        protected function upload_file($path, $file, $new_file_name){
            $config['upload_path']          = $path;
            $config['allowed_types']        = 'jpg|jpeg|png|pdf';
            $config['file_name']            = $new_file_name; 
    
            $this->load->library('upload');
            $this->upload->initialize($config);
    
            if ($this->upload->do_upload($file))
            {
                return array(
                    'status' => true,
                    'upload_data' => $this->upload->data()
                );                
            }
            else
            {
                return array(
                    'status' => false,
                    'error' => $this->upload->display_errors()
                );    
            }
        }

        protected function delete_file($file){
            if (file_exists($file)) {
                unlink($file);
                return true;
            } 
            else {
                return false;
            }
        }
    }