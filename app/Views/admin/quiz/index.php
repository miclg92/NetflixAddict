<?php
if (isset($_SESSION['auth']) && isset($_SESSION['user']) && $_SESSION['user']->flag == 2) {
	?>
	<div id="bloc_content">
		<div id="quiz_index" class="row form">
			<a href="?p=users.account" type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">X</span></a>
			<h3>Mise à jour du Quiz</h3>
			<form method="post" action="">
				<div>
					<a href="?p=admin.quiz.questions" type="button" id="login_form_btn" class="btn"
					   aria-hidden="true"><i class="fas fa-question-circle" aria-hidden="true"></i> Questions</a>
					<a href="?p=admin.quiz.answers" type="button" id="login_form_btn" class="btn"
					   aria-hidden="true"><i
								class="fas fa-registered" aria-hidden="true"></i> Réponses</a>
				</div>
			</form>
		</div>
	</div>
	<?php
} else {
	$_SESSION['flash']['danger'] = "Vous ne pouvez pas afficher cette page. Veuillez vous connecter en tant qu'administrateur";
}
?>