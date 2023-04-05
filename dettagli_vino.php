<!--DA MODIFICARE GRAFICAMENTE AD ESEMPIO IL BOTTONE E IL TESTO DI FIANCO ALLE IMMAGINI-->
<?php
require('_config_inc.php');
require('_db_dal_inc.php');

$id= intval($_GET['idB']);

$conn=db_connect();

/*DISPLAY DELLE INFO*/
$sql= "SELECT B.nomevino as nomevino, B.prezzo as prezzo, B.descrizione as descrizione, 
B.gradoalcolico as gradoalcolico, B.annoproduzione as annoproduzione, V.profumo as profumo, V.gusto as gusto, V.retrogusto as retrogusto,
V.tannino as tannino, V.colore as colore, V.temperatura as temperatura FROM bottiglia B 
join vino V on V.idV=B.idV 
WHERE idB='$id'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();
$nome=$row['nomevino'];
$prezzo=$row['prezzo'];
$desc=$row['descrizione'];
$grado=$row['gradoalcolico'];
$anno=$row['annoproduzione'];
$profumo=$row['profumo'];
$gusto=$row['gusto'];
$retrogusto=$row['retrogusto'];
$tannino=$row['tannino'];
$colore=$row['colore'];
$temperatura=$row['temperatura'];

$conn->close();

?>


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
    <link rel="stylesheet" href=" style/styleDettagli.css">
    


</head>
<body class="dark hero-anime" style="overflow: auto;">

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
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5">
								<a class="nav-link" href="cantine.php">Cantine</a>
							</li>

							<!-- DROPDOWN VINI -->
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5 active">
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
		
	</div>
	<a href="login.php" class="link-to-portfolio hover-target"    > <i class="fa-solid fa-user fa-2x mt-2"></i></a>

    <!-- CONTENT -->
		<div class="grid product">
		<div class="column-xs-12 column-md-7">
			<div class="product-gallery">
			<div class="product-image">
				<img class="active" src="https://source.unsplash.com/W1yjvf5idqA">
			</div>
			<ul class="image-list">
				<li class="image-item"><img src="https://source.unsplash.com/W1yjvf5idqA"></li>
				<li class="image-item"><img src="https://source.unsplash.com/VgbUxvW3gS4"></li>
				<li class="image-item"><img src="https://source.unsplash.com/5WbYFH0kf_8"></li>
			</ul>
			</div>
		</div>
		<div class="column-xs-12 column-md-5">
			<h1><?=$nome?></h1>
			<h2 style="text-align: center; padding-top:10px"><?=$prezzo?> €</h2>
			<div class="description">
			<p style="padding-bottom: 30px;"><?=$desc?></p>
		</div>
		<button class="add-to-cart" style="margin:auto; display:block;">AGGIUNGI AL CARRELLO</button>
		</div>
		</div>
	<div class="grid related-products">
		<div class="column-xs-12">
			<h3 style="text-align: center;">Scheda Tecnica</h3>
		</div>
		<div class="column-xs-12 column-md-6 border">
			<h4 style="text-align: center;">Grado Alcolico</h4>
			<p><?=$grado?>°</p>
		</div>
		<div class="column-xs-12 column-md-6 border">
			<h4  style="text-align: center;">Anno Produzione</h4>
			<p><?=$anno?></p>
		</div>

		<div class="column-xs-12 column-md-6 border">
			<h4  style="text-align: center;">Profumo</h4>
			<p><?=$profumo?></p>
		</div>

		<div class="column-xs-12 column-md-6 border">
			<h4  style="text-align: center;">Gusto</h4>
		<p><?=$gusto?></p>
		</div>
		
		<div class="column-xs-12 column-md-6 border">
			<h4  style="text-align: center;">Retrogusto</h4>
			<p><?=$retrogusto?></p>
		</div>

		<div class="column-xs-12 column-md-6 border">
			<h4  style="text-align: center;">Tannino</h4>
			<p><?=$tannino?></p>
		</div>

		<div class="column-xs-12 column-md-6 border">
			<h4  style="text-align: center;">Colore</h4>
			<p><?=$colore?></p>
		</div>

		<div class="column-xs-12 column-md-6 border">
			<h4  style="text-align: center;">Temperatura</h4>
			<p><?=$temperatura?>°</p>
		</div>

	</div>
		</main>
		<footer>
		<div class="grid">
		<div class="column-xs-12">
		<p style="margin-top: 10%;" class="copyright">&copy; Copyright 2023 <a href="#" title="Paoloni SRL"  target="#">Paoloni SRL</a></p>
		</div>
		</div>
		</footer>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script src=" js/function.js"></script>
<script src=" js/functionBottiglia.js"></script>
<script>
		const activeImage = document.querySelector(".product-image .active");
	const productImages = document.querySelectorAll(".image-list img");
	const navItem = document.querySelector('a.toggle-nav');

	function changeImage(e) {
	activeImage.src = e.target.src;
	}

	function toggleNavigation(){
	this.nextElementSibling.classList.toggle('active');
	}

	productImages.forEach(image => image.addEventListener("click", changeImage));
	navItem.addEventListener('click', toggleNavigation);
</script>

</body>
</html>