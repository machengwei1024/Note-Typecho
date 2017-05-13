<?php
/**
 * 友情链接模板
 *
 * @package custom
 */
?>
<?php $this->need('header.php'); ?>
<div class="body-layout">
<div class="post-body-layout">
    <div class="post-header">
        <h2><?php $this->title() ?></h2>
    </div>
    <div class="index-container">
        <div class="post-layout">
            <article class="post-main">
                <section class="links-page-section">
                    <?php $this->content(); ?>
                </section>
            </article>
        </div>
    </div>
</div>
<?php $this->need('page-footer.php'); ?>
</div>
<?php $this->need('footer.php'); ?>