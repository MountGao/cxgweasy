<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta name="Generator" content="CmsEasy 5_7_0_20170918_UTF8" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="<?php echo getKeywords($archive,$category,$catid,$type);?>" />
<meta name="description" content="<?php echo getDescription($archive,$category,$catid,$type);?>" />
<meta name="author" content="CmsEasy Team" />
<link rel="icon" href="<?php echo $base_url;?>/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo $base_url;?>/favicon.ico" type="image/x-icon" />
<title><?php echo getTitle($archive,$category,$catid,$type);?> - Powered by CmsEasy</title>
<link href="<?php echo $skin_path;?>/css/bootstrap.min.css" rel="stylesheet">
<link href="data:text/css;charset=utf-8," data-href="<?php echo $skin_path;?>/css/bootstrap-theme.min.css" rel="stylesheet" id="bs-theme-stylesheet">
<link href="<?php echo $skin_path;?>/css/bootstrap-submenu.css" rel="stylesheet">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---js--->
<script src="<?php echo $skin_path;?>/js/jquery.min.js"></script>
<!---js--->


<link href="<?php echo $skin_path;?>/css/style.css" rel="stylesheet">

<!--[if lt IE 9]><!-->
<script src="<?php echo $skin_path;?>/js/ie/html5shiv.min.js"></script>
<script src="<?php echo $skin_path;?>/js/ie/respond.min.js"></script>
<![endif]-->
</head>
<?php if(get('shield_right_key')=='1') { ?>
<body oncontextmenu="return false" onselectstart="return false">
<noscript><iframe src="/*.html>";</iframe></noscript>
<script>
function stop(){
return false;
}
document.oncontextmenu=stop;
</script>
<?php } else { ?>
<body>
<?php } ?>









<!---header---> 
<div class="header-section">

<div class="head-bottom">
<div class="logo  wow fadeInDownBig animated animated" data-wow-delay="0.4s">
<a href="<?php echo $base_url;?>/" ><img src="<?php echo get('site_logo');?>" alt="<?php echo get(sitename);?>" width="<?php echo get(logo_width);?>" /></a>
</div>
</div>
</div>
</div>
<!---header--->
<div class="clearfix"></div>
<!---banner--->
<div class="banner-box">
<div class="banner-img">
<?php echo template('system/slide.html'); ?>
</div>
<div class="banner-nav">
<div class="container">
<nav class="navbar navbar-default">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only"><?php echo get(sitename);?></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li class="oen<?php if($topid==0) { ?> active<?php } ?>"><a href="<?php echo $base_url;?>/"><?php echo lang(homepage);?></a></li>
<?php foreach(categories_nav() as $t) { ?>
<li class="oen<?php if(isset($topid) && $topid==$t['catid']) { ?> active<?php } ?>">
<a href="<?php echo $t['url'];?>"<?php if(config::get('nav_blank')==1) { ?> target=" _blank"<?php } ?>><?php echo $t['catname'];?><?php if(count(categories($t['catid']))) { ?><span class="caret"></span><?php } ?></a>
<?php if(count(categories($t['catid']))) { ?>
<ul class="dropdown-menu">
<?php foreach(categories($t['catid']) as $t1) { ?>
<li<?php if(count(categories($t1['catid']))) { ?> class="dropdown-submenu"<?php } ?>>
<a title="<?php echo $t1['catname'];?>" href="<?php echo $t1['url'];?>"><?php echo $t1['catname'];?></a>
<?php if(count(categories($t1['catid']))) { ?>
<ul class="dropdown-menu">
<?php foreach(categories($t1['catid']) as $t2) { ?>
<li<?php if(count(categories($t2['catid']))) { ?> class="dropdown-submenu"<?php } ?>>
<a title="<?php echo $t2['catname'];?>" href="<?php echo $t2['url'];?>"><?php echo $t2['catname'];?></a>
<?php if(count(categories($t2['catid']))) { ?>
<ul class="dropdown-menu">
<?php foreach(categories($t2['catid']) as $t3) { ?>
<li<?php if(count(categories($t3['catid']))) { ?> class="dropdown-submenu"<?php } ?>><a title="<?php echo $t3['catname'];?>" href="<?php echo $t3['url'];?>"><?php echo $t3['catname'];?></a>
<?php if(count(categories($t3['catid']))) { ?>
<ul class="dropdown-menu">
<?php foreach(categories($t3['catid']) as $t4) { ?>
<li><a title="<?php echo $t4['catname'];?>" href="<?php echo $t4['url'];?>"><?php echo $t4['catname'];?></a>
</li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php } ?>
</ul>
</div>
</div>
</nav>								
</div>	
</div>
</div>
<!---banner-->
