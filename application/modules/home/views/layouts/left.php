<div id="cat-sidebar">
      <ul class="ul-list-cat">
      </ul>
      <!--end: .ul-list-cat-->
      <div class="clear"><img height="20px" src="<?php echo base_url(); ?>public/images/spacer.gif" title="Tranh Gạo" alt="Tranh Gạo" class="spacer" /></div>
      <h2 class="h2left">DANH MỤC</h2>
      <ul class="ul-list-cat">
        <?php if(isset($listcate) && $listcate != NULL){ ?>
        <?php foreach($listcate as $list){ ?>
        <li class="field_sub"> <a href="<?php echo base_url().$list['cate_rewrite']; ?>.html" <?php if($result['cate_id'] == $list['cate_id']){ echo "class='clrf30'";} ?> title="<?php echo $list['cate_name']; ?>"><?php echo $list['cate_name']; ?></a></li>
        <?php } } ?>
      </ul>
      <div class="clear"></div>
      <div class="box-ads-sidebar sidebar-ha">
      	  <h2 class="h2left">Tranh Gạo</h2>
          <ul class="ul-list-cat">
          <?php if(isset($listcago) && $listcago != NULL){ ?>
          <?php foreach($listcago as $items){ ?>
          <li class="field_sub"><a href="<?php echo base_url().$result['cate_rewrite']."/"."tranh-".$items['rewrite']; ?>.html" <?php if($result['id'] == $items['id']){ echo "class='clrf30'";} ?> title="<?php echo $items['name']; ?>"><?php echo $items['name']; ?></a></li>
          <?php } } ?>
          </ul>
      </div>
      <div class="box-ads-sidebar sidebar-ha">
      	  <h2>TIN TỨC</h2>
          <ul class="ul-list-cat">
          <?php if(isset($listnews) && $listnews != NULL){ ?>
          <?php foreach($listnews as $news){ ?>
          <li class="field_sub"> <a href="<?php echo base_url()."tin-tuc/".$news['news_rewrite']."-".$news['news_id']; ?>.html" title="<?php echo $news['news_title']; ?>"><?php echo $news['news_title']; ?></a></li>
          <?php } } ?>
          </ul>
      </div>
      <div class="box-ads-sidebar sidebar-ha">
      	  <h2>VIDEO</h2>
          <iframe width="190" height="107" src="https://www.youtube.com/embed/TqYP8iqTRZM" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="box-ads-sidebar sidebar-ha">
      	  <h2>Facebook</h2>
          <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FTranhGaoViet&amp;width=190&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=598791970214066" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:190px; height:258px;" allowTransparency="true"></iframe>
      </div>
      <!--end: .box-ads-sidebar--> 
    </div>