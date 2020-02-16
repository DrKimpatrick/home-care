<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nsambya extends MY_Controller 
{
	


	public function Index()
	{	
		$data = array(
			'title' => 'My Title',
			'heading' => 'My Heading',
			'message' => 'My Message'
		);
		$this->load->view('index.php', $data);	
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
	public function Profile(){
		$this->load->view('profile.php');
	}
	public function Services(){
		$this->load->view('services.php');
	}

	public function sendcontactus(){
		$res=$this->sendmail($this->input->post('note'),$this->input->post('email'),'KK Advocates contact form');
		echo json_encode($res);
	}
}


