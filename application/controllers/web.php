<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Web extends CI_Controller
 {
     function construct(){
         parent:: construct();
         $this->load->helper('url');//mengaktifkan helper url agar dapat menggunakan base_url()
     }
     
     public function index(){ //membuat fungsi index. fungsi ini yang akan ditampilkan awal saat controller web dipanggil
         $data['judul']="halaman depan";//menyimpan stringg "halaman depan " pada array $data['judul']
         $this->load->view('v_header',$data);//memanggil view v_header dan mengirimkan data $data;
         $this->load->view('v_index',$data);//memanggil view v_index dan mengirimkan data $data;
         $this->load->view('v_footer',$data);//memanggil view v_footer dan mengirimkan data $data;
     }

     public function about(){//membuat fungsi about untuk memanggil di url web/about
        $data['judul']="halaman About"; //menyimpan stringg "halaman about " pada array $data['judul']
        $this->load->view('v_header',$data);//memanggil view v_header dan mengirimkan data $data;
        $this->load->view('v_about',$data);//memanggil view v_about dan mengirimkan data $data;
        $this->load->view('v_footer',$data);//memanggil view v_footer dan mengirimkan data $data;
    }
 
 }


 
?>