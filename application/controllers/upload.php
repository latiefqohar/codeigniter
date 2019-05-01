<?php
 class Upload extends CI_Controller
 {
     function __construct(){
         parent:: __construct();
         $this->load->helper(array('form','url'));//memanggil helper form dan url
         
     }

     public function index(){
         $this->load->view('v_upload',array('error'=>''));
         
     }
     public function aksi_upload(){
         $config['upload_path'] = './gambar/';//tempat upload file ada di root/gambar/
        $config['allowed_types'] ='jpeg|jpg|png';//type yang diperbolehkan
        $config['max_size']     = 100;//ukuran maksimal
        $config['max_width']    = 1024;//lebar maksimal
        $config['max_height']  =1024;//tinggi maksimal
        $this->load->library('upload', $config);//menjalankan library upload
        if(! $this->upload->do_upload('berkas')){//jika tombol berkas tidak berhasil di upload
            $error = array('error' => $this->upload->display_errors()); //pesan error disimpan dalam variable error 
            $this->load->view('v_upload', $error);//tampilkan error ke view v upload
        }else{
            $data = array('upload_data' => $this->upload->data()); //parsing data foto disimpan di variable $data
            //$this->load->view('v_upload_sukses', $data); //parsing data
            echo "sukses";//menampilkan sukses di aksi ini
        }
        
     }
 } 
?>