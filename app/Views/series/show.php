<!-- Contenu d'une série spécifique -->

<div id="bloc_content">
	
	<div id="serie">
<!--		<p class="return_episodes"><a href="?p=posts.allEpisodes" >Retour aux épisodes</a></p>-->
		<div id="serie_image">
			<img class="col-md-5 col-xs-12 thumbnail" src="<?= $serie->image?>">
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
		
		
<!--		<h2 class="post_title">Episode --><?//= $serie->episode;?><!-- : --><?//= $post->title;?><!--</h2>-->
<!--		<p class="post_category"><em>--><?//= $post->categorie; ?><!-- - Publié le --><?//= $post->date_episode_fr; ?><!--</em></p>-->
<!--		<p class="post_category"><em>(Dernière modification le --><?//= $post->date_update_fr; ?><!--)</em></p>-->
<!--		<p class="post_full">--><?//= $post->content; ?><!--</p>-->
	</div>
	
<!--	--><?php
//	if(isset($_SESSION['auth'])){
//		?>
<!--		<div id="add-comment">-->
<!--			<form method="post">-->
<!--				<h3>Commenter cet épisode</h3></br></br>-->
<!--				<input type= "hidden" name="id" value="--><?//= $post->id ?><!--">-->
<!--				--><?//= $form->input('comment', 'Commentaire : ');?>
<!--				<button class="btn_post">Publier</button>-->
<!--				--><?php //if($errors): ?>
<!--					<div class="errors">-->
<!--						Merci de renseigner votre commentaire.-->
<!--					</div>-->
<!--				--><?php //endif; ?>
<!--			</form>-->
<!--		</div>-->
<!--		--><?php
//	} else {
//		?>
<!--		<div id="add-comment">-->
<!--			<form method="post">-->
<!--				<h3>Commenter cet épisode</h3></br></br>-->
<!--				<p class="no_show">Envie de laisser un commentaire ?-->
<!--					<br>-->
<!--					<a href="index.php?p=users.login"> Connectez-vous </a> ou <a href="index.php?p=users.register"> Créez un compte </a> ;-)</p>-->
<!--			</form>-->
<!--		</div>-->
<!--		--><?php
//	}
//	?>
<!--	-->
<!--	--><?php
//	if(!empty($comments)){
//		?>
<!--		<div class="comments">-->
<!--			<h3>Commentaires liés à cet épisode</h3>-->
<!--			--><?php //foreach($comments as $comment): ?>
<!--				<form method="post">-->
<!--					<input type= "hidden" name="id" value="--><?//= $comment->id ?><!--">-->
<!--					<p class="comment_author">Commentaire de --><?//= $comment->author;?><!--<span><em>, le --><?//= $comment->date_comment; ?><!--</span></em></p>-->
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
<!--				</form>-->
<!--			--><?php //endforeach; ?>
<!--		</div>-->
<!--		--><?php
//	} else{
//		?>
<!--		<div class="comments">-->
<!--			<h3>Commentaires liés à cet épisode</h3>-->
<!--			<p class="no_show">Aucun commentaire pour l'instant, soyez le premier ;-)</p>-->
<!--		</div>-->
<!--		--><?php
//	}
//	?>