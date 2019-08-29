<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class MY_Controller extends BackendController {
		public $data;

		public function __construct()
		{
			parent::__construct();
		}

	//this function redirects to the controllers that the logged in user corresponds to
	//takes in the user category from the logged in user session
        // function user_is_logged_in($role)
        // {
        //     if(($this->session->userdata('loggedin')) && ($this->session->userdata('role')!=$role)){
        //      $this->SessionRedirector();
        //     }
        // }

		// function SessionRedirector(){
    	// switch ($this->session->userdata('role')) {
    	// 	case 'admin':
    	// 		redirect(base_url().'Admindashboard');
    	// 		break;
		// 	case 'data_entrant':
    	// 		redirect(base_url().'Entrantscontroller');
    	// 		break;
    	// 	default:
        //     $this->session->sess_destroy();
    	// 		redirect(base_url());
    	// 		break;
    	// }
    // }


     function sendmail($body,$email,$subject){
        $this->email->from($email, 'KK contact message');
        $this->email->to('kasumbap@yahoo.co.uk');
        $this->email->subject($subject);
        $this->email->message($body);
		$this->email->set_mailtype("html");
		return $this->email->send();
    }
    

}