<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasumba extends MY_Controller 
{

	public function Index()
	{	
		$this->load->view('index.php',$this->data);	
	}

	public function About(){
		$this->load->view('about.php');
	}


	public function Home(){
		$this->load->view('index.php', $this->data);
	}

	public function Contact(){
		$this->load->view('contact.php', $this->data);
	}

	public function Practice(){
		$this->load->view('arbitration.php');
	}

	public function Commercial(){
		$this->load->view('commercial.php');
	}

	public function International(){
		$this->load->view('international.php');
	}

	public function Banking(){
		$this->load->view('banking.php');
	}

	public function Arbitration(){
		$this->load->view('arbitration.php');
	}

	public function Insurance(){
		$this->load->view('insurance.php');
	}
	public function Litigation(){
		$this->load->view('litigation.php');
	}
	
	public function Leasing(){
		$this->load->view('leasing.php');
	}
	
	public function Privatization(){
		$this->load->view('privatization.php');
	}

	public function Taxation(){
		$this->load->view('taxation.php');
	}

	
	public function Team(){
		$this->load->view('team.php');
	}

		
	public function Profile(){
		$this->load->view('profile.php');
	}
	public function Profile2(){
		$this->load->view('profile2.php');
	}
	public function Profile3(){
		$this->load->view('profile3.php');
	}
	public function Profile4(){
		$this->load->view('profile4.php');
	}
	public function Profile5(){
		$this->load->view('profile5.php');
	}
	public function Profile6(){
		$this->load->view('profile6.php');
	}
	public function Profile7(){
		$this->load->view('profile7.php');
	}
	public function Profile8(){
		$this->load->view('profile8.php');
	}
	public function Profile9(){
		$this->load->view('profile9.php');
	}
	public function Profile10(){
		$this->load->view('profile10.php');
	}
	public function Profile11(){
		$this->load->view('profile11.php');
	}
	public function Profile12(){
		$this->load->view('profile12.php');
	}



	public function sendcontactus(){
		$res=$this->sendmail($this->input->post('note'),$this->input->post('email'),'KK Advocates contact form');
		echo json_encode($res);
	}
}


