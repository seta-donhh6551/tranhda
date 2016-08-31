<div class="clear"><img height="3px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo" title="Tranh Gạo" /></div>
<div id="wrap-content" class="wrap-bg-white">
  <div id="path-way"><a href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a><span> &raquo; </span> <a class="selected" href="<?php echo base_url(); ?>" title="Liên hệ">Liên hệ</a> </div>
  <!--end: #path-way-->
  <div id="bg_type_line">
    <div id="cat-sidebar">
      <ul class="ul-list-cat">
      </ul>
      <!--end: .ul-list-cat-->
      <div class="clear"><img height="20px" src="<?php echo base_url(); ?>public/images/spacer.gif" title="Tranh Gạo" alt="Tranh Gạo" class="spacer" /></div>
      <?php $this->load->view("layouts/listcate"); ?>
      <div class="box-ads-sidebar" style="margin:40px 0px"> <a href="<?php echo base_url(); ?>" target="_self"><img src="<?php echo base_url(); ?>uploads/data/nhan.jpg"  alt="Tranh gạo thư pháp" title="Tranh gạo thư pháp" border="0"></a>
      </div>
      <!--end: .box-ads-sidebar--> 
    </div>
    <!--end: #cat-sidebar-->
    <div id="cat-content">
      <div class="clear"><img height="10px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo" title="Tranh Gạo" /></div>
      <div id="cat_name" class="color2 padt2">
        <h1>Liên hệ với chúng tôi</h1>
      </div>
      <div class="clear"><img height="5px" src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo"  title="Tranh Gạo" /></div>
      <div class="content-title">
        <div id="bg_type_l"></div>
        <div id="bg_type_r"></div>
        <div class="left color2"><img src="<?php echo base_url(); ?>public/images/btn-sosanh.jpg" align="absmiddle" alt="sosanh"/><?php echo $title; ?></div>
        <div class="clear"></div>
      </div>
      <div class="cateintro" style="padding-top:10px">
      </div>
      <!--end: .content-title-->
      <div class="contact" style="height:850px"> 
      	<h3 style="color:#FFF">Tranh Gạo Việt</h3>
        <p>Địa chỉ : Số 15 - Ngách 40 ngõ 79 Dương Quảng Hàm - Cầu Giấy - Hà Nội</p>
        <p>Hotline: 0967.336.663</p>
        <p>Email: tranhgaohanoi@gmail.com</p>
		<div style="height:30px"></div>
		<div id="ban-do" style="height:350px; width:630px">
			<img src="<?php echo base_url(); ?>public/images/ban-do.jpg" />
		</div>
        <script type="text/javascript" src="<?php echo base_url();?>public/scripts/jquery-1.7.1.min.js"></script> 
        <script type="text/javascript">
		$(document).ready(function(){
			$("#ok").click(function(){
				n = $("#name").val();
				e = $("#email").val();
				p = $("#phone").val();
				noi = $("#info").val();
				$.ajax({
					"url" : "<?php echo base_url(); ?>home/contact/ajax",
					"type" : "post",
					"data" : "name="+n+"&email="+e+"&phone="+p+"&noi="+noi,
					beforeSend: function() {
						$("#view").show();
						$("#view").html("Đang load dữ liệu ...");
					},
					success : function(kq){
						if(kq == 1){
							$("#view").show();
							$("#view").html("Vui lòng nhập đầy đủ thông tin");
						}else{
							$("#view").show();
							$("#view").html(kq);
							$("#name").val("");
							$("#email").val("");
							$("#phone").val("");
							$("#info").val("");
						}
					},
				});
			return false;
		});
	});
	</script>
        <div style="padding:10px;"></div>
        <fieldset>
          <legend>Nội dung liên hệ</legend>
          <div id="view" style="display:none;font-size:11px;background:#F8F8F8;padding:3px 10px;color:#F00;width:400px; margin:10px auto 0px auto;"></div>
          <form>
            <div class="form_items">
              <div class="form_items_left">
                <label>Họ tên <span class="red">*</span></label>
              </div>
              <div class="form_items_right">
                <input type="text" id="name" size="25" />
              </div>
            </div>
            <div class="cls"></div>
            <div class="form_items">
              <div class="form_items_left">
                <label>Email<span class="red">*</span></label>
              </div>
              <div class="form_items_right">
                <input type="text" id="email" size="25" />
              </div>
            </div>
            <div class="cls"></div>
            <div class="form_items">
              <div class="form_items_left">
                <label>Điện thoại<span class="red">*</span></label>
              </div>
              <div class="form_items_right">
                <input type="text" id="phone" size="25" />
              </div>
            </div>
            <div class="cls"></div>
            <div class="form_items">
              <div class="form_items_left">
                <label>Nội dung<span class="red">*</span></label>
              </div>
              <div class="form_items_right">
                <textarea cols="23"  id="info" rows="5" name="info"></textarea>
              </div>
            </div>
            <div class="cls"></div>
            <div class="form_items">
              <div class="form_items_left">
                <label>&nbsp;</label>
              </div>
              <div class="form_items_right">
                <input type="submit" name="ok" id="ok" value="Gửi liên hệ" class="subbs" style="margin:0px;color:#000" />
                <input type="reset" value="Nhập lại" class="subbs" style="color:#000"/>
              </div>
            </div>
          </form>
        </fieldset>
      </div>
      
      <!--end: .product-item-spacer--> 
    </div>
    <div class="clear"><img src="<?php echo base_url(); ?>public/images/spacer.gif" class="spacer" alt="Tranh Gạo" title="Tranh Gạo" /></div>
  </div>
</div>
