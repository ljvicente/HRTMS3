<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examination extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('applicant_model');
			/*$query = $this->applicant_model->trainee_list();
			$data['records'] = $query;*/

			$this->load->model("examination_model");

			$data['exams'] = $this->examination_model->list_exam_modules();

			$data['batches'] = $this->examination_model->list_batches();

			$data['sets'] = $this->examination_model->list_exam_set();
			 
			$this->load->view('user/training/examination_view',$data);
			
		}
		else {
			$this->session->set_userdata('login_type', 'employee');
    		$this->load->view('login_view');
		}	

	}

	function set_exam() {
		
		$data = array(
			'batch_id' => $this->input->post("batchid"), 	
			'set_name' => $this->input->post("examination_name"), 
			'exam_id' => $this->input->post("id"),
			'items' => $this->input->post("items"),
			'date_created' => date('Y-m-d H:i:s')
		);
		


		$this->load->model("examination_model");

		$this->examination_model->add_exam_set($data);		
	}

	function set_info() {

		
		$this->load->model("examination_model");

		$q = $this->examination_model->exam_set_info($this->input->post("id"));

		$i = 0;

		//var_dump($q);

		$str = "<table class='table table-striped'>";
		$str .= "<thead><tr><td>Module Exams Included</td><td align='right'>No. of Items</td></tr></thead>";
		//<tr><td>asdfasd</td></tr>
		foreach ($q as $row) {
			
			$str .= "<tr>";
			$str .= "<td>";
			$str .= $row->examination_name;
			$str .= "<td>";
			$str .= "".$row->items." items</td>";
			$str .= "</tr>";
			$i += $row->items;
		}
		$str .= "<tfoot><tr><td><b>TOTAL ITEMS</b></td><td align='right'><b>".$i." items</b></td></tr></tfoot>";
		$str .= "</table>";
		$str .= "<b>Date Created: </b>".$row->date_created;
		echo $str;

	}


	function toggle_activate_set() {

		$this->load->model("examination_model");
		
		if($this->input->post("action") == "activate") {

			$this->examination_model->toggle_activate_set($this->input->post("id"), array("is_active" => "1"));
		}
		else {

			$this->examination_model->toggle_activate_set($this->input->post("id"), array("is_active" => "0"));
		}
	}

	function remove_set() {

		//echo $this->input->post("id");
		$this->load->model("examination_model");
		$this->examination_model->remove_exam_set($this->input->post("id"));

	}

	function create_exam() {

		$data = array(
			'examination_name' => $this->input->post('examination_name'),
			'date_modified' => date('Y-m-d H:i:s')
		);

		$this->load->model("examination_model");
		$this->examination_model->create_exam($data);

	}

	function list_exam() {

		$this->load->model("examination_model");
		$data = $this->examination_model->list_exam();

		$str = json_encode($data);
		$str = '{ "aaData": '. $str . '}';
		echo $str;
	}

	function edit_exam($param="") {

		if($this->session->userdata('is_logged_in')) {

			if($param) {

				$data = array("eid" => $param);

				$this->session->set_userdata($data);

				$this->load->model("examination_model");
				
				$this->examination_model->name_exam();

				if($this->examination_model->is_editable_exam($param)) {

					$this->session->set_userdata('editable', '1');
				}
				else {

					$this->session->set_userdata('editable', '0');
				}
				

				$this->load->view('user/training/examination_items_view');
			}
		}
		else {
			$this->session->set_userdata('login_type', 'employee');
    		$this->load->view('login_view');
		}

	}

	function add_item() {

		$data = array(

			'question' => $this->input->post("question"),
			'answers' => $this->input->post("answers"),
			'key_answer' => $this->input->post("key_answer"),
			'question_type' => $this->input->post("question_type"),
			'exam_id' => $this->session->userdata("eid"),
			'no_of_choices' => $this->input->post("no_of_choices")

		);

		$this->load->model("examination_model");
		$this->examination_model->add_item($data);

	}

	function edit_item() {

		$this->load->model("examination_model");
		$this->examination_model->delete_item($this->input->post("id"));

		$data = array(
			'question' => $this->input->post("question"),
			'question_id' => $this->input->post("id"),
			'answers' => $this->input->post("answers"),
			'key_answer' => $this->input->post("key_answer"),
			'question_type' => $this->input->post("question_type"),
			'exam_id' => $this->session->userdata("eid"),
			'no_of_choices' => $this->input->post("no_of_choices")

		);

		$this->examination_model->add_item($data);
		echo $this->input->post("id");

	}
	
	function load_items() {

		$this->load->model("examination_model");
		$data = $this->examination_model->load_items();

		$str = json_encode($data);
		echo $str;
	}

	function take_exam() {

		$this->load->model("examination_model");
		$id = decrypt($this->session->userdata("take_exam_id"));
		$data = $this->examination_model->take_items($id);

		$str = json_encode($data);
		echo $str;

	}

	function save_adding_state() {

		$data = array(

			'qt' => $this->input->post("question_type"),
			'noc' => $this->input->post("no_of_choices")

		);

		$this->session->set_userdata($data);
	}

	function load_qt() {

		echo $this->session->userdata("qt");
	}

	function load_noc() {

		echo $this->session->userdata("noc");
	}

	function toggle_activate() {

		$this->load->model("examination_model");
		
		if($this->input->post("action") == "activate") {

			$this->examination_model->toggle_activate($this->input->post("id"), array("is_active" => "1"));
		}
		else {

			$this->examination_model->toggle_activate($this->input->post("id"), array("is_active" => "0"));
		}
	}

	function toggle_activate_all() {

		$this->load->model("examination_model");
		
		if($this->input->post("action") == "activate") {

			$this->examination_model->toggle_activate_all(array("is_active" => "0"));
		}

	}

	function rename_exam() {

		$this->load->model("examination_model");

		echo $this->input->post("id"). " " . $this->input->post("rename");

		$this->examination_model->rename_exam($this->input->post("id"), array("examination_name" => $this->input->post("rename")));
		
	}

	function delete_exam() {

		$this->load->model("examination_model");
		$this->examination_model->delete_exam($this->input->post("id"));
	}

	function delete_item() {

		$this->load->model("examination_model");
		echo $this->input->post("id");
		$this->examination_model->delete_item($this->input->post("id"));

	}

	function submit_answers() {
		
		$this->load->model("examination_model");
		$data = $this->examination_model->check_items();

		$this->validate_answers($data);
	}

	function validate_answers($data) {

		$div = "~/&^%-";
		$c = 0; //items
		$d = 0;

		foreach ($data as $row) {	

			$j = (string)$row->question_id; //get question_id

			//CHECK MULTIPLE
			if($row->question_type=='4') {

				$c++;
				$ans = "";

				//echo $row->question;
				for ($i=0; $i < $row->no_of_choices; $i++) { 
					
					$k = (string)($i + 1);

					//skip blank checkbox
					if(trim($this->input->post($j.'_'.$k))=="") {

						continue;
					}

					$ans .= $this->input->post($j.'_'.$k).$div;

				}

				if($ans == $row->key_answer) {

					//echo "Your answer on question no. ".$c." is correct\n";
					$this->item_record(1, 1, $j);

					$d++;

					//do something
				}
				else {

					//echo "Your answer on question no. ".$c." is wrong\n";
					$this->item_record(0, 1, $j);
				}

			}
			//MULTIPLE CHOICE, TRUE OR FALSE AND IDENTIFICATION
			else {

				$c++;
				$ans = $this->input->post($j);

				if(trim($ans) == trim($row->key_answer)) {

					//echo "Your answer on question no. ".$c." is correct\n";
					$this->item_record(1, 1, $j);
					$d++;
				}
				else {

					//echo "Your answer on question no. ".$c." is wrong\n";
					$this->item_record(0, 1, $j);
				}
			}

		} //end foreach

		//echo "Score: ".$d."/".$c."\n";

		$status = "passed";

		if(floatval($d/$c) < 0.75) {

			$status = "failed";
		}

		$this->load->model("examination_model");
		
		$is_took = $this->examination_model->update_score($d, $c, $status);
		
		if($is_took) {

			echo "true";
		}
		
	}

	function item_record($correct = 0, $taker = 1, $id) {

		$this->db->query('UPDATE questions SET no_got_correct = no_got_correct + '.$correct.', no_of_takers = no_of_takers + '.$taker.' WHERE question_id="'.$id.'"');
	}

	function _cheat() {

		$this->load->model("examination_model");
		$data = $this->examination_model->_cheat();

		var_dump($data);

	}

}

/* End of file examination.php */
/* Location: ./application/controllers/examination.php */

