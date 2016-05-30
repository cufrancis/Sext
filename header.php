<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php $this->options->charset(); ?>" />
	<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>
	<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>" />
	<link rel="stylesheet" href="<?php $this->options->themeUrl('reset.css'); ?>" />
	<?php $this->header(); ?>
</head>
<body>
    <div id="container">
      <div id="main" role="main">
        <header>
		<h1><?php $this->options->title(); ?> <?php $this->archiveTitle(' &raquo; ', ' - ', ''); ?></h1>
		</header>

     <nav>
		<span><a title="home page" class="" href="/">home</a></span>
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while($pages->next()): ?>
        <span<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></span>
        <?php endwhile; ?>
     </nav>