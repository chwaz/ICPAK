<?php 
	
	class firms extends CI_Controller{

		public $data;

		function __construct(){
			parent::__construct();
			$this->load->model('firms_model');
			$this->load->library('pagination');
		}

		function index(){
			$data['title'] = 'ICPAK | Firms List';
			$this->load->library('pagination');

				$config['base_url'] = 'http://localhost/icpak/index.php/firms/index';
				$config['total_rows'] = $this->db->get('auditfirms')->num_rows();
				$query1 = $config['per_page'] = 10;
				$query2 = $config['uri_segment'] = 3;
				$config['num_links'] = 5;
				$config['full_tag_open'] = '';
				$config['full_tag_close'] = '';
				$config['cur_tag_open'] = '<span class="current_page">';
				$config['cur_tag_close'] = '</span>';
				$config['anchor_class'] = 'class="btn btn-default current_page" ';
				
				$this->pagination->initialize($config);				
				
				$data['firms_records'] = $this->firms_model->firms_list($query1,$query2);	

				$this->load->view('index/index', $data);
		}

		function view(){
			$this->firms_model->view_firm();
		}

		function search(){
			$search = $this->input->post('search');
			// $this->load->library('pagination');

			// 	$config['base_url'] = 'http://localhost/icpak/index.php/firms/search';
			// 	$config['total_rows'] = $this->firms_model->get_search($search)->num_rows();
			// 	$query1 = $config['per_page'] = 10;
			// 	$query2 = $config['uri_segment'] = 3;
			// 	$config['num_links'] = 5;
			// 	$config['full_tag_open'] = '';
			// 	$config['full_tag_close'] = '';
			// 	$config['cur_tag_open'] = '<span class="current_page">';
			// 	$config['cur_tag_close'] = '</span>';
			// 	$config['anchor_class'] = 'class="btn btn-default current_page" ';
				
			// 	$this->pagination->initialize($config);
			$data['results'] = $this->firms_model->get_search($search);
			$this->load->view('index/results', $data);
		}

		function advanced(){
			// $this->load->library('pagination');

			// 	$config['base_url'] = 'http://localhost/icpak/index.php/firms/advanced';
			// 	$config['total_rows'] = $this->firms_model->get_advanced($address2,$partners,$typeofirm)->num_rows();
			// 	$query1 = $config['per_page'] = 10;
			// 	$query2 = $config['uri_segment'] = 3;
			// 	$config['num_links'] = 5;
			// 	$config['full_tag_open'] = '';
			// 	$config['full_tag_close'] = '';
			// 	$config['cur_tag_open'] = '<span class="current_page">';
			// 	$config['cur_tag_close'] = '</span>';
			// 	$config['anchor_class'] = 'class="btn btn-default current_page" ';
				
			// 	$this->pagination->initialize($config);
			$address2 = $this->input->post('address2');
			$partners = $this->input->post('partners');
			$typeofirm = $this->input->post('typeofirm');

			$data['advanced'] = $this->firms_model->get_advanced($address2,$partners,$typeofirm);
			$this->load->view('index/advanced', $data);
		}
	}