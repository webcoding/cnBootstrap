
<h1>排版 <small>标题，段落，列表，以及其他行级元素</small></h1>
<p>首先应用 Reset 重设，对常用标签进行使用规划，使其应用达到恰到好处的效果。</p>

<h2>Reset 重设</h2>
<p>reset.css 是 Pandora 的浏览器重设样式，统一浏览器布局标签的默认属性，消除浏览器基本的兼容性问题。</p>
<p>Pandora 的 reset.css 是综合 html5Doctor、yahoo、<a href="http://necolas.github.com/normalize.css/">normalize.css</a>及AliceUI 等业界优秀模块，并加上一些常用 className 而产出的一套重设样式。</p>

<p>除 <code>reset.css</code> 外，Pandora 还提供适合中文的 <code>noreset.css</code> 样式(借鉴normalize)，在不归零的前提下达到浏览器中标签属性的默认一致。</p>
<p><span class="label label-info">注意!</span> 国内布局通常还是要使用reset，但现在也有越来越多的国内攻城师开始注意noreset了</p>

<h3>常用功能类</h3>
<ul class="ul">
	<li><p><code>clearfix</code> 清除浮动</p></li>
	<li><p><code>hide</code> 隐藏元素</p></li>
	<li><p><code>.fl</code> <code>.fr</code> 左右浮动</p></li>
	<li><p><code>center-box</code> <code>center-item</code> 浮动居中</p></li>
	<li><p><code>ellipsis</code> 文字单行溢出省略号</p>
		<div class="ellipsis" style="width:100px;">单行文本，这里文字太多了太多了</div>
	</li>
	<li><p><code>text-justify</code> 文本两端对齐</p></li>
</ul>

<h2>标题</h2>
<p>HTML中定义的所有标题标签, 从<code>&lt;h1&gt;</code> 到 <code>&lt;h6&gt;</code> 都是可用的。</p>
<div class="docs-example">
	<h1>h1. 一级标题</h1>
	<h2>h2. 二级标题</h2>
	<h3>h3. 三级标题</h3>
	<h4>h4. 四级标题</h4>
	<h5>h5. 五级标题</h5>
	<h6>h6. 六级标题</h6>
</div>

<h2>字体</h2>
<p><code>reset.css</code> 采用了 12 像素，1.5 的行高，并且兼容 Mac 和 Window 的字体配置，非常适合国内的网站样式。</p>
<pre>
body,button,input,select,textarea {
    font:12px/1.5 tahoma,arial,"Hiragino Sans GB","Microsoft Yahei",\5b8b\4f53;
}
</pre>
<h3>段落强调 .lead</h3>
<p>通过添加 <code>.lead</code> 实现段落强调。</p>
<p class="lead">写在规则前面的话——项目的可维护性第一。</p>

<h3>强调标签 <small><code>&lt;small&gt;</code> <code>&lt;strong&gt;</code> <code>&lt;em&gt;</code> <code>&lt;b&gt;</code> <code>&lt;i&gt;</code></small></h3>
<p>使用HTML默认的强调标签，达到代码精简的目的。</p>
<div class="docs-example">
	<h4>强调标签</h4>
	<p><code>&lt;small&gt;</code> 针对不需要强调的<small>inline或block类型的文本</small>使用。</p>
	<p><code>&lt;strong&gt;</code> 用增加font-weight值的方式<strong>加粗强调</strong>一段文本。</p>
	<p><code>&lt;em&gt;</code> 用<em>斜体字</em>强调一段文本。</p>
	<p><code>&lt;b&gt;</code> 是为了<b>高亮词</b>或<b>短语</b>而不会赋予重要含义。</p>
	<p><code>&lt;i&gt;</code> 主要被用来表示<i>发言、技术术语</i>等。</p>
</div>

<p><span class="label label-info">注意!</span> 在HTML5中仍然可以使用 <code>&lt;b&gt;</code> 和 <code>&lt;i&gt;</code> 标签，但是它们的用途已经发生了改变。<code>&lt;b&gt;</code> 在过去仅仅用来加粗单词或短语，没有任何语义上的含义，现在定义需要强调的部分（如果您希望把文本标记为相比其他文本更为重要，应该使用 <code>&lt;strong&gt;</code> 标签。）。而 <code>&lt;i&gt;</code> 主要用在语音和技术等方面。</p>
<h3>强调类 <small>通过颜色来表示强调的工具类</small></h3>
<div class="docs-example poetry">
	<h4 class="cc1">水调歌头 <small>宋 &sdot; 苏轼 &amp;sdot;  &amp;bull;  cc1</small></h4>
	<p class="orange">--------- 分割线 ---------  orange</p>
	<p class="gray">丙辰中秋，欢饮达旦，大醉，作此篇，兼怀子由。 gray</p>
	<p class="red">明月几时有？把酒问青天。 red</p>
	<p class="green">不知天上宫阙，今夕是何年。 green</p>
	<p class="blue">我欲乘风归去，又恐琼楼玉宇，高处不胜寒。 blue</p>
	<p class="cc2">起舞弄清影，何似在人间。 cc2</p>
	<p class="muted">--------- 分割线 --------- muted</p>
	<p class="text-warning">转朱阁，低绮户，照无眠。 text-warning</p>
	<p class="text-error">不应有恨，何事长向别时圆？ text-error</p>
	<p class="text-info">人有悲欢离合，月有阴晴圆缺，此事古难全。 text-info</p>
	<p class="text-success">但愿人长久，千里共婵娟。 text-success</p>
</div>

<h3>缩写形式</h3>
<p>HTML的 <code>&lt;abbr&gt;</code> 标签是为缩写语或缩写词在hover状态时能显示扩展的文本。使用 <code>title</code> 属性的 <code>&lt;abbr&gt;</code> 会带有点状(dotted)底边线，鼠标经过时会显示带问号的箭头，并提示完整的字词信息。</p>
<div class="docs-example">
	<p>要在缩写词上实现hover时的扩展文本，应该包含 <code>title</code> 属性.</p>
	<p>单词 attribute 的缩写是 <abbr title="attribute">attr</abbr>。</p><br>
	
	<p>对缩写词元素应用 <code>.initialism</code> 会减小一号字体大小，以协调排版效果。</p>
	<p><abbr title="HyperText Markup Language 超文本标记语言" class="initialism">HTML</abbr> 是自切片面包问世以来最棒的发明。</p>
</div>

<h3>地址 <small>定义文档作者或拥有者的联系信息。</small></h3>
<p>地址标签 <code>&lt;address&gt;</code> 通过行尾的 <code>&lt;br&gt;</code> 标签保持格式。</p>
<div class="docs-example">
	<address>
		<strong>tCreator文化有限公司</strong><br>
		某省某市某大道404号<br>
		佚名大厦, A座49楼<br>
		<abbr title="Phone">P:</abbr> (123) 456-7890
	</address>
	<address>
		<strong>有关负责人</strong><br>
		<a href="mailto:#">first.last@gmail.com</a>
	</address>
</div>

<h3>引用 <small>定义摘自另一个源的块引用</small></h3>
<p>用 <code>&lt;blockquote&gt;</code> 嵌套 <abbr title="HyperText Markup Language">HTML</abbr> 即可实现引用。对于连续的引用内容，建议使用 <code>&lt;p&gt;</code> 标签。</p>
<table class="table-info">
	<tr>
			<th>元素</th>
			<th>使用方式</th>
			<th>备注</th>
	</tr>
	<tr>
		<td><code>&lt;blockquote&gt;</code></td>
		<td> 用于引用外部内容的块级元素 </td>
		<td><p><code>cite</code> 属性可以用来标注文字出处，如：URL。</p>
			class设置为 <code>.pull-left</code> 或 <code>.pull-right</code> 决定是内容居左还是居右浮动对齐。</td>
	</tr>
	<tr>
		<td><code>&lt;small&gt;</code></td>
		<td> 可选元素，用于添加针对用户的引用，通常用于引言的作者。 </td>
		<td> 可以将引言或出处置于 <code>&lt;cite&gt;</code> 标签内。</td>
	</tr>
</table>
<div class="docs-example">
	<blockquote>
		<p>菩提本无树，明镜亦非台；本来无一物，何处惹尘埃。</p>
	</blockquote>
</div>
<h3>引用出处</h3>
<p>可以添加一个可选的 <code>&lt;small&gt;</code> 元素来表示引用的出处，该元素会利用样式在内容前加入宽度为一个字长的破折号 <code>&amp;mdash;</code>。可以将引言或出处置于 <code>&lt;cite&gt;</code> 标签内。</p>
<div class="docs-example">
	<blockquote>
		<p>远看山有色，近听水无声。春去花还在，人来鸟不惊。</p>
		<small title="Someone famous in Source Title">王维 <cite title="Source Title">《画》</cite></small>
	</blockquote>
</div>
<div class="docs-example" style="overflow: hidden;">
	<blockquote class="pull-right">
		<p>曾经沧海难为水，除却巫山不是云。取次花丛懒回顾，半缘修道半缘君。</p>
		<small title="Someone famous in Source Title">元稹 <cite title="Source Title">《离思五首》之四</cite></small>
	</blockquote>
</div>

<h2>列表 </h2>
<h3>无序列表</h3>
<p>定义一个 <strong>没有</strong> 明确重要性的项目列表</p>
<div class="docs-example">
	<ul class="ul">
		<li>YUI是个好框架</li>
		<li>artTemplate是个好的JS模板</li>
		<li>Git是个好工具</li>
		<li>为什么选择Git
			<ul class="ul">
				<li>更方便的 Merge</li>
				<li>更方便的管理</li>
				<li>更健壮的系统</li>
				<li>对网络的依赖性更低</li>
				<li>更少的“仓库污染”</li>
			</ul>
		</li>
		<li>AliceUI是个好框架</li>
		<li>raphaeljs是个好框架</li>
	</ul>
</div>


<h3>有序列表</h3>
<p>定义一个 <strong>有</strong> 明确重要性的项目列表</p>
<div class="docs-example">
	<ol class="ol">
		<li>CSS规范-减少依赖，避免耦合</li>
		<li>统一风格，让代码有规可循，保证团队协作效率</li>
		<li>文件编码必须使用utf-8（无BOM）</li>
		<li>文件一律通过 link 链入 (NOT @import)</li>
		<li>当只是单个页面使用时，才写在 &lt;head&gt; 的 &lt;style&gt; 中</li>
	</ol>
</div>

<h3>无样式列表</h3>
<p>没有 <code>list-style</code> 即没有左侧内边距的列表。</p>
<div class="docs-example">
	<ul class="unstyled">
		<li>以动手实践为荣 , 以只看不练为耻;</li>
		<li>以打印日志为荣 , 以单步跟踪为耻;</li>
		<li>以空格缩进为荣 , 以制表缩进为耻;</li>
		<li>以单元测试为荣 , 以人工测试为耻;</li>
		<li>以模块复用为荣 , 以复制粘贴为耻;</li>
		<li>以多态应用为荣 , 以分支判断为耻;</li>
		<li>以精简干练为荣 , 以冗余拖沓为耻;</li>
		<li>以总结分享为荣 , 以跪求其解为耻;</li>
	</ul>
</div>

<h3>行内列表</h3>
<p>使用<code>inline-block</code>让列表项水平排列一行，同时每项都有少量的内补（padding）。</p>
<div class="docs-example">
	<ul class="inline">
		<li>首页</li>
		<li>前端开发</li>
		<li>项目研究</li>
		<li>关于我们</li>
	</ul>
</div>

<h3>描述 <small>对一个列表（或条目）进行关联描述</small></h3>
<div class="docs-example">
	<dl>
		<dt title="Description list">描述列表</dt>
		<dd title="A description list is perfect for defining terms.">适用于术语的定义/解释</dd>
		<dt>计算机</dt>
		<dd>用来计算的仪器 ... ...</dd>
		<dt>显示器</dt>
		<dd>以视觉方式显示信息的装置 ... ...</dd>
	</dl>
</div>
<h3>横向描述 <small>使 <code>&lt;dl&gt;</code> 中的每个条目和描述同一对一水平显示。</small></h3>
<div class="docs-example">
	<dl class="dl-horizontal">
		<dt title="Description list">描述列表</dt>
		<dd title="A description list is perfect for defining terms.">适用于术语的定义/解释</dd>
		<dt>Coffee</dt>
		<dd>Black hot drink. A drink made from the roasted and ground beanlike seeds of a tropical shrub, served hot or iced</dd>
		<dt>Milk</dt>
		<dd>White cold drink. An opaque white fluid rich in fat and protein, secreted by female mammals for the nourishment of their young</dd>
	</dl>
</div>
<p><span class="label label-info">注意!</span> 水平列表中如果项目名称太长，需要添加 <code>text-overflow</code> 属性。在小分辨率下，他们会以堆叠式布局显示。 </p>
