<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>

<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php
if ($comments->levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
?>">
    <div id="<?php $comments->theId(); ?>">
        <div class="comments-img">
            <?php $comments->gravatar('48', ''); ?>
        </div>
        <div class="comment-main">
            <div class="comment-meta">
                <div class="comment-meta-info">
                    <span class="comment-author"><?php $comments->author(); ?></span>
                    <time class="comment-time"><?php $comments->date("m月d日"); ?></time>
                </div>
                <div class="comment-meta-content">
                    <?php $comments->content(); ?>
                    <span class="comment-reply fa fa-reply">&nbsp;<?php $comments->reply("Reply"); ?></span>
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>

<?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($options); ?>
    </div>
<?php } ?>
</li>
<?php } ?>

<div id="comments" class="post-comments">
    <span class="post-comments-btn">评论</span>
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
    <p class="comments-number"><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></p>
    <br>

    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo;', '&raquo;'); ?>

    <?php endif; ?>


<?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>

        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
            <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
                <div class="comments-info-box">
                    <input type="text" name="author" id="author" class="form-control comments-user" placeholder="称呼">
                    <input type="text" name="mail" id="mail" class="form-control comments-mail" placeholder="邮箱">
                    <input type="text" name="url" id="url" class="form-control comments-site" placeholder="网站">
                </div>
            <?php endif; ?>
            <div class="comments-text">
                <textarea class="form-control" rows="6" name="text" id="textarea" placeholder="不要手下留情，尽情吐槽吧！"></textarea>
            </div>
            <div class="comments-submit">
                <button id="from_submit" type="submit"><?php _e('发射'); ?></button>
            </div>
        </form>
    </div>
    <?php else: ?>
    <h3 style="text-align:center"><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>

<script>
      $("#author").blur(function(){
        if(this.value=="" || this.value.length < 3){
            this.value = ""
            this.placeholder = "请输入至少3位数的昵称！"
        }
      })
      $("#mail").blur(function(){
        if(this.value=="" || (this.value!="" && !/.+@.+\.[a-zA-Z]{2,4}$/.test(this.value))){
            this.value = ""
            this.placeholder = "请输入正确的E-mail！"
        }
      })
      $("#textarea").blur(function(){
        if(this.value=="" || this.value.length < 3){
            this.value = ""
            this.placeholder = "请至少输入3字符的内容！"
        }
      })
</script>