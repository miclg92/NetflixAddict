<?php

use \Core\Auth\DBAuth;

if (isset($_COOKIE['remember'])) {
	$remember_token = $_COOKIE['remember'];
	$parts = explode('==', $remember_token);
	$user_id = $parts[0];
	$auth = new DBAuth(App::getDb());
	$user = $auth->loginWithId($user_id);
	
	if ($user) {
		$expected = $user_id . '==' . $user->remember_token . sha1($user_id . 'ratonslaveurs');
		if ($expected == $remember_token) {
			$_SESSION['auth'] = $user->id;
			$_SESSION['user'] = $user;
			setcookie('remember', $remember_token, time() + 60 * 60 * 24 * 7, '/', null, null, true);
		}
	} else {
		setcookie('remember', NULL, -1, '/', null, null, true);
	}
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<title> <?= App::getInstance()->title; ?></title>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content=""/>
	
	<!-- Accès CDN jQuery -->
	<script src="https://code.jquery.com/jquery-1.12.3.js"
	        integrity="sha256-1XMpEtA4eKXNNpXcJ1pmMPs8JV+nwLdEqwiJeCQEkyc=" crossorigin="anonymous"></script>
	<!-- Accès CDN Bootstrap Javascript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
	        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
	        crossorigin="anonymous"></script>
	<!-- Accès CDN Bootstrap -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
	      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Accès CDN Bootstrap Thème optionnel -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet"
	      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Accès aux différents fichiers CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="css/serie.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="css/form.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="css/mySeries.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="css/news.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="css/quiz.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="css/test.css" media="screen"/>
	<!-- Accès aux différentes polices Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Mukta" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif] -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<div class="container">
	
	<header>
		<div class="row">
			<div id="main_title" class="col-md-8 col-sm-12">
				<a href="index.php">
					<h1><span>N</span>ETFLIX <span>A</span>DDICT</h1>
				</a>
				<h2>Le site des inconditionnels de séries Netflix</h2>
			</div>
			<div id="login_btns" class="col-md-4 col-sm-12">
				<?php
				if (isset($_SESSION['auth'])) {
					?>
					<div id="bloc_user_infos">
						<div class="user_infos">
							<h4>Bonjour<span><a
											href="index.php?p=users.account"> <?= $_SESSION['user']->username; ?></a></span>
							</h4>
							<?php
							if ($_SESSION['user']->personality_name != NULL) {
								?>
								<h4>Identité : <span><a
												href="index.php?p=test.result"><?= $_SESSION['user']->personality_name; ?></a></span>
								</h4>
								<?php
							}
							if ($_SESSION['user']->quiz_level != NULL) {
								?>
								<h4>Statut :
									<span><a href="index.php?p=quiz.result"><?= $_SESSION['user']->quiz_level; ?></a></span>
									(<?= $_SESSION['user']->quiz_score; ?>
									%)</h4>
								<?php
							}
							?>
						</div>
						<div class="logout_btn">
							<a href="index.php?p=users.logout" class="btn"><i class="fa fa-sign-out"
							                                                  aria-hidden="true"></i>
								Deconnexion</a>
						</div>
					</div>
					
					<?php
				} else {
					?>
					<div class="unlogged_btns">
						<div class="register_btn">
							<a href="index.php?p=users.register" class="btn"><i class="fa fa-user-plus"
							                                                    aria-hidden="true"></i> Inscription</a>
						</div>
						
						<div class="login_btn">
							<a href="index.php?p=users.login" class="btn"><i class="fa fa-sign-in"
							                                                 aria-hidden="true"></i>
								Connexion</a>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</header>
	
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container-fluid">
			<ul id="menu" class="nav navbar-nav">
				<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Accueil</a></li>
				<li><a href="index.php?p=news.index"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
						Actus</a></li>
				<li><a href="index.php?p=quiz.start"><i class="fa fa-trophy" aria-hidden="true"></i>
						Quiz</a></li>
				<li><a href="index.php?p=test.start"><i class="fa fa-question-circle" aria-hidden="true"></i>
						Qui es tu ?</a></li>
				<?php
				if (isset($_SESSION['auth'])) {
					if ($_SESSION['user']->flag == 1) {
						?>
						<li><a href="index.php?p=series.favorites"><i class="fa fa-film" aria-hidden="true"></i>
								Mes séries</a></li>
						<li><a href="index.php?p=users.account"><i class="fa fa-user" aria-hidden="true"></i>
								Mon compte</a></li>
						<li><a href="index.php?p=users.contact"><i class="fa fa-envelope-o" aria-hidden="true"></i>
								Contact</a></li>
						<?php
					} elseif ($_SESSION['user']->flag == 2) {
						?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
							   aria-haspopup="true" aria-expanded="false"><i class="fa fa-key" aria-hidden="true"></i>
								Administration du site <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="index.php?p=users.account"><i class="fa fa-user" aria-hidden="true"></i>
										Compte Administrateur</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="index.php?p=admin.news.index"><i class="fa fa-newspaper-o"
								                                              aria-hidden="true"></i> Gestion des Actus</a>
								</li>
								<li><a href="index.php?p=admin.newsCategories.index"><i class="fa fa-window-restore"
								                                                        aria-hidden="true"></i> Gestion
										des Catégories</a></li>
								<li><a href="index.php?p=admin.comments.index"><i class="fa fa-commenting-o"
								                                                  aria-hidden="true"></i> Gestion des
										Commentaires</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="index.php?p=admin.quiz.index"><i class="fa fa-trophy"
								                                              aria-hidden="true"></i> Gestion du
										Quiz</a>
								</li>
								<li><a href="index.php?p=admin.test.index"><i class="fa fa-question-circle"
								                                              aria-hidden="true"></i> Gestion
										du Test</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="index.php?p=admin.series.index"><i class="fa fa-spinner"
								                                                aria-hidden="true"></i>
										Mise à jour des Séries</a></li>
							</ul>
						</li>
						<?php
					}
				}
				?>
			</ul>
		</div>
	</nav>
	
	<?php if (isset($_SESSION['flash'])): ?>
		<?php foreach ($_SESSION['flash'] as $type => $message): ?>
			<div class="alert alert-<?= $type; ?> alert-dismissible text-center" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
							class="glyphicon glyphicon-remove"></span></button>
				<?= $message; ?>
			</div>
		<?php endforeach; ?>
		<?php unset($_SESSION['flash']); ?>
	<?php endif; ?>
	
	<section id="container">
		<div id="content">
			<?= $content; ?>
		</div>
	</section>
	
	<footer>
		<div class="row">
			<p class="col-lg-12"><i class="fa fa-copyright" aria-hidden="true"></i> Copyright 2018</p>
			<p class="col-lg-12">Données recueillies auprès de Betaseries (API) - Les Séries sont la propriété de
				Netflix - Ce site est la propriété de ses auteurs</p>
		</div>
	</footer>
</div>

<!-- Slider	-->
<script src="js/jquery.cloud9carousel.js"></script>
<script src="js/jquery.reflection.js"></script>
<!-- TINY MCE -->
<script src="js/tinymce/tinymce.min.js"></script>
<!-- Image Lazy Load -->
<script src="js/imglazyload.js"></script>
<!-- Divers js -->
<script src="js/functions.js"></script>
<script src="js/pagination.js"></script>

<script>
	$(function () { // Attends le chargement de la page
		
		tinymce.init({
			selector: '#add-news textarea,  #edit_news textarea',
			// content_css: "css/main.css,css/admin.css",
			menubar: false,
			plugins: [
				'advlist autolink link lists charmap print preview hr anchor pagebreak spellchecker',
				'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
				'save table contextmenu directionality emoticons template paste textcolor'
			]
		});
		
		carousel_init();
		progress_bar_init();
		$('img').imgLazyLoad();
		
	});
</script>
</body>
</html>