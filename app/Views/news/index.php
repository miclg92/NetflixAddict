<!-- Contenu de la page d'accueil des actus-->

<div id="bloc_content" class="actus">
	
	<div class="row categories">
		<h2 id="categories_title" class="col-xs-12">Toutes les actus relatives à Netflix</h2>
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
	
	<div id="return_news_btn" class="col-xs-12">
		<div class="register_btn col-xs-6">
			<a href="index.php" class="btn"><i class="fas fa-home"
			                                   aria-hidden="true"></i>
				Accueil</a>
		</div>
		<div class="login_btn col-xs-6">
			<a href="index.php?p=news.index" class="btn not_logged"><i class="fas fa-reply"
			                                                           aria-hidden="true"></i>
				Haut de page</a>
		</div>
	</div>

</div>
