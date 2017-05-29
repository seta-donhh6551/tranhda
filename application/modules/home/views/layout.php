<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
	<?php $this->load->view($template);?>
	<?php $this->load->view("footer"); ?>
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