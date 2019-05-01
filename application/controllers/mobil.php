<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Mobil extends CI_Controller
{
    public function warna()
    {
        echo "Mobil itu berwarna". $this->uri->segment('3');//mengambil segmen ke 3 pada url dan menampilkan ke halaman
    }
}
