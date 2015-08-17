<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index(){

		$this->home();
		
		
	}
	public function home(){
		$this->load->model("model_get");
		$data["results"]=$this->model_get->getData("home");
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_home",$data);
		$this->load->view("site_footer");

	}
	
	public function about(){
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_about");
		$this->load->view("site_footer");
	}
	public function contact(){
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_contact");
		$this->load->view("site_footer");
	}
	
}