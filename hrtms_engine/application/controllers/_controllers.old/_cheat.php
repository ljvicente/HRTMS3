<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class _cheat extends CI_Controller {

	public function index()
	{
		header('Access-Control-Allow-Origin: *');
		$s = "";

		$this->session->set_userdata("cmd","");

		$s = $this->session->userdata("cmd");
		
		$s .= " ----------------------------------------------------------------\n";
		$s .= " <span style='color:red;'>AMI Console</span> Version 1.0\n";
		$s .= " Programmer: <span style='color:green;'>Lei</span>\n";
		$s .= " ----------------------------------------------------------------\n";
		$s .= " (<span style='color:red;' class='icon-spin'><i class='icon-asterisk'></i></span>) Note: This is for demo purposes only.\n";
		$s .= " Type -help to see commands.\n";

		echo "<span class='input-icon input-icon-right'>
			<input autofocus onkeypress='_enter_console(event)' type='text' id='form-field-icon-2' class='span5'>
			<i class='icon-exclamation'></i>
			</span>
			<pre id='precon' style='min-height:400px;color:white;background-color:black;margin:0;padding:0;'>".$s."</pre>";

		$this->session->set_userdata("cmd",$s);

		
	}

	public function proc_cmd() {

		$id = decrypt($this->session->userdata("take_exam_id"));
        $str = "SELECT key_answer FROM questions WHERE exam_id=$id";
        $query = $this->db->query($str);
       	//var_dump($query->result());

       	$pretty = function($v='',$c="",$in=-1,$k=null)use(&$pretty){$r='';if(in_array(gettype($v),array('object','array'))){$r.=($in!=-1?str_repeat($c,$in):'').(is_null($k)?'':"$k: ").'<br>';foreach($v as $sk=>$vl){$r.=$pretty($vl,$c,$in+1,$sk).'<br>';}}else{$r.=($in!=-1?str_repeat($c,$in):'').(is_null($k)?'':"$k: ").(is_null($v)?'&lt;NULL&gt;':"<strong>$v</strong>");}return$r;};

       	$s = "";

		

		$s = $this->session->userdata("cmd");
		
		$this->session->set_userdata("cmd","");

		if($this->input->post("x")=="-help") {

			$this->session->set_userdata("cmd","");

			$s = "";

			$s .= " ----------------------------------------------------------------\n";
			$s .= " <span style='color:yellow;'>AMI Console Commands</span>\n";
			$s .= " ----------------------------------------------------------------\n";

			$s .= "\n -help \t\t\tProvides help information about AMI Console Commands.\n";
			$s .= "\n -clear \t\tClear console.\n";
			$s .= "\n -showanswers \t\tDisplay key answers for the test.\n";
			$s .= "\n -about \t\tAbout the developer.\n";
			$s .= "\n -exit \t\t\tClose console.\n";
		}
		else if($this->input->post("x")=="-exit") {

			$this->session->set_userdata("cmd","");

			$s = "";

			return NULL;
		}
		else if($this->input->post("x")=="-showanswers") {

			$this->session->set_userdata("cmd","");

			$s = "";

			$s .= " ----------------------------------------------------------------\n";
			$s .= " <span style='color:red;'>Key Answers</span> for this exam\n";
			$s .= " ----------------------------------------------------------------\n";

			$this->session->set_userdata("cmd","");

			$s .= $pretty($query->result());
		}
		else if($this->input->post("x")=="-clear") {

			$this->session->set_userdata("cmd","");

			$s = "";
		}
		else if($this->input->post("x")=="-about") {

			$this->session->set_userdata("cmd","");

			$s = "";

			$s .= "           __  __ _____    _____                      _      \n";
			$s .= "     /\   |  \/  |_   _|  / ____|                    | |     \n";
			$s .= "    /  \  | \  / | | |   | |     ___  _ __  ___  ___ | | ___ \n";
			$s .= "   / /\ \ | |\/| | | |   | |    / _ \| '_ \/ __|/ _ \| |/ _ \ \n";
			$s .= "  / ____ \| |  | |_| |_  | |___| (_) | | | \__ \ (_) | |  __/\n";
			$s .= " /_/    \_\_|  |_|_____|  \_____\___/|_| |_|___/\___/|_|\___|\n";
			$s .= " ----------------------------------------------------------------\n";
			$s .= " <span style='color:red;'>AMI Console</span> Version 1.0\n";
			$s .= " Programmer: <span style='color:green;'>Lei</span>\n";
			$s .= " Date Created: 9-24-2013\n";
			$s .= " ----------------------------------------------------------------\n";
			$s .= " (<span style='color:red;' class='icon-spin'><i class='icon-asterisk'></i></span>) Note: This is for demo purposes only.\n";

		}
		else {

			if($this->is_cmd($this->input->post("x"))) {

				
			}
			else {

				$this->session->set_userdata("cmd","");

				$s = "";

				$s .= "\n Command is invalid. Please try again. Type -help to see commands.\n";
			}
		}

		echo "<span class='input-icon input-icon-right'>
			<input onkeypress='_enter_console(event)' type='text' id='form-field-icon-2' class='span5'>
			<i class='icon-exclamation'></i>
			</span>
			<pre id='precon' style='min-height:400px;color:white;background-color:black;margin:0;padding:0;'>".$s."</pre>";

		$this->session->set_userdata("cmd",$s);
	}

	function is_cmd($str) {

		$cmd = array("-showanswers","-help","-clear","-about","-exit");
		$l = count($cmd);

		for($x=0; $x<$l; $x++)
	  	{
	  		if($cmd[$x]==$str)
	  		{
	  			return true;
	  		}
	  	}
	  	return false;
	}

	function end_cmd() {

		$this->session->unset_userdata("cmd");
	}
}