<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php
if(config::get(wap_foot_nav_position)=='right'){
$_float = 'right';
$_float2 = 'left';
$_float3 = '-';
}elseif(config::get(wap_foot_nav_position)=='left'){
$_float = 'left';
$_float2 = 'right';
$_float3 = '';
}else{
$_wap_foot_nav_position='left';
}
?>

<style type="text/css">



#plug-wrap {
    position: fixed;
top: 0;
<?php echo $_float2;?>: 0;
width: 100%;
height: 100%;
background: rgba(0, 0, 0, 0);
    z-index:800;
}
.top_bar {
    position:fixed;
    bottom:0;
    <?php echo $_float;?>:0px;
    z-index:900;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif;
}
.plug-menu {
    -webkit-appearance:button;
    display:inline-block;
    width:36px;
    height:36px;
    border-radius:36px;
    position: absolute;
    bottom:17px;
    <?php echo $_float;?>: 17px;
    z-index:999;
    box-shadow: 0 0 0 4px #FFFFFF, 0 2px 5px 4px rgba(0, 0, 0, 0.25);
   
    -webkit-transition: -webkit-transform 200ms;
    -webkit-transform:rotate(1deg);
    color:#fff;
    background-image:url('<?php echo $skin_path;?>/images/wao/plug.png');
    background-repeat: no-repeat;
    -webkit-background-size: 80% auto;
    background-size: 80% auto;
    background-position: center center;
}
.plug-menu:before {
    font-size:20px;
    margin:9px 0 0 9px;
}
.plug-menu:checked {
    -webkit-transform:rotate(135deg);
}
.top_menu>li {
    width: 32px;
    height:32px;
    border-radius:32px;
    box-shadow: 0 0 0 3px #FFFFFF, 0 2px 5px 3px rgba(0, 0, 0, 0.25);
    
    position:absolute;
    bottom:0;
    <?php echo $_float;?>:0;
    margin-bottom: 20px;
    margin-<?php echo $_float;?>:20px;
    z-index:900;
    -webkit-transition: -webkit-transform 200ms;
}
.top_menu>li a {
    color:#fff;
    font-size:20px;
    display: block;
    height: 100%;
    line-height: 33px;
    text-align: center;
}
.top_menu>li>a label{
display:none;
}
.top_menu>li a img {
display: block;
width: 22px;
height: 22px;
text-indent: -999px;
position: absolute;
top: 50%;
<?php echo $_float2;?>: 50%;
margin-top: -11px;
margin-<?php echo $_float2;?>: -11px;
}
.top_menu>li.on:nth-of-type(1) {
-webkit-transform: translate(<?php echo $_float3;?>0, -100px) rotate(720deg);
}
.top_menu>li.on:nth-of-type(2) {
-webkit-transform: translate(<?php echo $_float3;?>47px, -81px) rotate(720deg);
}
.top_menu>li.on:nth-of-type(3) {
-webkit-transform: translate(<?php echo $_float3;?>81px, -45px) rotate(720deg);
}
.top_menu>li.on:nth-of-type(4) {
-webkit-transform: translate(<?php echo $_float3;?>100px, 0) rotate(720deg);
}
 
#sharemcover {
position: fixed;
top: 0;
<?php echo $_float2;?>: 0;
width: 100%;
height: 100%;
background: rgba(0, 0, 0, 0.7);
display: none;
z-index: 20000;
}
#sharemcover img {
position: fixed;
<?php echo $_float;?>: 18px;
top: 5px;
width: 260px;
height: 180px;
z-index: 20001;
border:0;
}
/*分享*/
#fenxiang_box{color:white; position:fixed; top:0px;width:100%;background: rgba(0, 0, 0, 0.7);  padding:30px 10%; }
#fenxiang_box .bdsharebuttonbox{ padding:10px 0;}
#btn_fenxiang{ }
#btn_fenxiang span{ display:none;}
#fenxiang_box{ display:none;  }
</style>
<div class="top_bar" style="-webkit-transform:translate3d(0,0,0)">
<nav>
     <ul id="top_menu" class="top_menu">
      <input type="checkbox" id="plug-btn" class="plug-menu themeStyle" style="background-image:url('<?php echo $skin_path;?>/images/wap/plug.png');border:0px;">
       <li class="themeStyle out" style="background:"> 
  <a href="tel:<?php echo get(tel);?>"><img src="<?php echo $skin_path;?>/images/wap/plugmenu1.png"><label><?php echo lang(tel);?></label></a>
  </li>
  <li class="themeStyle out" style="background:">
<a href="sms:<?php echo get(site_mobile);?>"><img src="<?php echo $skin_path;?>/images/wap/plugmenu3.png"><label><?php echo lang(sms);?></label></a>
</li>
<li class="themeStyle out" style="background:">
<a href="javascript:;" id="btn_fenxiang"><img src="<?php echo $skin_path;?>/images/wap/plugmenu5.png"><label><?php echo lang(share);?></label></a>
</li>   
<li class="themeStyle out" style="background:">
<a href="<?php echo $base_url;?>/index.php?case=guestbook&act=index"><img src="<?php echo $skin_path;?>/images/wap/plugmenu6.png"><label><?php echo lang(feedback);?></label></a>
</li>


</ul>
  </nav>
</div>
<div id="fenxiang_box">
<h3>分享到：</h3>
<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
<script src="<?php echo $skin_path;?>/js/fenxiang.js" type="text/javascript" ></script><!--用于分享按钮--><script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":["qzone","bdysc","renren","tieba","sqq","thx","copy"],"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
</div>
<div id="plug-wrap" style="display: none;" ></div>
<script>
$(function(){
        $(".plug-menu").click(function(){
        var li = $(this).parents('ul').find('li');
        if(li.attr("class") == "themeStyle on"){
                li.removeClass("themeStyle on");
                li.addClass("themeStyle out");
        }else{
                li.removeClass("themeStyle out");
                li.addClass("themeStyle on");
        }
        });
});
</script> 