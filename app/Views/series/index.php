<!-- Contenu de la page d'accueil -->

<div id="bloc_content">
	
	<div id="flash_news" class="row">
		<h2 class="col-xs-12">Flash actu</h2>
		<div class="col-xs-12">
			<?php foreach($lastNews as $news): ?>
				<div class="col-xs-12">
					<a href="<?= $news->url; ?>">
						<img class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 thumbnail" src="<?= $news->image ?>" alt="<?= $news->image_name ?>">
					</a>
				</div>
				<div class="col-md-offset-2 col-md-8">
					<h3><?= $news->title;?></h3>
					<p><?= $news->extrait; ?></p>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="col-xs-12">
		</div>
	</div>
	
	<h2>Top 5 des séries les plus suivies</h2>
	<div id="showcase" class="col-xs-12 center-block">
		<a href="<?= $mostFollowedSeries[0]->url ?>">
			<img src="<?= $mostFollowedSeries[0]->image ?>" class="cloud9-item col-md-3 col-sm-4 col-xs-5 thumbnail center-block">
		</a>
		<a href="<?= $mostFollowedSeries[1]->url ?>">
			<img src="<?= $mostFollowedSeries[1]->image ?>" class="cloud9-item col-md-3 col-sm-4 col-xs-5 thumbnail">
		</a>
		<a href="<?= $mostFollowedSeries[2]->url ?>">
			<img src="<?= $mostFollowedSeries[2]->image ?>" class="cloud9-item col-md-3 col-sm-4 col-xs-5 thumbnail">
		</a>
		<a href="<?= $mostFollowedSeries[3]->url ?>">
			<img src="<?= $mostFollowedSeries[3]->image ?>" class="cloud9-item col-md-3 col-sm-4 col-xs-5 thumbnail">
		</a>
		<a href="<?= $mostFollowedSeries[4]->url ?>">
			<img src="<?= $mostFollowedSeries[4]->image ?>" class="cloud9-item col-md-3 col-sm-4 col-xs-5 thumbnail">
		</a>
	</div>
	<div class="nav">
		<button class="left">←</button>
		<button class="right">→</button>
	</div>
	
<!--	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-keyboard="true">-->
<!--		<div class="carousel-inner" role="listbox">-->
<!--			<div class="item active">-->
<!--				<a href="--><?//= $mostFollowedSeries[0]->url ?><!--">-->
<!--					<img src="--><?//= $mostFollowedSeries[0]->image ?><!--" class="thumbnail">-->
<!--					<div class="carousel-caption">-->
<!--						<h2>N°1</h2>-->
<!--						<h3>--><?//= $mostFollowedSeries[0]->title ?><!-- (--><?//= $mostFollowedSeries[0]->year ?><!--)</h3>-->
<!--						<p>--><?//= $mostFollowedSeries[0]->seasons ?><!-- saisons / --><?//= $mostFollowedSeries[0]->episodes ?><!-- épisodes</p>-->
<!--					</div>-->
<!--				</a>-->
<!--			</div>-->
<!--			<div class="item">-->
<!--				<a href="--><?//= $mostFollowedSeries[1]->url ?><!--">-->
<!--					<img src="--><?//= $mostFollowedSeries[1]->image ?><!--" class="thumbnail">-->
<!--					<div class="carousel-caption">-->
<!--						<h2>N°2</h2>-->
<!--						<h3>--><?//= $mostFollowedSeries[1]->title ?><!-- (--><?//= $mostFollowedSeries[1]->year ?><!--)</h3>-->
<!--						<p>--><?//= $mostFollowedSeries[1]->seasons ?><!-- saisons / --><?//= $mostFollowedSeries[1]->episodes ?><!-- épisodes</p>-->
<!--					</div>-->
<!--				</a>-->
<!--			</div>-->
<!--			<div class="item">-->
<!--				<a href="--><?//= $mostFollowedSeries[2]->url ?><!--">-->
<!--					<img src="--><?//= $mostFollowedSeries[2]->image ?><!--" class="thumbnail">-->
<!--					<div class="carousel-caption">-->
<!--						<h2>N°3</h2>-->
<!--						<h3>--><?//= $mostFollowedSeries[2]->title ?><!-- (--><?//= $mostFollowedSeries[2]->year ?><!--)</h3>-->
<!--						<p>--><?//= $mostFollowedSeries[2]->seasons ?><!-- saisons / --><?//= $mostFollowedSeries[2]->episodes ?><!-- épisodes</p>-->
<!--					</div>-->
<!--				</a>-->
<!--			</div>-->
<!--			<div class="item">-->
<!--				<a href="--><?//= $mostFollowedSeries[3]->url ?><!--">-->
<!--					<img src="--><?//= $mostFollowedSeries[3]->image ?><!--" class="thumbnail">-->
<!--					<div class="carousel-caption">-->
<!--						<h2>N°4</h2>-->
<!--						<h3>--><?//= $mostFollowedSeries[3]->title ?><!-- (--><?//= $mostFollowedSeries[3]->year ?><!--)</h3>-->
<!--						<p>--><?//= $mostFollowedSeries[3]->seasons ?><!-- saisons / --><?//= $mostFollowedSeries[3]->episodes ?><!-- épisodes</p>-->
<!--					</div>-->
<!--				</a>-->
<!--			</div>-->
<!--			<div class="item">-->
<!--				<a href="--><?//= $mostFollowedSeries[4]->url ?><!--">-->
<!--					<img src="--><?//= $mostFollowedSeries[4]->image ?><!--" class="thumbnail">-->
<!--					<div class="carousel-caption">-->
<!--						<h2>N°5</h2>-->
<!--						<h3>--><?//= $mostFollowedSeries[4]->title ?><!-- (--><?//= $mostFollowedSeries[4]->year ?><!--)</h3>-->
<!--						<p>--><?//= $mostFollowedSeries[4]->seasons ?><!-- saisons / --><?//= $mostFollowedSeries[4]->episodes ?><!-- épisodes</p>-->
<!--					</div>-->
<!--				</a>-->
<!--			</div>-->
<!--		</div>-->
<!--		-->
<!--		<!-- indicateurs de diapo -->
<!--		<ol class="carousel-indicators">-->
<!--			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
<!--			<li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
<!--			<li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
<!--			<li data-target="#carousel-example-generic" data-slide-to="3"></li>-->
<!--			<li data-target="#carousel-example-generic" data-slide-to="4"></li>-->
<!--		</ol>-->
<!--		-->
<!--		<!-- Flèches de navigation -->
<!--		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">-->
<!--			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
<!--			<span class="sr-only">Previous</span>-->
<!--		</a>-->
<!--		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">-->
<!--			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
<!--			<span class="sr-only">Next</span>-->
<!--		</a>-->
<!--	</div>-->
	
	<hr>
	
	<h2>Toutes les séries disponibles sur Netflix</h2>
	<div class="dropdown">
		<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			Trier par
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
			<li><a href="#">Année de création</a></li>
			<li><a href="#">Ordre alphabétique</a></li>
			<li><a href="#bloc_series_list">Popularité</a></li>
		</ul>
	</div>
	<div id="bloc_series_list">
		<div id="series_list" class="row">
			<?php foreach($seriesByPopularity as $serie): ?>
				<a href="<?= $serie->url ?>">
					<img class="col-md-3 col-sm-4 col-xs-6 thumbnail" src="<?= $serie->image ?>">
				</a>
			<?php endforeach; ?>
		</div>
		<div id="pagination"></div>
	</div>
</div>

<!-- CAROUSEL -->
<script>
	$(function() {
		var showcase = $("#showcase");
		showcase.Cloud9Carousel( {
			yPos: 42,
			yRadius: 48,
			mirrorOptions: {
				gap: 12,
				height: 0.2
			},
			buttonLeft: $(".nav > .left"),
			buttonRight: $(".nav > .right"),
			autoPlay: true,
			bringToFront: true,
//			onRendered: showcaseUp<a href="https://www.jqueryscript.net/time-clock/">date</a>d,
			onLoaded: function() {
				showcase.css( 'visibility', 'visible' );
				showcase.css( 'display', 'none' );
				showcase.fadeIn( 1500 )
			}
		} );
		
		$('.nav > button').click( function( e ) {
			var b = $(e.target).addClass( 'down' );
			setTimeout( function() { b.removeClass( 'down' ) }, 80 )
		} );
		
		$(document).keydown( function( e ) {
			switch( e.keyCode ) {
				/* left arrow */
				case 37:
					$('.nav > .left').click();
					break;
				/* right arrow */
				case 39:
					$('.nav > .right').click();
			}
		} )
	})
</script>

<!-- PAGINATION -->
<script>
	var show_per_page = 12;
	var current_page = 0;
	function set_display(first, last) {
		$('#series_list').children().css('display', 'none');
		$('#series_list').children().slice(first, last).css('display', 'block');
	}
	function previous(){
		if($('.active').prev('.page_link').length) go_to_page(current_page - 1);
	}
	function next(){
		if($('.active').next('.page_link').length) go_to_page(current_page + 1);
	}
	function go_to_page(page_num){
		current_page = page_num;
		start_from = current_page * show_per_page;
		end_on = start_from + show_per_page;
		set_display(start_from, end_on);
		$('.active').removeClass('active');
		$('#id' + page_num).addClass('active');
	}
	$(document).ready(function() {
		
		var number_of_pages = Math.ceil($('#series_list').children().length / show_per_page);
		
		var nav = '<ul class="pagination"><li><a href="javascript:previous();">&laquo;</a>';
		
		var i = -1;
		while(number_of_pages > ++i){
			nav += '<li class="page_link'
			if(!i) nav += ' active';
			nav += '" id="id' + i +'">';
			nav += '<a href="javascript:go_to_page(' + i +')">'+ (i + 1) +'</a>';
		}
		nav += '<li><a href="javascript:next();">&raquo;</a></ul>';
		
		$('#pagination').html(nav);
		set_display(0, show_per_page);
	});
</script>