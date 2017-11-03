<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="CmsEasy 5_7_0_20170918_UTF8" />
<?php if(get('mobile_open')=='1') { ?><script type="text/javascript">var cmseasy_wap_tpa=1,cmseasy_wap_tpb=1,cmseasy_wap_url='<?php echo $base_url;?>/wap';</script>
<script src="<?php echo $skin_path;?>/<?php echo $skin_path;?>/js/mobile.js" type="text/javascript"></script><?php } ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?php echo getTitle($archive,$category,$catid,$type);?> - Powered by CmsEasy</title>
<meta name="keywords" content="<?php echo getKeywords($archive,$category,$catid,$type);?>" />
<meta name="description" content="<?php echo getDescription($archive,$category,$catid,$type);?>" />
<meta name="author" content="CmsEasy Team" />
<link rel="icon" href="<?php echo $base_url;?>/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo $base_url;?>/favicon.ico" type="image/x-icon" />
<!-- 调用样式表 -->
<link rel="stylesheet" href="<?php echo $skin_path;?>/base.css" type="text/css" media="all"  />
<link rel="stylesheet" href="<?php echo $skin_path;?>/reset.css" type="text/css" media="all"  />
<link rel="stylesheet" href="<?php echo $skin_path;?>/style.css" type="text/css"  media="all"  />
<script type="text/javascript" src="<?php echo $skin_path;?>/js/jquery-1.8.3.min.js"></script>

<script language="JavaScript" type="text/javascript" src="<?php echo $skin_path;?>/js/slider.js"></script>
<!--[if IE 6]>
<SCRIPT src="<?php echo $skin_path;?>/js/iepng.js"></SCRIPT>
<SCRIPT>DD_belatedPNG.fix('div,img,span,li,a')</SCRIPT>
<![endif]-->
<script language="javascript" type="text/javascript">
function killerrors()
{
return true;
}
window.onerror = killerrors;
</script>
</head>
 <body>



<div class="header">
<div class="head">
<div class="logo">
<a class="" title="<?php echo get(sitename);?>" href="<?php echo $base_url;?>/"><img src="<?php echo get('site_logo');?>" alt="<?php echo get(sitename);?>" width="<?php echo get(logo_width);?>" height="<?php echo get(logo_height);?>" /><span><?php echo get(sitename);?></span></a> 
</div>
<div class="tel">
<?php echo lang(servertel);?>：<?php echo get(tel);?>			</div>
</div>
</div>
<div class="naver">
<div class="nav">
<ul id="navmenu">
<li class="one<?php if($topid==0) { ?> on<?php } ?>"><a class="one<?php if($topid==0) { ?> on<?php } ?>" title="<?php echo lang(backhome);?>" href="<?php echo $base_url;?>/"><?php echo lang(homepage);?></a></li>
<?php foreach(categories_nav() as $t) { ?>
<li class="one<?php if(isset($topid) && $topid==$t['catid']) { ?> on<?php } ?>"><a class="<?php if(isset($topid) && $topid==$t['catid']) { ?> on<?php } ?>" href="<?php echo $t['url'];?>" title="<?php echo $t['catname'];?>" target="<?php if(config::get('nav_blank')==1) { ?> _blank<?php } ?>"><span><?php echo $t['catname'];?></span></a>
<?php if(count(categories($t['catid']))) { ?><ul>
<?php foreach(categories($t['catid']) as $t1) { ?>
<li><a title="<?php echo $t1['catname'];?>" href="<?php echo $t1['url'];?>"><?php echo $t1['catname'];?></a>
<?php if(count(categories($t1['catid']))) { ?><ul><?php foreach(categories($t1['catid']) as $t2) { ?><span></span>
<li><a title="<?php echo $t2['catname'];?>" href="<?php echo $t2['url'];?>"><?php echo $t2['catname'];?></a>
<?php if(count(categories($t2['catid']))) { ?><ul><?php foreach(categories($t2['catid']) as $t3) { ?><span></span>
<li><a title="<?php echo $t3['catname'];?>" href="<?php echo $t3['url'];?>"><?php echo $t3['catname'];?></a>
<?php if(count(categories($t3['catid']))) { ?><ul><?php foreach(categories($t3['catid']) as $t4) { ?><span></span>
<li><a title="<?php echo $t4['catname'];?>" href="<?php echo $t4['url'];?>"><?php echo $t4['catname'];?></a>
<?php if(count(categories($t4['catid']))) { ?><ul><?php foreach(categories($t4['catid']) as $t5) { ?><span></span>
<li><a title="<?php echo $t5['catname'];?>" href="<?php echo $t5['url'];?>"><?php echo $t5['catname'];?></a></li> 
<?php } ?></ul><?php } ?>
</li> 
<?php } ?></ul><?php } ?>
</li>
<?php } ?></ul><?php } ?>
</li>
<?php } ?></ul><?php } ?>
</li> 
<?php } ?></ul><?php } ?>
</li><?php } ?>
</ul>
</div>
        <script type="text/javascript">
$('.nav > ul > li').each(function(i, obj){
if (i == 8){
$(obj).css('width', '108px');
}
});
        </script>
</div>
<div class="slider" id="focus">
<div id="focus_view" class="focus_view">
        <ul>
<?php if(get('slide_number')=='1') { ?>
<li style="opacity:1;filter:alpha(opacity:100);z-index:2;">
<a href="<?php echo get(slide_pic1_url);?>"><img src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>" width="1440" height="478" /></a>	
</li>
<?php } elseif (get('slide_number')=='2') { ?>
<li style="opacity:1;filter:alpha(opacity:100);z-index:2;">
<a href="<?php echo get(slide_pic1_url);?>"><img src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>" width="1440" height="478" /></a>	
</li>
<li >
<a href="<?php echo get(slide_pic2_url);?>"><img src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>" width="1440" height="478" /></a>	
</li>
<?php } elseif (get('slide_number')=='3') { ?>
<li style="opacity:1;filter:alpha(opacity:100);z-index:2;">
<a href="<?php echo get(slide_pic1_url);?>"><img src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>" width="1440" height="478" /></a>	
</li>
<li >
<a href="<?php echo get(slide_pic2_url);?>"><img src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>" width="1440" height="478" /></a>	
</li>
<li >
<a href="<?php echo get(slide_pic3_url);?>"><img src="<?php echo get(slide_pic3);?>" alt="<?php echo get(slide_pic3_title);?>" width="1440" height="478" /></a>	
</li>
<?php } elseif (get('slide_number')=='4') { ?>
<li style="opacity:1;filter:alpha(opacity:100);z-index:2;">
<a href="<?php echo get(slide_pic1_url);?>"><img src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>" width="1440" height="478" /></a>	
</li>
<li >
<a href="<?php echo get(slide_pic2_url);?>"><img src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>" width="1440" height="478" /></a>	
</li>
<li >
<a href="<?php echo get(slide_pic3_url);?>"><img src="<?php echo get(slide_pic3);?>" alt="<?php echo get(slide_pic3_title);?>" width="1440" height="478" /></a>	
</li>
<li >
<a href="<?php echo get(slide_pic4_url);?>"><img src="<?php echo get(slide_pic4);?>" alt="<?php echo get(slide_pic4_title);?>" width="1440" height="478" /></a>	
</li>
<?php } elseif (get('slide_number')=='5') { ?>
<li style="opacity:1;filter:alpha(opacity:100);z-index:2;">
<a href="<?php echo get(slide_pic1_url);?>"><img src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>" width="1440" height="478" /></a>	
</li>
<li >
<a href="<?php echo get(slide_pic2_url);?>"><img src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>" width="1440" height="478" /></a>	
</li>
<li >
<a href="<?php echo get(slide_pic3_url);?>"><img src="<?php echo get(slide_pic3);?>" alt="<?php echo get(slide_pic3_title);?>" width="1440" height="478" /></a>	
</li>
<li >
<a href="<?php echo get(slide_pic4_url);?>"><img src="<?php echo get(slide_pic4);?>" alt="<?php echo get(slide_pic4_title);?>" width="1440" height="478" /></a>	
</li>
<li >
<a href="<?php echo get(slide_pic5_url);?>"><img src="<?php echo get(slide_pic5);?>" alt="<?php echo get(slide_pic5_title);?>" width="1440" height="478" /></a>	
</li>
<?php } ?>
           		        </ul>
    </div>
<div id="focus_slider" class="focus_slider">
        <a id="prev" class="prev" href="javascript:void(0)"></a>
        <div class="mask">
            <ul>
<?php if(get('slide_number')=='1') { ?>
                    <li class="current">
                        <img src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>" width="228" height="102" />                    </li>
<?php } elseif (get('slide_number')=='2') { ?>
                    <li class="current">
                        <img src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>" width="228" height="102" />                    </li>
                                        <li >
                        <img src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>" width="228" height="102" />                    </li>
<?php } elseif (get('slide_number')=='3') { ?>
                    <li class="current">
                        <img src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>" width="228" height="102" />                    </li>
                                        <li >
                        <img src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>" width="228" height="102" />                    </li>
                                        <li >
                        <img src="<?php echo get(slide_pic3);?>" alt="<?php echo get(slide_pic3_title);?>" width="228" height="102" />                    </li>
<?php } elseif (get('slide_number')=='4') { ?>
                    <li class="current">
                        <img src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>" width="228" height="102" />                    </li>
                                        <li >
                        <img src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>" width="228" height="102" />                    </li>
                                        <li >
                        <img src="<?php echo get(slide_pic3);?>" alt="<?php echo get(slide_pic3_title);?>" width="228" height="102" />                    </li>
                                        <li >
                        <img src="<?php echo get(slide_pic4);?>" alt="<?php echo get(slide_pic4_title);?>" width="228" height="102" />                    </li>
<?php } elseif (get('slide_number')=='5') { ?>
                    <li class="current">
                        <img src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>" width="228" height="102" />                    </li>
                                        <li >
                        <img src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>" width="228" height="102" />                    </li>
                                        <li >
                        <img src="<?php echo get(slide_pic3);?>" alt="<?php echo get(slide_pic3_title);?>" width="228" height="102" />                    </li>
                                        <li >
                        <img src="<?php echo get(slide_pic4);?>" alt="<?php echo get(slide_pic4_title);?>" width="228" height="102" />                    </li>
                                        <li >
                        <img src="<?php echo get(slide_pic5);?>" alt="<?php echo get(slide_pic5_title);?>" width="228" height="102" />                    </li>
<?php } ?>
                    	            </ul>
        </div>
        <a id="next" class="next" href="javascript:void(0)"></a>
    </div>
<div class="clear"></div>
</div>
    

<script type="text/javascript">
var Slider = new Slider();
Slider.focusViewId = "focus_view";
Slider.focusTextId = "";
Slider.focusSliderId = "focus_slider";
Slider.sliderNum = "";
Slider.Num = 4;
Slider.Prev = "prev";
Slider.Next = "next";
Slider.upMove = false;
Slider.listEvent = "onmouseover";
Slider.initialize();
</script>	
<div class="m90"></div>