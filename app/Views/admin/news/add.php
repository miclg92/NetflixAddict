<?php
if(isset($_SESSION['auth']) && isset($_SESSION['user']) && $_SESSION['user']->flag == 2){
	?>
	<div id="bloc_content">
		<div id="add-news">
			<form method="post" class="form" enctype="multipart/form-data">
				<a href="index.php?p=admin.news.index" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
				<h3>PUBLIER UNE ACTU</h3>
				<hr>
				<?= $form->input('title', 'Titre de l\'actu : '); ?>
				<?= $form->input('content', 'Contenu : ', ['type' => 'textarea']); ?>
				<?= $form->select('category_id', 'Catégorie : ', $categories); ?>
				<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
				<?= $form->input('image', 'Photo : ', ['type' => 'file']); ?>
				<div class="text-center">
					<button id="add_news_btn" type="submit" class="btn btn-default" aria-hidden="true">Publier</button>
					<a href="index.php?p=admin.news.index" type="button" id="add_news_btn" type="submit" class="btn" aria-hidden="true"><i class="fa fa-reply" aria-hidden="true"></i> Annuler</a>
				</div>
				
				<?php if (!empty($errors)): ?>
					<div class="errors">
						<ul>
							<?php foreach ($errors as $error): ?>
								<li><?= $error; ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
			</form>
		</div>
	</div>
	<?php
} else {
	$_SESSION['flash']['danger'] = "Vous ne pouvez pas afficher cette page. Veuillez vous connecter en tant qu'administrateur du site";
}
?>