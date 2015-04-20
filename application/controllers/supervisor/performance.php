<?php

class Performance extends Ci_Controller {
        
        
    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['judul'] = "Create";
        $data['main'] = 'supervisor/performance';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    
    function create(){
              
        $n = new Target();
        
        $n->id_sales = $this->input->post('id_sales');
        $n->periode = $this->input->post('periode');
        $n->id_supervisor = $this->input->post('id_supervisor');
        $n->target = $this->input->post('target');
        
        $a = new Target;
        $a = $n->createTarget();
        echo $a->id_sales;
        echo "<br/>";
        echo $a->target;
    
    
    }
    
    function showEdit() {
        $data['judul'] = "Edit Sales Target";
	$data['main'] = 'supervisor/edit_performance';
        $this->load->vars($data);
	$this->load->view('dashboard');
    }
    
    function edit(){

        
        
        $a = new Target();
        $a->id_sales = $this->input->post('id_sales');
        $a->periode = $this->input->post('periode');
    
        if ($a->findTarget()) {

            $data['judul'] = "Hasil Pencarian";
            $data['main'] = 'supervisor/hasil_search_target';
            // $data['target'] = $a->hasilSearch();
            $this->load->vars($data);
            $this->load->view('dashboard');
        }
         else {
            $data['judul'] = "Hasil Pencarian";
            $data['main'] = "supervisor/error_hasil_search";
            $data['aktif'] = 'class="active"';
            $this->load->vars($data);
            $this->load->view('dashboard', $data);
        }
    }
    
    function overall(){
        $t = new Target();
        
	$data['judul'] = "Performance";
	$data['main'] = 'supervisor/overall_performance';
        $data['targets'] = $t->rank();
	$this->load->vars($data);
	$this->load->view('dashboard');  
    }
}