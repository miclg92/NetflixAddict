<?php
if(isset($_SESSION['auth']) && isset($_SESSION['user']) && $_SESSION['user']->flag == 2){
	?>
	<div id="bloc_content">
		<div id="add_categories" class="form">
			<form method="post" action="">
				<a href="index.php?p=admin.newsCategories.index" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
				<br>
				<h3>Ajouter une catégorie</h3>
				<?= $form->input('title', 'Nom de la catégorie'); ?>
				<hr>
				<div class="text-center">
					<button id="add_categories_btn" type="submit" class="btn btn-default" aria-hidden="true"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter</button>
					<a href="index.php?p=admin.newsCategories.index" type="button" id="login_form_btn" class="btn" aria-hidden="true"><i class="fa fa-reply" aria-hidden="true"></i> Annuler</a>
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
	$_SESSION['flash']['danger'] = "Vous ne pouvez pas afficher cette page. Veuillez vous connecter en tant qu'administrateur";
}
?>