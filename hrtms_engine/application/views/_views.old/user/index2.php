
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Primera</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="railscom">
<!-- styles -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>hrtms_resources/_home/css/bootstrap.css" rel="stylesheet" />
<link href="<?php echo base_url();?>hrtms_resources/_home/css/bootstrap-responsive.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/_home/css/flexslider.css" />
<link href="<?php echo base_url();?>hrtms_resources/_home/css/lightbox.css" rel="stylesheet" />
<link href="<?php echo base_url();?>hrtms_resources/_home/css/style.css" rel="stylesheet" />
<link href="<?php echo base_url();?>hrtms_resources/_home/css/style-responsive.css" rel="stylesheet" />
<!-- end styles -->
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="<?php echo base_url();?>hrtms_resources/_home/js/html5shiv.js"></script>
    <![endif]-->
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>hrtms_resources/_home/img/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>hrtms_resources/_home/img/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>hrtms_resources/_home/img/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>hrtms_resources/_home/img/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?php echo base_url();?>hrtms_resources/_home/img/favicon.png">
<!-- End Fav and touch icons -->
</head>
<body>
<!-- Horizontal line -->
<div id="header-line"></div>
<!-- End Horizontal line -->
<!-- main -->
<div id="main" class="container">
  <!-- header -->
  <div id="header">
    <!-- Logo and slogan -->
    <div id="brand">
      <div id="logo" class="brand"></div>
      <div id="slogan" class="hidden-phone">Clean and responsive design</div>
    </div>
    <!-- End Logo and slogan -->
    <!-- desktop menu -->
    <div id="top-menu-horizontal">
      <ul class="nav pull-right hidden-phone hidden-tablet">
        <li class="active"><a href="<?php echo base_url();?>hrtms_resources/_home/index.html">Home</a></li>
        <li><a href="<?php echo base_url();?>hrtms_resources/_home/services.html">Services</a></li>
        <li class="dropdown"><a href="<?php echo base_url();?>hrtms_resources/_home/#" class="dropdown-toggle" data-toggle="dropdown">Features</a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>hrtms_resources/_home/FAQ.html">Faq</a></li>
            <li><a href="<?php echo base_url();?>hrtms_resources/_home/typography.html">Typography</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url();?>hrtms_resources/_home/pricing-table.html">Pricing table</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url();?>hrtms_resources/_home/about.html">About us</a></li>
        <li><a href="<?php echo base_url();?>hrtms_resources/_home/contact.html">Contact</a></li>
      </ul>
    </div>
    <!-- end desktop menu -->
  </div>
  <!-- end header -->
  <div class="container">
    <!-- Menu for tablet and phone-->
    <div class="navbar navbar-inverse hidden-desktop">
      <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class=" icon-chevron-down"></span> </a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo base_url();?>hrtms_resources/_home/index.html">Home</a></li>
              <li><a href="<?php echo base_url();?>hrtms_resources/_home/services.html">Services</a></li>
              <li class="dropdown"><a href="<?php echo base_url();?>hrtms_resources/_home/#" class="dropdown-toggle" data-toggle="dropdown">Features</a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url();?>hrtms_resources/_home/FAQ.html">Faq</a></li>
                  <li><a href="<?php echo base_url();?>hrtms_resources/_home/typography.html">Typography</a></li>
                  <li><a href="<?php echo base_url();?>hrtms_resources/_home/pricing-table.html">Pricing table</a></li>
                  <li class="divider"></li>
                </ul>
              </li>
              <li><a href="<?php echo base_url();?>hrtms_resources/_home/about.html">About us</a></li>
              <li><a href="<?php echo base_url();?>hrtms_resources/_home/contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End  menu tablet and phone-->
    <!-- Carousel -->
    <div id="carousel">
      <div id="flexslider" class="flexslider">
        <ul class="slides carousel-inner">
          <li class="item" > <img src="<?php echo base_url();?>hrtms_resources/_home/images/22.jpg" alt="image" />
            <div class="carousel-caption hidden-phone">
              <h4>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</h4>
              <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus. </p>
            </div>
          </li>
          <li class="item" > <img src="<?php echo base_url();?>hrtms_resources/_home/images/33.jpg" alt="image" />
            <div class="carousel-caption hidden-phone">
              <h4>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</h4>
              <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus. </p>
            </div>
          </li>
          <li class="item" > <img src="<?php echo base_url();?>hrtms_resources/_home/images/11.jpg" alt="image" />
            <div class="carousel-caption hidden-phone">
              <h4>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</h4>
              <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus. </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- End carousel -->
    <!-- First Section -->
    <div class="row-fluid row-green">
      <div class="span4">
        <p><h1>Welcome to the World's Cleanest HR Website!</h1>
              <hr>
              <a href="<?php echo base_url();?>login/client">>> Client Company Login <<</a><br>
              <a href="<?php echo base_url();?>login/training">>> Applicant Login <<</a><br>
              <a href="<?php echo base_url();?>login">>> AMI Login <<</a><br>
              <a href="<?php echo base_url();?>Registration">>>AMI Registration <<</a></p>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      </div>
      <div class="span8">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        </blockquote>
      </div>
    </div>
    <!-- First section -->
    <!-- Second Section -->
    <div class="row-fluid">
      <div class="span4 section-box">
        <h4 class="section-heading">Lorem Ipsum</h4>
        <img  src="<?php echo base_url();?>hrtms_resources/_home/images/business-33.jpg" alt="image" />
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="metro pull-right" href="<?php echo base_url();?>hrtms_resources/_home/#">View details &raquo;</a></p>
      </div>
      <!-- end span4 section-box-->
      <div class="span4 section-box">
        <h4 class="section-heading">Amet Mauris</h4>
        <img src="<?php echo base_url();?>hrtms_resources/_home/images/business-11.jpg" alt="image" >
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="metro pull-right" href="<?php echo base_url();?>hrtms_resources/_home/#">View details &raquo;</a></p>
      </div>
      <!-- end span4 section-box-->
      <div class="span4 section-box">
        <h4 class="section-heading">Duis mollis</h4>
        <img src="<?php echo base_url();?>hrtms_resources/_home/images/business-22.jpg" alt="image" >
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="metro pull-right" href="<?php echo base_url();?>hrtms_resources/_home/#">View details &raquo;</a></p>
      </div>
      <!-- end span4 section-box-->
    </div>
    <!-- End  second section-->
    <div class="clearfix"></div>
    <!-- Latest project section -->
    <div class="row">
      <div class="span12">
        <h4 class="section-heading">Latest projects</h4>
      </div>
      <div class="span3 section-box">
        <div class="preview"> <img  src="<?php echo base_url();?>hrtms_resources/_home/images/Project-1.jpg" class="img-polaroid" style="width:96%;" alt="image" >
          <div class="overlay"> <a href="<?php echo base_url();?>hrtms_resources/_home/images/Project-1.jpg" data-rel="lightbox" class="lightbox zoom-in"></a> <a href="<?php echo base_url();?>hrtms_resources/_home/#" class="follow-link"></a> </div>
        </div>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="metro metro-green pull-right" href="<?php echo base_url();?>hrtms_resources/_home/#">View details &raquo;</a></p>
      </div>
      <!-- end span3 -->
      <div class="span3 section-box">
        <div class="preview"> <img  src="<?php echo base_url();?>hrtms_resources/_home/images/Project-2.jpg" class="img-polaroid" style="width:96%;" alt="image" >
          <div class="overlay"> <a href="<?php echo base_url();?>hrtms_resources/_home/images/Project-2.jpg" data-rel="lightbox" class="lightbox zoom-in"></a> <a href="<?php echo base_url();?>hrtms_resources/_home/#" class="follow-link"></a> </div>
        </div>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="metro metro-green pull-right" href="<?php echo base_url();?>hrtms_resources/_home/#">View details &raquo;</a></p>
      </div>
      <!-- end span3 -->
      <div class="span3 section-box">
        <div class="preview"> <img  src="<?php echo base_url();?>hrtms_resources/_home/images/Project-3.jpg" class="img-polaroid" style="width:96%;" alt="image" >
          <div class="overlay"> <a href="<?php echo base_url();?>hrtms_resources/_home/images/Project-3.jpg" data-rel="lightbox" class="lightbox zoom-in"></a> <a href="<?php echo base_url();?>hrtms_resources/_home/#" class="follow-link"></a> </div>
        </div>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="metro metro-green pull-right" href="<?php echo base_url();?>hrtms_resources/_home/#">View details &raquo;</a></p>
      </div>
      <!-- end span3 -->
      <div class="span3 section-box">
        <div class="preview"> <img  src="<?php echo base_url();?>hrtms_resources/_home/images/Project-4.jpg" class="img-polaroid" style="width:96%;" alt="image" >
          <div class="overlay"> <a href="<?php echo base_url();?>hrtms_resources/_home/images/Project-4.jpg" data-rel="lightbox" class="lightbox zoom-in"></a> <a href="<?php echo base_url();?>hrtms_resources/_home/#" class="follow-link"></a> </div>
        </div>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="metro metro-green pull-right" href="<?php echo base_url();?>hrtms_resources/_home/#">View details &raquo;</a></p>
      </div>
      <!-- end span3 -->
    </div>
    <!-- End Latest project section -->
    <!-- Our friends section -->
    <div class="container">
      <div class="row">
        <div class="span12">
          <h4 class="section-heading">Our friends</h4>
        </div>
        <div class="span12">
          <div id="flex-clients" class="flexslider">
            <ul class="slides">
              <li class="item"> <img src="<?php echo base_url();?>hrtms_resources/_home/images/logo-1.jpg"  alt="image" /> </li>
              <li class="item"> <img src="<?php echo base_url();?>hrtms_resources/_home/images/logo-2.jpg"  alt="image" /> </li>
              <li class="item"> <img src="<?php echo base_url();?>hrtms_resources/_home/images/logo-3.jpg"  alt="image" /> </li>
              <li class="item"> <img src="<?php echo base_url();?>hrtms_resources/_home/images/logo-4.jpg"  alt="image" /> </li>
              <li class="item"> <img src="<?php echo base_url();?>hrtms_resources/_home/images/logo-5.jpg"  alt="image" /> </li>
              <li class="item"> <img src="<?php echo base_url();?>hrtms_resources/_home/images/logo-6.jpg"  alt="image" /> </li>
              <li class="item"> <img src="<?php echo base_url();?>hrtms_resources/_home/images/logo-7.jpg"  alt="image" /> </li>
              <li class="item"> <img src="<?php echo base_url();?>hrtms_resources/_home/images/logo-8.jpg"  alt="image" /> </li>
              <li class="item"> <img src="<?php echo base_url();?>hrtms_resources/_home/images/logo-5.jpg"  alt="image" /> </li>
              <li class="item"> <img src="<?php echo base_url();?>hrtms_resources/_home/images/logo-4.jpg"  alt="image" /> </li>
              <li class="item"> <img src="<?php echo base_url();?>hrtms_resources/_home/images/logo-6.jpg"  alt="image" /> </li>
              <li class="item"> <img src="<?php echo base_url();?>hrtms_resources/_home/images/logo-3.jpg"  alt="image" /> </li>
              <li class="item"> <img src="<?php echo base_url();?>hrtms_resources/_home/images/logo-7.jpg"  alt="image" /> </li>
              <li class="item"> <img src="<?php echo base_url();?>hrtms_resources/_home/images/logo-2.jpg"  alt="image" /> </li>
              <li class="item"> <img src="<?php echo base_url();?>hrtms_resources/_home/images/logo-8.jpg"  alt="image" /> </li>
              <li class="item"> <img src="<?php echo base_url();?>hrtms_resources/_home/images/logo-1.jpg"  alt="image" /> </li>
              <li class="item"> <img src="<?php echo base_url();?>hrtms_resources/_home/images/logo-6.jpg"  alt="image" /> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Our friends section -->
  </div>
  <!-- End Container -->
</div>
<!-- end main -->
<!-- Footer -->
<footer id="footer">
  <div class="row">
    <div class="span1"></div>
    <div class="span3">
      <h3>Contact info</h3>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, , eget lacinia odio sem nec elit.</p>
      <div title="Location"><i class="icon-home"></i> Primera, Inc. 123 Raleigh Ave,<br />
        <span style="padding-left:17px;"> Suite 600 Orlando, FL 32835</span></div>
      <div title="Phone"><i class="icon-comment"> </i> (123) 456-7890 <br />
        <span style="padding-left:17px;"> (123) 456-7809</span></div>
      <div title="Email"><i class="icon-envelope"></i> <a href="<?php echo base_url();?>hrtms_resources/_home/#">contact@railscom.com</a></div>
    </div>
    <div class="span5">
      <h3>Latest news</h3>
      <div class="latest-news-box">
        <div class="latest-news-box-img"><img class="img-circle img-polaroid" src="<?php echo base_url();?>hrtms_resources/_home/images/Data-Properties.png" alt="image" /></div>
        <div class="latest-news-box-text">
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
        </div>
      </div>
      <div class="latest-news-box">
        <div class="latest-news-box-img"><img class="img-circle img-polaroid" src="<?php echo base_url();?>hrtms_resources/_home/images/Business-Man.png" alt="image"  /></div>
        <div class="latest-news-box-text">
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
        </div>
      </div>
      <div class="latest-news-box">
        <div class="latest-news-box-img"><img class="img-circle img-polaroid" src="<?php echo base_url();?>hrtms_resources/_home/images/Message-Edit.png" alt="image" /></div>
        <div class="latest-news-box-text">
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
        </div>
      </div>
    </div>
    <div class="span3">
      <h3>Primera</h3>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
  </div>
  <div id="footer-copyright">
    <div class="container">
      <div class="row">
        <div class="span9"> Copyright 2013 PRIMERA. All Right Reserved <br />
          Powered By Railscom</div>
        <div class="span3 pull-right"> <span class="facebook-icon social-icon"></span> <span class="twitter-icon social-icon"></span> <span class="google-icon social-icon"></span> </div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->
<!--  javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="<?php echo base_url();?>hrtms_resources/_home/js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>hrtms_resources/_home/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>hrtms_resources/_home/js/holder.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>hrtms_resources/_home/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>hrtms_resources/_home/js/lightbox.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>hrtms_resources/_home/js/jquery.backgroundpos.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>hrtms_resources/_home/js/custom.js">

</script>
</body>
</html>
