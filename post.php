<?php $this->need('header.php'); ?>

        <article class="content">
        <section class="post">
			
			<?php $this->content(); ?>
</section>
<section class="meta">


<span class="tags">
  tagged by 
  
  <?php $this->tags('&nbsp;', true, 'none'); ?>
  
</span>

<span class="time">
 &nbsp;<time datetime="<?php $this->date('Y-m-d'); ?>"><?php $this->date('Y-m-d'); ?></time>
</span>
</section>
<hr/>
		
    <?php $this->need('comments.php'); ?>
	<?php $this->need('footer.php'); ?>
