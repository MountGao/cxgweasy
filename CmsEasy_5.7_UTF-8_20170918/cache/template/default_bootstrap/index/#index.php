<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>

<?php echo template('system/slide.html'); ?>



<style>
    /*.index-1{*/
        /*background: #fff;*/
    /*}*/
    /*.index-1 li{*/
        /*text-align: left;*/
    /*}*/
    /*.index-1 .t1{*/
        /*padding: 0;*/
        /*height: 176px;*/
    /*}*/
    /*.index-1 .model-three-index{*/
        /*height: 410px;*/
        /*padding: 0;*/
        /*border: 1px solid #eff1f5;*/

    /*}*/
    /*.index-1 .model-three-index:hover .t1{*/
        /*margin-top: 0;*/

    /*}*/
    /*.index-1 .model-three-index .t2{*/
        /*display: none;*/
    /*}*/
    /*.index-1 .model-three-index .t3{*/
        /*padding: 17px 20px;*/
        /*color: #999999;*/
    /*}*/
    /*.index-1 .model-three-index .t3 a{*/
        /*font-size: 24px;*/
    /*}*/
    /*.index-1 .model-three-index .t3 .description{*/
        /*padding-bottom: 12px;*/
        /*border-bottom: solid 1px #ebeef3;*/
    /*}*/
    .index-1 .t2{
        background: #05A9AB;
    }
</style>
<div class="index-1">
<div class="container">
<?php echo templatetag::tag('首页第一行栏目名称');?>
<ul class="wow fadeInUp" data-wow-delay="0.5s">
<?php echo templatetag::tag('首页第一行栏目图片说明一');?>
<?php echo templatetag::tag('首页第一行栏目图片说明二');?>
<?php echo templatetag::tag('首页第一行栏目图片说明三');?>
</ul>
</div>		
</div>







<div class="blank30"></div>


<!--<style>-->
    <!--.liner{-->
        <!--height: 4px;-->
        <!--position: relative;-->
    <!--}-->
    <!--.liner .color{-->
        <!--height: 4px;-->
        <!--position: absolute;-->
        <!--top: 0;-->
    <!--}-->
    <!--.liner .color.blue {-->
        <!--background-color: #0085cd;-->
        <!--width: 74px;-->
        <!--left: 0;-->
    <!--}-->
    <!--.liner .color.green {-->
        <!--background-color: #6dba44;-->
        <!--width: 32px;-->
        <!--left: 74px;-->
    <!--}-->
<!--</style>-->
<div class="index-7">
<div class="container">
    <?php echo templatetag::tag('首页第六行栏目名称');?>
    <?php echo templatetag::tag('首页第二行栏目名称');?>
    <div class="blank20"></div>
    <?php echo templatetag::tag('首页第七行并排左');?>
    <?php echo templatetag::tag('首页第七行并排左');?>
</div>
</div>
<div class="blank60"></div>


<?php echo template('footer_origin.html'); ?>