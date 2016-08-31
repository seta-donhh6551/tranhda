<div id="wrap-content" class="wrap-bg-white">
  <div id="path-way"> <a href="<?php echo base_url(); ?>" title="Trang chủ" rel="nofollow">Trang chủ</a><span> &raquo;&raquo; </span><a href="<?php echo base_url();?>ve-tranh-gao-viet.html" title="Về tranh gạo việt">Về tranh gạo việt</a></div>
  <!--end: #path-way-->
  <div id="bg_type">
    <div class="padlr20">
      <link href="<?php echo base_url(); ?>public/styles/pirobox.css" rel="stylesheet" type="text/css" />
      <script type="text/javascript" src="<?php echo base_url(); ?>public/scripts/jquery-ui-1.8.2.custom.min.js"></script> 
      <script type="text/javascript" src="<?php echo base_url(); ?>public/scripts/pirobox_extended.js"></script> 
      <script type="text/javascript">
	  $(document).ready(function() {
	  	$('#dpt-img').piroBox_ext({
	  	   piro_speed : 700,
	  		bg_alpha : 0.7,
	  		piro_scroll : true // pirobox always positioned at the center of the page
	  	});
	  });
	  </script>
      <link rel="stylesheet" href="<?php echo base_url(); ?>public/styles/colorbox.css" />
      <script src="<?php echo base_url(); ?>public/scripts/jquery.colorbox.js"></script> 
      <script>
	  $(document).ready(function(){
		$(".inline").colorbox({inline:true, innerWidth:550, innerHeight:480});
	  });
	  </script>
      <div id="detail-product">
        <div class="clear"><img height="20px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" title="Tranh Gạo" alt="Tranh Gạo" /></div>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/styles/zoom.css"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/scripts/zoom.js"></script>
        <div id="dp-thumb">
          <div id="imgcenter"> <a id="id_sanpham" rel="single"  class="pirobox" href="<?php echo base_url()."uploads/products/".$result['pro_image']; ?>" title="<?php echo $result['pro_name']; ?>" ><img id="id_show" data-zoomsrc="<?php echo base_url()."uploads/products/".$result['pro_image']; ?>" src="<?php echo base_url()."uploads/products/".$result['pro_image']; ?>" alt="<?php echo $result['pro_name']; ?>" /></a> </div>
        </div>
        <!--end: #dp-thumb-->
        
        <div id="dp-teaser">
          <h1 class="color2 textrans"><?php echo $result['pro_name']; ?></h1>
          <div id="model" class="color2">Mã sản phẩm : <?php echo $result['pro_code']; ?></div>
          <div class="dpt-status">Giá : <span class="dpt-price" style="font-size:12px !important"><?php echo $result['pro_price']; ?></span></div>
          <!--end: .dpt-status-->
          <div class="dpt-status"> Trạng thái sản phẩm: <a> Còn hàng </a> </div>
          <!--end: .dpt-status-->
          <div class="clear"><img height="2px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" /></div>
          <div class="dpt-status">Loại tranh : <?php echo $category['cate_name']; ?></div>
          <!--end: .dpt-status-->
          <div class="clear"><img height="10px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" /></div>
        </div>
        <!--end: #dp-teaser-->
      <!--end: #box-pro-other--> 
    </div>
    <!--end: #cat-content-->
    <div class="clear"><img height="20px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" title="Tranh Gạo" alt="Tranh Gạo" /></div>
  </div>
</div>