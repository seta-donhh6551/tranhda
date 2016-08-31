var selectedImageID = 'id_1';
$('#dpt-img-other a span').hide();
$('#id_1 span').show();
$('#id_1').css('border', '2px solid #710E0E');
function PreviewPhoto(url, url2,id,tottal)
{
	var imgPhotoDetail = document.getElementById('id_show');
	var simgPhoto = document.getElementById(id);
	var sselectedImageID = document.getElementById(selectedImageID);
	imgPhotoDetail.src = url;
	document.getElementById('id_sanpham').href = url2;
	$('img#id_show').attr('data-zoomsrc',url2);
	for(i=1;i<=tottal;++i){
		document.getElementById('id_'+i).style.border = '2px solid #2C2C2C';
	}
	simgPhoto.style.border = '2px solid #710E0E';
	$('#dpt-img-other a span').hide();
	$('#'+id+' span').show();
    $(document).ready(MojoZoom.init);
   $('#dpt-img').piroBox_ext({
	   piro_speed : 700,
		bg_alpha : 0.7,
		piro_scroll : true // pirobox always positioned at the center of the page
	});
   
}
function NumberOnly(ele) {
	if (!/^\d*$/.test(ele.value)) {
		ele.value = ele.value.replace(/[^\d]/g,"")
	}
}

function dsafdf()
{
	document.tinhlai.submit();
}
function backtop(idtop) {
	$('html,body').animate({scrollTop: $('#'+idtop).offset().top},'slow');
}

function f_reg_newsletter(){
	$('#waiting').show(200);	
	var regData = $('form#reg_newsletter').serialize();
	$.ajax({
			type : 'POST',
			url : '/vn/ajax.php',
			dataType : 'json',
			data:regData,
			success : function(data){
				alert(data.message);
				$('#waiting').hide(200);
				if(data.error==false){
					location.reload();
				};
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) { alert('<?=translate("Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.");?>');$('#waiting').hide(200);}
		});
	return false;	
}
function jTrim(sString) {
    while (sString.substring(0, 1) == ' ') {
        sString = sString.substring(1, sString.length);
    }
    while (sString.substring(sString.length - 1, sString.length) == ' ') {
        sString = sString.substring(0, sString.length - 1);
    }
    return sString;
}
function jCheckblank(str) {
    if (jTrim(str) == '') return true;
    else return false;
}
function jIsemail(email) {
    var re = /^(\w|[^_]\.[^_]|[\-])+(([^_])(\@){1}([^_]))(([a-z]|[\d]|[_]|[\-])+|([^_]\.[^_])*)+\.[a-z]{2,3}$/i;
    return re.test(email);
}
function isInteger(value) {
    for (i = 0; i < value.length; i++) {
        if ((value.charAt(i) < '0') || (value.charAt(i) > '9')) return false
    }
    return true;
}	
function decode(str) {
     return unescape(str.replace(/\+/g, " "));
}
function clearDefaultInput(obj){
	if(obj.value == obj.defaultValue){
		obj.value = '';
	}
}
function setDefaultInput(obj){
	if(obj.value==''){
		obj.value= obj.defaultValue;
	}
}
function changeProductColor( $pro_id, $col_id){
    var regData = 'action=changeProductColor&pro_id='+$pro_id+'&col_id='+$col_id;
    $.ajax({
		type : 'POST',
		url : '/vn/ajax.php',
		dataType : 'html',
		data:regData,
		success : function(html){
            $('div#dp-thumb').html(html);
		   $('#dpt-img').piroBox_ext({
			   piro_speed : 700,
				bg_alpha : 0.7,
				piro_scroll : true // pirobox always positioned at the center of the page
			});
		}
	});
}
function changesize( $pro_category, $pro_id, $siz_id){
    var regData = 'action=changesize&pro_id='+$pro_id+'&siz_id='+$siz_id+'&pro_category='+$pro_category;
    $.ajax({
		type : 'POST',
		url : '/vn/ajax.php',
		dataType : 'json',
		data:regData,
		success : function(html){
            $('div#html-teaser').html(html.psi_tease);
			$('div#dpdm-mota').html(html.psi_description);
			$('div#dpdm-thongso').html(html.psi_thuoctinh);
            //$(document).ready(MojoZoom.init);
		}
	});
}
function validRegister(){
    $('#reg_waitting').show(20);
    if ($('#txtFullName').val() == '' ) {
        Boxy.alert('Bạn vui lòng nhập họ và tên!',function(){$('#txtFullName').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
    var username = $('#txtUserName').val();
    if (username == '' ) {
        Boxy.alert('Bạn vui lòng nhập tên đăng nhập!',function(){$('#txtUserName').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
    if (username.length < 3 ) {
        Boxy.alert('Tên đăng nhập phải có ít nhất 3 ký tự!',function(){$('#txtPass').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
    var password = $('#txtPass').val();
    if (password == '' ) {
        Boxy.alert('Bạn vui lòng nhập mật khẩu!',function(){$('#txtPass').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
    if (password.length < 6 ) {
        Boxy.alert('Mật khẩu phải có ít nhất 6 ký tự!',function(){$('#txtPass').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
    if ($('#txtRePass').val() != password ) {
        Boxy.alert('Mật khẩu xác nhận không đúng!',function(){$('#txtRePass').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
    if ( !jIsemail($('#txtEmail').val())) {
      Boxy.alert('Email của bạn không hợp lệ !',function(){ $('#txtEmail').focus();$('#reg_waitting').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });
      return false;
   	}
    if ($('#txtMobile').val() == '' ) {
        Boxy.alert('Bạn vui lòng nhập số điện thoại!',function(){$('#txtMobile').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
    if ($('#txtCode').val() == '' ) {
        Boxy.alert('Bạn vui lòng nhập mã xác nhận!',function(){$('#txtCode').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
    if(!document.getElementById("ckAgree").checked){
		Boxy.alert('Bạn chưa đồng ý với Quy định của chúng tôi.<br/>Xin vui lòng quay lại và xác nhận thông tin!',function(){$('#txtMobile').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
	}
    var regData = $('form#frmRegister').serialize();
	$.ajax({
		type : 'POST',
		url : '/vn/ajax.php',
		dataType : 'json',
		data:regData,
		success : function(data){Boxy.alert(data.message,function(){
            if (data.error==false) {$(window.location).attr('href', data.url);}
            $('#reg_waitting').hide(20);  
		},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });},
		error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('#reg_waitting').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });}
	});
    return false;
}
function validLogin(){
    $('#reg_waitting').show(20);
    if ($('#txtUserName').val() == '' ) {
        Boxy.alert('Bạn vui lòng nhập tên đăng nhập!',function(){$('#txtUserName').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
    if ($('#txtPass').val() == '' ) {
        Boxy.alert('Bạn vui lòng nhập mật khẩu!',function(){$('#txtPass').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
    var regData = $('form#frmLogin').serialize();
	$.ajax({
		type : 'POST',
		url : '/vn/ajax.php',
		dataType : 'json',
		data:regData,
		success : function(data){Boxy.alert(data.message,function(){
            if (data.error==false) {$(window.location).attr('href', data.url);}
            $('#reg_waitting').hide(20);  
		},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });},
		error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('#reg_waitting').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });}
	});
    return false;
}
function logout(){
	Boxy.confirm('Bạn có thực sự muốn xóa thoát ?.',function(){
		$.ajax({
			type : 'POST',
			url : '/vn/ajax.php',
			dataType : 'json',
			data: {action:'logout',url:$('a#u_logout').attr('rel')},
			success : function(data){if(data.error==false){$(window.location).attr('href', data.url);}},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });}
		});
	  },{title:'Thông báo.',afterShow:function() { $('#boxy_button_OK').focus();} });
}
function validCInfo(){
    $('#reg_waitting').show(20);
    if ($('#txtFullName').val() == '' ) {
        Boxy.alert('Bạn vui lòng nhập họ và tên!',function(){$('#txtFullName').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
    if ( !jIsemail($('#txtEmail').val())) {
      Boxy.alert('Email của bạn không hợp lệ !',function(){ $('#txtEmail').focus();$('#reg_waitting').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });
      return false;
   	}
    if ($('#txtMobile').val() == '' ) {
        Boxy.alert('Bạn vui lòng nhập số điện thoại!',function(){$('#txtMobile').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
    if ($('#txtCode').val() == '' ) {
        Boxy.alert('Bạn vui lòng nhập mã xác nhận!',function(){$('#txtCode').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
    var regData = $('form#frmCInfo').serialize();
	$.ajax({
		type : 'POST',
		url : '/vn/ajax.php',
		dataType : 'json',
		data:regData,
		success : function(data){Boxy.alert(data.message,function(){
            if (data.error==false) {$(window.location).attr('href', data.url);}
            $('#reg_waitting').hide(20);  
		},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });},
		error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('#reg_waitting').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });}
	});
    return false;
}
function validCpass(){
    $('#reg_waitting').show(20);
    if ($('#txtOldPass').val() == '' ) {
        Boxy.alert('Bạn vui lòng nhập mật khẩu hiện tại!',function(){$('#txtOldPass').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
    var password = $('#txtPass').val();
    if (password == '' ) {
        Boxy.alert('Bạn vui lòng nhập mật khẩu!',function(){$('#txtPass').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
    if (password.length < 6 ) {
        Boxy.alert('Mật khẩu phải có ít nhất 6 ký tự!',function(){$('#txtPass').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
    if ($('#txtRePass').val() != password ) {
        Boxy.alert('Mật khẩu xác nhận không đúng!',function(){$('#txtRePass').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
    if ($('#txtCode').val() == '' ) {
        Boxy.alert('Bạn vui lòng nhập mã xác nhận!',function(){$('#txtCode').focus();$('#reg_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
    var regData = $('form#frmCpass').serialize();
	$.ajax({
		type : 'POST',
		url : '/vn/ajax.php',
		dataType : 'json',
		data:regData,
		success : function(data){Boxy.alert(data.message,function(){
            if (data.error==false) {$(window.location).attr('href', data.url);}
            $('#reg_waitting').hide(20);  
		},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });},
		error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('#reg_waitting').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });}
	});
    return false;
}
function validateContact(){	
	if($('#name_contact').val()==''){
		Boxy.alert('Hãy nhập họ và tên.',function(){$('#name_contact').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#address_contact').val()==''){
		Boxy.alert('Hãy nhập địa chỉ liên hệ.',function(){$('#address_contact').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if(!isemail($('#email_contact').val())){
		Boxy.alert('Hãy nhập Email liên hệ.',function(){$('#email_contact').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#title_contact').val()==''){
		Boxy.alert('Hãy nhập tiêu đề liên hệ.',function(){$('#title_contact').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#content_contact').val()=='' || $('#content_contact').val()=='Nội dung phản hồi...'){
		Boxy.alert('Hãy nhập nội dung liên hệ.',function(){$('#content_contact').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
    if ($('#txtCode').val() == '' ) {
        Boxy.alert('Bạn vui lòng nhập mã xác nhận!',function(){$('#txtCode').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
	$('#reg_waitting').show(200);
	var regData = $('form#frmContact').serialize();
	$.ajax({
			type : 'POST',
			url : '/vn/ajax.php',
			dataType : 'json',
			data: regData,
			success : function(data){Boxy.alert(data.message,function(){if(data.error==false){$(window.location).attr('href', '/vn/'); }},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('#faq_waiting').hide(200);$('#faq_submit').removeAttr('disabled');$('#faq_reset').removeAttr('disabled');$('#faq_submit').removeClass();$('#faq_submit').addClass('faq_submit');$('#faq_reset').removeClass();$('#faq_reset').addClass('faq_reset');},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}
		});
	return false;
}
function isemail(email) {
	var re = /^(\w|[^_]\.[^_]|[\-])+(([^_])(\@){1}([^_]))(([a-z]|[\d]|[_]|[\-])+|([^_]\.[^_])*)+\.[a-z]{2,3}$/i;
	return re.test(email);
}
function ajaxCommplete(data){
    if(data.error){
        Boxy.alert(data.message,function(){$('#waitting').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });
    }else{
        Boxy.alert(data.message,function(){$(window.location).attr('href',data.url);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });
    }
}
function f_tuyendung(){
    $('#waitting').show(20);
	if($('#ungvien_TThovaten').val()==''){
		Boxy.alert('Hãy nhập họ và tên.',function(){$('#waitting').hide(20); $('#ungvien_TThovaten').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#ungvien_TTngaysinh').val()==''){
		Boxy.alert('Hãy chon ngày sinh.',function(){$('#waitting').hide(20); $('#ungvien_TTngaysinh').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#ungvien_TTcmt').val()==''){
		Boxy.alert('Hãy nhập số chứng minh nhân dân.',function(){$('#waitting').hide(20); $('#ungvien_TTcmt').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#ungvien_TTngaycapcmt').val()==''){
		Boxy.alert('Hãy chọn ngày cấp.',function(){$('#waitting').hide(20); $('#ungvien_TTngaycapcmt').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#ungvien_TTnoicap').val()==''){
		Boxy.alert('Hãy nhập nơi cấp.',function(){$('#waitting').hide(20); $('#ungvien_TTnoicap').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#ungvien_TTdiachithuong').val()==''){
		Boxy.alert('Hãy nhập địa chỉ thường trú.',function(){$('#waitting').hide(20); $('#ungvien_TTdiachithuong').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#ungvien_TTdiachitam').val()==''){
		Boxy.alert('Hãy nhập địa chỉ tạm trú.',function(){$('#waitting').hide(20); $('#ungvien_TTdiachitam').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#ungvien_TTquequan').val()==''){
		Boxy.alert('Hãy nhập địa chỉ quê quán.',function(){$('#waitting').hide(20); $('#ungvien_TTquequan').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#ungvien_TTdienthoaicodinh').val()==''){
		Boxy.alert('Hãy nhập Số điện thoại cố định.',function(){$('#waitting').hide(20); $('#ungvien_TTdienthoaicodinh').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#ungvien_TTdienthoaididong').val()==''){
		Boxy.alert('Hãy nhập Số điện thoại di động.',function(){$('#waitting').hide(20); $('#ungvien_TTdienthoaididong').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if(!isemail($('#ungvien_TTemail').val())){
		Boxy.alert('Hãy nhập Email.',function(){ $('#waitting').hide(20); $('#ungvien_TTemail').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	
	if($('#ungvien_QTHtentruonghoc1').val()==''){
		Boxy.alert('Hãy nhập Tên trường.',function(){$('#waitting').hide(20); $('#ungvien_QTHtentruonghoc1').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#ungvien_QTHthoigianhoc1').val()==''){
		Boxy.alert('Hãy nhập thời gian học.',function(){$('#waitting').hide(20); $('#ungvien_QTHthoigianhoc1').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#ungvien_QTHchuyennganh1').val()==''){
		Boxy.alert('Hãy nhập chuyên ngành.',function(){$('#waitting').hide(20); $('#ungvien_QTHchuyennganh1').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	
	if($('#ungvien_QTDTchuongtrinhdaotao1').val()==''){
		Boxy.alert('Hãy nhập Tên chương trình.',function(){$('#waitting').hide(20); $('#ungvien_QTDTchuongtrinhdaotao1').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#ungvien_QTDTthoigiandaotao1').val()==''){
		Boxy.alert('Hãy nhập thời gian đào tạo.',function(){$('#waitting').hide(20); $('#ungvien_QTDTthoigiandaotao1').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#ungvien_QTDTnoidaotao1').val()==''){
		Boxy.alert('Hãy nhập nơi đào tạo.',function(){$('#waitting').hide(20); $('#ungvien_QTDTnoidaotao1').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}	
	if($('#ungvien_TTLQngaydilam').val()==''){
		Boxy.alert('Hãy chọn ngày có thể đi làm.',function(){$('#waitting').hide(20); $('#ungvien_TTLQngaydilam').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
    /*
    var regData = $('form#frm_tuyendung').serialize();
	$.ajax({
		type : 'POST',
		url : '/vn/ajax.php',
		dataType : 'json',
		data:regData,
		success : function(data){Boxy.alert(data.message,function(){
            if (data.error==false) {$(window.location).attr('href', data.url);}
            $('#td_waitting').hide(20);  
		},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });},
		error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('#td_waitting').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });}
	});*/
	//alert(123);
    document.forms['frm_tuyendung'].submit();
    return false;
}
function validateComment()
{
	if ($('#txtName').val()=='Họ tên') {
		alert('Bạn vui lòng nhập tên.',function(){ $('#txtName').focus();},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});
      	return false;
   	}
	if(!isemail($('#txtMail').val())){
		alert('Hãy nhập địa chỉ Email.',function(){$('#txtMail').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if ($('#txtCode').val()=='Mã kiểm tra') {
		alert('Bạn vui lòng nhập mã kiểm tra.',function(){ $('#txtCode').focus();},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});
      	return false;
   	}
	var regData = $('form#frmComment').serialize();
	$('#contact_waitting').show(200);
	$.ajax({
		type : 'POST',
		url : '/vn/ajax.php',
		dataType : 'json',
		data: regData,
		success : function(data){alert(data.message,function(){if (data.error==false) {location.reload(true)}},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });},
		error : function(XMLHttpRequest, textStatus, errorThrown) {alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('div#contact_waitting').css('display','none');},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		}
	}); 
	return false;
}
function decode(str) {
     return unescape(str.replace(/\+/g, " "));
}
function pageOption(obj){
	var urlRec = $(obj).val();
	if(urlRec!=''){
		$(window.location).attr('href',decode(urlRec));
	}
}
$(document).ready(function(){				   
	$('#pOrder,#numPage').change(function(){pageOption(this)});
});
$(document).ready(function(){
	$("#txtKeyword").autocomplete("/vn/autoSearch.php", {
		width: 257,
		selectFirst: false
	});
	$("#txtKeyword").result(function(event, data, formatted) {
		if (data)
			$("#txtSearchID").val(data[1]);
			else $("#txtSearchID").val('0');
	});
})
