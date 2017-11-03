<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header-i.html'); ?>

<!---welcome-->
<div class="content">
<div class="welcome-section">
<div class="container">
<div class="banner-bottom">
<div class="banner-grids">

<div class="col-md-4 banner-grid wow fadeInLeft animated" data-wow-delay=".5s">
<?php echo templatetag::tag('首页第一行栏目图片说明一');?>
</div>

<div class="col-md-4 banner-grid wow fadeInDownBig" data-wow-delay=".4s">
<?php echo templatetag::tag('首页第一行栏目图片说明二');?>
</div>

<div class="col-md-4 banner-grid wow fadeInRight animated" data-wow-delay=".5s">
<?php echo templatetag::tag('首页第一行栏目图片说明三');?>
</div>

<div class="clearfix"></div>
</div>
</div>
</div>
<h2><?php echo templatetag::tag('首页第二行栏目');?></h2>
<div class="welcome-grids">
<div class="container">
<div class="col-md-3 welcome-grid wow fadeInLeft animated" data-wow-delay=".5s">
<div class="welcome-text">
<?php echo templatetag::tag('首页第二行子栏目一');?>
</div>
<div class="welcome-icon">
<img src="<?php echo $skin_path;?>/images/base/i1.png">
</div>
</div>
<div class="col-md-3 welcome-grid wow fadeInDownBig animated" data-wow-delay=".5s">
<div class="welcome-text">
<?php echo templatetag::tag('首页第二行子栏目二');?>
</div>
<div class="welcome-icon">
<img src="<?php echo $skin_path;?>/images/base/i2.png">
</div>
</div>
<div class="col-md-3 welcome-grid wow fadeInUpBig animated" data-wow-delay=".5s">
<div class="welcome-text">
<?php echo templatetag::tag('首页第二行子栏目三');?>
</div>
<div class="welcome-icon">
<img src="<?php echo $skin_path;?>/images/base/i3.png">
</div>
</div>
<div class="col-md-3 welcome-grid wow fadeInRight animated" data-wow-delay=".5s">
<div class="welcome-text">
<?php echo templatetag::tag('首页第二行子栏目四');?>
</div>
<div class="welcome-icon">
<img src="<?php echo $skin_path;?>/images/base/i4.png">
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
<!---welcome-->
<!---product-->
<div class="product-section">
<div class="container">
<h3><?php echo templatetag::tag('首页第三行栏目');?></h3>

<?php echo templatetag::tag('首页第三行栏目图片4条');?>

</div>
</div>
<!---product-->
<!---news--->
<div class="news-section">
<div class="container">
<h3><?php echo templatetag::tag('首页第四行栏目');?></h3>
<?php echo templatetag::tag('首页第四行栏目图文4条');?>
</div>
</div>
<!---news--->
</div>





<?php echo template('footer.html'); ?>