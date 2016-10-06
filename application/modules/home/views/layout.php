<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="600" />
<title><?php echo $config['config_title']; ?></title>
<link rel="author" href="https://plus.google.com/100958781777178256065" />
<link rel="canonical" href="<?php echo base_url(); ?>" />
<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" />
<meta name="keywords" content="<?php echo $config['config_key']; ?>" />
<meta name="description" content="<?php echo $config['config_des']; ?>" />
<meta property="og:type" content="blog" />
<meta property="og:title" content="<?php echo $config['config_title']; ?>" />
<meta property="og:description" content="<?php echo $config['config_des']; ?>" />
<meta property="og:url" content="<?php echo base_url(); ?>" />
<meta property="og:site_name" content="<?php echo $config['config_title']; ?>" />
<meta property="fb:admins" content="100003239486888"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/styles/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/styles/css.css" />
<?php $this->load->view("scripts");?>
</head>

<body>
<?php $this->load->view("header");?>
<div class="AllWrap">
	<?php $this->load->view("menu");?>
	<?php $this->load->view("content1");?>
	<?php $this->load->view("footer"); ?>
</div>
<style type="text/css">
.erweima {
	position: fixed;
	_position: absolute;
	z-index: 9999;
	width: 276px;
	height: 364px;
	display: none;
	right: 95px;
	top: 64px;
	_top: expression(eval(documentElement.scrollTop+documentElement.clientHeight-this.clientHeight-50));
	background: url(http://www.99zihua.com/statics/im/erweima.png) no-repeat;
}

.smorderpic {
	position: fixed;
	_position: absolute;
	z-index: 9999;
	width: 276px;
	height: 364px;
	display: none;
	right: 95px;
	top: 290px;
	_top: expression(eval(documentElement.scrollTop+documentElement.clientHeight-this.clientHeight-50));
	background: url(http://www.99zihua.com/statics/im/smorder.png) no-repeat;
}

.CfloatBtn {
	position: fixed;
	_position: absolute;
	z-index: 9999;
	_top: expression(eval(documentElement.scrollTop+documentElement.clientHeight-this.clientHeight-50));
	right: 18px;
	top: 150px;
}

.CfloatBtn .kefu,
.CfloatBtn .weixin,
.CfloatBtn .qq,
.CfloatBtn .sms_order,
.CfloatBtn .scroll_Top {
	display: block;
	width: 75px;
	height: 75px;
	margin: 0 0 1px;
	background: url(http://www.99zihua.com/statics/im/kefu_bg.gif) no-repeat;
	cursor: pointer;
}

.CfloatBtn .kefu {
	background-position: 0 0px;
}

.CfloatBtn .kefu:hover {
	background-position: -75px 0px;
}

.CfloatBtn .qq {
	background-position: 0 -75px;
}

.CfloatBtn .qq:hover {
	background-position: -75px -75px;
}

.CfloatBtn .weixin {
	margin: 0;
	background-position: 0 -150px;
}

.CfloatBtn .weixin:hover {
	background-position: -75px -150px;
}

.CfloatBtn .sms_order {
	margin: 0;
	background-position: 0 -225px;
	border-top: 1px solid #ddd;
	border-bottom: 1px solid #ddd;
}

.CfloatBtn .sms_order:hover {
	background-position: -75px -225px;
}

.CfloatBtn .scroll_Top {
	margin: 0;
	background-position: 0 -300px;
}

.CfloatBtn .scroll_Top:hover {
	background-position: -75px -300px;
}
</style>
<div class="erweima" id="erweima"></div>
<div class="smorderpic" id="smorderpic"></div>
<div class="CfloatBtn" id="CfloatBtn">
<a class="kefu" target="_blank" href="http://tb.53kf.com/webCompany.php?arg=9007200" rel="nofllow"></a>
<a class="qq" target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1291357583&amp;site=qq&amp;menu=yes" rel="nofllow"></a> <span class="weixin" id="weixin"></span>
<a class="sms_order" id="sms_order" target="_blank" href="http://www.99zihua.com/lou.html"></a> <span class="scroll_Top" id="scroll_Top"></span>
</div>
<script>
function goTop() {
	var obj = document.getElementById("scroll_Top");

	function getScrollTop() {
		return document.documentElement.scrollTop || document.body.scrollTop;
	}

	function setScrollTop(value) {
			if (document.documentElement.scrollTop) {
				document.documentElement.scrollTop = value;
			} else {
				document.body.scrollTop = value;
			}
		}
		//window.onscroll = function () {getScrollTop() > 0 ? obj.style.display = "" : obj.style.display = "none";}
	obj.onclick = function() {
		var goTop = setInterval(scrollMove, 10);

		function scrollMove() {
			setScrollTop(getScrollTop() / 1.1);
			if (getScrollTop() < 1) clearInterval(goTop);
		}
	}
}
goTop();

function showweixin() {
	var obj1 = document.getElementById("weixin");
	var obj2 = document.getElementById("erweima");
	obj1.onmouseover = function() {
		obj2.style.display = "block";
	}
	obj1.onmouseout = function() {
		obj2.style.display = "none";
	}
}

function showsmorder() {
	var obj1 = document.getElementById("sms_order");
	var obj2 = document.getElementById("smorderpic");
	obj1.onmouseover = function() {
		obj2.style.display = "block";
	}
	obj1.onmouseout = function() {
		obj2.style.display = "none";
	}
}
showweixin();
</script>
</body>
</html>