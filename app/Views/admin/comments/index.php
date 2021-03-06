<?php
if (isset($_SESSION['auth']) && isset($_SESSION['user']) && $_SESSION['user']->flag == 2) {
	?>
	<div id="bloc_content">
		<div id="admin_comments" class="form">
			<a href="index.php?p=users.account" type="button" class="close" data-dismiss="modal"
			   aria-label="Close"><span aria-hidden="true">X</span></a>
			<h3>Gestion des commentaires</h3>
			<table class="table">
				<caption class="NO">Commentaires signalés <span>( Modération requise )</span></caption>
				<thead>
				<tr>
					<td class="tohide">TYPE</td>
					<td class="tohide">N°</td>
					<td class="tohide">DATE</td>
					<td class="tohide">AUTEUR</td>
					<td>COMMENTAIRE</td>
				</tr>
				</thead>
				
				<tbody>
				<?php foreach ($comments as $comment):
					if ($comment->is_signaled == 1) {
						?>
						<tr>
							<td class="tohide">
								<?php
								if ($comment->serie_id != NULL) {
									?>
									SERIE
									<?php
								} elseif ($comment->news_id != NULL) {
									?>
									ACTU
									<?php
								}
								?>
							</td>
							<td class="tohide">
								<?php
								if ($comment->serie_id != NULL) {
									echo $comment->serie_id;
								} elseif ($comment->news_id != NULL) {
									echo $comment->news_id;
								}
								?>
							</td>
							<td class="td_date tohide"><?= $comment->date_comment; ?></td>
							<td class="td_author tohide"><?= $comment->author; ?></td>
							<td class="td_comment"><?= $comment->comment; ?></td>
							<td id="buttons-actions">
								<a class="btn" href="?p=admin.comments.edit&id=<?= $comment->id; ?>"><i
											class="fas fa-pencil-alt" aria-hidden="true"></i> Modérer</a>
								<form action="?p=admin.comments.delete" method="post" onclick="return confirm_delete();"
								      style="display: inline;">
									<input type="hidden" name="id" value="<?= $comment->id ?>">
									<button type="submit" class="btn"><i class="fas fa-trash-alt"
									                                     aria-hidden="true"></i>
										Supprimer
									</button>
								</form>
							</td>
						</tr>
						<?php
					}
					?>
				<?php endforeach; ?>
				</tbody>
			</table>
			<hr>
			<table class="table">
				<caption class="NO">Commentaires non signalés</caption>
				<thead>
				<tr>
					<td class="tohide">TYPE</td>
					<td class="tohide">N°</td>
					<td class="tohide">DATE</td>
					<td class="tohide">AUTEUR</td>
					<td>COMMENTAIRE</td>
				</tr>
				</thead>
				
				<tbody>
				<?php foreach ($comments as $comment):
					if ($comment->is_signaled == 0) {
						?>
						<tr>
							<td class="tohide">
								<?php
								if ($comment->serie_id != NULL) {
									?>
									SERIE
									<?php
								} elseif ($comment->news_id != NULL) {
									?>
									ACTU
									<?php
								}
								?>
							</td>
							<td class="tohide">
								<?php
								if ($comment->serie_id != NULL) {
									echo $comment->serie_id;
								} elseif ($comment->news_id != NULL) {
									echo $comment->news_id;
								}
								?>
							</td>
							<td class="td_date tohide"><?= $comment->date_comment; ?></td>
							<td class="td_autho tohide"><?= $comment->author; ?></td>
							<td class="td_comment"><?= $comment->comment; ?></td>
							<td id="buttons-actions">
								<a class="btn" href="?p=admin.comments.edit&id=<?= $comment->id; ?>"><i
											class="fas fa-pencil-alt" aria-hidden="true"></i> Modérer</a>
								<form action="?p=admin.comments.delete" method="post" onclick="return confirm_delete();"
								      style="display: inline;">
									<input type="hidden" name="id" value="<?= $comment->id ?>">
									<button type="submit" class="btn"><i class="fas fa-trash-alt"
									                                     aria-hidden="true"></i>
										Supprimer
									</button>
								</form>
							</td>
						</tr>
						<?php
					}
					?>
				<?php endforeach; ?>
				</tbody>
			</table>
			<hr>
			<div class="text-center">
				<a href="index.php?p=users.account" type="button" id="login_form_btn" class="btn" aria-hidden="true"><i
							class="fas fa-reply" aria-hidden="true"></i> Annuler</a>
			</div>
		</div>
	</div>
	<?php
} else {
	$_SESSION['flash']['danger'] = "Vous ne pouvez pas afficher cette page. Veuillez vous connecter en tant qu'administrateur";
}
?>