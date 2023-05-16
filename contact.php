
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <title>Portfolio</title>
    <meta name="description" content=">Portfolio">
    <meta name="author" content="Evan Moreau">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet" >	
	<link href="css/font-awesome.min.css" rel="stylesheet">	
	<link href="css/icofont.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/theme.css" rel="stylesheet">	
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/blue.css" rel="stylesheet" class="colors">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
	
	<link rel="icon" href="img/favicon.ico">
</head>
<body data-spy="scroll" data-target="#mynav" data-offset="85">
<div id="preloader">
	<div id="status">
		<div class="spinner">
			  <div class="rect1"></div>
			  <div class="rect2"></div>
			  <div class="rect3"></div>
			  <div class="rect4"></div>
			  <div class="rect5"></div>
		</div>
	</div>
</div>
<header>
	<nav class="navbar-inverse navbar-static-top" role="navigation">
		<nav class="navbar navbar-dark bg-dark fixed-top">
			<div class="container-fluid">
			  <a class="navbar-brand" href="index.html">Portfolio</a>
			  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
				<div class="offcanvas-header">
				  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Navigation</h5>
				  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
				  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
					<li class="nav-item">
					  <a class="nav-link active" aria-current="page" href="index.html">Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="me.html">Qui suis-je ?</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="CV.html">Curriculum vitæ</a>
					</li>
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Compétences
					  </a>
					  <ul class="dropdown-menu dropdown-menu-dark">
						<li><a class="dropdown-item" href="CompSISR.html">SISR</a></li>
						<li><a class="dropdown-item" href="CompSLAM.html">SLAM</a></li>
						<li>
						  <hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="CompSIO.html">SIO - (SISR & SLAM)</a></li>
					  </ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Projet.html">Projets</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Veille.html">Veille</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
				  </ul>
				  <form class="d-flex mt-3" role="search">
					<input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
					<button class="btn btn-success" type="submit">Rechercher</button>
				  </form>
				</div>
			  </div>
			</div>
		  </nav>
	</nav>
	<br>
</header>
<br><br><br><br>
	<?php
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;
		
		require 'PHPMailer/src/Exception.php';
		require 'PHPMailer/src/PHPMailer.php';
		require 'PHPMailer/src/SMTP.php';

		$mail = new PHPMailer();

		$mail->isSMTP();
		$mail->Host = 'mail.infomaniak.com';  // Remplacez par l'adresse SMTP de votre serveur de messagerie
		$mail->SMTPAuth = true;
		$mail->Username = 'evan.moreau@ik.me';  // Remplacez par votre adresse e-mail
		$mail->Password = 'LloydZetrus27122004!';  // Remplacez par votre mot de passe
		$mail->SMTPSecure = 'ssl';  // Utilisez 'tls' ou 'ssl' en fonction de la configuration de votre serveur
		$mail->Port = 587;  // Le port SMTP de votre serveur de messagerie
	
		$mail->setFrom('evan.moreau@etik.com', 'Votre Nom');
		$mail->addAddress('evan.moreau@ik.me', 'Destinataire');
		$mail->Subject = 'Sujet de l\'e-mail';
		$mail->Body = 'Contenu de l\'e-mail';

		if ($mail->send()) {
			echo 'E-mail envoyé avec succès!';
		} else {
			echo 'Erreur lors de l\'envoi de l\'e-mail: ' . $mail->ErrorInfo;
		}
	?>

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="paddsection">
        <div class="container">
          <div class="contact-block1">
            <div class="row">
				<div class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">			
					<h1><span>Les Mails ne sont pas encore disponibles revenez plus tard.</span></h1>								
				</div>	

              <div class="col-lg-6">
                <div class="contact-contact">
  
                  <h2 class="mb-30">Informations :</h2>
  
                  <ul class="contact-details">
                    <li><span>Avranches, Normandie</span></li>
                    <li><span>evan.moreau@etik.com</span></li>
                  </ul>
                </div>
              </div>
  
              <div class="col-lg-6">
                <form action="" method="post" role="form" class="php-email-form">
                  <div class="row gy-3">
  
                    <div class="col-lg-6">
                      <div class="form-group contact-block1">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Prenom" required>
                      </div>
                    </div>
  
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                      </div>
                    </div>
  
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
                      </div>
                    </div>
  
                    <div class="col-lg-12">
                      <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                      </div>
                    </div>
  
                    <!-- <div class="col-lg-12">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div> -->
					<br>
                    <div class="mt-0">
						<br>
                      <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                    </div>
  
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Contact Section -->
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	  
<footer>
<div class="bottom-footer">
	<div class="container"> 
		<div class="bottom-footer-left wow fadeInUp" data-wow-duration="1s" data-wow-delay="450ms">
			<p><span>&#169;Evan Moreau <a href="#" style="color: red;"><b>Portfolio</b></a></span> <a href="https://www.linkedin.com/in/evan-moreau-933336271"><img src="img/linkedin.png" width="3%"></a><a href="https://github.com/EvanMOREAU"><img src="img/github.png" width="3%"></a></p>

		</div>		  
	</div>
</div>
</footer>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/retina.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>	
	<script src="js/waypoints.min.js"></script>	
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.knob.min.js"></script>	
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/custom.js"></script>
    <script src="php-email-form/validate.js"></script>
	<script type="text/javascript">
	var valid = ``;
	if(valid == 'true'){
		$('#confirmBuy').modal('toggle');
	
	}
</script>
</body>
</html>