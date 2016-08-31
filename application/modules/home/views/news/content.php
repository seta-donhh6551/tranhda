<div class="clear"><img height="3px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo" title="Tranh Gạo" /></div>
<div id="wrap-content" class="wrap-bg-white">
  <div id="path-way"><a href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a><span> &raquo; </span>
    <a class="selected" href="<?php echo base_url(); ?>" title="Tin tức">Tin tức</a>
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
      <?php //$this->load->view("layouts/news"); ?>
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
		foreach($listnews as $list){
			echo "<div class='list_news'>";
			if($list['news_images'] != NULL){
				echo "<img src='".base_url()."uploads/news/$list[news_images]' class='news_img' width='120' align='left' style='margin:10px 10px 10px 0px' />";
			}
			echo "<h3 class='news_h3'><a href='".base_url()."tin-tuc/$list[news_rewrite]-$list[news_id].html' title='".$list['news_title']."' style='font-size:14px;color:#ababab'>".$list['news_title']."</a></h3>";
			//echo "<div class='news_date'><i>".$list['news_author']." - ".$list['news_date']."</i></div>";
			echo "<div class='news_info'>".$list['news_info']."</i></div>";
			echo "</div>";
			echo "<div style='clear:left;padding:10px 0px'></div>";
		}
		?>
      </div>
      <div id="page-break" style="padding:15px;float:right">
      	<?php echo $this->pagination->create_links(); ?>
        <div style="clear:left"></div>
      </div>
      <!--end: .product-item-spacer-->
      </div>
    <div class="clear"><img src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo" title="Tranh Gạo" /></div>
  </div>
</div>
<!--end: #wrap-content-->