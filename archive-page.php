<?php
/**
 * 归档页模板
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
                <section class="archive-page-section">
                    <?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
                    <?php while ($categories->next()): ?>
                    <?php $this->widget('Widget_Archive@category-' . $categories->mid, 'pageSize=7&type=category', 'mid=' . $categories->mid)->to($posts); ?>
                    <div class="archive-categories">
                        <?php while ($posts->next()): ?>
                        <?php if (1 == $posts->sequence): ?>
                            <h3 class="archive-categories-title"><?php $categories->name(); ?></h3>
                        <ul>
                            <!-- <h3 class="archive-categories-title"><?php $categories->name(); ?></h3> -->                   
                            <li><?php $posts->date('m-d'); ?>&nbsp;&nbsp;<a class="down-a" href="<?php $posts->permalink(); ?>"><?php $posts->title(43); ?></a></li>
                            <?php else: ?>
                            <li><?php $posts->date('m-d'); ?>&nbsp;&nbsp;<a class="down-a" href="<?php $posts->permalink(); ?>"><?php $posts->title(40); ?></a></li>
                            <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                        <div style="clear: both;"></div>
                    </div>
                    <?php endwhile; ?>
                    
                    <div class="archive-tags">
                        <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=30')->to($tags); ?>
                        <?php while($tags->next()): ?>
                        <a style="background-color:rgb(<?php echo(rand(0, 255)); ?>, <?php echo(rand(0,255)); ?>, <?php echo(rand(0, 255)); ?>)" href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'><?php $tags->name(); ?></a>
                        <?php endwhile; ?>
                    </div>
                </section>
            </article>
        </div>
    </div>
</div>
<?php $this->need('page-footer.php'); ?>
</div>
<?php $this->need('footer.php'); ?>