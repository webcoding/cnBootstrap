<?php $page = "project" ?>
<?php $title="Project and Share"?>
<?php $description = "" ?>
<?php include("./templates/header.php"); ?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1 title="Project Research and Share">项目研究及分享</h1>
        <p class="lead" title="Project Research and Share links.">最新项目研究及分享资源连接等</p>
    </div>
</header>
<div class="container"> 
    
    <!-- Docs nav
================================================== -->
    <div class="row">
        <div class="span3 bs-docs-sidebar">
            <ul class="nav nav-list bs-docs-sidenav">
                <li><a href="#scrollpane"><i class="icon-chevron-right"></i> 模拟滚动条</a></li>
                <li class="dropdown-submenu"><a href="#select"><i class="icon-chevron-right"></i> Select控件模拟</a>
                    <ul class="dropdown-menu">
                        <li><a href="#select-auto" title="使用select标签自动生成div结构的模拟">select标签自动生成模拟</a></li>
                        <li><a href="#select-div" title="不存在select标签，直接使用div结构模拟select效果">Div模拟select</a></li>
                    </ul>
                </li>
                <li><a href="#select"><i class="icon-chevron-right"></i> 分页组件</a></li>
                <li><a href="#select"><i class="icon-chevron-right"></i> 九宫格背景组件</a></li>
                <li><a href="#share"><i class="icon-chevron-right"></i> 分享链接</a></li>
            </ul>
        </div>
        <div class="span9"> 
<!-- Scrollpane
================================================== -->
            <section id="scrollpane">
                <div class="page-header">
                    <h1>模拟滚动条</h1>
                </div>
                <p>Scrollpane实现模拟滚动条滚动条，只需在需要实现的位置最外层盒子上添加class="scroll-pane"即可！</p>
                <div class="bs-docs-example">
                    <div class="scoll_box scroll-pane">
                        <ul>
                            <li>这是模拟滚动条</li>
                            <li>使用起来非常方便</li>
                            <li>但是需要按照要求去做</li>
                            <li>第一：实现模拟的地方最外层最好是div</li>
                            <li>为了方面js在里面自动插入模拟滚动条的div结构</li>
                            <li>这时最外层只需要定义宽高即可</li>
                            <li>关于模拟滚动条的样式</li>
                            <li>请到其单独的样式表中定义</li>
                            <li>使用起来很方面吧</li>
                            <li>真的是太方便了！</li>
                        </ul>
                    </div>
                </div>
                <pre class="prettyprint linenums">
&lt;div class=&quot;scoll_box scroll-pane&quot;&gt;
&lt;ul&gt;
&lt;li&gt;&lt;/li&gt;
...
&lt;li&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;

// js调用
$('.scroll-pane').jScrollPane();
</pre>
                <h4>依赖：</h4>
                <p>模拟滚动条功能依赖插件jquery.mousewheel.js,jquery.jscrollpane.min.js和样式jquery.jscrollpane.css</p>
                <p>更详细内容可参考：<a href="http://jscrollpane.kelvinluck.com/" target="_blank">jscrollpane项目</a></p>
                <p><span class="label label-info">注意!</span> 以前版本不能支持jQuery库1.8版，现在支持了。</p>
            </section>


            <!-- select
    ================================================== -->
            <section id="scrollpane">
                <div class="page-header">
                    <h1>Select控件模拟</h1>
                </div>
                <p class="lead">在实际前端开发中，由于select的不稳定性，以及在低版本的IE中的样式不可定性，带来了很大的不方便，因此，总结了这个列表模拟select的js插件。主要有 select标签自动生成模拟，div直接构造模拟select两种方式。</p>
                <h3>select标签自动生成模拟</h3>
                <p>这是在页面中使用select标签，通过js自动生成相应的div+ul的模拟结构（隐藏了select标签），优点：处理编辑改动页面时便捷，缺点：在调试时要调整自动生成的模拟结构的样式效果，这个比较麻烦，但调试好后，很方便使用！</p>

                <h3>div直接构造模拟select</h3>
                <p>页面上不存在select标签，直接使用div+js模拟select效果，功能强大，甚至可以做自动帅选功能，推荐使用！</p>
                <div class="bs-docs-example">
                    
                </div>
                <pre class="prettyprint linenums">

</pre>
                <h4>方法一依赖：</h4>
                <p>模拟select功能依赖插件.js和样式.css</p>
                <p>更详细内容可参考：</p>
                <h4>方法二依赖：</h4>
                <p>模拟select功能依赖插件.js和样式.css</p>
                <p>更详细内容可参考：<a target="_blank" href="http://harvesthq.github.com/chosen/">Chosen 项目</a></p>
                <p><span class="label label-warning">注意：</span> </p>
            </section>



            <!-- Share
    ================================================== -->
            <section id="share">
                <div class="page-header">
                    <h1>Share Links</h1>
                </div>
                <h2>前端项目</h2>
                <ol>
                    <li><a target="_blank" href="http://aliceui.com" title="Alice 是支付宝前端样式解决方案小组的项目代称。她包括构建样式库的样式库解决方案，帮助团队理解新技术的W3C标准文档库和正在进行中实验项目等; 也是团队的代称。目前 Alice 的主要职责是提供 CSS 和 HTML 方面的技术支持和解决方案开发。">Alice - Alipay前端样式库</a></li>
                    <li><a target="_blank" href="http://docs.kissyui.com" title="KISSY 是由淘宝前端攻城师们发起创建的一个开源 JS 类库。Keep It Simple & Stupid, Short & Sweet, Slim & Sexy... Yeah!">KISSY - 淘宝开源 JS 类库</a></li>
                    <li><a target="_blank" href="http://demo.doyoe.com/" title="Web前端实验室用于存放CSS探索之旅的实验和测试用例(Demos and Examples)">Web前端实验室</a></li>
					<li><a target="_blank" href="http://www.css3maker.com" title="CSS Maker is a free tool to experiment with CSS properties and values and generate a simple stylesheet for your site.">CSS3.0 Maker</a></li>
                    <li><a target="_blank" href="http://css3please.com" title="The Cross-Browser CSS3 Rule Generator">CSS3 Please!</a></li>
                    <li><a target="_blank" href="http://cssarrowplease.com" title="Generate the CSS for a tooltip arrow.">CSS Arrow Please</a></li>
                    <li><a target="_blank" href="http://www.quickui.net/frame/main.php" title="QUI网页界面集成框架是一套完整的BS模式系统界面解决方案。包括十余种不同结构的主页、各种常用的导航与布局模板、丰富的组件、特效和完备的CSS样式库等等，并有多种皮肤样式可供选择。">QUI 网页界面集成框架</a></li>
                    <li><a target="_blank" href="http://wijmo.com" title="Wijmo is a complete kit of over 40 UI widgets with everything from interactive menus to rich charts. If you know jQuery, you know Wijmo. Complete with documentation and professional support, every widget is hand-crafted and includes premium themes.">UI for the Web powered by HTML5, jQuery &amp; CSS3</a></li>
                    <li><a target="_blank" href="http://aui.github.com/artTemplate/" title="高性能 JavaScript 模板引擎">artTemplate</a>　 <a target="_blank" href="http://www.tcreator.info/webSchool/javascript/js-artTemplate.html">相关介绍</a></li>
                    <li><a target="_blank" href="http://seajs.org/docs/" title="SeaJS 是一个适用于 Web 浏览器端的模块加载器。使用 SeaJS，可以更好地组织 JavaScript 代码。">研究使用SeaJS</a></li>
                    <li><a target="_blank" href="" title=""></a></li>
                    <li><a target="_blank" href="" title=""></a></li>
                </ol>
                <h2>解决方案或前端资源</h2>
                <ol>
                    <li><a target="_blank" href="http://nicolasgallagher.com/pure-css-gui-icons/demo/" title="Experimental use of CSS to create 84 common graphic user interface icons from semantic HTML.">Pure CSS GUI icons</a></li>
                    <li><a target="_blank" href="http://placehold.it" title="A quick and simple image placeholder service.">PLACEHOLD.IT</a> 使用举例：<a target="_blank" href="http://placehold.it/800x500" title="这是自动生成指定格式的占位图片">http://placehold.it/800x500</a></li>
                    <li><a href="./project.php#scrollpane" title="便捷实现模拟滚动条滚动条">模拟滚动条</a>  项目-<a target="_blank" href="http://jscrollpane.kelvinluck.com">jScrollPane</a></li>
                    <li><a target="_blank" href="http://www.tcreator.info/sources/tools/jquery-chm.html" title="最新版 jQuery 1.8 chm 版本已经发布，欢迎下载！">jQuery API中文手册(CHM)最新版下载</a></li>
                    <li><a target="_blank" href="http://www.tcreator.info/sources/tools/css-chm.html" title="CSS 样式表参考手册目前最新版是 v3.4.0">CSS样式表 中文手册(chm)最新版下载</a></li>
                </ol>
                <h2>可研究方案</h2>
                <ol>
                    <li><a target="_blank" href="http://www.vr2rv.cn/jquery/demo/masonry-site/demos/basic-single-column.html" title="jQuery Plugins Masonry 瀑布流页面布局插件">瀑布流研究</a>　 　 <a target="_blank" href="http://gulangfish.com/demo/waterfall/waterfall-test.html" title="另一个瀑布流式的实现">照片墙</a>-（<a target="_blank" href="http://gulangfish.com/?p=781">此瀑布流布局的实现</a>）</li>
                    
                </ol>
                <h2>Icon</h2>
                <ol>
                    <li><a target="_blank" href="http://www.iconpng.com" title="收录了41684个免费的PPT图标ICON素材及网页设计图标资源，具有按分类、色系、标题、系列搜索图标的功能，帮助您以最快的速度找到喜欢的图标ICONS。">IconPng 爱看图标网，免费图标搜索引擎</a></li>
                    <li><a target="_blank" href="http://www.iconfinder.com" title="Search through more than 150.000 free icons in an easy and efficient way.">Icon Finder</a></li>
                </ol>
                <h2>研读扩展</h2>
                <ol>
                    <li><a target="_blank" href="http://ued.taobao.com/blog/">TaoBaoUED博客</a></li>
                    <li>[译]<a target="_blank" href="http://www.tcreator.info/webSchool/xhtml-css/IE6-bugs.html">IE6终极备忘：修复IE6下 25+ Bugs</a></li>
                    <li><a target="_blank" href="http://www.tcreator.info/webSchool/xhtml-css/ie-beat-the-holy-canon-css-bug-table.html">打败 IE 的葵花宝典：CSS Bug Table</a></li>
                    <li><a target="_blank" href="http://blog.jobbole.com" title="专注于分享职业相关的博客文章、业界资讯和职业相关的优秀工具和资源。博文类别包括：程序员、设计、营销、互联网、IT技术、自由职业、创业、运营、管理、翻译和人力资源。">伯乐在线</a></li>
                    <li><a target="_blank" href=""></a></li>
                    <li><a target="_blank" href=""></a></li>
                    <li><a target="_blank" href=""></a></li>
                </ol>
            </section>
        </div>
    </div>
</div>
<?php include("common/footer.html");?>