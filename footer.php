<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->footer(); ?>
</div>
	<script src="<?php $this->options->themeUrl('js/jquery.pjax.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/highlight.pack.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/highlightjs-line-numbers.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/waves.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/zoom.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/transition.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>

	<script type="text/javascript">
	        var windowW = ($(window).width());
	        var windowH = ($(window).height());
	        var page_loading_mainTop = (windowH - 80) / 2;
	        var page_loading_mainLeft = (windowW - 80) / 2;
	        $(".page-loading-main").css({
	            "top":page_loading_mainTop,
	            "left":page_loading_mainLeft
	        })
	        $(".page-loading-one").css("background-color","#5998e6");
	        $(".page-loading-two").css("background-color","#b3f788");
	</script>
    <script type="text/javascript">
        window.onload = function(){
            $('.page-loading').fadeOut();
        }
    </script>
    <script type="text/javascript">
        hljs.initHighlightingOnLoad();
        hljs.initLineNumbersOnLoad();
        Waves.displayEffect();
        otherFunction();
        $(document).pjax('a', '#pjax-container', {fragment:'#pjax-container', timeout:8000});
        $(document).on('pjax:send', function() {
            $('.page-loading').fadeIn()
        });
        $(document).on('pjax:complete', function() {
            $('.page-loading').fadeOut();
            Waves.displayEffect();
            $('pre code').each(function(i, block){
                hljs.highlightBlock(block);
            });
            otherFunction();
            $('code.hljs').each(function(i, block){
                hljs.lineNumbersBlock(block);
            });
        });
    </script>
</body>
</html>
