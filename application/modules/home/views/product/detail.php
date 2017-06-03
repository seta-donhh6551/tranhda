<div class="Main">
    <div class="Leftall">
        <div class="border1 " id="widgets_16640">
            <div class="border-top">
                <h3></h3>
            </div>
            <div class="border-body">
                <div class="Navigation">
                    <div class="nav_left">Vị trí hiện tại ： 
                        <span>
                            <a href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a>
                        </span> 
                        <span>»</span>
                        <span>
                            <a href="<?php echo base_url().$category['cate_rewrite']; ?>.html" title="<?php echo $category['cate_name']; ?>"><?php echo $category['cate_name']; ?></a>
                        </span>
                        <span>»</span>
                        <span><?php echo $result['pro_name'] ?></span>
                    </div>
                </div>
            </div>
            <div class="border-bot"></div>
        </div>
        <div class="clear"></div>
        <div class="GoodsInfoWrap">
            <div id="goods-viewer">
                <div style="width:442px;float:left">
                    <div class="goodspic">
                        <div class="goods-detail-pic" style=" width:420px;height:390px;" bigpicsrc="<?php echo base_url().'uploads/products/'.$result['pro_image'] ?>">
                            <a href="#" target="_blank" style="color:#fff;width:420px;height:390px;display:table-cell;vertical-align:middle;">
                                <img src="<?php echo base_url().'uploads/products/'.$result['pro_image'] ?>" alt="<?php echo $result['pro_name']; ?>" style="width:400px;" />
                            </a>
                            <div class="goods-pic-magnifier" style="width: 109px;height:70px;visibility:visible; zoom:1; opacity: 0.3; top: 40%; left: 40%;"> &nbsp; </div>
                        </div>
                        <div class="picscroll">
                            <table class="picscroll" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td width="90%" style="text-align:center;font-weight:bold;color:#f00">
                                            Kéo chuột để xem ảnh lớn
                                            <div class="goods-detail-pic-thumbnail pics" style="display:none">
                                                <center>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="" img_id="47486">
                                                                    <div class="uparrow"></div>
                                                                    <a href="#" target="_blank" imginfo="{small:'<?php echo base_url().'uploads/products/'.$result['pro_image'] ?>',big:'<?php echo base_url().'uploads/products/'.$result['pro_image'] ?>'}">
                                                                        <img src="<?php echo base_url().'uploads/products/thumb/'.$result['pro_image'] ?>" alt="<?php echo $result['pro_name']; ?>" width="55" height="55" />
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </center>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <script>
                            window.addEvent('domready', function() {
                                var picThumbnailItems = $$('#goods-viewer .goods-detail-pic-thumbnail td a');
                                if (!picThumbnailItems.length) return;
                                var goodsPicPanel = $E('#goods-viewer .goods-detail-pic');
                                var goodsDetailPic = $E('#goods-viewer .goods-detail-pic img');
                                var picscroll = $E('#goods-viewer .picscroll');
                                var scrollARROW = picscroll.getElements('.scrollarrow');
                                var picsContainer = $E('.pics', picscroll).scrollTo(0, 0);
                                picsContainer.store('selected', picThumbnailItems[0]);
                                if (picsContainer.getSize().x < picsContainer.getScrollSize().x) {
                                    scrollARROW.setStyle('visibility', 'visible').addEvent('click', function() {
                                        var scrollArrow = this;
                                        var to = eval("picsContainer.scrollLeft" + (scrollArrow.hasClass('toleft') ? "-" : "+") + "picsContainer.offsetWidth");
                                        picsContainer.retrieve('fxscroll', new Fx.Scroll(picsContainer, {
                                            'link': 'cancel'
                                        })).start(to);
                                    });
                                };
                                picThumbnailItems.each(function(item) {
                                    /*预加载 中图*/
                                    var _img = new Image();
                                    _img.src = JSON.decode(item.get('imginfo'))['small'];
                                });
                                picThumbnailItems.addEvents({
                                    'click': function(e) {
                                        e.stop();
                                        this.fireEvent('selected');
                                    },
                                    'mouseenter': function() {
                                        if (this.getParent('td').hasClass('current')) return;
                                        var imgInfo = JSON.decode(this.get('imgInfo'));
                                        goodsDetailPic.src = imgInfo['small'];
                                    },
                                    'mouseleave': function() {
                                        if (this.getParent('td').hasClass('current')) return;
                                        picsContainer.retrieve('selected').fireEvent('selected', 'noclick');
                                    },
                                    'selected': function(noclick) {
                                        var _td = this.getParent('td');
                                        if (_td.hasClass('current') && !noclick) return;
                                        picsContainer.retrieve('selected').fireEvent('unselect');
                                        _td.addClass('current');
                                        var imgInfo = JSON.decode(this.get('imgInfo'));
                                        goodsDetailPic.src = imgInfo['small'];
                                        goodsPicPanel.set('bigpicsrc', imgInfo['big']);
                                        picsContainer.store('selected', this);
                                    },
                                    'unselect': function() {
                                        this.getParent('td').removeClass('current');
                                    },
                                    'focus': function() {
                                        this.blur();
                                    }
                                });
                                picThumbnailItems[0].fireEvent('selected');
                                /*放大镜*/
                                var magnifierOptions = magnifierOptions || {
                                    width: 517,
                                    height: 334
                                };
                                var goodsPicMagnifier = $E('#goods-viewer .goods-pic-magnifier');
                                var goodsPicMagnifierSize = goodsPicMagnifier.getSize();
                                var goodsPicPanelSize = goodsPicPanel.getSize();
                                picThumbnailItems.addEvent('selected', function(noclick) {
                                    if (noclick) return;
                                    var _img = new Image();
                                    _img.src = JSON.decode(this.get('imginfo'))['big'];
                                });
                                goodsPicPanel.addEvents({
                                    'mouseenter': function() {
                                        var gpmViewer = this.store('gpmViewer', new Element('div', {
                                            'class': 'goods-pic-magnifier-viewer',
                                            styles: $extend(magnifierOptions, {
                                                'background-Image': 'url(' + goodsPicPanel.get('bigpicsrc') + ')',
                                                'top': $E('#goods-viewer .goodsname').getPosition().y + 30,
                                                'left': $E('#goods-viewer .goodsname').getPosition().x,
                                                'visibility': 'visible',
                                                'background-position': '0 0',
                                                'background-repeat': 'no-repeat'
                                            })
                                        }).inject(document.body));
                                        goodsPicMagnifier.setOpacity(.3);
                                    },
                                    'mouseleave': function() {
                                        if ($type(this.retrieve('gpmViewer')) == 'element') {
                                            this.retrieve('gpmViewer').remove();
                                        }
                                        this.store('gpmViewer', false);
                                        goodsPicMagnifier.setStyle('visibility', 'hidden');
                                    },
                                    'mousemove': function(e) {
                                        var mouseXY = e.page;
                                        var relativeXY = {
                                            top: (mouseXY.y - goodsPicPanel.getPosition().y),
                                            left: (mouseXY.x - goodsPicPanel.getPosition().x)
                                        };
                                        var gpmXY = {
                                            top: 0,
                                            left: 0
                                        };
                                        var xymap1 = {
                                            top: 'y',
                                            left: 'x'
                                        };
                                        var xymap2 = {
                                            top: 1,
                                            left: 0
                                        };
                                        var gpmvXY = ['0%', '0%'];
                                        for (v in relativeXY) {
                                            gpmXY[v] = (relativeXY[v] - goodsPicMagnifierSize[xymap1[v]] / 2).limit(0, goodsPicPanelSize[xymap1[v]] - goodsPicMagnifierSize[xymap1[v]]);
                                            gpmvXY[xymap2[v]] = ((relativeXY[v] / goodsPicPanelSize[xymap1[v]]) * 100) + '%';
                                        }
                                        goodsPicMagnifier.setStyles(gpmXY);
                                        if ($type(this.retrieve('gpmViewer')) == 'element') {
                                            this.retrieve('gpmViewer').setStyle('background-position', gpmvXY.join(' '));
                                        }
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
                <div style="width:518px;float:left">
                    <h1 class="goodsname"><?php echo $galleryType.' - '.$result['pro_name']; ?></h1>
                    <a class="zzgw" href="#" target="_blank"><img src="<?php echo base_url(); ?>/public/images/facebook-icon.png" alt="Chia sẻ lên Facebook"></a>
                    <div class="clear"></div>
                    <!-- -->
                    <ul class="goods-price list">
                        <li> <span class="f14">Giá tiền ：</span> <span class="price1" style="font-size:16px"> <?php echo $result['pro_price'] ? number_format($result['pro_price']).' VND' : 'Liên hệ'; ?> </span></li>
                        <li> <span>Kích thước：</span> <?php echo $result['pro_size']; ?> Cm</li>
                        <li><span class="redc">Vận chuyển ：</span> Miễn phí vận chuyển bán kính 3km</li>
                    </ul>
                    <ul class="goodsprops clearfix">
                        <li>
                            <span>Xuất xứ ：&nbsp;</span>
                            <span class="zuoz">
                                <?php echo $madeIn; ?>
                            </span>
                        </li>
                        <li><span>Mã sản phẩm ：&nbsp;</span><span id="goodsBn"><?php echo $result['pro_code']; ?></span></li>
                        <li><span>Bảo hành ：</span>&nbsp;<span class="redc">Tranh đá quý bảo hành 10 năm</span></li>
                        <li><span>Loại tranh ：</span>&nbsp;<span class="redc"><?php echo $galleryType; ?></span></li>
                    </ul>
                    <div class="hightline ">
                        <div class="hightbox">
                            <div id="goods-spec" class="goods-spec">
                                <table width="100%">
                                    <tbody>
                                        <tr>
                                            <td width="80%">
                                                <h4 class="spec-tip"><em> Tùy chọn：</em> <span>Tranh bao gồm khung, hộp đựng</span> </h4> </td>
                                            <td align="right" width="10%">
                                                <div id="view-products-list">
                                                    <a rel="nofollow" href="#" target="_blank">Hướng dẫn lắp đặt»»</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <input type="hidden" name="goods[product_id]" value="" disabled="true">
                                <table width="100%">
                                    <tbody>
                                        <tr class="spec-item specItem">
                                            <td style="width:10%; white-space:nowrap;padding-right:10px;vertical-align:middle;"><span><em>Kèm theo tranh</em>：</span>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <a rel="nofollow" href="javascript:void(0)" specvid="12816887451" specid="3"> <span><nobr>Khung và hộp đựng</nobr></span> <i title="点击取消选择">&nbsp;</i> </a>
                                                    </li>
                                                    <li>
                                                        <a rel="nofollow" href="javascript:void(0)" specvid="12816887462" specid="3"> <span><nobr>Khung tranh</nobr></span> <i title="点击取消选择">&nbsp;</i> </a>
                                                    </li>
                                                    <li>
                                                        <a rel="nofollow" href="javascript:void(0)" specvid="12816887463" specid="3"> <span><nobr>Hộp đựng</nobr></span> <i title="点击取消选择">&nbsp;</i> </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="buyinfo" style="display:none;">
                                <table width="auto">
                                    <tbody>
                                        <tr>
                                            <td><span>购买数量：</span>
                                            </td>
                                            <td>
                                                <div class="Numinput">
                                                    <input type="text" name="goods[num]" size="5" value="1"> <span class="numadjust increase"></span> <span class="numadjust decrease"></span> </div>
                                            </td>
                                            <td><span style="display:none;">&nbsp;&nbsp;(库存<span class="store">3</span>)</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="btnBar clearfix" style="visibility:visible;">
                        <div class="floatLeft">  <input class="actbtn btn-buy" value="加入购物车" type="submit" style="cursor: not-allowed;"> <input class="actbtn btn-notify" value="缺货登记" type="submit" style="display: none;">  </div>
                        <div class="floatleft">
                            <ul>
                                <li class="daog" style="position: relative;">
                                    <a rel="nofollow" target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1291357583&amp;site=qq&amp;menu=yes">
                                        <img border="0" src="http://wpa.qq.com/pa?p=2:1291357583:51" alt="点击这里给我发消息" title="点击这里给我发消息">
                                    </a>
                                    <img id="wxan" border="0" src="/statics/wxan.png" alt="微信咨询" style="cursor: pointer" onmouseover="$('ewm').show();" onmouseout="$('ewm').hide();" />
                                    <img id="ewm" class="ewm" border="0" src="/statics/ewm.png" alt="微信咨询二维码" style="display:none; position: absolute; top: 15px; left: 80px;" />
                                </li>
                                <li class="star-off"><a rel="nofollow" href="#" class="btn-fav">收藏此作品</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div style="clear:left"></div>
            </div>
            <div class="subPart">
    <div class="leftPart left">
        <div class="goods-detail-tab clearfix">
            <div class="goodsDetailTab active"><span>Mô tả</span>
            </div>
            <div class="goodsDetailTab"><span>Cam kết</span>
            </div>
            <div class="goodsDetailTab"><span>Mua hàng</span>
            </div>
            <div class="goodsDetailTab"><span>Lắp đặt</span>
            </div>
            <div class="goodsDetailTab"><span>Đánh giá (<em>0</em>)</span>
            </div>
        </div>
        <div class="clear"></div>
        <div class="section pdtdetail shangp" tab="Mô tả sản phẩm">
            <!--<div class="goodsprop_ultra clearfix">  </div>-->
            <div class="body indent uarea-output" id="goods-intro">
                <ul>
                    <li>Tên：<?php echo $result['pro_name'] ?></li>
                    <li>Tác giả：<?php echo $madeIn; ?></li>
                    <li>Kích thước：<?php echo $result['pro_size'] ?>cm (Chưa bao gôm khung)</li>
                    <li>Chất liệu：<?php echo $material; ?></li>
                    <li>Năm sản xuất：<?php echo date('Y'); ?></li>
                </ul>
                <p><font color="#cc0000">【<span style="font-weight:bold;">Giới thiệu</span>】</font><?php echo $result['pro_info']; ?></p>
                <p style="text-align: center;">
                    <a target="_blank" href="<?php echo base_url().'uploads/products/'.$result['pro_image'] ?>">
                        <img src="<?php echo base_url().'uploads/products/'.$result['pro_image'] ?>" alt="<?php echo $result['pro_name']; ?>" style="max-width:696px;" />
                    </a>
                </p>
                <div style="padding:0px 4px">
                    <h3>Vị Trí Treo Tranh</h3>
                    <p>Tùy vào từng mẫu tranh</p>
                </div>
                <p align="center"> <img src="http://www.99zihua.com/99zihuahome888/upload/gpic/20170413/8f497b59d6f10786c9d482f52ef425c1.jpg">
                </p>
            </div>
        </div>
        <div class="section pdtdetail hbg zb" tab="Cam kết">
            <h2><span class="leftt">Phương châm</span><a class="topp" href="#"></a></h2>
            <div class="body" id="goods-rels">
                <div class="tabbz tabshbg">
                    Nhằm hướng tới phục vụ khách hàng ngày càng tốt hơn và chuyên nghiệp hơn, Tranh gạo việt luôn hoàn thiện trong các chính sách không chỉ về sản phẩm. giá cả mà còn về phong cách phục vụ cùng các giá trị gia tăng. Và tất cả những triết lý trong kinh doanh của Tranh gạo việt luôn được toàn thể cán bộ nhân viên thấu hiểu và coi đó là phương châm làm việc.
                </div>
            </div>
        </div>
        <div class="section pdtdetail hbg zb" tab="Hướng dẫn lắp đặt">
            <h2><span class="leftt">Hướng dẫn lắp đặt</span><a class="topp" href="#"></a></h2>
            <div class="body" id="goods-rels">
                <div class="tabzb tabshbg">
                    Hướng dẫn lắp đặt tranh
                </div>
            </div>
        </div>
    </div>
    <div class="rightPart right">
        <a target="_blank" href="#">
            <img src="<?php echo base_url(); ?>/public/images/tranh-da-quy-chim-va-hoa.jpg" alt="Tranh đá quý đôi chim và hoa" />
        </a>
        <div class="he10"></div>
        <a target="_blank" href="#">
            <img src="<?php echo base_url(); ?>/public/images/tranh-da-quy-doi-trong-mai.jpg" alt="Tranh đá quý tự nhiên">
        </a>
        <div class="he10"></div>
        <div class="zhcs arttj">
            <h3>
                <span class="left">Vị Trí Treo Tranh</span>
                <span class="right more_r"><a target="_blank" href="#">Xem thêm&gt;&gt;</a></span>
            </h3>
            <div class="zhr">
                <a href="#" title="Phòng khách">Phòng khách</a>
                <a href="#" title="Nhà hàng">Nhà hàng</a>
                <a href="#" title="Phòng ngủ">Phòng ngủ</a>
                <a href="#" title="Cửa vào">Cửa vào</a>
                <div class="cl"></div>
                <a href="#" title="Hành lang">Hành lang</a>
                <a href="#" title="Khách sạn">Khách sạn</a>
            </div>
        </div>
        <div class="he10"></div>
        <div class="ph phcp">
            <div class="border1 hotrank">
                <div class="border-top">
                    <h3>Sản Phẩm Tương Tự</h3> </div>
                <div class="border-body">
                    <div class="GoodsListWrap GoodsList GoodsShow">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                                <tr valign="top">
                                    <td width="100%;" class="item textcenter" id="item-6369">
                                        <a class="pic" style="width:80px;height:80px;" href="http://www.99zihua.com/product-14564.html" target="_blank"> <img style="width:80px;height:80px;" alt="凌雪 四尺《金玉满堂》 北京美协会员" src="http://www.99zihua.com/images/goods/20170209/989ad601154e61db.jpg"> </a>
                                        <div class="info">
                                            <div style="height:54px;line-height:18px;" class="gname"> <a title="凌雪 四尺《金玉满堂》 北京美协会员" href="http://www.99zihua.com/product-14564.html">凌雪 四尺《金玉满堂》 北京美协会员</a> </div>
                                            <div class="clearfix">
                                                <div class="price textcenter"><em class="price1">￥560</em>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td width="100%;" class="item textcenter" id="item-6369">
                                        <a class="pic" style="width:80px;height:80px;" href="http://www.99zihua.com/product-10103.html" target="_blank"> <img style="width:80px;height:80px;" alt="张春奇四尺九鱼图《彩云追月》徐悲鸿纪念馆艺术中心理事" src="http://www.99zihua.com/images/goods/20150126/93c23cbdfc7ef9b8.jpg"> </a>
                                        <div class="info">
                                            <div style="height:54px;line-height:18px;" class="gname"> <a title="张春奇四尺九鱼图《彩云追月》徐悲鸿纪念馆艺术中心理事" href="http://www.99zihua.com/product-10103.html">张春奇四尺九鱼图《彩云追月》徐悲鸿纪念馆艺术中心理事</a> </div>
                                            <div class="clearfix">
                                                <div class="price textcenter"><em class="price1">￥2800</em>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td width="100%;" class="item textcenter" id="item-6369">
                                        <a class="pic" style="width:80px;height:80px;" href="http://www.99zihua.com/product-15037.html" target="_blank"> <img style="width:80px;height:80px;" alt="【已售】凌雪 三尺《金玉满堂》 北京美协会员" src="http://www.99zihua.com/images/goods/20170420/5147e49cfa240b8e.jpg"> </a>
                                        <div class="info">
                                            <div style="height:54px;line-height:18px;" class="gname"> <a title="【已售】凌雪 三尺《金玉满堂》 北京美协会员" href="http://www.99zihua.com/product-15037.html">【已售】凌雪 三尺《金玉满堂》 北京美协会员</a> </div>
                                            <div class="clearfix">
                                                <div class="price textcenter"><em class="price1">￥360</em>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td width="100%;" class="item textcenter" id="item-6369">
                                        <a class="pic" style="width:80px;height:80px;" href="http://www.99zihua.com/product-8243.html" target="_blank"> <img style="width:80px;height:80px;" alt="【已售】黑龙江民族书画院副院长齐根石三尺《神仙世界》" src="http://www.99zihua.com/images/goods/20131202/53d02594e8d892dd.jpg"> </a>
                                        <div class="info">
                                            <div style="height:54px;line-height:18px;" class="gname"> <a title="【已售】黑龙江民族书画院副院长齐根石三尺《神仙世界》" href="http://www.99zihua.com/product-8243.html">【已售】黑龙江民族书画院副院长齐根石三尺《神仙世界》</a> </div>
                                            <div class="clearfix">
                                                <div class="price textcenter"><em class="price1">￥0</em>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td width="100%;" class="item textcenter" id="item-6369">
                                        <a class="pic" style="width:80px;height:80px;" href="http://www.99zihua.com/product-6371.html" target="_blank"> <img style="width:80px;height:80px;" alt="【已售】当代著名禅意画家周自豪三尺斗方《中华太极图》(询价)" src="http://www.99zihua.com/images/goods/20130423/4825abbcacfd24bd.jpg"> </a>
                                        <div class="info">
                                            <div style="height:54px;line-height:18px;" class="gname"> <a title="【已售】当代著名禅意画家周自豪三尺斗方《中华太极图》(询价)" href="http://www.99zihua.com/product-6371.html">【已售】当代著名禅意画家周自豪三尺斗方《中华太极图》(询价)</a> </div>
                                            <div class="clearfix">
                                                <div class="price textcenter"><em class="price1">￥0</em>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td width="100%;" class="item textcenter" id="item-6369">
                                        <a class="pic" style="width:80px;height:80px;" href="http://www.99zihua.com/product-14180.html" target="_blank"> <img style="width:80px;height:80px;" alt="南海禅寺 妙林居士 三尺《跃过龙门便成龙》" src="http://www.99zihua.com/images/goods/20161220/f392b03d3b53d096.jpg"> </a>
                                        <div class="info">
                                            <div style="height:54px;line-height:18px;" class="gname"> <a title="南海禅寺 妙林居士 三尺《跃过龙门便成龙》" href="http://www.99zihua.com/product-14180.html">南海禅寺 妙林居士 三尺《跃过龙门便成龙》</a> </div>
                                            <div class="clearfix">
                                                <div class="price textcenter"><em class="price1">￥1200</em>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td width="100%;" class="item textcenter" id="item-6369">
                                        <a class="pic" style="width:80px;height:80px;" href="http://www.99zihua.com/product-14959.html" target="_blank"> <img style="width:80px;height:80px;" alt="周升达 四尺《富贵久鱼》 中国画院国画组长（询价）" src="http://www.99zihua.com/images/goods/20170413/8e888f384d832268.jpg"> </a>
                                        <div class="info">
                                            <div style="height:54px;line-height:18px;" class="gname"> <a title="周升达 四尺《富贵久鱼》 中国画院国画组长（询价）" href="http://www.99zihua.com/product-14959.html">周升达 四尺《富贵久鱼》 中国画院国画组长（询价）</a> </div>
                                            <div class="clearfix">
                                                <div class="price textcenter"><em class="price1">￥0</em>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="border-bot"></div>
            </div>
        </div>
        <div class="he10"></div>
        <div class="hotrank zhbk phcp">
            <div class="border3 ">
                <div class="border-top">
                    <h3>Danh Mục</h3> </div>
                <div class="border-body">
                    <ul>
                        <li><a href="#" target="_blank" title="郑庆年艺术相册">郑庆年艺术相册</a>
                        </li>
                        <li><a href="#" target="_blank" title="刘金河艺术相册">刘金河艺术相册</a>
                        </li>
                        <li><a href="#" target="_blank" title="著名书法大家刘艺先生病逝 享年86岁">著名书法大家刘艺先生病逝 享年86岁</a>
                        </li>
                        <li><a href="#" target="_blank" title="“秋水为神”刘艺书法脉络展亮相中国美术馆">“秋水为神”刘艺书法脉络展亮相中国美术馆</a>
                        </li>
                        <li><a href="#" target="_blank" title="王连笙：水墨丹青中品味东方独特韵味">王连笙：水墨丹青中品味东方独特韵味</a>
                        </li>
                        <li><a href="#" target="_blank" title="王洪锡艺术相册">王洪锡艺术相册</a>
                        </li>
                        <li><a href="#" target="_blank" title="王洪锡诗词节选">王洪锡诗词节选</a>
                        </li>
                        <li><a href="#" target="_blank" title="王洪锡文：关于草书多样性的思考">王洪锡文：关于草书多样性的思考</a>
                        </li>
                        <li><a href="#" target="_blank" title="王洪锡">王洪锡</a>
                        </li>
                        <li><a href="#" target="_blank" title="李立辰艺术相册">李立辰艺术相册</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
        <script>
            $$('.addcomment .title input').addEvents({
                'focus': function() {
                    this.removeClass('blur');
                },
                'blur': function() {
                    this.addClass('blur');
                }
            });
        </script>
        <script>
            var buycoutText = $E('#goods-viewer .buyinfo input[type=text]').addEvent('keydown', function(e) {
                if ($A(keyCodeFix).include(e.code).length > 25) {
                    e.stop();
                }
            });
            var getStore = function() {
                return $E('#goods-viewer .buyinfo .store').get('text').toInt()
            };
            buycoutText.addEvent('keyup', function(e) {
                if (getStore() < this.value) this.value = getStore();
                if (!this.value || this.value.toInt() < 1) this.value = 1;
            });
            /*购买数量调节*/
            $$('#goods-viewer .buyinfo .numadjust').addEvent('click', function(e) {
                var countText = $E('#goods-viewer .buyinfo input[name^=goods[num]');
                if (this.hasClass('increase')) {
                    countText.set('value', (countText.value.toInt() + 1).limit(1, getStore()));
                } else {
                    countText.set('value', (countText.value.toInt() - 1).limit(1, getStore()));
                }
                this.blur();
            });
            $$('#goods-viewer .buyinfo .numadjust').addEvents({
                'mousedown': function() {
                    this.addClass('active');
                },
                'mouseup': function() {
                    this.removeClass('active');
                }
            });
            /*hightline*/
            $$('#goods-viewer .hightline').addEvents({
                mouseenter: function() {
                    this.addClass('hightline-enter');
                },
                mouseleave: function() {
                    this.removeClass('hightline-enter');
                }
            });
        </script>
    </div>
    <div class="clear"></div>
</div>