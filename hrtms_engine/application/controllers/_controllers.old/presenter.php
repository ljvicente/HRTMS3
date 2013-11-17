<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Presenter extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('client_model');
			$query = $this->client_model->list_company();
			$data['client_record'] = $query;
	
			$this->load->view('user/training/presenter_view',$data);
		}
		else {

    		$this->load->view('login_view');
		}	
	}

	function list_module($param="") {

		if($this->input->post('ajax')) {

			$this->load->model('Presenter_model');

			$data = $this->Presenter_model->list_module($param);

			$str = json_encode($data);
			echo $str;

		}
		else {

			echo ":(";
			

		}

	}

	function list_file() {

		if($this->input->post('ajax')) {

			$this->load->model('Presenter_model');

			$data = $this->Presenter_model->list_file($this->input->post("company_name"),$this->input->post("module_name"));

			$str = json_encode($data);
			echo $str;

		}
		else {

			echo ":(";
			
		}

	}
}

/* End of file presenter.php */
/* Location: ./application/controllers/presenter.php */