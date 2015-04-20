<?php

class Summary extends Ci_Controller {
        
        
    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['judul'] = "Summary List";
        $data['main'] = 'ops/searchStudent';
        $this->load->vars($data);
        $this->load->view('dashboard');
    }
    function searchStudent() {
        $u = new Student();
        $u->id_murid = $this->input->post('idMurid');
        
       // $n = new Beginning_number();
       // $n->Id_murid = $this->input->post('idMurid');
    
        if ($u->findStudent()) {

            $data['judul'] = "Hasil Pencarian";
            $data['main'] = 'ops/hasil_search';
            $data['student'] = $u->hasilSearch();
            //$data['riwayat'] = $n->ambilStatus();
            $this->load->vars($data);
            $this->load->view('dashboard');
        }
         else {
            $data['judul'] = "Hasil Pencarian";
            $data['main'] = "ops/hasil_search";
            $data['aktif'] = 'class="active"';

            $this->load->view('dashboard', $data);
        }
        
    }
    
    function searchStudentStatus() {
        $u = new Student();
        $u->id_murid = $this->input->post('idMurid');
        
       // $n = new Beginning_number();
       // $n->Id_murid = $this->input->post('idMurid');
    
        if ($u->findStudent()) {

            $data['judul'] = "Hasil Pencarian";
            $data['main'] = 'create';
            $data['student'] = $u->hasilSearch();
            //$data['riwayat'] = $n->ambilStatus();
            $this->load->vars($data);
            $this->load->view('dashboard');
        }
         else {
            $data['judul'] = "Hasil Pencarian";
            $data['main'] = "ops/hasil_search";
            $data['aktif'] = 'class="active"';

            $this->load->view('dashboard', $data);
        }
        
    }
    
    
    function searchStatusStudent() {
      $u = new Student();
        $u->Id_murid = $this->input->post('idMurid');
        
        if ($u->findStudent()) {

            $data['judul'] = "Hasil Pencarian";
            $data['main'] = 'admin/status_hasil_search';
            $data['student'] = $u->hasilSearch();
            $this->load->vars($data);
            $this->load->view('admin/dashboard');
        
        }
        
        else {
            $data['judul'] = "Summary list";
            $data['main'] = "admin/error_search_student";
            $data['aktif'] = 'class="active"';

            $this->load->view('admin/dashboard', $data);
        }
        
    }
    
    function riwayatStatus(){
        $u = new Beginning_number();
        $u->Id_murid = $this->input->post('idMurid');
        
            
            $data['judul'] = "Riwayat Status";
            $data['main'] = 'ops/riwayat_status';
            $data['status'] = $u->ambilStatus();
            $this->load->vars($data);
            $this->load->view('dashboard');
    }
    
}
