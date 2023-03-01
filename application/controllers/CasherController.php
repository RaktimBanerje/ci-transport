<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class CasherController extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->config->load('pagination', TRUE);
            $this->load->model("Casher");
        }

        public function index() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $pagination = $this->config->item('pagination');
            $pagination["base_url"] = base_url().'casher';
            $pagination["total_rows"] = count($this->Casher->get());
            $pagination["per_page"] = $this->uri->segment(2)? $this->uri->segment(2) : 10;
            $this->pagination->initialize($pagination);

            $page = $this->uri->segment(3)? $this->uri->segment(3) : 1;
            $start = ($page - 1) * $pagination["per_page"];

            $data = array(
                'pagination_link'  => $this->pagination->create_links(),
                'cashers'   => $this->Casher->get(NULL, $pagination["per_page"], $start),
                'limit' => $pagination["per_page"],
            );

            $this->load->view("inc/header");
            $this->load->view("Casher/index", $data);
            $this->load->view("inc/footer");
        }

        public function paginate(){
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $pagination = $this->config->item('pagination');
            $pagination["base_url"] = base_url().'casher';
            $pagination["uri_segment"] = 4;
            $pagination["total_rows"] = count($this->Casher->get());
            $pagination["per_page"] = $this->uri->segment(3)? (int)$this->uri->segment(3) : 10;
            $this->pagination->initialize($pagination);

            $page = $this->uri->segment(4)? $this->uri->segment(4) : 1;
            $start = ($page - 1) * $pagination["per_page"];

            $data = array(
                'pagination_link'  => $this->pagination->create_links(),
                'cashers'   => $this->Casher->get(NULL, $pagination["per_page"], $start),
            );

            header("content-type: application/json");

            echo json_encode($data);
        }

        public function create() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $this->load->view("inc/header");
            $this->load->view("Casher/create");
            $this->load->view("inc/footer");
        }

        public function store() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $pan_copy = $this->upload_file("storage/files", "pan", time());
            if($pan_copy["status"] == true) {
                $_POST["pan"] = $pan_copy['upload_data']['file_name'];
            }

            $aadhaar_copy = $this->upload_file("storage/files", "aadhaar", time());
            if($aadhaar_copy["status"] == true) {
                $_POST["aadhaar"] = $aadhaar_copy['upload_data']['file_name'];
            }

            $this->Casher->insert($_POST);

            $this->session->set_flashdata("success", "New record inserted");;
            return redirect(base_url() . "casher/create");
        }

        public function show($id) {
            if(!$this->session->user) {
                return redirect(base_url());
            }
        
            header("content-type: application/json");

            $casher = $this->Casher->get($id);

            echo json_encode($casher);
        }

        public function edit($id) {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $casher = $this->Casher->get($id);

            $this->load->view("inc/header");
            $this->load->view("Casher/edit", ["casher" => $casher]);
            $this->load->view("inc/footer");
        }

        public function update() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $id = trim($this->input->post("id"));
            $old_date = $this->Casher->get($id);

            $pan_copy = $this->upload_file("storage/files", "pan", time());
            if($pan_copy["status"] == true) {
                $_POST["pan"] = $pan_copy['upload_data']['file_name'];
                $this->delete_file("storage/registrations/".$old_date["registration_copy"]);
            }

            $aadhaar_copy = $this->upload_file("storage/files", "aadhaar", time());
            if($aadhaar_copy["status"] == true) {
                $_POST["aadhaar"] = $aadhaar_copy['upload_data']['file_name'];
                $this->delete_file("storage/registrations/".$old_date["registration_copy"]);
            }

            $this->Casher->Update($id, $_POST);

            $this->session->set_flashdata("success", "Record updated");
            return redirect(base_url() . "casher");
            
        }

        public function delete($id) {
            if(!$this->session->user) {
                return redirect(base_url());
            }          
            
            $this->Casher->delete($id, date("Y-m-d H:i", time()));

            $this->session->set_flashdata("success", "Record deleted");
            return redirect(base_url() . "casher");
        }

        public function restore($id) {
            if(!$this->session->user) {
                return redirect(base_url() . "casher");
            }          
            
            $this->Casher->restore($id);

            $this->session->set_flashdata("success", "Record restored");;
            return redirect(base_url() . "casher");
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