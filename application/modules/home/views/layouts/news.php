<div class="box-ads-sidebar sidebar-ha">
  <h2>TIN TỨC</h2>
  <ul class="ul-list-cat">
  <?php if(isset($listnews) && $listnews != NULL){ ?>
  <?php foreach($listnews as $news){ ?>
  <li class="field_sub"> <a href="<?php echo base_url()."tin-tuc/".$news['news_rewrite']."-".$news['news_id']; ?>.html" title="<?php echo $news['news_title']; ?>"><?php echo $news['news_title']; ?></a></li>
  <?php } } ?>
  </ul>
</div>