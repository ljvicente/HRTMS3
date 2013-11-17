<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Registration - AMI</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--basic styles-->

    <link href="<?php echo base_url();?>hrtms_resources/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>hrtms_resources/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font-awesome.min.css" />

    <!--[if IE 7]>
      <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!--page specific plugin styles-->

    <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/select2.css" />
    <!--fonts-->

   <!--  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" /> -->

    <!--ace styles-->

    <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font.css" />

    <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery-ui-1.10.3.full.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery-ui-1.10.3.custom.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace/ace.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-skins.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/datepicker.css" />

	</style>

    <!--[if lte IE 8]>
      <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace-ie.min.css" />
    <![endif]-->

    <!--inline styles if any-->
  </head>

  <body>
      <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a href="<?php echo base_url();?>" class="brand">
            <small>
              <img src="<?php echo base_url();?>hrtms_resources/images/logo.png">
              AMI - Registration
            </small>
          </a><!--/.brand-->

          
        </div><!--/.container-fluid-->
      </div><!--/.navbar-inner-->
    </div>

    <div class="container-fluid" id="main-container">
    
      <a id="menu-toggler" href="#">
        <span></span>
      </a>

      <div id="sidebar">

        <ul class="nav nav-list">
          
          <li class="active">
            <a href="<?php echo base_url();?>Registration">
              <i class="icon-bar-chart"></i>
              <span>Registration</span>
            </a>
          </li>
          <!--
            <li >
              <a href="<?php echo base_url();?>Registration/Site_map">
                    <i class="icon-map-marker"></i>
                   Site Map
                  </a>
            </li>
              <li >
                <a href="#" class="dropdown-toggle">
                  <i class="icon-shield"></i>
                  <span>Requirements</span>

                  <b class="arrow icon-angle-down"></b>
                </a>

                <ul class="submenu">
                  <li  >
                    <a href="<?php echo base_url();?>Registration/photo_requirement">
                      <i class="icon-user"></i>
                      Photograph
                    </a>
                  </li>
                  <li  >
                    <a href="<?php echo base_url();?>Registration/required_documents">
                      <i class="icon-user"></i>
                     Documents
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>Registration/expenses">
                      <i class="icon-user"></i>
                     Expenses
                    </a>
                 </li>
                </ul>
              </li>
              <li >
                <a href="#" class="dropdown-toggle">
                  <i class="icon-shield"></i>
                  <span>Screening</span>

                  <b class="arrow icon-angle-down"></b>
                </a>

                <ul class="submenu">
                  <li  >
                    <a href="<?php echo base_url();?>Registration/prelim_exam">
                      <i class="icon-user"></i>
                      Preliminary Examination
                    </a>
                  </li>
                  <li  >
                    <a href="<?php echo base_url();?>Registration/interview_screen">
                      <i class="icon-user"></i>
                     Interview Screening
                    </a>
                  </li>
                  <li  >
                    <a href="<?php echo base_url();?>Registration/medical_referral">
                      <i class="icon-user"></i>
                     Medical Referral 
                    </a>
                  </li>
                </ul>
              </li>
          -->
          <li >
            <a href="<?php echo base_url();?>Registration/Site_map">
                  <i class="icon-map-marker"></i>
                 Site Map
                </a>
          </li>

          <li class="" >
            <a href="<?php echo base_url();?>Registration/requirements">
                  <i class="icon-archive"></i>
                 Requirements
                </a>
          </li>
      
          
          <li class="" >
            <a href="<?php echo base_url();?>Registration/screening">
                  <i class="icon-eye-open"></i>
                 Screening
                </a>
          </li>
      
          <!--<li>
            <a href="">
              <i class="icon-question-sign"></i>
              <span>Help</span>
            </a>
          </li>-->

          <li>
            <a href="">
              <i class="icon-info"></i>
              <span>About the Developers</span>
            </a>
          </li>
      
        </ul><!--/.nav-list-->

        <div id="sidebar-collapse">
          <i class="icon-double-angle-left"></i>
        </div>
      </div>
      <div id="main-content" class="clearfix">
        <div id="page-content" class="clearfix">
          <div class="row-fluid">
            <!--PAGE CONTENT STARTS HERE-->
            <div class="span12">	 
              <div class="row-fluid">
                <div class="widget-box">
                  <div class="widget-header widget-header-blue widget-header-flat">
                        <h4 class="lighter">Registration</h4>
                  </div>
                  <div class="widget-body">
                    <div class="alert alert-info">
                        <p>Items marked with an asterisk (<span class="required">*</span>) are required.</p>  
                    </div>
                      <div id="infoMessage" align="center"><?php 
                      if ($message == null){

                      }
                      else{
                      echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                      echo '<div class="alert alert-error">';
                      echo $message;
                      echo '</div>';
                      }
                      ?>
                  </div>
                    <h3 class="lighter block green">&nbsp;&nbsp;&nbsp;&nbsp;Personal Information</h3>
                    <div id="summary" class="center"></div><br>
                    <form class="form-horizontal" id="registration-form" method="POST" action="<?php echo base_url();?>registration/register" />
                      <div class="control-group">
                        <label class="control-label" for="first_name">First Name(<span class="required">*</span>):</label>

                        <div class="controls">
                          <div class="span12">
                            <input type="text" name="first_name" id="first_name" class="span6" />
                          </div>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="last_name">Last Name(<span class="required">*</span>):</label>

                        <div class="controls">
                          <div class="span12">
                            <input type="text" name="last_name" id="last_name" class="span6" />
                          </div>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="middle_name">Middle Name:</label>

                        <div class="controls">
                          <div class="span12">
                            <input type="text" name="middle_name" id="middle_name" class="span6" />
                          </div>
                        </div>
                      </div>

                      <div class="hr hr-dotted"></div>
                 
                      <div class="control-group">
                        <label class="control-label">Gender(<span class="required">*</span>):</label>

                        <div class="controls">
                          <span class="span12">
                            <label class="blue">
                              <input name="gender" value="Male" type="radio" />
                              <span class="lbl"> Male</span>
                            </label>

                            <label class="blue">
                              <input name="gender" value="Female" type="radio" />
                              <span class="lbl"> Female</span>
                            </label>
                          </span>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="date_of_birth">Date of Birth(<span class="required">*</span>):</label>

                        <div class="controls">
                          <div class="row-fluid input-append">
                            <span class="add-on">
                              <i class="icon-calendar"></i>
                            </span>
                            <input class="span2 date-picker" name="date_of_birth" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
                              
                          </div>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="civil_status">Civil Status(<span class="required">*</span>):</label>

                        <div class="controls">
                          <select id="civil_status" name = "civil_status" class="span2">
                            <option disabled = "disabled" selected = "selected" value="">Select Status..</option>
                            <option value = "Single" <?php if($this->form_validation->set_value('civil_status')=='Single') echo 'selected';?>>Single</option>
                            <option value = "Married" <?php if($this->form_validation->set_value('civil_status')=='Married') echo 'selected';?>>Married</option>
                            <option value = "Separated" <?php if($this->form_validation->set_value('civil_status')=='Separated') echo 'selected';?>>Separated</option>
                            <option value = "Widowed" <?php if($this->form_validation->set_value('civil_status')=='Widowed') echo 'selected';?>>Widowed</option>
                            <option value = "Divorced" <?php if($this->form_validation->set_value('civil_status')=='Divorced') echo 'selected';?>>Divorced</option>
                          </select>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="phone">Phone Number(<span class="required">*</span>):</label>

                        <div class="controls">
                          <div class="span3 input-prepend">
                            <span class="add-on">
                              <i class="icon-phone"></i>
                            </span>
                            <input class="span8" type="tel" id="phone" name="phone" />
                          </div>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="height">Height <span class="muted">(cm)</span>(<span class="required">*</span>):</label>

                        <div class="controls">
                          <div class="span12">
                            <input type="text" name="height" id="height" class="span1" />
                          </div>
                        </div>
                      </div>
                      
                      <div class="hr hr-dotted"></div>

                      <div class="control-group">
                        <label class="control-label" for="address">Address(<span class="required">*</span>):</label>

                        <div class="controls">
                          <div class="span12">
                            <input type="text" name="address" id="address" class="span6" />
                          </div>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="city">City/Municipality(<span class="required">*</span>):</label>

                        <div class="controls">
                          <div class="span12">
                            <input type="text" name="city" id="city" class="span6" />
                          </div>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="province">Province(<span class="required">*</span>):</label>

                        <div class="controls">
                          <div class="span12">
                            <input type="text" name="province" id="province" class="span6" />
                          </div>
                        </div>
                      </div>
                      <!-- <div class="control-group">
                        <label class="control-label" for="phone">Phone Number(<span class="required">*</span>):</label>

                        <div class="controls">
                          <div class="span3 input-prepend">
                            <span class="add-on">
                              <i class="icon-phone"></i>
                            </span>
                            <input class="span8" type="tel" id="phone" name="phone" />
                          </div>
                        </div>
                      </div> -->


                      <h3 class="lighter block green">&nbsp;&nbsp;&nbsp;&nbsp;Account Details</h3>
                      <div class="control-group">
                        <label class="control-label" for="email">Email(<span class="required">*</span>):</label>

                        <div class="controls">
                          <div class="span12">
                            <input type="text" name="email" id="email" class="span6" />
                          </div>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="username">Username(<span class="required">*</span>):</label>

                        <div class="controls">
                          <div class="span12">
                            <input type="text" name="username" id="username" class="span6" />
                          </div>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="password">Password(<span class="required">*</span>):</label>

                        <div class="controls">
                          <div class="span12">
                            <input type="password" name="password" id="password" class="span6" />
                          </div>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="password2">Confirm Password(<span class="required">*</span>):</label>

                        <div class="controls">
                          <div class="span12">
                            <input type="password" name="password2" id="password2" class="span6" />
                          </div>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          <span class="span6">
                            <label>
                              <input name="agree" id="agree" type="checkbox" />
                              <span class="lbl"> I accept the policy(<span class="required">*</span>)</span>
                            </label>
                          </span>
                        </div>
                     </div>
                      <div class="form-actions">
                        <button type="submit" class="btn btn-success btn-small">Submit</button>
                        <button type="reset" class="btn btn-danger btn-small">Reset</button>
                      </div>
                    </form>
                    

                  </div><!--/widget-body--> 
			         </div><!--/widget-box--> 
			       </div><!--/row-fluid-->         
            </div><!--/span12--> 
            <!--PAGE CONTENT ENDS HERE-->
          </div><!--/row-->      
        </div><!--/#page-content-->
      </div><!--/#main-content-->
    </div><!--/.fluid-container#main-container-->


    <a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
      <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>

    <!--basic scripts-->

    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <script src="<?php echo base_url();?>hrtms_resources/js/jquery.min.js"></script>

    <script type="text/javascript">
      //window.jQuery || document.write("<script src='<?php echo base_url();?>hrtms_resources/js/jquery-1.9.1.min.js'>"+"<"+"/script>");
      window.jQuery || document.write("<script src='<?php echo base_url();?>hrtms_resources/js/jquery.js'>"+"<"+"/script>");
    </script>
    <script src="<?php echo base_url();?>hrtms_resources/js/bootstrap.min.js"></script>

    <!--page specific plugin scripts-->

    <!--[if lte IE 8]>
      <script src="<?php echo base_url();?>hrtms_resources/js/excanvas.min.js"></script>
    <![endif]-->

    <script src="<?php echo base_url();?>hrtms_resources/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="<?php echo base_url();?>hrtms_resources/js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo base_url();?>hrtms_resources/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>hrtms_resources/js/chosen.jquery.min.js"></script>
    <script src="<?php echo base_url();?>hrtms_resources/js/jquery.maskedinput.min.js"></script>
    <script src="<?php echo base_url();?>hrtms_resources/js/select2.min.js"></script>
    <script src="<?php echo base_url();?>hrtms_resources/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>hrtms_resources/js/additional-methods.min.js"></script>
    <script src="<?php echo base_url();?>hrtms_resources/js/date-time/bootstrap-datepicker.min.js"></script>


    <!--ace scripts-->

    <script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
    <script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

    <!--inline scripts related to this page-->

    <script type="text/javascript"> 
      $(function() {
      
        $('[data-rel=tooltip]').tooltip();
      
        $(".select2").css('width','150px').select2({allowClear:true})
        .on('change', function(){
          $(this).closest('form').validate().element($(this));
        }); 
      
      
        $('.date-picker').datepicker({
            format: "yyyy/mm/dd",
            //startDate: "now",
            //todayBtn: true,
            orientation: "top auto",
            autoclose: true
        }) 
      
        
        
      
        //documentation : http://docs.jquery.com/Plugins/Validation/validate
      
      
        $.mask.definitions['~']='[+-]';
        $('#phone').mask('(999) 999-9999');
        //$('#id-date-picker-1').mask('99-99-9999');
      
        jQuery.validator.addMethod("phone", function (value, element) {
          return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
        }, "Enter a valid phone number.");
        

        jQuery.validator.addMethod("nameValidation", function(value, element) {
          return this.optional(element) || /^[a-z\-.,\s]+$/i.test(value);
        }, "Name must not contain special characters except comma, dash and period.");

        jQuery.validator.setDefaults({
          debug: true,
          //success: "valid"
        });
        $('#registration-form').validate({
          errorElement: 'span',
          errorClass: 'help-inline',
          focusInvalid: false,
          rules: {
            first_name: {
              required: true,
              minlength:2,
              nameValidation:true,
            },
            last_name: {
              required: true,
              minlength:2,
              nameValidation:true,
            },
            middle_name: {
              minlength:2, 
              nameValidation:true,
            },
            date_of_birth: {
              required: true,
            },
            civil_status:'required',
            height: {
              required: true ,
              number: true,
              min: 50
            },
            address: {  
              required: true 
            },
            gender: 'required',
            city: { 
              required: true 
            },
            province: {
              required: true 
            },
            phone: {
              required: true,
              phone: true
            },
            email: {
              required: true,
              email:true,
              remote: {
                url: "<?php echo base_url();?>manage/email_exists",
                type: "post",
                data: {
                  email: function(){ return $("#email").val(); }
                }
              }
            },
            username: {
              required: true,
              minlength:6,
              maxlength:20,
              alphanumeric:true,
              remote: {
                url: "<?php echo base_url();?>manage/username_exists",
                type: "post",
                data: {
                  username: function(){ return $("#username").val(); }
                }
              }
            },
            password: {
              required: true,
              minlength: 6,
              maxlength:20,
              alphanumeric:true,
            },
            password2: {
              required: true,
              minlength: 6,
              equalTo: "#password"
            },
            agree: 'required'
          },
      
          messages: {
            first_name: {
              minlength: jQuery.format("At least {0} characters required."),

            },
            last_name: {
              minlength: jQuery.format("At least {0} characters required."),
            },
            middle_name: {
              minlength: jQuery.format("At least {0} characters required."),
            },
            email: {
              required: "Please provide a valid email.",
              email: "Please provide a valid email.",
              remote: "This email is not available.",
            },
            username: {
              maxlength: jQuery.format("Must not contain more than {0} characters."),
              remote: "This username is not available.",
              
            },
            password: {
              required: "Please specify a password.",
              minlength: jQuery.format("Please specify a secure password. At least {0} characters required."),
              maxlength: jQuery.format("Must not contain more than {0} characters."),

            },
            password2: {
              minlength: jQuery.format("At least {0} characters required.")
            },
            gender: "Please choose gender",
            agree: "Please accept our policy"
          },
      
          invalidHandler: function (event, validator) { //display error alert on form submit   
            $('.alert-error', $('.login-form')).show();
          },
      
          highlight: function (e) {
            $(e).closest('.control-group').removeClass('success').addClass('error');
          },
      
          success: function (e) {
            $(e).closest('.control-group').removeClass('error').addClass('success');
            $(e).remove();
          },
      
          errorPlacement: function (error, element) {
         

            if(element.is(':checkbox') || element.is(':radio')) {
              var controls = element.closest('.controls');
              if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
              else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
            }
            else if(element.is('.select2')) {
              error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
            }
            else if(element.is('.chzn-select')) {
              error.insertAfter(element.siblings('[class*="chzn-container"]:eq(0)'));
            }
            else error.insertAfter(element);
          },
          showErrors: function(errorMap, errorList) {
            $("#summary").html("<div class=\"alert alert-error\">Your form contains "
              + this.numberOfInvalids()
              + " errors, see details below.</div>");
              this.defaultShowErrors();
          },
          submitHandler: function (form) {
            //alert('SUBMIT FORM');
            form.submit();

          },
          invalidHandler: function (form) {
            $("html, body").animate({ scrollTop: 0 }, "slow");
            
          },

        });
      
        
      })

 
                     
    </script>
  </body>
</html>