
<?php 
$site['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$site['base_url'] .= "://".$_SERVER['HTTP_HOST'];
$site['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
?>

<header class="header-style-fullwidth">
	<div class="top-bar-right d-flex align-items-center text-md-left">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-4"></div>
				<div class="col-md-6 contact-info text-right">
					<ul>
						<li>
							<i data-feather="phone"></i> <a href="tel:+919528102568">+91 9528 102 568</a>
						</li>
						<li>
							<i data-feather="mail"></i> <a href="mailto:info@tryambakfoundation.org"><span>info@tryambakfoundation.org</span></a>
						</li>
						<!-- <li>
							<i data-feather="clock"></i> Mon - Sat / 9:00 AM - 7:00 PM
						</li> -->
					</ul>
				</div>
				<div class="col-md-2">
					<div class="social-icons text-right">
						<a href="https://www.facebook.com/tryambakfoundation" target="_blank"><i class="icofont-facebook"></i></a>
						<a href="https://instagram.com/tryambakfoundation?igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><i class="icofont-instagram"></i></a>
						<a href="https://youtube.com/@tryambakfoundation?si=M_4jU8mYCIvHdF0f" target="_blank"><i class="icofont-youtube-play"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg header-fullpage">
		<div class="container text-nowrap">
			<div class="d-flex align-items-center w-100 col p-0 logo-brand">
				<a class="navbar-brand rounded-bottom light-bg" href="<?php echo $site['base_url']; ?>">
					<img src="images/logo-white.png" alt>
				</a>
			</div>

			<div class="d-inline-flex request-btn order-lg-last col-auto p-0 align-items-center">
				<a class="nav-link btn btn-default ml-3 donate-btn" href="join.php"><i class="icofont-plus"></i> Join Us</a>

				<button class="navbar-toggler x collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div>

			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $site['base_url']; ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">About Us</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle-mob" href="javascript:;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">What We Do <i class="icofont-rounded-down"></i></a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="education-and-skill-development.php">Education</a></li>
							<li><a class="dropdown-item" href="environment.php">Environment</a></li>
							<li><a class="dropdown-item" href="empowerment.php">Empowerment</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="programs.php">Programs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="events.php">Events</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="donate.php">Donate</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
				</ul>

			</div>
		</div>
	</nav>
</header>