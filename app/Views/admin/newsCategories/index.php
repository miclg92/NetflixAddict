<?php
if(isset($_SESSION['auth']) && isset($_SESSION['user']) && $_SESSION['user']->flag == 2){
	?>
	<div id="bloc_content">
		<div id="admin_categories" class="form">
			<a href="index.php?p=users.account" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
			<h3>Gestion des catégories</h3>
			<a href="?p=admin.newsCategories.add" type="button" id="login_form_btn" class="btn col-xs-12" aria-hidden="true"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter une Catégorie</a>
			<table class="table">
				<thead>
				<tr>
					<td>TITRE</td>
					<td></td>
				</tr>
				</thead>
				
				<tbody>
				<?php foreach ($categories as $category): ?>
					<tr>
						<td class="param_value"><?= $category->title; ?></td>
						
						<td id="buttons-actions">
							<a class="btn" href="?p=admin.newsCategories.edit&id=<?= $category->id; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Modifier</a>
							<form action="?p=admin.newsCategories.delete" method="post" style="display: inline;">
								<input type="hidden" name="id" value="<?= $category->id ?>">
								<button type="submit" class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
							</form>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<hr>
			<div class="text-center">
				<a href="index.php?p=users.account" type="button" id="login_form_btn" class="btn" aria-hidden="true"><i class="fa fa-reply" aria-hidden="true"></i> Annuler</a>
			</div>
		</div>
	</div>
	<?php
} else {
	$_SESSION['flash']['danger'] = "Vous ne pouvez pas afficher cette page. Veuillez vous connecter en tant qu'administrateur";
}
?>