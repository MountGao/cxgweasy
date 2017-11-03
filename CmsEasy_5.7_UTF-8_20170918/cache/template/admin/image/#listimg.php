<?php defined('ROOT') or exit('Can\'t Access !'); ?>
﻿<style type="text/css">
.img-container {
  margin-bottom: 50px;
}
.img-container .img-box {
  display: inline-block;
  position: relative;
  height:250px;
  display: table-cell;
        vertical-align: middle;
}
.img-container .img-box:hover span {
  visibility: visible;
}
.img-container img {
  border: 4px solid #dff0fd;
  border-radius: 3px;
  cursor: pointer;

}
.img-container .title {
  margin-top: 5px;
  font-size: 13px;
}
.img-container .glyphicon {
  position: absolute;
  background: rgba(56, 156, 240, 0.8);
  height: 48px;
  width: 48px;
  visibility: hidden;
  left: 41%;
  border-radius: 100%;
  cursor: pointer;
  text-align: center;
  color:white;line-height:48px;
}
.img-container span {
  display: inline-block;
  margin-top: 14px;
}
.img-container span.glyphicon-eye-open {
  top: 28%;
}
.img-container span.glyphicon-trash {
  top: 52%;
}
</style>
<div class="padding10">
<input type="button" name="button1" class="btn btn-primary" value="返回图片库" onclick="location.href='<?php echo $base_url;?>/index.php?case=image&act=listdir&admin_dir=<?php echo get('admin_dir');?>&site=default'"> 


<div class="page"><?php echo $link_str;?></div>
<div class="blank30"></div>
<div class="line"></div>
<div class="blank10"></div>

<div class="row">


<?php foreach($list_img_arr as $i => $t) { ?>
<?php if($i%4==0) { ?><div class="clearfix"></div><?php } else { ?><?php } ?>
<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 img-container">
<div class="img-box">
<span class="icon">
<a href="upload/images/<?php echo front::get('dir');?>/<?php echo $t;?>" target="_blank" title="查看原图"><span class="glyphicon glyphicon-eye-open"></span></a>
</span>
<span class="icon trash">
<a href="<?php echo url('image/deleteimg/dir/'.front::get('dir').'/imgname/'.str_replace('.','___',$t));?>"><span class="glyphicon glyphicon-trash"></span></a>
</span>
<img src="upload/images/<?php echo front::get('dir');?>/<?php echo $t;?>" class="img-responsive">
</div>
</div>
<?php } ?>

<div class="line"></div>
<div class="page"><?php echo $link_str;?></div>
</div>