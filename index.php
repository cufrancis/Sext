<?php
/**
 * 这是 基于Typecho默认皮肤的二次开发模板
 *
 * @package Sext
 * @author Cufrancis
 * @version 1.0
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>



<div class="col-mb-12 col-8" id="main" role="main">
  <section class="content">
  <article class="post" itemscope itemtype="http://schema.org/BlogPosting">

    <?php while($this->next()): ?>
        <ul class="listing">

  			<li class="post-title listing-item" itemprop="name headline">
          <time datetime="<?php $this->date('Y-m-d');?>"><?php $this->date('Y-m-d');?></time>
          <a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
        </li>
        </ul>
  	<?php endwhile; ?>

  </article>
</section>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
