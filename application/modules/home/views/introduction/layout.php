<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="600" />
<title><?php echo $title; ?></title>
<link rel="author" href="https://plus.google.com/100958781777178256065" />
<link rel="canonical" href="<?php echo base_url(); ?>" />
<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" />
<meta name="keywords" content="Giới thiệu về tranh gạo việt" />
<meta name="description" content="Giới thiệu về tranh gạo việt" />
<meta property="og:type" content="blog" />
<meta property="og:title" content="<?php echo $config['config_title']; ?>" />
<meta property="og:description" content="<?php echo $config['config_des']; ?>" />
<meta property="og:url" content="<?php echo base_url(); ?>" />
<meta property="og:site_name" content="<?php echo $config['config_title']; ?>" />
<meta property="fb:admins" content="100003239486888"/>
<meta name="twitter:card" content="summary" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/styles/what.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/styles/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/styles/jRating.jquery.css" />
<link href="<?php echo base_url();?>public/styles/style_cart.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>public/styles/jquery.autocomplete.css" rel="stylesheet" type="text/css" />
<?php $this->load->view("scripts");?>
</head>

<body>
<div id="homepage_h1">
  <h1>Tranh gạo Hà Nội - Cung cấp và bán tranh gạo tại Hà Nội</h1>
</div>
<div class="body">
  <div id="wrapper">
    <?php $this->load->view("header");?>
    <?php $this->load->view("introduction/content"); ?>
    <?php $this->load->view("footer"); ?>
  </div>
  <!--end: #wrapper--> 
</div>
</body>
</html>