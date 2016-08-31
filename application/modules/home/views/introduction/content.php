<div class="clear"><img height="3px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo" title="Tranh Gạo" /></div>
<div id="wrap-content" class="wrap-bg-white">
  <div id="path-way"><a href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a><span> &raquo; </span>
    <a href="<?php echo $links;?>" title="<?php echo $title; ?>"><?php echo $title; ?></a>
  </div>
  <!--end: #path-way-->
  <div id="bg_type_line">
    <div id="cat-sidebar">
      <ul class="ul-list-cat">
      </ul>
      <!--end: .ul-list-cat-->
      <div class="clear"><img height="20px" src="<?php echo base_url(); ?>public/images/spacer.gif" title="Tranh Gạo" alt="Tranh Gạo" class="spacer" /></div>
      <h1 class="list-cat-group">Tranh gạo</h1>
      <ul class="ul-list-cat">
        <?php if(isset($listcate) && $listcate != NULL){ ?>
        <?php foreach($listcate as $list){ ?>
        <li class="field_sub"> <a href="<?php echo base_url().$list['cate_rewrite']; ?>.html" title="<?php echo $list['cate_name']; ?>"><?php echo $list['cate_name']; ?></a></li>
        <?php } } ?>
      </ul>
      <div class="clear"><img height="20px" src="<?php echo base_url(); ?>public/images/spacer.gif" title="Tranh Gạo" alt="Tranh Gạo" class="spacer" /></div>
      <div class="box-ads-sidebar"> <a href="<?php echo base_url(); ?>" target="_self"><img src="<?php echo base_url(); ?>uploads/data/nhan.jpg"  alt="Tranh gạo thư pháp" title="Tranh gạo thư pháp" border="0"></a>
        <div class="clear10"></div>
        <a href="<?php echo base_url(); ?>" target="_self"><img src="<?php echo base_url(); ?>uploads/data/cha-me.jpg"  alt="Tranh gạo thư pháp" title="Tranh gạo thư pháp" border="0"></a>
        <div class="clear10"></div>
        <a href="<?php echo base_url(); ?>" target="_self"><img src="<?php echo base_url(); ?>uploads/data/tranh-gao-duc.jpg"  alt="Tranh gạo thư pháp" title="Tranh gạo thư pháp" border="0"></a>
        <div class="clear10"></div>
      </div>
      <!--end: .box-ads-sidebar--> 
    </div>
    <!--end: #cat-sidebar-->
    <div id="cat-content">
      <div class="clear"><img height="10px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo" title="Tranh Gạo" /></div>
      <div id="cat_name" class="color2 padt2">
        <h1><?php echo $title; ?></h1>
      </div>
      <div class="clear"><img height="5px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo"  title="Tranh Gạo" /></div>
      <div class="content-title">
        <div id="bg_type_l"></div>
        <div id="bg_type_r"></div>
        <div class="left color2"><img src="<?php echo base_url(); ?>public/images/btn-sosanh.jpg" align="absmiddle" alt="sosanh"/><?php echo $title; ?></div>
        <!--end: .ct-sort-->
        <div class="clear"></div>
      </div>
      <!--end: .content-title-->
      <div class="clear"><img height="15px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo" title="Tranh Gạo" /></div>
      <div class="intro" style="color:#999;font-size:12px">
      	<?php echo $result['in_value']; ?>
      </div>
      <div id="page-break">
        <div class="clear"><img src="<?php echo base_url(); ?>public/images/spacer.gif" border="0" height="1" width="1" alt="Tranh Gạo" title="Tranh Gạo"/></div>
      </div>
      <!--end: #page-break-->
      <div class="clear"><img height="25px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" title="Tranh Gạo" alt="Tranh Gạo"/></div>
      <div class="clear"><img height="20px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo" title="Tranh Gạo" /></div>
      <script type="text/javascript">
	$(document).ready(function(){
		$('.pi-vote').jRating({
			length       : 5,
			rateMax      : 5,
			decimalLength: 0,
            /*isDisabled: false,*/
            type         : 'small',
			onSuccess    : function(data){					
			}
		});
	});
</script></div>
    <!--end: #cat-content-->
    
    <div class="clear"><img src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo" title="Tranh Gạo" /></div>
  </div>
</div>
<!--end: #wrap-content-->