<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">

	
	<title>Chapters I.T</title>

	<link rel="shortcut icon" href="assets/images/cfav.jpg">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	
</head>

<body>

<!-- Fixed navbar -->
	<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
           
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >About</a>
            </li>
            <li>
                <a href="#services" onclick = $("#menu-close").click(); >Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>
	<!-- /.navbar -->
	
<!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>CHAPTER I.T GHANA</h1>
            <h3>designing is our hallmark</h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>
<!--ABOUT US STARTS-->
<section id="about" class="about" class="container-full top-space">
<div class="container text-center">
		<h2 class="thin">Isaac Mensah</h2>
		<p class="text-muted">
			<b>
			</b>
				</p>
	</div>

		</section>
<!--/ABOUT US ENDS-->
	
	

	
			<!-- SERVICES STARTS -->
<article id="services" class="services bg-primary" class="col-xs-12 maincontent">
			
	<div class="container">
		<div class="row">	
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							
							<hr class="small">
							<IMG SRC="assets/images/bod.jpg" alt="Chapter I.T">
								<br><br><br>
								<hr class="small">
						</div>
					</div>

				</div>
				</div>
	</div>
</article>
		<!-- /SERVICES END -->
		
		<!--Portfolio start-->
<article id="portfolio" class="portfolio" class="col-xs-12 maincontent">
			
	<div class="container">
		<div class="row">	<div class="container text-center">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							
							<hr class="small">
							
							<h3 class="thin">Portfolio</h3>
							
								<br><br><br>
								<hr class="small">
								
						</div>
					</div>

				</div></div>
				</div>
	</div>
</article>	
<!-- /Portfolio END -->	

<section id="contact">
<footer>
		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>CHAPTERS GHANA I.T</strong>
                    </h4>
                    <p>teshie - Aboma </p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> +233 24 848 8855</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:">.........com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                        </li>
                    </ul>
          </div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2016
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		
</section>



	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	<script src="assets/js/jquery.js"></script>
	
	 <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
</body>
</html>