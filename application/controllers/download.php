<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Download extends CI_Controller
 {
     
     public function __construct()
     {
         parent::__construct();
         $this->load->helper(array('url','download'));//memanggil helper url dan download
         
         
     }
     
     public function index(){
         //$data['title']="DOWNLOAD";
         //$this->load->view('v_header', $data);
         $this->load->view('v_download');// menjalankan view v_download
         //$this->load->view('v_footer', $data);
         
     }
     public function lakukan_download(){
         force_download('gambar/Tangerang.png',NULL);//proses download file tangeraang.png pada folder gambar
     }
     
 }
 
?>