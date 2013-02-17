<?php if(!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--[if lt IE 7 ]><html class="ie ie6" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>"> <!--<![endif]-->


<head>
	<title><?php $plxShow->pageTitle(); ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>

	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/layout.css">
	<?php $plxShow->templateCss() ?>
	
	<link rel="apple-touch-icon" href="<?php $plxShow->template(); ?>/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php $plxShow->template(); ?>/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php $plxShow->template(); ?>/img/apple-touch-icon-114x114.png">

	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
	
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/highlight/styles/default.css">
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/highlight/highlight.pack.js"></script>
	

</head>
	<script type="text/javascript">
		$(document).ready(function() {
			$('pre > code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		});
	</script>
<body>
<div class="content">
<div class="clear"></div>
<h1 id="title"><?php $plxShow->mainTitle('link'); ?></h1>
<p class="menu">
<?php $plxShow->catList('',' <a href="#cat_url" title="#cat_name">#cat_name</a> '); ?>
</p>
<div class="clear"></div>