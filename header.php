<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8">
<meta name="HandheldFriendly" content="True" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>
<!-- 使用url函数转换相关路径 -->
<link rel="stylesheet" type="text/css" media="only screen and (min-device-width:641px)" href="<?php $this->options->themeUrl('style.css'); ?>" />
<link rel="stylesheet" type="text/css" media="only screen and (max-device-width:640px)" href="<?php $this->options->themeUrl('grid.css'); ?>" />
<!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header(); ?>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?03f6b7594bce8a0cd9e3a2c3ba30dab1";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</head>
<!-- end #header -->
<body>
<div id="banner">  </div>
<div id="head"><a href="/" ><img src="/new/headnano.png"></a></div>
<div id="nav_box" class="clearfix">
<div id="logo">
	    <div class="title"><a href="/">
        <?php date_default_timezone_set("Asia/Chongqing"); echo date('l');?>
        </a></div>
	      </div>
<ul id="nav_menu">
     <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
    <?php while($pages->next()): ?>
    <li<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
    <?php endwhile; ?>
	<li><a href="https://reader.upstairs.cn" target="_blank" class="resume" title="悦读">悦读</a></li>
    </ul>
</div>

<div class="container_16"  class="clearfix">
