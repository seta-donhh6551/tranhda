<div class="clear"><img height="3px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo" title="Tranh Gạo" /></div>
<div id="wrap-content" class="wrap-bg-white">
  <div id="path-way"><a href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a><span> &raquo; </span>
    <a class="selected" href="<?php echo base_url(); ?>tin-tuc.html" title="Tin tức">Tin tức</a>
  </div>
  <!--end: #path-way-->
  <div id="bg_type_line">
    <div id="cat-sidebar">
      <ul class="ul-list-cat">
      </ul>
      <!--end: .ul-list-cat-->
      <div class="clear"><img height="20px" src="<?php echo base_url(); ?>public/images/spacer.gif" title="Tranh Gạo" alt="Tranh Gạo" class="spacer" /></div>
      <?php $this->load->view("layouts/listcate"); ?>
      <?php $this->load->view("layouts/listcago"); ?>
      <?php $this->load->view("layouts/youtube"); ?>
      <?php $this->load->view("layouts/news"); ?>
      <?php $this->load->view("layouts/facebook"); ?>
      <!--end: .box-ads-sidebar--> 
    </div>
    <!--end: #cat-sidebar-->
    <div id="cat-content">
      <div class="clear"><img height="10px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo" title="Tranh Gạo" /></div>
      <div id="cat_name" class="color2 padt2">
        <h1>Tin tức</h1>
      </div>
      <div class="clear"><img height="5px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo"  title="Tranh Gạo" /></div>
      <div class="content-title">
        <div id="bg_type_l"></div>
        <div id="bg_type_r"></div>
        <div class="left color2"><img src="<?php echo base_url(); ?>public/images/btn-sosanh.jpg" align="absmiddle" alt="sosanh"/><?php echo $title; ?></div>
        <!--end: .ct-sort-->
        <div class="clear"></div>
      </div>
      <div class="cateintro" style="padding-top:10px"><?php //echo $cate['cate_ext']; ?></div>
      <!--end: .content-title-->
      <div id="news">
      	<?php
		 if(isset($result) && $result != NULL){
			echo "<div class='news_detail'>";
			echo "<h3 class='news_detail_h3'>".$result['news_title']."</h3>";
			echo "<div class='news_detail_date' style='padding:5px 0px'><i>Xuất bản ".$result['news_date']." - ".$result['news_author']."</i></div>";
			echo "<div class='info' style='font-size:12px;margin-bottom:10px'>";
			echo $result['news_info'];
			echo "</div>";
			echo "<div style='font-size:13px'>";
			echo $result['news_full'];
			echo "</div>";
			echo "<div class='cls'></div>";
			echo "</div>";
		}else{
			echo "Nội dung đang cập nhật";
		} 
	?>
      </div>
      <!--end: .product-item-spacer-->
      </div>
    <!--end: #cat-content-->
    
    <div class="clear"><img src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo" title="Tranh Gạo" /></div>
  </div>
</div>
<!--end: #wrap-content-->