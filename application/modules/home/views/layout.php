<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $dataPage['title']; ?></title>
<link rel="author" href="https://plus.google.com/100958781777178256065" />
<link rel="canonical" href="<?php echo $link; ?>" />
<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" />
<meta name="keywords" content="<?php echo $dataPage['keywords']; ?>" />
<meta name="description" content="<?php echo $dataPage['description']; ?>" />
<meta property="og:type" content="blog" />
<meta property="og:title" content="<?php echo $dataPage['title']; ?>" />
<meta property="og:description" content="<?php echo $dataPage['description']; ?>" />
<meta property="og:url" content="<?php echo $link; ?>" />
<meta property="og:site_name" content="<?php echo $dataPage['title']; ?>" />
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
</body>
</html>