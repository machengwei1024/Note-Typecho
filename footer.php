<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->footer(); ?>
</div>
	// <script src="<?php $this->options->themeUrl('js/jquery.pjax.js'); ?>" data-no-instant></script>
	// <script src="<?php $this->options->themeUrl('js/instantclick.min.js'); ?>" data-no-instant></script>
	<script src="<?php $this->options->themeUrl('js/highlight.pack.js'); ?>" data-no-instant></script>
	<script src="<?php $this->options->themeUrl('js/highlightjs-line-numbers.js'); ?>" data-no-instant></script>
	<script src="<?php $this->options->themeUrl('js/waves.min.js'); ?>" data-no-instant></script>
	<script src="<?php $this->options->themeUrl('js/jquery.fancybox.js'); ?>" data-no-instant></script>
	<script src="<?php $this->options->themeUrl('js/main.js'); ?>" data-no-instant></script>

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
            $('.page-loading').fadeOut();
	</script>
    <script data-no-instant>        
        InstantClick.on('change', function() {
            Waves.displayEffect();
            $('pre code').each(function(i, block){
                hljs.highlightBlock(block);
            });
            otherFunction();
            $('code.hljs').each(function(i, block){
                hljs.lineNumbersBlock(block);
            });
        });
        InstantClick.init();
    </script> 
</body>
</html>
