    <script type='text/javascript' src='<?php echo base_url();?>public/scripts/coin-slider.min.js'></script>
    <div id="slide_top_">
      <div id="slide_top"> 
        <a href="javascript:void(0)"><img src="<?php echo base_url();?>public/images/slide/dong-que.jpg" alt="Tranh gạo thư pháp" title="Tranh gạo thư pháp" /></a> 
        <a href="<?php echo base_url();?>tranh-gao/tranh-gao-hai-ho-32.html"><img src="<?php echo base_url();?>public/images/slide/tranh-gao-ho.jpg" alt="Tranh gạo hai hổ" title="Tranh gạo hai hổ" /></a>
        <a href="javascript:void(0)"><img src="<?php echo base_url();?>public/images/slide/02.jpg" alt="Tranh gạo phong cảnh" title="Tranh gạo phong cảnh" /></a> 
        <a href="javascript:void(0)"><img src="<?php echo base_url();?>public/images/slide/05.jpg" alt="Tranh gạo nghệ thuật" title="Tranh gạo nghệ thuật" /></a> 
        <a href="javascript:void(0)"><img src="<?php echo base_url();?>public/images/slide/01.jpg" alt="Tranh gạo logo" title="Tranh gạo logo" /></a>  
        <a href="javascript:void(0)"><img src="<?php echo base_url();?>public/images/slide/04.jpg" alt="Tranh gạo chân dung" title="Tranh gạo chân dung" /></a>
        <a href="javascript:void(0)"><img src="<?php echo base_url();?>public/images/slide/003.jpg" alt="Tranh gạo động vật" title="Tranh gạo động vật" /></a> 
      </div>
    </div>
    <script type="text/javascript">
	$(document).ready(function() {
		$('#slide_top').coinslider({ 
		width: 660,
		height: 357,
		spw: 7,
		sph: 5,
		delay: 3000,
		sDelay: 30,
		opacity: 0.6,
		titleSpeed: 500,
		effect: '',
		navigation: true,
		links: true,
		hoverPause: false });
		});
	</script>
    <div class="left">
      <div class="left" style="width:295px; height:175px; overflow:hidden;margin-left:5px;margin-bottom:6px"><a href="#" target="_self"><img src="<?php echo base_url();?>uploads/products/lang-que-viet21.jpg" width="295" height="175" alt="Tranh Gạo Hà Nội" title="Tranh Gạo Hà Nội"/></a></div>
      <div class="clear"></div>
      <div class="left" style="width:295px; height:175px; overflow:hidden;margin-left:5px"><a href="#"><img src="<?php echo base_url();?>uploads/data/tretrau.jpg" width="300" height="175" alt="Tranh Gạo Hà Nội" title="Tranh Gạo Hà Nội"/></a></div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <img title="Tranh gạo" alt="Tranh gạo" src="<?php echo base_url();?>public/images/lineh.jpg"/>
    <div id="box-home-doitac" class="css3 radius5" style="padding-top:10px">
      <ul class="ul-default" style="width:880px">
        <?php if(isset($listcate) && $listcate != NULL){ ?>
		<?php foreach($listcate as $list){ ?>
        <li><a href="<?php echo base_url().$list['cate_rewrite']; ?>.html" title="<?php echo $list['cate_name']; ?>"><img src="<?php echo base_url(); ?>uploads/cate/<?php echo $list['cate_images']; ?>" alt="<?php echo $list['cate_name']; ?>" title="<?php echo $list['cate_name']; ?>" width="120" /></a></li>
        <?php } } ?>
      </ul>
      <div class="clearfix"></div>
      <a id="prevdt" class="prevdt" href="#prevdt">&nbsp;</a> <a id="nextdt" class="nextdt" href="#nextdt">&nbsp;</a> 
      <script type="text/javascript">
		$(document).ready(function() {
			$('#box-home-doitac ul').carouFredSel({
				auto: true,//false
				scroll: 1,
				items: {
					width: 177,
					height: 65
				},
				prev: "#prevdt",
				next: "#nextdt"
			});
		});
	</script> 
    </div>
    <!--end: #box-pro-other-->
    
    <div class="clear"></div>
    <img title="Tranh Gạo Hà Nội" alt="Tranh Gạo Hà Nội" src="<?php echo base_url();?>public/images/lineh.jpg"/>
    <div class="clear"></div>
    <div class="clear"></div>
    <!--end: #box-pro-other-->
    <!--product bestsale-->
    <?php
	if(isset($listall) && $listall != NULL){
		foreach($listall['category'] as $key => $value){
	?>
    <div class="home_spkm color2">
      <div class="home_spkm_text"><h2><a href="<?php echo base_url().$value['cate_rewrite']; ?>.html" title="<?php echo $value['cate_name']; ?>"><?php echo $value['cate_name']; ?></a></h2></div>
      <div class="infopro"><?php echo $value['cate_ext']; ?></div>
      <div class="viewalls"><a href="<?php echo base_url().$value['cate_rewrite']; ?>.html" class="viewall">Xem tất cả</a></div>
    </div>
    <div class="clear">
    <img height="3px" src="<?php echo base_url();?>public/images/spacer.gif" class="spacer" alt="Tranh gao" title="Tranh gao" />
    </div>
    <?php foreach($listall['products'][$key] as $product){?>
    <div class="product-item">
      <div class="bg_type_whatch">
        <div class="pi-thumb">
          <div class="pi-sales"> 
            <!--<div class="pi-check"></div>-->
            <!-- <div class="pis-km2"></div> -->
            <!--end: .pis-item--> </div>
          <!--end: .pi-sales--> 
          <a class="img-thumb" href="<?php echo base_url()."tranh-gao/".$product['pro_rewrite']."-".$product['pro_id']; ?>.html"><img src="<?php echo base_url()."uploads/products/thumb/".$product['pro_image'];?>" alt="<?php echo $product['pro_name']; ?>" title="<?php echo $product['pro_name']; ?>" /></a> </div>
        <!--end: .pi-thumb-->
        <div class="textCenter">
          <div class="get_info_pro">
            <h3><a title=""><?php echo $product['pro_name']; ?></a></h3>
            <div class="clear"></div>
            <div class="">Mã : <?php echo $product['pro_code']; ?></div>
            <div>Giá : <?php echo $product['pro_price']; ?></div>
          </div>
        </div>
        <!--end: .pi-price-->
        <div class="type_btn_sosanh"><a href="<?php echo base_url()."tranh-gao/".$product['pro_rewrite']."-".$product['pro_id']; ?>.html"></a></div>
      </div>
    </div>
    <!--end: .product-item-->
    <div class="product-item-spacer"><img src="<?php echo base_url();?>public/images/spacer.gif" class="spacer" alt="<?php echo $value['cate_name']; ?>" title="<?php echo $value['cate_name']; ?>" /></div>
    <?php } ?>
    <div class="clear"><img height="20px" src="<?php echo base_url();?>public/images/spacer.gif" class="spacer" alt="<?php echo $value['cate_name']; ?>" title="<?php echo $value['cate_name']; ?>" /></div>
   <?php } ?>
   <?php } ?>
    <!--end product bestsale-->   