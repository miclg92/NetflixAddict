<!-- Contenu de la page d'accueil -->

<div id="main_page">
	
	<h2>Top 5 des séries les plus suivies</h2>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-keyboard="true">
		
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<a href="#">
					<img src="<?= $mostFollowedSeries[0]->image ?>" class="thumbnail">
					<div class="carousel-caption">
						<h2>N°1</h2>
						<h3><?= $mostFollowedSeries[0]->title ?> (<?= $mostFollowedSeries[0]->year ?>)</h3>
						<p><?= $mostFollowedSeries[0]->seasons ?> saisons / <?= $mostFollowedSeries[0]->episodes ?> épisodes</p>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="#">
					<img src="<?= $mostFollowedSeries[1]->image ?>" class="thumbnail">
					<div class="carousel-caption">
						<h2>N°2</h2>
						<h3><?= $mostFollowedSeries[1]->title ?> (<?= $mostFollowedSeries[1]->year ?>)</h3>
						<p><?= $mostFollowedSeries[1]->seasons ?> saisons / <?= $mostFollowedSeries[1]->episodes ?> épisodes</p>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="#">
					<img src="<?= $mostFollowedSeries[2]->image ?>" class="thumbnail">
					<div class="carousel-caption">
						<h2>N°3</h2>
						<h3><?= $mostFollowedSeries[2]->title ?> (<?= $mostFollowedSeries[2]->year ?>)</h3>
						<p><?= $mostFollowedSeries[2]->seasons ?> saisons / <?= $mostFollowedSeries[2]->episodes ?> épisodes</p>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="#">
					<img src="<?= $mostFollowedSeries[3]->image ?>" class="thumbnail">
					<div class="carousel-caption">
						<h2>N°4</h2>
						<h3><?= $mostFollowedSeries[3]->title ?> (<?= $mostFollowedSeries[3]->year ?>)</h3>
						<p><?= $mostFollowedSeries[3]->seasons ?> saisons / <?= $mostFollowedSeries[3]->episodes ?> épisodes</p>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="#">
					<img src="<?= $mostFollowedSeries[4]->image ?>" class="thumbnail">
					<div class="carousel-caption">
						<h2>N°5</h2>
						<h3><?= $mostFollowedSeries[4]->title ?> (<?= $mostFollowedSeries[4]->year ?>)</h3>
						<p><?= $mostFollowedSeries[4]->seasons ?> saisons / <?= $mostFollowedSeries[4]->episodes ?> épisodes</p>
					</div>
				</a>
			</div>
		</div>
		
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			<li data-target="#carousel-example-generic" data-slide-to="4"></li>
		</ol>
		
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	
	<h2>Toutes les séries disponibles sur Netflix</h2>
	<div id="series_list" class="row">
		<?php foreach($series as $serie): ?>
			<a href="#">
				<img class="col-md-3 col-sm-4 col-xs-6 thumbnail" src="<?= $serie->image ?>">
			</a>
		<?php endforeach; ?>
	</div>
	

</div>