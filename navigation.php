<div class="navbar-layout">
    <div class="navbar-header">
        <?php if ($this->options->logoUrl): ?>
            <img src="<?php $this->options->logoUrl() ?>">
        <?php endif; ?>
    </div>
    <div class="navbar-date">
    <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
        <div class="navbar-date-post">
            <h2>文章</h2>
            <p><?php $stat->publishedPostsNum() ?></p>
        </div>
        <div class="navbar-date-tags">
            <h2>分类</h2>
            <p><?php $stat->categoriesNum() ?></p>
        </div>
        <div class="clear-float"></div>
    </div>
    
    <div class="navbar-links">
        <ul class="clearfix" id="nav_menu">
        <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
        <?php $this->widget('Widget_Contents_Page_List')
        ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </div>
    <div class="navbar-search">
        <form class="input-group"  id="search" method="post" action="./" role="search">
            <input type="text" name="s" class="form-control" placeholder="搜索">
        </form>
    </div>
    <div class="navbar-icon">
        <?php if ($this->options->socialgithub): ?>   
            <a class="fa fa-github navbar-github" href="<?php $this->options->socialgithub(); ?>" target="_blank"></a>
        <?php endif; ?>
        <?php if ($this->options->socialweibo): ?>
            <a class="fa fa-weibo navbar-weibo" href="<?php $this->options->socialweibo(); ?>" target="_blank"></a>
        <?php endif; ?>
        <?php if ($this->options->socialemail): ?>
            <a class="fa fa-envelope navbar-mail" href="<?php $this->options->socialemail(); ?>" target="_blank"></a>
        <?php endif; ?>
        <?php if ($this->options->socialrss): ?>    
            <a class="fa fa-rss navbar-rss" href="<?php $this->options->socialrss(); ?>" target="_blank"></a>
        <?php endif; ?>
    </div>
</div>