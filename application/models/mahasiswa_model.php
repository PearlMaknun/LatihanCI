<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa_model extends CI_Model {

	function create($data)
	{
		if($this->db->insert('mahasiswa', $data)){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	function view()
	{
		return $this->db->get('mahasiswa');
	}
	
}
