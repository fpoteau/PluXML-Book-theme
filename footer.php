<?php if(!defined('PLX_ROOT')) exit; ?>

		<div id="footer">
			
			<p>&copy; <?php $plxShow->mainTitle('link'); ?> -
				<?php $plxShow->lang('POWERED_BY') ?> <a href="http://pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
				<?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?>
				<?php $plxShow->httpEncoding() ?>
				 - 
				<a class="top" href="<?php echo $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a> - <a href="http://francoispoteau.com/?static2/contact">Contact</a>
				
			</p>

		</div>
	</div>

</body>
</html>
