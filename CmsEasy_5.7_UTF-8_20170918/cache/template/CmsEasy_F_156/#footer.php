<?php defined('ROOT') or exit('Can\'t Access !'); ?>

<!---footer--->
<div class="footer-section">
<div class="container">
<div class="footer-grids">
<div class="col-md-3 footer-grid wow fadeInRight animated" data-wow-delay=".5s">
<?php echo templatetag::tag('页底栏目子栏目一');?>
</div>
<div class="col-md-3 footer-grid wow fadeInDownBig animated" data-wow-delay=".5s">
<?php echo templatetag::tag('页底栏目子栏目二');?>
</div>
<div class="col-md-3 footer-grid wow fadeInUpBig animated" data-wow-delay=".5s">
<?php echo templatetag::tag('页底栏目子栏目三');?>
</div>
<div class="col-md-3 footer-grid wow fadeInRight animated" data-wow-delay=".5s">
<h4><?php echo lang(contactus);?></h4>
<p><?php echo lang(tel);?>：<?php echo get(tel);?></p>
<p><?php echo lang(fax);?>：<?php echo get(fax);?></p>
<p><?php echo lang(email);?>：<?php echo get(email);?></p>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>	
<!---footer--->
<!--copy-->
<div class="copy-section wow fadeInRight animated" data-wow-delay=".5s"">
<div class="container">
<p><span><?php echo get('sitename');?>  <?php echo get(site_right);?></span><span><?php echo get('site_icp');?></span><span>Powered by <a href="http://www.cmseasy.cn" title="CmsEasy企业网站系统" target="_blank">CmsEasy</a></span><?php if(config::get('site_login')=='1') { ?><span><?php echo login_js();?></span><?php } ?><?php if($topid==0) { ?><span><?php echo lang(hotkeys);?>： <?php echo gethotsearch(10);?></span><?php } ?></p>
</div>
</div>
<!--copy-->





 <!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="<?php echo $skin_path;?>/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="<?php echo $skin_path;?>/js/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo $skin_path;?>/js/ie10-viewport-bug-workaround.js"></script>
<script src="<?php echo $skin_path;?>/js/bootstrap-submenu.js"></script>



<!--JS for animate-->
<link href="<?php echo $skin_path;?>/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo $skin_path;?>/js/wow.min.js"></script>
<script>
new WOW().init();
</script>
<!--//end-animate-->



<div class="servers">
<!--[if (gte IE 7)|!(IE)]><!-->
<!-- 在线客服 -->
<?php echo template('system/servers.html'); ?>
<![endif]-->
<!-- 短信 -->
<?php echo template('system/sms.html'); ?>
</div>

<div class="servers-wap">
<?php if(config::get('wap_foot_nav')=='1') { ?>
<?php echo template('system/foot_nav_b.html'); ?>
<?php } elseif (config::get('wap_foot_nav')=='2') { ?>
<?php echo template('system/foot_nav_c.html'); ?>
<?php } else { ?>
<?php echo template('system/foot_nav_a.html'); ?>
<?php } ?> 
</div>

<script type="text/javascript" src="<?php echo $base_url;?>/js/common.js"></script>

<?php if(get('wap-share')=='1') { ?>
<?php if(get('share')=='1') { ?>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"6","bdPos":"right","bdTop":"100"},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<?php } ?>
<?php } ?>


<script type="text/javascript">
$('#bootstrap-touch-slider').bsTouchSlider();
</script>


</body>
</html>