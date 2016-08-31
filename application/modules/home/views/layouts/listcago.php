<div class="box-ads-sidebar sidebar-ha">
  <h2 class="h2left">Tranh Gạo</h2>
  <ul class="ul-list-cat">
  <?php if(isset($randomcago) && $randomcago != NULL){ ?>
  <?php foreach($randomcago as $items){ ?>
  <li class="field_sub"><a href="<?php echo base_url().$items['cate_rewrite']."/"."tranh-".$items['rewrite']; ?>.html" title="<?php echo $items['name']; ?>"><?php echo $items['name']; ?></a></li>
  <?php } } ?>
  </ul>
</div>