<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->footer(); ?>
</div>
	<script src="<?php $this->options->themeUrl('js/jquery.pjax.js'); ?>" data-no-instant></script>
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
		hljs.initHighlightingOnLoad();
		hljs.initLineNumbersOnLoad();
		Waves.displayEffect();
		otherFunction();
		$(document).pjax('a', '#pjax-container', {fragment:'#pjax-container', timeout:8000}).on('pjax:send', function() {
			$('.page-loading').fadeIn();
		}).on('pjax:complete', function() {
			$('pre code').each(function(i, block){
				hljs.highlightBlock(block);
			});
			$('code.hljs').each(function(i, block){
				hljs.lineNumbersBlock(block);
			});
		}).on('pjax:end', function() {
			$('.page-loading').fadeOut();
			otherFunction();
		});
    </script>
</body>
</html>
