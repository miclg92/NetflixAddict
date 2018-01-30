<!-- Contenu de la page d'accueil des actus-->

<div id="bloc_content">
	
	<div class="row categories">
		<h2 id="categories_title" class="col-xs-12">Toutes les actus reatives à Netflix</h2>
		<div class="col-xs-12">
			<ul class="col-xs-12">
				<?php foreach ($categories as $category): ?>
					<li><a class="btn" href="<?= $category->url; ?>"><?= $category->title; ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	
	<div id="bloc_news_list">
		<div id="list" class="row">
			<?php foreach ($news as $new): ?>
				<div class="row each_news">
					<div class="col-xs-12">
						<a class="col-xs-offset-2 col-xs-8" href="<?= $new->url ?>">
							<img class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-2 col-md-8 thumbnail"
							     src="<?= $new->image ?>" alt="<?= $new->image_name ?>">
						</a>
					</div>
					<div class="col-md-12 each_news_details">
						<h2><a href="<?= $new->url ?>"><?= $new->title; ?></a></h2>
						<h4>Catégorie " <a href=""><span><?= $new->category; ?></span></a> "</h4>
						<span><em>Publié le <?= $new->publish_date_fr; ?></em></span>
						<p><?= $new->extrait ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div id="pagination"></div>
	</div>

</div>


<!-- PAGINATION -->
<!--<script>-->
<!--	var show_per_page = 5;-->
<!--	var current_page = 0;-->
<!--	function set_display(first, last) {-->
<!--		$('#all_news').children().css('display', 'none');-->
<!--		$('#all_news').children().slice(first, last).css('display', 'block');-->
<!--	}-->
<!--	function previous(){-->
<!--		if($('.active').prev('.page_link').length) go_to_page(current_page - 1);-->
<!--	}-->
<!--	function next(){-->
<!--		if($('.active').next('.page_link').length) go_to_page(current_page + 1);-->
<!--	}-->
<!--	function go_to_page(page_num){-->
<!--		current_page = page_num;-->
<!--		start_from = current_page * show_per_page;-->
<!--		end_on = start_from + show_per_page;-->
<!--		set_display(start_from, end_on);-->
<!--		$('.active').removeClass('active');-->
<!--		$('#id' + page_num).addClass('active');-->
<!--	}-->
<!--	$(document).ready(function() {-->
<!--		-->
<!--		var number_of_pages = Math.ceil($('#all_news').children().length / show_per_page);-->
<!--		-->
<!--		var nav = '<ul class="pagination"><li><a href="javascript:previous();">&laquo;</a>';-->
<!--		-->
<!--		var i = -1;-->
<!--		while(number_of_pages > ++i){-->
<!--			nav += '<li class="page_link'-->
<!--			if(!i) nav += ' active';-->
<!--			nav += '" id="id' + i +'">';-->
<!--			nav += '<a href="javascript:go_to_page(' + i +')">'+ (i + 1) +'</a>';-->
<!--		}-->
<!--		nav += '<li><a href="javascript:next();">&raquo;</a></ul>';-->
<!--		-->
<!--		$('#pagination_news').html(nav);-->
<!--		set_display(0, show_per_page);-->
<!--	});-->
<!--</script>-->