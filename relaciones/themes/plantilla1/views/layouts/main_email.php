<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo Yii::app()->language;?>" lang="<?php echo Yii::app()->language;?>" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title><?php echo CHtml::encode($this->pageTitle).' - '.Yii::app()->params['empresa']; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo Yii::app()->charset;?>" />
<meta http-equiv="imagetoolbar" content="no" />
<style>
div.light_rounded .pp_top .pp_left{background:url("../images/prettyPhoto/light_rounded/sprite.png") -88px -53px no-repeat;}
div.light_rounded .pp_top .pp_middle{background:#fff;}
div.light_rounded .pp_top .pp_right{background:url("../images/prettyPhoto/light_rounded/sprite.png") -110px -53px no-repeat;}
div.light_rounded .pp_content .ppt{color:#000;}
div.light_rounded .pp_content_container .pp_left, div.light_rounded .pp_content_container .pp_right{background:#fff;}
div.light_rounded .pp_content{background-color:#fff;}
div.light_rounded .pp_next:hover{background:url("../images/prettyPhoto/light_rounded/btnNext.png") center right no-repeat; cursor:pointer;}
div.light_rounded .pp_previous:hover{background:url("../images/prettyPhoto/light_rounded/btnPrevious.png") center left no-repeat; cursor:pointer;}
div.light_rounded .pp_expand{background:url("../images/prettyPhoto/light_rounded/sprite.png") -31px -26px no-repeat; cursor:pointer;}
div.light_rounded .pp_expand:hover{background:url("../images/prettyPhoto/light_rounded/sprite.png") -31px -47px no-repeat; cursor:pointer;}
div.light_rounded .pp_contract{background:url("../images/prettyPhoto/light_rounded/sprite.png") 0 -26px no-repeat; cursor:pointer;}
div.light_rounded .pp_contract:hover{background:url("../images/prettyPhoto/light_rounded/sprite.png") 0 -47px no-repeat; cursor:pointer;}
div.light_rounded .pp_close{width:75px; height:22px; background:url("../images/prettyPhoto/light_rounded/sprite.png") -1px -1px no-repeat; cursor:pointer;}
div.light_rounded #pp_full_res .pp_inline{color:#000;}
div.light_rounded .pp_gallery a.pp_arrow_previous, div.light_rounded .pp_gallery a.pp_arrow_next{margin-top:12px !important;}
div.light_rounded .pp_nav .pp_play{background:url("../images/prettyPhoto/light_rounded/sprite.png") -1px -100px no-repeat; height:15px; width:14px;}
div.light_rounded .pp_nav .pp_pause{background:url("../images/prettyPhoto/light_rounded/sprite.png") -24px -100px no-repeat; height:15px; width:14px;}
div.light_rounded .pp_arrow_previous{background:url("../images/prettyPhoto/light_rounded/sprite.png") 0 -71px no-repeat;}
div.light_rounded .pp_arrow_previous.disabled{background-position:0 -87px; cursor:default;}
div.light_rounded .pp_arrow_next{background:url("../images/prettyPhoto/light_rounded/sprite.png") -22px -71px no-repeat;}
div.light_rounded .pp_arrow_next.disabled{background-position:-22px -87px; cursor:default;}
div.light_rounded .pp_bottom .pp_left{background:url("../images/prettyPhoto/light_rounded/sprite.png") -88px -80px no-repeat;}
div.light_rounded .pp_bottom .pp_middle{background:#fff;}
div.light_rounded .pp_bottom .pp_right{background:url("../images/prettyPhoto/light_rounded/sprite.png") -110px -80px no-repeat;}
div.light_rounded .pp_loaderIcon{background:url("../images/prettyPhoto/light_rounded/loader.gif") center center no-repeat;}

div.dark_rounded .pp_top .pp_left{background:url("../images/prettyPhoto/dark_rounded/sprite.png") -88px -53px no-repeat;}
div.dark_rounded .pp_top .pp_middle{background:url("../images/prettyPhoto/dark_rounded/contentPattern.png") top left repeat;}
div.dark_rounded .pp_top .pp_right{background:url("../images/prettyPhoto/dark_rounded/sprite.png") -110px -53px no-repeat;}
div.dark_rounded .pp_content_container .pp_left{background:url("../images/prettyPhoto/dark_rounded/contentPattern.png") top left repeat-y;}
div.dark_rounded .pp_content_container .pp_right{background:url("../images/prettyPhoto/dark_rounded/contentPattern.png") top right repeat-y;}
div.dark_rounded .pp_content{background:url("../images/prettyPhoto/dark_rounded/contentPattern.png") top left repeat;}
div.dark_rounded .pp_next:hover{background:url("../images/prettyPhoto/dark_rounded/btnNext.png") center right no-repeat; cursor:pointer;}
div.dark_rounded .pp_previous:hover{background:url("../images/prettyPhoto/dark_rounded/btnPrevious.png") center left no-repeat; cursor:pointer;}
div.dark_rounded .pp_expand{background:url("../images/prettyPhoto/dark_rounded/sprite.png") -31px -26px no-repeat; cursor:pointer;}
div.dark_rounded .pp_expand:hover{background:url("../images/prettyPhoto/dark_rounded/sprite.png") -31px -47px no-repeat; cursor:pointer;}
div.dark_rounded .pp_contract{background:url("../images/prettyPhoto/dark_rounded/sprite.png") 0 -26px no-repeat; cursor:pointer;}
div.dark_rounded .pp_contract:hover{background:url("../images/prettyPhoto/dark_rounded/sprite.png") 0 -47px no-repeat; cursor:pointer;}
div.dark_rounded .pp_close{width:75px; height:22px; background:url("../images/prettyPhoto/dark_rounded/sprite.png") -1px -1px no-repeat; cursor:pointer;}
div.dark_rounded .currentTextHolder{color:#c4c4c4;}
div.dark_rounded .pp_description{color:#fff;}
div.dark_rounded #pp_full_res .pp_inline{color:#fff;}
div.dark_rounded .pp_gallery a.pp_arrow_previous, div.dark_rounded .pp_gallery a.pp_arrow_next{margin-top:12px !important;}
div.dark_rounded .pp_nav .pp_play{background:url("../images/prettyPhoto/dark_rounded/sprite.png") -1px -100px no-repeat; height:15px; width:14px;}
div.dark_rounded .pp_nav .pp_pause{background:url("../images/prettyPhoto/dark_rounded/sprite.png") -24px -100px no-repeat; height:15px; width:14px;}
div.dark_rounded .pp_arrow_previous{background:url("../images/prettyPhoto/dark_rounded/sprite.png") 0 -71px no-repeat;}
div.dark_rounded .pp_arrow_previous.disabled{background-position:0 -87px; cursor:default;}
div.dark_rounded .pp_arrow_next{background:url("../images/prettyPhoto/dark_rounded/sprite.png") -22px -71px no-repeat;}
div.dark_rounded .pp_arrow_next.disabled{background-position:-22px -87px; cursor:default;}
div.dark_rounded .pp_bottom .pp_left{background:url("../images/prettyPhoto/dark_rounded/sprite.png") -88px -80px no-repeat;}
div.dark_rounded .pp_bottom .pp_middle{background:url("../images/prettyPhoto/dark_rounded/contentPattern.png") top left repeat;}
div.dark_rounded .pp_bottom .pp_right{background:url("../images/prettyPhoto/dark_rounded/sprite.png") -110px -80px no-repeat;}
div.dark_rounded .pp_loaderIcon{background:url("../images/prettyPhoto/dark_rounded/loader.gif") center center no-repeat;}
div.dark_square .pp_left, div.dark_square .pp_middle, div.dark_square .pp_right, div.dark_square .pp_content{background:url("../images/prettyPhoto/dark_square/contentPattern.png") top left repeat;}
div.dark_square .currentTextHolder{color:#c4c4c4;}
div.dark_square .pp_description{color:#fff;}
div.dark_square .pp_loaderIcon{background:url("../images/prettyPhoto/dark_rounded/loader.gif") center center no-repeat;}
div.dark_square .pp_content_container .pp_left{background:url("../images/prettyPhoto/dark_rounded/contentPattern.png") top left repeat-y;}
div.dark_square .pp_content_container .pp_right{background:url("../images/prettyPhoto/dark_rounded/contentPattern.png") top right repeat-y;}
div.dark_square .pp_expand{background:url("../images/prettyPhoto/dark_square/sprite.png") -31px -26px no-repeat; cursor:pointer;}
div.dark_square .pp_expand:hover{background:url("../images/prettyPhoto/dark_square/sprite.png") -31px -47px no-repeat; cursor:pointer;}
div.dark_square .pp_contract{background:url("../images/prettyPhoto/dark_square/sprite.png") 0 -26px no-repeat; cursor:pointer;}
div.dark_square .pp_contract:hover{background:url("../images/prettyPhoto/dark_square/sprite.png") 0 -47px no-repeat; cursor:pointer;}
div.dark_square .pp_close{width:75px; height:22px; background:url("../images/prettyPhoto/dark_square/sprite.png") -1px -1px no-repeat; cursor:pointer;}
div.dark_square #pp_full_res .pp_inline{color:#fff;}
div.dark_square .pp_gallery a.pp_arrow_previous, div.dark_square .pp_gallery a.pp_arrow_next{margin-top:12px !important;}
div.dark_square .pp_nav .pp_play{background:url("../images/prettyPhoto/dark_square/sprite.png") -1px -100px no-repeat; height:15px; width:14px;}
div.dark_square .pp_nav .pp_pause{background:url("../images/prettyPhoto/dark_square/sprite.png") -24px -100px no-repeat; height:15px; width:14px;}
div.dark_square .pp_arrow_previous{background:url("../images/prettyPhoto/dark_square/sprite.png") 0 -71px no-repeat;}
div.dark_square .pp_arrow_previous.disabled{background-position:0 -87px; cursor:default;}
div.dark_square .pp_arrow_next{background:url("../images/prettyPhoto/dark_square/sprite.png") -22px -71px no-repeat;}
div.dark_square .pp_arrow_next.disabled{background-position:-22px -87px; cursor:default;}
div.dark_square .pp_next:hover{background:url("../images/prettyPhoto/dark_square/btnNext.png") center right no-repeat; cursor:pointer;}
div.dark_square .pp_previous:hover{background:url("../images/prettyPhoto/dark_square/btnPrevious.png") center left no-repeat; cursor:pointer;}

div.light_square .pp_left, div.light_square .pp_middle, div.light_square .pp_right, div.light_square .pp_content{background:#fff;}
div.light_square .pp_content .ppt{color:#000;}
div.light_square .pp_expand{background:url("../images/prettyPhoto/light_square/sprite.png") -31px -26px no-repeat; cursor:pointer;}
div.light_square .pp_expand:hover{background:url("../images/prettyPhoto/light_square/sprite.png") -31px -47px no-repeat; cursor:pointer;}
div.light_square .pp_contract{background:url("../images/prettyPhoto/light_square/sprite.png") 0 -26px no-repeat; cursor:pointer;}
div.light_square .pp_contract:hover{background:url("../images/prettyPhoto/light_square/sprite.png") 0 -47px no-repeat; cursor:pointer;}
div.light_square .pp_close{width:75px; height:22px; background:url("../images/prettyPhoto/light_square/sprite.png") -1px -1px no-repeat; cursor:pointer;}
div.light_square #pp_full_res .pp_inline{color:#000;}
div.light_square .pp_gallery a.pp_arrow_previous, div.light_square .pp_gallery a.pp_arrow_next{margin-top:12px !important;}
div.light_square .pp_nav .pp_play{background:url("../images/prettyPhoto/light_square/sprite.png") -1px -100px no-repeat; height:15px; width:14px;}
div.light_square .pp_nav .pp_pause{background:url("../images/prettyPhoto/light_square/sprite.png") -24px -100px no-repeat; height:15px; width:14px;}
div.light_square .pp_arrow_previous{background:url("../images/prettyPhoto/light_square/sprite.png") 0 -71px no-repeat;}
div.light_square .pp_arrow_previous.disabled{background-position:0 -87px; cursor:default;}
div.light_square .pp_arrow_next{background:url("../images/prettyPhoto/light_square/sprite.png") -22px -71px no-repeat;}
div.light_square .pp_arrow_next.disabled{background-position:-22px -87px; cursor:default;}
div.light_square .pp_next:hover{background:url("../images/prettyPhoto/light_square/btnNext.png") center right no-repeat; cursor:pointer;}
div.light_square .pp_previous:hover{background:url("../images/prettyPhoto/light_square/btnPrevious.png") center left no-repeat; cursor:pointer;}
div.light_square .pp_loaderIcon{background:url("../images/prettyPhoto/light_rounded/loader.gif") center center no-repeat;}

div.facebook .pp_top .pp_left{background:url("../images/prettyPhoto/facebook/sprite.png") -88px -53px no-repeat;}
div.facebook .pp_top .pp_middle{background:url("../images/prettyPhoto/facebook/contentPatternTop.png") top left repeat-x;}
div.facebook .pp_top .pp_right{background:url("../images/prettyPhoto/facebook/sprite.png") -110px -53px no-repeat;}
div.facebook .pp_content .ppt{color:#000;}
div.facebook .pp_content_container .pp_left{background:url("../images/prettyPhoto/facebook/contentPatternLeft.png") top left repeat-y;}
div.facebook .pp_content_container .pp_right{background:url("../images/prettyPhoto/facebook/contentPatternRight.png") top right repeat-y;}
div.facebook .pp_content{background:#fff;}
div.facebook .pp_expand{background:url("../images/prettyPhoto/facebook/sprite.png") -31px -26px no-repeat; cursor:pointer;}
div.facebook .pp_expand:hover{background:url("../images/prettyPhoto/facebook/sprite.png") -31px -47px no-repeat; cursor:pointer;}
div.facebook .pp_contract{background:url("../images/prettyPhoto/facebook/sprite.png") 0 -26px no-repeat; cursor:pointer;}
div.facebook .pp_contract:hover{background:url("../images/prettyPhoto/facebook/sprite.png") 0 -47px no-repeat; cursor:pointer;}
div.facebook .pp_close{width:22px; height:22px; background:url("../images/prettyPhoto/facebook/sprite.png") -1px -1px no-repeat; cursor:pointer;}
div.facebook #pp_full_res .pp_inline{color:#000;}
div.facebook .pp_loaderIcon{background:url("../images/prettyPhoto/facebook/loader.gif") center center no-repeat;}
div.facebook .pp_arrow_previous{background:url("../images/prettyPhoto/facebook/sprite.png") 0 -71px no-repeat; height:22px; margin-top:0; width:22px;}
div.facebook .pp_arrow_previous.disabled{background-position:0 -96px; cursor:default;}
div.facebook .pp_arrow_next{background:url("../images/prettyPhoto/facebook/sprite.png") -32px -71px no-repeat; height:22px; margin-top:0; width:22px;}
div.facebook .pp_arrow_next.disabled{background-position:-32px -96px; cursor:default;}
div.facebook .pp_nav{margin-top:0;}
div.facebook .pp_nav p{font-size:15px; padding:0 3px 0 4px;}
div.facebook .pp_nav .pp_play{background:url("../images/prettyPhoto/facebook/sprite.png") -1px -123px no-repeat; height:22px; width:22px;}
div.facebook .pp_nav .pp_pause{background:url("../images/prettyPhoto/facebook/sprite.png") -32px -123px no-repeat; height:22px; width:22px;}
div.facebook .pp_next:hover{background:url("../images/prettyPhoto/facebook/btnNext.png") center right no-repeat; cursor:pointer;}
div.facebook .pp_previous:hover{background:url("../images/prettyPhoto/facebook/btnPrevious.png") center left no-repeat; cursor:pointer;}
div.facebook .pp_bottom .pp_left{background:url("../images/prettyPhoto/facebook/sprite.png") -88px -80px no-repeat;}
div.facebook .pp_bottom .pp_middle{background:url("../images/prettyPhoto/facebook/contentPatternBottom.png") top left repeat-x;}
div.facebook .pp_bottom .pp_right{background:url("../images/prettyPhoto/facebook/sprite.png") -110px -80px no-repeat;}

div.pp_pic_holder a:focus{outline:none;}
div.pp_overlay{background:#000; display:none; left:0; position:absolute; top:0; width:100%; z-index:9500;}
div.pp_pic_holder{display:none; position:absolute; width:100px; z-index:10000;}
.pp_top{height:20px; position:relative;}
* html .pp_top{padding:0 20px;}
.pp_top .pp_left{height:20px; left:0; position:absolute; width:20px;}
.pp_top .pp_middle{height:20px; left:20px; position:absolute; right:20px;}
* html .pp_top .pp_middle{left:0; position:static;}
.pp_top .pp_right{height:20px; left:auto; position:absolute; right:0; top:0; width:20px;}
.pp_content{height:40px; min-width:40px;}
* html .pp_content{width:40px;}
.pp_fade{display:none;}
.pp_content_container{position:relative; text-align:left; width:100%;}
.pp_content_container .pp_left{padding-left:20px;}
.pp_content_container .pp_right{padding-right:20px;}
.pp_content_container .pp_details{float:left; margin:10px 0 2px 0;}
.pp_description{display:none; margin:0 0 5px 0;}
.pp_nav{clear:left; float:left; margin:3px 0 0 0;}
.pp_nav p{float:left; margin:2px 4px;}
.pp_nav .pp_play, .pp_nav .pp_pause{float:left; margin-right:4px; text-indent:-10000px;}
a.pp_arrow_previous, a.pp_arrow_next{display:block; float:left; height:15px; margin-top:3px; overflow:hidden; text-indent:-10000px; width:14px;}
.pp_hoverContainer{position:absolute; top:0; width:100%; z-index:2000;}
.pp_gallery{display:none; left:50%; margin-top:-50px; position:absolute; z-index:10000;}
.pp_gallery ul{float:left; height:35px; margin:0 0 0 5px; overflow:hidden; padding:0; position:relative;}
.pp_gallery ul a{border:1px #000 solid; border:1px rgba(0,0,0,0.5) solid; display:block; float:left; height:33px; overflow:hidden;}
.pp_gallery ul a:hover, .pp_gallery li.selected a{border-color:#fff;}
.pp_gallery ul a img{border:0;}
.pp_gallery li{display:block; float:left; margin:0 5px 0 0; padding:0;}
.pp_gallery li.default a{background:url("../images/prettyPhoto/facebook/default_thumbnail.gif") 0 0 no-repeat; display:block; height:33px; width:50px;}
.pp_gallery li.default a img{display:none;}
.pp_gallery .pp_arrow_previous, .pp_gallery .pp_arrow_next{margin-top:7px !important;}
a.pp_next{background:url("../images/prettyPhoto/light_rounded/btnNext.png") 10000px 10000px no-repeat; display:block; float:right; height:100%; text-indent:-10000px; width:49%;}
a.pp_previous{background:url("../images/prettyPhoto/light_rounded/btnNext.png") 10000px 10000px no-repeat; display:block; float:left; height:100%; text-indent:-10000px; width:49%;}
a.pp_expand, a.pp_contract{cursor:pointer; display:none; height:20px; position:absolute; right:30px; text-indent:-10000px; top:10px; width:20px; z-index:20000;}
a.pp_close{display:block; float:right; line-height:22px; text-indent:-10000px;}
.pp_bottom{height:20px; position:relative;}
* html .pp_bottom{padding:0 20px;}
.pp_bottom .pp_left{height:20px; left:0; position:absolute; width:20px;}
.pp_bottom .pp_middle{height:20px; left:20px; position:absolute; right:20px;}
* html .pp_bottom .pp_middle{left:0; position:static;}
.pp_bottom .pp_right{height:20px; left:auto; position:absolute; right:0; top:0; width:20px;}
.pp_loaderIcon{display:block; height:24px; left:50%; margin:-12px 0 0 -12px; position:absolute; top:50%; width:24px;}
#pp_full_res{line-height:1 !important;}
#pp_full_res .pp_inline{text-align:left;}
#pp_full_res .pp_inline p{margin:0 0 15px 0;}
div.ppt{color:#fff; display:none; font-size:17px; margin:0 0 5px 15px; z-index:9999;}
.clearfix:after{content:"."; display:block; height:0; clear:both; visibility:hidden;}
.clearfix{display:inline-block;}
* html .clearfix{height:1%;}
.clearfix{display:block;}
/*
Template Name: PhotoFolio
File: Homepage CSS
Author: OS Templates
Author URI: http://www.os-templates.com/
Licence: <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>
*/

#tabcontainer .tabcontainer{
	padding:20px 0 0 0;
	}

.tabcontainer h2.title{
	font-size:42px;
	font-weight:normal;
	color:#ACACAC;
	background-color:#F9F9F9;
	}

/* ----------------------------------------------Services-------------------------------------*/

#hpage_services .block{
	display:inline;
	float:left;
	width:300px;
	margin:0 30px 0 0;
	padding:0;
	}

#hpage_services .last{
	margin-right:0;
	}

#hpage_services img{
	display:inline;
	float:left;
	}

#hpage_services strong{
	float:left;
	margin:8px 0 0 10px;
	padding:0;
	font-size:22px;
	font-weight:normal;
	color:#ACACAC;
	background-color:#F9F9F9;
	}

#hpage_services p{
	display:block;
	margin:0;
	padding:10px 0 0 0;
	clear:both;
	line-height:1.6em;
	}

#hpage_services .spacer{
	clear:both;
	padding:8px 0;
	line-height:normal;
	}

#container .tabcontainer ul.line p.readmore a, #container .tabcontainer .fl_right p.readmore a{
	display:inline-block;
	line-height:normal;
	height:28px;
	padding:12px 15px 0 15px;
	text-transform:uppercase;
	color:#F9F9F9;
	border:1px solid #000000;
	background:url("../images/bar_gradient.png") center center no-repeat #666666;
	}

/* ----------------------------------------------Latest Projects-------------------------------------*/

.tabcontainer ul.line{
	display:block;
	margin:0;
	padding:0;
	list-style:none;
	}

.tabcontainer ul.line li{
	display:block;
	float:left;
	width:300px;
	margin:0 30px 0 0;
	padding:0;
	}

.tabcontainer ul.line li.last{
	margin-right:0;
	}

.tabcontainer ul.line .imgholder, .tabcontainer ul.line img, .tabcontainer ul.line p{
	margin:0;
	padding:0;
	}

.tabcontainer ul.line .imgholder{
	margin:0 0 5px 0;
	padding:0 0 12px 0;
	background:url("../images/small_shadow.gif") bottom center no-repeat;
	}

#tabcontainer .tabcontainer ul.line li img{
	display:block;
	width:280px;
	height:160px;
	margin:0;
	padding:9px;
	border:1px solid #DFDFDF;
	color:#ACACAC;
	background-color:#F9F9F9;
	}

.tabcontainer ul.line p.name{
	margin-bottom:15px;
	font-size:20px;
	}

/* ----------------------------------------------Homepage Portfolio-------------------------------------*/

#hpage_portfolio{
	display:block;
	width:100%;
	line-height:1.6em;
	}

#hpage_portfolio .fl_left{
	width:480px;
	padding:9px;
	border:1px solid #DFDFDF;
	}

#hpage_portfolio .fl_right{
	width:420px;
	}

#hpage_portfolio p, #hpage_portfolio img{
	margin:0;
	padding:0;
	list-style:none;
	}

#portfolioslider{
	position:relative;
	}

#portfolioslider ul{
	margin:0;
	padding:0;
	list-style:none;
	}

#portfolioslider li{
	display:inline-block;
	}

#container .tabcontainer .fl_right p.readmore{
	margin-top:15px;
	text-align:right;
	}
	/*
Template Name: PhotoFolio
File: Gallery CSS
Author: OS Templates
Author URI: http://www.os-templates.com/
Licence: <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>
*/

.gallery{
	display:block;
	width:100%;
	padding:20px 0 8px 0;
	}

.gallery ul{
	margin:0;
	padding:0;
	list-style:none;
	}

.gallery li{
	display:block;
	position:relative;
	float:left;
	width:150px;
	height:150px;
	margin:0 12px 12px 0;
	padding:0;
	}

.gallery li a img{
	display:block;
	width:150px;
	height:150px;
	margin:0;
	}

.gallery li.last{
	margin-right:0;
	}
	/*
Template Name: PhotoFolio
File: Forms CSS
Author: OS Templates
Author URI: http://www.os-templates.com/
Licence: <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>
*/

form, fieldset, legend{
	margin:0;
	padding:0;
	border:none;
	}

legend{
	display:none;
	}

input, textarea, select{
	font-size:12px;
	font-family:Georgia, "Times New Roman", Times, serif;
	}

/* ----------------------------------------------Search Form-------------------------------------*/

#search{
	float:right;
	margin:5px 15px 0 0;
	}

#search input{
	display:block;
	float:left;
	width:190px;
	height:20px;
	margin:0;
	padding:5px 5px 5px 10px;
	color:#CCCCCC;
	background:url("../images/search_l.gif") 0 0 no-repeat #161616;
	border:none;
	}

#search input#go{
	width:35px;
	height:30px;
	margin:0;
	padding:0;
	cursor:pointer;
	background:none;
	}

/* ----------------------------------------------Forms in Content Area-------------------------------------*/

#container #respond{
	display:block;
	width:100%;
	}

#container #respond input{
	width:170px;
	padding:2px;
	border:1px solid #CCCCCC;
	margin:5px 5px 0 0;
	}

#container #respond textarea{
	width:98%;
	border:1px solid #CCCCCC;
	padding:2px;
	overflow:auto;
	}

#container #respond p{
	margin:5px 0;
	}

#container #respond #submit, #container #respond #reset{
	margin:0;
	padding:5px;
	color:#666666;
	background-color:#F7F7F7;
	border:1px solid #CCCCCC;
	cursor:pointer;
}


#container input[type="submit"] {
	margin:0;
	padding:5px;
	color:#666666;
	background-color:#F7F7F7;
	border:1px solid #CCCCCC;
	cursor:pointer;
	min-width:120px;
}

	
div.form
{
}

div.form input,
div.form textarea,
div.form select
{
	margin: 0.2em 0 0.5em 0;
}

div.form fieldset
{
	border: 1px solid #DDD;
	padding: 10px;
	margin: 0 0 10px 0;
    -moz-border-radius:7px;
}

div.form label
{
	font-weight: bold;
	font-size: 0.9em;
	display: block;
}

div.form .row
{
	margin: 5px 0;
}

div.form .hint
{
	margin: 0;
	padding: 0;
	color: #999;
}

div.form .note
{
	font-style: italic;
}

div.form span.required
{
	color: red;
}

div.form div.error label:first-child,
div.form label.error,
div.form span.error
{
	color: #C00;
}

div.form div.error input,
div.form div.error textarea,
div.form div.error select,
div.form input.error,
div.form textarea.error,
div.form select.error
{
	background: #FEE;
	border-color: #C00;
}

div.form div.success input,
div.form div.success textarea,
div.form div.success select,
div.form input.success,
div.form textarea.success,
div.form select.success
{
	background: #E6EFC2;
	border-color: #C6D880;
}


div.form .errorSummary
{
	border: 2px solid #C00;
	padding: 7px 7px 12px 7px;
	margin: 0 0 20px 0;
	background: #FEE;
	font-size: 0.9em;
}

div.form .errorMessage
{
	color: red;
	font-size: 0.9em;
}

div.form .errorSummary p
{
	margin: 0;
	padding: 5px;
}

div.form .errorSummary ul
{
	margin: 0;
	padding: 0 0 0 20px;
}

div.wide.form label
{
	float: left;
	margin-right: 10px;
	position: relative;
	text-align: right;
	width: 100px;
}

div.wide.form .row
{
	clear: left;
}

div.wide.form .buttons, div.wide.form .hint, div.wide.form .errorMessage
{
	clear: left;
	padding-left: 110px;
}
	
	/*
Template Name: PhotoFolio
File: Featured Slider CSS
Author: OS Templates
Author URI: http://www.os-templates.com/
Licence: <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>
*/

#featured_slide{
	display:block;
	width:960px;
	height:380px;
	margin:0 auto;
	padding:0;
	font-size:12px;
	font-family:Georgia, "Times New Roman", Times, serif;
	}

/* ----------------------------------------------Main Category Slider-------------------------------------*/

#slider, #slider ul{
	position:relative;
	width:960px;
	height:380px;
	}

#slider ul{
	display:block;
	overflow:hidden;
	margin:0;
	padding:0;
	list-style:none;
	}

#slider li{
	position:absolute;
	top:0;
	width:160px;
	height:355px;
	padding:11px;
	color:#9FA4AA;
	background-color:#2B2B2B;
	border:1px solid #464646;
	overflow:hidden;
	}

#slider li img, #slider li h2, #slider li p{
	margin:0;
	padding:0;
	font-weight:normal;
	line-height:normal;
	}

#slider li img{
	width:150px;
	height:110px;
	margin:0 0 10px 0;
	padding:4px;
	border:1px solid #161616;
	}

#slider li h2{
	margin-bottom:10px;
	padding-bottom:10px;
	font-size:16px;
	font-weight:bold;
	text-align:center;
	color:#ACACAC;
	background-color:#2B2B2B;
	border-bottom:1px solid #464646;
	}

#slider li p{
	line-height:1.6em;
	margin:0 0 12px 0;
	}

#slider li p.readmore{
	margin:0;
	text-align:right;
	}

#slider li p.readmore a{
	font-weight:bold;
	line-height:normal;
	color:#ACACAC;
	background-color:#2B2B2B;
	text-decoration:none;
	}

/* ----------------------------------------------Previous & Next Navigation-------------------------------------*/

#slider a.next, #slider a.prev{
	position:absolute;
	top:50%;
	width:20px;
	height:30px;
	cursor:pointer;
	outline:none;
	z-index:1000;
	background:#161616 center center no-repeat;
	border:1px solid #464646;
	}

#slider a.next{
	right:-21px;
	background-image:url("../images/next.png");
	border-left-color:#2B2B2B;
	}

#slider a.prev{
	left:-21px;
	background-image:url("../images/prev.png");
	border-right-color:#2B2B2B;
	}

#slider a.prev:hover, #slider a.next:hover{
	border-color:#CCCCCC;
	}

#slider a.disabled, #slider a.disabled:hover{
	border:#161616; /* Same colour as container background */
	cursor:default;
	}
	/*
Template Name: PhotoFolio
File: Portfolio CSS
Author: OS Templates
Author URI: http://www.os-templates.com/
Licence: <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>
*/

#portfolio{
	display:block;
	width:100%;
	line-height:1.6em;
	}

#portfolio .portfoliocontainer{
	display:block;
	width:100%;
	margin-bottom:20px;
	padding:0;
	border-bottom:1px solid #DFDFDF;
	}

#portfolio .fl_left{
	width:220px;
	line-height:1.6em;
	}

#portfolio .fl_right{
	width:700px;
	}

#portfolio ul, #portfolio h2, #portfolio p, #portfolio img{
	margin:0;
	padding:0;
	list-style:none;
	}

#portfolio .fl_left p{
	margin:12px 0 0 0;
	}

#portfolio .fl_right li{
	float:left;
	margin:0 20px 20px 0;
	}

#portfolio .fl_right li.last{
	margin-right:0;
	}

#portfolio .fl_right li img{
	border:5px solid #DFDFDF;
	}

#portfolio .fl_right p.name{
	font-weight:bold;
	}

#portfolio .fl_right p.readmore{
	text-transform:uppercase;
	}
	/*
Template Name: PhotoFolio
File: Navigation CSS
Author: OS Templates
Author URI: http://www.os-templates.com/
Licence: <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>
*/

#topbar ul{
	display:block;
	float:left;
	font-size:12px;
	font-family:Georgia, "Times New Roman", Times, serif;
	text-transform:uppercase;
	}

#topbar ul, #topbar ul li{
	margin:0;
	padding:0;
	list-style:none;
	}

#topbar ul#topnav{
	margin:12px 0 0 15px;
	}

#topbar ul li{
	float:left;
	margin-right:30px;
	}

#topbar ul li li{
	margin-left:0;
	}

#topbar ul li a:link, #topbar ul li a:visited, #topbar ul li a:hover{
	display:block;
	margin:0;
	padding:0;
	color:#FFFFFF;
	background-color:transparent;
	}

#topbar ul ul li a:link, #topbar ul ul li a:visited{
	border:none;
	}

#topbar ul li a:hover, #topbar ul li.active a{
	color:#676767;
	background-color:transparent;
	}
	
#topbar ul li li a:link, #topbar ul li li a:visited{
	width:150px;
	float:none;
	margin:0;
	padding:7px 10px;
	font-size:12px;
	font-weight:normal;
	color:#FFFFFF;
	background-color:#2B2B2B;
	}
	
#topbar ul li li a:hover{
	color:#676767;
	background-color:#2B2B2B;
	}

#topbar ul ul{
	z-index:9999;
	position:absolute;
	left:-999em;
	height:auto;
	width:170px;
	}

#topbar ul ul a{width:140px;}

#topbar ul li:hover ul{left:auto;}

#topbar ul li:hover{position:static;}

#topbar ul li.last{margin-right:0;}

/* ----------------------------------------------Column Navigation-------------------------------------*/

#column .subnav{display:block; width:250px; padding:25px; background-color:#F9F9F9; margin-bottom:30px;}

#column .subnav h2{
	margin:0 0 20px 0;
	padding:0 0 14px 0;
	font-size:20px;
	font-weight:normal;
	font-family:Georgia, "Times New Roman", Times, serif;
	color:#666666;
	background-color:#F9F9F9;
	line-height:normal;
	border-bottom:1px dotted #666666;
	}

#column .subnav ul{
	margin:0;
	padding:0;
	list-style:none;
	}

#column .subnav li{
	margin:0 0 3px 0;
	padding:0;
	}

#column .subnav ul ul, #column .subnav ul ul ul, #column .subnav ul ul ul ul, #column .subnav ul ul ul ul ul{border-top:none; padding-top:0;}

#column .subnav a{
	display:block;
	margin:0;
	padding:5px 10px 5px 20px;
	color:#666666;
	background:url("../images/green_file.gif") no-repeat 10px center #F9F9F9;
	text-decoration:none;
	border-bottom:1px dotted #666666;
	}

#column .subnav a:hover{color:#0BBDB2; background-color:#F9F9F9;}

#column .subnav ul ul a, #column .subnav ul ul ul a, #column .subnav ul ul ul ul a, #column .subnav ul ul ul ul ul a{background:url("../images/black_file.gif") no-repeat #F9F9F9;}
#column .subnav ul ul a{padding-left:40px; background-position:30px center;}
#column .subnav ul ul ul a{padding-left:50px; background-position:40px center;}
#column .subnav ul ul ul ul a{padding-left:60px; background-position:50px center;}
#column .subnav ul ul ul ul ul a{padding-left:70px; background-position:60px center;}

/* ----------------------------------------------Pagination-------------------------------------*/

.pagination{display:block; width:100%; text-align:center; clear:both;}
.pagination ul{margin:0; padding:0; list-style:none;}
.pagination li{display:inline;}
.pagination .next{margin:0;}
.pagination a{display:inline-block; padding:2px 5px 3px 5px; margin:0 2px 0 0; border:1px solid #DFDFDF;}
.pagination .current, .pagination .splitter{padding:6px; margin:0 2px 0 0;}
.wrapper .pagination a:hover, .pagination .current, .pagination .splitter{color:#9B9B9B; background-color:#F9F9F9;}

.pagination ul li.selected a {color:#666666!important; background-color:#F9F9F9;border:0;}

/*
Template Name: PhotoFolio
File: Layout CSS
Author: OS Templates
Author URI: http://www.os-templates.com/
Licence: <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>
*/

body{
	margin:0;
	padding:0;
	font-size:13px;
	font-family:Georgia, "Times New Roman", Times, serif;
	color:#666666;
	background-color:#161616;
	}

img{margin:0; padding:0; border:none;}
.justify{text-align:justify;}
.bold{font-weight:bold;}
.center{text-align:center;}
.right{text-align:right;}
.nostart{list-style-type:none; margin:0; padding:0;}

.clear:after{content:"."; display:block; height:0; clear:both; visibility:hidden; line-height:0;}
.clear{display:inline-block;}
html[xmlns] .clear{display:block;}
* html .clear{height:1%;}

a{outline:none; text-decoration:none;}

.fl_left{float:left;}
.fl_right{float:right;}

.imgl, .imgr{border:1px solid #DFDFDF; padding:4px;}
.imgl{float:left; margin:0 15px 15px 0; clear:left;}
.imgr{float:right; margin:0 0 15px 15px; clear:right;}

/* ----------------------------------------------Wrapper-------------------------------------*/

div.wrapper{
	display:block;
	width:100%;
	margin:0;
	text-align:left;
	}

div.wrapper h1, div.wrapper h2, div.wrapper h3, div.wrapper h4, div.wrapper h5, div.wrapper h6{
	margin:0 0 15px 0;
	padding:0;
	font-size:20px;
	font-weight:normal;
	line-height:normal;
	}

.col1{color:#FFFFFF; background-color:#161616; padding-bottom:30px;}
.col2{color:#9B9B9B; background-color:#F9F9F9;}

/* ----------------------------------------------Generalise-------------------------------------*/

#header, #topbar, #container, #footer, #copyright{
	position:relative;
	margin:0 auto 0;
	display:block;
	width:960px;
	}

/* ----------------------------------------------Header-------------------------------------*/

#header{
	padding:30px 0 0 0;
	}

#header h1, #header p, #header ul{
	margin:0;
	padding:0;
	list-style:none;
	line-height:normal;
	}

#header h1 a{
	font-size:46px;
	color:#CCCCCC;
	background-color:#161616;
	}

/* ----------------------------------------------TopBar-------------------------------------*/

#topbar{
	height:40px;
	background:url("../images/bar_gradient.png") top left repeat-x;
	z-index:1000;
	}

/* ----------------------------------------------Content-------------------------------------*/

#container{
	padding:30px 0;
	}

#container a{
	color:#0BBDB3;
	background-color:#F9F9F9;
}

#container th a{
	color:#FFFFFF;
	background:none;
}

#content{
	display:block;
	float:left;
	width:630px;
	}

/* ------Comments-----*/

#comments{margin-bottom:40px;}

#comments .commentlist {margin:0; padding:0;}

#comments .commentlist ul{margin:0; padding:0; list-style:none;}

#comments .commentlist li.comment_odd, #comments .commentlist li.comment_even{margin:0 0 10px 0; padding:15px; list-style:none;}

#comments .commentlist li.comment_odd{color:#666666; background-color:#F7F7F7;}
#comments .commentlist li.comment_odd a{color:#0BBDB2; background-color:#F7F7F7;}

#comments .commentlist li.comment_even{color:#666666; background-color:#E8E8E8;}
#comments .commentlist li.comment_even a{color:#0BBDB2; background-color:#E8E8E8;}

#comments .commentlist .author .name{font-weight:bold;}
#comments .commentlist .submitdate{font-size:smaller;}

#comments .commentlist p{margin:10px 5px 10px 0; padding:0; font-weight: normal;text-transform: none;}

#comments .commentlist li .avatar{float:right; border:1px solid #EEEEEE; margin:0 0 0 10px;}

/* ------Tabs-----*/

#tabcontainer{
	display:block;
	width:100%;
	margin:0;
	padding:0;
	}

#tabcontainer ul#tabnav{
	display:block;
	height:28px;
	margin:0;
	padding:12px 0 0 15px;
	list-style:none;
	text-transform:uppercase;
	font-size:12px;
	font-family:Georgia, "Times New Roman", Times, serif;
	background:url("../images/bar_gradient.png") top left repeat-x;
	}

#tabcontainer ul#tabnav li{
	display:inline;
	margin:0 30px 0 0;
	padding:0;
	}
	
/* --jQuery Tabs Specific - Only modify if you know what you are doing---*/

.ui-tabs{}
.ui-tabs .ui-tabs-nav{}
.ui-tabs .ui-tabs-nav li{}
#container .ui-tabs .ui-tabs-nav li a{color:#FFFFFF; background-color:transparent;}
.ui-tabs .ui-tabs-nav li.ui-tabs-selected{}
.ui-tabs .ui-tabs-nav li.ui-tabs-selected a, .ui-tabs .ui-tabs-nav li.ui-state-disabled a, .ui-tabs .ui-tabs-nav li.ui-state-processing a{}
.ui-tabs .ui-tabs-nav li a, .ui-tabs.ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-selected a{}
#container .ui-tabs li.ui-tabs-selected a{color:#676767; background-color:transparent;}
.ui-tabs .ui-tabs-panel{}
#container .ui-tabs .ui-tabs-hide{display:none;}

/* ----------------------------------------------Column-------------------------------------*/

#column{
	display:block;
	float:right;
	width:300px;
	}

#column .holder, #column #featured{
	display:block;
	width:300px;
	margin-bottom:20px;
	}

#column .holder h2.title{
	display:block;
	width:100%;
	height:65px;
	margin:0;
	padding:15px 0 0 0;
	font-size:20px;
	line-height:normal;
	border-bottom:1px dotted #999999;
	}

#column .holder h2.title img{
	float:left;
	margin:-15px 8px 0 0;
	padding:5px;
	border:1px solid #999999;
	}

#column div.imgholder{
	display:block;
	width:290px;
	margin:0 0 10px 0;
	padding:4px;
	border:1px solid #CCCCCC;
	}

#column .holder p.readmore{
	display:block;
	width:100%;
	font-weight:bold;
	text-align:right;
	line-height:normal;
	}
	
/* Featured Block */

#column #featured ul, #column #featured h2, #column #featured p{
	margin:0;
	padding:0;
	list-style:none;
	color:#666666;
	background-color:#F9F9F9;
	}

#column #featured a{
	color:#0BBDB2;
	background-color:#F9F9F9;
	}

#column #featured li{
	display:block;
	width:250px;
	margin:0;
	padding:20px 25px;
	color:#666666;
	background-color:#F9F9F9;
	}

#column #featured li p.imgholder{
	display:block;
	width:240px;
	height:90px;
	margin:20px 0 15px 0;
	padding:4px;
	border:1px solid #CCCCCC;
	}

#column #featured li h2{
	margin:0;
	padding:0 0 8px 0;
	font-weight:normal;
	font-family:Georgia, "Times New Roman", Times, serif;
	line-height:normal;
	border-bottom:1px dotted #999999;
	}

#column #featured p.readmore{
	display:block;
	width:100%;
	margin-top:15px;
	font-weight:bold;
	text-align:right;
	line-height:normal;
	}

#column .latestnews{
	display:block;
	width:100%;
	margin:0;
	padding:0;
	list-style:none;
	}

#column .latestnews li{
	display:block;
	width:100%;
	height:99px;
	margin:0 0 11px 0;
	padding:0 0 21px 0;
	border-bottom:1px dotted #C7C5C8;
	overflow:hidden;
	}

#column .latestnews li.last{
	margin-bottom:0;
	}

#column .latestnews p{
	display:inline;
	}

#column .latestnews img{
	float:left;
	margin:0 10px 0 0;
	padding:4px;
	border:1px solid #C7C5C8;
	clear:left;
	}

/* ----------------------------------------------Footer-------------------------------------*/

#footer{
	padding:20px 0;
	}

#footer h2, #footer p, #footer ul, #footer a{
	margin:0;
	padding:0;
	font-weight:normal;
	list-style:none;
	line-height:1.6em;
	font-style:normal;
	}

#footer, #footer a{
	color:#666666;
	background-color:#161616;
	}

#footer .footbox{
	display:block;
	float:left;
	width:225px;
	margin:0 20px 0 0;
	padding:0;
	}

#footer h2{
	margin-bottom:20px;
	font-size:26px;
	font-style:italic;
	}

#footer p{
	margin-bottom:10px;
	}

#footer li{
	margin:0 0 5px 0;
	padding:0 0 5px 0;
	border-bottom:1px solid #333333;
	}

#footer li strong.title{
	font-size:12px;
	font-weight:bold;
	text-transform:uppercase;
	}

#footer .last{
	margin:0;
	}

/* ----------------------------------------------Copyright-------------------------------------*/

#copyright{
	padding:15px 0;
	border-top:1px solid #333333;
	}

#copyright p{
	margin:0;
	padding:0;
	}

#copyright, #copyright a{
	color:#666666;
	background-color:#161616;
	}
	
	
	

div.flash-error, div.flash-notice, div.flash-success
{
	padding:.8em;
	margin-bottom:1em;
	border:2px solid #ddd;
}

div.flash-error
{
	background:#FBE3E4;
	color:#8a1f11;
	border-color:#FBC2C4;
}

div.flash-notice
{
	background:#FFF6BF;
	color:#514721;
	border-color:#FFD324;
}

div.flash-success
{
	background:#E6EFC2;
	color:#264409;
	border-color:#C6D880;
}

div.flash-error a
{
	color:#8a1f11;
}

div.flash-notice a
{
	color:#514721;
}

div.flash-success a
{
	color:#264409;
}

div.form .rememberMe label
{
	display: inline;
}

div.view
{
	padding: 10px;
	margin: 10px 0;
	border: 1px solid #CCCCCC;
}
	
	
</style>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><?php echo CHtml::link(CHtml::encode(Yii::app()->name),Yii::app()->getBaseUrl(true));?></h1>
      <p><?php echo Yii::app()->params['empresa']; 
	  ?> </p>
    </div>
	<div style="text-align:right">
    <?php
	$this->widget('ext.components.language.XLangMenu', array(
		'encodeLabel'=>false,
		'hideActive'=>false,
		'items'=>array(
			'es'=>CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/es.gif').' Spanish',
			'en'=>CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/en.png').' In English'
		),
	));?>
	</div>
	
    <div class="fl_right"><a href="#"><?php echo CHtml::image(Yii::app()->theme->getBaseUrl(true)."/images/demo/468x60.gif");?></a></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="topbar" class="clear">
    <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Usuarios', 'url'=>array('/usuarios/index'),
							'items'=>array(
								array('label'=>'Nuevo', 'url'=>array('/usuarios/create')),
								array('label'=>'Administrar', 'url'=>array('/usuarios/admin')),
								array('label'=>'Listado', 'url'=>array('/usuarios/index')),
							)
			),
				array('label'=>'Ciudad', 'url'=>array('/ciudad/index')),
				array('label'=>'Experiencia', 'url'=>array('/experiencia/index')),
				array('label'=>'Estudios', 'url'=>array('/estudios/index')),
				array('label'=>'Folio', 'url'=>array('/folio/index')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
			'id'=>'topnav',
		)); ?>
	
	<!--
	<ul id="topnav">
      <li><a href="index.html">Home</a></li>
      <li class="active"><a href="style-demo.html">Style Demo</a></li>
      <li><a href="full-width.html">Full Width</a></li>
      <li><a href="#">DropDown</a>
        <ul>
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>
        </ul>
      </li>
      <li><a href="portfolio.html">Portfolio</a></li>
      <li class="last"><a href="gallery.html">Gallery</a></li>
    </ul>
	-->
    <form action="#" method="post" id="search">
      <fieldset>
        <legend>Site Search</legend>
        <input type="text" value="Search Our Website&hellip;" onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
        <input type="image" id="go" src="<?php echo Yii::app()->theme->getBaseUrl(true);?>/images/search.gif" alt="Search" />
      </fieldset>
    </form>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
      	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	
	<div class='info' style='text-align:left;'>
		<?php
		$flashMessages = Yii::app()->user->getFlashes();
		if($flashMessages){
			foreach($flashMessages as $key => $message){
				echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
			}
		}
	?>
	</div>
	<?php echo $content; ?>
    <!-- ####################################################################################################### -->
  </div>
</div>


<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer" class="clear">
    <div class="footbox">
      <h2>About Us</h2>
      <p>Lornunc tincidunt nec nequat risus convallisis elit vestiquat justo et volutpat. Urnanec monterdum turistibus semportis non vivamus justo pellus ac integestiquat eros. Turet cursuspend ero nulla dapienteger quisque nullamcorper lorem in ut pellus.</p>
      <p>Atmaecenas nec non nam nullamcorper magna id id nisl ac in. Sedfauctortis fuscetus estibus gravida id dui curabitur commodo facilisi loborttitorttitor vitae.</p>
    </div>
    <div class="footbox">
      <h2>Our Skillset</h2>
      <ul>
        <li><a href="#">Lorem ipsum dolor sit</a></li>
        <li><a href="#">Amet consectetur</a></li>
        <li><a href="#">Praesent vel sem id</a></li>
        <li><a href="#">Curabitur hendrerit est</a></li>
        <li><a href="#">Aliquam eget erat nec sapien</a></li>
        <li><a href="#">Cras id augue nunc</a></li>
        <li><a href="#">In nec justo non</a></li>
        <li><a href="#">Vivamus mollis enim ut</a></li>
        <li class="last"><a href="#">Sed a nulla urna</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Blog Links</h2>
      <ul>
        <li><a href="#">Lorem ipsum dolor sit</a></li>
        <li><a href="#">Amet consectetur</a></li>
        <li><a href="#">Praesent vel sem id</a></li>
        <li><a href="#">Curabitur hendrerit est</a></li>
        <li><a href="#">Aliquam eget erat nec sapien</a></li>
        <li><a href="#">Cras id augue nunc</a></li>
        <li><a href="#">In nec justo non</a></li>
        <li><a href="#">Vivamus mollis enim ut</a></li>
        <li class="last"><a href="#">Sed a nulla urna</a></li>
      </ul>
    </div>
    <div class="footbox last">
      <h2>Keep in Touch</h2>
      <ul>
        <li><a href="#">Check out our Facebook page</a></li>
        <li><a href="#">Get the latest Tweets</a></li>
        <li><a href="#">Grab our latest Deviants</a></li>
        <li><a href="#">View our LinkedIn profile</a></li>
      </ul>
      <h2>Contact Us</h2>
      <ul>
        <li><strong class="title">Tel:</strong><br />
          xxxxx xxxxxxxxxx</li>
        <li><strong class="title">Email:</strong><br />
          <a href="#">contact@mydomain.com</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2011 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
</body>
</html>
			
<?php
// Efecto para el div de Mensajes Flash
Yii::app()->clientScript->registerScript(
   'myHideEffect',
   '$(".info").animate({opacity: 1.0}, 1000000).slideUp("slow");',
   CClientScript::POS_READY
);
?>