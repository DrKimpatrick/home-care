<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nsambya extends MY_Controller 
{
	
	
	public function Index()
	{	
	
		$this->load->view('index.php');	
	}

	public function About(){
		$this->load->view('about.php');
	}

	public function Home(){
		$this->load->view('index.php');
	}

	public function Contact(){
		$this->load->view('contact.php');
	}
	public function Team(){
		$this->load->view('team.php');
	}	
	public function Profile($id=1){
		$userData = '[
			{
				"_id": 1,
				"name": "kimanje patrick",
				"title": "title",
				"image": "path",
				"phone": "+256736536353",
				"email": "email@gmail.com",
				"address": "address",
				"overview": "overview",
				"facebook": "",
				"twitter": "",
				"instagram":""
			},
			{
				"_id": 1,
				"name": "solo patrick",
				"title": "title",
				"image": "path",
				"phone": "+256736536353",
				"email": "email@gmail.com",
				"address": "address",
				"overview": "overview",
				"facebook": "",
				"twitter": "",
				"instagram":""
			}
		]';
		
		
		$cleanarray =json_decode($userData);
		if(is_string($id) || is_numeric(id)== false){
			$id = 1;
		}
		if($id > 4){
			$id = 1;
		}
		$profdata = $cleanarray[$id-1];
	
		$this->load->view('profile.php', $profdata);
	}
	public function Services(){
		$this->load->view('services.php');
	}

	public function sendcontactus(){
		$res=$this->sendmail($this->input->post('note'),$this->input->post('email'),'KK Advocates contact form');
		echo json_encode($res);
	}
}


