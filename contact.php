<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	
	<title>Contact us - Beyond Tomorrow</title>

	<link rel="shortcut icon" href="assets/images/pro_favicon.jpg">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/logo.jpg" alt=""></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<ul class="nav navbar-nav pull-right">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="service.php">Service</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">About</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contact Us</h1>
				</header>
				<div class="body-back">
				
				<p>
					We’d love to hear from you. Interested in working together? 
					Please do contact us.<font size="8">&#9786;</font>
				</p>
				<br>
				<!--CONTACT FORM-->
			<?php
   $servername = "fdb12.awardspace.net";
     $username = "2193847_protouch";
     $password = "consult1001...";
     $dbname = "2193847_protouch";

     //connection

  
 $con = mysqli_connect($servername, $username, $password, $dbname);  

 if (!$con){

 	die('connection fail: '.mysqli_connect_error());
 } 


if(isset($_POST['btn_submit'])){
    $sql = "insert into contacts(full_name, phone, email, message)
            values('".$_POST['full_name']."', '".$_POST['phone']."', '".$_POST['email']."', '".$_POST['message']."')
    ";
    if(mysqli_query($con, $sql)){
       // header('location:contact.php');
            }
            else{
                echo "Error".mysqli_error($con);
            }
}
?>
        <form action= "" method="post">
                        
        <div class="control-group form-group">
<div class="controls">
                            <input type="text" class="form-control" name="full_name" required data-validation-required-message="Please enter your name." placeholder="Full Name(.eg..Mr/Mrs/Pastor/Madam... Asante Korkoi)">
                            <p class="help-block"></p>
                        </div>
                    </div>
        <div class="control-group form-group">
                        <div class="controls">
                            <input type="tel" class="form-control" name="phone" required data-validation-required-message="Please enter your phone number." placeholder="Contact Number please">
                        </div>
                    </div>
        <div class="control-group form-group">
                        <div class="controls">
                            <input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your email address." placeholder="Your Email Address here please">
                        </div>
                    </div>
        <div class="control-group form-group">
                        <div class="controls">
                            <textarea rows="10" cols="100" class="form-control" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" placeholder="Message here please"></textarea>
                        </div>
                    </div>
        <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="btn_submit" class="btn btn-primary">Send Message</button>
                

 </form>


					<!--/CONATCT FORM-->

			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<div class="widget">
					<h4>Address</h4>
					<address>
						 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Post Office Box TN1107 
						 <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teshie Nungua Estate – Accra 
						 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ghana  <br>
						 <font size="3">&#10174;</font>&nbsp;<b>Teshie Camp 2 Taxi-Rank (Transformer)</b> <br><br>
						<font size="4"> &#9993;</font>&nbsp;<a href="mailto:info@protouchgh.com">info@protouchgh.tk</a> 

						<font size="4"> &#9993;</font>&nbsp;<a href="mailto:protouchbusinessconsult@gmail.com">protouchbusinessconsult@gmail.com</a> 
					</address>
					<h4>Phone:</h4>
					<address>
						<p>&#9742;&nbsp;&nbsp;+233-578-675-600<br>
							<br>&#9742;&nbsp;&nbsp;+233-302-719-735
							<br>	
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->		
			<h3 class="text-center thin"><font color="FFAA11">VISIT</font> <font color="#32A6FF">US</font></h3>

	<section class="container-full top-space">
		<div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3071.1848129091068!2d-0.12283175045428509!3d5.592853895925364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf850ff139f625%3A0xd878fd24135b9314!2sProTouch+Internet+Cafe!5e1!3m2!1sen!2sgh!4v1493234854829" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</section>
</div>

<!--FOOTER-->
	<footer id="footer">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>&#9742;&nbsp;&nbsp;+233-578-675-600<br>
							<br>&#9742;&nbsp;&nbsp;+233-248-259-771
							<br>	
								<br><a href="mailto:#">&#9993;&nbsp;&nbsp;protouchbusinessconsult@gmail.com</a><br>
								<br><a href="mailto:#">&#9993;&nbsp;&nbsp;info@protouchgh.tk</a><br><br>
						 &#10174;&nbsp;&nbsp;Teshie Camp 2 , Taxi-Rank (Transformer)
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow Us</h3>
						<div class="widget-body">
							<p class="follow-me-icons clearfix">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href="https://www.facebook.com/protouchbusinessconsult/?fref=ts" target="_blank"><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Quotes</h3>
						<div class="widget-body">
							<p>“Someone is sitting in the shade today because someone planted a tree a long time ago.” - <b>Warren Buffett</b></p>
							<p>
								"Should you find yourself in a chronically leaking boat, energy devoted to changing vessels is likely to be more productive than energy devoted to patching leaks." - <b>Warren buffet</b>	
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav"> |
								<a href="index.php">Home</a> | 
								<a href="about.php">About</a> |
								<a href="service.php">Service</a> |
								<a href="contact.php">Contact</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2017, Protouch Business Consult.
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="assets/js/google-map.js"></script>
	<!--Contact processing form-->
	<script src="assets/js/jqBootstrapValidation.js"></script>
	<script src="assets/js/contact_me.js"></script>

</body>
</html>