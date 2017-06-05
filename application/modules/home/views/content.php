<div class="Main">
    <div class="wad1"></div>
    <div class="RightColumn">
        <div class="rtree">
            <div class="left_t"></div>
            <div class="left_b">
                <div class="border8 " id="widgets_16597">
                    <div class="border-top">
                        <h3>Loại tranh</h3> </div>
                    <div class="border-body">
                        <div class="GoodsCategoryWrap">
                            <ul class="kongjian">
                                <?php if(isset($listCategories)){ ?>
                                <?php foreach($listCategories as $category){ ?>
                                <li><a href="<?php echo base_url().'loai-tranh/'.$category['rewrite']; ?>.html" title="<?php echo $category['title']; ?>"><?php echo $category['name']; ?></a></li>
                                <?php } } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clear sidbg"></div>
                <div id="widgets_16596" class="border8 kj">
                    <div class="border-top">
                        <h3>Vị trí treo tranh</h3> </div>
                    <div class="border-body">
                        <div class="GoodsCategoryWrap">
                            <ul class="kongjian">
                                <?php if(isset($listPositions)){ ?>
                                <?php foreach($listPositions as $position){ ?>
                                <li><a href="<?php echo base_url().'vi-tri/'.$position['rewrite']; ?>.html" title="<?php echo $position['title']; ?>"><?php echo $position['name']; ?></a></li>
                                <?php } } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clear sidbg"></div>
                <div class="price_b">
                    <div class="border8 jiageqj" id="widgets_16598">
                        <div class="border-top">
                            <h3>Tìm theo giá</h3> </div>
                        <div class="border-body">
                            <div class="GoodsCategoryWrap">
                                <ul>
                                    <li class="c-cat-depth-1">
                                        <ul>
                                            <li class="c-cat-depth-2" style="padding-left:15px">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="#">Dưới 1tr</a> </td>
                                                            <td><a href="#">Từ 1 &rarr; 2tr</a> </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">Từ 2 &rarr; 3tr</a> </td>
                                                            <td><a href="#">Từ 3 &rarr; 5tr</a> </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">Từ 5 &rarr; 10tr</a> </td>
                                                            <td><a href="#">Trên 10tr</a> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="he10"></div>
        <div class="ph left">
            <div class="border1 hotrank" id="widgets_16599">
                <div class="border-top">
                    <h3>Xem nhiều nhất</h3> </div>
                <div class="border-body">
                    <div class="GoodsListWrap GoodsList GoodsShow">
                        <?php if(isset($listGems)) { ?>
                        <?php foreach($listGems as $gemItem){ ?>
                        <div class="relatedPro">
                            <a href="<?php echo base_url().$gemItem['pro_rewrite']."-".$gemItem['pro_id']; ?>.html" class="pic" style="height:50px;margin-bottom:0px">
                                <img src="<?php echo base_url().'uploads/products/thumb/'.$gemItem['pro_image'] ?>" alt="<?php echo $gemItem['pro_name']; ?>" title="<?php echo $gemItem['pro_name']; ?>" width="55" />
                            </a>
                            <div class="info">
                                <div class="gname">
                                    <a href="<?php echo base_url().$gemItem['pro_rewrite']."-".$gemItem['pro_id']; ?>.html" title="<?php echo $gemItem['pro_name']; ?>">
                                        <?php echo $gemItem[ 'pro_name']; ?> </a>
                                </div>
                                <div class="clearfix">
                                    <div class="price textcenter">Giá : <em class='price1'><?php echo $gemItem['pro_price'] ? number_format($gemItem['pro_price']).' VND' : 'Liên hệ'; ?></em> </div>
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
    </div>
    <div class="CenterColumn">
        <div class="cenflash">
            <!--div class="zbm"></div-->
            <div class="flash" style="margin-top:15px">
                <div id="ex_slide_widgets_16648">
                    <ol class="switchable-content">
                        <li class="switchable-panel">
                            <a href="#" rel="nofollow"><img alt="Tranh đá quý phong cảnh châu âu" src="images/slide/1.jpg" width="506px" height="298px"></img>
                            </a>
                        </li>
                        <li class="switchable-panel">
                            <a href="#" rel="nofollow"><img alt="Tranh đá quý ngôi nhà hạnh phúc" src="images/slide/2.jpg" width="506px" height="298px"></img>
                            </a>
                        </li>
                        <li class="switchable-panel">
                            <a href="#" rel="nofollow"><img alt="Tranh đá quý mã đáo thành công" src="images/slide/3.jpg" width="506px" height="298px"></img>
                            </a>
                        </li>
                        <li class="switchable-panel">
                            <a href="#" rel="nofollow"><img alt="Tranh đá quý làng quê việt" src="images/slide/4.jpg" width="506px" height="298px"></img>
                            </a>
                        </li>
                    </ol>
                    <ul class="switchable-triggerBox">
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                    </ul>
                </div>
                <script type="text/javascript">
                    new Switchable('ex_slide_widgets_16648', {
                        effect: 'fade',
                        autoplay: true,
                        duration: 500,
                        interval: 5000,
                        eventType: 'mouse',
                        pauseOnHover: true
                    });
                </script>
            </div>
        </div>
        <div class="LeftColumn">
            <link rel="stylesheet" href="<?php echo base_url();?>public/styles/style.min.css" type="text/css">
            <div class="gonggao1" id="gonggao1">
                <p class="wk-lou-title">&nbsp;&nbsp;Khuyến<font color="#ca0204"></font>Mãi<a href="<?php echo base_url(); ?>san-pham-khuyen-mai.html">Xem thêm</a> </p>
                <div class="wk-lou-time">
                    <div style="float:left;">Thời gian kết thúc</div>
                    <div id='end_time' style='float:left'></div>
                    <div style='float:left' id='hm'></div>
                </div>
                <ol class="switchable-content">
                    <?php if(isset($listProductSales)) { ?>
                    <?php foreach($listProductSales as $sales){ ?>
                    <li class="switchable-panel wk-switchable-panel">
                       <a href="<?php echo base_url().$sales['pro_rewrite']."-".$sales['pro_id']; ?>.html" class="wk-a" title="<?php echo $sales['pro_name']; ?>">
                           <img alt="<?php echo $sales['pro_name']; ?>" src="<?php echo base_url().'uploads/products/thumb/'.$sales['pro_image'] ?>" />
                       </a>
                       <p class="wk-lou-name" style="bottom:20px;">
                           <a href="<?php echo base_url(); ?>san-pham-khuyen-mai.html">Sản phẩm khuyến mại</a >
                       </p>
                       <p class="wk-lou-name">
                           <span>Giá <font><?php echo number_format($sales['pro_sales_price']); ?> VND</font> &nbsp;&nbsp; <del><?php echo number_format($sales['pro_price']); ?> VND</del></span>
                       </p>
                    </li>
                    <?php } } ?>
                </ol>
                <a id="wk-prev"><img class="prev" src="<?php echo base_url(); ?>public/images/1.gif"></a >
                <a id="wk-next"><img class="next" src="<?php echo base_url(); ?>public/images/2.gif"></a > 
                <ul class="switchable-triggerBox" style="display:none">
                   <li class=""></li>
                   <li class=""></li>
                   <li class=""></li>
                   <li class=""></li>
                   <li class=""></li>
                   <li class=""></li>
                </ul>
                <script type="text/javascript">
                    new Switchable('gonggao1',{
                        effect:'scrollx',
                        autoplay:true,
                        duration:500,
                        interval:5000,
                        haslrbtn:true,  
                        prev:'.prev',  
                        next:'.next',
                        eventType:'mouse',
                        pauseOnHover:true
                    });
                </script>
                <script src="<?php echo base_url();?>public/scripts/countdown.js"></script>
                <script type="text/javascript">
                    new countdown().one_init('end_time'); 		
                    function getHm(){
                        var tdiv = document.getElementById('end_time').innerHTML;
                        if(tdiv == 'Đã kết thúc.' || tdiv == 'Không có khuyến mại.'){
                            document.getElementById('hm').innerHTML=" ";
                        }else{
                            setTimeout("getHm()",10); 		
                            var c=new Date();
                            var hm=((c.getMilliseconds())%100);
                            document.getElementById('hm').innerHTML="."+hm;
                        }			
                    }
                    setTimeout("getHm()",1000); 
                </script> 
					</div> 
					<div class="gonggao wk-lou-m-b">
						<ul>
                            <li><a href="#" title="Triển lãm tranh đá quý tại hà nội">Triển lãm tranh đá quý tại hà nội</a><span class="tip"></span> </li>
                            <li><a href="#" title="Treo tranh phòng khách hợp phong thủy">Treo tranh phòng khách hợp phong thủy</a> </li>
                            <li><a href="#" title="Tranh treo phòng khách đẹp">Tranh treo phòng khách đẹp</a> </li>
                            <li><a href="#" title="Mua tranh đá quý ở đâu tốt tại hà nội">Mua tranh đá quý ở đâu tốt tại hà nội</a> </li>
                        </ul>
                    </div>
        </div>
        <div class="clear"></div>
        <div class="he10"></div>
        <div class="hdcp">
            <div class="border2 cuxiao" id="widgets_16602">
                <div class="border-top">
                    <h3></h3> </div>
                <div class="border-body clearfix">
                    <script type="text/javascript">
                        var good_list = new Class({
                            divSrc: '',
                            divSrc2: '',
                            initialize: function(div1, div2) {
                                this.divSrc = div1;
                                this.divSrc2 = div2;
                                this.tab = 'ttp_widgets_16602';
                            },
                            changeTableing: function(type, div) {
                                var i;
                                for (i = 0; i < 4; i++) {
                                    if (i == type) {
                                        $(this.divSrc2 + i).setStyles({
                                            'display': ''
                                        });
                                        $('widgets_16602_more_' + i).setStyles({
                                            'display': ''
                                        });
                                        $(this.tab + i).addClass('current');
                                    } else {
                                        $(this.divSrc2 + i).setStyles({
                                            'display': 'none'
                                        });
                                        $('widgets_16602_more_' + i).setStyles({
                                            'display': 'none'
                                        });
                                        $(this.tab + i).removeClass('current');
                                    }
                                }
                            }
                        });
                        var ef_widgets_16602 = new good_list('top_widgets_16602', 'widgets_16602_list');
                    </script>
                    <style>
                        .itemsWrap {
                            *display: inline;
                            float: left;
                            overflow: hidden;
                        }
                    </style>
                    <div id="top_widgets_16602" class="GoodsList-Tabs">
                        <div style="float:left" id="ttp_widgets_166020" onclick="ef_widgets_16602.changeTableing(0)" class="current"><span>Xem nhiều</span>&nbsp;</div>
                        <div style="float:left" id="ttp_widgets_166021" onclick="ef_widgets_16602.changeTableing(1,'widgets_16602_more1')"><span>Mới nhất</span>&nbsp;</div>
                        <div style="float:left" id="ttp_widgets_166022" onclick="ef_widgets_16602.changeTableing(2,'widgets_16602_more2')"><span>Đẹp nhất</span>&nbsp;</div>
                        <div style="float:left" id="ttp_widgets_166023" onclick="ef_widgets_16602.changeTableing(3,'widgets_16602_more3')"><span>Chạy nhất</span>&nbsp;</div>
                    </div>
                    <div class="GoodsListWrap">
                        <div class="GoodsList">
                            <div id="widgets_16602_list0">
                                <?php if(isset($listAllPro)) { ?>
                                <?php $i=1 ; foreach($listAllPro as $allPro){ ?>
                                <div class="itemsWrap<?php if($i % 5 == 0){ echo ' last';} ?>" product="<?php echo $allPro['pro_id'] ?>" style="width:19%;">
                                    <div class="item">
                                        <div class="goodsImg">
                                            <a href="<?php echo base_url().$allPro['pro_rewrite']."-".$allPro['pro_id']; ?>.html" title="<?php echo $allPro['pro_name']; ?>">
												<img src="<?php echo base_url().'uploads/products/thumb/'.$allPro['pro_image'] ?>" width="136" alt="<?php echo $allPro['pro_name']; ?>">
                                            </a>
                                        </div>
                                        <h6><a href="<?php echo base_url().$allPro['pro_rewrite']."-".$allPro['pro_id']; ?>.html" title=""><?php echo $allPro['pro_name'] ?></a></h6>
                                        <ul>
                                            <li><span class="price0">Giá : </span><span class="price1" style="color:default;"><?php echo $allPro['pro_price'] ? number_format($allPro['pro_price']).' VND' : 'Liên hệ'; ?></span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <?php if($i % 5==0 ){ echo '<div class="clear" style="padding:3px"></div>';} ?>
                                <?php ++$i; } } ?>
                                <div class="clear"></div>
                            </div>
                            <div id="widgets_16602_more_0" class="more" style=""> </div>
                            <div id="widgets_16602_list1" style="display:none"></div>
                            <div id="widgets_16602_more_1" class="more" style="display:none;"></div>
                            <div id="widgets_16602_list2" style="display:none"></div>
                            <div id="widgets_16602_more_2" class="more" style="display:none;"> </div>
                            <div id="widgets_16602_list3" style="display:none"></div>
                            <div id="widgets_16602_more_3" class="more" style="display:none;"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="he10"></div>
    </div>
    <div class="he10"></div>
    <div class="zhuangs">
        <div class="zh_top">
            <div class="zhl">
                <h2>Tranh Đá Quý</h2>
            </div>
            <div class="zhr">
                <a href="#">Phòng khách</a>
                <a href="#">Nhà hàng</a>
                <a href="#">Cửa vào</a>
                <a href="#">Phòng ngủ</a>
                <a href="#">Hành lang</a>
                <a href="#">Văn phòng</a>
                <a href="#">Khách sạn</a>
                <a href="#">Treo tường</a>
            </div>
        </div>
        <div class="clear"></div>
        <div class="zh_midl"><img alt="Tranh đá quý lọ hoa" src="images/hoa-tuoi.jpg"> </div>
        <div class="zh_midz">
            <div id="ex_slide_widgets_16649" class="ex_slide_widgets">
                <ol class="switchable-content">
                    <li class="switchable-panel">
                        <a href="#" rel="nofollow"><img alt="" src="images/slide/11.jpg" width="490" height="271" /> </a>
                    </li>
                    <li class="switchable-panel">
                        <a href="#" rel="nofollow"><img alt="" src="images/slide/22.jpg" width="490" height="271" /> </a>
                    </li>
                </ol>
                <ul class="switchable-triggerBox">
                    <li>1</li>
                    <li>2</li>
                </ul>
            </div>
            <script type="text/javascript">
                new Switchable('ex_slide_widgets_16649', {
                    effect: 'scrollx',
                    autoplay: true,
                    duration: 500,
                    interval: 3000,
                    eventType: 'mouse',
                    pauseOnHover: true
                });
            </script>
        </div>
        <div class="zh_midr">
            <div class="border4 " id="widgets_16609">
                <div class="border-top">
                    <h3>Tranh đá quý đẹp</h3>
                </div>
                <div class="border-body">
                    <div class="rank_list">
                        <ul class="max_sales">
                            <?php if(isset($listGems)) { ?>
                            <?php $i = 1; foreach($listGems as $key => $gemItem){ ?>
                            <li class="r<?php echo $i; ?>" id="r_widgets_16609<?php echo $key; ?>" onmouseover="wa_widgets_16609.changeTableing(<?php echo $key; ?>)"><span class="num"><?php echo $i; ?></span>
                                <a href="<?php echo base_url().$gemItem['pro_rewrite']."-".$gemItem['pro_id']; ?>.html">
                                    <img width="50" src="<?php echo base_url().'uploads/products/thumb/'.$gemItem['pro_image'] ?>" alt="<?php echo $gemItem['pro_name']; ?>" /><?php echo $gemItem['pro_name']; ?>
                                </a>
                                <p class="price"><span><em><?php echo $gemItem['pro_price'] ? number_format($gemItem['pro_price']) : 'Liên hệ'; ?></em></span> </p>
                            </li>
                            <?php ++$i; } } ?>
                        </ul>
                    </div>
                    <script type="text/javascript">
                        var max_list = new Class({
                            divSrc: '',
                            initialize: function(div) {
                                this.divSrc = div;
                                this.tab = 'r_widgets_16609';
                                $('r_widgets_166090').addClass('cuurent');
                            },
                            changeTableing: function(type) {
                                var i;
                                for (i = 0; i < 6; i++) {
                                    if (i == type) {
                                        $(this.tab + i).addClass('cuurent');
                                    } else {
                                        $(this.tab + i).removeClass('cuurent');
                                    }
                                }
                            }
                        });
                        var wa_widgets_16609 = new max_list('max_sales');
                    </script>
                </div>
                <div class="border-bot"></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="zh_bot">
            <div class="GoodsListWrap GoodsList GoodsShow">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr valign="top">
                            <?php if(isset($listGems)) { ?>
                            <?php foreach($listGems as $gemItem){ ?>
                            <td id="item-<?php echo $gemItem['pro_id']; ?>" width="16%;" class="item textcenter">
                                <a href="<?php echo base_url().$gemItem['pro_rewrite']."-".$gemItem['pro_id']; ?>.html" class="thumb-img preview" class='pic'>
									<img src="<?php echo base_url().'uploads/products/thumb/'.$gemItem['pro_image'] ?>" alt="<?php echo $gemItem['pro_name']; ?>" style="max-width:146px;"/>
								</a>
                                <div class="info">
                                    <div class="gname">
                                        <a href="<?php echo base_url().$gemItem['pro_rewrite']."-".$gemItem['pro_id']; ?>.html" title="<?php echo $gemItem['pro_name']; ?>">
                                            <?php echo $gemItem[ 'pro_name']; ?> </a>
                                    </div>
                                    <div class="clearfix">
                                        <div class="price textcenter">Size :
                                            <?php echo $gemItem[ 'pro_size']; ?> cm</div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="price textcenter">Giá : <em class='price1'><?php echo $gemItem['pro_price'] ? number_format($gemItem['pro_price']).' VND' : 'Liên hệ'; ?></em> </div>
                                    </div>
                                </div>
                            </td>
                            <?php } } ?> </tr>
                    </tbody>
                </table>
            </div>
            <div class="clear"></div>
            <div class="more"> </div>
        </div>
    </div>
    <div class="he10"></div>
    <div class="zhuangs sczh">
        <div class="zh_top">
            <div class="zhl">
                <h2>Tranh Gạo</h2>
            </div>
            <div class="zhr">
                <a href="#">Tranh gạo đẹp</a> <a href="#">Tranh gạo làm quà tặng</a>
            </div>
        </div>
        <div class="clear"></div>
        <div class="zh_midl">
            <img alt="Tranh gạo chân dung" src="<?php echo base_url(); ?>public/images/slide/tranh-gao-chan-dung.jpg" />
        </div>
        <div class="zh_midz">
            <div id="ex_slide_widgets_16650" class="ex_slide_widgets">
                <ol class="switchable-content">
                    <li class="switchable-panel"> <a href="#" rel="nofollow">
							<img alt="Tranh gạo chân dung khách hàng" src="<?php echo base_url(); ?>public/images/slide/tranh-gao.jpg" width="490" height="271" />
                        </a> </li>
                    <li class="switchable-panel"> <a href="#" rel="nofollow">
							<img alt="Tranh gạo mang đi nước ngoài" src="<?php echo base_url(); ?>public/images/slide/tranh-gao-viet-nam.jpg" width="490" height="271" />
                        </a> </li>
                </ol>
                <ul class="switchable-triggerBox">
                    <li>1</li>
                    <li>2</li>
                </ul>
            </div>
            <script type="text/javascript">
                new Switchable('ex_slide_widgets_16650', {
                    effect: 'scrollx',
                    autoplay: true,
                    duration: 500,
                    interval: 2000,
                    eventType: 'mouse',
                    pauseOnHover: true
                });
            </script>
        </div>
        <div class="zh_midr">
            <div class="border4 " id="widgets_16615">
                <div class="border-top">
                    <h3>Tranh tặng người nước ngoài</h3> </div>
                <div class="border-body">
                    <div class="rank_list">
                        <ul class="max_sales">
                            <?php if(isset($listRices)) { ?>
                            <?php $i = 1; foreach($listRices as $key => $riceItem){ ?>
                            <li class="r<?php echo $i; ?>" id="r_widgets_16615<?php echo $key; ?>" onmouseover="wa_widgets_16615.changeTableing(<?php echo $key; ?>)"><span class="num"><?php echo $i; ?></span>
                                <a href="<?php echo base_url().$riceItem['pro_rewrite']."-".$riceItem['pro_id']; ?>.html" title="<?php echo $riceItem[ 'pro_name']; ?>">
                                    <img width="50" src="<?php echo base_url().'uploads/products/thumb/'.$riceItem['pro_image'] ?>" alt="<?php echo $riceItem[ 'pro_name']; ?>" /><?php echo $riceItem['pro_name']; ?>...
                                </a>
                                <p class="price"><span><em><?php echo $riceItem['pro_price'] ? number_format($riceItem['pro_price']) : 'Liên hệ'; ?></em></span> </p>
                            </li>
                            <?php ++$i; } } ?>
                        </ul>
                    </div>
                    <script type="text/javascript">
                        var max_list = new Class({
                            divSrc: '',
                            initialize: function(div) {
                                this.divSrc = div;
                                this.tab = 'r_widgets_16615';
                                $('r_widgets_166150').addClass('cuurent');
                            },
                            changeTableing: function(type) {
                                var i;
                                for (i = 0; i < 6; i++) {
                                    if (i == type) {
                                        $(this.tab + i).addClass('cuurent');
                                    } else {
                                        $(this.tab + i).removeClass('cuurent');
                                    }
                                }
                            }
                        });
                        var wa_widgets_16615 = new max_list('max_sales');
                    </script>
                </div>
                <div class="border-bot"></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="zh_bot">
            <div class="GoodsListWrap GoodsList GoodsShow">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr valign="top">
                            <?php if(isset($listRices)) { ?>
                            <?php foreach($listRices as $riceItem){ ?>
                            <td id="item-<?php echo $riceItem['pro_id']; ?>" width="16%;" class="item textcenter">
                                <a href="<?php echo base_url().$riceItem['pro_rewrite']."-".$riceItem['pro_id']; ?>.html" class="thumb-img preview" class='pic'>
									<img src="<?php echo base_url().'uploads/products/thumb/'.$riceItem['pro_image'] ?>" alt="<?php echo $riceItem['pro_name']; ?>" style="max-width:146px;"/>
								</a>
                                <div class="info">
                                    <div class="gname">
                                        <a href="<?php echo base_url().$riceItem['pro_rewrite']."-".$riceItem['pro_id']; ?>.html" title="<?php echo $riceItem['pro_name']; ?>">
                                            <?php echo $riceItem['pro_name']; ?>
                                        </a>
                                    </div>
                                    <div class="clearfix">
                                        <div class="price textcenter">Size :
                                            <?php echo $riceItem['pro_size']; ?> cm
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="price textcenter">Giá : <em class='price1'><?php echo $riceItem['pro_price'] ? number_format($riceItem['pro_price']).' VND' : 'Liên hệ'; ?></em> </div>
                                    </div>
                                </div>
                            </td>
                            <?php } } ?> </tr>
                    </tbody>
                </table>
            </div>
            <div class="clear"></div>
            <div class="more"> </div>
        </div>
    </div>
    <div class="he10"></div>
    <div class="zhuangs lpzh">
        <div class="zh_top">
            <div class="zhl">
                <h2>Tranh cát</h2> </div>
            <div class="zhr"> <a href="#">Tranh cát phong cảnh</a> <a href="#">Tranh cát để bàn</a> <a href="#">Quà tặng người nước ngoài</a> </div>
        </div>
        <div class="clear"></div>
        <div class="zh_midl"> <img src="<?php echo base_url(); ?>public/images/tranh-cat-chan-dung.png" alt="Tranh cát chân dung" /> </div>
        <div class="zh_midz">
            <div id="ex_slide_widgets_16651" class="ex_slide_widgets">
                <ol class="switchable-content">
                    <li class="switchable-panel">
                        <a href="#" rel="nofollow">
							<img alt="" src="<?php echo base_url(); ?>public/images/slide/tranh-cat-chan-dung.jpg" width="490" height="271" />
                        </a> 
                    </li>
                    <li class="switchable-panel">
                        <a href="#" rel="nofollow">
                            <img alt="" src="<?php echo base_url(); ?>public/images/slide/tranh-cat.jpg" width="490" height="271" />
                        </a>
                    </li>
                </ol>
                <ul class="switchable-triggerBox">
                    <li>1</li>
                    <li>2</li>
                </ul>
            </div>
            <script type="text/javascript">
                new Switchable('ex_slide_widgets_16651', {
                    effect: 'scrollx',
                    autoplay: true,
                    duration: 500,
                    interval: 2000,
                    eventType: 'mouse',
                    pauseOnHover: true
                });
            </script>
        </div>
        <div class="zh_midr">
            <div class="border4 " id="widgets_16621">
                <div class="border-top">
                    <h3>Tranh cát nổi bật</h3> </div>
                <div class="border-body">
                    <div class="rank_list">
                        <ul class="max_sales">
                            <?php if(isset($listSand)) { ?>
                            <?php $i = 1; foreach($listSand as $key => $sandItem){ ?>
                            <li class="r<?php echo $i; ?>" id="r_widgets_16621<?php echo $key; ?>" onmouseover="wa_widgets_16621.changeTableing(<?php echo $key; ?>)"><span class="num"><?php echo $i; ?></span>
                                <a href="<?php echo base_url().$sandItem['pro_rewrite']."-".$sandItem['pro_id']; ?>.html">
                                    <img width="50" src="<?php echo base_url().'uploads/products/thumb/'.$sandItem['pro_image'] ?>" alt="<?php echo $sandItem['pro_name']; ?>" /><?php echo $sandItem['pro_name']; ?>
                                </a>
                                <p class="price"><span><em><?php echo $sandItem['pro_price'] ? number_format($sandItem['pro_price']) : 'Liên hệ'; ?></em></span> </p>
                            </li>
                            <?php ++$i; } } ?>
                        </ul>
                    </div>
                    <script type="text/javascript">
                        var max_list = new Class({
                            divSrc: '',
                            initialize: function(div) {
                                this.divSrc = div;
                                this.tab = 'r_widgets_16621';
                                $('r_widgets_166210').addClass('cuurent');
                            },
                            changeTableing: function(type) {
                                var i;
                                for (i = 0; i < 6; i++) {
                                    if (i == type) {
                                        $(this.tab + i).addClass('cuurent');
                                    } else {
                                        $(this.tab + i).removeClass('cuurent');
                                    }
                                }
                            }
                        });
                        var wa_widgets_16621 = new max_list('max_sales');
                    </script>
                </div>
                <div class="border-bot"></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="zh_bot">
            <div class="GoodsListWrap GoodsList GoodsShow">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr valign="top">
                            <?php if(isset($listSand)) { ?>
                            <?php foreach($listSand as $sandItem){ ?>
                            <td id="item-<?php echo $sandItem['pro_id']; ?>" width="16%;" class="item textcenter">
                                <a href="<?php echo base_url().$sandItem['pro_rewrite']."-".$sandItem['pro_id']; ?>.html" class="thumb-img preview" class='pic'>
									<img src="<?php echo base_url().'uploads/products/thumb/'.$sandItem['pro_image'] ?>" alt="<?php echo $sandItem['pro_name']; ?>" style="max-width:146px;"/>
								</a>
                                <div class="info">
                                    <div class="gname">
                                        <a href="<?php echo base_url().$sandItem['pro_rewrite']."-".$sandItem['pro_id']; ?>.html" title="<?php echo $sandItem['pro_name']; ?>">
                                            <?php echo $sandItem[ 'pro_name']; ?>
                                        </a>
                                    </div>
                                    <div class="clearfix">
                                        <div class="price textcenter">Size :
                                            <?php echo $sandItem[ 'pro_size']; ?> cm
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="price textcenter">Giá : <em class='price1'><?php echo $sandItem['pro_price'] ? number_format($sandItem['pro_price']).' VND' : 'Liên hệ'; ?></em> </div>
                                    </div>
                                </div>
                            </td>
                            <?php } } ?> </tr>
                    </tbody>
                </table>
            </div>
            <div class="clear"></div>
            <div class="more"> </div>
        </div>
    </div>
</div>