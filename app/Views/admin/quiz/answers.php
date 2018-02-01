<?php
if (isset($_SESSION['auth']) && isset($_SESSION['user']) && $_SESSION['user']->flag == 2) {
	?>
	<div id="bloc_content">
		<div id="quiz_answers" class="form">
			<a href="index.php?p=admin.quiz.index" type="button" class="close" data-dismiss="modal"
			   aria-label="Close"><span aria-hidden="true">X</span></a>
			<h3>Mise à jour des réponses du Quiz</h3>
			<table class="table">
				<thead>
				<tr>
					<td>Question N°</td>
					<td>Réponse</td>
					<td>Correcte</td>
					<td></td>
				</tr>
				</thead>
				
				<tbody>
				<?php foreach ($answers as $answer): ?>
					<tr>
						<td class="param_value"><?= $answer->question_number; ?></td>
						<td class="param_value"><?= $answer->answer; ?></td>
						<td class="param_value"><?= $answer->is_correct; ?></td>
						<td id="buttons-actions">
							<a class="btn" href="?p=admin.quiz.editAnswer&id=<?= $answer->id; ?>"><i
										class="fa fa-pencil" aria-hidden="true"></i> Modifier</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<hr>
			<div class="text-center">
				<a href="index.php?p=admin.quiz.index" type="button" id="login_form_btn" class="btn" aria-hidden="true"><i
							class="fa fa-reply" aria-hidden="true"></i> Annuler</a>
			</div>
		</div>
	</div>
	<?php
} else {
	$_SESSION['flash']['danger'] = "Vous ne pouvez pas afficher cette page. Veuillez vous connecter en tant qu'administrateur";
}
?>