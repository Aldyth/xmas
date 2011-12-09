<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class COba extends CI_Controller {
		
	public function __construct()
	{
		parent ::__construct();
		
	}
	
	public function ket($view)
	{
		$data['footer'] = 'Tugas Desain Pengolahan Web 2011.</br> Sistem Informasi - UPH Surabaya.';
		
		
		$this->load->view($view,$data);
	}
	public function index()
	{
		$this->load->view("vcoba");
	}
	
	public function artikel()
	{
		$this->ket("view_artikel");
	}
	public function gallery()
	{
		$this->ket("view_gallery");
	}
	public function kontak()
	{
		$this->ket("view_kontak");
	}
	public function sitemap()
	{
		$this->ket("view_sitemap");
	}
	
	public function artikel1()
	{
		$this->ket("view_artikel1");
	}
	public function artikel2()
	{
		$this->ket("view_artikel2");
	}
	public function artikel3()
	{
		$this->ket("view_artikel3");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */