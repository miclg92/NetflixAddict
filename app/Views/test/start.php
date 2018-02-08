<div id="bloc_content" class="quiEsTu">
	<div id="personality" class="form row">
		<img src="img/stranger_things_groupe.jpg"
		     alt="Photo des 5 enfants principaux de la série Netflix 'Stranger things'">
		<?php
		if (isset($_SESSION['auth'])) {
			if ($_SESSION['user']->personality != NULL) {
				?>
				<h2 class="col-xs-12">Tu as déjà fait le test !</h2>
				<hr>
				<form method="post" action="#menu">
					<a class="startQuiz btn" name="starQuiz" href="?p=test.result" type="submit" id="login_form_btn"
					   aria-hidden="true">Voir les résultats</a>
				</form>
				<?php
			} else {
				?>
				<h2 class="col-xs-12">Quel personnage de "Stranger Things" es-tu ?</h2>
				<h2 class="col-xs-12">Lucas, Onze, Mike, will ou Dustin ?</h2>
				<hr>
				
				<div class="quiz_details">
					<p>Ce quiz comporte <?= $nb; ?> questions</p>
					<p>Durée approximative : <?= $nb * .5; ?> minutes</p> <!-- Nb de questions * (30 sec/Question) -->
				</div>
				<form method="post" action="#menu">
					<a class="startQuiz btn" name="starQuiz" href="?p=test.questions&q=1" type="submit"
					   id="login_form_btn"
					   aria-hidden="true">Commencer</a>
				</form>
				<?php
			}
		} else {
			?>
			<div id="link_login_btns" class="col-xs-12">
				<h2 class="col-xs-12">Quel personnage de "Stranger Things" es-tu ?</h2>
				<h2 class="col-xs-12">Lucas, Onze, Mike, will ou Dustin ?</h2>
				<hr>
				<div class="text-center">
					<a href="index.php?p=users.register" type="button" id="login_form_btn" class="btn"
					   aria-hidden="true"><i
								class="fas fa-user-plus" aria-hidden="true"></i> Inscription</a>
					<a href="index.php?p=users.login" type="button" id="login_form_btn" class="btn"
					   aria-hidden="true"><i
								class="fas fa-sign-in-alt" aria-hidden="true"></i> Connexion</a>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</div>