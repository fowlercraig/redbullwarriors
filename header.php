<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php bloginfo( 'sitename' ) ?></title>
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="//use.typekit.net/fvd1knu.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<?php
  $menuParameters = array(
    'container'       => false,
    'echo'            => false,
    'items_wrap'      => '%3$s',
    'theme_location'  => 'main-menu',
    //'Walker_Nav_Menu' => new NavWalker(),
    'depth'           => 0,
  );
?>

<body <?php body_class('fs-grid'); ?>>
  <div id="wrapper">

<script type="text/javascript">
window.rbwidgets = window.rbwidgets || {};
window.rbwidgets.iframeURL ='http://www.redbull.com/en/RedBullCollection/1331580848687/GlobalNav?template=GlobalNavigation&todim=en_INT&logo=false';
</script>
<script type="text/javascript" src="http://www.redbull.com/cs/RedBull2Misc/global-nav/global-nav.js"></script>
<noscript>
<iframe src="http://www.redbull.com/en/RedBullCollection/1331580848687/GlobalNav?template=GlobalNavigation&todim=en_INT&logo=true" style="width:100%;height:37px;" frameborder="0" scrolling="no"></iframe>
</noscript>