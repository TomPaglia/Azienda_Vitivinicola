<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

    <link rel="stylesheet" href=" style/style.css">
    <link rel="stylesheet" href=" style/styleBottiglia.css">
    <link rel="stylesheet" href=" style/styleDettaglioCantina.css">
	<!-- <link type="text/css" rel="stylesheet" href="application.css" media="all" /> -->


    https://webflow.com/made-in-webflow/website/smooth-scroll-grid-reveal-animation
</head>
<body >

    <!-- TITOLO -->
    
    <!-- NAVBAR -->
	<div class=" bg-light start-header start-style" style="position: sticky; z-index: 3;">
		<!-- <span class="nav-item icon pl-4 pl-md-0 ml-0 ml-md-5">
			<a class="nav-link"> <i class="fa-solid fa-bag-shopping fa-3x"></i></a>
		</span> -->
        <div >
            <img src=" img/LOGO_scritta_oro.png" class="title mx-auto d-block" style="width: 180px; " alt="">
        </div>

		<div class="container ">
			<div class="row" >
				<nav class="navbar navbar-expand-lg nav-fill w-100 navbar-light " >
					
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					
					<div class="collapse navbar-collapse justify-content-md-center"  id="navbarSupportedContent">

						
						<ul class="navbar-nav col-10 " >

							<!-- HOME -->
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5 ">
								<a class="nav-link" href="index.php">Home</a>
							</li>

							<!-- CANTINE -->
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5 active">
								<a class="nav-link" href="cantine.php">Cantine</a>
							</li>

							<!-- DROPDOWN VINI -->
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5 ">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Vini</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="sezione_vini.php">Bianco</a>
									<a class="dropdown-item" href="sezione_vini.php">Spumante</a>
									<a class="dropdown-item" href="sezione_vini.php">Rosso</a>
									<a class="dropdown-item" href="sezione_vini.php">Rosé</a>
									<a class="dropdown-item" href="vini_limited_edition.php">Linea Frati Limited</a>
									<a class="dropdown-item" href="bottiglia2.php">Linea Frati Limited 2</a>
								</div>
							</li>

							<!-- VISITACI -->
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5">
								<a class="nav-link" href="visitaci.php">Visitaci</a>
							</li>

							<!-- DROPDOWN SERVIZI -->
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="servizi.php" role="button" aria-haspopup="true" aria-expanded="false">Servizi</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="dettaglio_servizio.php">Imbottigliamento</a>
									<a class="dropdown-item" href="dettaglio_servizio.php">Corso ONAV</a>
									<a class="dropdown-item" href="dettaglio_servizio.php">Feste Private</a>
								</div>
							</li>
                            
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5" >
                                <a class="nav-link" href="carrello.php"> <i class="fa-solid fa-bag-shopping fa-2x"></i></a>
							</li>
							<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5" >
                                <a class="nav-link" > <i class="fa-solid fa-user fa-2x"></i></a>
							</li> -->
						</ul>
						
                        
						
					</div>
					
				</nav>		
			</div>
			<!-- DIV UTENTE -->
		</div>
		
        <a href="login.php" class="link-to-portfolio hover-target"    > <i class="fa-solid fa-user fa-2x mt-2"></i></a>
	</div>


	<div class="dark hero-anime" >
        
    
        <main class="viewport">
                <div class="scroll-container">
                    <div class="sectionDettaglioBottiglia over-hide full-height">	
                        <div class="sectionDettaglioBottiglia-center">	
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h1 class="mb-0">scroll</h1>	
                                    </div>
                                </div>
                            </div>	
                        </div>			
                    </div>	
                    <div class="sectionDettaglioBottiglia over-hide">	
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 py-5">
                                    <div class="sectionDettaglioBottiglia over-hide img-wrap">
                                        <img src="https://assets.codepen.io/1462889/nature.jpg" alt="about">
                                        <div class="img-loader"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-lg-7 py-5">
                                    <div class="sectionDettaglioBottiglia over-hide img-wrap">
                                        <img src="https://assets.codepen.io/1462889/travel.jpg" alt="about">
                                        <div class="img-loader"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-7 py-5">
                                    <div class="sectionDettaglioBottiglia over-hide img-wrap">
                                        <img src="https://assets.codepen.io/1462889/business.jpg" alt="about">
                                        <div class="img-loader"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end pb-5">
                                <div class="col-lg-7 py-5">
                                    <div class="sectionDettaglioBottiglia over-hide img-wrap">
                                        <img src="https://assets.codepen.io/1462889/animals.jpg" alt="about">
                                        <div class="img-loader"></div>
                                    </div>
                                </div>
                            </div>
                        </div>	
                    </div>	
                </div>	
            </main>
		
	</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script src=" js/function.js"></script>
<script src=" js/functionDettaglioCantina.js"></script>

</body>
</html>