<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<meta name="keywords" content="Shop Hoa, Hoa Tuoi, Hoa Dep, Hoa Cuoi, Hoa Tinh Yeu, Hoa Su Kien, Hoa Van Phong, Hoa Chuc Mung" />
<meta name="description" content="Shop Hoa, Hoa Tuoi, Hoa Dep, Hoa Cuoi, Hoa Tinh Yeu, Hoa Su Kien, Hoa Van Phong, Hoa Chuc Mung" />
<link href="<?php echo base_url();?>public/styles/newstyle.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>public/styles/menu.css" type="text/css" media="screen" />
<link href="<?php echo base_url();?>public/styles/nivo-slider.css" rel="stylesheet" type="text/css" />
<?php $this->load->view("cart/scripts");?>
</head>

<body>
    <?php $this->load->view("cart/header");?>
    <?php $this->load->view("cart/content"); ?>
    <?php $this->load->view("cart/footer"); ?>
</body>
</html>