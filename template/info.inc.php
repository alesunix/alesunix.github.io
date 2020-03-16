<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="google-site-verification" content="KPeQz2YtFu0JeC5_bMtDVkJezTmv7YngOxLkJYR9Djg" />
<meta name="yandex-verification" content="b7e5fd67918bf218" />
<meta charset="<?=$config['encoding']?>" />
<title><?=$title?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="<?=$keywords?>">
<meta name="description" content="<?=$description?>">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/bootstrap/css/bootstrap.min.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/info.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/bootstrap/css/bootstrap-responsive.min.css" type="text/css" media="screen, projection">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>

     <link rel="stylesheet" type="text/css" href="css/style.css" />	 
	 <link rel="stylesheet" type="text/css" href="css/styleheader.css" />
	 <link rel="stylesheet" type="text/css" href="css/stylebutton.css" />
	 <link rel="stylesheet" type="text/css" href="css/stylebutton2.css" />
	 <link rel="stylesheet" type="text/css" href="css/stylebutton3.css" />
	 <link rel="stylesheet" href="css/styleModal.css">
	 <link rel="stylesheet" href="css/owl.carousel.css">
	 <link rel="stylesheet" href="css/owl.theme.green.css">	 	 
	 <link rel="stylesheet" href="css/fonts.css"> 

</head>
<body>




<!--header-->
<header class="navbar navbar-fixed-top">
<nav class="navbar-inner">
<div class="container-fluid">
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">МЕНЮ
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>
<div class="nav-collapse collapse">
<ul class="nav pull-right">
<?=GetMenuItems($this_page, $mainmenu, $category)?>
<!--google переводчик
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'ru', includedLanguages: 'en,zh-TW', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
-->
</ul>
</div>
</div>
</nav>
</header>
<!--/header-->
<!--content-->
<section class="content container-fluid">

<div class="share42init pull-right" data-url="<?= $config['sitelink'] . $page ?>.html" data-title="<?= $title ?>"></div>
<h2 class="muted"><?=$config['slogan']?></h2>
<div class="row-fluid">
<article class="span9 well well-large well-inverse">
<h1><?=$title;?></h1>
<?=$content;?>
</article><!--/span-->
<!--/Установка новостей-->
<?php
?>

<aside class="span3">
<!--/Блоки-->
<?=GetBlock($page_blocks, 'newsblock', $newsblock )?>
<?=GetBlock($page_blocks, 'menu', $menu )?>
<!--/Коментарии-->
</aside><!--/span-->

</div><!--/row-->
</section>
<!--/content-->
<!--footer-->
<style>
.footer-bg {
background: #0d1d2f; /* Цвет фона */
color: #fff;
}
</style>
<footer class="container-fluid & footer-bg">
<footer class="container-fluid">
<div class="navbar centered-pills">
<nav class="navbar-inner">
<ul class="nav-pills" style="margin:5px 0 0 0;">
<?=GetMenuItems($this_page, $footmenu, $category)?>
</ul>
</nav>
</div>

<p class="pull-right">
<b>Контакты:
<br>+996 (559) 10 12 55
<br>+996 (312) 30 83 84
<br>АДРЕС: г.Бишкек
<br>alesunix@gmail.com
</p>
<p>
<br>
Использование материалов <br>
без письменного согласия<br>
и ссылки на источник запрещено.<br>
<sub>
<a href="https://www.facebook.com/alesunix" target="_blank">developed by alesunix</a>
</sub>
</b>
</p>
</footer>
<!--/footer -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-45405429-7');
</script>

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script type="text/javascript" src="<?= $config['sitelink']?>template/bootstrap/js/bootstrap.min.js"></script>

	<script src="/template/bootstrap/js/bootstrap.min.js"></script>
	<script src="/js/owl.carousel.js"></script>
		<script>
$(function() {
	$(".owl-carousel").owlCarousel({
		nav:true,
		loop:true,
		autoplay: true,
		autoplayTimeout: 2000,
		smartSpeed: 1000,
		responsiveClass:true,
		responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:9,
        }		
    }
	});
});
	</script>
</body></html>