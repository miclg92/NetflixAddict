<!-- Contenu des séries favorites -->

<div id="bloc_content">
	<h2>Mes séries</h2>
	<div id="mySeries" class="col-xs-12 center-block">
		
		<?php foreach($favoriteSeries as $serie): ?>
			<div id="mySerie" class="col-xs-12">
				<a href="<?= $serie->url ?>">
					<img class="col-xs-2 thumbnail" src="<?= $serie->image ?>">
				</a>
				<div id="mySerieDetails" class="col-xs-4">
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
							<p id="stop_follow_serie_text">Ne plus suivre cette Série</p>
						</div>
					</form>
				</div>
			</div>
			<hr>
		<?php endforeach; ?>
	</div>
</div>