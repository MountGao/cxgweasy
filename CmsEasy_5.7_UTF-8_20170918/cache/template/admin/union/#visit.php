<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<ul class="nav nav-tabs" role="tablist">
<li><a href="<?php echo $base_url;?>/index.php?case=table&act=list&table=friendlink&admin_dir=<?php echo get('admin_dir');?>&site=default">联盟配置</a></li>
<li class="active"><a href="<?php echo $base_url;?>/index.php?case=union&act=visit&table=union&admin_dir=<?php echo get('admin_dir');?>&site=default">访问统计</a></li>
<li><a href="<?php echo $base_url;?>/index.php?case=union&act=reguser&table=union&admin_dir=<?php echo get('admin_dir');?>&site=default">注册统计</a></li>
<li><a href="<?php echo $base_url;?>/index.php?case=union&act=pay&table=union&admin_dir=<?php echo get('admin_dir');?>&site=default">结算记录</a></li>
</ul>

<div class="blank30"></div>

<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
<th class="catname">来源地址</th>
<th align="center" class="htmldir">访问IP</th>
<th align="center" class="htmldir">访问时间</th>
<th align="center" class="htmldir">注册用户</th>
<th align="center" class="htmldir">注册时间</th>
</tr>
</thead>


<tbody>
<?php if(is_array($data) && !empty($data))
foreach($data as $d) { ?>
<tr>

<td class="catname"><?php if($d['referer']) { ?><?php echo $d['referer'];?><?php } else { ?>地址栏直接进入<?php } ?></td>
<td class="htmldir" align="center"><?php echo $d['visitip'];?></td>
<td class="htmldir" align="center"><?php echo date('Y-m-d H:i:s',$d['visittime']);?></td>
<td class="htmldir" align="left"><?php echo $d['regusername'];?></td>
<td class="htmldir" align="center"><?php if($d['regtime']) { ?><?php echo date('Y-m-d H:i:s',$d['regtime']);?><?php } ?></td>

</tr>
<?php } ?>

</tbody>
</table>
</div>



<div class="page"><?php echo pagination::html($record_count); ?></div>

