<div id="header">
      <div id="logo"><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>public/images/logo.png" alt="Tranh Gạo Việt" title="Tranh Gạo Việt" /></a> </div>
      <!--end: #logo-->
      <div id="header-tools">
        <div id="header-menu">
        	<a class="text" href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a>
            <a class="line" href="javascript:void(0)" rel="nofollow">&nbsp;|&nbsp;</a>
            <a class="text" href="<?php echo base_url(); ?>tranh-co-san.html" title="Tranh có sẵn">Tranh có sẵn</a>
            <a class="line" href="javascript:void(0)" rel="nofollow">&nbsp;|&nbsp;</a>
            <a class="text" href="<?php echo base_url(); ?>nghe-thuat-tranh-gao.html">Nghệ thuật tranh gạo</a>
            <a class="line" href="javascript:void(0)" rel="nofollow">&nbsp;|&nbsp;</a>
            <a class="text" href="http://tranhcathanoi.com/" title="Tranh cát" target="_blank">Tranh cát</a>
             <a class="line" href="javascript:void(0)" rel="nofollow">&nbsp;|&nbsp;</a>
            <a class="text" href="<?php echo base_url();?>tin-tuc.html" title="Tin tức">Tin tức</a>
            <a class="line" href="javascript:void(0)" rel="nofollow">&nbsp;|&nbsp;</a>
            <a class="text" href="<?php echo base_url(); ?>lien-he.html" title="Liên hệ">Liên hệ</a>
        </div>
        <div class="clear"><!--img height="0px" src="images/spacer.gif" class="spacer" alt="Tranh Gạo Hà Nội" title="Tranh Gạo Hà Nội" /--></div>
        <div id="search-share">
          <div id="box-share">
            <ul>
              <li><img src="<?php echo base_url();?>public/images/icon_yahoo.png" alt="Yahoo" />&nbsp;Yahoo
                <ul class="css3 radius3">
                  <li class="arow-up"></li>
                  <li class="icon_type"><img src="<?php echo base_url();?>public/images/ic.png"  alt="Tranh Gạo Hà Nội" title="Tranh Gạo Hà Nội"  />&nbsp;Tư vấn tranh gạo</li>
                  <?php if(isset($support) && $support != NULL){ ?>
                  <?php foreach($support as $sup){ ?>
                  <li class="list"><a href="ymsgr:sendIM?<?php echo $sup['sup_yahoo']; ?>" title="<?php echo $sup['sup_name']; ?>"><img src="http://opi.yahoo.com/online?u=<?php echo $sup['sup_yahoo']; ?>&amp;m=g&amp;t=1" alt="<?php echo $sup['sup_name']; ?>"/>&nbsp;<?php echo $sup['sup_name']; ?></a></li>
                  <?php } } ?>
                  <li class="clear"></li>
                </ul>
              </li>
              <li><img src="<?php echo base_url();?>public/images/icon_skype.png" alt="hotline" title="hotline" />&nbsp;Skype
                <ul class="css3 radius3">
                  <li class="arow-up"></li>
                  <li class="icon_type"><img src="<?php echo base_url();?>public/images/ic.png"  alt="Tranh gạo Hà Nội" title="Tranh gạo Hà Nội" />&nbsp;Hỗ trợ bán hàng</li>
                  <?php if(isset($support) && $support != NULL){ ?>
                  <?php foreach($support as $sup){ ?>
                  <li class="list"><a href="skype:<?php echo $sup['sup_sky']; ?>" title="<?php echo $sup['sup_name']; ?>"><img src="<?php echo base_url();?>public/images/icon_skype.png" alt="<?php echo $sup['sup_name']; ?>" title="<?php echo $sup['sup_name']; ?>" />&nbsp;<?php echo $sup['sup_name']; ?></a></li>
                  <?php } } ?>
                  <li class="clear"></li>
                </ul>
              </li>
              <li><img src="<?php echo base_url();?>public/images/icon_hotline.png" alt="hotline" title="hotline" />&nbsp; 0967.336.663
                <ul class="css3 radius3">
                  <li class="arow-up"></li>
                  <li class="icon_type"><img src="<?php echo base_url();?>public/images/ic.png" alt="hỗ trợ" title="hỗ trợ" />&nbsp;Điện thoại</li>
                  <li class="list"><strong>Mua tranh gạo</strong> :&nbsp;0967.336.663</li>
                  <li class="clear"></li>
                </ul>
              </li>
              <li><a class="bs-item" title="Quà tặng cho người nước ngoài" href="<?php echo base_url();?>qua-tang-cho-nguoi-nuoc-ngoai.html"><img src="<?php echo base_url();?>public/images/icon-cart.png" alt="Quà tặng cho người nước ngoài" title="Quà tặng cho người nước ngoài" />&nbsp;<span class="aaaxxx"></span>Quà tặng đi nước ngoài</a></li>
            </ul>
          </div>
          <div id="search-form" class="css3">
            <form action="<?php echo base_url(); ?>tim-kiem.html" method="get">
              <fieldset>
              <input type="text" id="txtKeyword" name="keyword" />
              <input type="submit" value="" style="width:23px;height:19px;float:right;border:none;background:url(<?php echo base_url();?>public/images/icon-search.png)" />
              </fieldset>
            </form>
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
        </div>
        <div class="clear"><img height="18px" src="<?php echo base_url();?>public/images/spacer.gif" class="spacer"  alt="Tranh gạo" title="Ytanh gạo" /></div>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
      <div id="menu-top">
          <ul id="main">
            <?php if(isset($listcate) && $listcate != NULL){ ?>
            <?php foreach($listcate as $keytop => $list){ ?>
            <li><span><a class="par_mnu" href="<?php echo base_url().$list['cate_rewrite']; ?>.html" title="<?php echo $list['cate_name']; ?>"><?php echo $list['cate_name']; ?></a></span>
              <?php if(isset($listall)){ ?>
              <?php //print_r($listall['listcagotop'][$list['cate_id']]); die(); ?>
              		<?php if($listall['listcagotop'][$list['cate_id']] != NULL){ ?>
                	<div class="Sub_mnu_thuonghieu">
                    	<ul>
                    	<?php foreach($listall['listcagotop'][$list['cate_id']] as $categorie){ ?>
                    	<li class="mnu_list_thuonghieu"><a href="<?php echo base_url().$list['cate_rewrite']."/"."tranh-".$categorie['rewrite']; ?>.html" title="<?php echo $categorie['name']; ?>"><?php echo $categorie['name']; ?></a></li>
                        <?php } ?>
                        </ul>
                    </div>
              <?php } } ?>
            </li>
            <?php } } ?>
          </ul>
        </div>
        <div class="clear"></div>
    </div>