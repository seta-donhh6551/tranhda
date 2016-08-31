<style type="text/css">
.product-item .bg_type_whatch .pi-thumb{height:260px !important}
</style>
<div class="clear"></div>
<div id="wrap-content" class="wrap-bg-white">
  <div id="path-way"><a href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a><span> &raquo; </span>
    <h1><a class="selected" href="<?php echo base_url(); ?>tranh-co-san.html" title="Tranh có sẵn">Tranh có sẵn</a></h1>
  </div>
  <!--end: #path-way-->
  <div id="bg_type_line">
    <div id="cat-sidebar">
      <ul class="ul-list-cat">
      </ul>
      <!--end: .ul-list-cat-->
      <div class="clear"><img height="20px" src="<?php echo base_url(); ?>public/images/spacer.gif" title="Tranh Gạo" alt="Tranh Gạo" class="spacer" /></div>
      <h2 class="h2left">DANH MỤC</h2>
      <ul class="ul-list-cat">
        <?php if(isset($listcate) && $listcate != NULL){ ?>
        <?php foreach($listcate as $list){ ?>
        <li class="field_sub"> <a href="<?php echo base_url().$list['cate_rewrite']; ?>.html" title="<?php echo $list['cate_name']; ?>"><?php echo $list['cate_name']; ?></a></li>
        <?php } } ?>
      </ul>
      <div class="clear"></div>
      <div class="box-ads-sidebar sidebar-ha">
      	  <h2 class="h2left">Tranh Gạo</h2>
          <ul class="ul-list-cat">
          <?php if(isset($listcago) && $listcago != NULL){ ?>
          <?php foreach($listcago as $items){ ?>
          <li class="field_sub"><a href="<?php echo base_url().$items['cate_name']."/"."tranh-".$items['rewrite']; ?>.html" title="<?php echo $items['name']; ?>"><?php echo $items['name']; ?></a></li>
          <?php } } ?>
          </ul>
      </div>
      <div class="box-ads-sidebar sidebar-ha">
      	  <h2>TIN TỨC</h2>
          <ul class="ul-list-cat">
          <?php if(isset($listnews) && $listnews != NULL){ ?>
          <?php foreach($listnews as $news){ ?>
          <li class="field_sub"> <a href="<?php echo base_url()."tin-tuc/".$news['news_rewrite']."-".$news['news_id']; ?>.html" title="<?php echo $news['news_title']; ?>"><?php echo $news['news_title']; ?></a></li>
          <?php } } ?>
          </ul>
      </div>
      <?php $this->load->view("layouts/youtube"); ?>
      <?php $this->load->view("layouts/facebook"); ?>
      <!--end: .box-ads-sidebar-->
    </div>
    <!--end: #cat-sidebar-->
    <div id="cat-content">
      <div class="clear"><img height="10px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo" title="Tranh Gạo" /></div>
      <div id="cat_name" class="color2 padt2">
        <h1>Tranh có sẵn</h1>
      </div>
      <div class="clear"><img height="5px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo"  title="Tranh Gạo" /></div>
      <div class="content-title">
        <div id="bg_type_l"></div>
        <div id="bg_type_r"></div>
        <div class="left color2"><img src="<?php echo base_url(); ?>public/images/btn-sosanh.jpg" align="absmiddle" alt="sosanh"/><?php echo $title; ?></div>
        <!--end: .ct-sort-->
        <div class="clear"></div>
      </div>
      <div class="cateintro" style="padding-top:10px">Tranh gạo có sẵn tại cửa hàng của chúng tôi</div>
      <!--end: .content-title-->
      <div class="clear"><img height="15px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo" title="Tranh Gạo" /></div>
      <?php if(isset($results) && $results != NULL){  ?>
      <?php $stt = 1; ?>
      <?php foreach($results as $items){ ?>
      <div class="product-item">
        <div class="bg_type_whatch">
          <div class="pi-thumb">
            <div class="pi-sales">
              <!-- <div class="pis-km2"></div> -->
              <!--end: .pis-item--> </div>
            <!--end: .pi-sales-->
            <a class="img-thumb" href="<?php echo base_url()."tranh-gao/".$items['pro_rewrite']."-".$items['pro_id']; ?>.html"><img src="<?php echo base_url()."uploads/products/thumb/".$items['pro_image']; ?>" alt="<?php echo $items['pro_name']; ?>" title="<?php echo $items['pro_name']; ?>" /></a> </div>
          <!--end: .pi-thumb-->
          <div class="textCenter">
            <div class="get_info_pro">
              <h3><a href="<?php echo base_url()."tranh-gao/".$items['pro_rewrite']."-".$items['pro_id']; ?>.html" title="<?php echo $items['pro_name']; ?>"><?php echo $items['pro_name']; ?></a></h3>
              <div class="clear"></div>
              <div class="">Mã : <?php echo $items['pro_code']; ?></div>
			  <div class="">Size : <?php echo $items['pro_size']; ?></div>
              <div>Giá : <?php echo $items['pro_price']; ?></div>
            </div>
          </div>
          <!--end: .pi-price-->
          <div class="type_btn_sosanh"><a href="<?php echo base_url()."tranh-gao/".$items['pro_rewrite']."-".$items['pro_id']; ?>.html"></a></div>
        </div>
      </div>
      <!--end: .product-item-->
      <?php if($stt % 3 == 0){?>
      <div class="clear"><img height="25px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo" title="Tranh Gạo"/></div>
      <?php }else{ ?>
      <div class="product-item-spacer"><img src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="<?php echo $items['pro_name']; ?>" title="<?php echo $items['pro_name']; ?>" /></div>
      <?php } ?>
      <?php $stt++; } } ?>
      <!--end: .product-item-spacer-->
      <div class="clear"><img height="25px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo" title="Tranh Gạo"/></div>
      <div id="page-break" style="padding-left:40px">
      	<?php //echo $this->pagination->create_links(); ?>
        <div class="clear"><img src="<?php echo base_url(); ?>public/images/spacer.gif" border="0" height="1" width="1" alt="Tranh Gạo" title="Tranh Gạo"/></div>
      </div>
      <div id="news" style="padding:40px 0px 0px 40px">
      	  <ul class="ul-list-cat">
          <?php if(isset($listnews) && $listnews != NULL){ ?>
          <?php foreach($listnews as $news){ ?>
          <li class="field_sub" style="text-align:right"> <a href="<?php echo base_url()."tin-tuc/".$news['news_rewrite']."-".$news['news_id']; ?>.html" title="<?php echo $news['news_title']; ?>"><?php echo $news['news_title']; ?></a></li>
          <?php } } ?>
          </ul>
      </div>
      <!--end: #page-break-->
      <div class="clear"><img height="20px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo" title="Tranh Gạo" /></div>
      </div>
    <!--end: #cat-content-->
  </div>
</div>
<!--end: #wrap-content-->