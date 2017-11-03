<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<nav>
      <ul class="pagination">

    <?php if(pages('up')) { ?>
    <li class="disabled"><a href="<?php echo category::url($catid,pages('up'));?>"><span aria-hidden="true">«</span></a></li>
    <?php } ?>
    <?php foreach(pages() as $p) { ?>
    <?php if($p==$page) { ?>
        <li class="active"><a href="#"><?php echo $p;?><span class="sr-only">(current)</span></a></li>
<?php } else { ?>
        <li><a href="<?php echo category::url($catid,$p);?>"><?php echo $p;?></a></li>
 <?php } ?>

    <?php } ?>
     <?php if(pages('down')) { ?>
        <li><a href="<?php echo category::url($catid,pages('down'));?>" aria-label="Next"><span aria-hidden="true">»</span></a></li>
    <?php } ?>
     </ul>
   </nav>