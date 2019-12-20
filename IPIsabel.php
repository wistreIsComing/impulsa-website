
<?php
session_start();
require 'requirelanguage.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="agencia creativa, agenciacreativa, impulsa, somosimpulsa, impulsa creativos venezuela, impulsacreativosvenezuela, impulsa creativos, impulsacreativos, diseño, grafico, diseño grafico, desarrollo, web, desarrollo web, impulsa, creativos, agencia venezuela, marketing, medios digitales, creativo"/>
    <meta name="robots" content="index"/>
    <meta http-equiv=”Content-Language” content=”es”/>
    <meta name=”distribution” content=”global”/>
    <meta property="og:title" content="Impulsa Creativos VE" />
    <meta property="og:title" content="Impulsa Creativos VE" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.somosimpulsa.com/" />
    <meta property="og:image" content="src/Favicon/apple-icon-114x114.png" />
    <meta property="og:description" content="Así lo planteaba el reconocido PhD José Cordeiro, Presidente de la Sociedad Mundial del Futuro – Filial Venezuela y docente de la Singularity University, quien durante sus presentaciones en la ciudad de Valencia no se refería a cualquier ratón, sino a..." />

    <title><?php echo $blogIsabelTitulo; ?></title>
    <link rel="apple-touch-icon" sizes="57x57" href="src/Favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="src/Favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="src/Favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="src/Favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="src/Favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="src/Favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="src/Favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="src/Favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="src/Favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="src/Favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="src/Favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/Favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#f5871f">
    <meta name="apple-mobile-web-app-status-bar-style" content="#f5871f">
    <meta name="msapplication-navbutton-color" content="#f5871f">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <link rel="stylesheet" href="assets/css/blog.css">
    
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!-- Fancybox CSS -->
	  <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
    

  </head>
    <body>

        <!-- Header Area wrapper Starts -->
        <header id="header-wrap">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand-lg fixed-top top-nav-collapse">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="icon-menu"></span>
                    <span class="icon-menu"></span>
                    <span class="icon-menu"></span>
                </button>
                <a href="index.php#blog" class="navbar-brand logopeque"><img src="src/iconos/impulsapeque.png" style="margin-bottom: 0;" alt=""></a>
                </div>
                
                <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <a class="nav-link" href="index.php#blog">
						<i class="fas fa-long-arrow-alt-left"></i>  
                      <?php echo $volverhome; ?>
                    </a>
                    </li>
                
                    
                </ul>
                </div>
            </div>
            <!-- Mobile Menu Start -->
			<ul class="mobile-menu">
				<li>
				  <a class="page-scrool" href="index.php#blog"> <i class="fas fa-long-arrow-alt-left"></i><?php echo $volverhome; ?></a>
				</li>
			</ul>
            <!-- Mobile Menu End -->
            </nav>
            <!-- Navbar End -->

            <div id="post-header" class="page-header">
				<div class="background-img" style="background-image: url('./src/Blog/tiempo.png');"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<div class="post-meta">
								<span class="post-date">Impulsa Talks</span>
							</div>
							<h1><?php echo $blogIsabelTitulo; ?> </h1>
						</div>
					</div>
				</div>
            </div>
            
        </header>
        <br>
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Post content -->
					<div class="col-md-12">
						<div class="section-row sticky-container text">
							<div class="main-post">
                                <h3><?php echo $blogIsabelTitulo; ?></h3>
                                <div class="videoWrapper">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/JSIkOwK6U5k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <?php echo $blogIsabelContenido; ?>
                            </div>

						</div>

						
	
					</div>
					<!-- /Post content -->

					<!-- aside -->

				</div>
				
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->
        <!-- Footer Section Start -->
        <?php require ('Common/footer.php'); ?>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="assets/js/preview.js"></script>
        <script src="assets/js/contador.js"></script>
        <script src="assets/js/form-submission-handler.js"></script>
        <script src="assets/js/jquery-min.js"></script>  
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.nav.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/jquery.slicknav.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/form-validator.min.js"></script>
        <script src="assets/js/contact-form-script.min.js"></script>
        <script src="assets/js/jquery.fancybox.min.js"></script>

    </body>
</html>
