<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class MY_Controller extends BackendController {
		public $data;

		public function __construct()
		{
			parent::__construct();
		}


//      function sendmail($body,$email,$subject){
//         $this->email->from($email, 'KK contact message');
//         $this->email->to('kasumbap@yahoo.co.uk');
//         $this->email->subject($subject);
//         $this->email->message($body);
// 		$this->email->set_mailtype("html");
// 		return $this->email->send();
//     }
    

}