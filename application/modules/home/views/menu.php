<div class="mtop">
	<div class="logo">
		<div class="left logo_le">
			<a href="index.html" title="99字画网">
				<img src="http://www.99zihua.com/images/default/logo.gif" alt="99字画网" border="0">
			</a>
		</div>
		<div class="tel"></div>
	</div>
	<div class="logoright">
		<div class="lrbottom">
			<div class="rsearch">
				<form action="#" method="post" class="SearchBar">
					<table cellpadding="0" cellspacing="0">
						<tr>
							<td class="search_label"> <span>Từ khóa：</span>
								<input name="name[]" size="10" class="inputstyle keywords" value="" /> </td>
                            <td style="padding-top:1px">
								<input type="submit" value="Tìm kiếm" class="btn_search" onfocus="this.blur();" /> </td>
							<td>&nbsp;</td>
						</tr>
					</table>
				</form>
			</div>
			<!--div class="blog"><a title="Cam kết" href="#" target="_blank" rel="nofollow">Cam kết</a>
			</div-->
		</div>
	</div>
	<div class="clear"></div>
</div>
<div class="topmenu">
	<div class="left left_menu"></div>
	<div class="tmenu">
		<ul class="MenuList">
			<li><a href="<?php echo base_url(); ?>">Trang chủ</a></li>
			<li><a href="#">Khuyến mãi</a><span class="hot"></span></li>
            <?php if(isset($listcate)){ ?>
            <?php foreach($listcate as $cateItems){ ?>
            <li><a href="<?php echo base_url().$cateItems['cate_rewrite']; ?>.html" title="Tranh <?php echo $cateItems['cate_name']; ?>"><?php echo $cateItems['cate_name']; ?></a></li>
            <?php } } ?>
			<li><a href="#">Liên hệ</a></li>
		</ul>
	</div>
	<div class="right right_menu"></div>
	<div class="fu"></div>
</div>
<div class="clear"></div>