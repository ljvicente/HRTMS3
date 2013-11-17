   <!-- Gender -->

                        <label>Gender</label>
                        <div class="form-inline">
                        <label >
                  <input type="radio" value="Male"  name="gender" <?php if($row->gender=='Male') echo 'checked'; else echo 'disabled';?>>
                  <span class = "lbl">Male</span> 
                  </label>
                  <label >&nbsp;
                  <input type="radio" value="Female"  name="gender"  <?php if($row->gender=='Female') echo 'checked'; else echo 'disabled';?>>
                  <span class = "lbl">Female</span>
                </label>
                        </div>
                        
                    <!-- end of Gender -->
                    <!-- allergy -->  
                    <br>
                     <label>If allergic to anything - food, medicine, others - please specify below</label>
                     <input type="text" class="input-medium" name = "allergy"  value="<?php echo $row->allergy;?>">
                    <!-- end of allergy -->
                    <br><br>
                    <!-- Citizenship / Civil Status / Height / Weight / Blood Type / Religion / Home & Mobile No. -->
                        <label>Citizenship &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; &nbsp; &nbsp;Civil Status</label>
                        <input type="text" class="input-medium" name = "citizenship" value="<?php echo $row->citizenship;?>">
                        <select id="" name = "civil_status">
                          <option disabled = "disabled" selected = "selected" value="">Select Status..</option>
                          <option value = "Single" <?php if($row->civil_status=='Single') echo 'selected';?>>Single</option>
                          <option value = "Married" <?php if($row->civil_status=='Married') echo 'selected';?>>Married</option>
                          <option value = "Separated" <?php if($row->civil_status=='Separated') echo 'selected';?>>Separated</option>
                          <option value = "Widowed" <?php if($row->civil_status=='Widowed') echo 'selected';?>>Widowed</option>
                          <option value = "Divorced" <?php if($row->civil_status=='Divorced') echo 'selected';?>>Divorced</option>
                        </select>
                        <label>Height
                          <i>(cm)</i> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Weight
                          <i>(kg)</i> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Blood Type</label>
                        <input type="text" class="input-medium" name = "height" value="<?php echo $row->height;?>">
                        <input type="text" class="input-medium" name = "weight" value="<?php echo $row->weight;?>">
                        <select name = "blood_type">
                          <option disabled = "disabled" selected = "selected" value="">Select Blood Type...</option>
                          <option value = "A" <?php if($row->blood_type=='A') echo 'selected';?>>A</option>
                          <option value = "B" <?php if($row->blood_type=='B') echo 'selected';?>>B</option>
                          <option value = "O" <?php if($row->blood_type=='O') echo 'selected';?>>O</option>
                          <option value = "AB" <?php if($row->blood_type=='AB') echo 'selected';?>>AB</option>
                        </select>
                        <label for="religion" >Religion</label>
                          <input type="text" class="input-medium" id="religion"  name = "religion" value="<?php echo $row->religion;?>">
                        <label>Home Tel. No. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; Mobile no. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; &nbsp; &nbsp; Alternate Contact No.</label>
                          <input class="input-mask-tel input-medium" type="text" id="" name="home_no" value="<?php echo $row->home_no;?>" />
                          <input class="input-mask-phone input-medium" type="text" id="" name="mobile_no" value="<?php echo $row->mobile_no;?>" />
                          <input class="input-mask-alt input-medium" type="text" id="" name="alternative_no" value="<?php echo $row->alternative_no;?>" />
                    <!-- End of Citizenship / Civil Status / Height / Weight / Blood Type / Religion / Home & Mobile No. -->
                    <!-- Employee Address -->
                        <label>Present Home Address &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; City &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; Province</label>
                          <input type="text" class="input-xlarge" name="present_address" value="<?php echo $row->present_address;?>">&nbsp;
                          <input type="text" class="input-large" name="present_city" value="<?php echo $row->present_city;?>">&nbsp;
                          <input type="text" class="input-large" name="present_province" value="<?php echo $row->present_province;?>">&nbsp;
                          <label>Provincial Address</label>
                        <label>
                <input type="checkbox" class="ace" name="sameashome" value="checkbox" onClick="sameadd(this.form);">
                <span class="lbl"> <i>Same As Present Home Address</i></span>
              </label>
                          <label class="checkbox">
                           
                            <span>Address &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; City &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; Province
                            </span>
                          </label>
                            <input type="text" class="input-xlarge" name="provincial_address" value="<?php echo $row->provincial_address;?>">&nbsp;
                            <input type="text" class="input-large" name="provincial_city" value="<?php echo $row->provincial_city;?>">&nbsp;
                            <input type="text" class="input-large" name="provincial_province" value="<?php echo $row->provincial_province;?>">&nbsp;
                          
                          <label>Mailing Address</label>
                           <label>
                <input type="checkbox" class="ace" name="sameashome2" value="checkbox" onClick="sameadd2(this.form);">
                <span class="lbl"> <i>Same As Present Home Address</i></span>
              </label>
                          <label class="checkbox">
                          
                            Address &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; City &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; Province
                          </label>
                            <input type="text" class="input-xlarge" name ="mailing_address" value="<?php echo $row->mailing_address;?>">&nbsp;
                            <input type="text" class="input-large" name ="mailing_city" value="<?php echo $row->mailing_city;?>">&nbsp;
                            <input type="text" class="input-large" name ="mailing_province" value="<?php echo $row->mailing_province;?>">&nbsp;
                    <!-- End of Employee Address -->
                    <!-- Parents Information -->
                      <!-- Father's Information -->
                           <div class="control-group">
                            <label class="control-label">
                              <b>Employee's Father's Information</b> 
                            </label>
                              <div class="controls">
                                <label for="father_name">Full Name</label>
                                <input type="text" class="input-xlarge" id="father_name" name ="father_name" value="<?php echo $row->father_name;?>">
                                <label for="father_age">Age</label>
                                <input type="text" class="input-mini" id="father_age" name="father_age" value="<?php echo $row->father_age?>">
                                <label for="father_occupation" >Occupation</label>
                                <input type="text" class="input-xlarge" id="father_occupation"  name ="father_occupation" value="<?php echo $row->father_occupation;?>">
                               
                                <label for="father_emp_loc" >Address/Location of Employment</label>
                                <input type="text" class="input-xxlarge"  id="father_emp_loc" name = "father_occupation_address" value="<?php echo $row->father_occupation_address;?>">
                                <label for="father_address" >Home Address</label>
                                <label>
                <input type="checkbox" class="ace" name="sameasfather" value="checkbox" onClick="sameaddfather(this.form);">
                <span class="lbl"> <i>Same As Present Home Address</i></span>
                  </label>
                                <input type="text" class="input-xxlarge"  id="father_address" name ="father_address" value="<?php echo $row->father_address;?>">
                                <label for="father_contact" >Contact No.</label>
                                <input type="text" class="input-mask-phone input-medium" id="father_contact"  name ="father_contact_no" value="<?php echo $row->father_contact_no;?>"> 
                              </div>
                            </div>
                        <!-- End of Father's Information -->
                        <!-- Mother's Information -->
                            <div class="control-group">
                              <label class="control-label">
                                <b>Employee's Mother's Information</b> 
                              </label>
                                <div class="controls">
                                  <label for="mother_name">Full Name</label>
                                  <input type="text" class="input-xlarge" name = "mother_name" id="mother_name"value="<?php echo $row->mother_name;?>">
                                  <label for="mother_age" >Age</label>
                                  <input type="text" name = "mother_age"  id="mother_age" value="<?php echo $row->mother_age;?>">
                                  <label for="mother_occupation" >Occupation</label>
                                  <input type="text" class="input-large" id="mother_occupation" name = "mother_occupation"  value="<?php echo $row->mother_occupation;?>">
                                  <label for="mother_emp_loc" >Address/Location of Employment</label>
                                  <input type="text" class="input-xxlarge" id="mother_emp_loc" name = "mother_occupation_address" value="<?php echo $row->mother_occupation_address;?>">
                                  <label for="mother_address" >Home Address</label>
                                  <label> 
                  <input type="checkbox" class="ace" name="sameasmother" value="checkbox" onClick="sameaddmother(this.form);">
                    <span class="lbl"> <i>Same As Present Home Address</i></span>
                    </label>
                                   <input type="text" class="input-xxlarge"  id="mother_address" name = "mother_address"  value="<?php echo $row->mother_address;?>">
                                  <label for="mother_contact" >Contact No.</label>
                                  <input type="text" class="input-mask-phone input-medium" id="mother_contact" name = "mother_contact_no"  value="<?php echo $row->mother_contact_no;?>"> 
                                   
                                </div>
                            </div>
                        <!-- End of Mother's Information -->
                      <!-- End of Parents Information -->
                      
                      <!--Skills-->
                       
                              <div class="control-group wrapper">
                              <small class="muted" >Enter for another input</small>
                  <label class="control-label" for="skills">Skills</label>
                  <div class="controls">
                  <input class="" id="skills" name="skills" value="<?php echo $row->skills;?>">
                  </div>
                  <label class="control-label" for="hobbies">Hobbies</label>
                  <div class="controls">
                  <input class="" id="hobbies" name="hobbies" value="<?php echo $row->hobbies;?>">
                  </div>
                  <label class="control-label" for="interests">Interest</label>
                  <div class="controls">
                  <input class="" id="interests" name="interests" value="<?php echo $row->interests;?>">
                  </div>
                </div>
            <!--Skills-->       
