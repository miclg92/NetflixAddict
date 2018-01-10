<!DOCTYPE html>
<html lang="fr">

	<head>
		<title> <?= App::getInstance()->title; ?></title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="description" content="" />
		
		<!-- Accès CDN jQuery -->
		<script src="https://code.jquery.com/jquery-1.12.3.js" integrity="sha256-1XMpEtA4eKXNNpXcJ1pmMPs8JV+nwLdEqwiJeCQEkyc=" crossorigin="anonymous"></script>
		<!-- Accès CDN Bootstrap Javascript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- Accès CDN Bootstrap -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Accès CDN Bootstrap Thème optionnel -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Accès aux différents fichiers CSS -->
		<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/serie.css" media="screen" />
		<!-- Accès aux différentes polices Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Mukta" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
		<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif] -->
	
	</head>
	
	<body>
		<div class="container">
			
			<header>
				<div class="row">
					<div id="main_title" class="col-md-8 col-sm-12">
						<a href="index.php">
							<h1>NETFLIX ' ADDICT</h1>
						</a>
						<h2>Le site des inconditionnels de séries Netflix</h2>
					</div>
					<div id="login_btns" class="col-md-4 col-sm-12">
						<button data-toggle="modal" href="index.php?p=users.register" data-target="#registration_form" class="btn"><i class="fa fa-user-plus" aria-hidden="true"></i>
							Inscription
						</button>
						<div class="modal fade" id="registration_form">
							<div class="modal-dialog modal-md">
								<div class="modal-content"></div>
							</div>
						</div>
						
						<button data-toggle="modal" href="index.php?p=users.login" data-target="#login_form" class="btn"><i class="fa fa-sign-in" aria-hidden="true"></i>
							Connexion
						</button>
						<div class="modal fade" id="login_form">
							<div class="modal-dialog modal-md">
								<div class="modal-content"></div>
							</div>
						</div>
					</div>
					
					<!-- A DEPLACER DANS L ESPACE ADMIN QUAND IL SERA FAIT -->
					<div id="update_series">
						<a id="animer" href="index.php?p=series.updateSeriesList" >Mettre à jour les séries</a>
						<div id="pourcentage" class="pull-right"></div>
						<div class="progress progress-striped active">
							<div class="progress-bar progress-bar-danger"></div>
						</div>
					</div>
					
					
				</div>
			</header>
			
			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="container-fluid">
					<ul id="menu" class="nav navbar-nav">
						<li> <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Accueil</a> </li>
						<li> <a href="index.php?p=news.index">Actualités</a> </li>
						<li> <a href="#">Forum</a> </li>
						<li> <a href="#">Contact</a> </li>
					</ul>
					<form class="navbar-form navbar-right inline-form">
						<div id="searchbar" class="form-group">
							<input type="search" class="input-sm form-control" placeholder="Recherche">
							<button type="submit" class="btn btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
						</div>
					</form>
				</div>
			</nav>
			
			<section id="container">
				<div id="content">
					<?= $content; ?>
				</div>
			</section>
			
			<footer>
				<div class="row">
					<p class="col-lg-12"><i class="fa fa-copyright" aria-hidden="true"></i> Copyright 2018 - Données recueillies auprès de Betaseries (API) - Les Séries sont la propriété de Netflix - Ce site est la propriété de ses auteurs</p>
				</div>
			</footer>
		</div>
			

		<!-- TINY MCE -->
		<script>
			tinymce.init({
				selector: '#add-post form div textarea',
				content_css: "css/main.css,css/admin.css",
				menubar: false,
				plugins: [
					'advlist autolink link lists charmap print preview hr anchor pagebreak spellchecker',
					'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
					'save table contextmenu directionality emoticons template paste textcolor'
				]
			});
		</script>
		
		<script>
			function timer(n) {
				$(".progress-bar").css("width", n + "%");
				$("#pourcentage").text(n + "%");
				if(n < 100) {
					setTimeout(function() {
						timer(n + 10);
					}, 200);
				}
			}
			$(function (){
				$("#animer").click(function() {
					timer(0);
				});
			});
		</script>
			
	</body>

</html>