<div id="bloc_content">
	<div id="quizz" class="form row">
		<img src="img/netflix_quiz.jpg" alt="Logo Netflix avec photos de séries'">
		<h2 class="col-xs-12">Connais-tu vraiment l'univers Netflix ?</h2>
		<h2 class="col-xs-12">Prêt à tenter ta chance ?</h2>
		<hr>
		<?php
		if (isset($_SESSION['auth'])) {
			?>
			<div id="slickQuiz">
				<h1 class="quizName"></h1>
				<div class="quizArea">
					<div class="quizHeader text-center">
						<a class="startQuiz btn" href="" type="button" id="login_form_btn" aria-hidden="true">GO</a>
					</div>
				</div>
				<div class="quizResults">
					<h3 class="quizScore">Ton score : <span></span></h3>
					<h3 class="quizLevel"><strong>Classement :</strong> <span></span></h3>
					<div class="quizResultsCopy"></div>
				</div>
			</div>
			<?php
		} else {
			?>
			<div id="link_login_btns" class="col-xs-12">
				<div class="register_btn col-xs-6">
					<a href="index.php?p=users.register" class="btn not_logged"><i class="fa fa-user-plus"
					                                                               aria-hidden="true"></i>
						Inscrivez-vous</a>
				</div>
				<div class="login_btn col-xs-6">
					<a href="index.php?p=users.login" class="btn not_logged"><i class="fa fa-sign-in"
					                                                            aria-hidden="true"></i>
						Connectez-vous</a>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</div>