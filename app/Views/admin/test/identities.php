<?php
if (isset($_SESSION['auth']) && isset($_SESSION['user']) && $_SESSION['user']->flag == 2) {
	?>
	<div id="bloc_content">
		<div id="test_identities" class="form">
			<a href="index.php?p=admin.test.index" type="button" class="close" data-dismiss="modal"
			   aria-label="Close"><span aria-hidden="true">X</span></a>
			<h3>Mise à jour des personnages</h3>
			<table class="table">
				<thead>
				<tr>
					<td>Index</td>
					<td>Nom</td>
					<td>Description</td>
					<td></td>
				</tr>
				</thead>
				
				<tbody>
				<?php foreach ($identities as $identitie): ?>
					<tr>
						<td class="param_value"><?= $identitie->answer_index; ?></td>
						<td class="param_value"><?= $identitie->personality_name; ?></td>
						<td class="param_value"><?= $identitie->personality_description; ?></td>
						<td id="buttons-actions">
							<a class="btn" href="?p=admin.test.editIdentity&id=<?= $identitie->id; ?>"><i
										class="fas fa-pencil-alt" aria-hidden="true"></i> Modifier</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<hr>
			<div class="text-center">
				<a href="index.php?p=admin.test.index" type="button" id="login_form_btn" class="btn" aria-hidden="true"><i
							class="fas fa-reply" aria-hidden="true"></i> Annuler</a>
			</div>
		</div>
	</div>
	<?php
} else {
	$_SESSION['flash']['danger'] = "Vous ne pouvez pas afficher cette page. Veuillez vous connecter en tant qu'administrateur";
}
?>