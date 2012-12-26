<?php $page = "fed-standard" ?>
<?php $title="Web前端开发规范文档"?>
<?php $description = "前端规范——前端开发团队遵循和约定的代码书写规范，旨在提高代码的规范性和可维护性。" ?>
<?php include("./templates/header.php"); ?>

<!-- Masthead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1 title="Guide">前端规范文档</h1>
    <p class="lead">前端开发团队遵循和约定的代码书写规范，旨在提高代码的规范性和可维护性。</p>
  </div>
</header>


<div class="container">

<!-- Docs nav
================================================== -->
<div class="row">
	<div class="span3 bs-docs-sidebar">
		<ul class="nav nav-list bs-docs-sidenav">
			<li><a href="#overview"><i class="icon-chevron-right"></i> 概述</a></li>
			<li><a href="#document"><i class="icon-chevron-right"></i> 文档结构</a></li>
			<li><a href="#file-structure"><i class="icon-chevron-right"></i> 目录结构规范</a></li>
			<li><a href="#naming"><i class="icon-chevron-right"></i> 命名规范</a></li>
			<li><a href="#labor"><i class="icon-chevron-right"></i> 分工安排</a></li>
			<li><a href="#notes"><i class="icon-chevron-right"></i> 注释规范</a></li>
			<li><a href="#css"><i class="icon-chevron-right"></i> CSS规范</a></li>
			<li><a href="#html"><i class="icon-chevron-right"></i> HTML规范</a></li>
			<li><a href="#hack"><i class="icon-chevron-right"></i> Hack规则</a></li>
			<li><a href="#names"><i class="icon-chevron-right"></i> 常用词命名统一表</a></li>
			<li><a href="#javascript"><i class="icon-chevron-right"></i> JavaScript 编码风格</a></li>
			<li><a href="#js-notes"><i class="icon-chevron-right"></i> JavaScript 注释规范</a></li>
			<li><a href="#json"><i class="icon-chevron-right"></i> JSON格式规范</a></li>
			<li><a href="#readme"><i class="icon-chevron-right"></i> 说明文档书写规范</a></li>
			<li><a href="#examples"><i class="icon-chevron-right"></i> Examples 规范</a></li>
			<li><a href="#history"><i class="icon-chevron-right"></i> 历史记录书写规范</a></li>
			<li><a href="#edm"><i class="icon-chevron-right"></i> EDM制作规范</a></li>
		</ul>
	</div>
	<div class="span9">
		
		
		
		<!-- Overview
		================================================== -->
		<section id="overview">
			<div class="page-header">
				<h1>概述</h1>
			</div>
			<h3>规范说明</h3>
			<p>此规范为参考规范，不全是硬性要求，部分硬性约定见下一条书写规范，统一团队编码规范和风格。让所有代码都是有规可循的，并且能够得到沉淀，减少重复劳动。</p>
			<div class="alert alert-info"><strong>大家一起完善。</strong> </div>
		</section>
		
		<!-- Document
		================================================== -->
		<section id="document">
			<div class="page-header">
				<h1>文档结构</h1>
			</div>
			<p>文档结构</p>
		</section>
		
	    <!-- File Structure
		================================================== -->
		<section id="file-structure">
			<div class="page-header">
				<h1>目录结构规范</h1>
			</div>
			<p>目录结构规范</p>
		</section>
		
		<!-- Naming
		================================================== -->
		<section id="naming">
			<div class="page-header">
				<h1>命名规范</h1>
			</div>
<ol>
<li>文件和目录名只能包含 [a-z\d-]，并以英文字母开头</li>
<li>首选合适的英文单词 </li>
<li>data api 命名为小写并用连字符，如 data-trigger-type</li>
<li>事件名为驼峰，如 .trigger('itemSelected')</li>
<li>符合规范

<ul>
<li>常量全大写 UPPERCASE_WORD</li>
<li>变量驼峰 camelName</li>
<li>类名驼峰，并且首字母要大写 CamelName</li>
</ul></li>
</ol>
		</section>
		
		<!-- JavaScript
		================================================== -->
		<section id="labor">
			<div class="page-header">
				<h1>分工安排</h1>
			</div>
			<p>分工安排</p>
		</section>
		
		
		<!-- Notes
		================================================== -->
		<section id="notes">
			<div class="page-header">
				<h1>注释规范</h1>
			</div>
			<p>注释规范</p>
		</section>
		
		<!-- CSS
		================================================== -->
		<section id="css">
			<div class="page-header">
				<h1>CSS规范</h1>
			</div>
			<p>CSS规范</p>
		</section>
		
		<!-- HTML
		================================================== -->
		<section id="html">
			<div class="page-header">
				<h1>HTML规范</h1>
			</div>
			<h5>* 第一行统一使用HTML5标准：&lt;!DOCTYPE html&gt;</h5>
			<pre class="prettyprint linenums">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Bootstrap 101 Template&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Hello, world!&lt;/h1&gt;
&lt;script src="http://code.jquery.com/jquery-latest.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
			<h5>Meta 的使用：（需根据具体项目选择）参考 <a href="https://github.com/webcoding/cool-head">cool-head</a> </h5>
			
			
			<ul>
			<li> <code>&lt;img&gt;</code> 标签默认缺省格式：<code>&lt;img src="xxx.png" alt="缺省时文字" /&gt;</code> 避免出现 <a href="http://js8.in/555.html" title="src=&quot;&quot; 问题"> src="" 问题</a> </li>
			<li> <code>&lt;a&gt;</code> 标签缺省格式：<code>&lt;a href="###" title="链接名称"&gt;xxx&lt;/&gt;</code> 注：<code>target="_blank"</code> 根据需求决定 </li>
			<li><a>标签预留链接占位符使用 <code>###</code>，参见：</a> <a href="http://www.v2ex.com/t/48511/" title="a标签占位符问题">a标签占位符问题</a></li>
			<li>所有标签需要符合XHTML标准闭合</li>
			<li>一律统一标签结尾斜杠的书写形式：<code>&lt;br /&gt;</code> <code>&lt;hr /&gt;</code> 注意之间空格</li>
			<li>避免使用已过时标签，如：<code>&lt;b&gt;</code> <code>&lt;u&gt;</code> <code>&lt;i&gt;</code> 而用 <code>&lt;strong&gt;</code> <code>&lt;em&gt;</code> 等代替</li>
			<li>使用 <code>data-xxx</code> 来添加自定义数据，如：<code>&lt;input data-xxx="yyy"/&gt;</code> </li>
			<li>避免使用 <code>style="xxx:xxx;"</code> 的内联样式表</li>
			<li>特殊符号使用参考 <a href="http://www.w3school.com.cn/html/html_entities.asp">HTML 符号实体</a> </li>
			</ul>
			
			<h5>HTML 细化规范</h5>
			<ul>
			<li>HTML <code>head</code> 部分的结构参看：<a href="https://github.com/webcoding/cool-head">cool-head</a> (摘取必要内容即可)</li>
			<li> <code>css</code> 文件置于都 <strong>头部</strong> </li>
			<li> <code>jQuery</code> 及 <code>Google Analytics</code> 引用置于 <strong>头部</strong> </li>
			<li>其他效果 <code>js</code> 及 <code>统计代码</code> 文件置于 <strong>尾部</strong> </li>
			<li>HTML 代码尽量过一遍 <a href="http://html5.validator.nu/">HTML5 验证</a> </li>
			<li>HTML 占位图片使用 <a href="http://temp.im/">temp.im</a> &amp; <a href="http://placehold.us/">placehold.us</a> 图片服务</li>
			</ul>
		</section>
		
		
		<!-- Hack
		================================================== -->
		<section id="hack">
			<div class="page-header">
				<h1>Hack规则</h1>
			</div>
			<p><span class="label label-info">关于Hack:</span> 在firefox写完，IE有问题？还是其他浏览器也出现了。你知道IE Hack 能解决。我想，你也可能知道，用其他方法也能绕过。建议少用Hack。</p>
		</section>
		
		<!-- Names
		================================================== -->
		<section id="names">
			<div class="page-header">
				<h1>常用词命名统一表</h1>
			</div>
			<h2>规则：</h2>
			<p>1. <strong>可读性强，见名知义。</strong><br>
			1. 尽量不与 jQuery 社区已有的习惯冲突。<br>
			1. 尽量写全。不用缩写，除非是下面列表中约定的。</p>
			<p>大家一起来，逐步完善。</p>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<td> 常用词 </td>
						<td> 说明 </td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td> options </td>
						<td> 表示配置，与 jQuery 社区保持一致，不要用 config, opts 等 </td>
					</tr>
					<tr>
						<td> active </td>
						<td> 表示当前，不要用 current 等 </td>
					</tr>
					<tr>
						<td> index </td>
						<td> 表示索引，不要用 idx 等 </td>
					</tr>
					<tr>
						<td> trigger </td>
						<td> 触点元素 </td>
					</tr>
					<tr>
						<td> triggerType </td>
						<td> 触发类型、方式 </td>
					</tr>
					<tr>
						<td> context </td>
						<td> 表示传入的 this 对象 </td>
					</tr>
					<tr>
						<td> object </td>
						<td> 推荐写全，不推荐简写为 o, obj 等 </td>
					</tr>
					<tr>
						<td> element </td>
						<td> 推荐写全，不推荐简写为 el, elem 等 </td>
					</tr>
					<tr>
						<td> length </td>
						<td> 不要写成 len, l </td>
					</tr>
					<tr>
						<td> prev </td>
						<td> previous 的缩写 </td>
					</tr>
					<tr>
						<td> constructor </td>
						<td> 不能写成 ctor </td>
					</tr>
					<tr>
						<td> easing </td>
						<td> 表示动画平滑函数 </td>
					</tr>
					<tr>
						<td> min </td>
						<td> minimize 的缩写 </td>
					</tr>
					<tr>
						<td> max </td>
						<td> maximize 的缩写 </td>
					</tr>
					<tr>
						<td> <span class="caps">DOM</span> </td>
						<td> 不要写成 dom, Dom </td>
					</tr>
					<tr>
						<td> .tpl </td>
						<td> 使用 tpl 后缀表示模版 </td>
					</tr>
					<tr>
						<td> btn </td>
						<td> button 的缩写 </td>
					</tr>
				</tbody>
			</table>
		</section>
		
		<!-- JavaScript
		================================================== -->
		<section id="javascript">
			<div class="page-header">
				<h1>JavaScript 编码风格</h1>
			</div>
			<div class="alert alert-info"><strong>强调！</strong> 需要通过 jslint，查看下面的具体编码风格。</div>
			<p><strong>首先必须通过 <pre class="prettyprint linenums">arale/tools/gjslint</pre> 普通模式校验。</strong> 通不过的，不允许提交到 Git 库。</p>

			<hr>
			
			<ul>
			<li>JS 换行缩进：采用 4 空格</li>
			<li>结束行需添加分号<code>;</code>
			</li>
			<li>jQuery变量要求首字符为 <code>$</code>, 私有变量:首字符为 <code>_</code>; 尽量避免全局变量.</li>
			<li>避免使用 eval()，setTimeOut使用调用函数，考虑重绘，回流 操作对页面影响  参看：<a href="http://www.zhangxinxu.com/wordpress/2010/01/%E5%9B%9E%E6%B5%81%E4%B8%8E%E9%87%8D%E7%BB%98%EF%BC%9Acss%E6%80%A7%E8%83%BD%E8%AE%A9javascript%E5%8F%98%E6%85%A2%EF%BC%9F/" title="重绘,回流参考">reflows，repaints</a>
			</li>
			<li>JS调试使用 <code>console.log()</code> 及 <code>console.dir()</code> 进行，避免使用弹出框，线上版需要注释所有调试代码</li>
			<li>JS压缩混淆工具: <a href="http://javascriptcompressor.com/" title="JS 压缩和混淆">JS Compressor</a>  如果使用了压缩，需要留 <code>name-src.js</code> 在同路径供今后修改使用</li>
			</ul>
			<hr>
			<p>下面是一些常用注意点：</p>

			<h2>编码</h2>

			<p>统一用 utf-8</p>

			<h2>长度</h2>

			<p>长度不超过 80 个字符。别小看这一条规则，如果严格去遵循，你会发现代码变清晰了。而且，你一定能做到的。</p>

			<p>参考:</p>

			<ol>
			<li>pep8 为 79 个字符</li>
			<li>npm 为 80 个字符</li>
			<li>google 为 80 个字符</li>
			</ol><h2>缩进</h2>

			<p>缩进使用 2个 或 4个 空格，组件内保持统一，不混用。禁用 tab。</p>

			<p>参考：</p>

			<ol>
			<li>npm 为 2 空格</li>
			<li>pep8 为 4 空格</li>
			<li>google 为 2 空格( gjslint 没规定)</li>
			<li>大部分前端工程师习惯 4 空格</li>
			</ol><p>Vim 设置 tab 为 4 空格：</p>

<pre class="prettyprint linenums">
set tabstop=4
set shiftwidth=4
set expandtab
</pre>

			<h2>花括号</h2>

			<h3>花括号不换行</h3>

			<p>好</p>

<pre class="prettyprint linenums">
if (foo) {
}
</pre>

			<p>坏</p>

<pre class="prettyprint linenums">
if (foo)
{
}
</pre>

			<p><strong>不允许一行判断，一律换行</strong></p>

			<p>坏</p>

<pre class="prettyprint linenums">
if (foo) return;
</pre>

			<h2>命名约定</h2>

			<ol>
			<li>常量 UPPERCASE_WORD</li>
			<li>变量 camelName</li>
			<li>类名 CamelName</li>
			</ol><h2>空格</h2>

			<h3>操作符之间需要空格</h3>

			<p>好</p>

<pre class="prettyprint linenums">
var x = y + z
</pre>

			<p>坏</p>

<pre class="prettyprint linenums">
var x=y+z
</pre>

			<h3>只空一格</h3>

			<p>好</p>

<pre class="prettyprint linenums">
{
	a: 'short',
	looooongname: 'long'
}
</pre>

			<p>坏</p>

<pre class="prettyprint linenums">
{
	a           : 'short',
	looooongname: 'long'
}
</pre>

			<h2>逗号与换行</h2>

			<p>建议用自然人的处理方法</p>

<pre class="prettyprint linenums">
{
   a: 'a',
   b: 'b',
   c: 'c'
}
</pre>

			<p>不建议使用 npm 风格的逗号与换行，即</p>

<pre class="prettyprint linenums">{
   a: 'a'
  ,b: 'b'
  ,c: 'c'
}
</pre>

			<h2>变量声明</h2>

			<p>首先，**变量在使用前必须声明**。</p>

			<p>对于单 var 模式和多 var 模式，不做强行约定，但同一个文件里，风格必须一致。</p>

			
		</section>
		<!-- js-notes
		================================================== -->
		<section id="js-notes">
			<div class="page-header">
				<h1>JavaScript 注释规范</h1>
			</div>
<h2>总原则</h2>

<ol>
<li><strong>As short as possible（如无必要，勿增注释）</strong>。尽量提高代码本身的清晰性、可读性。</li>
<li><strong>As long as necessary（如有必要，尽量详尽）</strong>。合理的注释、空行排版等，可以让代码更易阅读、更具美感。</li>
</ol>

<p>总之，注释的目的是：<strong>提高代码的可读性，从而提高代码的可维护性。</strong></p>

<h2>什么时候需要添加注释</h2>

<ol>
<li><p>某段代码的写法，需要注释说明 why 时：</p>
<pre class="prettyprint linenums">
// Using loop is more efficient than `rest = slice.call(arguments, 1)`.
for (i = 1, len = arguments.length; i &lt; len; i++) {
rest[i - 1] = arguments[i];
}
</pre></li>
<li><p>添加上注释，能让代码结构更清晰时：</p>

<pre class="prettyprint linenums">
init: function(selector, context, rootjQuery) {
var match, elem, ret, doc;

// Handle $(""), $(null), or $(undefined)
if ( !selector ) {
    ...
}

// Handle $(DOMElement)
if ( selector.nodeType ) {
    ...
}

// The body element only exists once, optimize finding it
if ( typeof selector === "string" ) {
    ...
 }
}
</pre></li>
<li><p>有借鉴第三方代码，需要说明时：</p>
<pre class="prettyprint linenums">
// Inspired by https://github.com/jquery/jquery/blob/master/src/core.js
function ready() {
...
}
</pre></li>
</ol>

<h2>文件起始处的约定</h2>

<p>每个源码文件的开头，保留为空：</p>

<pre class="prettyprint linenums">
define(function(require, exports, module) {
    // 源代码
});</pre>

<p>注意点：</p>

<ol>
<li>文件头不添加作者信息，是因为更推崇团队和社区参与。author 和 contributors 信息，在 GitHub 上可以清晰看出来。（注意：该条规范，仅适用于 Arale 组件。对于业务代码，请添加上作者信息，以便在出问题时，快速找到负责人。）</li>
<li>文件最后空一行，可以保证在 combo 合并后，源码的层次清晰。</li>
</ol>

<h2>注释书写规范</h2>

<ol>
<li>源码中的注释，推荐用英文。</li>
<li>含有中文时，标点符号用中文全角。</li>
<li>中英文夹杂时，英文与中文之间要用一个空格分开。</li>
<li>注释标识符与注释内容要用一个空格分开：<code>// 注释</code> 与 <code>/* 注释 */</code>。</li>
</ol>

<h2>JSDoc 注释</h2>

<ul>
<li>不推荐 JSDoc 式注释，推荐 Backbone 风格的注释。</li>
<li>API 请通过 README 等文档表达清楚。</li>
<li>不写 JSDoc 类文档，可以让开发者在写代码时更专注于写代码，在写文档时则更专注于写文档。<strong>让工作解藕，更专注。</strong></li>
</ul>

		</section>
		
		<!-- JSON
		================================================== -->
		<section id="json">
			<div class="page-header">
				<h1>JSON格式规范</h1>
			</div>
			<p>参考<a target="_blank" href="https://github.com/webcoding/google-styleguide/blob/master/JSONStyleGuide.md">JSON Style Guide翻译</a>，原版：<a target="_blank" href="http://google-styleguide.googlecode.com/svn/trunk/jsoncstyleguide.xml">Google JSON Style Guide</a></p>
		</section>
		
		
		
		<!-- Readme
		================================================== -->
		<section id="readme">
			<div class="page-header">
				<h1>说明文档书写规范</h1>
			</div>
      <h2>基本书写规范</h2>

<ol>
<li>尽量用中文，力求简洁清晰。（注：源码中的注释，可用英文。）</li>
<li>含有中文的段落，标点符号必须用中文全角。</li>
<li>中英文混杂时，中文与英文之间，要保持一个空格。</li>
</ol>

<h2>README.md 书写规范</h2>

<p>每个组件目录下，必须有该文件，用来描述组件的基本情况，模板如下：</p>

<pre class="prettyprint linenums">
# 模块名称

该模块的概要介绍。

---

## 模块依赖

* seajs

## 使用说明

如何使用该模块，可以根据组件的具体特征，合理组织。
需要提供 API 说明，如有继承父类的参数也需要说明。
</pre>


<p>上面两部分是必须的，可以根据实际情况，加入其他部分。</p>
<p>关于Markdown的使用可以参考：<a target="_blank" href="http://www.tcreator.info/webSchool/tools/markdown_basics.html">Markdown 中文基础教程文档</a></p>
<p>参考范例：<a target="_blank" href="https://github.com/alipay/arale/tree/master/lib/class/README.md">lib/class/README.md</a></p>

<h2>HISTORY.md 书写规范</h2>

<p>有正式版本更新的组件，必须要有该文件，用来描述版本变更情况，模板如下：</p>

<pre class="prettyprint linenums">
### 1.1.0

* [bug fix] #18 修复了 XXX 问题
* [bug fix] #29 修复了 YYY 问题
* [feature] #12 增加了 ZZZ 功能
* [improve] #23 优化了 BBB 代码

### 1.0.0

* 第一个发布版本
</pre>
		</section>
		
		
		<!-- Examples
		================================================== -->
		<section id="examples">
			<div class="page-header">
				<h1>Examples 规范</h1>
			</div>
<h2>文件命名</h2>

<ul>
<li>符合 <a href="standard.php#names">文件命名与目录结构</a> 规范</li>
<li>示例文件放在 examples 目录下，文件命名和组件命名一致</li>
</ul><h2>文件内容</h2>

<p>example 应该尽可能展现所有功能，至少包含如下内容：</p>

<ul>
<li>效果展示，如果是组件则需要展示交互效果</li>
<li>代码片段，实现此效果的代码</li>
<li>描述，做一个简要说明</li>
<li>适用无线的组件 example 需要考虑手机用户的访问</li>
</ul>
		</section>
		
		
		
		
		<!-- History
		================================================== -->
		<section id="history">
			<div class="page-header">
				<h1>历史记录书写规范</h1>
			</div>
<ol>
<li><p>历史记录文件放在模块根目录下，文件名为 <strong>HISTORY.md</strong>。</p></li>
<li><p>书写格式参照 <a target="_blank" href="https://raw.github.com/aralejs/autocomplete/master/HISTORY.md">https://raw.github.com/aralejs/autocomplete/master/HISTORY.md</a></p></li>
<li><p>一切有价值的修改必须忠实地记录在文件中，推荐表明对应的 issue 地址。</p></li>
<li>
<p>Arale 模块的修改类型共有五项：</p>

<ul>
<li>
<code>new</code> 新增的属性、功能、方法、特性等等。</li>
<li>
<code>fixed</code> 修复 bug 和影响使用的性能问题等。</li>
<li>
<code>imporved</code> 接口增强、健壮性和性能提升、代码优化等。</li>
<li>
<code>changed</code> 涉及到兼容性变化的改动。</li>
<li>
<code>unresoloved</code> 已知的但本版本暂未修复的问题。</li>
</ul>
</li>
<li><p>要在 aralejs.org/xxx/history.html 展现出图片标签的效果，需要按下列格式书写修改记录。</p></li>
</ol>

<pre class="prettyprint linenums">
`tag:new` 增加 duration 参数。
`tag:changed` 删除 duration 参数。
</pre>

<h2>效果预览</h2>

<p><a href="http://aralejs.org/autocomplete/history.html">http://aralejs.org/autocomplete/history.html</a></p>
		</section>
		
		
		
		
		
		
		
		
		<!-- EDM
		================================================== -->
		<section id="edm">
			<div class="page-header">
				<h1>EDM制作规范</h1>
			</div>
			<p>EDM制作规范</p>
		</section>
		
		
		
		<h2>相关讨论</h2>

		<ul>
		<li>引自：<a target="_blank" href="https://github.com/aralejs/aralejs.org/wiki">开发规范</a></li>
		<li><a target="_blank" href="#">编码与文档风格讨论</a></li>
		</ul>
		
		<!-- EDM
		================================================== -->
		<section id="edm">
			<div class="page-header">
				<h1>EDM 制作规范</h1>
			</div>
			<ul>
			<li> <code>CSS</code> 只可使用 <strong>内联样式表</strong> ，如：<code>style="margin:0;"</code> </li>
			<li>设计之初遵循： <strong>图上无文本，文本后无底纹</strong> 的规则</li>
			<li>使用 <code>MailChimp HTML Email CSS Fix</code> 参看下文链接</li>
			<li>引入 <code>CSS Reset for HTML Email</code> 参看下文链接</li>
			<li>使用 <code>Table</code> 布局而非 <code>DIV</code> </li>
			<li>所有图片使用 <code>IMG</code> 标签，如：<code>&lt;img style="style="display:block" "src="" /&gt;</code> </li>
			<li>可以适当使用占位符 <code>spacer.gif</code> </li>
			<li>多用 <code>&lt;br /&gt;</code> 换行而非 <code>&lt;p&gt;</code> </li>
			<li>整体最佳宽度为：<code>550-600px</code> </li>
			<li>不使用 <code>Javascript</code> </li>
			<li>正式发送给用户之前，多次测试</li>
			</ul>
			<p>更多细节参考下面链接：<br><a href="http://www.web-ed.com.au/2011/05/coding-html-newsletters-edms-quick-guide/">12 Killer Tips and Tricks for Building HTML Email</a></p>
		</section>

    </div>
</div>

</div>



<?php include("common/footer.html");?>