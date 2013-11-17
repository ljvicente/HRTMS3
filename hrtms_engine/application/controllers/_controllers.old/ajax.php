<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

    function __construct() {
        
        parent::__construct();
        $this->load->model('ajax_model');
    }

    
    public function user2()
    {

        $id=$this->input->post('id');
        $this->load->model('applicant_model');
        $data = $this->applicant_model->getInfo($id);
        $this->output->set_output(json_encode($data));


    }

    public function user(){
        $id=$this->input->post('id');

        $this->db->select('*');
        $this->db->where('register_id',$id);
        $this->db->from('registration');
        $query = $this->db->get(); 
        if($query->num_rows == 1){
            $header = false;
            $output_string ='  <div class="row-fluid">
                                <div class="span6">
                            ';
           
            foreach ($query->result() as $row){
                $output_string  .=  "<table>
                                 <tr> 
                                    <td><h3>Personal Details</h3></td>
                                    <td>&nbsp;</td>
                                </tr>"; 
                $output_string .= " <tr>
                                        <td>Name: </td>
                                        <td>$row->last_name, $row->first_name $row->middle_name</td>
                                    </tr>

                                    <tr>
                                        <td>Address: </td>
                                        <td>$row->address</td>
                                        
                                    </tr>
                                  ";
                if($row->address_2 == NULL)
                {
                    $output_string .="  <td>Address 2: </td>
                                        <td><i class='muted'>none</i></td> 
                                     ";
                }
                else
                {
                    $output_string .="  <td>Address 2: </td>
                                        <td>$row->address2</td>
                                     ";
                }
                $output_string .= " 
                                    <tr>
                                        <td>City: </td>
                                        <td>$row->city</td>
                                    </tr>  
                                    <tr>
                                        <td>Province: </td> 
                                        <td>$row->province</td>
                                    </tr>
                                    <tr>
                                        <td>Country: </td>
                                        <td>$row->country</td>
                                    </tr>                               
                                    <tr>
                                        <td>Zipcode: </td>
                                        <td>$row->zipcode</td>
                                    </tr>
                                    <tr>
                                        <td>Phone: </td>
                                        <td>$row->phone</td>
                                    </tr>
                                 

                                   ";
                $output_string  .=  "<tr> 
                                    <td><h3>Account Details</h3></td>
                                    <td>&nbsp;</td>
                                    </tr>";
                $output_string  .= "<td>Username: </td>
                                        <td>$row->username</td>
                                    </tr>
                                    <tr>
                                        <td>Email Address: </td>
                                        <td>$row->email</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>&nbsp;</td>
                                    </tr>";                  
                $output_string .="<tr>
                                    <td><div class=\"bcTarget\"></div>  </td>
                                    <td></td>
                                </tr>
                                ";
                $output_string .= '</table>
                                    </div>';
                $output_string .= '<div class="span6">
                                    <h3 class="header smaller lighter blue">
                                        Documents
                                        <small>Check the available documents.</small>
                                    </h3>
                                
                                    <form>
                                    <fieldset>
                                        <div class="control-group">
                                            <label class="control-label"></label>
                         
                                            <div class="controls">
                                                <label>
                                                    <input name="" type="checkbox" class="ace ace-switch" id="checkall" />
                                                    <span class="lbl"> Check all</span>
                                                </label>
                                                <label>
                                                    <input name="documents" type="checkbox" class="ace" />
                                                    <span class="lbl"> Registraton slip</span>
                                                </label>

                                                <label>
                                                    <input name="documents" type="checkbox" class="ace" />
                                                    <span class="lbl"> Resume</span>
                                                </label>

                                                <label>
                                                    <input name="documents" class="ace" type="checkbox" />
                                                    <span class="lbl"> Diploma</span>
                                                </label>

                                                <label>
                                                    <input name="documents" class="ace" type="checkbox" />
                                                    <span class="lbl"> Form - 137</span>
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                        <button class="btn btn-success btn-block" type="submit" id="acceptApp">Accept Applicant</button>
                                    </form>
                                </div>';                    
            }                    
          
        }
        else{
            $output_string = '"There are no results for '.$id.'"';
        }
         
        echo json_encode($output_string);
    }
 
    public function gradesheetByBatch(){

        $batch=$this->input->post('batch');

       // $batch = "TS13-ASB-001";
        $this->db->select('*');
        $this->db->from('hris');
        $this->db->join('gradesheet', 'hris.trainee_id = gradesheet.training_id','left');
        $this->db->where('batch_control_no',$batch);
        $this->db->order_by("last_name", "asc"); 
        $query = $this->db->get();
        if($query->num_rows == 1){
            $header = false;    
            //$output_string = "<div class=\"box-content\">";
              
            foreach ($query->result() as $row){
                $output_string = "<h1 class=''>Gradesheet : $row->batch_control_no</h1>";
                $output_string .= "  <table class='table table-striped table-bordered'> 
                                    <thead>
                                    <tr>
                                        <th class='center'>
                                            Training ID
                                        </th>
                                        <th class='center'> Name
                                        </th>
                                        <th class='center'>
                                            Scores
                                        </th>
                                        <th  class='center'>
                                            Status
                                        </th>
                                    </tr> 
                                    </thead>
                                    
                                 ";
                $output_string .= " 
                                    <tbody>  
                                    <tr> 
                                        <td width='200px' height='10px'> $row->trainee_id</td>
                                        <td width='450px' height=''> $row->last_name, $row->first_name $row->middle_name</td>
                                        <td width='50px' class='center'> $row->scores/$row->over</td>
                                        <td width='30px' class='center'> $row->status</td>
                                    </tr>
                                    </tbody>
                                    ";
                $output_string .= "</table>";
                //$output_string .= "Record $row->last_name";
            }                    

       
          
        }
        else{
            $output_string = '"There are no results"';
            if($batch == null)
            {
                $output_string .="<br>NULL  BATCH";
            }
        } 
         
        echo json_encode($output_string);
    }
 
   

    

}

/* End of file client.php */
/* Location: ./application/controllers/client.php */ 