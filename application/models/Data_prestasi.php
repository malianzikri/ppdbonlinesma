<?php

class Data_prestasi extends CI_Model {

	/**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }
    /**
    * Store the new item into the database
    * @param array $data - associative array with data to store
    * @return boolean 
    */
    function add_data_prestasi($data,$email)
    {
    	
	      $this->db->set('email', $email);
	      $this->db->insert('data_prestasi',$data);
	   
    	
	}

	 public function get_data_prestasi_by_email($email)
    {
		$this->db->select('*');
		$this->db->from('data_prestasi');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result_array(); 
    }
    
}

