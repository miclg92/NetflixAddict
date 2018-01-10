<!-- Contenu d'une série spécifique -->

<div id="bloc_content">
	
	<div class="row">
		<p class="col-xs-2 return"><a href="index.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Retour</a></p>
	</div>
	
	<div id="follow_serie">
		<button id="follow_serie_btn">+</button>
		<p id="follow_serie_text">Suivre cette Série</p>
	</div>
	
	
	<div id="serie" class="row">
		<div id="serie_image" class="col-md-5 col-xs-12">
			<img class="col-md-12 col-sm-8 col-xs-12 thumbnail" src="<?= $serie->image?>">
		</div>
		
		<div id="serie_details" class="col-md-7 col-xs-12">
			<p class="col-md-3"><?= $serie->seasons?> saisons</p>
			<p class="col-md-3"><?= $serie->episodes?> épisodes</p>
			<p class="col-md-3"><?= $serie->followers?> adeptes</p>
			<p class="col-md-3">Etat : <?= $status?></p>
		</div>
		
		<div id="serie_title" class="col-md-7 col-xs-12">
			<h2><?= $serie->title?> (<?= $serie->year?>)</h2>
		</div>
		
		<div id="serie_description" class="col-md-7 col-xs-12">
			<p><?= $serie->description?></p>
		</div>
		
		<div class="col-md-7 col-xs-12 rating">
			<h2>Noter cette série</h2>
			<input name="stars" id="e5" type="radio"><label for="e5">☆</label>
			<input name="stars" id="e4" type="radio"><label for="e4">☆</label>
			<input name="stars" id="e3" type="radio"><label for="e3">☆</label>
			<input name="stars" id="e2" type="radio"><label for="e2">☆</label>
			<input name="stars" id="e1" type="radio"><label for="e1">☆</label>
		</div>
		
		<div id="actual_rating" class="col-md-7 col-xs-12">
			<h2>Note actuelle : /5</h2>
		</div>
	</div>
	
	<hr>
	
	<div id="add-comment" class="row">
		<h3 class="col-xs-12">Laisser un commentaire relatif à la série <span>"<?= $serie->title?>"</span></h3></br></br>
		<?php
		if(isset($_SESSION['auth'])){
			?>
			<form class="col-xs-12" method="post">
				<input type= "hidden" name="id" value="<?= $serie->id ?>">
				<?= $form->input('comment', 'Commentaire : ');?>
				<button class="btn_post">Publier</button>
				<?php if($errors): ?>
					<div class="errors">
						Merci de renseigner votre commentaire.
					</div>
				<?php endif; ?>
			</form>
			<?php
		} else {
			?>
			<p class="no_show col-xs-12">Envie de laisser un commentaire ?</p>
			<br>
			<div class="no_show col-xs-12">
				<div id="login_btns" class="col-xs-12">
					<button data-toggle="modal" href="index.php?p=users.login" data-target="#login_form" class="btn"><i class="fa fa-sign-in" aria-hidden="true"></i>
						Connectez-vous
					</button>
					<div class="modal fade" id="login_form">
						<div class="modal-dialog modal-md">
							<div class="modal-content"></div>
						</div>
					</div>
					
					<button data-toggle="modal" href="index.php?p=users.register" data-target="#registration_form" class="btn"><i class="fa fa-user-plus" aria-hidden="true"></i>
						Inscrivez-vous
					</button>
					<div class="modal fade" id="registration_form">
						<div class="modal-dialog modal-md">
							<div class="modal-content"></div>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
		?>
		<div class="comments_rules row">
			<p class="col-xs-12">Avant de laisser un commentaire, merci de prendre connaissance des règles de bonne conduite.</p>
			<p class="col-xs-12">En cas de manquement, un administrateur pourrait vous contacter, et votre compte pourrait être suspendu.</p>
			<ol class="col-xs-12">
				<li>Netflix'Addict ne permet pas la diffusion de séries en streaming</li>
				<li>Il est interdit de diffuser des liens de partages illégaux</li>
				<li>Courtoisie et respect entre membres indispensables</li>
				<li>Eviter les SPOILERS... Pensez à ceux qui n'ont pas terminé la série</li>
				<li>Signalez les commentaires inappropriés à l'aide du bouton prévu à cet effet</li>
			</ol>
		</div>
	</div>
	
	<hr>
	
	<div id="comments">
		<h3 class="col-xs-12">Tous les commentaires relatifs à la série <span>"<?= $serie->title?>"</span></h3>
		
		<?php
	if(!empty($comments)){
		?>
		<?php foreach($comments as $comment): ?>
			<form method="post">
				<input type= "hidden" name="id" value="<?= $comment->id ?>">
			</form>
		
			<div id="full_comment" class="col-xs-12">
				<div id="comments_details" class="col-xs-12">
					<p class="col-xs-2"><i class="fa fa-user" aria-hidden="true"></i> <?= $comment->author?></p>
					<p class="col-xs-2"><i class="fa fa-calendar" aria-hidden="true"></i>
						 <?= $comment->date_comment?></p>
					<button type="submit" name="signal_comment" class="btn-signal col-xs-2"><i class="fa fa-exclamation-triangle signal_icon" aria-hidden="true"></i>
						 Signaler</button>
				</div>
				<div id="comments_content" class="col-xs-12">
					<p class="col-xs-12"><?= $comment->comment?></p>
				</div>
			</div>
					
					
<!--					--><?php
//					if(isset($_SESSION['user'])) {
//						if ($_SESSION['user']->flag == 1) {
//							?>
<!--							<form action="" method="post" style="display: inline;">-->
<!--								<p class="comment_text"><em>--><?//= $comment->comment; ?><!--</em>-->
<!--									<input type="hidden" name="id" value="--><?//= $comment->id; ?><!--">-->
<!--									--><?php
//									if($comment->is_signaled == 1){
//										?>
<!--										<button type="button" name="signal_comment" disabled class="btn-disabled">Commentaire signalé. En cours de traitement...</button>-->
<!--										--><?php
//									} else{
//										?>
<!--										<button type="submit" name="signal_comment" class="btn-signal">Signaler ce commentaire</button>-->
<!--										--><?php
//									}
//									?>
<!--							</form>-->
<!--							--><?php
//						} elseif ($_SESSION['user']->flag == 2) {
//							?>
<!--							<p class="comment_text"><em>--><?//= $comment->comment; ?><!--</p>-->
<!--							--><?php
//						}
//					}	else {
//						?>
<!--						<form action="" method="post" style="display: inline;">-->
<!--							<p class="comment_text"><em>--><?//= $comment->comment; ?><!--</em>-->
<!--								<input type="hidden" name="id" value="--><?//= $comment->id; ?><!--">-->
<!--								--><?php
//								if($comment->is_signaled == 1){
//									?>
<!--									<button type="button" name="signal_comment" disabled class="btn-disabled">Commentaire signalé. En cours de traitement...</button>-->
<!--									--><?php
//								} else{
//									?>
<!--									<button type="submit" name="signal_comment" class="btn-signal">Signaler ce commentaire</button>-->
<!--									--><?php
//								}
//								?>
<!--						</form>-->
<!--						--><?php
//					}
//					?>
		<?php endforeach; ?>
		<?php
	}else{
	?>
		<p class="no_show col-xs-12">Aucun commentaire pour l'instant, soyez le premier ;-)</p>
	</div>
	<?php
	}
	?>
	
	<hr>
	