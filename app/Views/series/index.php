<!-- Contenu de la page d'accueil -->

<div id="bloc_content" class="accueil">
	<div id="flash_news" class="row">
		<h2 class="col-xs-12"><span>F</span>lash <span>A</span>ctu</h2>
		<div class="col-xs-12">
			<?php foreach ($lastNews as $news): ?>
				<div class="col-xs-12">
					<a href="<?= $news->url; ?>">
						<img class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 thumbnail"
						     src="<?= $news->image ?>" alt="<?= $news->image_name ?>">
					</a>
				</div>
				<div class="col-md-offset-2 col-md-8">
					<h3><?= $news->title; ?></h3>
					<p><?= $news->extrait; ?></p>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="col-xs-12">
		</div>
	</div>
	
	<h2>Top 5 des séries les plus suivies</h2>
	<div id="slider" class="row row-centered">
		<div id="showcase" class="col-xs-12 col-centered center-block">
			<a href="<?= $mostFollowedSeries[0]->url ?>">
				<img src="img/loading.svg" data-src="<?= $mostFollowedSeries[0]->image ?>"
				     alt="<?= $mostFollowedSeries[0]->title ?>"
				     class="cloud9-item col-md-3 col-sm-4 col-xs-5 thumbnail center-block col-centered">
			</a>
			<a href="<?= $mostFollowedSeries[1]->url ?>">
				<img src="img/loading.svg" data-src="<?= $mostFollowedSeries[1]->image ?>"
				     alt="<?= $mostFollowedSeries[1]->title ?>"
				     class="cloud9-item col-md-3 col-sm-4 col-xs-5 thumbnail center-block col-centered">
			</a>
			<a href="<?= $mostFollowedSeries[2]->url ?>">
				<img src="img/loading.svg" data-src="<?= $mostFollowedSeries[2]->image ?>"
				     alt="<?= $mostFollowedSeries[2]->title ?>"
				     class="cloud9-item col-md-3 col-sm-4 col-xs-5 thumbnail center-block col-centered">
			</a>
			<a href="<?= $mostFollowedSeries[3]->url ?>">
				<img src="img/loading.svg" data-src="<?= $mostFollowedSeries[3]->image ?>"
				     alt="<?= $mostFollowedSeries[3]->title ?>"
				     class="cloud9-item col-md-3 col-sm-4 col-xs-5 thumbnail center-block col-centered">
			</a>
			<a href="<?= $mostFollowedSeries[4]->url ?>">
				<img src="img/loading.svg" data-src="<?= $mostFollowedSeries[4]->image ?>"
				     alt="<?= $mostFollowedSeries[4]->title ?>"
				     class="cloud9-item col-md-3 col-sm-4 col-xs-5 thumbnail center-block col-centered">
			</a>
		</div>
		<div class="nav col-xs-12 center-block col-centered">
			<button class="left">←</button>
			<button class="right">→</button>
		</div>
	</div>
	
	<!--		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">-->
	<!--			<ol class="carousel-indicators">-->
	<!--				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
	<!--				<li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
	<!--				<li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
	<!--				<li data-target="#carousel-example-generic" data-slide-to="3"></li>-->
	<!--				<li data-target="#carousel-example-generic" data-slide-to="4"></li>-->
	<!--			</ol>-->
	<!--			-->
	<!--			<div class="carousel-inner" role="listbox">-->
	<!--				<div class="item active">-->
	<!--					<a href="--><? //= $mostFollowedSeries[0]->url ?><!--">-->
	<!--						<img src="--><? //= $mostFollowedSeries[0]->image ?><!--"-->
	<!--						     class="cloud9-item col-md-3 col-sm-4 col-xs-5 thumbnail center-block col-centered">-->
	<!--					</a>-->
	<!--				</div>-->
	<!--				<div class="item">-->
	<!--					<a href="--><? //= $mostFollowedSeries[1]->url ?><!--">-->
	<!--						<img src="--><? //= $mostFollowedSeries[1]->image ?><!--"-->
	<!--						     class="cloud9-item col-md-3 col-sm-4 col-xs-5 thumbnail center-block col-centered">-->
	<!--					</a>-->
	<!--				</div>-->
	<!--				<div class="item">-->
	<!--					<a href="--><? //= $mostFollowedSeries[2]->url ?><!--">-->
	<!--						<img src="--><? //= $mostFollowedSeries[2]->image ?><!--"-->
	<!--						     class="cloud9-item col-md-3 col-sm-4 col-xs-5 thumbnail center-block col-centered">-->
	<!--					</a>-->
	<!--				</div>-->
	<!--				<div class="item">-->
	<!--					<a href="--><? //= $mostFollowedSeries[3]->url ?><!--">-->
	<!--						<img src="--><? //= $mostFollowedSeries[3]->image ?><!--"-->
	<!--						     class="cloud9-item col-md-3 col-sm-4 col-xs-5 thumbnail center-block col-centered">-->
	<!--					</a>-->
	<!--				</div>-->
	<!--				<div class="item">-->
	<!--					<a href="--><? //= $mostFollowedSeries[4]->url ?><!--">-->
	<!--						<img src="--><? //= $mostFollowedSeries[4]->image ?><!--"-->
	<!--						     class="cloud9-item col-md-3 col-sm-4 col-xs-5 thumbnail center-block col-centered">-->
	<!--					</a>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--			-->
	<!--			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">-->
	<!--				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
	<!--			</a>-->
	<!--			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">-->
	<!--				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
	<!--			</a>-->
	<!--		</div>-->
	
	<hr id="ancre_tri">
	
	<h2>Toutes les séries disponibles sur Netflix</h2>
	<form method="get" action="#ancre_tri">
		<div id="searchbar" class="form-group">
			<input type="search" name="search" class="input-sm form-control" placeholder="Rechercher une série">
			<button type="submit" class="btn btn-sm"><i class="fas fa-search" aria-hidden="true"></i>
				Go
			</button>
		</div>
	</form>
	<?php
	if ($series == false) {
		?>
		<p class="no_serie_found">Aucune série trouvée.</p>
		<?php
	}
	?>
	<form method="post" action="#ancre_tri">
		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
			        data-toggle="dropdown"
			        aria-haspopup="true" aria-expanded="true">
				Afficher
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				<li>
					<i class="fas fa-sort-alpha-down" aria-hidden="true"></i>
					<input type="submit" name="alphabetic" value="De A à Z">
				</li>
				<li>
					<i class="fas fa-sort-alpha-up" aria-hidden="true"></i>
					<input type="submit" name="alphabeticDesc" value="De Z à A">
				</li>
				<li>
					<i class="fab fa-hacker-news" aria-hidden="true"></i>
					<input type="submit" name="year" value="Les plus récentes">
				</li>
				<li>
					<i class="fas fa-heart" aria-hidden="true"></i>
					<input type="submit" name="popularity" value="Les plus populaires">
				</li>
			</ul>
		</div>
	</form>
	<div id="bloc_series_list">
		<div id="list" class="row">
			<?php foreach ($series as $serie): ?>
				<a href="<?= $serie->url ?>">
					<img class="col-md-3 col-sm-4 col-xs-6 thumbnail" src="img/loading.svg" data-src="
			<?= $serie->image ?>" alt="<?= $serie->title ?>">
				</a>
			<?php endforeach; ?>
		</div>
		<div id="pagination"></div>
	</div>
	<br>
	<div id="visits_members" class="row">
		<div id="visits">
			<h3><span>V</span>isiteurs</h3>
			<p><?= $visits ?></p>
		</div>
		<div id="members">
			<h3><span>M</span>embres</h3>
			<p><?= $members ?></p>
		</div>
	</div>


</div>