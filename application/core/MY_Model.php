<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model{

	protected $_table_name = '';
	protected $_primary_key = '';
	protected $_primary_filters ='intval';
	protected $_order_by = '';
	public    $rules = array(); //able to load it inside a controller
	protected $_timestamps= FALSE;

	public function __construct(){
		parent::__construct();
	}

	public function get($what){
		$this->db->select($what);
		$result = $this->db->get($this->_table_name)->result();
		$total = count($result);
		if($total > 0 ){
			return $result;
		}else{
			return array();
		}

	}

	public function get_where($what, $where, $single=FALSE){
		$this->db->select($what);
		$this->db->where($where);
		if($single == TRUE){
			$method = 'row';
		}else{
			$method = 'result';
		}
		return $this->db->get($this->_table_name)->$method();
	}

	//method for creating a record.. takes an associative array as a paremeter.
	public function saveRecord($data=array()){ 

		//checking if the array is not empty
		if(count($data) != 0 ){ 
			$this->db->set($data);
			$this->db->insert($this->_table_name);
			$insert_id = $this->db->insert_id();
			return array("flag"=>TRUE, "msg"=>"Data was successfully inserted", "inser_id"=>$insert_id);
		}else{
			return array("flag"=>FALSE, "msg"=>"Data array provided is empty");
		}
	}

	public function deleteRecord($where_clause){

		if(!empty($where_clause)){
			$this->db->where($where_clause);
			$this->db->delete($this->_table_name);
			return array("flag"=>TRUE, "msg"=>"the record was deleted");
		}else{
			return array("flag"=>FALSE, "msg"=>"where_clause provided is empty");	
		}
	}

	public function updateRecord($data=array(), $where_clause){

		if ( !empty($where_clause) && (count($data)!= 0)){
			$this->db->set($data);
			$this->db->where($where_clause);
			$this->db->update($this->_table_name);
			return array("flag"=>TRUE, "msg"=>"the record was updated");
		}else{
			return array("flag"=>FALSE, "msg"=>"where_clause provided is empty or the data array  is empty");	
		}

	}

	public function makejoin($what, $tbale, $table_one, $join_condition, $where){
			$this->db->select($what);
			$this->db->from($tbale);
			$this->db->join($table_one, $join_condition);
			$this->db->where($where);
			return $this->db->get()->result();
	}


	

}