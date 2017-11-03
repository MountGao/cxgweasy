<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>



<div class="page">
<div class="notice">
<div class="not_left">
<?php echo lang(siteannoun);?>：<?php foreach(announ(1) as $an) { ?>
<a href="<?php echo $an['url'];?>" title="<?php echo $an['title'];?>"><?php echo cut($an['title'],30);?>   [<?php echo $an['adddate'];?>]</a>
<?php } ?>			</div>
<div class="not_right">
<div class="search10">
<form name='search' action="<?php echo url('archive/search');?>" onsubmit="search_check();" method="post">
<input type="text" name="keyword" value="<?php echo lang(pleaceinputtext);?>" onfocus="if(this.value=='<?php echo lang(pleaceinputtext);?>') {this.value=''}" onblur="if(this.value=='') this.value='<?php echo lang(pleaceinputtext);?>'" class="text10" />
<input name='submit' type="submit" value="" align="middle" class="button10" />
</form>
 </div>
</div>
<div class="clear"></div>
</div>
<div class="m20"></div>
<div class="m10"></div>
<div class="news">
<div class="m20"></div>
<div class="m12"></div>
<div class="news_main">
<div class="news_top">
<?php echo templatetag::tag('首页第一行左侧栏目');?>
</div>
<div class="m12"></div>
<div class="news_desc">
<?php echo templatetag::tag('首页第一行左侧栏目图文头条');?>
<div class="clear"></div>
</div>
<div class="m6"></div>
<div class="newsArc">
<ul>
                    							<?php echo templatetag::tag('首页第一行左侧栏目列表3条');?>
                        					</ul>
</div>
</div>

<div class="news_main news_main_fr">
<div class="news_top">
<?php echo templatetag::tag('首页第一行右侧栏目');?>
</div>
<div class="m12"></div>
<div class="newsArc">
<ul>
                    							<?php echo templatetag::tag('首页第一行右侧栏目列表5条');?>
</ul>
</div>
</div>

<div class="news_xx"></div>
</div>
</div>
<div class="fwly">
<div class="page">
<div class="m20"></div>
<div class="fwly_main">
<div class="news_top">
<?php echo templatetag::tag('首页第二行左侧栏目');?>
</div>
<div class="m20"></div>
<div class="fwly_pic">
<ul>
                    							<?php echo templatetag::tag('首页第二行左侧栏目子栏目');?>
</ul>
<div class="clear"></div>
</div>
</div>
<div class="lxwm">
<div class="news_top">
<?php echo lang(contactus);?> <span>CONTACT US</span>
</div>
<div class="m20"></div>
<div class="hot_tel">
        			<span><?php echo get(tel);?></span>
</div>
<div class="lxwm_main">
<ul>
                        <li>
                            <span><?php echo lang(address);?>：</span> <p><?php echo get(address);?></p>
                        </li>
                        <li>
                            <span><?php echo lang(tel);?>：</span> <p><?php echo get(tel);?></p>
                        </li>
                        <li>
                            <span><?php echo lang(fax);?>：</span> <p><?php echo get(fax);?></p>
                        </li>
</ul>
</div>
</div>
<div class="clear"></div>
</div>
</div>


<div class="m40"></div>
<div class="m6"></div>
<div class="page">
<div class="cgal">
<div class="news_top">
<?php echo templatetag::tag('首页第三行栏目');?>
</div>
<div class="m20"></div>
<script language="JavaScript" type="text/javascript" src="<?php echo $skin_path;?>/js/rolling.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo $skin_path;?>/js/simSelect.js"></script>
<div class="scroll2" id="scroll">
<ul>
                						<?php echo templatetag::tag('首页第三行栏目滚动图片');?>
</ul>
</div>
<script type="text/javascript">
var roll_01 = new Rolling();
roll_01.scrollContId = "scroll";
roll_01.frameWidth = 980;
roll_01.upright = false;
roll_01.speed = 30;
roll_01.space = 1;
roll_01.circularly = true;
roll_01.initialize();
</script>
</div>
</div>

<?php echo template('footer.html'); ?>