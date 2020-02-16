<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends MY_Model 
{
	protected $_table_name ='unclebob_users';
	protected $_primary_key = 'unclebob_admin';
	protected $_primary_filters ='intval';
	protected $_order_by = '';
	public  $rules = array(); 
	protected $_timestamps= FALSE;

	public function __construct(){
		parent::__construct();
	}

	public function getUsers(){
		return $this->get('*');
	}

	public function savePerson($data){
		return $this->saveRecord($data);
	}

	public function isLoggedIn(){
		return $this->session->userdata("isLoggedIn");
	}


	public function getAPerson($where, $toselect='*'){
		return $this->get_where($toselect, $where, true);
	}

	public function allPeople($toselect='*'){
		return $this->get($toselect);
	}

	public function allPeoplewhere($where,$toselect='*'){
		return $this->get_where($toselect, $where);
	}


	public function editPersonInfo($data, $where_clause){
		return $this->updateRecord($data, $where_clause);
	}

	public function deleteAsPerson($where_clause){
		return $this->deleteRecord($where_clause);
	}

	public function login(){
		$this->db->where("email", $this->input->post('email'));
		$fetched = $this->db->get("users");
		if($fetched->num_rows() == 1 ){
			$data=array();
			$userdata = $fetched->row();
			if (password_verify($this->input->post('password'), $userdata->password)) {
				if($userdata->status=='disabled'){
					return array("flag"=>false,"errors"=>'your Account Has Been Disabled');
				}else{

					if($userdata->role=='admin'){
					$data=array("username"=>$userdata->username,"email"=>$userdata->email,"userid"=>$userdata->userid,"role"=>$userdata->role,"loggedin"=>true);
					}else{
						$this->db->where('pharmacyid',$userdata->pham);
						$re=$this->db->get('pharmacies')->result();

						$data=array("username"=>$userdata->username,"email"=>$userdata->email,"userid"=>$userdata->userid,"role"=>$userdata->role,'pham'=>$userdata->pham,"phamname"=>$re[0]->phamname,"loggedin"=>true);
					}
						
						$this->session->set_userdata($data);
						// print_r($this->session->userdata());die();
						return array("flag"=>true);
				}
		
			}else{
				return array("flag"=>false,"errors"=>'Wrong  password provided, please try again');
			}
		}
		else{
			return  array("flag"=>false,"errors"=>'We did not find a user matching this Email, please try again');
		}
	}
}
