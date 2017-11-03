<?php defined('ROOT') or exit('Can\'t Access !'); ?>












<div class="friend_link">
<div class="fl_main">
<div class="m12"></div>
<div class="fl_top">
<?php echo lang(links);?> <span>Links</span>
</div>
<div class="fl_con">
<ul>
    		<?php foreach(friendlink('text',0,20) as $flink) { ?>
<li><a href="<?php echo $flink['url'];?>" target="_blank"><?php echo $flink['name'];?></a></li>
<?php } ?>
                                  
                    				</ul>
<div class="clear"></div>
</div>
</div>
</div>
<div class="footer">
<div class="foot">
<div class="foot_main">
<?php echo get('sitename');?>  <?php echo get(site_right);?>  <?php echo get('site_icp');?>  Powered by <a href="http://www.cmseasy.cn" title="CmsEasy企业网站系统" target="_blank">CmsEasy</a><?php if($topid==0) { ?><span><?php echo lang(hotkeys);?>： <?php echo gethotsearch(10);?></span><?php } ?>
</div>
<div class="backTop">
<a href="javascript:" onclick="window.scrollTo(0,0)" title="返回顶部"><img src="<?php echo $skin_path;?>/images/bt.jpg" width="82" height="26" /></a>
</div>
</div>
</div>







<script type="text/javascript" src="<?php echo $base_url;?>/js/common.js"></script>
<script type="text/javascript"> 
// 公告滚动js
var t=setInterval(myfunc,1000); 
var oBox=document.getElementById("announ"); 
function myfunc(){ 
var o=oBox.firstChild 
oBox.removeChild(o) 
oBox.appendChild(o) 
} 
oBox.onmouseover=function()
{
clearInterval(t)
} 
oBox.onmouseout=function()
{
t=setInterval(myfunc,2000)//滚动时间，默认2秒
} 
</script>
<!-- 在线客服 -->
<?php echo template('system/servers.html'); ?>
<!-- 短信 -->
<?php echo template('system/sms.html'); ?>


<style>
.cleft_b{z-index:10000;}
</style>




</body>
</html>