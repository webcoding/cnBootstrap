<?php $page = "framework" ?>
<?php $title="基础框架"?>
<?php $description = "本项目基于cnBootstrap开源项目创建，致力于前端快捷开发！" ?>
<?php include("./common/meta.php"); ?>
</head>
<body>
<?php include("./common/header.php"); ?>

<div class="wrap">
	<div class="sidebar">
		<ul class="nav none">
			<li><a href="#typo">排版</a></li>
			<li><a href="#iconfont">图标/字体集</a></li>
			<li><a href="#grid">栅格系统</a></li>
			<li><a href="#fluid">流动栅格</a></li>
			<li><a href="#layout">布局</a></li>
			<li><a href="#responsive">响应式设计</a></li>
			<li><a href="#animate">CSS3 Animate</a></li>
		</ul>
	</div>
	<div class="main">
        <section id="typo">
            <h1>排版 <small>详细参见 <a href="xOne/typo.html">typo.css</a></small></h1>
            <p>首先应用 Reset 重设，对常用标签进行使用规划，使其应用达到恰到好处的效果。</p>

            <h2><a href="xOne/less/normalize.css" title="标签无差异化">normalize</a> 与 <a href="xOne/less/reset.css" title="传统样式重设">reset</a> 重设</h2>
            <p>reset.css 是 Pandora 的浏览器重设样式，消除浏览器布局标签的默认属性，使用前可引用无差异化样式 normalize.css 效果更佳。</p>
            <p>Pandora 的 reset.css 是极精简的重置样式，并综合AliceUI 及 bootstrap等修改 <a href="http://necolas.github.com/normalize.css/">normalize.css</a> 形成无差异化的浏览器基础样式，统一浏览器的默认标签属性。</p>

            <p>除 <code>reset.css</code> 以及 Pandora 适合中文排版的 <code>typo.css</code> 样式(修改自 <abbr title="typo.css by @sofish">typo</abbr> 与 <abbr title="bootstrap by @mdo and @fat">bootstrap</abbr>)外，Pandora 还内置了大量可组合的便捷实用的样式，需要注意这类样式，如：<code>.btn</code>，详情参看<a heft="#keyword">Pandora项目保留字</a>。</p>
            <p><span class="label label-info">注意!</span> 当前国内布局通常要使用reset，但现在也有越来越多的攻城师开始注意 normalize的作用了，充分发挥浏览器默认属性的优势。</p>

            <h3>常用功能类</h3>

<pre class="prettyprint">
normalize.css 无差异样式及清除浮动
reset.css 传统重设样式
combo.css 便捷组合样式表
</pre>

            <ul>
                <li><p><code>clearfix</code> 清除浮动</p></li>
                <li><p><code>hide</code> 隐藏元素</p></li>
                <li><p><code>.fl</code> <code>.fr</code> 左右浮动</p></li>
                <li><p><code>center-box</code> <code>center-item</code> 浮动居中</p></li>
                <li><p><code>ellipsis</code> 文字单行溢出省略号</p>
                    <div class="ellipsis" style="width:100px;">单行文本，这里文字太多了太多了</div>
                </li>
                <li><p><code>text-justify</code> 文本两端对齐</p></li>
            </ul>
		</section>
        
        
        
		<section id="iconfont">
            <h1>图标/字体集</h1>
            <p>针对使用图标字体集的需求，不论市场还是技术，都已经非常成熟，推广使用大势所趋。</p>
            <p><strong>注：</strong> 虽然可通过图表字体集实现ICON等，但需求总是千变万化的，需要使用图标ICON 的时候，可用CSS Sprites分类保存在对应的图标集上，随后会推荐一款自动化处理工具。</p>
        </section>
        
        
        
		<section id="grid">
            <h1>栅格系统</h1>
            <p>目前没有优良的栅格系统能满足当今的网络大发展需求，尤其是在复杂网站布局方面就更匮乏，综合各种情况的对比，不使用栅格时就是最好的解决方案。</p>
            <p>针对流行的响应式布局，在复杂布局中，没有满足需求的栅格系统，仅考虑宽屏布局，在窄屏下隐藏掉部分内容是最好的解决方案。</p>
            <p><strong>注：</strong>在较小宽度或移动设备布局情况下，Bootstrap的12列栅格效果不错，但在小尺度下精度仍然欠缺，表现的尺寸过大。</p>
        </section>
        
        
        
		<section id="fluid">
            <h1>流动栅格</h1>
            <p>在后台页面使用广泛，流动栅格可以不考虑，但是流动布局应用广泛，最经典的布局方式大概三四种。但最经得起考验的布局，也许只有下面一种。</p>
        </section>
        
        
        
		<section id="layout">
            <h1>布局</h1>
            <p>尽管网页布局千变万化，但是总有经典的布局方式不断的被重复使用，这部分可以作为布局模板提取出来。</p>
        </section>
        
        
        
		<section id="responsive">
            <h1>响应式设计</h1>
            <p>如果考虑响应式则暂时只考虑两种分辨率，1200px和980/990px，并以大分辨率为基准，小分辨率适当隐藏一部分内容，而针对移动设备可以另加考虑480px和760px。</p>
            <p><strong>注：</strong> 以上结论适用于电商的复杂布局，简单布局可以使用响应式的栅格系统实现。</p>
        </section>
        
        
        
		<section id="animate">
            <h1>CSS3 Animate</h1>
            <p>随着css3的大量普及使用，更多的动画效果展示在页面上，渐进式地提升用户体验。</p>
        </section>
        
        
	</div>
</div>


<?php include("common/footer.html");?>
</body>
</html>