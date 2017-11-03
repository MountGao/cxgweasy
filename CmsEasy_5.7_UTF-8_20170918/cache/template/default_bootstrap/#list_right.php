<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<div class="content-right-list">

<h3><a><?php echo lang(siteannoun);?> & <small>List</small></a></h3>
<p></p>
<hr class="featurette-divider">
<ol>
<?php foreach(announ(5) as $an) { ?>
<li><a href="<?php echo $an['url'];?>" title="<?php echo $an['title'];?>" target="_blank"><?php echo $an['title'];?></a></li>
<?php } ?>
</ol>

<h3><a><?php echo lang(relatedcontent);?> & <small>List</small></a></h3>
<p></p>
<hr class="featurette-divider">
<ol>
<?php foreach(archive($catid,0,0,'0,0,0',20,aid,10,false,0,true,0,0,0,0) as $archive) { ?>
<li><a href="<?php echo $archive['url'];?>" target="_blank" title="<?php echo $archive['stitle'];?>"><?php echo $archive['title'];?></a></li>
<?php } ?>
</ol>

</div>