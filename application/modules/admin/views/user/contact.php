
<div class="section"> 
  <script type="text/javascript">
					$(document).ready(function(e) {
                        $("#ok").click(function(){
							$val  = $("#keyword").val();
							$show = $("#user_show");
							$.ajax({
								"url"   : "<?php echo base_url();?>admin/user/search",
								"type"  : "post",
								"data"  : "val="+$val,
								"acsync": false,
								success: function(result){
									$show.html(result)
								}
							});
						});
                    });
					function check(){
						if(confirm('Bạn có chắc muốn xóa không ?')){
							return true;
						}else{
							return false;
						}
					}
				</script> 
  <!--[if !IE]>start title wrapper<![endif]-->
  <div class="title_wrapper"> <span class="title_wrapper_top"></span>
    <div class="title_wrapper_inner"> <span class="title_wrapper_middle"></span>
      <div class="title_wrapper_content">
        <h2 class="menu_title">Danh sách User</h2>
      </div>
    </div>
    <span class="title_wrapper_bottom"></span> </div>
  <!--[if !IE]>end title wrapper<![endif]--> 
  
  <!--[if !IE]>start section content<![endif]-->
  <div class="section_content"> <span class="section_content_top"></span>
    <div class="section_content_inner minheight">
      <div class="table_tabs_menu">
        <ul class="table_tabs">
          <li><a href="#" name="tab1" class="selected"><span><span>Danh sách</span></span></a></li>
          <li><a href="#" name="tab2"><span><span>Tìm kiếm</span></span></a></li>
          <li><a href="<?php echo base_url(); ?>admin/user/add" name=""><span><span>Thêm mới</span></span></a></li>
        </ul>
        <!--[if !IE]>start  tabs<![endif]--> 
        <!--[if !IE]>end  tabs<![endif]--> 
      </div>
      <!--[if !IE]>start table_wrapper<![endif]-->
      <div class="table_wrapper">
        <div class="table_wrapper_inner" id="tab1">
          <form action="" method="post" name="sac">
            <table width="737" align="center">
		    <tbody><tr>
		      <td width="25" class="title">Stt</td>
		      <td width="164" class="title">Tên người liên hệ</td>
		      <td width="156" class="title">Email</td>
		      <td width="142" class="title">Số điện thoại</td>
		      <td width="95" class="title">Ngày gửi</td>
		      <td width="85" class="title">Xem chi tiết</td>
		      <td width="38" class="title">Xóa</td>
		    </tr>
		    <?php
				if($contact == NULL){
					echo "<tr>";
					echo "<td colspan='7' class='titlle'>Không có dữ liệu</td>";
					echo "</tr>";
				}else{
					$stt = 0;
					foreach($contact as $item){
						$stt++;
						echo "<tr>";
						echo "<td>".$stt."</td>";
						echo "<td>".$item['con_name']."</td>";
						echo "<td>".$item['con_email']."</td>";
						echo "<td>".$item['con_phone']."</td>";				
						echo "<td>".$item['con_date']."</td>";				
						echo "<td><a href='".base_url()."admin/user/contact_view/$item[con_id]'>Chi tiết</a></td>";
						echo "<td><a href='".base_url()."admin/user/del_con/$item[con_id]' onClick='return check()'>Xóa</a></td>";
						echo "</tr>";
					}
				}
			?>
		  </tbody></table>
          </form>
          <div id="pagination">
            <?php  //echo $this->pagination->create_links();?>
          </div>
        </div>
        <div class="table_wrapper_inner" id="tab2">
          <div class="form_user">
            <form action="javascript:void(0)">
              <div class="form_items">
                <div class="form_item_left">Tên tài khoản</div>
                <div class="form_item_right">
                  <input type="text" id="keyword" size="25" />
                </div>
              </div>
              <div class="form_items">
                <div class="form_item_left">&nbsp;</div>
                <div class="form_item_right">
                  <input type="submit" id="ok" value="Tìm kiếm" class="padding" />
                </div>
              </div>
            </form>
          </div>
          <div id="user_show"></div>
        </div>
      </div>
      <!--[if !IE]>end table_wrapper<![endif]--> 
    </div>
    <!--[if !IE]>start pagination<![endif]-->
    <div class="pagination_wrapper"> <span class="pagination_top"></span>
      <div class="pagination_middle">
        <div class="pagination"> 
          <!--<ul class="pag_list">
                                	<?php  //echo $this->pagination->create_links();?>
                                	
									<li><a href="#" class="pag_nav"><span><span>Previous</span></span></a> </li>
									<li><a href="#">1</a></li>
									<li><a href="#" class="current_page"><span><span>2</span></span></a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li>[...]</li>
									<li><a href="#">217</a></li>
									<li><a href="#" class="pag_nav"><span><span>Next</span></span></a> </li>
								</ul>--> 
        </div>
      </div>
      <span class="pagination_bottom"></span> </div>
    <!--[if !IE]>end pagination<![endif]--> 
    <span class="section_content_bottom"></span> </div>
  <!--[if !IE]>end section content<![endif]--> 
</div>
