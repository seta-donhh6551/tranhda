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
                                <li><a href="#" title="Tranh đá quý">Tranh đá quý</a> </li>
                                <li><a href="#" title="Tranh gạo">Tranh gạo</a> </li>
                                <li><a href="#" title="Tranh cát">Tranh cát</a> </li>
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
                                <li><a href="#" title="Tranh treo phòng khách">Phòng khách</a> </li>
                                <li><a href="#" title="Tranh cho treo hàng">Nhà hàng</a> </li>
                                <li><a href="#" title="Tranh treo lối cửa vào">Cửa vào</a> </li>
                                <li><a href="#" title="Tranh treo phòng ngủ">Phòng ngủ</a> </li>
                                <li><a href="#" title="Tranh treo hàng lang">Hành lang</a> </li>
                                <li><a href="#" title="Tranh treo văn phòng làm việc">Văn phòng</a> </li>
                                <li><a href="#" title="Tranh treo cho nhà hàng khách sạn">Khách sạn</a> </li>
                                <li><a href="#" title="Tranh treo tường">Treo tường</a> </li>
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
                <p class="wk-lou-title">&nbsp;&nbsp;Khuyến<font color="#ca0204"></font>Mãi<a href="#" target="_blank">Xem thêm</a> </p>
                <div class="wk-lou-time">
                    <div style="float:left;">Thời gian kết thúc</div>
                    <div id='end_time' style='float:left'></div>
                    <div style='float:left' id='hm'></div>
                </div>
                <ol class="switchable-content">
                    <li class="switchable-panel wk-switchable-panel">
                        <a href="#" class="wk-a" target="_blank" rel="nofollow" alt="陈乐三尺《红透肌香》"> <img alt="陈乐三尺《红透肌香》" src="http://www.99zihua.com/images/goods/20141216/cc67cf02da876682.jpg"> </a>
                        <p class="wk-lou-name" style="bottom: 20px;"> <a href="http://www.99zihua.com/lou.html" target="_blank">陈乐三尺《红透肌香》</a > </p> <p class="wk-lou-name"> <span>捡漏价<font>￥500</font> &nbsp;&nbsp; 原售价<del>￥900</del></span> </p> </li>  <li class="switchable-panel wk-switchable-panel" > <a href="http://www.99zihua.com/lou.html" class="wk-a" target="_blank" rel="nofollow" alt="著名山水画家王连笙 四尺《好山好水好风景》"> <img alt="著名山水画家王连笙 四尺《好山好水好风景》" src="http://www.99zihua.com/images/goods/20160408/3551de19ba6dc123.jpg" ></a>
                            <p class="wk-lou-name" style="bottom: 20px;"> <a href="http://www.99zihua.com/lou.html" target="_blank">著名山水画家王连笙 四尺《好山好水好风景》</a > </p> <p class="wk-lou-name"> <span>捡漏价<font>￥4600</font> &nbsp;&nbsp; 原售价<del>￥6000</del></span> </p> </li>  <li class="switchable-panel wk-switchable-panel" > <a href="http://www.99zihua.com/lou.html" class="wk-a" target="_blank" rel="nofollow" alt="贵州七星关美协主席吴显刚 四尺三开《听松观云》"> <img alt="贵州七星关美协主席吴显刚 四尺三开《听松观云》" src="http://www.99zihua.com/images/goods/20160801/51165aa5c3c7d9c2.jpg" ></a>
                                <p class="wk-lou-name" style="bottom: 20px;"> <a href="http://www.99zihua.com/lou.html" target="_blank">贵州七星关美协主席吴显刚 四尺三开《听松观云》</a > </p> <p class="wk-lou-name"> <span>捡漏价<font>￥3500</font> &nbsp;&nbsp; 原售价<del>￥4800</del></span> </p> </li>  <li class="switchable-panel wk-switchable-panel" > <a href="http://www.99zihua.com/lou.html" class="wk-a" target="_blank" rel="nofollow" alt="辽宁工美教授苗雨 四尺三开《映日荷花别样红》师从吴冠中"> <img alt="辽宁工美教授苗雨 四尺三开《映日荷花别样红》师从吴冠中" src="http://www.99zihua.com/images/goods/20150421/d6749c8f6084ffbd.jpg" ></a>
                                    <p class="wk-lou-name" style="bottom: 20px;"> <a href="http://www.99zihua.com/lou.html" target="_blank">辽宁工美教授苗雨 四尺三开《映日荷花别样红》师从吴冠中</a > </p> <p class="wk-lou-name"> <span>捡漏价<font>￥2000</font> &nbsp;&nbsp; 原售价<del>￥2500</del></span> </p> </li>  <li class="switchable-panel wk-switchable-panel" > <a href="http://www.99zihua.com/lou.html" class="wk-a" target="_blank" rel="nofollow" alt="名家蒲家瑞三尺《秋色丹彩》"> <img alt="名家蒲家瑞三尺《秋色丹彩》" src="http://www.99zihua.com/images/goods/20160421/97252b7988a2105c.jpg" ></a>
                                        <p class="wk-lou-name" style="bottom: 20px;"> <a href="http://www.99zihua.com/lou.html" target="_blank">名家蒲家瑞三尺《秋色丹彩》</a > </p> <p class="wk-lou-name"> <span>捡漏价<font>￥1900</font> &nbsp;&nbsp; 原售价<del>￥2500</del></span> </p> </li>  <li class="switchable-panel wk-switchable-panel" > <a href="http://www.99zihua.com/lou.html" class="wk-a" target="_blank" rel="nofollow" alt="河南著名画家曲逸之四尺斗方紫牡丹《紫玉含金》"> <img alt="河南著名画家曲逸之四尺斗方紫牡丹《紫玉含金》" src="http://www.99zihua.com/images/goods/20140109/5121286b27f06c5e.jpg" ></a>
                                            <p class="wk-lou-name" style="bottom: 20px;"> <a href="http://www.99zihua.com/lou.html" target="_blank">河南著名画家曲逸之四尺斗方紫牡丹《紫玉含金》</a > </p> <p class="wk-lou-name"> <span>捡漏价<font>￥1000</font> &nbsp;&nbsp; 原售价<del>￥1500</del></span> </p> </li>  </ol> <a id="wk-prev"><img class="prev" src="http://www.99zihua.com/statics/1.gif"></a > <a id="wk-next"><img class="next" src="http://www.99zihua.com/statics/2.gif"></a > <ul class="switchable-triggerBox" style="display:none">  <li class=""></li>  <li class=""></li>  <li class=""></li>  <li class=""></li>  <li class=""></li>  <li class=""></li>  </ul> 
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
										if(tdiv == '活动已结束.' || tdiv == '活动未开始.'){
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
                            <li><a href="#" target="_blank" rel="nofollow">Triển lãm tranh đá quý tại hà nội</a><span class="tip"></span> </li>
                            <li><a href="#" target="_blank" rel="nofollow">Treo tranh phòng khách hợp phong thủy</a> </li>
                            <li><a title="" href="#" target="_blank" rel="nofollow">Tranh treo phòng khách đẹp</a> </li>
                            <li><a href="#" type="url" title="Mua tranh đá quý ở đâu tốt tại hà nội" rel="nofollow">Mua tranh đá quý ở đâu tốt tại hà nội</a> </li>
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
                                            </a> </div>
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
                            <div id="widgets_16602_list1" style="display:none">
                                <div class="itemsWrap " product="12507" style="width:19%;">
                                    <div class="item">
                                        <div class="goodsImg" style="overflow:hidden;text-align:center;vertical-align: middle;width:136px;height:136px;">
                                            <a href="http://www.99zihua.com/product-12507.html" target="_blank" title="中国美协会员杨小华 四尺三开《噶光》 "><img src="http://www.99zihua.com/images/goods/20160325/4cf041442352330b.jpg" width="136" height="136" alt="中国美协会员杨小华 四尺三开《噶光》 "> </a>
                                        </div>
                                        <h6><a href="http://www.99zihua.com/product-12507.html" target="_blank" title="中国美协会员杨小华 四尺三开《噶光》 ">中国美协会员杨小华 四尺三开《噶光》 </a></h6>
                                        <ul>
                                            <li><span class="price0">本站价:</span><span class="price1" style="color:default;">￥4800</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="itemsWrap " product="12445" style="width:19%;">
                                    <div class="item">
                                        <div class="goodsImg" style="overflow:hidden;text-align:center;vertical-align: middle;width:136px;height:136px;">
                                            <a href="http://www.99zihua.com/product-12445.html" target="_blank" title="中国道教协会会长任法融 四尺《海乃百川 有容乃大》（询价）"><img src="http://www.99zihua.com/images/goods/20160322/e627229439012559.jpg" width="136" height="136" alt="中国道教协会会长任法融 四尺《海乃百川 有容乃大》（询价）"> </a>
                                        </div>
                                        <h6><a href="http://www.99zihua.com/product-12445.html" target="_blank" title="中国道教协会会长任法融 四尺《海乃百川 有容乃大》（询价）">中国道教协会会长任法融...</a></h6>
                                        <ul>
                                            <li><span class="price0">本站价:</span><span class="price1" style="color:default;">￥0</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="itemsWrap " product="12437" style="width:19%;">
                                    <div class="item">
                                        <div class="goodsImg" style="overflow:hidden;text-align:center;vertical-align: middle;width:136px;height:136px;">
                                            <a href="http://www.99zihua.com/product-12437.html" target="_blank" title="国家一级美术师陈敬友 四尺 《翠色全微碧色深》"><img src="http://www.99zihua.com/images/goods/20160322/c7e20ff15911cb6d.jpg" width="136" height="136" alt="国家一级美术师陈敬友 四尺 《翠色全微碧色深》"> </a>
                                        </div>
                                        <h6><a href="http://www.99zihua.com/product-12437.html" target="_blank" title="国家一级美术师陈敬友 四尺 《翠色全微碧色深》">国家一级美术师陈敬友 四尺...</a></h6>
                                        <ul>
                                            <li><span class="price0">本站价:</span><span class="price1" style="color:default;">￥6500</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="itemsWrap " product="12430" style="width:19%;">
                                    <div class="item">
                                        <div class="goodsImg" style="overflow:hidden;text-align:center;vertical-align: middle;width:136px;height:136px;">
                                            <a href="http://www.99zihua.com/product-12430.html" target="_blank" title="范扬 四尺对开《君自故乡来 应知故乡事》"><img src="http://www.99zihua.com/images/goods/20160322/40879d10c1c8de5b.jpg" width="136" height="136" alt="范扬 四尺对开《君自故乡来 应知故乡事》"> </a>
                                        </div>
                                        <h6><a href="http://www.99zihua.com/product-12430.html" target="_blank" title="范扬 四尺对开《君自故乡来 应知故乡事》">范扬 四尺对开《君自故乡来 应知故乡事》</a></h6>
                                        <ul>
                                            <li><span class="price0">本站价:</span><span class="price1" style="color:default;">￥8000</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="itemsWrap last" product="12422" style="width:19%;">
                                    <div class="item">
                                        <div class="goodsImg" style="overflow:hidden;text-align:center;vertical-align: middle;width:136px;height:136px;">
                                            <a href="http://www.99zihua.com/product-12422.html" target="_blank" title="中书协顾问 书法大家刘艺四尺《天街小雨润如酥》（询价）"><img src="http://www.99zihua.com/images/goods/20160318/0d1e96eb8ae80318.jpg" width="136" height="136" alt="中书协顾问 书法大家刘艺四尺《天街小雨润如酥》（询价）"> </a>
                                        </div>
                                        <h6><a href="http://www.99zihua.com/product-12422.html" target="_blank" title="中书协顾问 书法大家刘艺四尺《天街小雨润如酥》（询价）">中书协顾问...</a></h6>
                                        <ul>
                                            <li><span class="price0">本站价:</span><span class="price1" style="color:default;">￥0</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="clear"></div>
                            </div>
                            <div id="widgets_16602_more_1" class="more" style="display:none;"> </div>
                            <div id="widgets_16602_list2" style="display:none">
                                <div class="itemsWrap " product="10902" style="width:19%;">
                                    <div class="item">
                                        <div class="goodsImg" style="overflow:hidden;text-align:center;vertical-align: middle;width:136px;height:136px;">
                                            <a href="http://www.99zihua.com/product-10902.html" target="_blank" title="朝鲜名家 郑日革 《农家》 馆藏油画精品"><img src="http://www.99zihua.com/images/goods/20150416/cb04d8e4b6514ec3.jpg" width="136" height="136" alt="朝鲜名家 郑日革 《农家》 馆藏油画精品"> </a>
                                        </div>
                                        <h6><a href="http://www.99zihua.com/product-10902.html" target="_blank" title="朝鲜名家 郑日革 《农家》 馆藏油画精品">朝鲜名家 郑日革 《农家》 馆藏油画精品</a></h6>
                                        <ul>
                                            <li><span class="price0">本站价:</span><span class="price1" style="color:default;">￥30000</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="itemsWrap " product="10749" style="width:19%;">
                                    <div class="item">
                                        <div class="goodsImg" style="overflow:hidden;text-align:center;vertical-align: middle;width:136px;height:136px;">
                                            <a href="http://www.99zihua.com/product-10749.html" target="_blank" title="朝鲜人民艺术家 李相文《荷塘鹅趣》 布面油画"><img src="http://www.99zihua.com/images/goods/20150407/4f342013e81d50e4.jpg" width="136" height="136" alt="朝鲜人民艺术家 李相文《荷塘鹅趣》 布面油画"> </a>
                                        </div>
                                        <h6><a href="http://www.99zihua.com/product-10749.html" target="_blank" title="朝鲜人民艺术家 李相文《荷塘鹅趣》 布面油画">朝鲜人民艺术家 李相文《荷塘鹅趣》...</a></h6>
                                        <ul>
                                            <li><span class="price0">本站价:</span><span class="price1" style="color:default;">￥5500</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="itemsWrap " product="10644" style="width:19%;">
                                    <div class="item">
                                        <div class="goodsImg" style="overflow:hidden;text-align:center;vertical-align: middle;width:136px;height:136px;">
                                            <a href="http://www.99zihua.com/product-10644.html" target="_blank" title="朝鲜名家蔡京华 四尺《故乡路上》"><img src="http://www.99zihua.com/images/goods/20150327/18f8e8fbf0986702.jpg" width="136" height="136" alt="朝鲜名家蔡京华 四尺《故乡路上》"> </a>
                                        </div>
                                        <h6><a href="http://www.99zihua.com/product-10644.html" target="_blank" title="朝鲜名家蔡京华 四尺《故乡路上》">朝鲜名家蔡京华 四尺《故乡路上》</a></h6>
                                        <ul>
                                            <li><span class="price0">本站价:</span><span class="price1" style="color:default;">￥2100</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="itemsWrap " product="10369" style="width:19%;">
                                    <div class="item">
                                        <div class="goodsImg" style="overflow:hidden;text-align:center;vertical-align: middle;width:136px;height:136px;">
                                            <a href="http://www.99zihua.com/product-10369.html" target="_blank" title="朝鲜画家李灿 小八尺《傍晚》"><img src="http://www.99zihua.com/images/goods/20150206/c78d56edb1b4fa36.jpg" width="136" height="136" alt="朝鲜画家李灿 小八尺《傍晚》"> </a>
                                        </div>
                                        <h6><a href="http://www.99zihua.com/product-10369.html" target="_blank" title="朝鲜画家李灿 小八尺《傍晚》">朝鲜画家李灿 小八尺《傍晚》</a></h6>
                                        <ul>
                                            <li><span class="price0">本站价:</span><span class="price1" style="color:default;">￥3000</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="itemsWrap last" product="10356" style="width:19%;">
                                    <div class="item">
                                        <div class="goodsImg" style="overflow:hidden;text-align:center;vertical-align: middle;width:136px;height:136px;">
                                            <a href="http://www.99zihua.com/product-10356.html" target="_blank" title="朝鲜画家金贤珠 四尺《瓜果飘香》"><img src="http://www.99zihua.com/images/goods/20150205/bd65955f4b6bf0eb.jpg" width="136" height="136" alt="朝鲜画家金贤珠 四尺《瓜果飘香》"> </a>
                                        </div>
                                        <h6><a href="http://www.99zihua.com/product-10356.html" target="_blank" title="朝鲜画家金贤珠 四尺《瓜果飘香》">朝鲜画家金贤珠 四尺《瓜果飘香》</a></h6>
                                        <ul>
                                            <li><span class="price0">本站价:</span><span class="price1" style="color:default;">￥2800</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="clear"></div>
                            </div>
                            <div id="widgets_16602_more_2" class="more" style="display:none;"> </div>
                            <div id="widgets_16602_list3" style="display:none">
                                <div class="itemsWrap " product="11918" style="width:19%;">
                                    <div class="item">
                                        <div class="goodsImg" style="overflow:hidden;text-align:center;vertical-align: middle;width:136px;height:136px;">
                                            <a href="#" target="_blank" title="著名青年油画家朱艺林 布面油画 《情思》"><img src="http://www.99zihua.com/images/goods/20151126/08787226cfc3ebb3.jpg" width="136" height="136" alt="著名青年油画家朱艺林 布面油画 《情思》"> </a>
                                        </div>
                                        <h6><a href="#" target="_blank" title="著名青年油画家朱艺林 布面油画 《情思》">著名青年油画家朱艺林 布面油画 《情思》</a></h6>
                                        <ul>
                                            <li><span class="price0">本站价:</span><span class="price1" style="color:default;">￥3800</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="itemsWrap " product="10822" style="width:19%;">
                                    <div class="item">
                                        <div class="goodsImg" style="overflow:hidden;text-align:center;vertical-align: middle;width:136px;height:136px;">
                                            <a href="#" target="_blank" title="郭丽岩 《小巷》 布面油画"><img src="http://www.99zihua.com/images/goods/20150409/f1797521991eeca2.jpg" width="136" height="136" alt="郭丽岩 《小巷》 布面油画"> </a>
                                        </div>
                                        <h6><a href="#" target="_blank" title="郭丽岩 《小巷》 布面油画">郭丽岩 《小巷》 布面油画</a></h6>
                                        <ul>
                                            <li><span class="price0">本站价:</span><span class="price1" style="color:default;">￥2300</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="itemsWrap " product="10737" style="width:19%;">
                                    <div class="item">
                                        <div class="goodsImg" style="overflow:hidden;text-align:center;vertical-align: middle;width:136px;height:136px;">
                                            <a href="#" target="_blank" title="著名青年油画家朱艺林 布面油画 《花样年华》（询价）"><img src="http://www.99zihua.com/images/goods/20150407/737001218a68bb1d.jpg" width="136" height="136" alt="著名青年油画家朱艺林 布面油画 《花样年华》（询价）"> </a>
                                        </div>
                                        <h6><a href="#" target="_blank" title="著名青年油画家朱艺林 布面油画 《花样年华》（询价）">著名青年油画家朱艺林 布面油画...</a></h6>
                                        <ul>
                                            <li><span class="price0">本站价:</span><span class="price1" style="color:default;">￥3800</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="itemsWrap " product="10736" style="width:19%;">
                                    <div class="item">
                                        <div class="goodsImg" style="overflow:hidden;text-align:center;vertical-align: middle;width:136px;height:136px;">
                                            <a href="#" target="_blank" title="著名青年油画家朱艺林 布面油画 《夏日风情》"><img src="http://www.99zihua.com/images/goods/20150407/0991b02055d03ceb.jpg" width="136" height="136" alt="著名青年油画家朱艺林 布面油画 《夏日风情》"> </a>
                                        </div>
                                        <h6><a href="#" target="_blank" title="著名青年油画家朱艺林 布面油画 《夏日风情》">著名青年油画家朱艺林 布面油画...</a></h6>
                                        <ul>
                                            <li><span class="price0">本站价:</span><span class="price1" style="color:default;">￥3800</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="itemsWrap last" product="10729" style="width:19%;">
                                    <div class="item">
                                        <div class="goodsImg" style="overflow:hidden;text-align:center;vertical-align: middle;width:136px;height:136px;">
                                            <a href="http://www.99zihua.com/product-10729.html" target="_blank" title="著名青年油画家朱艺林 布面油画 《春》（询价）"><img src="http://www.99zihua.com/images/goods/20150407/4db9564af790ce03.jpg" width="136" height="136" alt="著名青年油画家朱艺林 布面油画 《春》（询价）"> </a>
                                        </div>
                                        <h6><a href="http://www.99zihua.com/product-10729.html" target="_blank" title="著名青年油画家朱艺林 布面油画 《春》（询价）">著名青年油画家朱艺林 布面油画...</a></h6>
                                        <ul>
                                            <li><span class="price0">本站价:</span><span class="price1" style="color:default;">￥3800</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="clear"></div>
                            </div>
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