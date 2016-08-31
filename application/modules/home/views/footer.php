<div id="footer">
  <ul class="ul-default" id="mnu_foot">
    <li><a target="_self" title="Về chúng tôi">Về chúng tôi</a>
      <ul style="margin-top:10px">
        <li style="margin-top:7px"><a href="<?php echo base_url(); ?>ve-tranh-gao-viet.html">Về tranh gạo việt</a></li>
		<li style="margin-top:7px"><a href="http://sonhoavanmiennam.com" title="son hoa van" target="_blank">Son hoa van</a></li>
      </ul>
    </li>
    <li style="padding-left:10px"><a target="_self" title="Sản phẩm &amp; Dịch vụ">Sản phẩm &amp; Dịch vụ</a>
      <ul style="margin-top:10px">
        <?php if(isset($listcate) && $listcate != NULL){ ?>
        <?php foreach($listcate as $list){ ?>
        <li> <a href="<?php echo base_url().$list['cate_rewrite']; ?>.html" title="<?php echo $list['cate_name']; ?>"><?php echo $list['cate_name']; ?></a></li>
        <?php } } ?>
      </ul>
    </li>
    <li style="padding-left:30px"><a target="_self" title="Hướng dẫn">Hướng dẫn</a>
      <ul style="margin-top:10px">
        <?php if(isset($listintro) && $listintro != NULL){ ?>
        <?php foreach($listintro as $intro){ ?>
        <li> <a href="<?php echo base_url()."huong-dan/".$intro['in_rewrite']; ?>.html" title="<?php echo $intro['in_name']; ?>"><?php echo $intro['in_name']; ?></a></li>
        <?php } } ?>
      </ul>
    </li>
    <li><a href="#" title="liên hệ">Liên hệ</a>
      <ul style="margin-top:10px">
        <li>Copyright @ 2013 by Tranh gạo việt</li>
        <li>Số 15 - Ngách 40 ngõ 79 Dương Quảng Hàm - Cầu Giấy - Hà Nội</li>
        <li>Hotline: 0967.336.663</li>
        <li>Email: tranhgaohanoi@gmail.com</li>
      </ul>
    </li>
  </ul>
  <div class="clear"><img src="<?php echo base_url();?>public/images/spacer.gif" class="spacer" title="Tranh Gạo" alt="Tranh Gạo" /></div>
  <div class="left">
  <a class="bs-item" title="Chia sẻ trên facebook" target="_blank" href="javascript:void(0)"><img src="<?php echo base_url();?>public/images/f.png" alt="facebook" style="margin-top: 3px;" /></a> 
  <a class="bs-item" title="Chia sẻ trên twitter" href="javascript:void(0)" target="_blank"><img src="<?php echo base_url();?>public/images/t.png" alt="twitter" style="margin-top: 5px;"  /></a> 
  <a class="bs-item" title="Google" href="javascript:void(0)" target="_blank"><img src="<?php echo base_url();?>public/images/google.png" alt="Google" style="margin-top: 5px;"  /></a> 
  <a class="bs-item" title="Youtube" href="javascript:void(0)" target="_blank"><img src="<?php echo base_url();?>public/images/youtube.png" alt="youtube" style="margin-top: 5px;"  /></a> 
  <a class="bs-item" title="Email" href="mailto:haanhdon@gmail.com" target="_blank"><img src="<?php echo base_url();?>public/images/mail.png" alt="twitter" style="margin-top: 5px;"  /></a>
  
  <div class="link_footter"></div>
    <div id="newletter">
      <div id="form-newletter" class="css3">
        <form action="" method="post" name="reg_newsletter" id="reg_newsletter">
          <fieldset>
            <input type="text" id="txtNewletter" name="txtNewletter" value="Đăng ký Email để nhận bản tin" />
            <input type="hidden" name="action" id="action" value="reg_newsletter" />
          </fieldset>
        </form>
      </div>
      <div class="clear"><img height="12px" src="<?php echo base_url();?>public/images/spacer.gif" class="spacer" title="Tranh gạo" alt="Tranh gạo" /></div>
    </div>
  </div>
</div>

<script type="text/javascript">
    var f_chat_vs = "Version 2.1";
    var f_chat_domain =  "http://tranhgaoviet.com";    
    var f_chat_name = "Hỗ trợ khách hàng";
    var f_chat_star_1 = "Chào bạn!";
    var f_chat_star_2 = 'Bạn muốn hỏi về sản phẩm của chúng tôi? Hãy gửi tin nhắn cho chúng tôi.<br/><em>Gửi vài giây trước</em>';
    var f_chat_star_3 = "<a href='javascript:;' onclick='f_bt_start_chat()' id='f_bt_start_chat'>Bắt đầu Chat</a>";
    var f_chat_star_4 = "Chú ý: Bạn phải đăng nhập <a href='http://facebook.com/' target='_blank' rel='nofollow'>Facebook</a> mới có thể trò chuyện.";
    var f_chat_fanpage = "TranhGaoViet"; /* Đây là địa chỉ Fanpage*/
    var f_chat_background_title = "#F77213";
    var f_chat_color_title = "#fff";
    var f_chat_cr_vs = 21; /* Version ID */
    var f_chat_vitri_manhinh = "right:10px;"; /* Right: 10px; hoặc left: 10px; hoặc căn giữa left:45% */    
</script>
<!-- $Chat iCon Font (có thể bỏ) -->
<link rel="stylesheet" href="http://tranhgaoviet.com/public/styles/font-awesome.min.css" type="text/css"/>
<!-- $Chat Javascript (không được xóa) -->
<script src="http://tranhgaoviet.com/public/scripts/chat.js"></script>
<!-- $Chat HTML (không được xóa) -->
<div id='fb-root'></div>
<a title='Mở hộp Chat' id='chat_f_b_smal' onclick='chat_f_show()' class='chat_f_vt'><i class='fa fa-comments title-f-chat-icon'></i> Chat</a><div id='b-c-facebook' class='chat_f_vt'><div id='chat-f-b' onclick='b_f_chat()' class='chat-f-b'><i class='fa fa-comments title-f-chat-icon'></i><label id="f_chat_name"></label><span id='fb_alert_num'>1</span><div id='t_f_chat'><a href='javascript:;' onclick='chat_f_close()' id='chat_f_close' class='chat-left-5'>x</a></div></div><div id='f-chat-conent' class='f-chat-conent'><script>document.write("<div class='fb-page' data-tabs='messages' data-href='https://www.facebook.com/"+f_chat_fanpage+"' data-width='250' data-height='310' data-small-header='true' data-adapt-container-width='true' data-hide-cover='true' data-show-facepile='false' data-show-posts='true'></div>");</script><div id='fb_chat_start'><div id='f_enter_1' class='msg_b fb_hide'></div><div id='f_enter_2' class='msg_b fb_hide'></div><br/><p id='f_enter_3' class='fb_hide' align='center'><a href='javascript:;' onclick='f_bt_start_chat()' id='f_bt_start_chat'>Bắt đầu Chat</a></p><br/><p id='f_enter_4' class='fb_hide' align='center'></p></div><div id="f_chat_source" class='chat-single'></div></div></div>
<!-- #CHAT -->
