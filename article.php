<?php include(dirname(__FILE__).'/header.php'); ?>
	
	<div id="section" class="row">

		<div id="article" class="">
		
				<div class="article row">
						<h2><?php $plxShow->artTitle(''); ?></h2>
						<div class="art-chapo"><?php $plxShow->artContent(); ?></div>
						<p class="art-infos">
							<a href="https://twitter.com/share" class="twitter-share-button" data-via="Fpoteau" data-lang="fr" data-count="none">Tweeter</a><br />
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
 <?php $plxShow->artDate('#num_day.#num_month.#num_year(2)'); ?> - <?php $plxShow->artCat(); ?> -  <?php $plxShow->artTags(); ?>  						</p>

					<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>
				</div>
				
					
			<?php include(dirname(__FILE__).'/commentaires.php'); ?>
			
			
		</div>
		
	</div>
	

<?php include(dirname(__FILE__).'/footer.php'); ?>

