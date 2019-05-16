<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_data');
			
	}
	
	public function index()
	{
		$this->load->database();
		$jumlah_data=$this->m_data->jumlah_data();
		$this->load->library('pagination');
		$config['base_url']= base_url().'welcome/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page']=5;
		$from=$this->uri->segment(3);
		$this->pagination->initialize($config);	
		$data['user']= $this->m_data->data($config['per_page'],$from);
		$this->load->view('pagination/v_data', $data);
			
		// $this->load->database(); $jumlah_data = $this->m_data->jumlah_data(); $this->load->library('pagination'); $config['base_url'] = base_url().'index.php/welcome/index/'; $config['total_rows'] = $jumlah_data; $config['per_page'] = 10; $from = $this->uri->segment(3); $this->pagination->initialize($config); $data['user'] = $this->m_data->data($config['per_page'],$from); $this->load->view('pagination/v_data',$data);
	}
}
