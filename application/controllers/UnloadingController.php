<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class UnloadingController extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->config->load('pagination', TRUE);
            $this->load->model("Loading");
            $this->load->model("Unloading");
            $this->load->model("UnloadingPoint");
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
                "vehicles" => $this->Vehicle->get(),
            ];

            $this->load->view("inc/header");
            $this->load->view("Unloading/create", $data);
            $this->load->view("inc/footer");
        }

        public function store() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            // $_POST["unloading_date"] = date('Y-m-d', $_POST['unloading_date']);

            $challan_record = $this->upload_file("storage/files", "challan_record", time());
            if($challan_record["status"] == true) {
                $_POST["challan_record"] = $challan_record['upload_data']['file_name'];
            }

            $this->Unloading->insert($_POST);

            $this->session->set_flashdata("success", "New record inserted");;
            return redirect(base_url() . "unloading/create");
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
            
            $this->Loading->Update($id, $_POST);

            $this->session->set_flashdata("success", "Record updated");
            return redirect(base_url() . "loading");
            
        }

        public function get_loading_details() {
            $vehicle_id = $this->input->get("vehicle_id");
            
            $data = [
                "vehicles" => $this->Vehicle->get(),
                "unloading_points" => $this->UnloadingPoint->get(),
                "records" => $this->Unloading->get_loading_records($vehicle_id)
            ];

            $this->load->view("inc/header");
            $this->load->view("Unloading/create", $data);
            $this->load->view("inc/footer");
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