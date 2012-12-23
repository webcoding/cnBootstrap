<?php $page = "bugs-fixed" ?>
<?php $title="Bugs and fixed"?>
<?php $description = "" ?>
<?php include("./templates/header.php"); ?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead">
    <div class="container">
        <h1>Bugs及解决办法</h1>
        <p class="lead">汇总了各种常见的抑或不常见的Bugs及其解决办法。</p>
    </div>
</header>
<div class="container"> 
    
    <!-- Docs nav
================================================== -->
    <div class="row">
        <div class="span3 bs-docs-sidebar">
            <ul class="nav nav-list bs-docs-sidenav">
                <li><a href="#overview"><i class="icon-chevron-right"></i> 概述</a></li>
                <li><a href="#tactics"><i class="icon-chevron-right"></i> 策略</a></li>
                <li><!-- class="dropdown-submenu" --><a href="#css-hack"><i class="icon-chevron-right"></i> CSS Hack</a>
                    <!--<ul class="dropdown-menu">
                        <li><a href="#condition-hack">条件Hack</a></li>
                        <li><a href="#property-hack">属性级Hack</a></li>
                        <li><a href="#selector-hack">选择符级Hack</a></li>
                    </ul>-->
                </li>
                <li><a href="#ie6png"><i class="icon-chevron-right"></i> 图片</a>
                    <!--<ul class="dropdown-menu">
                        <li><a href="#ie6png">PNG半透明(IE6)</a></li>
                        <li><a href="#corner-radius">圆角</a></li>
                        <li><a href="#background-flicker">背景闪烁问题</a></li>
                    </ul>-->
                </li>
                <li><a href="#layout"><i class="icon-chevron-right"></i> 布局</a>
                    <!--<ul class="dropdown-menu">
                        <li><a href="#">理解 hasLayout</a></li>
                        <li><a href="#">IE6 盒模型</a></li>
                        <li><a href="#">最小/大高度</a></li>
                        <li><a href="#">最小/大宽度</a></li>
                        <li><a href="#">100%高度</a></li>
                        <li><a href="#">双边距bug</a></li>
                        <li><a href="#">清除浮动</a></li>
                        <li><a href="#">浮动层错位</a></li>
                        <li><a href="#">躲猫猫bug</a></li>
                        <li><a href="#">绝对定位元素的1像素间距bug</a></li>
                        <li><a href="#">3像素间距bug</a></li>
                        <li><a href="#">IE下z-index的bug</a></li>
                        <li><a href="#">Overflow Bug</a></li>
                    </ul>-->
                </li>
                <li><a href="#navbar"><i class="icon-chevron-right"></i> 列表</a>
                    <!--<ul class="dropdown-menu">
                        <li><a href="#">横向列表宽度bug</a></li>
                        <li><a href="#">列表阶梯bug</a></li>
                        <li><a href="#">列表间隙bug</a></li>
                    </ul>-->
                </li>
                <li><a href="#breadcrumbs"><i class="icon-chevron-right"></i> 行为</a>
                    <!--<ul class="dropdown-menu">
                        <li><a href="#">IE6中的:hover</a></li>
                        <li><a href="#">IE6调整窗口大小的bug</a></li>
                        <li><a href="#">去除各浏览器超链接的虚线</a></li>
                    </ul>-->
                </li>
                <li><a href="#pagination"><i class="icon-chevron-right"></i> JavaScript</a></li>
                <li><a href="#labels-badges"><i class="icon-chevron-right"></i> 其他</a>
                    <!--<ul class="dropdown-menu">
                        <li><a href="#">文本重复bug</a></li>
                        <li><a href="#">收藏夹图标</a></li>
                        <li><a href="#">IE6中GZip文件Bug</a></li>
                    </ul>-->
                </li>
                <li><a href="#typography"><i class="icon-chevron-right"></i> 相关资源</a></li>
                <li><a href="#htmlchar"><i class="icon-chevron-right"></i> HTML特殊符号对照表</a></li>
            </ul>
			<!-- 使用模板迷做一个界面样式
				 实现功能类似淘宝的筛选
			-->
			<!-- 搜素筛选\\ -->
			<div class="search-filter bs-docs-sidenav" style="margin-top:450px;">
				<div class="filter-info clearfix"><span class="result-info">共找到<i id="filter-num">81</i>条结果。</span>
					<dl id="your-choices" class="your-choices">
					</dl>
				</div>
				<ul id="tags-list" class="filter-tags">
					<li id="filter-browser" title="浏览器版本">
						<a class="all-browser s-tag selected" href="#">全部</a>
						<a class="s-tag" href="#">IE6</a>
						<a class="s-tag" href="#">IE7</a>
						<a class="s-tag" href="#">IE8</a>
						<a class="s-tag" href="#">Chrome</a>
						<a class="s-tag" href="#">Firefox</a>
					</li>
					<li id="filter-img" title="图片方面">
						<a class="all-img s-tag selected" href="#">全部</a>
						<a class="s-tag" href="#">PNG</a>
						<a class="s-tag" href="#">背景</a>
						<a class="s-tag" href="#">定位</a>
						<a class="s-tag" href="#">热点</a>
					</li>
					<li id="filter-layout" title="布局方面">
						<a class="all-layout s-tag selected" href="#">全部</a>
						<a class="s-tag" href="#">列表</a>
						<a class="s-tag" href="#">其他</a>
					</li>
					<li id="filter-css" title="css方面">
						<a class="all-css s-tag selected" href="#">全部</a>
						<a class="s-tag" href="#">属性失效</a>
						<a class="s-tag" href="#">其他</a>
					</li>
				</ul>
			</div>
        </div><!-- //搜素筛选 -->
        <div class="span9"> 
    <!-- Overview
    ================================================== -->
            <section id="overview">
                <div class="page-header">
                    <h1>概述</h1>
                </div>
                <p>一直想系统的整理下关于浏览器兼容性的各种Bug及解决方法，但一直都很忙没有完成，没有成片的时间，于是我决定每天整理一点，毕竟网上也不少整理的了，虽然不全，但是参考着再补充我和朋友们所遇到的，那么一份齐全的浏览器兼容性bug列表及解决方案也就指日可待了！</p>
                <p>整理Bugs方案，自然首先要处理更底层的东西，考虑到不同的结构也可能产生影响，所以优先研究css reset以及html结构基础方案，这之后在解决Bugs问题就会减少N多种的情形，如此就能保证更好更统一的解决问题！</p>
                <p>关于浏览器的Bug解决方案(包含hack技术)，下面列举了一般常见的样式Bug，布局Bug，以及需要设计时需要规避的Bug(目前81个)</p>
				</section>

                <!-- 问题列表 -->

                <ol class="bugs-list">
                    <li class="bugs-item" data-key="IE6 IE8">
                        <h3 class="bug-title">Bug简述——列表示例</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">涉及浏览器</i>
                            <p>Bug描述</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方案</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 PNG 图片 半透明">
                        <h3 class="bug-title">PNG半透明图片</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>特别说明一下，IE6与生俱来就支持png8的索引色透明度，但不支持png或8位以上的 alpha 透明度。而我们一直要解决的是让IE6支持PNG的 alpha 透明度（也可以说是PNG-24）。而对于非动画的GIF建议你使用PNG8，因为体积会更小。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>有很多JavaScript解决方案来修复IE6使用PNG-24图片，但除了<a href="http://www.twinhelix.com/css/iepngfix/" rel="nofollow" target="_blank">Twin Helix’s IE5.5+ PNG Alpha Fix</a>都不支持CSS sprites。</p>
                            <p>另外一个办法是使用IE特有的滤镜，可阅读<a href="http://www.belafontecode.com/create-transparent-pngs-in-ie6-using-alphaimageloader-no-hacks/" rel="nofollow" target="_blank">Aaron Baxter的博客</a>。<small>或译者的<a href="http://www.lizhenwen.com/w3c/52" target="_blank" title="">《ie5+ PNG Fix》</a></small></p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 IE7 IE8 圆角">
                        <h3 class="bug-title">IE 下的圆角</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7 IE8</i>
                            <p>低版本IE6/7/8不支持css3圆角属性。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>最好的解决办法就是不解决，不支持圆角的显示为直角状态。</p>
                            <p>或者可以详细阅读<a href="http://www.virtuosimedia.com/tutorials/css-rounded-corner-menus" target="_blank">CSS 圆角菜单</a>。</p>
                           </p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 背景 闪烁">
                        <h3 class="bug-title">背景闪烁问题</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>如果你给链接、按钮用CSS sprites作为背景，你可能会发现在IE6下会有背景图闪烁的现象。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>造成这个的原因是由于IE6没有将背景图缓存，每次触发hover的时候都会重新加载，可以用JavaScript设置IE6缓存这些图片： <code>document.execCommand("BackgroundImageCache",false,true);</code></p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 滤镜 超链接">
                        <h3 class="bug-title">IE6滤镜致链接失效Bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>IE6使用滤镜PNG图片透明后，容器内链接失效问题</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>造成这个的原因是由于IE6没有将背景图缓存，每次触发hover的时候都会重新加载，可以用JavaScript设置IE6缓存这些图片： <code>document.execCommand("BackgroundImageCache",false,true);</code></p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 PNG 图片 半透明">
                        <h3 class="bug-title">慎用A标签提交表单——IE6下事件冲突</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>&lt;a&gt;标签有个链接属性href , 而form也有一个页面请求属性action, 当两属性同时存在时, 点击&lt;a&gt;会优先执行&lt;a&gt;的href链接, 但如果是<a href="javascript:;" ></a>, 又会是什么情况呢? 实践证明IE7.0+ , FF3.0+, Opera9.6+ 均能正确处理, 忽略&lt;a&gt;的href, 执行表单的submit动作, 唯有IE6仍坚持着自己的原则, 只要有href , 就只尝试执行链接href , 除非你的&lt;a&gt;标签中去掉href属性, 但去掉href 你将发现IE下将不会出现下划线，或者制作的hover效果截然不见了(可以设置cursor:pointer;等修复)。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>方法一：经过几次测试我找到一个方法大家可以尝试一下，将href的javascript;;改成#
<code>&lt;a href="#" onclick="form.submit();"&gt;&lt;/a&gt;</code> </p>
							<p>方法二：&lt;a href=&quot;javascript:void(0);&quot; class=&quot;reg_submit&quot; id=&quot;asubmit&quot; onclick=&quot;if(!validate()){return false;}else{document.getElementById(&quot;regfrm&quot;).submit();return false;}&quot;&gt;提交&lt;/a&gt;，onclick 返回 false ,阻止浏览器的默认行为,也可以达到相同的目的。</p>
                            <p>方法三：&lt;a href=&quot;javascript:void(0);&quot; class=&quot;reg_submit&quot; id=&quot;asubmit&quot;&gt;提交&lt;/a&gt;。</p>
                            <pre>
window.onload = function() { 
    document.getElementById(&quot;asubmit&quot;).onclick = function() {
        setTimeout(function() {
            if(!validate()){return false;}
            else{document.getElementById(&quot;regfrm&quot;).submit();return true;}
            }, 0);
    }
}</pre>
</p>加载提交表单方法 ，在submit()前先等一下，让出处理时间。 </p>
                            
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 盒模型">
                        <h3 class="bug-title">IE6 盒模型</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>如果<a href="http://en.wikipedia.org/wiki/Quirks_mode" rel="nofollow" target="_blank">怪异模式（quirks mode）</a>在IE6中启用，IE6将会使用微软旧版的盒模型：width是元素的实际宽度，内容宽度 = width – (margin-left + margin-right + padding-left + padding-right + border-left-width + border-right-width)。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>最好的办法是申明正确的<a href="#use-doctype">文档类型</a>(推荐使用html5文档声明 <code>&lt;!DOCTYPE html&gt;</code> )以避免触发怪异模式，或者避免给有 <code>border</code> 或 <code>padding</code> 的元素定义 <code>width</code> 属性。当然你也可以考虑使用条件注释。</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 最小宽度 最大宽度 最小高度 最大高度">
                        <h3 class="bug-title">最大/小 高度/宽度</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">涉及浏览器</i>
                            <p>Bug描述</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方案</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 双边距">
                        <h3 class="bug-title">双边距问题</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>三个条件下：<b>块级元素</b>、<b>浮动</b>、<b>浮动方向的margin值</b>，IE6会错误的把浮动方向的margin值双倍计算。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" href="">Fixed</a></span>
                            <p><a href="http://www.positioniseverything.net/explorer/floatIndent.html" rel="nofollow" target="_blank">Steve Clason</a> 给出了解决方法：给元素添加 <code>display:inline;</code></p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 IE7 清除浮动">
                        <h3 class="bug-title">清除浮动</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7</i>
                            <p>如果使用div(或其他容器)包裹一个浮动的元素，经常会遇到一些无法包裹内部元素的问题。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" href="">Fixed</a></span>
							<p class="info">必须给div(容器)定义明确的height、width、overflow之中一个属性（除了auto值）才能将浮动元素严实地包裹。推荐以下方法：</p>
                            <p><b>clearfix清除法</b>：clearfix使用:after属性，配合zoom:1 来实现清除浮动；实现：只要在其父层添加 <code>class="clearfix"</code> 即可。</p>
                            <p><b>overflow清除法</b>：定义overflow之中一个属性（除了auto值）。</p>
                            <p><b>额外空标签清除法</b>：在浮动层父标签内部最后添加空标签 <code>&lt;div class="clear"&gt;&lt;/div&gt;</code> 来实现。</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 浮动">
                        <h3 class="bug-title">浮动层错位</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>当内容超出外包容器定义的宽度时会导致浮动层错位问题。在Firefox、IE7及其他标准浏览器里，超出的内容仅仅只是超出边缘；但在IE6中容器会忽视定义的width值，宽度会错误地随内容宽度增长而增长。如果在这个浮动元素之后还跟着一个浮动元素，那么就会导致错位问题。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>浮动层错位问题在IE6下没有真正让人满意的解决方法，虽然可以使用overflow:hidden;或overflow:scroll;来修正，但hidden容易导致其他一些问题，scroll会破坏设计；JavaScript也没法很好地解决这个问题。所以我的建议是一定要避免这个问题发生，使用一个固定的布局或者控制好内容的宽度。</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 IE7 躲猫猫 文本溢出 谍影重重 一只猪的故事">
                        <h3 class="bug-title">躲猫猫bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7</i>
                            <p>在IE6和IE7下，躲猫猫bug是一个非常恼人的问题。一个撑破了容器的浮动元素，如果在他之后有不浮动的内容，并且有一些定义了:hover的链接，当鼠标移到那些链接上时，在IE6下就会触发躲猫猫。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>头大了吧！但别担心，<a href="http://www.positioniseverything.net/explorer/guillotine.html" rel="nofollow" target="_blank">well-documented</a>提供了详细的解决方法。</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 IE7 躲猫猫 文本溢出 谍影重重 一只猪的故事">
                        <h3 class="bug-title">文本溢出BUG(江湖匪号：“谍影重重”或“一只猪的故事”)</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7</i>
                            <p>此BUG的原因可能是多重混合的，如浮动，注释，宽高定义等等。并且注释条数越多，溢出的文本也会随之增多。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>头大了吧！但别担心，<a href="http://www.positioniseverything.net/explorer/guillotine.html" rel="nofollow" target="_blank">well-documented</a>提供了详细的解决方法。</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 绝对定位 1像素">
                        <h3 class="bug-title">绝对定位元素的1像素间距bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>IE6下的这个错误是由于进位处理误差造成（IE7已修复），当绝对定位元素的父元素高或宽为奇数时，bottom和right会产生错误。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>唯一的解决办法就是给父元素定义明确的高宽值，但对于液态布局没有完美的解决方法。<a href="http://www.pmob.co.uk/" rel="nofollow" target="_blank">Paul O’Brien</a>有关这个bug有一篇文章来<a href="http://www.pmob.co.uk/temp/onepxgap.htm" rel="nofollow" target="_blank">讲解</a>。</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 浮动 3像素">
                        <h3 class="bug-title">3像素间距bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>在IE6中，当文本(或无浮动元素)跟在一个浮动的元素之后，文本和这个浮动元素之间会多出3像素的间隔。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p><a href="http://www.cssplay.co.uk/" rel="nofollow" target="_blank">Stu Nichols</a>有一个<a href="http://www.cssplay.co.uk/ie/3pxbug.html" rel="nofollow" target="_blank">非常好的解决方法</a>。</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 伪对象">
                        <h3 class="bug-title">IE6伪对象Bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>IE6无法识别伪对象:first-letter/:first-line的问题</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>增加空格：在伪对象选择符:first-letter/:first-line与包含规则的花括号"{"间增加空格。 </p>
                            <p>换行：将整个花括号"{"规则区域换行。 </p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE8 伪对象 !important">
                        <h3 class="bug-title">IE8伪对象 !important Bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>IE8会忽略伪对象:first-letter/:first-line里的!important规则</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>暂无好的解决办法，尽量不要在:first-letter/:first-line里使用!important规则。</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 !important">
                        <h3 class="bug-title">IE6 !important Bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>IE6会忽略同一条样式体内的!important规则</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方法是将该!important相关的样式拆分在2条css规则中。</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 IE7 IE8 z-index 定位 层级">
                        <h3 class="bug-title">IE下z-index的bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7 IE8</i>
                            <p>在IE浏览器中，定位元素的<code class="inline">z-index</code>层级是相对于各自的父级容器，所以会导致<code class="inline">z-index</code>出现<a href="http://therealcrisp.xs4all.nl/meuk/IE-zindexbug.html" target="_blank" title="">错误的表现</a>。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方法是给其父级元素定义<code class="inline">z-index</code>，有些情况下还需要定义<code class="inline">position:relative</code> 。</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 IE7 Overflow 相对定位">
                        <h3 class="bug-title">Overflow Bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7</i>
                            <p>在IE6/7中，overflow无法正确的隐藏有相对定位 <code>position:relative;</code>的子元素（父元素overflow属性的auto|hidden失效——在IE7及更早浏览器下你会看到div的滚动条将无法工作。）</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方法就是给外包容器.wrap加上position:relative;。</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 IE7 按钮 留白">
                        <h3 class="bug-title">按钮相关bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7</i>
                            <p>按钮在IE7及更早浏览器下随着value增多两边留白也随着增加</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方法 <code>input,button{overflow:visible;}</code>。</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 横向列表 空白间隙">
                        <h3 class="bug-title">横向列表空白间隙bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>IE7及更早浏览器下当li中出现2个或以上的浮动时，li之间产生空白间隙</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方法很简单，只需要给 <code>&lt;a&gt;</code> 定义同样的 <code>float:left;</code> 即可。</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 列表 空白">
                        <h3 class="bug-title">列表空白Bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>IE6及更早浏览器下当li内部元素是定义了display:block的内联元素时底部产生空白。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方案是给li内部的内联元素再加上 <code>*zoom:1</code></p>
                        </div>
                    </li>

                    <li class="bugs-item" data-key="IE6 宽度">
                        <h3 class="bug-title">横向列表宽度bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>如果你使用 <code>float:left;</code> 把 <code>&lt;li&gt;</code> 横向排列，并且 <code>&lt;li&gt;</code> 内包含的 <code>&lt;a&gt;</code> (或其他)触发了hasLayout，在IE6下就会有错误的表现：</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方法很简单，只需要给 <code>&lt;a&gt;</code> 定义同样的 <code>float:left;</code> 即可。</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 列表 阶梯">
                        <h3 class="bug-title">列表阶梯bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p><a href="http://haslayout.net/css/Staircase-Bug" rel="nofollow" target="_blank">列表阶梯bug</a>通常会在给 <code>&lt;li&gt;</code> 的子元素 <code>&lt;a&gt;</code> 使用 <code>float:left;</code> 时触发，我们本意是要做一个横向的列表(通常是导航栏)，但IE却可能呈现出垂直的或者阶梯状。</p>
							<p>抑或说：当给一系列 &lt;li&gt; 里面的浮动元素设置font-size后会出现阶梯效果</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决办法就是给 <code>&lt;li&gt;</code> 定义 <code>float:left;</code> 而非子元素 <code>&lt;a&gt;</code>，或者给 <code>&lt;li&gt;</code> 定义 <code>display:inline;</code> 也可以解决。</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 垂直列表 间隙">
                        <h3 class="bug-title">垂直列表间隙bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>当我们使用&lt;li&gt;包含一个块级子元素时，IE6(IE7也有可能)会错误地给每条列表元素(&lt;li&gt;)之间添加空隙；解决这个问题的方法有很多，看示例：</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p><a href="http://www.hicksdesign.co.uk/journal/ie-whitespace-bug" rel="nofollow" target="_blank">Jon Hicks</a>把 <code>&lt;a&gt;</code> flaot并且清除float来解决这个问题：</p>
                            <p>另外一个办法就是触发 <code>&lt;a&gt;</code> 的 <code>hasLayout</code>（如定义高宽、使用 <code>zoom:1;</code>）</p>
                            <p>也可以给 <code>&lt;li&gt;</code> 定义 <code>display:inline;</code> 来解决此问题。</p>
                            <p>另外还有一个极有趣的方法，给 <code>&lt;a&gt;</code> 包含的文本末尾添加一个空格：</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 :hover">
                        <h3 class="bug-title">IE6中的:hover</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>Bug描述</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方案</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 调整窗口大小">
                        <h3 class="bug-title">IE6调整窗口大小的 Bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>Bug描述</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方案</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 文本重复">
                        <h3 class="bug-title">文本重复Bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>在IE6中，一些隐藏的元素（如注释、display:none;的元素）被包含在一个浮动元素里，就有可能引发文本重复bug。
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p><a href="http://www.positioniseverything.net/explorer/dup-characters.html" rel="nofollow" target="_blank">Position Is Everything</a>详细讲解了这个问题，但解决办法很简单：给浮动元素添加<code>display:inline;</code>。</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="收藏夹 Icon Favicons">
                        <h3 class="bug-title">收藏夹图标(Icon/Favicons)</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器"></i>
                            <p>Bug描述</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方案</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="Chrome 页面闪动">
                        <h3 class="bug-title">Chrome页面闪动bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">Chrome</i>
                            <p>在Chrome下，使用过渡效果transition时有时会出现页面闪动问题。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方案：<code>-webkit-transform-style:preserve-3d;</code> 或 <code>-webkit-backface-visibility:hidden;</code></p>
                        </div>
                    </li>
                </ol>
				<h2>其他一些奇怪的Bug</h2>
                <ol>
                    <li class="bugs-item" data-key="IE8 :focus">
                        <h3 class="bug-title">:focus + selector {} 选择器失效</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE8</i>
                            <p><code>:focus + selector {}</code> 选择器失效，影响版本ie8，http://haslayout.net/css/Ignored--focus-Bug</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>在失效选择器后面添加一个空选择器 <code>:focus{}</code></p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE7 :hover 据对定位">
                        <h3 class="bug-title">ie7的坏的:hover 绝对定位bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE7</i>
                            <p>当子元素设置了absolute并且通过设置left top 等来通过:hover时改变其显示位置时将会不起作用，如果他们不在父元素的可视范围内，http://haslayout.net/css/ie7-broken-hover-absolute-bug</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>给其加上margin-left:0%;</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE8 :active 背景偏移">
                        <h3 class="bug-title">当:active时Button背景偏移</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE8</i>
                            <p>给button设置:active时背景会做偏移</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>可以通过设置:active时的 -ms-background-position-x和-ms-background-position-y来改变这个偏移。</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE8 边框消失 outline :hover">
                        <h3 class="bug-title">:hover边框消失bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE8</i>
                            <p>当设置了outline的元素后，再设置:hover的时候，如果设置边框的话，将会不显示</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>规避触发条件</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 绝对定位 a标签">
                        <h3 class="bug-title">position:absolute元素中的a元素bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7</i>
                            <p>position:absolute元素中，a{ display:block}, 在非:hover时只有文本可点击</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>A:http://haslayout.net/css/Partial-Click-Bug，影响版本ie6，解决方法：设置layout</p>
							<p>B:http://haslayout.net/css/Partial-Click-Bug-v2，影响版本ie6/7，解决方法：给a添加background, 如果背景透明，使用background:url('任何页面中已经缓存的文件链接')；不推荐backgroundurl(#)[官方的解决方法]，因为会增加一下HTTP请求</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 文档滚动 overflow">
                        <h3 class="bug-title">文档滚动bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7</i>
                            <p>不在html标签上设置overflow或许会影响到body上面的overflow，具体请看 http://haslayout.net/css/Document-Scrollbars-Overflow-Inconsistency </p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>html{ overflow:visible;} body{ overflow:hidden;}</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6">
                        <h3 class="bug-title">* html bug ie6下不会被忽略</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>* html [selector]在ie6下通常不会被忽略，这个bug通常被用来作ie6的hack使用</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>选择性规避</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 浮动 文字斜体">
                        <h3 class="bug-title">浮动元素内文字斜体bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>给两个浮动元素的某中一个的文字设定为斜体，另一个元素下拉在有斜体文字元素的下面，影响版本ie6，http://haslayout.net/css/Italics-Float-Bug</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>给有斜体文字的元素添加overflow:hidden </p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 浮动 自适应伸展">
                        <h3 class="bug-title">不正确的浮动伸展布局</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7</i>
                            <p>连续浮动的元素并且设置clear属性没法自动伸展，demo：http://haslayout.net/demos/Incorrect-Float-Shrink-Wrap-Bug-Demo.html</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>给连续浮动元素加一个span然后设置display:inline-block和display:block </p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 连续浮动">
                        <h3 class="bug-title">连续浮动元素bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7</i>
                            <p>连续浮动元素bug：http://haslayout.net/css/Float-Squeeze-Weird-Gap-Bug</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>添加宽度</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 连续浮动 重复字符">
                        <h3 class="bug-title">连续浮动字符出现重复字符</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7</i>
                            <p>连续浮动字符出现重复字符，影响版本ie6/ie7, http://haslayout.net/css/Float-Squeeze-Duplicate-Last-Character-Bug</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>这个和上面的一个问题解决方案都差不多，14是通过加一个宽度，而这个是通过给浮动字符加一个position:relative;</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 空元素 高度">
                        <h3 class="bug-title">空元素高度bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7</i>
                            <p>空元素高度bug，有layout的空元素获得了高度:http://haslayout.net/css/Empty-Element-Height-Bug <br>
							<pre>div {
background: blue;
width:100%; /* to give "layout"  */
}
</pre>
							</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>
							<pre>div {
height: 0;
overflow: hidden;
}
</pre>
							</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE7 dotted边框 dashed边框">
                        <h3 class="bug-title">ie7的1px dotted 边框变成dashed边框的bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE7</i>
                            <p>当设置了1px dotted边框后，有一个边框的宽度大于1px 的话其它为1px边框会变为dashed的样式，具体请看http://haslayout.net/css/ie7-1px-Dotted-Border-Appears-As-Dashed-Bug </p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p></p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE8 th 表格 继承属性 text-align">
                        <h3 class="bug-title">th没有继承text-align属性的bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE8</i>
                            <p>当给table设置text-align时，th没有继承样式，http://haslayout.net/css/non-inherited-th-text-align-bug </p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>给th设置text-align:inherit;来解决ie8下这个丑陋的bug。</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 表格 继承属性 text-align">
                        <h3 class="bug-title">text-align bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7</i>
                            <p>当容器外面设置了text-align，如果容器里面有文本和其他block的元素, block的元素也会继承text-align，这是不正确的，http://haslayout.net/css/Text-Align-Bug </p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>重新写出合理的有语义的markup，如文本外面加一个p。</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 IE8 style link @import 限制">
                        <h3 class="bug-title">32个style限制</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7 IE8</i>
                            <p>在32个"style"方法(style, link, @import)后浏览器会忽略后面的样式</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>选择规避</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE8 浮动 图片 标记错误">
                        <h3 class="bug-title">浮动图片list标记错位bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE8</i>
                            <p>当list里面有浮动的image时，list标记显示的位置跑在里面了，http://haslayout.net/css/Image-Float-Bullet-Chaos-Bug </p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>用背景图片代替list自带的标记 </p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 dt dd dl 浮动 背景">
                        <h3 class="bug-title">dt, dd, li背景消失bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>当给浮动的div里面的dt, dd, dl设置背景时不显示，http://haslayout.net/css/disappearing-list-background-bug </p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>给dt, dd, dl加上position:relative; </p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE8 baseline 偏移 display overflow">
                        <h3 class="bug-title">li内元素偏离 baseline 向下拉</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE8</i>
                            <p>当给list里面的元素设置display和overflow属性后list标记会偏移，http://haslayout.net/css/list-drop-shift-bug </p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>给里面的元素加一个float:right; width:100% 或给li设置display:inline </p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 ol 数字标记 自增">
                        <h3 class="bug-title">ol数字标记不自增</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7</i>
                            <p>当给li设置宽度时会触发这个bug</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>给li设置display:list-item </p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 ul ol 标记">
                        <h3 class="bug-title">ul/ol标记消失bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7</i>
                            <p>当ul/ol触发了layout并且有margin-left会触发这个bug，http://haslayout.net/css/No-Bullets-on--ul--and--ol--Bug </p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>给li设置margin-left（不要加在ul/ol上）</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 图片 垂直居中">
                        <h3 class="bug-title">图片不垂直居中</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7</i>
                            <p>当使用line-height来居中图片时在ie6/7下不会生效，http://haslayout.net/css/No-line-height-Vertical-Center-on-Images-Bug </p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>在img后加一个有layout的空白元素如&lt;span&gt;&lt;/span&gt;</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 IE8 图片 label form">
                        <h3 class="bug-title">图片label bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7 IE8</i>
                            <p>当label中有img的时候无法触发点击选中form元素事件：http://haslayout.net/demos/Image-Label-Focus-Bug-Demo.html</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="http://haslayout.net/demos/Image-Label-Focus-Bug-Fixed-Demo-CMS.html">Fixed</a></span>
                            <p>通过给<label>内加入一个空的span标签，然后设置 position:absolute；background:url(#); 设置label float:left; position:relative;overflow:hidden;就可以解决了。http://haslayout.net/demos/Image-Label-Focus-Bug-Fixed-Demo-CMS.html</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 IE8 filter 透明 背景">
                        <h3 class="bug-title">使用filter处理的透明背景图片的透明部分不可点bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7 IE8</i>
                            <p>当给一个display:block元素使用filter来支持png透明的时候，透明区域无法点击，http://haslayout.net/css/no-transparency-click-bug </p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>不要使用 background:none;filter…，而是background:url(#);filter…</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE7 白色背景 :hover">
                        <h3 class="bug-title">白色背景hover bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE7</i>
                            <p>给hover设置background-color:#ffffff;时，背景不会改变，http://haslayout.net/css/hover-white-background-ignore-bug </p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>设置background:#ffffff;</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 IE8 PNG 背景">
                        <h3 class="bug-title">png图片和背景颜色不一致</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7 IE8</i>
                            <p>设置背景颜色和png图片背景同样的颜色代码最后表现不一致，http://haslayout.net/css/PNG-Image-and-Background-Color-Mismatch </p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>原来是因为ie支持"PNG Gamma profiles"，解决方案是通过一个pngcrush程序来优化图片。</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 IE8 background url()">
                        <h3 class="bug-title">没有背景图片bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7 IE8</i>
                            <p>当使用background的时候如果在url()后没有加空格背景图片就不会显示。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>添加空格</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 背景溢出 滚动条">
                        <h3 class="bug-title">背景溢出,拖动滚动条后显示正常 bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>一个容器里面有浮动元素并且通过加一个clear:both的额外div来清除浮动会产生此bug，http://haslayout.net/css/Leaking-Background-Bug </p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>建议尽量不要通过增加一个 clear:both的div来清除浮动，可以通过在外层加上overflow:hidden;对于ie可以通过加上zoom:1；来触发ie的 layout </p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 IE8 自定义鼠标">
                        <h3 class="bug-title">自定义鼠标bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7 IE8</i>
                            <p>当自定义鼠标样式的时候，如果url()里面的路径是相对路径的话，ie会认为相对于当前文档而不会出现鼠标样式的图片，http://haslayout.net/css/Custom-Cursor-Bug </p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>采用绝对路径。此言我觉的有误，下面是一些总结：</p>
							<p>cursor:设置或检索在对象上移动的鼠标指针采用何种系统预定义的光标形状。<br>
<strong>注意：</strong>使用自定义图像作为光标类型，IE, Opera只支持*.cur等特定的图片格式；Firefox, Chrome, Safari既支持特定图片类型也支持常见的*.jpg, *.gif, *.jpg等图片格式。 
cursor的属性值可以是一个序列 
示例代码：</p>
<pre>
:link,:visited{ 
    cursor:url(example.svg#linkcursor),
            url(hyper.cur),
            url(hyper.png) 2 3,
            pointer;
}</pre><p>
本例用来给所有的超链接定义光标类型，客户端如果不支持SVG类型的光标，则使用下个"hyper.cur"；如果cur类型也不支持，则使用下个"hyper.png"；依次类推。
</p>
                        </div>
                    </li>
					<li class="bugs-item">
                        <h3 class="bug-title" data-key="IE6 IE7 IE8 noscript border">noscript样式bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7 IE8</i>
                            <p>当js可用的时候如果给noscript设置border和背景都可以显示，http://haslayout.net/css/noscript-ghost-bug </p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>给noscript设置display:none; </p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE8 百分比padding 垂直marging">
                        <h3 class="bug-title">百分比padding垂直margin bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE8</i>
                            <p>当父元素设置了百分比的padding，子元素有垂直的margin的时候，就好像父元素被设置了margin一样</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>给父元素加一个overflow:hidden/auto </p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 IE8 auto margin 水平居中">
                        <h3 class="bug-title">auto margin居中bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7 IE8</i>
                            <p>给block元素设置margin auto无法居中，http://haslayout.net/css/no-auto-margin-center-pseudo-bug</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>出现这种bug的原因通常是没有Doctype，然后触发了ie的quirks mode，加上&lt;!DOCTYPE html&gt;就可以了。</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 表单 双边距">
                        <h3 class="bug-title">表单元素双margin bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7</i>
                            <p>input和textarea或许会继承父元素的水平的margin，具体请看 http://haslayout.net/css/Form-Control-Double-Margin-Bug </p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方案</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 IE7 负margin">
                        <h3 class="bug-title">负margin bug</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6 IE7</i>
                            <p>当给一个有layout容器里面的元素设置负marin时内容会被截断，http://haslayout.net/css/Negative-Margin-Bug </p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>不让容器有layout或者给负marin的元素layout并设置 position:relative;</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 margin auto button 居中">
                        <h3 class="bug-title">设置margin auto的button没有居中</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>ie8下如果给像button这样的标签（如button, input[type="button"], input[type="submit"]）设置{ display:block; margin-left:auto; margin-right:auto; }如果不设置宽度的话无法居中。demo http://haslayout.net/demos/No-Auto-Margin-Center-on-Buttons-Inconsistency-Fixed-Demo-CS.html </p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>可以给button加上宽度</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 li :hover 高度增大">
                        <h3 class="bug-title">ie6下li里有hover行为时li高度会增大</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>ie6下li里有hover行为时li高度会增大</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>重设li的padding-top为0或不要让li拥有layout。</p>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 line-height 非文字对象">
                        <h3 class="bug-title">IE6下 line-height属性非文字对象中失效</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>在IE6中，只有当文字和img、input、textarea、select、object等对象在同一个容器中的时候，line-height属性在这些非文字的对象中就会失效。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>设置非文字的对象的样式：</p>
							<pre>
_margin: (容器的line-height – 对象本身的高度)/2px 0;
vertical-align:middle;
</pre>
                        </div>
                    </li>
					<li class="bugs-item" data-key="IE6 图标 文字">
                        <h3 class="bug-title">图标和文字不能垂直居中</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>IE6浏览器中，图标和文字不能垂直居中</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>对包含文字的标签设置layout。</p>
                        </div>
                    </li>
				</ol>
                <h2>技巧和经验</h2>
                <ol>
                    <li class="bugs-item" data-key="Chrome 12px 字体">
                        <h3 class="bug-title">小于12px的字体显示问题</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">Chrome</i>
                            <p>在中文版Chrome里面，网页CSS里所有小于12px的字体设置都无效，最终将显示12px。这样弄的本意可能是好的，因为中文一旦小于12px，就变得不易阅读。</p>
                            <p>但中文版Chrome也会阅读英文网站啊！中文网页里面也会有英文的小字体设置需求啊！尤其是一些文字部份的设计，不小实在不好看，影响整个排版的美观。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方案，添加一个私有属性到html选择器 <code>:html{-webkit-text-size-adjust: none;}</code></p>
                            <p>
                                但是这个建议不要加在html上，可以添加到单一class上，因为添加了此属性后，引起网页滚轮放大时，字体大小不会变化的问题。顾名思义, 禁用Webkit内核浏览器的文字大小调整功能。</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 空白间隙">
                        <h3 class="bug-title">清除图片下方出现几像素的空白间隙</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>如何清除图片下方出现几像素的空白间隙</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>可以使用 <code>img{display:block;}</code> </p>
                            <p>也可以使用 <code>img:vertical-align:top</code><br>除了top值外，还可以设置为text-top | middle | bottom | text-bottom，甚至特定的&lt;length&gt;和&lt;percentage&gt;值都可以。</p>
                            <p>图片父元素添加此css同样可以：<code>{font-size:0;line-height:0;}</code> </p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 文本 垂直对齐 输入框">
                        <h3 class="bug-title">文本垂直对齐文本输入框</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>如何让文本垂直对齐文本输入框</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方案：<code>input{vertical-align:middle;}</code></p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 flash div 层级">
                        <h3 class="bug-title">falsh与div层级</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>如何让层在falsh上显示？</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>设置flash的wmode值为transparent或opaque，<code>&lt;param name="wmode" value="transparent" /&gt;</code></p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 iframe 背景透明">
                        <h3 class="bug-title">如何设置IE下的iframe背景透明？</h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>设置iframe元素的标签属性allowtransparency="allowtransparency"然后设置iframe内部页面的body背景色为transparent。不过由此会引发IE下一些其它问题，如：设置透明后的iframe将不能遮住select。</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方案</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="强制 不换行 省略号">
                        <h3 class="bug-title">强制不换行，超出部分显示省略号</h3>
                        <div class="question"><span class="link">使用技巧</span> <i class="browser" title="涉及浏览器">All</i>
                            <p>文本强制不换行，超出部分隐藏并显示省略号…</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p> <code> overflow:hidden; text-overflow:ellipsis; white-space:nowrap; </code></p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="强制 换行">
                        <h3 class="bug-title">强制换行(word-wrap与word-break)、</h3>
                        <div class="question"><span class="link">使用技巧</span> <i class="browser" title="涉及浏览器">All</i>
                            <p>强制换行(包括文本和数字)，word-wrap与word-break的区别</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>兼容 IE 和 FF 的换行 CSS 推荐样式最好的方式是 <code> word-wrap:break-word;overflow:hidden; </code>，而不是 <code>word-wrap:break-word; word-break:break-all;</code>，也不是 <code>word-wrap:break-word; overflow:auto;</code></p>
                            <p>http://homepage.yesky.com/207/7707707.shtml</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="文本间距">
                        <h3 class="bug-title">文本间距</h3>
                        <div class="question"><span class="link">使用技巧</span> <i class="browser" title="涉及浏览器">All</i>
                            <p>实现文本字体之间的间距</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p> <code> letter-spacing:-0.5px; </code></p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6">
                        <h3 class="bug-title"></h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>Bug描述</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方案</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 ">
                        <h3 class="bug-title"></h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>Bug描述</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方案</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 ">
                        <h3 class="bug-title"></h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>Bug描述</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方案</p>
                        </div>
                    </li>
                    <li class="bugs-item" data-key="IE6 ">
                        <h3 class="bug-title"></h3>
                        <div class="question"><span class="link"><a target="_blank" title="Bug重现" href="">Bug</a></span> <i class="browser" title="涉及浏览器">IE6</i>
                            <p>Bug描述</p>
                        </div>
                        <div class="answer"><span class="link"><a target="_blank" title="解决办法" href="">Fixed</a></span>
                            <p>解决方案</p>
                        </div>
                    </li>
                </ol>






                <!--<h2>Menu list</h2>
                <p>menu for bugs lists of links. Made interactive with the bugs.</p>
                <h3>Bugs和解决方案</h3>
                <ol>
                    <li><a href="">如何在IE6及更早浏览器中定义小高度的容器？</a></li>
                    <li><a href="">如何解决IE6及更早浏览器浮动时产生双倍边距的BUG？ </a></li>
                    <li><a href="">如何在IE6及更早浏览器下模拟min-height效果？ </a></li>
                    <li><a href="">如何解决按钮在IE7及更早浏览器下随着value增多两边留白也随着增加的问题？ </a></li>
                    <li><a href="">如何解决IE7及更早浏览器下当li中出现2个或以上的浮动时，li之间产生的空白间隙的BUG？ </a></li>
                    <li><a href="">如何解决IE6及更早浏览器下的3像素BUG？ </a></li>
                    <li><a href="">如何解决IE6下的文本溢出BUG（江湖匪号：“谍影重重”或“一只猪的故事”）？ </a></li>
                    <li><a href="">如何解决IE6使用滤镜PNG图片透明后，容器内链接失效的问题？ </a></li>
                    <li><a href="">如何解决IE6无法识别伪对象:first-letter/:first-line的问题？ </a></li>
                    <li><a href="">如何解决IE8会忽略伪对象:first-letter/:first-line里的!important规则的问题？ </a></li>
                    <li><a href="">如何解决IE6会忽略同一条样式体内的!important规则的问题？ </a></li>
                    <li><a href="">如何解决IE6及更早浏览器下当li内部元素是定义了display:block的内联元素时底部产生空白的问题？ </a></li>
                    <li><a href="">如何解决IE6及更早浏览器下未定义宽度的浮动或绝对定位元素会被内部设置了zoom:1的块元素撑开的问题？ </a></li>
                    <li><a href="">如何解决IE7及更早浏览器下子元素相对定位时父元素overflow属性的auto|hidden失效的问题？ </a></li>
                    <li><a href="">如何解决Chrome在应用transition时页面闪动的问题？ </a></li>
                </ol>
                <p></p>
            </section>
            -->
            <!-- Tactics
    ================================================== -->
            <section id="tactics">
                <div class="page-header">
                    <h1>策略</h1>
                </div>
                <p>在讨论IE6等浏览器的BUG及如何修复之前，有必要先讲一些策略去避免这些恼人的问题——正所谓防患于未然 。</p>
                <h3>IE6 市场占有率</h3>
                <p>有一个统计IE6市场占有率的网站——<a target="_blank" href="http://www.ie6countdown.com" title="点击查看当前IE6市场比例">IE6 Countdown</a>，这里统计了动态统计了全球IE6市场比例，中国是最高比例的！但是最重要的，还是你自己网站的统计数据。如果你对你的网站进行了流量分析，那么IE6的占有率是否值得你去针对IE6进行开发？这需要你自己去权衡。</p>
                <p>如果你网站绝大部分访问者不使用IE6并且不付费给你，那么你不必特意区针对IE6做兼容，从而节省时间、精力及资金。</p>
                <h3>做一个简洁的设计</h3>
                <p>代码精简，扩展性好！</p>
                <p>如果你有丰富的开发经历，攻克过很多种布局难题，<strong>记录下你的解决方案</strong>，在以后碰到相同问题时可以提高开发效率。</p>
                <h3>使用合适的文档申明(doctype)</h3>
                <p>使用一个错误的文档声明会触发quirks mode(怪异模式)，正确的文档声明可以保证你的页面在所有浏览器下保持一致的效果。</p>
                <p>现在没有太多的顾虑和疑问，全部统一采用html5格式的头部声明<code>&lt;!DOCTYPE html&gt;</code></p>
                <h3>验证你的代码</h3>
                <p>校验仅仅只需花费一点点时间，而且将受益于所有浏览器而非仅仅IE6；验证确保了向后兼容并且易于维护。至少也得验证XHTML！唯一可以忽略验证的情况是在你打算使用CSS3时。</p></p>
                <p>你可以使用w3提供的工具 —— <a href="http://validator.w3.org/" target="_blank">验证XHTML</a> / <a href="http://jigsaw.w3.org/css-validator/" target="_blank">验证CSS</a></p>
                <h3>先对标准浏览器进行兼容</h3>
                <p>在写代码的过程中，一开始在标准浏览器中测试（如 Firefox, Opera, Chrome等），然后再去测试非标准浏览器（如IE6/IE7）。</p>
                <h3>渐进增强(Progressive Enhancement)</h3>
                <p>渐进增强(Progressive Enhancement)是 为了确保没有页面特效后基本功能也是可用的。简单来讲，渐进增强是指在确保页面在禁用JavaScript后能正常运作后，再对页面添加各种特效 （JavaScript动画、Ajax异步等等）。我们同样可以运用“渐进增强”原则来使用CSS3（或者一些CSS2）、HTML5以及其他IE6所不支持的web规范。</p>
                <p>某些情况下，是无法让所有用户在任何浏览器下都完全一模一样，特别是那些使用IE6的用户。运用渐进增强策略，可以保证让那些用户至少使用到你网站（或网络应用）的基本功能。</p>
                <blockquote><h4>更多渐进增强的资料：</h4><ul><li><a href="http://www.alistapart.com/articles/understandingprogressiveenhancement/" rel="nofollow" target="_blank">Understanding Progressive Enhancement</a></li><li><a href="http://www.alistapart.com/articles/progressiveenhancementwithcss/" rel="nofollow" target="_blank">Progressive Enhancement With CSS</a></li><li><a href="http://www.smashingmagazine.com/2009/04/22/progressive-enhancement-what-it-is-and-how-to-use-it/" rel="nofollow" target="_blank">Progressive Enhancement: What It Is, And How To Use It?</a></li><li><a href="http://dev.opera.com/articles/view/graceful-degradation-progressive-enhance/" rel="nofollow" target="_blank">Graceful Degradation vs. Progressive Enhancement</a></li><li><a href="http://icant.co.uk/articles/pragmatic-progressive-enhancement/" rel="nofollow" target="_blank">Pragmatic Progressive Enhancement – Why You Should Bother With It</a></li></ul></blockquote>
                <p><span class="label label-info">注：</span> 这里发现了<code>white-space: pre-wrap</code>引起的换行空白间距的问题(此属性有争议)，去除源代码中因排版格式产生的换行/空格等，显示就正常了！</p>
                <h3>使用自己的预设样式（CSS Reset）</h3>
                <p>每个浏览器都有各自不同的预设样式，在你的样式表之前使用预设样式（CSS Reset）可以避免在之后编写冗长的浏览器兼容样式。这里你可以参考本项目的css reset或者<a target="_blank" href="http://necolas.github.com/normalize.css/" title="Make browsers render all elements more consistently.(IE 8+, Firefox 4+, Safari 5+, Opera, Chrome)">Normalize.css</a>。</p>
            </section>
            
            <!-- CSS Hack
    ================================================== -->
            <section id="css-hack">
                <div class="page-header">
                    <h1>CSS hack</h1>
</div>
                <h2>CSS hack原理</h2>
                <p>由于不同的浏览器对CSS的支持及解析结果不一样，还由于CSS中的优先级的关系。我们就可以根据这个来针对不同的浏览器来写不同的CSS。CSS Hack主要针对IE浏览器。</p>
                <p>CSS Hack大致有3类表现形式如下：再添加一类新的Hack原理——<a href="./bugs-and-fixed.php#media-hack">Medial Queries</a></p>
<h2 id="condition-hack">第一类：条件Hack/条件注释</h2>
                <p>条件Hack又称<a target="_blank" href="http://baike.baidu.com/view/3615016.htm" title="点击查看其百度百科">条件注释</a>，IE中的条件注释（Conditional comments）对IE的版本和IE非IE有优秀的区分能力，是WEB设计中常用的hack方法，且被认为是取代针对IE css hack的首选办法。但是由于维护的不便利性，所以在处理兼容性上使用的不是非常广泛，主要用于针对特定版本浏览器的指定文件引入上，如：<a href="./bugs-and-fixed.php#ie6png">IE6 PNG半透明bug处理</a>、html5.js等。</p>
				<div class="bs-docs-example">
					<p>
                    <!--[if lt IE 7 ]>此浏览器版本小于IE7<![endif]-->
                    <!--[if IE 7 ]>这是IE7浏览器<![endif]-->
                    <!--[if IE 8 ]>这是IE8浏览器<![endif]-->
                    <!--[if IE 9 ]>这是IE9浏览器<![endif]-->
                    <!--[if (gt IE 9)|!(IE)]><!-->
                        这个浏览器版本大于IE9或者此浏览器是非IE浏览器
                    <!--<![endif]-->
				</div>
<pre class="prettyprint linenums">
&lt;!--[if &lt;keywords&gt; IE &lt;version&gt;]&gt;
 HTML代码块 
&lt;![endif]--&gt;

&lt;!--[if lt IE 7 ]&gt; 如果小于IE7 &lt;![endif]--&gt;
&lt;!--[if IE 7 ]&gt; 如果是IE7 &lt;![endif]--&gt;
&lt;!--[if IE 8 ]&gt; 如果是IE8 &lt;![endif]--&gt;
&lt;!--[if IE 9 ]&gt; 如果是IE9 &lt;![endif]--&gt;
&lt;!--[if (gt IE 9)|!(IE)]&gt; 如果大于IE9或非IE &lt;!--&lt;![endif]--&gt;
</pre>
<h4>&lt;keywords&gt;</h4>
    <p>if条件共包含6种选择方式：是否、大于、大于或等于、小于、小于或等于、非指定版本</p>
    <dl>
<dt>是否：</dt>
        <dd>指定是否IE或IE某个版本。关键字：<em>空</em></dd>
        <dt>大于：</dt>
        <dd>选择大于指定版本的IE版本。关键字：<em>gt</em>（greater than） </dd>
        <dt>大于或等于：</dt>
        <dd>选择大于或等于指定版本的IE版本。关键字：<em>gte</em>（greater than or equal） </dd>
        <dt>小于：</dt>
        <dd>选择小于指定版本的IE版本。关键字：<em>lt</em>（less than） </dd>
        <dt>小于或等于：</dt>
        <dd>选择小于或等于指定版本的IE版本。关键字：<em>lte</em>（less than or equal） </dd>
        <dt>非指定版本：</dt>
        <dd>选择除指定版本外的所有IE版本。关键字：<em>!</em>，注意：非IE需要使用这个&lt;!--[if !IE]&gt;&lt;!--&gt;非IE&lt;!--&lt;![endif]--&gt;请参看以上示例。</dd>
    </dl>
    <h4>&lt;version&gt;</h4>
    <p>目前的常用IE版本为6.0及以上，推荐酌情忽略低版本，把精力花在为使用高级浏览器的用户提供更好的体验上</p>
<h2 id="property-hack">第二类：属性级Hack</h2>
 <p>属性级Hack又称类内部Hack，比如 IE6能识别下划线"_"和星号" * "，IE7能识别星号" * "，但不能识别下划线"_"，而firefox两个都不能认识等等。</p>
<div class="bs-docs-example">
<style>
.all-IE{background:silver\9;}
:root .IE-9{color:green\0/;}
.IE9{color:lime \9\0;}
.gte-IE-8{color:blue\0;}
.lte-IE-7{*color:yellow;}
.IE-7{+color:orange;}
.IE-6{_color:red;}
.not-IE{color//:red;}
</style>
    <p class="all-IE">.all-IE </p>
    <p class="IE-9">.IE-9 </p>
    <p class="IE9">.IE9 </p>
    <p class="gte-IE-8">.gte-IE-8 </p>
    <p class="lte-IE-7">.lte-IE-7 </p>
    <p class="IE-7">.IE-7 </p>
                <p class="IE-6">.IE-6 </p>
                <p class="not-IE">.not-IE </p>
                </div>
<pre class="prettyprint linenums">
.all-IE{background:silver\9;}
:root .IE-9{color:green\0/;}
.IE9{color:lime \9\0;}
.gte-IE-8{color:blue\0;}
.lte-IE-7{*color:yellow;}
.IE-7{+color:orange;}
.IE-6{_color:red;}
.not-IE{color//:red;}</pre>
<p><span class="label label-warning">注意：</span> 上述属性个别还有待进一步验证，如.not-IE。</p>
<h2 id="selector-hack">第三类：选择符级Hack</h2>
<p>选择符级Hack或称选择器Hack,比如 IE6能识别*html .class{}，IE7能识别*+html .class{}或者*:first-child+html .class{}等等。</p> 
<div class="bs-docs-example">
<style>
* html .test{color:#090;}       /* For IE6 and earlier */
* + html .test{color:#ff0;}     /* For IE7 */
*:first-child+html .test{color:#00f}     /* For IE7 */
.test:lang(zh-cn){color:#f00;}  /* For IE8+ and not IE */
.test:nth-child(1){color:#0ff;} /* For IE9+ and not IE */
</style>
<p class="test">
这一段文字在不同的浏览器下字体颜色不一定相同：<br>
小于或等于IE6时为#090，<br>
IE7时为#ff0<br>
IE8+或not IE为#f00<br>
IE9+或not IE为#0ff
</p>
</div>
<pre class="prettyprint linenums">
* html .test{color:#090;}       /* For IE6 and earlier */
* + html .test{color:#ff0;}     /* For IE7 */
*:first-child+html .test{color:#00f}     /* For IE7 */
.test:lang(zh-cn){color:#f00;}  /* For IE8+ and not IE */
.test:nth-child(1){color:#0ff;} /* For IE9+ and not IE */
</pre>
<p><span class="label label-warning">注意：</span> 上述属性个别还有待进一步验证，……。</p>
<h2 id="media-hack">第四类：Medial Queries方法</h2>
<p>Medial Queries的另一用法——服务于IE，使用@media实现IE hack——结合"\0"，"\"和"\9"来仅让IE某些版本识别而实现Hack。</p> 
<pre class="prettyprint linenums">
@media screen\9 {.selector { property: value;}}      /* For IE6 IE7 */
@media \0screen\,screen\9 { .selector { property: value; }}     /* For IE6 IE7 IE8 */
@media \0screen {.selector {  property: value; }}  /* For IE8 */
@media screen\0 {.selector { property: value;}}    /* For IE8 IE9 IE10 */
@media screen and (min-width:0\0) {.selector {  property: value; }}  /* For IE9 IE10 */
</pre>
<p></p>
            </section>
            
            <!-- in6png
    ================================================== -->
            <section id="ie6png">
                <div class="page-header">
                    <h1>图片</h1>
                </div>
                <h2>PNG-24半透明（IE6）</h2>
                <p>由于IE6不支持PNG-24图片的半透明，所以要针对IE6 做单独处理，你可以使用CSS滤镜处理，代码如下：（在可能的情况下尽量使用gif或png8替代）</p>
<pre class="prettyprint linenums">
html .png24bg{
_background: none; /* 隐藏当前背景图从而使用后面的滤镜重置它(或使用transparent) */
width: 500px; /* 必须指定宽度 */
height: 176px; /* 必须指定高度 */
filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true, sizingMethod=scale, src='png24bge.png');
}</pre>
                <p>以上方法只能应用于处理背景，且无法平铺等，所以推荐使用<a target="_blank" href="http://www.dillerdesign.com/experiment/DD_belatedPNG/">DD_belatedPNG插件</a>处理，具备其他方法所不支持的backgrond-position与background-repeat属性，同时DD_belatedPNG还支持a:hover属性</p>
                <div class="bs-docs-example">
                	<p class="test-png24 ie6png"></p>
                </div>
<pre class="prettyprint linenums">
&lt;!--[if lte IE 6]&gt;
&lt;script src=&quot;/assets/js/DD_belatedPNG-min.js&quot; &gt;&lt;/script&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
   DD_belatedPNG.fix('.ie6png');
&lt;/script&gt;
&lt;![endif]--&gt;

&lt;p class=&quot;test-png24 ie6png&quot;&gt;&lt;/p&gt;
</pre>
			<p>引用函数是 DD_belatedPNG.fix() , 括号里分别填写应用PNG的CSS选择器（可使用ID选择器和类选择器）和应用类型（分为img和background两种）。</p>
            <p>这里还有一些关于<a target="_blank" href="http://www.tcreator.info/webSchool/xhtml-css/ie6-DD_belatedPNG.html">使用DD_belatedPNG的注意事项</a>。</p>
            <blockquote><h4>JavaScript方式修复IE6 PNG</h4><ul><li><a href="http://www.clientcide.com/wiki/cnet-libraries/02-browser/01-fixpng" rel="nofollow" target="_blank">MooTools’ FixPNG</a></li><li><a href="http://jquery.andreaseberhard.de/pngFix/" rel="nofollow" target="_blank">jQuery PNG fix</a></li><li><a href="http://www.twinhelix.com/css/iepngfix/" rel="nofollow" target="_blank">IE PNG Fix by Twin Helix</a></li><li><a href="http://entropymine.com/jason/tweakpng/" rel="nofollow" target="_blank">TweakPNG</a></li><li><a href="http://www.dillerdesign.com/experiment/DD_belatedPNG/" rel="nofollow" target="_blank">DD_belatedPNG</a></li></ul></blockquote>
</section>
            
            <!-- Corner radius
    ================================================== -->
            <section id="corner-radius">
                <div class="page-header">
                    <h1>圆角 - Corner radius</h1>
                </div>
                <h2>圆角第一种：CSS3 圆角</h2>
                <p>实现圆角最好的办法还是使用css3，那么这需要设计在各浏览器上表现出差异性，也就是IE保持直角的设计。</p>
                <div class="bs-docs-example"> </div>
<pre class="prettyprint linenums">
/* Corner radius-圆角 */
.ui-corner-all, .ui-corner-top, .ui-corner-left, .ui-corner-tl {
    -webkit-border-top-left-radius: 4px;
     -khtml-border-top-left-radius: 4px;
        -moz-border-radius-topleft: 4px;
            border-top-left-radius: 4px;
} 
.ui-corner-all, .ui-corner-top, .ui-corner-right, .ui-corner-tr { 
    -webkit-border-top-right-radius: 4px;
     -khtml-border-top-right-radius: 4px;
    	-moz-border-radius-topright: 4px;
            border-top-right-radius: 4px;
} 
.ui-corner-all, .ui-corner-bottom, .ui-corner-left, .ui-corner-bl {
    -webkit-border-bottom-left-radius: 4px;
     -khtml-border-bottom-left-radius: 4px;
        -moz-border-radius-bottomleft: 4px;
            border-bottom-left-radius: 4px;
} 
.ui-corner-all, .ui-corner-bottom, .ui-corner-right, .ui-corner-br {
    -webkit-border-bottom-right-radius: 4px;
     -khtml-border-bottom-right-radius: 4px;
    	-moz-border-radius-bottomright: 4px;
            border-bottom-right-radius: 4px;
}</pre>
<p>如果不能使用上述方法替代（影响用户体验比较严重），那么只能使用图片来处理，这样扩展性不是很好，但是如果设计上达到高度的一致性，那么扩展性也是蛮好的！</p>
<h2>圆角第二种：四分圆定位法</h2>
<p>使用圆角图片，将四个圆角合并到一处即合成一个圆（也可能是椭圆），换种说法就是一个圆分四份，分别对应盒模型的四个圆角，使用定位的方法处理即可。</p>
<pre class="prettyprint linenums">
&lt;i class=&quot;corner-tl&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;corner-tr&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;corner-bl&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;corner-br&quot;&gt;&lt;/i&gt;
</pre>
<p>定位到四个位置相对来说比较简单，这里不做详解，注意IE6下绝对定位的1px bug，使用CSS hack处理下即可。</p>

<h2>圆角第三种：可扩展盒模型</h2>
<p>此方法使用四层盒模型结构，分别对应四角（左上、右上、左下，右下），适用于复杂的边框（具备投影效果或和渐变背景融为一体等）去掉效果使用一般的边框时及其影响用户体验的情况。</p>
<p>你可以详细阅读<a href="http://www.virtuosimedia.com/tutorials/css-rounded-corner-menus" target="_blank">CSS 圆角菜单</a>。</p>
<pre class="prettyprint linenums">
&lt;div class=&quot;box-tl&quot;&gt;
    &lt;div class=&quot;box-tr&quot;&gt;
        &lt;div class=&quot;box-bl&quot;&gt;
            &lt;div class=&quot;box-br&quot;&gt;
            ...
            &lt;/div&gt;
        &lt;/div&gt;	
    &lt;/div&gt;
&lt;/div&gt;
</pre>
<p>针对四块区域的切图有要求，若以宽高100x100作喻，按如上结构则tl-99x99,tr-1x99,bl-99x1,br-1x1(1代表至少包含住边框在内，99代表除1外的其余部分，不代表真是比例)，如此只要不超过整个的tl+br的宽高，都可做自适应扩展！</p>
<p><span class="label label-warning">注意：</span> 此方法会导致结构嵌套较多！</p>
            </section>
            
            <!-- Background-Flicker
    ================================================== -->
            <section id="background-flicker">
                <div class="page-header">
                    <h1>背景闪烁问题</h1>
                </div>
                <h2>Example</h2>
                <p>如果你给链接、按钮用CSS sprites作为背景，你可能会发现在IE6下会有背景图闪烁的现象。造成这个的原因是由于IE6没有将背景图缓存，每次触发hover的时候都会重新加载，可以用JavaScript设置IE6缓存这些图片：</p>
                <div class="bs-docs-example"></div>
<pre class="prettyprint linenums">
document.execCommand(&quot;BackgroundImageCache&quot;,false,true);
</pre>
				<blockquote><h4>其他解决方法：</h4><ul><li><a href="http://www.fivesevensix.com/studies/ie6flicker/" rel="nofollow" target="_blank">Minimize Flickering CSS Background Images in IE6</a></li></ul></blockquote>
            </section>
            
            <!-- Layout
    ================================================== -->
            <section id="layout">
                <div class="page-header">
                    <h1>布局</h1>
                </div>
                <p class="lead">解决IE6布局方面的BUG非常的恼人！特别是在实现一个精美的设计稿时。</p>
                <h2 id="understanding-hasLayout">理解 hasLayout</h2>
                <p>许多IE6下的Bug及渲染问题都可以归于微软的私有概念hasLayout。简要的说，在给元素定义具体的尺寸（如 <code>height</code> 或 <code>width</code> ）就会触发hasLayout，在IE6下缺失或触发hasLayout会导致一些bug。</p>
                <blockquote><h4>扩展阅读：</h4><ul><li><a href="http://bbs.blueidea.com/thread-2636904-1-1.html" target="_blank" title="">《On having layout》</a>(译文)</li><li><a href="http://msdn.microsoft.com/en-us/library/bb250481%28VS.85%29.aspx" rel="nofollow" target="_blank">“HasLayout” Overview</a> from Microsoft</li><li><a href="http://haslayout.net/css/" target="_blank" title="">hasLayout CSS Bugs</a></li></ul></blockquote>
                <h2 id="ie6-box-model">IE6 盒模型</h2>
                <p>如果<a href="http://en.wikipedia.org/wiki/Quirks_mode" rel="nofollow" target="_blank">怪异模式（quirks mode）</a>在 IE6中启用，IE6将会使用微软旧版的盒模型：width是元素的实际宽度，内容宽度 = width – (margin-left + margin-right + padding-left + padding-right + border-left-width + border-right-width)。最好的办法是申明正确的文档类型以避免触发怪异模式，或者避免给有 <code>border</code> 或 <code>padding</code> 的元素定义 <code>width</code> 属性。当然你也可以考虑使用条件注释。</p>
                <blockquote><h4>扩展阅读：</h4><ul><li><a href="http://css-tricks.com/ie-css-bugs-thatll-get-you-every-time/" rel="nofollow" target="_blank">IE CSS Tricks That Will Get You Every Time</a></li><li><a href="http://www.456bereastreet.com/archive/200612/internet_explorer_and_the_css_box_model/" rel="nofollow" target="_blank">Internet Explorer And The CSS Box Model</a></li><li><a href="http://en.wikipedia.org/wiki/Internet_Explorer_box_model_bug" rel="nofollow" target="_blank">Internet Explorer Box Model Bug</a></li></ul></blockquote>
                <h2 id="min-height">最小高度</h2>
                <p>IE6 不支持 <code>min-height</code> 属性，但它却认为 <code>height</code> 就是最小高度。感谢<a href="http://www.dustindiaz.com/min-height-fast-hack/" rel="nofollow" target="_blank">Dustin Diaz</a>提供了一个很好的方法：使用 <code>!important</code> ，ie6会忽视它但其余浏览器不会。</p>
                <p><small><span class="label label-warning">注：</span> IE6在同一个声明语句中(即一个综括号 <code>{}</code> )的属性定义，后面的总是会覆盖前面的，所以下例中后面的 <code>height</code> 覆盖掉了前面定义的 <code>important height</code> </small></p>
<pre class="prettyprint linenums">
CSS:
/* 所有浏览器 */
#container {min-height:200px; height:auto !important; height:200px;}

另一个方法是使用CSS选择器
/* 仅IE6 */
#container {min-height:200px; height:200px;}
 
/* 其他浏览器 */
html>body #container { height:auto;}
</pre>
				<h2 id="max-height">最大高度</h2>
                <p>非常遗憾，在IE6下实现 <code>max-height</code> 只能使用IE特有滤镜，或者可以使用JavaScript实现。我个人更建议使用JavaScript来解决，因为IE滤镜会消耗大量资源甚至会使浏览器崩溃，而且禁用JavaScript后这两种方法都无法生效。</p>
                <h2 id="one-hundred-percent-height">100% 高度</h2>
                <p>在IE6下，如果要给元素定义100%高度，必须要明确定义它的父级元素的高度，如果你需要给元素定义满屏的高度，就得先给 <code>html</code> 和 <code>body</code> 定义 <code>height:100%;</code> 。</p>
<pre class="prettyprint linenums">
CSS:
/* 给child元素定义100%高度（IE6）*/
#parent {height:500px;}
#child {height:100%;}
 
/* 定义满屏高度（IE6）*/
html, body {height:100%;}
#fullLength {height:100%;}
</pre>
				<h2 id="float-bug">双边距Bug</h2>
                <p>当 <code>block</code> 元素浮动时，IE6会错误的把浮动方向的margin值双倍计算。<a href="http://www.positioniseverything.net/explorer/floatIndent.html" rel="nofollow" target="_blank">Steve Clason</a>给出了解决方法：给元素添加 <code>display:inline;</code> </p>
<pre class="prettyprint linenums">
CSS:
/*IE6下将产生双倍边距*/
.float-block {float:left; margin-left:100px;}
 
/*修正*/
.float-block {float:left; margin-left:100px; display:inline;}
</pre>                
                <p>如果你想用div(或其他容器)包裹一个浮动的元素，你会发现必须给div(容器)定义明确的 <code>height</code>、<code>width</code>、<code>overflow</code> 之中一个属性（除了auto值）才能将浮动元素严实地包裹。</p>
                
				<div class="bs-docs-example"> </div>
<pre class="prettyprint linenums">

</pre>
            </section>
            <!-- Intro
    ================================================== -->
            <section id="dropdowns">
                <div class="page-header">
                    <h1>Bugs menus</h1>
                </div>
                <h2>Example</h2>
                <p></p>
                <div class="bs-docs-example"> </div>
<pre class="prettyprint linenums">

</pre>
</section>
            
            <!-- lists
    ================================================== -->
            <section id="lists">
                <div class="page-header">
                    <h1>列表问题</h1>
                </div>
                <p class="lead">最为特别的IE许多bug都会影响到列表，这里例举了一些示例。</p>
                <h2 id="list-item-width">横向列表宽度</h2>
                <p>如果你使用 <code>float:left;</code> 把 <code>&lt;li&gt;</code> 横向摆列，并且 <code>&lt;li&gt;</code> 内包含的 <code>&lt;a&gt;</code> (或其他)触发了hasLayout，在IE6下就会有错误的表现：</p>
                <div class="bs-docs-example"> </div>
<pre class="prettyprint linenums">

</pre>
                <p>解决方法很简单，只需要给 <code>&lt;a&gt;</code> 定义同样的 <code>float:left;</code> 即可。</p>
                <h2 id="staircase-bug">列表阶梯bug</h2>
                <div class="bs-docs-example"> </div>
<pre class="prettyprint linenums">

</pre>
               <p><a href="http://haslayout.net/css/Staircase-Bug" rel="nofollow" target="_blank">列表阶梯bug</a>通常会在给 <code>&lt;li&gt;</code> 的子元素 <code>&lt;a&gt;</code> 使用 <code>float:left;</code> 时触发，我们本意是要做一个横向的列表(通常是导航栏)，但IE却可能呈现出垂直的或者阶梯状。</p>
               <p>解决办法就是给 <code>&lt;li&gt;</code> 定义 <code>float:left;</code> 而非子元素 <code>&lt;a&gt;</code> ，或者给 <code>&lt;li&gt;</code> 定义 <code>display:inline;</code> 也可以解决。</p>
                <h2 id="whitespace-bug">垂直列表间隙bug</h2>
                <p>当我们使用 <code>&lt;li&gt;</code> 包含一个块级子元素时，IE6(IE7也有可能)会错误地给每条列表元素(&lt;li&gt;)之间添加空隙；解决这个问题的方法有很多，看示例：</p>
                <div class="bs-docs-example"> </div>
<pre class="prettyprint linenums">

</pre>
                <p><a href="http://www.hicksdesign.co.uk/journal/ie-whitespace-bug" rel="nofollow" target="_blank">Jon Hicks</a>把 <code>&lt;a&gt;</code> flaot并且清除float来解决这个问题：</p>



            </section>

            
            
            <!-- Intro
    ================================================== -->
            <section id="dropdowns">
                <div class="page-header">
                    <h1>Bugs menus</h1>
                </div>
                <p class="lead"></p>
                <h2>Example</h2>
                <p></p>
                <div class="bs-docs-example"> </div>
<pre class="prettyprint linenums">

</pre>
            </section>
            <!-- Intro
    ================================================== -->
            <section id="dropdowns">
                <div class="page-header">
                    <h1>Bugs menus</h1>
                </div>
                <p class="lead"></p>
                <h2>Example</h2>
                <p></p>
                <div class="bs-docs-example"> </div>
<pre class="prettyprint linenums">

</pre>
            </section>
            <!-- Intro
    ================================================== -->
            <section id="dropdowns">
                <div class="page-header">
                    <h1>Bugs menus</h1>
                </div>
                <p class="lead"></p>
                <h2>Example</h2>
                <p></p>
                <div class="bs-docs-example"> </div>
<pre class="prettyprint linenums">

</pre>
            </section>
            <!-- Intro
    ================================================== -->
            <section id="dropdowns">
                <div class="page-header">
                    <h1>Bugs menus</h1>
                </div>
                <p class="lead"></p>
                <h2>Example</h2>
                <p></p>
                <div class="bs-docs-example"> </div>
<pre class="prettyprint linenums">

</pre>
            </section>
<!-- htmlchar
    ================================================== -->
<section id="htmlchar">
                <div class="page-header">
                    <h1>HTML特殊符号对照表</h1>
                </div>
                <p>这是html特殊符号对照表，建议将最常用的记住！</p>
				<table class="table table-striped table-bordered table-hover table-condensed">
				<thead><tr><th>特殊符号</th><th>命名实体</th><th>十进制编码</th><th>特殊符号</th><th>命名实体</th><th>十进制编码</th></tr></thead>
	<tbody><tr><td>Α</td><td>&amp;Alpha;</td><td>&amp;#913;</td><td>Β</td><td>&amp;Beta;</td><td>&amp;#914;</td></tr>
	<tr><td>Γ</td><td>&amp;Gamma;</td><td>&amp;#915;</td><td>Δ</td><td>&amp;Delta;</td><td>&amp;#916;</td></tr>
	<tr><td>Ε</td><td>&amp;Epsilon;</td><td>&amp;#917;</td><td>Ζ</td><td>&amp;Zeta;</td><td>&amp;#918;</td></tr>
	<tr><td>Η</td><td>&amp;Eta;</td><td>&amp;#919;</td><td>Θ</td><td>&amp;Theta;</td><td>&amp;#920;</td></tr>
	<tr><td>Ι</td><td>&amp;Iota;</td><td>&amp;#921;</td><td>Κ</td><td>&amp;Kappa;</td><td>&amp;#922;</td></tr>
	<tr><td>Λ</td><td>&amp;Lambda;</td><td>&amp;#923;</td><td>Μ</td><td>&amp;Mu;</td><td>&amp;#924;</td></tr>
	<tr><td>Ν</td><td>&amp;Nu;</td><td>&amp;#925;</td><td>Ξ</td><td>&amp;Xi;</td><td>&amp;#926;</td></tr>
	<tr><td>Ο</td><td>&amp;Omicron;</td><td>&amp;#927;</td><td>Π</td><td>&amp;Pi;</td><td>&amp;#928;</td></tr>
	<tr><td>Ρ</td><td>&amp;Rho;</td><td>&amp;#929;</td><td>Σ</td><td>&amp;Sigma;</td><td>&amp;#931;</td></tr>
	<tr><td>Τ</td><td>&amp;Tau;</td><td>&amp;#932;</td><td>Υ</td><td>&amp;Upsilon;</td><td>&amp;#933;</td></tr>
	<tr><td>Φ</td><td>&amp;Phi;</td><td>&amp;#934;</td><td>Χ</td><td>&amp;Chi;</td><td>&amp;#935;</td></tr>
	<tr><td>Ψ</td><td>&amp;Psi;</td><td>&amp;#936;</td><td>Ω</td><td>&amp;Omega;</td><td>&amp;#937;</td></tr>
	<tr><td>α</td><td>&amp;alpha;</td><td>&amp;#945;</td><td>β</td><td>&amp;beta;</td><td>&amp;#946;</td></tr>
	<tr><td>γ</td><td>&amp;gamma;</td><td>&amp;#947;</td><td>δ</td><td>&amp;delta;</td><td>&amp;#948;</td></tr>
	<tr><td>ε</td><td>&amp;epsilon;</td><td>&amp;#949;</td><td>ζ</td><td>&amp;zeta;</td><td>&amp;#950;</td></tr>
	<tr><td>η</td><td>&amp;eta;</td><td>&amp;#951;</td><td>θ</td><td>&amp;theta;</td><td>&amp;#952;</td></tr>
	<tr><td>ι</td><td>&amp;iota;</td><td>&amp;#953;</td><td>κ</td><td>&amp;kappa;</td><td>&amp;#954;</td></tr>
	<tr><td>λ</td><td>&amp;lambda;</td><td>&amp;#955;</td><td>μ</td><td>&amp;mu;</td><td>&amp;#956;</td></tr>
	<tr><td>ν</td><td>&amp;nu;</td><td>&amp;#957;</td><td>ξ</td><td>&amp;xi;</td><td>&amp;#958;</td></tr>
	<tr><td>ο</td><td>&amp;omicron;</td><td>&amp;#959;</td><td>π</td><td>&amp;pi;</td><td>&amp;#960;</td></tr>
	<tr><td>ρ</td><td>&amp;rho;</td><td>&amp;#961;</td><td>ς</td><td>&amp;sigmaf;</td><td>&amp;#962;</td></tr>
	</tbody><thead>
	<tr><th>特殊符号</th><th>命名实体</th><th>十进制编码</th><th>特殊符号</th><th>命名实体</th><th>十进制编码</th></tr></thead>
	<tbody>
	<tr><td>σ </td><td>&amp;sigma;</td><td>&amp;#963;</td><td>τ </td><td>&amp;tau;</td><td>&amp;#964;</td></tr>
	<tr><td>υ</td><td>&amp;upsilon;</td><td>&amp;#965;</td><td>φ </td><td>&amp;phi;</td><td>&amp;#966;</td></tr>
	<tr><td>χ</td><td>&amp;chi;</td><td>&amp;#967;</td><td>ψ </td><td>&amp;psi;</td><td>&amp;#968;</td></tr>
	<tr><td>ω </td><td>&amp;omega;</td><td>&amp;#969;</td><td>ϑ </td><td>&amp;thetasym;</td><td>&amp;#977;</td></tr>
	<tr><td>ϒ </td><td>&amp;upsih;</td><td>&amp;#978;</td><td>ϖ </td><td>&amp;piv;</td><td>&amp;#982;</td></tr>
	<tr><td>• </td><td>&amp;bull;</td><td>&amp;#8226;</td><td>… </td><td>&amp;hellip;</td><td>&amp;#8230;</td></tr>
	<tr><td>′ </td><td>&amp;prime;</td><td>&amp;#8242;</td><td>″ </td><td>&amp;Prime;</td><td>&amp;#8243;</td></tr>
	<tr><td>‾ </td><td>&amp;oline;</td><td>&amp;#8254;</td><td>⁄ </td><td>&amp;frasl;</td><td>&amp;#8260;</td></tr>
	<tr><td>℘ </td><td>&amp;weierp;</td><td>&amp;#8472;</td><td>ℑ </td><td>&amp;image;</td><td>&amp;#8465;</td></tr>
	<tr><td>ℜ </td><td>&amp;real;</td><td>&amp;#8476;</td><td>™ </td><td>&amp;trade;</td><td>&amp;#8482;</td></tr>
	<tr><td>ℵ </td><td>&amp;alefsym;</td><td>&amp;#8501;</td><td>← </td><td>&amp;larr;</td><td>&amp;#8592;</td></tr>
	<tr><td>↑ </td><td>&amp;uarr;</td><td>&amp;#8593;</td><td>→ </td><td>&amp;rarr;</td><td>&amp;#8594;</td></tr>
	<tr><td>↓ </td><td>&amp;darr;</td><td>&amp;#8595;</td><td>↔ </td><td>&amp;harr;</td><td>&amp;#8596;</td></tr>
	<tr><td>↵ </td><td>&amp;crarr;</td><td>&amp;#8629;</td><td>⇐ </td><td>&amp;lArr;</td><td>&amp;#8656;</td></tr>
	<tr><td>⇑ </td><td>&amp;uArr;</td><td>&amp;#8657;</td><td>⇒ </td><td>&amp;rArr;</td><td>&amp;#8658;</td></tr>
	<tr><td>⇓ </td><td>&amp;dArr;</td><td>&amp;#8659;</td><td>⇔ </td><td>&amp;hArr;</td><td>&amp;#8660;</td></tr>
	<tr><td>∀ </td><td>&amp;forall;</td><td>&amp;#8704;</td><td>∂ </td><td>&amp;part;</td><td>&amp;#8706;</td></tr>
	<tr><td>∃ </td><td>&amp;exist;</td><td>&amp;#8707;</td><td>∅ </td><td>&amp;empty;</td><td>&amp;#8709;</td></tr>
	<tr><td>∇ </td><td>&amp;nabla;</td><td>&amp;#8711;</td><td>∈ </td><td>&amp;isin;</td><td>&amp;#8712;</td></tr>
	<tr><td>∉ </td><td>&amp;notin;</td><td>&amp;#8713;</td><td>∋ </td><td>&amp;ni;</td><td>&amp;#8715;</td></tr>
	<tr><td>∏ </td><td>&amp;prod;</td><td>&amp;#8719;</td><td>∑ </td><td>&amp;sum;</td><td>&amp;#8722;</td></tr>
	</tbody><thead>
	<tr><th>特殊符号</th><th>命名实体</th><th>十进制编码</th><th>特殊符号</th><th>命名实体</th><th>十进制编码</th></tr></thead>
	<tbody>
	<tr><td>− </td><td>&amp;minus;</td><td>&amp;#8722;</td><td>∗ </td><td>&amp;lowast;</td><td>&amp;#8727;</td></tr>
	<tr><td>√ </td><td>&amp;radic;</td><td>&amp;#8730;</td><td>∝ </td><td>&amp;prop;</td><td>&amp;#8733;</td></tr>
	<tr><td>∞ </td><td>&amp;infin;</td><td>&amp;#8734;</td><td>∠ </td><td>&amp;ang;</td><td>&amp;#8736;</td></tr>
	<tr><td>∧ </td><td>&amp;and;</td><td>&amp;#8869;</td><td>∨ </td><td>&amp;or;</td><td>&amp;#8870;</td></tr>
	<tr><td>∩ </td><td>&amp;cap;</td><td>&amp;#8745;</td><td>∪ </td><td>&amp;cup;</td><td>&amp;#8746;</td></tr>
	<tr><td>∫ </td><td>&amp;int;</td><td>&amp;#8747;</td><td>∴ </td><td>&amp;there4;</td><td>&amp;#8756;</td></tr>
	<tr><td>∼ </td><td>&amp;sim;</td><td>&amp;#8764;</td><td>≅ </td><td>&amp;cong;</td><td>&amp;#8773;</td></tr>
	<tr><td>≈ </td><td>&amp;asymp;</td><td>&amp;#8773;</td><td>≠ </td><td>&amp;ne;</td><td>&amp;#8800;</td></tr>
	<tr><td>≡ </td><td>&amp;equiv;</td><td>&amp;#8801;</td><td>≤ </td><td>&amp;le;</td><td>&amp;#8804;</td></tr>
	<tr><td>≥ </td><td>&amp;ge;</td><td>&amp;#8805;</td><td>⊂ </td><td>&amp;sub;</td><td>&amp;#8834;</td></tr>
	<tr><td>⊃ </td><td>&amp;sup;</td><td>&amp;#8835;</td><td>⊄ </td><td>&amp;nsub;</td><td>&amp;#8836;</td></tr>
	<tr><td>⊆ </td><td>&amp;sube;</td><td>&amp;#8838;</td><td>⊇ </td><td>&amp;supe;</td><td>&amp;#8839;</td></tr>
	<tr><td>⊕ </td><td>&amp;oplus;</td><td>&amp;#8853;</td><td>⊗ </td><td>&amp;otimes;</td><td>&amp;#8855;</td></tr>
	<tr><td>⊥ </td><td>&amp;perp;</td><td>&amp;#8869;</td><td>⋅ </td><td>&amp;sdot;</td><td>&amp;#8901;</td></tr>
	<tr><td>⌈ </td><td>&amp;lceil;</td><td>&amp;#8968;</td><td>⌉ </td><td>&amp;rceil;</td><td>&amp;#8969;</td></tr>
	<tr><td>⌊ </td><td>&amp;lfloor;</td><td>&amp;#8970;</td><td>⌋ </td><td>&amp;rfloor;</td><td>&amp;#8971;</td></tr>
	<tr><td>◊ </td><td>&amp;loz;</td><td>&amp;#9674;</td><td>♠ </td><td>&amp;spades;</td><td>&amp;#9824;</td></tr>
	<tr><td>♣ </td><td>&amp;clubs;</td><td>&amp;#9827;</td><td>♥ </td><td>&amp;hearts;</td><td>&amp;#9829;</td></tr>
	<tr><td>♦ </td><td>&amp;diams;</td><td>&amp;#9830;</td><td></td><td>&amp;nbsp;</td><td>&amp;#160;</td></tr>
	<tr><td>¡ </td><td>&amp;iexcl;</td><td>&amp;#161;</td><td>¢ </td><td>&amp;cent;</td><td>&amp;#162;</td></tr>
	<tr><td>£ </td><td>&amp;pound;</td><td>&amp;#163;</td><td>¤ </td><td>&amp;curren;</td><td>&amp;#164;</td></tr>
	</tbody><thead>
	<tr><th>特殊符号</th><th>命名实体</th><th>十进制编码</th><th>特殊符号</th><th>命名实体</th><th>十进制编码</th></tr></thead>
	<tbody>
	<tr><td>¥ </td><td>&amp;yen;</td><td>&amp;#165;</td><td>¦ </td><td>&amp;brvbar;</td><td>&amp;#166;</td></tr>
	<tr><td>§ </td><td>&amp;sect;</td><td>&amp;#167;</td><td>¨ </td><td>&amp;uml;</td><td>&amp;#168;</td></tr>
	<tr><td>© </td><td>&amp;copy;</td><td>&amp;#169;</td><td>ª </td><td>&amp;ordf;</td><td>&amp;#170;</td></tr>
	<tr><td>« </td><td>&amp;laquo;</td><td>&amp;#171;</td><td>¬ </td><td>&amp;not;</td><td>&amp;#172;</td></tr>
	<tr><td>­</td><td>&amp;shy;</td><td>&amp;#173;</td><td>® </td><td>&amp;reg;</td><td>&amp;#174;</td></tr>
	<tr><td>¯</td><td>&amp;macr;</td><td>&amp;#175;</td><td>°</td><td>&amp;deg;</td><td>d&amp;#176;</td></tr>
	<tr><td>± </td><td>&amp;plusmn;</td><td>&amp;#177;</td><td>²</td><td>&amp;sup2;</td><td>&amp;#178;</td></tr>
	<tr><td>³</td><td>&amp;sup3;</td><td>&amp;#179;</td><td>´</td><td>&amp;acute;</td><td>&amp;#180;</td></tr>
	<tr><td>µ</td><td>&amp;micro;</td><td>&amp;#181;</td><td></td><td></td><td></td></tr>
</tbody></table>
			</section>
        </div>
    </div>
</div>
<?php include("common/footer.html");?>