<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class OrderController extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->config->load('pagination', TRUE);
            $this->load->model("Order");
            $this->load->model("Client");
        }

        public function index() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $pagination = $this->config->item('pagination');
            $pagination["base_url"] = base_url().'order';
            $pagination["total_rows"] = count($this->Order->get());
            $pagination["per_page"] = $this->uri->segment(2)? $this->uri->segment(2) : 10;
            $this->pagination->initialize($pagination);

            $page = $this->uri->segment(3)? $this->uri->segment(3) : 1;
            $start = ($page - 1) * $pagination["per_page"];

            $data = array(
                'pagination_link'  => $this->pagination->create_links(),
                'orders'   => $this->Order->get(NULL, $pagination["per_page"], $start),
                'limit' => $pagination["per_page"],
            );

            $this->load->view("inc/header");
            $this->load->view("Order/index", $data);
            $this->load->view("inc/footer");
        }

        public function paginate(){
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $pagination = $this->config->item('pagination');
            $pagination["base_url"] = base_url().'order';
            $pagination["uri_segment"] = 4;
            $pagination["total_rows"] = count($this->Order->get());
            $pagination["per_page"] = $this->uri->segment(3)? (int)$this->uri->segment(3) : 10;
            $this->pagination->initialize($pagination);

            $page = $this->uri->segment(4)? $this->uri->segment(4) : 1;
            $start = ($page - 1) * $pagination["per_page"];

            $data = array(
                'pagination_link'  => $this->pagination->create_links(),
                'orders'   => $this->Order->get(NULL, $pagination["per_page"], $start),
            );

            header("content-type: application/json");

            echo json_encode($data);
        }

        public function create() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $clients = $this->Client->get();

            $this->load->view("inc/header");
            $this->load->view("Order/create", ['clients' => $clients]);
            $this->load->view("inc/footer");
        }

        public function store() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $data = [
                "name" => trim($this->input->post("name")),
                "client_id" => trim($this->input->post("client_id")),
                "purchase_order_no" => trim($this->input->post("purchase_order_no")),
                "purchase_order_date" => trim($this->input->post("purchase_order_date")),
            ];


            $this->Order->insert($data);

            $this->session->set_flashdata("success", "New record inserted");;
            return redirect(base_url() . "order/create");
        }

        public function show($id) {
            if(!$this->session->user) {
                return redirect(base_url());
            }
        
            header("content-type: application/json");

            $order = $this->Order->get($id);

            echo json_encode($order);
        }

        public function edit($id) {
            if(!$this->session->user) {
                return redirect(base_url());
            }
            
            $clients = $this->Client->get();
            $order = $this->Order->get($id);

            $this->load->view("inc/header");
            $this->load->view("Order/edit", ["order" => $order, 'clients' => $clients]);
            $this->load->view("inc/footer");
        }

        public function update() {
            if(!$this->session->user) {
                return redirect(base_url());
            }

            $id = trim($this->input->post("id"));
            
            $data = [
                "name" => trim($this->input->post("name")),
                "client_id" => trim($this->input->post("client_id")),
                "purchase_order_no" => trim($this->input->post("purchase_order_no")),
                "purchase_order_date" => trim($this->input->post("purchase_order_date")),
            ];

            $this->Order->Update($id, $data);

            $this->session->set_flashdata("success", "Record updated");
            return redirect(base_url() . "order");
            
        }

        public function delete($id) {
            if(!$this->session->user) {
                return redirect(base_url());
            }          
            
            $this->Order->delete($id, date("Y-m-d H:i", time()));

            $this->session->set_flashdata("success", "Record deleted");
            return redirect(base_url() . "order");
        }

        public function restore($id) {
            if(!$this->session->user) {
                return redirect(base_url() . "order");
            }          
            
            $this->Order->restore($id);

            $this->session->set_flashdata("success", "Record restored");;
            return redirect(base_url() . "order");
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