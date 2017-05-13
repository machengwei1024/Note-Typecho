<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="body-layout">
<div class="post-body-layout">
    <div class="post-header">
        <h2><?php $this->title() ?></h2>
        <time datetime="<?php $this->date('c'); ?>"><i class="fa fa-calendar">&nbsp;发表于&nbsp;</i><?php $this->date('Y年m月d日'); ?></time>
    </div>
    <div class="index-container">
        <div class="post-layout">
            <article class="post-main">
                <section class="post-main-section">
                    <?php $this->content(); ?>
                </section>
                <div class="post-tags">
                    <?php $this->tags(' ', true, ''); ?>
                </div>
                <div class="post-readmore">
                    <div class="post-readmore-left">
                        <?php $this->theNext('<i class="post-readmore-icon fa fa-angle-left"></i>&nbsp;%s',''); ?>
                    </div>
                    <div class="post-readmore-center"></div>
                    <div class="post-readmore-right">
                        <?php $this->thePrev('%s&nbsp;<i class="post-readmore-icon fa fa-angle-right"></i>',''); ?>
                    </div>
                </div>
                <div class="post-readmore-min">
                    <div class="post-readmore-min-up">
                        <?php $this->theNext('上一篇：%s',''); ?>
                    </div>
                    <div class="post-readmore-min-down">
                        <?php $this->thePrev('下一篇：%s',''); ?>
                    </div>
                </div>
                <?php $this->need('comments.php'); ?>
            </article>
        </div>
    </div>
</div>
<?php $this->need('page-footer.php'); ?>
</div>
<div class="post-donate">
<!-- 箭头模式 -->
<!-- <span class="post-donate-btn"><i class="fa fa-angle-up"></i></span> -->
<!-- 中文“赏”模式 -->
<span class="post-donate-btn"><i class="post-donate-btn-chinese">赏</i></span>
<div class="post-donate-box">
    <p>如果我的文章对你有帮助，或许可以打赏一下呀！</p>
    <div class="post-donate-box-main">
        <div class="post-donate-alipay-box">
            支付宝
            <div class="post-donate-alipay">
            <?php if ($this->options->alipayUrl): ?>
                <img src="<?php $this->options->alipayUrl() ?>" alt="">
            <?php endif; ?>
            </div>
        </div>
        <div class="post-donate-weixin-box">
            微信
            <div class="post-donate-weixin">
            <?php if ($this->options->weixinUrl): ?>
                <img src="<?php $this->options->weixinUrl() ?>" alt="">
            <?php endif; ?>
            </div>
        </div>
        <div class="post-donate-qq-box">
            QQ
            <div class="post-donate-qq">
            <?php if ($this->options->qqUrl): ?>
                <img src="<?php $this->options->qqUrl() ?>" alt="">
            <?php endif; ?>
            </div>
        </div>
        <div style="clear:left;"></div>
    </div>
</div>
</div>

<?php $this->need('footer.php'); ?>

