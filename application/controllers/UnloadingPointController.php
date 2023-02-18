<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class UnloadingPointController extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->config->load('pagination', TRUE);
            $this->load->model("UnloadingPoint");
        }

        public function index() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $pagination = $this->config->item('pagination');
            $pagination["base_url"] = base_url().'unloading_point';
            $pagination["total_rows"] = count($this->UnloadingPoint->get());
            $pagination["per_page"] = $this->uri->segment(2)? $this->uri->segment(2) : 10;
            $this->pagination->initialize($pagination);

            $page = $this->uri->segment(3)? $this->uri->segment(3) : 1;
            $start = ($page - 1) * $pagination["per_page"];

            $data = array(
                'pagination_link'  => $this->pagination->create_links(),
                'unloading_points'   => $this->UnloadingPoint->get(NULL, $pagination["per_page"], $start),
                'limit' => $pagination["per_page"],
            );

            $this->load->view("inc/header");
            $this->load->view("UnloadingPoint/index", $data);
            $this->load->view("inc/footer");
        }

        public function paginate(){
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $pagination = $this->config->item('pagination');
            $pagination["base_url"] = base_url().'unloading_point';
            $pagination["uri_segment"] = 4;
            $pagination["total_rows"] = count($this->UnloadingPoint->get());
            $pagination["per_page"] = $this->uri->segment(3)? (int)$this->uri->segment(3) : 10;
            $this->pagination->initialize($pagination);

            $page = $this->uri->segment(4)? $this->uri->segment(4) : 1;
            $start = ($page - 1) * $pagination["per_page"];

            $data = array(
                'pagination_link'  => $this->pagination->create_links(),
                'unloading_points'   => $this->UnloadingPoint->get(NULL, $pagination["per_page"], $start),
            );

            header("content-type: application/json");

            echo json_encode($data);
        }

        public function create() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $this->load->view("inc/header");
            $this->load->view("UnloadingPoint/create");
            $this->load->view("inc/footer");
        }

        public function store() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $data = [
                "name" => trim($this->input->post("name")),
            ];


            $this->UnloadingPoint->insert($data);

            $this->session->set_flashdata("success", "New record inserted");;
            return redirect(base_url() . "unloading-point/create");
        }

        public function show($id) {
            if(!$this->session->user) {
                return redirect(base_url());
            }
        
            header("content-type: application/json");

            $unloading_point = $this->UnloadingPoint->get($id);

            echo json_encode($unloading_point);
        }

        public function edit($id) {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $unloading_point = $this->UnloadingPoint->get($id);

            $this->load->view("inc/header");
            $this->load->view("UnloadingPoint/edit", ["unloading_point" => $unloading_point]);
            $this->load->view("inc/footer");
        }

        public function update() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $id = trim($this->input->post("id"));
            
            $data = [
                "name" => trim($this->input->post("name")),
            ];

            $this->UnloadingPoint->Update($id, $data);

            $this->session->set_flashdata("success", "Record updated");
            return redirect(base_url() . "unloading-point");
            
        }

        public function delete($id) {
            if(!$this->session->user) {
                return redirect(base_url());
            }          
            
            $this->UnloadingPoint->delete($id, date("Y-m-d H:i", time()));

            $this->session->set_flashdata("success", "Record deleted");
            return redirect(base_url() . "unloading-point");
        }

        public function restore($id) {
            if(!$this->session->user) {
                return redirect(base_url() . "unloading-point");
            }          
            
            $this->UnloadingPoint->restore($id);

            $this->session->set_flashdata("success", "Record restored");;
            return redirect(base_url() . "unloading-point");
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