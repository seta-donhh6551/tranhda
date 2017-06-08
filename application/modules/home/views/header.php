<div class="header">
	<div class="he_mid">
		<div class="kwj left"><span class="lishi">Bán buôn bán lẻ tranh đá quý</span> <a href="#" class="zizhi" rel="nofollow" target="_blank">[Hà Nội]</a>
		</div>
		<div class="login left">
			Xin chào, Chúng tôi trên
			<span id="loginBar_widgets_16562">
				<a rel="nofollow" href="https://www.facebook.com/tranhdaquy.99">[Facebook]</a>&nbsp;&nbsp; <a title="Youtube" class="qqsign" href="https://www.youtube.com" rel="nofollow"><img src="<?php echo base_url(); ?>public/images/favicon-vflz7uhzw.ico" />Youtube</a>
			</span>
		</div>
		<div class="dhang right">
			<a href="javascript:void(0)" rel="nofollow">Giỏ hàng</a>
			<a href="javascript:void(0)" rel="nofollow">Hỏi đáp</a>
            <a href="javascript:void(0)" onclick="showMap()">Bản đồ</a>
			<a href="<?php echo base_url(); ?>lien-he.html" style="background:none">Liên hệ</a>
		</div>
	</div>
</div>
<script type="text/javascript">
function showMap(){
    var title = 'Bản đồ đường đi';
    var url = '<?php echo base_url(); ?>public/images/ban-do.jpg';
    var w = '900';
    var h = '500';
//    var myWindow = window.open("", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=300,left=300,width=631,height=345");
//    myWindow.document.title = 'Bản đồ đường đi';
//    myWindow.document.write("<img src='"+urlImgMap+"' alt='Bản đồ đường đi' />");
    // Fixes dual-screen position                         Most browsers      Firefox
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

    var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
    var top = ((height / 2) - (h / 2)) + dualScreenTop;
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

    // Puts focus on the newWindow
    if (window.focus) {
        newWindow.focus();
    }
}
</script>