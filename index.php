<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>CopStats</title>
		<!--Scripts-->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
		<!--Styles-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body id="home">

		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">

				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand active" href="#home">CopStats</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="#about-scroll">About <span class="sr-only">(current)</span></a>
						</li>
						<li>
							<a data-toggle="modal" data-target="#contact-modal" href="#">Contact</a>
						</li>

					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Register</a>
						</li>
						<li>
							<a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
						</li>
					</ul>

				</div>
		</nav>
		<div class="container banner">
			<div class="row">
				<div class="col-md-12">
					<img class="img" src="img/banner.jpg" />
				</div>
			</div>
		</div>
		<div class="container welcome">
			<div class="row">
				<div class="col-md-3">
					&nbsp;
				</div>
				<div class="col-md-6">
					<div class="welcome-title">
						Welcome to CopStats
					</div>
					<ul class="welcome-list">
						<li>
							Look up crime data
						</li>
						<li>
							Browse personnel files
						</li>
						<li>
							Get the straight dope on cops
						</li>
					</ul>
					<div class="center">

						<button type="button" class="btn btn-lg btn-primary welcome-sign-in" data-toggle="modal" data-target="#login-modal">
							Login
						</button>

					</div>
				</div>
				<div class="col-md-3">
					&nbsp;
				</div>

			</div>
		</div>

		<!-- About -->
		<div id="about-scroll" class="container about">
			<div class="about-title center">
				About CopStats
			</div>
			<div class="row">
				<div class="col-md-4 about-section border-right">
					<div class="about-header">
						<img style="margin-bottom: 20px;" src="img/computer.png" width="25%">
						<br />
						COMPSTAT Data

					</div>
					<p>
						The New York Police Department collects and maintains data about city crime through a system called COMPSTAT. The data is extensive and can sometimes be useful for tracking crime trends within and across the city.
					</p>
					<p>
						Unfortunately, the NYPD makes it extremely difficult for journalists and memebers of the public to access this data. CopStats is an effort to bring COMPSTAT to the world.
					</p>
				</div>
				<div class="col-md-4 about-section border-right">
					<div class="about-header">
						<img style="margin-bottom: 20px;" src="img/policeman.png" width="28%">
						<br />
						Second Header
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<p>
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
					</p>

				</div>
				<div class="col-md-4 about-section">

					<div class="about-header">
						<img style="margin-bottom: 20px;" src="img/badge.png" width="26%">
						<br />
						Third Header
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<p>
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
					</p>

				</div>
			</div>
		</div>

		<!-- Footer -->
		<div class="container footer">
			<div class="row">
				<div class="col-md-4 footer-section">
					<div class="footer-header">
						Footer Title
					</div>
					Footer text.
				</div>
				<div class="col-md-4 footer-section">
					<div class="footer-header">
						Footer Title
					</div>
					Footer text.
				</div>
				<div class="col-md-4 footer-section">
					<div class="footer-header">
						Footer Title
					</div>
					Footer text.
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 footer-credits">
					&copy; 2015 CopStats
				</div>
			</div>
		</div>

		<!-- Modals -->
		
		<!-- Login -->
		<div class="modal fade" id="login-modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title">Sign in to CopStats</h4>
					</div>
					<div class="modal-body">

						<form>

							<div class="form-group" style="display:inline">
								<input type="text" placeholder="Username" class="login-focus">

								<input type="password" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-primary">
								Submit
							</button>
						</form>

						<div style="margin-top:10px;text-align:center;">
							Don't have an account? <a href="#">Registering takes just a few minutes.</a>
						</div>

					</div>
				</div><!-- /#login-modal -->
			</div><!-- /#login-modal -->
		</div><!-- /#login-modal -->
		
		<!-- Contact -->
		<div class="modal fade" id="contact-modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title">Send us a message</h4>
					</div>
					<div class="modal-body">

						<form>

							<div class="">
								<input type="text" placeholder="Name" class="contact-focus">

								<input type="text" placeholder="Subject">
								<textarea type="text" rows="5" cols="60" placeholder="Message" class="contact-message"></textarea>
							</div>
							<button type="submit" class="btn btn-primary contact-submit">
								Submit
							</button>
						</form>

					</div>
				</div><!-- /#contact-modal -->
			</div><!-- /#contact-modal -->
		</div><!-- /#contact-modal -->
	</body>
</html>

