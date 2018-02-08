<?php
if (isset($_SESSION['auth']) && isset($_SESSION['user']) && $_SESSION['user']->flag == 2) {
	?>
	<div id="bloc_content">
		<div id="edit_comment" class="form">
			<form method="post" action="">
				<a href="index.php?p=admin.comments.index" type="button" class="close" data-dismiss="modal"
				   aria-label="Close"><span aria-hidden="true">X</span></a>
				<br>
				<h3>Modérer ce commentaire</h3>
				<div class="form-group">
					<label for="comment">Contenu à modérer</label>
					<textarea class="form-control" name="comment"><?= $commentContent ?></textarea>
				</div>
				<hr>
				<div class="text-center">
					<button id="edit_comment_btn" type="submit" class="btn btn-default" aria-hidden="true"><i
								class="fas fa-save" aria-hidden="true"></i> Enregistrer
					</button>
					<a href="index.php?p=admin.comments.index" type="button" id="login_form_btn" class="btn"
					   aria-hidden="true"><i class="fas fa-reply" aria-hidden="true"></i> Annuler</a>
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