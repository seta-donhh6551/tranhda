<div class="section">
    <script type="text/javascript">
    function checkuser(){
        var form = document.sac;
        if(form.subject_title.value == ""){
            alert("Vui lòng nhập tiêu đề");
            form.subject_title.focus();
            return false;
        }else{
            return true;
        }
    }
</script>
    <!--[if !IE]>start title wrapper<![endif]-->
    <div class="title_wrapper">
        <span class="title_wrapper_top"></span>
        <div class="title_wrapper_inner">
            <span class="title_wrapper_middle"></span>
            <div class="title_wrapper_content">
                <h2 class="menu_title">Khoá học</h2>
            </div>
        </div>
        <span class="title_wrapper_bottom"></span>
    </div>
    <!--[if !IE]>end title wrapper<![endif]-->
    
    <!--[if !IE]>start section content<![endif]-->
    <div class="section_content">
        <span class="section_content_top"></span>
        
        <div class="section_content_inner">
            <div class="table_tabs_menu">
            <!--[if !IE]>start  tabs<![endif]-->
            <!--[if !IE]>end  tabs<![endif]-->

            </div>
<!--[if !IE]>start table_wrapper<![endif]-->
            <div class="table_wrapper" style="background:none;">
                <div class="table_wrapper_inner">
                    <div class="error_red"><?php if(isset($error)) { echo "<p>".$error."</p>"; } ?>
                        <?php echo validation_errors();?>
                    </div>
                    <form action="<?php echo base_url()?>admin/intro/add" method="post" enctype="multipart/form-data">
                    <table width="835" border="0" align="center">
                      <tr>
                        <td width="138" height="12">Tiêu đề</td>
                        <td width="687"><input name="in_name" type="text" size="35"></td>
                      </tr>
                      <tr>
                        <td width="138" height="12">Thứ tự</td>
                        <td width="687"><input name="in_order" type="text" size="35"></td>
                      </tr>
                      <tr>
                        <td width="138" height="23">Hình ảnh</td>
                        <td><input type="file" name="images" size="30" /></td>
                      </tr>
                      <tr>
                        <td width="138" height="23">Keywords</td>
                        <td>	
                        	<textarea name="in_keys" cols="30" rows="5"></textarea>
                        </td>
                      </tr>
                      <tr>
                        <td width="138" height="23">Description</td>
                        <td>	
                        	<textarea name="in_des" cols="30" rows="5"></textarea>
                        </td>
                      </tr>
                      <tr>
                        <td width="138" height="27">Nội dung</td>
                        <td colspan="3" align="left"><?php 
                        $fck = new FCKeditor('in_value');
                        $fck->BasePath = sBASEPATH;
                        //$fck->Value  = $list['in_value'];
                        $fck->Width  = '100%';
                        $fck->Height = 400;
                        $fck->Create();
                        ?></td>
                      </tr>
                      <tr>
                        <td width="138" height="33">&nbsp;</td>
                        <td align="left"><input type="submit" name="ok" id="ok" value="Add now" class="magin"></td>
                      </tr>
                    </table>
              </form>
                </div>
            </div>
            <!--[if !IE]>end table_wrapper<![endif]-->
        </div>
        <span class="section_content_bottom"></span>
    </div>
    <!--[if !IE]>end section content<![endif]-->
</div>