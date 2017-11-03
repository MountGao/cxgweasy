<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php
if(front::get('case') == 'area'){
?>
<div class="left1">
<div class="left1_1">
<h3><?php echo lang(area);?></h3>
</div>
</div>
<div class="blank20"></div>
<?php
}elseif(front::get('case') == 'announ'){
?>
<div class="left1">
<div class="left1_1">
<h3><?php echo lang(announ);?></h3>
</div>
</div>
<div class="blank20"></div>
<?php
}elseif(front::get('case') == 'guestbook'){
?>
<div class="left1">
<div class="left1_1">
<h3><?php echo lang(guestbook);?></h3>
</div>
</div>
<div class="blank20"></div>
<?php
}elseif(front::get('case') == 'comment'){
?>
<div class="left1">
<div class="left1_1">
<h3><?php echo lang(comment);?></h3>
</div>
</div>
<div class="blank20"></div>
<?php
}elseif(front::get('case') == 'type'){
?>
<!--只展开当前栏目所在一级栏目下的分类-->
<?php $__pid = gettypeparentsid($typeid);?>



<?php foreach(typies() as $t) { ?>
<?php if($t['typeid']==$__pid) { ?>
<div class="left1">
<div class="left1_t"></div>
<div class="left1_1">
<h3><?php echo $t['typename'];?></h3><span><?php echo $t['htmldir'];?></span>
</div>
<ul>
<?php foreach(typies($t['typeid']) as $t1) { ?>
<li href="<?php echo $t1['url'];?>"<?php if($t1['catid']==$catid) { ?> class="on"<?php } ?> ><a title="<?php echo $t1['typename'];?>" href="<?php echo $t1['url'];?>"<?php if($t1['typeid']==$typeid) { ?> class="on"<?php } ?>><?php echo $t1['typename'];?></a></li> 
<?php foreach(typies($t1['typeid']) as $t2) { ?>  
<li><a title="<?php echo $t2['typename'];?>" href="<?php echo $t2['url'];?>"<?php if($t2['typeid']==$typeid) { ?> class="on"<?php } ?>><?php echo $t2['typename'];?></a></li>   
<?php foreach(typies($t2['typeid']) as $t3) { ?>  
<li><a title="<?php echo $t3['typename'];?>" href="<?php echo $t3['url'];?>"<?php if($t3['typeid']==$typeid) { ?>  class="on"<?php } ?>><?php echo $t3['typename'];?></a></li>   
<?php } ?>  
<?php } ?>  
<?php } ?>
</ul>
<div class="left1_b"></div>
</div>		
<div class="blank20"></div>

<?php } ?>
<?php } ?>
<!--只展开当前栏目所在一级栏目下的分类-->

<?php
}elseif(front::get('case') == 'special'){
?>
<div class="left1">
<div class="left1_1">
<h3><?php echo lang(special);?></h3>
</div>
</div>
<div class="blank20"></div>
<?php
}elseif(front::get('case') == 'tag'){
?>
<div class="left1">
<div class="left1_1">
<h3><?php echo lang(tag);?></h3>
</div>
</div>
<div class="blank20"></div>
<?php
}elseif(front::get('case') == 'mailsubscription'){
?>

<?php
}else{
?>

<!--只展开当前栏目所在一级栏目下的分类-->
<?php $__pid = getcategoryparentsid($catid);?>
<?php foreach(categories() as $t) { ?>
<?php if($t['catid']==$__pid) { ?>
<div class="left1">
<div class="left1_t"></div>
<div class="left1_1">
<h3><?php echo $t['catname'];?></h3><span><?php echo $t['htmldir'];?></span>
</div>
<ul>
<?php foreach(categories($t['catid']) as $t1) { ?>
<li <?php if($t1['catid']==$catid) { ?> class="on"<?php } ?> ><a title="<?php echo $t1['catname'];?>" href="<?php echo $t1['url'];?>"<?php if($t1['catid']==$catid) { ?> class="on"<?php } ?>><?php echo $t1['catname'];?></a></li>
<?php foreach(categories($t1['catid']) as $t2) { ?>
<?php
$parents = category::getparentsid($catid);
?>
<?php if(in_array($t2['parentid'],$parents)) { ?>
<li><a title="<?php echo $t2['catname'];?>" href="<?php echo $t2['url'];?>"<?php if($t2['catid']==$catid) { ?> class="on"<?php } ?>>&nbsp;&nbsp;└<?php echo $t2['catname'];?></a></li> 
<?php foreach(categories($t2['catid']) as $t3) { ?>  
<li><a title="<?php echo $t3['catname'];?>" href="<?php echo $t3['url'];?>"<?php if($t3['catid']==$catid) { ?>  class="on"<?php } ?>>&nbsp;&nbsp;&nbsp;└<?php echo $t3['catname'];?></a></li>
<?php foreach(categories($t3['catid']) as $t4) { ?>  
<li><a title="<?php echo $t4['catname'];?>" href="<?php echo $t4['url'];?>"<?php if($t4['catid']==$catid) { ?>  class="on"<?php } ?>>&nbsp;&nbsp;&nbsp;&nbsp;└<?php echo $t4['catname'];?></a></li>
<?php foreach(categories($t4['catid']) as $t5) { ?>  
<li><a title="<?php echo $t5['catname'];?>" href="<?php echo $t5['url'];?>"<?php if($t5['catid']==$catid) { ?>  class="on"<?php } ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└<?php echo $t5['catname'];?></a></li>  
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>  
<?php } ?>
</ul>
<div class="left1_b"></div>
</div>			
<div class="blank20"></div>

<?php } ?>
<?php } ?>
<!--只展开当前栏目所在一级栏目下的分类-->


<?php
}
?>




    <div class="news_top">
        <?php echo templatetag::tag('内页左侧第二行栏目');?>
    </div>
    <div class="m12"></div>
    <div class="newsArc">
        <ul>
                        <?php echo templatetag::tag('内页左侧第二行栏目列表5条');?>
                    </ul>
    </div>
    <div class="m20"></div>
    <div class="news_top">
        <?php echo lang(contactus);?> <span>CONTACT US</span>
    </div>
    <div class="m20"></div>
<div class="hot_tel shot_tel">
        			<span><?php echo get(tel);?></span>
</div>
<div class="lxwm_main slxwm_main">
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
    <div class="m20"></div>









