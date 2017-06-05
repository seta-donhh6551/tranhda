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
                                <img src="<?php echo base_url().'uploads/products/'.$result['pro_image'] ?>" alt="<?php echo $result['pro_name']; ?>" style="width:420px;" />
                            </a>
                            <div class="goods-pic-magnifier" style="width: 109px;height:70px;visibility:visible; zoom:1; opacity: 0.3; top: 40%; left: 40%;"> &nbsp; </div>
                        </div>
                        <div class="picscroll">
                            <table class="picscroll">
                                <tbody>
                                    <tr>
                                        <td width="5%" class="scrollarrow toleft" title="Pre" style="visibility: visible;">&nbsp; </td>
                                        <td width="90%">
                                            <div class="goods-detail-pic-thumbnail pics">
                                                <center>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="current" img_id="46995">
                                                                    <div class="uparrow"></div>
                                                                    <a href="javascript:void(0)" imginfo="{small:'<?php echo base_url().'uploads/products/'.$result['pro_image'] ?>',big:'<?php echo base_url().'uploads/products/'.$result['pro_image'] ?>'}">
                                                                        <img src="<?php echo base_url().'uploads/products/thumb/'.$result['pro_image'] ?>" alt="<?php echo $result['pro_name']; ?>" width="55" height="55" />
                                                                    </a>
                                                                </td>
                                                                <td img_id="46998">
                                                                    <div class="uparrow"></div>
                                                                    <a href="javascript:void(0)" imginfo="{small:'http://www.99zihua.com/images/goods/20170502/240736f3f8ac85aa.jpg',big:'http://www.99zihua.com/images/goods/20170502/22e7be41365ce0fb.jpg'}"> <img src="http://www.99zihua.com/images/goods/20170502/2a0a19f6f108fa9a.jpg" alt="吴显刚 大三尺《放棹听风图》 贵州七星关美协主席" width="55" height="55"> </a>
                                                                </td>
                                                                <td img_id="46996">
                                                                    <div class="uparrow"></div>
                                                                    <a href="javascript:void(0)" imginfo="{small:'http://www.99zihua.com/images/goods/20170502/1a3440dc0d9bd7d9.jpg',big:'http://www.99zihua.com/images/goods/20170502/753165d94de46a7a.jpg'}"> <img src="http://www.99zihua.com/images/goods/20170502/efc7caf94e62ace6.jpg" alt="吴显刚 大三尺《放棹听风图》 贵州七星关美协主席" width="55" height="55"> </a>
                                                                </td>
                                                                <td img_id="46997">
                                                                    <div class="uparrow"></div>
                                                                    <a href="javascript:void(0)" target="_blank" imginfo="{small:'http://www.99zihua.com/images/goods/20170502/6936159257303c2f.jpg',big:'http://www.99zihua.com/images/goods/20170502/d0c7687eb261f6cf.jpg'}"> <img src="http://www.99zihua.com/images/goods/20170502/ca83fbcf80b64107.jpg" alt="吴显刚 大三尺《放棹听风图》 贵州七星关美协主席" width="55" height="55"> </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </center>
                                            </div>
                                        </td>
                                        <td width="5%" class="scrollarrow toright" title="Next" style="visibility: visible;">&nbsp; </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <script type="text/javascript">
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
                                    'hover': function() {
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
                                <table width="100%">
                                    <tbody>
                                        <tr class="spec-item specItem">
                                            <td style="width:10%; white-space:nowrap;padding-right:10px;vertical-align:middle;"><span><em>Kèm theo tranh</em>：</span>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <a rel="nofollow" href="javascript:void(0)"> <span><nobr>Khung và hộp đựng</nobr></span> <i title="点击取消选择">&nbsp;</i> </a>
                                                    </li>
                                                    <li>
                                                        <a rel="nofollow" href="javascript:void(0)"> <span><nobr>Khung tranh</nobr></span> <i title="点击取消选择">&nbsp;</i> </a>
                                                    </li>
                                                    <li>
                                                        <a rel="nofollow" href="javascript:void(0)"> <span><nobr>Hộp đựng</nobr></span> <i title="点击取消选择">&nbsp;</i> </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="btnBar clearfix" style="visibility:visible;">
                        <div class="floatLeft">
                            <input class="actbtn btn-buy" value="Thêm vào giỏ hàng" type="submit" style="cursor:pointer;">
                        </div>
                        <div class="floatleft">
                            <ul>
                                <li class="daog" style="position: relative;">
                                    <a rel="nofollow" target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1291357583&amp;site=qq&amp;menu=yes">
                                        <img border="0" src="http://wpa.qq.com/pa?p=2:1291357583:51" alt="点击这里给我发消息" title="点击这里给我发消息">
                                    </a>
                                    <img id="wxan" border="0" src="<?php echo base_url(); ?>/public/images/wxan.png" alt="微信咨询" style="cursor: pointer" onmouseover="$('ewm').show();" onmouseout="$('ewm').hide();" />
                                    <img id="ewm" class="ewm" border="0" src="<?php echo base_url(); ?>/public/images/ewm.png" alt="微信咨询二维码" style="display:none; position: absolute; top: 15px; left: 80px;" />
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
                    <li>Kích thước：<?php echo $result['pro_size'] ?>cm (Chưa bao gồm khung)</li>
                    <li>Chất liệu：<?php echo $material; ?></li>
                    <li>Năm sản xuất：<?php echo date('Y'); ?></li>
                </ul>
                <p><font color="#cc0000">【<span style="font-weight:bold;">Giới thiệu</span>】</font><?php echo $result['pro_info'] ? $result['pro_info'] : ""; ?></p>
                <p style="text-align: center;">
                    <a target="_blank" href="<?php echo base_url().'uploads/products/'.$result['pro_image'] ?>">
                        <img src="<?php echo base_url().'uploads/products/'.$result['pro_image'] ?>" alt="<?php echo $result['pro_name']; ?>" style="max-width:696px;" />
                    </a>
                </p>
                <div style="padding:0px 4px">
                    <h3>VỊ TRÍ TREO TRANH</h3>
                    <p>Tùy vào từng mẫu tranh mà bạn nên treo đúng vị trí để làm toát lên được vẻ đẹp của ngôi nhà</p>
                </div>
                <p align="center">
                    <img src="http://www.99zihua.com/99zihuahome888/upload/gpic/20170413/8f497b59d6f10786c9d482f52ef425c1.jpg">
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
                    <h3>Sản Phẩm Tương Tự</h3>
                </div>
                <div class="border-body">
                    <div class="GoodsListWrap GoodsList GoodsShow" style="border:1px solid #e2e2e2;">
                        <?php if(isset($relatedProducts)){ ?>
                        <?php foreach($relatedProducts as $relatedPro){ ?>
                        <div class="relatedPro">
                            <a class="pic" style="width:80px;height:65px;" href="<?php echo base_url().$relatedPro['pro_rewrite']."-".$relatedPro['pro_id']; ?>.html">
                                <img style="width:80px;" alt="<?php echo $relatedPro['pro_name']; ?>" src="<?php echo base_url()."uploads/products/thumb/".$relatedPro['pro_image']; ?>" />
                            </a>
                            <div class="info">
                                <div class="gname">
                                    <a title="<?php echo $relatedPro['pro_name']; ?>" href="<?php echo base_url().$relatedPro['pro_rewrite']."-".$relatedPro['pro_id']; ?>.html"><?php echo $relatedPro['pro_name']; ?></a>
                                </div>
                                <div class="clearfix">
                                    <div class="price textcenter"><em class="price1"><?php echo $relatedPro['pro_price'] ? number_format($relatedPro['pro_price']).' VND' : 'Liên hệ'; ?></em>
                                    </div>
                                </div>
                            </div>
                            <div style="clear:left"></div>
                        </div>
                        <?php } } ?>
                    </div>
                </div>
                <div class="border-bot"></div>
            </div>
        </div>
        <div class="he10"></div>
        <div class="hotrank zhbk phcp">
            <div class="border3 ">
                <div class="border-top">
                    <h3>Danh Mục</h3>
                </div>
                <div class="border-body">
                    <ul>
                        <li><a href="<?php echo base_url(); ?>loai-tranh/tranh-da-quy.html" title="Tranh đá quý">Tranh đá quý</a></li>
                        <li><a href="<?php echo base_url(); ?>loai-tranh/tranh-gao.html" title="Tranh gạo">Tranh gạo</a></li>
                        <li><a href="<?php echo base_url(); ?>loai-tranh/tranh-cat.html" title="Tranh cát">Tranh cát</a></li>
                        <li><a href="<?php echo base_url(); ?>vi-tri/phong-khach.html"  title="Tranh treo phòng khách">Tranh treo phòng khách</a></li>
                        <li><a href="<?php echo base_url(); ?>vi-tri/nha-hang.html"  title="Tranh cho nhà hàng">Tranh cho nhà hàng</a></li>
                        <li><a href="<?php echo base_url(); ?>vi-tri/phong-ngu.html" title="Tranh treo phòng ngủ">Tranh treo phòng ngủ</a></li>
                        <li><a href="<?php echo base_url(); ?>vi-tri/cua-vao.html"  title="Tranh treo lối cửa vào">Tranh treo lối cửa vào</a></li>
                        <li><a href="<?php echo base_url(); ?>vi-tri/hang-lang.html"  title="Tranh treo hành lang">Tranh treo hành lang</a></li>
                        <li><a href="<?php echo base_url(); ?>vi-tri/van-phong.html" title="Tranh cho văn phòng">Tranh cho văn phòng</a></li>
                        <li><a href="<?php echo base_url(); ?>vi-tri/khach-san.html"  title="Tranh treo trong khách sạn">Tranh cho khách sạn</a></li>
                        <li><a href="<?php echo base_url(); ?>vi-tri/tranh-de-ban.html"  title="Tranh để bàn">Tranh để bàn</a></li>
                        <li><a href="<?php echo base_url(); ?>vi-tri/treo-tuong.html" title="Tranh treo tường">Tranh treo tường</a></li>
                        <li><a href="<?php echo base_url(); ?>phong-canh.html" title="Tranh phong cảnh">Tranh phong cảnh</a></li>
                        <li><a href="<?php echo base_url(); ?>chan-dung.html" title="Tranh chân dung">Tranh chân dung</a></li>
                        <li><a href="<?php echo base_url(); ?>phong-thuy.html" title="Tranh phong thủy">Tranh phong thủy</a></li>
                        <li><a href="<?php echo base_url(); ?>thu-phap.html" title="Tranh thư pháp">Tranh thư pháp</a></li>
                        <li><a href="<?php echo base_url(); ?>dong-vat.html" title="Tranh động vật">Tranh động vật</a></li>
                        <li><a href="<?php echo base_url(); ?>hoa.html" title="Tranh hoa">Tranh hoa</a></li>
                        <li><a href="<?php echo base_url(); ?>tu-quy.html" title="Tranh tứ quý">Tranh tứ quý</a></li>
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