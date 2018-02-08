<!-- Contenu de toutes les épisodes relatives à une catégorie spécifique -->

<div id="bloc_content">
	
	<div class="row">
		<p class="col-xs-5 return"><a href="index.php?p=news.index"><i class="fas fa-reply" aria-hidden="true"></i>
				Toutes les actus</a></p>
	</div>
	
	<div class="row categories">
		<h2 id="categories_title" class="col-xs-12">Actus de la catégorie " <span><?= $category->title; ?></span> "</h2>
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
			<div>
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
							<h4>Catégorie " <a><span><?= $new->category; ?></span></a> "</h4>
							<span><em>Publié le <?= $new->publish_date_fr; ?></em></span>
							<p><?= $new->extrait ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>