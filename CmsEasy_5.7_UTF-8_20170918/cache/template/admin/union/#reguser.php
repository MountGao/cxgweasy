<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<ul class="nav nav-tabs" role="tablist">
<li><a href="<?php echo $base_url;?>/index.php?case=table&act=list&table=friendlink&admin_dir=<?php echo get('admin_dir');?>&site=default">联盟配置</a></li>
<li><a href="<?php echo $base_url;?>/index.php?case=union&act=visit&table=union&admin_dir=<?php echo get('admin_dir');?>&site=default">访问统计</a></li>
<li class="active"><a href="<?php echo $base_url;?>/index.php?case=union&act=reguser&table=union&admin_dir=<?php echo get('admin_dir');?>&site=default">注册统计</a></li>
<li><a href="<?php echo $base_url;?>/index.php?case=union&act=pay&table=union&admin_dir=<?php echo get('admin_dir');?>&site=default">结算记录</a></li>
</ul>

<div class="blank30"></div>

<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
<th align="center" class="catname">用户名</th>
<th align="center" class="htmldir">email</th>
<th align="center" class="htmldir">注册IP</th>
<th align="center" class="htmldir">联盟ID</th>
</tr>
</thead>

<tbody>
<?php if(is_array($data) && !empty($data))
foreach($data as $d) { ?>
<tr>

<td class="catname"><?php echo $d['username'];?></td>
<td class="htmldir"><?php echo $d['e_mail'];?></td>
<td class="htmldir"><?php echo $d['userip'];?></td>
<td class="htmldir"><?php echo $d['introducer'];?>[<?php echo $d['introducerusername'];?>]</td>

</tr>
<?php } ?>


</tbody>
</table>
</div>

<div class="page"><?php echo pagination::html($record_count); ?></div>


