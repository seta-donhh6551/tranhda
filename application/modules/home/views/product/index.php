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
                <script>
                    window.addEvent('domready', function() {
                        $ES(".s_btn_border").addEvent("click", function(e) {
                            if (this.hasClass("on")) {
                                this.removeClass("on");
                                this.getElement("span").setText("更多");
                                this.getParent("td").getElement(".s_option").setStyle("height", "26px");
                            } else {
                                this.addClass("on");
                                this.getElement("span").setText("收起");
                                this.getParent("td").getElement(".s_option").setStyle("height", "auto");
                            }
                        });
                    });
                </script>
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
                    <li>Mô tả</li>
                </ul>
            </div>
            <div class="page clearfix cur">
                <ul>
                    <li><a href="http://www.99zihua.com/zihuabk/zhsc/4454.html" target="_blank" title="致远斋藏画之强春云人物《老子受困图》">致远斋藏画之强春云人物《老子受困图》</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/zhzs/4362.html" target="_blank" title="办公室挂人物画好吗">办公室挂人物画好吗</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/zhjs/4120.html" target="_blank" title="醉八仙人物画欣赏">醉八仙人物画欣赏</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/mzxs/4091.html" target="_blank" title="名家人物画作品：岩下对弈 武圣关羽">名家人物画作品：岩下对弈 武圣关羽</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/zhzs/4073.html" target="_blank" title="钟馗人物画：辟邪镇灾 保家祈福">钟馗人物画：辟邪镇灾 保家祈福</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/zhzs/4049.html" target="_blank" title="人物画赏析：趣味十足 韵味悠长">人物画赏析：趣味十足 韵味悠长</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/mzxs/4027.html" target="_blank" title="人物画作品赏析：清新洒脱 飘逸清雅">人物画作品赏析：清新洒脱 飘逸清雅</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/zhsc/4024.html" target="_blank" title="董书林书画作品赏析：人物灵动 九鱼呈祥">董书林书画作品赏析：人物灵动 九鱼呈祥</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/mzxs/4005.html" target="_blank" title="人物画作品赏析：纯情典雅 古韵飘逸">人物画作品赏析：纯情典雅 古韵飘逸</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/zhzs/3995.html" target="_blank" title="人物画赏析：传神凝练 古朴飘逸">人物画赏析：传神凝练 古朴飘逸</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/zhzs/3983.html" target="_blank" title="人物画赏析：形神兼备 气韵俱佳">人物画赏析：形神兼备 气韵俱佳</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/zhsc/3974.html" target="_blank" title="赵金鸰人物画赏析：忠肝义胆 老子出关">赵金鸰人物画赏析：忠肝义胆 老子出关</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/zhsc/3957.html" target="_blank" title="赵金鸰布袋和尚人物画：笑佛迎天下 吉祥财运来">赵金鸰布袋和尚人物画：笑佛迎天下 吉祥财运来</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/zhsc/3948.html" target="_blank" title="陈漫之水墨人物画——精湛笔墨绘精品佳作">陈漫之水墨人物画——精湛笔墨绘精品佳作</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/zhsc/3933.html" target="_blank" title="颜涵重彩人物画：凝重唯美 独特飘逸">颜涵重彩人物画：凝重唯美 独特飘逸</a> </li>
                </ul>
            </div>
            <div class="page clearfix">
                <ul>
                    <li><a href="http://artist.99zihua.com/ysxc/2017/0117/4531.html" target="_blank" title="郑庆年艺术相册">郑庆年艺术相册</a> </li>
                    <li><a href="http://artist.99zihua.com/ysxc/2017/0117/4530.html" target="_blank" title="刘金河艺术相册">刘金河艺术相册</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/ghzx/4529.html" target="_blank" title="著名书法大家刘艺先生病逝 享年86岁">著名书法大家刘艺先生病逝 享年86岁</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/ghzx/4528.html" target="_blank" title="“秋水为神”刘艺书法脉络展亮相中国美术馆">“秋水为神”刘艺书法脉络展亮相中国美术馆</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/zhsc/4526.html" target="_blank" title="王连笙：水墨丹青中品味东方独特韵味">王连笙：水墨丹青中品味东方独特韵味</a> </li>
                    <li><a href="http://artist.99zihua.com/ysxc/2016/1101/4525.html" target="_blank" title="王洪锡艺术相册">王洪锡艺术相册</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/zhjs/4524.html" target="_blank" title="王洪锡诗词节选">王洪锡诗词节选</a> </li>
                    <li><a href="http://www.99zihua.com/zihuabk/zhjs/4523.html" target="_blank" title="王洪锡文：关于草书多样性的思考">王洪锡文：关于草书多样性的思考</a> </li>
                    <li><a href="http://artist.99zihua.com/gw/4522/" target="_blank" title="王洪锡">王洪锡</a> </li>
                    <li><a href="http://artist.99zihua.com/ysxc/2016/1101/4521.html" target="_blank" title="李立辰艺术相册">李立辰艺术相册</a> </li>
                </ul>
            </div>
            <div class="page clearfix">
                <p>国画人物，是高档家居常见的挂画题材，是以人物为主题背景的绘画门类，其艺术形式也被简称为“人物”。在国画艺术中，人物画已成为一种较为普遍的画科，其中有佛像画、风俗画、仕女画、历史故事等多种类别。佛像画中夜叉修罗，普渡众佛，慈悲三世等等，其形态庄重典雅，古朴凝重，面相谦和；风俗画多以寄情抒怀，醉卧山水，柳下送别，松下对弈，静卧酣睡，枯榕嬉闹，无一不是对古人生活的真实写照。仕女图清新雅丽，秀美燕姿，婀娜柔情，静观仕女之态，给人以古朴香浓的柔情美感。</p>
                <p>在历史故事绘画中，古有孙权劝学，亦有草舍三分天下，如此种种，足以显示出国画人物在中国绘画的重要地位。人物画自古就有，它起源于周朝时期，多以工笔画出现，以劝善戒恶为主，到战国秦汉，人物画的发展已经基本趋于成熟，一致到隋唐时期人物画大体可分物白描画法、工笔彩画法和写意画法的表现形式，通过各种的表现手法描写着生活百态，同时也涌现出了以历史事实或神话中的人物故事和人物活动为题材的绘画作品，具有五千年的中华文化底蕴。艺术家们在创作上，主张了以形写神、形神兼备的绘画风格。其画法上有写意画纵笔挥洒，墨彩飞扬的绘画手法；也有工笔画精笔细腻、色彩鲜明的绘画手法。但还是多以工笔人物画为主，通过形象刻画人物的形态、神情，达到逼真传神、气韵生动、形神兼备的行笔功效。用传神的眼情、优雅的身姿与周围环境的相互映衬，传达着人物的内心世界，达到笔墨相互映衬，笔中有墨，墨中有笔的绘画意境，同时也渗透着艺术家崇高的绘画心境。</p>
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