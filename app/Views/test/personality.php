<div id="bloc_content">
	<div id="personality" class="form row">
		<img src="img/stranger_things_groupe.jpg"
		     alt="Photo des 5 enfants principaux de la série Netflix 'Stranger things'">
		<h2 class="col-xs-12">Quel personnage de "Stranger Things" es-tu ?</h2>
		<h3 class="col-xs-12">Lucas, Onze, Mike, will ou Dustin ?</h3>
		<hr>
		<?php
		if (isset($_SESSION['auth'])) {
			?>
			<div id="quizzie">
				<ul class="quiz-step step1 current">
					<li class="question">
						<div class="question-wrap">
							<p class="round">1</p>
							<img src="img/stranger_things_demogorgon.jpg"
							     alt="Photo du demogorgon de la série Netflix 'Stranger things'">
							<h2>À part le Demogorgon, de quoi as-tu le plus peur ?</h2>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="2">
						<div class="answer-wrap">
							<p class="answer-text">De perdre un être cher</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="4">
						<div class="answer-wrap">
							<p class="answer-text">Du noir</p>
						</div>
					</li>
					<li class="quiz-answer high-value" data-quizIndex="5">
						<div class="answer-wrap">
									<p class="answer-text">Du regard des autres</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="3">
						<div class="answer-wrap">
							<p class="answer-text">De l'isolement</p>
						</div>
					</li>
					<li class="quiz-answer low-value" data-quizIndex="1">
						<div class="answer-wrap">
							<p class="answer-text">Du gouvernement</p>
						</div>
					</li>
				</ul>
				
				<ul class="quiz-step step2">
					<li class="question">
						<div class="question-wrap">
							<p class="round">2</p>
							<img src="img/stranger_things_film.jpg"
							     alt="Photo d'un extrait de la série Netflix 'Stranger things'">
							<h2>Quel est ton film préféré des années 80 ?</h2>
						</div>
					</li>
					<li class="quiz-answer high-value" data-quizIndex="5">
						<div class="answer-wrap">
							<p class="answer-text">Retour vers le futur</p>
						</div>
					</li>
					<li class="quiz-answer low-value" data-quizIndex="1">
						<div class="answer-wrap">
							<p class="answer-text">Star Wars Episode V</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="4">
						<div class="answer-wrap">
							<p class="answer-text">E.T. l'extra-terrestre</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="2">
						<div class="answer-wrap">
							<p class="answer-text">Alien</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="3">
						<div class="answer-wrap">
							<p class="answer-text">Les Goonies</p>
						</div>
					</li>
				</ul>
				
				<ul class="quiz-step step3">
					<li class="question">
						<div class="question-wrap">
							<p class="round">3</p>
							<img src="img/stranger_things_friends.jpg"
							     alt="Photo des enfants de la série Netflix 'Stranger things'">
							<h2>Tes amis pourraient te décrire comme quelqu'un de... ?</h2>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="2">
						<div class="answer-wrap">
							<p class="answer-text">Loyal</p>
						</div>
					</li>
					<li class="quiz-answer high-value" data-quizIndex="5">
						<div class="answer-wrap">
							<p class="answer-text">Audacieux</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="3">
						<div class="answer-wrap">
							<p class="answer-text">Drôle</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="4">
						<div class="answer-wrap">
							<p class="answer-text">Calme</p>
						</div>
					</li>
					<li class="quiz-answer low-value" data-quizIndex="1">
						<div class="answer-wrap">
							<p class="answer-text">Spécial</p>
						</div>
					</li>
				</ul>
				
				<ul class="quiz-step step4">
					<li class="question">
						<div class="question-wrap">
							<p class="round">4</p>
							<img src="img/stranger_things_batracian.jpg"
							     alt="Photo du batracien de la poubelle dans la série Netflix 'Stranger things'">
							<h2>Que fais-tu si tu trouves cette créature dans ta poubelle ?</h2>
						</div>
					</li>
					<li class="quiz-answer high-value" data-quizIndex="5">
						<div class="answer-wrap">
							<p class="answer-text">Je la tue sur le champ</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="2">
						<div class="answer-wrap">
							<p class="answer-text">Je cherche son origine</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="3">
						<div class="answer-wrap">
							<p class="answer-text">Je la garde en animal de compagnie</p>
						</div>
					</li>
					<li class="quiz-answer low-value" data-quizIndex="1">
						<div class="answer-wrap">
							<p class="answer-text">Je la renvoie dans sa dimension</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="4">
						<div class="answer-wrap">
							<p class="answer-text">Je pars en courant</p>
						</div>
					</li>
				</ul>
				
				<ul class="quiz-step step5">
					<li class="question">
						<div class="question-wrap">
							<p class="round">5</p>
							<img src="img/stranger_things_friends2.jpg"
							     alt="Photo des enfants de la série Netflix 'Stranger things'">
							<h2>Dans quel cas pourrais-tu arrêter de parler à tes amis ?</h2>
						</div>
					</li>
					<li class="quiz-answer high-value" data-quizIndex="5">
						<div class="answer-wrap">
							<p class="answer-text">A cause d'un nouvel arrivé dans la bande</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="3">
						<div class="answer-wrap">
							<p class="answer-text">A cause d'une histoire de coeur</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="4">
						<div class="answer-wrap">
							<p class="answer-text">Parce que tu as disparu</p>
						</div>
					</li>
					<li class="quiz-answer low-value" data-quizIndex="1">
						<div class="answer-wrap">
							<p class="answer-text">Pour les protéger</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="2">
						<div class="answer-wrap">
							<p class="answer-text">Parce qu'ils ne te comprennent pas</p>
						</div>
					</li>
				</ul>
				
				<ul class="quiz-step step6">
					<li class="question">
						<div class="question-wrap">
							<p class="round">6</p>
							<img src="img/stranger_things_flying_van.png"
							     alt="Photo du flying van de la série Netflix 'Stranger things'">
							<h2>Si tu étais un super-héros, quel serait ton pouvoir ?</h2>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="4">
						<div class="answer-wrap">
							<p class="answer-text">Être invisible</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="3">
						<div class="answer-wrap">
							<p class="answer-text">Savoir voler</p>
						</div>
					</li>
					<li class="quiz-answer high-value" data-quizIndex="5">
						<div class="answer-wrap">
							<p class="answer-text">Etre surpuissant</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="2">
						<div class="answer-wrap">
							<p class="answer-text">Savoir lire dans les pensées</p>
						</div>
					</li>
					<li class="quiz-answer low-value" data-quizIndex="1">
						<div class="answer-wrap">
							<p class="answer-text">Maitriser la télékinésie</p>
						</div>
					</li>
				</ul>
				
				<ul class="quiz-step step7">
					<li class="question">
						<div class="question-wrap">
							<p class="round">7</p>
							<img src="img/stranger_things_clothe.jpg"
							     alt="Photo d'un tshirt indiquant le nom des enfants de la série Netflix 'Stranger things'">
							<h2>Quel est ton vêtement ou accessoire de mode préféré ?</h2>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="4">
						<div class="answer-wrap">
							<p class="answer-text">Une chemise</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="3">
						<div class="answer-wrap">
							<p class="answer-text">Une casquette</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="2">
						<div class="answer-wrap">
							<p class="answer-text">Un polo</p>
						</div>
					</li>
					<li class="quiz-answer high-value" data-quizIndex="5">
						<div class="answer-wrap">
							<p class="answer-text">Un bandana</p>
						</div>
					</li>
					<li class="quiz-answer low-value" data-quizIndex="1">
						<div class="answer-wrap">
							<p class="answer-text">Une salopette</p>
						</div>
					</li>
				</ul>
				
				<ul class="quiz-step step8">
					<li class="question">
						<div class="question-wrap">
							<p class="round">8</p>
							<img src="img/stranger_things_game.jpg"
							     alt="Photo du jeu de role apparaissant dans la série Netflix 'Stranger things'">
							<h2>Dans un jeu de rôles, quel personnage es-tu ?</h2>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="4">
						<div class="answer-wrap">
							<p class="answer-text">Un prêtre</p>
						</div>
					</li>
					<li class="quiz-answer high-value" data-quizIndex="5">
						<div class="answer-wrap">
							<p class="answer-text">Un paladin</p>
						</div>
					</li>
					<li class="quiz-answer low-value" data-quizIndex="1">
						<div class="answer-wrap">
							<p class="answer-text">Un magicien</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="2">
						<div class="answer-wrap">
							<p class="answer-text">Un druide</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="3">
						<div class="answer-wrap">
							<p class="answer-text">Un gnome</p>
						</div>
					</li>
				</ul>
				
				<ul class="quiz-step step9">
					<li class="question">
						<div class="question-wrap">
							<p class="round">9</p>
							<img src="img/stranger_things_music.jpg"
							     alt="Photo des enfants de la série Netflix 'Stranger things' en train de chanter">
							<h2>Quelle chanson des années 80 préfères-tu ?</h2>
						</div>
					</li>
					<li class="quiz-answer low-value" data-quizIndex="1">
						<div class="answer-wrap">
							<p class="answer-text">Madonna - "Papa don't Preach"</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="3">
						<div class="answer-wrap">
							<p class="answer-text">Wham! - "Wake me up"</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="2">
						<div class="answer-wrap">
							<p class="answer-text">The Police - "Every breath you take"</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="4">
						<div class="answer-wrap">
							<p class="answer-text">Eurythmics - "Sweet Dreams"</p>
						</div>
					</li>
					<li class="quiz-answer high-value" data-quizIndex="5">
						<div class="answer-wrap">
							<p class="answer-text">Michael Jackson - "Beat it"</p>
						</div>
					</li>
				</ul>
				
				<ul class="quiz-step step10">
					<li class="question">
						<div class="question-wrap">
							<p class="round">10</p>
							<img src="img/stranger_things_dessert.jpg" alt="Photo d'un gateau 'Stranger Things'">
							<h2>Quel est ton dessert préféré ?</h2>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="3">
						<div class="answer-wrap">
							<p class="answer-text">Une barre de nougat</p>
						</div>
					</li>
					<li class="quiz-answer low-value" data-quizIndex="1">
						<div class="answer-wrap">
							<p class="answer-text">Une gauffre</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="2">
						<div class="answer-wrap">
							<p class="answer-text">Une mousse au chocolat</p>
						</div>
					</li>
					<li class="quiz-answer high-value" data-quizIndex="5">
						<div class="answer-wrap">
							<p class="answer-text">Un bonbon</p>
						</div>
					</li>
					<li class="quiz-answer" data-quizIndex="4">
						<div class="answer-wrap">
							<p class="answer-text">Une limace en gélatine"</p>
						</div>
					</li>
				</ul>
				
				<ul id="results">
					<li class="results-inner">
						<h1></h1>
						<p class="desc"></p>
					</li>
					<hr>
					<div class="text-center">
						<a href="index.php" type="button" id="login_form_btn" class="btn" aria-hidden="true"><i
									class="fa fa-reply" aria-hidden="true"></i> Retour Accueil</a>
					</div>
				</ul>
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