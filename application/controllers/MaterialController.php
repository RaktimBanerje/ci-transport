<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class MaterialController extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->config->load('pagination', TRUE);
            $this->load->model("Material");
            $this->load->model("Broker");
            $this->load->model("Client");
        }

        public function index() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $pagination = $this->config->item('pagination');
            $pagination["base_url"] = base_url().'material';
            $pagination["total_rows"] = count($this->Material->get());
            $pagination["per_page"] = $this->uri->segment(2)? $this->uri->segment(2) : 10;
            $this->pagination->initialize($pagination);

            $page = $this->uri->segment(3)? $this->uri->segment(3) : 1;
            $start = ($page - 1) * $pagination["per_page"];

            $data = array(
                'pagination_link'  => $this->pagination->create_links(),
                'materials'   => $this->Material->get(NULL, $pagination["per_page"], $start),
                'limit' => $pagination["per_page"],
            );

            $this->load->view("inc/header");
            $this->load->view("Material/index", $data);
            $this->load->view("inc/footer");
        }

        public function paginate(){
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $pagination = $this->config->item('pagination');
            $pagination["base_url"] = base_url().'material';
            $pagination["uri_segment"] = 4;
            $pagination["total_rows"] = count($this->Material->get());
            $pagination["per_page"] = $this->uri->segment(3)? (int)$this->uri->segment(3) : 10;
            $this->pagination->initialize($pagination);

            $page = $this->uri->segment(4)? $this->uri->segment(4) : 1;
            $start = ($page - 1) * $pagination["per_page"];

            $data = array(
                'pagination_link'  => $this->pagination->create_links(),
                'materials'   => $this->Material->get(NULL, $pagination["per_page"], $start),
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
                "clients" => $this->Client->get()
            ];

            $this->load->view("inc/header");
            $this->load->view("Material/create", $data);
            $this->load->view("inc/footer");
        }

        public function store() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $this->Material->insert($_POST);

            $this->session->set_flashdata("success", "New record inserted");;
            return redirect(base_url() . "material/create");
        }

        public function show($id) {
            if(!$this->session->user) {
                return redirect(base_url());
            }
        
            header("content-type: application/json");

            $material = $this->Material->get($id);

            echo json_encode($material);
        }

        public function edit($id) {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $data = [
                "brokers" => $this->Broker->get(),
                "clients" => $this->Client->get(),
                "material" => $this->Material->get($id)
            ];

            $this->load->view("inc/header");
            $this->load->view("Material/edit", $data);
            $this->load->view("inc/footer");
        }

        public function update() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $id = trim($this->input->post("id"));

            $this->Material->Update($id, $_POST);

            $this->session->set_flashdata("success", "Record updated");
            return redirect(base_url() . "material");
            
        }

        public function delete($id) {
            if(!$this->session->user) {
                return redirect(base_url());
            }          
            
            $this->Material->delete($id, date("Y-m-d H:i", time()));

            $this->session->set_flashdata("success", "Record deleted");
            return redirect(base_url() . "material");
        }

        public function restore($id) {
            if(!$this->session->user) {
                return redirect(base_url() . "material");
            }          
            
            $this->Material->restore($id);

            $this->session->set_flashdata("success", "Record restored");;
            return redirect(base_url() . "material");
        }
    }