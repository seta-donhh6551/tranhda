<div id="wrap-content" class="wrap-bg-white">
  <div id="path-way"> <a href="<?php echo base_url(); ?>" title="Trang chủ" rel="nofollow">Trang chủ</a><span> &raquo;&raquo; </span><a href="<?php echo base_url().$category['cate_rewrite']."-".$category['cate_id']; ?>.html" title="<?php echo $category['cate_name']; ?>"><?php echo $category['cate_name']; ?></a> &raquo;&raquo; <a href="<?php $link; ?>" class="selected" title="<?php echo $title; ?>"><?php echo $title; ?></a></div>
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
	  		piro_scroll : true 
			// pirobox always positioned at the center of the page
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
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/styles/zoom.css"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/scripts/zoom.js"></script>
        <div id="dp-thumb">
          <div id="imgcenter"> <a id="id_sanpham" rel="single"  class="pirobox" href="<?php echo base_url()."uploads/products/".$result['pro_image']; ?>" title="<?php echo $result['pro_name']; ?>" ><img id="id_show" data-zoomsrc="<?php echo base_url()."uploads/products/".$result['pro_image']; ?>" src="<?php echo base_url()."uploads/products/".$result['pro_image']; ?>" alt="<?php echo $result['pro_name']; ?>" /></a> </div>
        </div>

        <div id="dp-teaser" style="padding-top:10px">
          <h1 class="color2 textrans"><?php echo $result['pro_name']; ?></h1>
          <div id="model" class="color2">Mã sản phẩm : <?php echo $result['pro_code']; ?></div>
          <div class="dpt-status">Giá : <span class="dpt-price" style="font-size:12px !important"><?php echo $result['pro_price']; ?></span></div>
          <div class="dpt-status" style='color:red'> Trạng thái sản phẩm : <a> <?php echo $result['pro_status'] == 1 ? 'Còn hàng' : 'Hết hàng, liên hệ đặt tranh'; ?> </a> </div>
          <?php if($result['pro_status'] == 1){ ?>
                <div class="dpt-status" style='color:red'> Size hiện có : <a> <?php echo $result['pro_size']; ?> cm(chưa tính khung)</a> </div>
          <?php } ?>
          <div class="dpt-status">Loại tranh : <?php echo $category['cate_name']; ?></div>
          <div class="dpt-status">Xem tranh có sẵn : <a href="<?php echo base_url(); ?>tranh-co-san.html">Click here</a></div>
          <div class="clear"><img height="15px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" title="Tranh Gạo" alt="Tranh Gạo"/></div>
          <a class="dpt-addcart" href="javascript:void(0);">Đặt mua</a>
      </div>
      <div class="clear"><img height="10px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" title="Tranh Gạo" alt="Tranh Gạo" /></div>
      <div id="box-pro-other">
        <div id="cat_name" class="color2 padt2">Sản phẩm cùng danh mục</div>
        <div id="dott"></div>
        <div id="bpo-main_views">
          <ul class="ul-default" id="typeProduct_detail">
          <?php if($related != NULL){ foreach($related as $items){ ?>
            <li>
              <div class="bpo-item">
                <div class="bpoi-thumb">
                  <div class="pi-sales"> </div>
                  <a href="<?php echo base_url()."tranh-gao/".$items['pro_rewrite']."-".$items['pro_id']; ?>.html" title="<?php echo $items['pro_name']; ?>"><img alt="<?php echo $items['pro_name']; ?>" title="<?php echo $items['pro_name']; ?>" src="<?php echo base_url()."uploads/products/".$items['pro_image']; ?>" /></a> </div>
                <h2><a href="<?php echo base_url()."tranh-gao/".$items['pro_rewrite']."-".$items['pro_id']; ?>.html"><?php echo $items['pro_name']; ?></a></h2>
                <div class="price">
                  <div>Giá : <?php echo $items['pro_price']; ?></div>
                </div>
              </div>
            </li>
            <?php } } ?>
          </ul>
          <div class="clearfix"></div>
          <a id="prevs" class="prevs" href="#prevs">&nbsp;</a> <a id="nexts" class="nexts" href="#nexts">&nbsp;</a> 
          <script>
            $(document).ready(function() {
                $('#bpo-main_views ul').carouFredSel({
            		auto: false,
                    scroll: 1,
                    items: {
            			width: 165,
                        height: 180
                    },
                    prev: "#prevs",
                    next: "#nexts"
            	});
            });
        </script> 
        </div>
      </div>
      
      <div class="clear"><img height="30px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" title="Tranh Gạo" alt="Tranh Gạo" /></div>
      <div id="box-pro-other">
        <div id="cat_name" class="color2 padt2">Sản phẩm mới</div>
        <div id="dott"></div>
        <div id="bpo-main">
          <ul class="ul-default" id="typeProduct_detail">
            <?php if($pronew != NULL){ foreach($pronew as $items){ ?>
            <li>
              <div class="bpo-item">
                <div class="bpoi-thumb">
                  <div class="pi-sales"></div>
                  <a href="<?php echo base_url()."tranh-gao/".$items['pro_rewrite']."-".$items['pro_id']; ?>.html" title="<?php echo $items['pro_name']; ?>"><img alt="<?php echo $items['pro_name']; ?>" title="<?php echo $items['pro_name']; ?>" src="<?php echo base_url()."uploads/products/".$items['pro_image']; ?>" /></a> </div>
                <h2><a href="<?php echo base_url()."tranh-gao/".$items['pro_rewrite']."-".$items['pro_id']; ?>.html"><?php echo $items['pro_name']; ?></a></h2>
                <div class="price">
                  <div>Giá : <?php echo $items['pro_price']; ?></div>
                </div>
              </div>
            </li>
            <?php } } ?>
          </ul>
          <div class="clearfix"></div>
          <a id="prev" class="prev" href="#prev">&nbsp;</a> <a id="next" class="next" href="#next">&nbsp;</a> 
          <script>
            $(document).ready(function() {
                $('#bpo-main ul').carouFredSel({
            		auto: false,
                    scroll: 1,
                    items: {
            			width: 165,
                        height: 176
                    },
                    prev: "#prev",
                    next: "#next"
            	});
            });
          </script> 
        </div>
      </div>
    </div>
  </div>
</div>