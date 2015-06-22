<?php 

	class firms_model extends CI_Model{

		function __construct(){
			parent::__construct();
		}

		function firms_list($query1,$query2){
			$query = $this->db->get('auditfirms', $query1, $query2);
			return $query->result_array(); 
		}

		function view_firm(){
			$id = $this->uri->segment(3);
			$this->db->where('firm_id',$id);
			$query=$this->db->get('auditfirms');
			return print_r(json_encode($query->row()));
		}

		function get_search($search){
			$query = "SELECT * FROM auditfirms WHERE firm_name LIKE '%$search%' 
						OR partners LIKE '%$search%' 
						OR address1 LIKE '%$search%' 
						OR address2 LIKE  '%$search%' 
						OR address3 LIKE '%$search%' 
						OR city LIKE '%$search%' 
						OR telephone LIKE '%$search%' 
						OR email LIKE '%$search%' LIMIT 10";			
			$res =  $this->db->query($query)->result_array();
			return $res;
		}

		function get_advanced($address2,$partners,$typeofirm){
            $query = $this->db->query("SELECT * FROM auditfirms WHERE address2 like '%".$address2."%' AND partners like '%".$partners."%' AND typeofirm like '%".$typeofirm."%'");            
            return $query->result_array();
	          
 		}
	}
