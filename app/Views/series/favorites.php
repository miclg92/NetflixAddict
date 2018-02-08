<!-- Contenu des séries favorites -->
<?php
if (isset($_SESSION['auth'])) {
	?>
	<div id="bloc_content" class="mesSeries">
		<h2>Mes séries</h2>
		<div id="mySeries" class="row">
			
			<?php foreach ($favoriteSeries as $serie): ?>
				<div id="mySerie" class="col-xs-12">
					<a href="<?= $serie->url ?>">
						<img class="col-xs-5 col-sm-3 col-md-2 thumbnail"
						     src="<?= $serie->image ?>" alt="<?= $serie->title ?>">
					</a>
					<div id="mySerieDetails" class="col-xs-7 col-sm-9 col-md-10">
						<h3 class="col-xs-12"><?= $serie->title ?></h3>
						<p class="col-xs-12">Année <?= $serie->year ?></p>
						<p class="col-xs-12"><?= $serie->seasons ?> saisons</p>
						<p class="col-xs-12"><?= $serie->episodes ?> épisodes</p>
						<p class="col-xs-12"><?= $serie->followers ?> followers</p>
						<br>
						
						<form method="post" action="?p=series.deleteFavorite" class="col-xs-12">
							<div id="stop_follow_serie" class="col-xs-12">
								<input type="hidden" name="serieId" value="<?= $serie->serie_id ?>">
								<button type="submit" name="stopFollowSerie" id="stop_follow_serie_btn">X</button>
								<p id="stop_follow_serie_text">Ne plus suivre</p>
							</div>
						</form>
					</div>
				</div>
				<hr>
			<?php endforeach; ?>
		</div>
	</div>
	<?php
} else {
	$_SESSION['flash']['danger'] = "Vous ne pouvez pas afficher cette page. Veuillez vous connecter ou créer un compte utilisateur";
}
?>