<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Db_backup extends CI_Controller {

	var $file;
	var $path;

	public function __construct() {
		parent::__construct();
		$this->load->library("form_validation");
		$this->load->helper('file');
		$this->load->helper('download');
		$this->load->helper('directory');
		$this->load->helper('url');

		$this->path = "db" . DIRECTORY_SEPARATOR . "backup"
			 . DIRECTORY_SEPARATOR;
	}

	function index() {

		$this->path = "db" . DIRECTORY_SEPARATOR . "backup"
			 . DIRECTORY_SEPARATOR;

		$d = date("[Y-m-d] [H-i-s]");//  H:i:s

		$f = "ami_backup $d".".txt";
		$this->file = $this->path . $f;

		$prefs = array(
                'format'      => 'txt',         
                'filename'    => $f,
                'add_drop'		=> TRUE,    
                'add_insert'  => TRUE,            
                'newline'     => "\n" 
              );

		$this->load->dbutil();
		$backup =& $this->dbutil->backup($prefs); 
		write_file($this->file, $backup);
		
		//force_download('ami '.date("Y-m-d H:i:s").'.zip', $backup);

		$this->session->set_flashdata('message', '<div class="alert alert-success">Database Backup successfully saved. ('.$f.')</div>');

		redirect(base_url().'administrative/backup');
	}

	function restore() {

		$filename = decrypt($this->input->get('restore'));

		$file = file($this->path . $filename);

		$s = '';
		$templine = '';

		if (!empty($file))
		{
			// Loop through each line
			foreach ($file as $line)
			{
				// Skip it if it's a comment
				if (substr(trim($line), 0, 1) != '#' || substr($line, 0 ,1) != '')
				{
					// Add this line to the current segment
					$templine .= $line;
					// If it has a semicolon at the end, it's the end of a query.
					if (substr(trim($line), -1, 1) == ';')
					{
						// Perform the query...
						if($this->db->query($templine))
						{
							// Query Success
							$s .= "<strong style='color: green;'>Successfull Query</strong>: <span class='small'>$templine</span><br/>";

							// so reset our templine so we can start a new one
							$templine = '';
						}
						else {
							$s .= "<strong style='color:red'>Unsuccessful Query:</strong> $templine<br/><br/>";
							$templine = '';
						}
					}
				}
			}//end foreach
			
			$this->session->set_flashdata('message', '<div class="alert alert-success">Database successfully restored.');
			/redirect(base_url().'administrative/backup');
			// Tell the results
			//Template::set('results', $s);
		}
		else
		{
			// Couldn't read from file.
			//Template::set_message('Could not read the file: /application/db/backups/' . $filename . '.', 'error');
			//redirect(SITE_AREA .'/developer/database/backups');
		}
		
	}

	function delete() {

		$filename = decrypt($this->input->get('delete'));

		$fh = fopen($this->path . $filename, 'w') or die("can't open file");
		fclose($fh);

		// Actually delete it.
		unlink($this->path . $filename);

		$this->session->set_flashdata('message', '<div class="alert alert-success">Backup file deleted successfully.</div>');

		redirect(base_url().'administrative/backup');
		
	}

	//---------------------------------------------------------------

	/**
	 * Browse the DB tables
	 *
	 * @access public
	 *
	 * @param string $table Name of the table to browse
	 *
	 * @return void
	 */
	public function browse()
	{
		$table = decrypt($this->input->get('tb'));
		if (empty($table))
		{
			//Template::set_message('No table name was provided.', 'error');
			redirect(base_url() .'administrative/backup');
		}

		$query = $this->db->get($table);

		if ($query->num_rows())
		{
			//Template::set('rows', $query->result());
			
			$data['rows'] = $query->result();
			$data['tablename'] = $table;
			$this->load->view('admin/table_view', $data);
		}

		//Template::set('query', $this->db->last_query());

		//Template::set('toolbar_title', lang('db_browse') .': '. $table);
		//Template::render();

	}//end browse()

}