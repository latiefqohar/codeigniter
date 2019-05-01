<?php
 Class Form extends CI_controller
 {
     function __construct(){
         parent:: __construct();
         $this->load->library('form_validation');//load library

     }

     function index(){
         $this->load->view('v_form');
         
     }

     function aksi(){//fungsi jika tombol simpan apada form v_form ditekan 
         $this->form_validation->set_rules('nama','Nama','required');//aturan parameter pertama nama dari input, kedua: kata yang muncul, ketiga isi aturan form.
         $this->form_validation->set_rules('emanil','Email','required');
         $this->form_validation->set_rules('konfir_email', 'Konfirmasi_email', 'required');
         
         
         if ($this->form_validation->run() != false) {
             echo "FORM validation OK";
         } else {
             $this->load->view('v_form');
             
         }
         
     }
 }
?>