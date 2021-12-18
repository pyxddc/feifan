<?php

/**
 * Template name: 觅知-视频在线解析页面
 * Description:   觅知 - video视频解析
 */

// 获取链接列表
get_header();
$header_style = zib_get_page_header_style();
?>
<main class="container">
    <div class="content-wrap">
        <div class="content-layout">
            <?php while (have_posts()) : the_post(); ?>
                <?php if ($header_style != 1) {
                    echo zib_get_page_header();
                } ?>
                <div class="box-body theme-box radius8 main-bg main-shadow">
                    <?php if ($header_style == 1) {
                        echo zib_get_page_header();
                    } ?>
                    <!--主体开始-->
                    <html lang="zh-cn">
                    <head>
                    <style type="text/css"> 
                    .wiui01{ width:100%; height:645px;border-radius:5px;}
                    .input-group-addon{padding: 6px 12px; font-size: 14px; font-weight: 400; line-height: 1; color: #555; text-align: center; background-color: #eee; border-radius: 4px;border: #ccc;}
                    @media screen and (max-width: 768px){.wiui01{width:100%; height:200px;}}}
                       </style>
                            <script type="text/javascript">
                    eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('b a(){0 6=1.2("9").4;0 5=1.2("3");0 3=1.2("3").c;0 8=5.e[3].4;0 7=1.2("f");7.d=8+6}',16,16,'var|document|getElementById|jk|value|jkurl|diz|cljurl|jkv|url|dihejk|function|selectedIndex|src|options|player'.split('|'),0,{}))
                            function dihejk2() {
                            var diz = document.getElementById("url").value;
                            var jkurl = document.getElementById("jk");
                            var jk = document.getElementById("jk").selectedIndex;
                            var jkv = jkurl.options[jk].value;
                            var cljurl = document.getElementById("player");
                            window.open(jkv + diz,"_blank");
                            }
                            </script>
                        </head>
                        <body>
                            <div class="col-md-14 column">
                                    <div id="kj" >
                                        <iframe class="wiui01" src="https://zhoudadatool.gitee.io/dh/load.html" style="background-color: black;" id="player" allowtransparency="true" allowfullscreen="true" frameborder="0" scrolling="no" name="player"></iframe>
                                    </div>
                                <script type="text/javascript">
                    if(navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)){
                                document.getElementById("sdfdf").style.display = "block";
                                }
                                </script>
                            </div><br>
                            <div class="col-md-14 column">
                                <div class="input-group" style="width: 100%;">
                                    <span class="input-group-addon">选择接口</span> <select class="form-control" id="jk">
                                        <option value="https://jx.parwix.com:4433/player/?url=" selected>
                                            1️⃣ parwix解析-推荐1
                                        </option>
                                        <option value="https://www.8090g.cn/jiexi/?url=" selected>
                                            2️⃣ 8090解析-推荐2
                                        </option>
                                        <option value="https://z1.m1907.cn?jx=" selected>
                                            3️⃣ 1907解析
                                        </option>
                                       <option value="https://vip.bljiex.com/?v=" selected>
                                            4️⃣ BL解析
                                        </option>
                                       <option value="https://api.jiexi.la/?url=" selected>
                                            5️⃣解析啦解析
                                        </option>                                        
                                       <option value="https://vip.2ktvb.com/player/?url=" selected>
                                            6️⃣爱跟解析
                                        </option>       
                                       <option value="https://player.maqq.cn/?url=" selected>
                                            7️⃣尊享解析
                                        </option>
                                       <option value="https://jhpc.manduhu.com/?url=" selected>
                                            8️⃣腾讯解析
                                        </option>  
                                        <option value="https://www.8090g.cn/jiexi/?url=" selected>
                                            🔗默认接口(若默认接口无法解析请选择其他接口播放)
                                        </option>
                                    </select>
                                </div><br>
                                <div class="input-group" style="width: 100%;">
                                    <span class="input-group-addon" >播放地址</span> <input class="form-control" type="search" placeholder="电脑使用Ctrl+V粘贴网址-手机直接长按粘贴网址" id="url">
                                </div><br>
                                <div>
                                     <button id="bf" type="button" class="btn btn-info btn-block" onclick="dihejk()">点击开始解析</button> 
                                    <button id="bf" type="button" class="btn btn-warning btn-block" onclick="dihejk2()">点击全屏播放解析</button>
                                </div>
                            </div>
                    <!--公告-->
                        <script type="text/javascript">
                        $(function () {
                          function getNowFormatDate() {
                            var date = new Date();
                            var month = date.getMonth() + 1;
                            var strDate = date.getDate();
                            var currentdate = month + "月" + strDate + "日";
                            return currentdate;
                          }
                          var text = [
                             "如果你使用手机观看的话，推荐解析后使用全屏观看！",
                             "如果解析接口有广告，请选择更换接口解析！",
                             "觅知视频解析接口：7个（状态：正常）",
                             "解析失效请及时联系站长更换！",
                             "觅知解析是免费使用的，请勿被骗！",
                          ], content = "";
                          for (var i = 0; i < text.length; i++) {
                            content += (i + 1) + ". " + text[i] + "\n";
                          }
                          setTimeout(function () {
                            swal(getNowFormatDate() + "通知", content, "success");
                          }, 1000)
                        })
                      </script>
                        </body>
                    </html>
                    <h2>🏳‍🌈解析教程：</h2>
                    <p>🧡第一步：进入【<strong><span class="has-inline-color has-vivid-red-color">影视的官网</span>】</strong>。</p><p>💛第二步：点击进入你需要看的影视页面，选择你要看的集数（例如：《<a rel="noreferrer noopener"href="/"target="_blank">瞄准</a>》--&gt;第一集）,复制链接（浏览器上的视频地址）。</p><p>💚第三步：将复制的链接粘贴到上面的【解析视频】，然后点击【立即播放】，就会跳转到播放页面，然后就可以免费看啦！</p><p>💌<span class="has-inline-color has-vivid-red-color"><strong>注：</strong>建议使用PC端观看，手机端解析路线可能有广告。如果不能正常解析，请更换解析路线，目前解析路线是[默认接口]，不会更换的请联系觅知社长！</span></p>

  <h2>🌂现已支持视频网站：</h2>
                    <style type="text/css">
                        .wiiuii-p{padding: 10px;}/*logo平台*/.logo-lie{background: #ffffffde;text-align: center;padding: 4px 10px;border-radius: 8px;border: 1px solid #EEEEEE;-webkit-transition: border linear .2s, box-shadow linear .2s;-moz-transition: border linear .2s, box-shadow linear .2s;-o-transition: border linear .2s, box-shadow linear .2s;transition: border linear .2s, box-shadow linear .2s;}.logo-lie a{text-align: center;}/*屏幕最小768px匹配样式*/@media (min-width: 768px){a{text-decoration: none;}a:hover{text-decoration: none;}/*logo平台*/.logo-lie{padding: 10px 15px;}.logo-lie:hover{border: 1px solid #0093FF;box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(0, 147, 255, .6);}}
                    </style>
                    <div class="row"><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://vip.iqiyi.com/"target="_blank"title="爱奇艺会员"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/iqiyilogo.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://film.qq.com/"target="_blank"title="腾讯会员中心"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/qqlogo.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://vip.youku.com/"target="_blank"title="优酷会员中心"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/youkulogo.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://www.mgtv.com/vip/"target="_blank"title="芒果会员中心"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/hunantvlogo.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://yuanxian.le.com/"target="_blank"title="乐视会员中心"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/letvlogo.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://vip.tudou.com"target="_blank"title="土豆会员中心"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/tudoulogo.png"></a></div></div></div><div class="row"><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://www.baofeng.com/"target="_blank"title="暴风会员"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/baofeng.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://vip.1905.com/"target="_blank"title="1905电影网视频"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/1905logo.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://vip.kankan.com/"target="_blank"title="天天看看"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/kankan.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://www.pptv.com/"target="_blank"title="PPTV聚力"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/pptv.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://www.yinyuetai.com/"target="_blank"title="音悦台MV"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/yinyuetailogo.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://www.56.com/"target="_blank"title="56视频"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/56.png"></a></div></div></div><div class="row"><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://www.fun.vip"target="_blank"title="风行视频"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/fengxing.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://movie.ku6.com/"target="_blank"title="酷6视频"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/ku6.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://vip.wasu.cn/"target="_blank"title="WASU华数视频"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/wasulogo.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://video.sina.com.cn/"target="_blank"title="新浪视频"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/sinalogo.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="https://film.sohu.com/"target="_blank"title="搜狐视频"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/sohulogo.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://www.baomihua.com/"target="_blank"title="爆米花"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/baomihua.png"></a></div></div></div><div class="row"><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a target="_blank"title="看看新闻网视频"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/kankannews.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a target="_blank"title="糖豆视频"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/tangdou.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://tv.cctv.com/"target="_blank"title="央视网"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/cntvlogo.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://www.acfun.cn/"target="_blank"title="Ac弹幕网"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/acfun.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://www.bilibili.com/"target="_blank"title="哔哩哔哩"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/bilibili.png"></a></div></div><div class="col-xs-4 col-sm-2 wiiuii-p"><div class="logo-lie"><a href="http://www.aipai.com/"target="_blank"title="爱拍原创"rel="noopener noreferrer"><img class="img-responsive"src="https://cdn.jsdelivr.net/gh/1426239465/98dou.cn/diayingtu/aipai.png"></a></div></div></div>
                    
                    <h2>🈸免责声明：</h2>
                    <p class="has-pale-cyan-blue-color has-text-color has-background has-medium-font-size" style="background-color:#f4dbf2"><strong><qc style="color:#fb2121;background:undefined">本站服务器仅展示第三方网站接口页面，并不存储任何视频资源。因此经由本站搜索所产生的任何结果皆不代表本站立场，本站不对其真实合法性以及版权负责，亦不承担任何法律责任。本站所有接口皆源于互联网，仅供学习交流。</qc></strong></p>
                    <!--主体结束-->
                    <?php wp_link_pages('link_before=<span>&link_after=</span>&before=<div class="article-paging">&after=</div>&next_or_number=number'); ?>
                <?php endwhile;  ?>
                </div>
                <?php comments_template('/template/comments.php', true); ?>
        </div>
    </div>
    <?php get_sidebar(); ?>
</main>
<?php
get_footer();