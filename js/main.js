function otherFunction(){
    // 返回顶部按钮
    function backTop() {
        var GTop = $(document).scrollTop();
        if (GTop > 450) {
            $(".backtop-btn").css("display", "block");
        } else {
            $(".backtop-btn").css("display", "none");
        }
        setTimeout(backTop)
    }
    backTop();
    $(".backtop-btn").click(function() {
        $("html,body").animate({
            scrollTop: 0
        },
        400)
    });

    // 导航栏按钮
    $(".navbar-btn").click(function() {
        $(this).toggleClass("navbar-btn-open");
        $(".navbar-layout").toggleClass("navbar-layout-open");
        $(".body-layout").toggleClass("body-layout-open");
        $(".mask").fadeToggle(600);
        $(".navbar-btn .navbar-btn-line1").toggleClass("navbar-btn-rotate-left");
        $(".navbar-btn .navbar-btn-line2").fadeToggle(100);
        $(".navbar-btn .navbar-btn-line3").toggleClass("navbar-btn-rotate-right");
    });

    // 页面遮罩层
    $(".mask").click(function() {
        $(".navbar-layout").removeClass("navbar-layout-open");
        $(".body-layout").removeClass("body-layout-open");
        $(".navbar-btn").removeClass("navbar-btn-open");
        $(".mask").fadeOut(400);
        // 以下3个是导航栏按钮
        $(".navbar-btn .navbar-btn-line1").removeClass("navbar-btn-rotate-left");
        $(".navbar-btn .navbar-btn-line2").fadeIn(100);
        $(".navbar-btn .navbar-btn-line3").removeClass("navbar-btn-rotate-right")
    });

    // 首页文章摘要遍历
    $(".index-post-layout:odd").addClass('index-post-layout-odd');

    // 首页文章摘要动画
    $(".index-post-layout").each(function (i){
        var classEach = i;
        $(".index-post-layout").eq(0).addClass("animated animation-down");
        $(window).scroll(function () {
            var index_postTOP = $(".index-post-layout").eq(classEach).offset().top;
            if (index_postTOP >= $(window).scrollTop() && index_postTOP < ($(window).scrollTop()+$(window).height())) {
                $(".index-post-layout").eq(classEach).addClass("animated animation-down");
            }
        });
    });
   
    // 文章页打赏
    var post_page_donate = $(".post-donate-btn").css("bottom");
    $(".post-donate-btn").click(function(){
        $(".post-donate").toggleClass("post-donate-open");
        $(".mask2").fadeToggle(600);
    })

    $(".mask2").click(function() {
        $(".mask2").fadeOut(600);
        $(".post-donate").removeClass("post-donate-open");
    });

    // 文章页打赏盒子居中
    var Pwidth = $(window).width();
    var donate_btnW = (Pwidth - 80) / 2;
    var donateW = (Pwidth - 890) / 2;
    $(".post-donate-btn").css("left",donate_btnW);
    $(".post-donate-box").css("left",donateW);

    // 文章页灯箱
    $(".post-main-section img").attr("data-action","zoom");

    // 其他
    $(".post-main-section a").attr("target", "_blank");
    $(".post-main-section a").addClass("down-a");
    $(".page-footer a").addClass("down-a");
    $(".links-page-section a").attr("target", "_blank");
}