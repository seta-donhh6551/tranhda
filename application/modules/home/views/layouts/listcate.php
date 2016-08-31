<h2 class="h2left">DANH MỤC</h2>
  <ul class="ul-list-cat">
    <?php if(isset($listcate) && $listcate != NULL){ ?>
    <?php foreach($listcate as $list){ ?>
    <li class="field_sub"><a href="<?php echo base_url().$list['cate_rewrite']; ?>.html" title="<?php echo $list['cate_name']; ?>"><?php echo $list['cate_name']; ?></a></li>
    <?php } } ?>
  </ul>
<div class="clear"></div>