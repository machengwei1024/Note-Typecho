<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="body-layout">
    <div class="index-header" style="background:url(<?php $this->options->themeUrl('images/index-header-default-bg.jpg'); ?>);background-size:100% 100%;background-repeat:no-repeat;">
       <div class="index-header-wave"></div>
    </div>
    <div class="index-container">


        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <div class="index-post-layout">
			<article class="index-post-abstract">
				<header>
					<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
					<time datetime="<?php $this->date('c'); ?>">&nbsp;<?php $this->date('F j, Y'); ?></time>
				</header>
				<section>
					<?php $this->excerpt(130, ' ...'); ?>
				</section>
			</article>
		</div>
    	<?php endwhile; ?>
        <?php else: ?>
		<div class="index-post-layout">
			<article class="index-post-abstract">
				<section>
					<p style="text-align: center;font-size: 30px;font-weight: 200;">没有你要找的内容</p>
				</section>
			</article>
		</div>
        <?php endif; ?>
<?php $this->need('navigator.php'); ?>	
    </div>
</div>
<?php $this->need('footer.php'); ?>
