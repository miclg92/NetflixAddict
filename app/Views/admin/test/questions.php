<?php
if (isset($_SESSION['auth']) && isset($_SESSION['user']) && $_SESSION['user']->flag == 2) {
	?>
	<div id="bloc_content">
		<div id="test_questions" class="form">
			<a href="index.php?p=admin.test.index" type="button" class="close" data-dismiss="modal"
			   aria-label="Close"><span aria-hidden="true">X</span></a>
			<h3>Mise à jour des questions du Test</h3>
			<table class="table">
				<thead>
				<tr>
					<td>N°</td>
					<td>Question</td>
					<td></td>
				</tr>
				</thead>
				
				<tbody>
				<?php foreach ($questions as $question): ?>
					<tr>
						<td class="param_value"><?= $question->question_number; ?></td>
						<td class="param_value"><?= $question->question; ?></td>
						<td id="buttons-actions">
							<a class="btn" href="?p=admin.test.editQuestion&id=<?= $question->id; ?>"><i
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