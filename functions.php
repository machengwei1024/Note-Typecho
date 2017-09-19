<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('LOGO地址'), _t('在这里填入一个图片的URL地址, 以在网站显示你的LOGO'));
    $form->addInput($logoUrl);
    $indexBGUrl = new Typecho_Widget_Helper_Form_Element_Text('indexBGUrl', NULL, NULL, _t('首页头图地址'), _t('在这里填入一个图片的URL地址, 以在网站显示你的首页头图'));
    $form->addInput($indexBGUrl);
    // 赞助图片链接
    $weixinUrl = new Typecho_Widget_Helper_Form_Element_Text('weixinUrl', NULL, NULL, _t('微信图片地址'), _t('在这里填入你微信二维码图片的URL地址, 以在网站文章页的赞助模块里显示你的微信二维码'));
    $form->addInput($weixinUrl);
    $alipayUrl = new Typecho_Widget_Helper_Form_Element_Text('alipayUrl', NULL, NULL, _t('支付宝图片地址'), _t('在这里填入你支付宝二维码图片的URL地址, 以在网站文章页的赞助模块里显示你的支付宝二维码'));
    $form->addInput($alipayUrl);
    $qqUrl = new Typecho_Widget_Helper_Form_Element_Text('qqUrl', NULL, NULL, _t('QQ图片地址'), _t('在这里填入你QQ二维码图片的URL地址, 以在网站文章页的赞助模块里显示你的QQ二维码'));
    $form->addInput($qqUrl);
    //备案号
    $socialicp = new Typecho_Widget_Helper_Form_Element_Text('socialicp', NULL, NULL, _t('备案号'), _t('在这里输入备案号'));
    $form->addInput($socialicp);
}
