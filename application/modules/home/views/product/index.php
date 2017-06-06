<div class="Main">
    <div class="Leftall">
        <div class="Navigation">
            <div class="nav_left">Vị trí hiện tại ： <span><a href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a></span> <span>»</span> <span class="now"><?php echo $cateInfo['cate_name']; ?></span> </div>
        </div>
        <div class="clear"></div>
        <div class="GoodsSearchWrap">
            <div class="GoodsSelector division boxGray" style="display:block;">
                <div class="division boxBrown" style="display:block;">
                    <table>
                        <tbody>
                            <tr>
                                <td class="textright" style="text-align:left; width:72px;white-space:nowrap">Loại tranh ：</td>
                                <td style="line-height:22px; white-space:normal; word-break:break-all">
                                    <a href="#">Tranh đá quý <span class="num">(73)</span></a>
                                    <a href="#">Tranh cát <span class="num">(31)</span></a>
                                    <a href="#">Tranh gạo <span class="num">(56)</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="textright" style="padding-right:6px; width:72px; white-space:nowrap">Tìm theo vị trí ：</td>
                                <td style="line-height:22px; white-space:normal; word-break:break-all">
                                    <a href="#">Phòng khách <span class="num">(13)</span></a>
                                    <a href="#">Nhà hàng <span class="num">(3)</span></a>
                                    <a href="#">Cửa vào <span class="num">(6)</span></a>
                                    <a href="#">Hành lang <span class="num">(9)</span></a>
                                    <a href="#">Khách sạn <span class="num">(4)</span></a>
                                    <a href="#">Văn phòng <span class="num">(2)</span></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <script type="text/javascript">
                var fixEmpeyPanel = (function(el) {
                    el.setStyle('display', el.get('text').clean().trim() ? 'block' : 'none');
                    return arguments.callee;
                })($('selector-form'));
                if ($('selector-form').style.display != 'none') {
                    $$('#selector-form .division').each(fixEmpeyPanel);
                }
            </script>
            <div id="list-products" class="grid">
                <?php if(isset($listProducts)){ ?>
                <?php foreach($listProducts as $productItem){ ?>
                <div class="items-gallery">
                    <div class="goodpic">
                        <a href="<?php echo base_url().$productItem['pro_rewrite']."-".$productItem['pro_id']; ?>.html">
                            <img src="<?php echo base_url()."uploads/products/thumb/".$productItem['pro_image']; ?>" alt="<?php echo $productItem['pro_name']; ?>" title="<?php echo $productItem['name'].' - '.$productItem['pro_name']; ?>"/>
                        </a>
                    </div>
                    <div class="goodinfo">
                        <h6><a href="<?php echo base_url().$productItem['pro_rewrite']."-".$productItem['pro_id']; ?>.html" title="<?php echo $productItem['pro_name']; ?>" class="entry-title"><?php echo $productItem['pro_name']; ?></a></h6>
                        <span class="price1">Giá : <?php echo $productItem['pro_price'] ? number_format($productItem['pro_price']).' VND' : 'Liên hệ'; ?></span>
                    </div>
                </div>
                <?php } } ?>
            </div>
            <div style="height:15px;clear:both"></div>
            <div class="clearfix">
                <div class="pager floatRight" style="width: 200px">
                    <div class="pagernum">
                    <?php echo $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div id="bdshare" class="bdshare_b" style="line-height:12px;float:right;">
            <ul class="social">
                <li><a title="Google +" class="gg" target="blank" rel="publisher" href="$">Google+</a> </li>
                <li><a rel="nofollow" href="#" target="blank" class="rss">RSS</a> </li>
                <li><a rel="nofollow" href="#" target="blank" class="lki">LinkedIn</a> </li>
                <li><a class="fb" rel="nofollow" title="Facebook page" target="blank" href="#">Facebook</a> </li>
            </ul>
        </div>
        <div class="clear"></div>
        <div class="custom">
            <div class="tab">
                <ul>
                    <li class="cur">Thông tin</li>
                    <li>Bài viết nổi bật</li>
                </ul>
            </div>
            <div class="page clearfix cur">
                <p><?php echo $cateInfo['cate_ext']; ?></p>
            </div>
            <div class="page clearfix">
                <ul>
                    <li><a href="#" title="Triển lãm tranh đá quý tại hà nội">Triển lãm tranh đá quý tại hà nội</a></li>
                    <li><a href="#" title="Treo tranh phòng khách hợp phong thủy">Treo tranh phòng khách hợp phong thủy</a> </li>
                    <li><a href="#" title="Tranh treo phòng khách đẹp">Tranh treo phòng khách đẹp</a> </li>
                    <li><a href="#" title="Mua tranh đá quý ở đâu tốt tại hà nội">Mua tranh đá quý ở đâu tốt tại hà nội</a> </li>
                    <li><a href="#" title="Triển lãm tranh đá quý tại hà nội">Triển lãm tranh đá quý tại hà nội</a></li>
                    <li><a href="#" title="Treo tranh phòng khách hợp phong thủy">Treo tranh phòng khách hợp phong thủy</a> </li>
                </ul>
            </div>
        </div>
        <script>
            window.addEvent('domready', function() {
                var tabs = $$(".custom .tab li");
                var cons = $$(".custom .page");
                tabs.addEvents({
                    'mouseenter': function() {
                        tabs.removeClass('cur');
                        this.addClass('cur');
                        var index = tabs.indexOf(this);
                        cons.removeClass('cur');
                        cons[index].addClass('cur');
                    },
                    'mouseleave': function() {}
                });
            });
        </script>
        <div class="bottomdesc">&nbsp;</div>
        <script>
            window.addEvent('domready', function() {
                try {
                    /*关键字高亮*/
                    (function(replace_str) {
                        var replace = replace_str.split("+");
                        if (replace.length) {
                            $ES('.entry-title').each(function(r) {
                                for (i = 0; i < replace.length; i++) {
                                    if (replace[i]) {
                                        var reg = new RegExp("(" + replace[i].escapeRegExp() + ")", "gi");
                                        r.setText(r.get('text').replace(reg, function() {
                                            return "{0}" + arguments[1] + "{1}";
                                        }));
                                    }
                                }
                                r.set('html', r.get('text').format("<font color=red>", "</font>"));
                            });
                        }
                    })('');
                } catch (e) {}
                if (window.ie6) return;
                var gallerybar = $('gallerybar');
                var gallerybarSize = gallerybar.getSize();
                var gallerybarPos = gallerybar.getPosition();
                var fixedStart = gallerybarSize.y + gallerybarPos.y;
                var fixGalleryBar = function() {
                    if (fixedStart < this.getScrollTop()) {
                        gallerybar.addClass('fixed').setStyles({
                            'width': gallerybarSize.x
                        });
                    } else {
                        gallerybar.removeClass('fixed').setStyles({
                            'width': 'auto'
                        });
                    }
                };
                window.addEvents({
                    'resize': fixGalleryBar,
                    'scroll': fixGalleryBar
                });
            });
        </script>
    </div>
    <div class="clear"></div>
</div>