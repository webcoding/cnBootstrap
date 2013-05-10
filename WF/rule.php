<?php $page = "rule" ?>
<?php $title="规范和最佳实践"?>
<?php $description = "本项目基于cnBootstrap开源项目创建，致力于前端快捷开发！" ?>
<?php include("./common/meta.php"); ?>
</head>
<body>
<?php include("./common/header.php"); ?>

<div class="wrap">
	<div class="sidebar">
		<ul class="nav none">
			<li><a href="#overview">概述</a></li>
			<li><a href="#document">文档结构</a></li>
			<li><a href="#naming">命名规范</a></li>
			<li><a href="#html">HTML书写规范</a></li>
			<li><a href="#css">CSS编码规范</a></li>
			<li><a href="#javascript">JavaScript 编码风格</a></li>
			<li><a href="#json">JSON格式规范</a></li>
			<li><a href="#readme">说明文档书写规范</a></li>
			<li><a href="#edm">EDM制作规范</a></li>
		</ul>
	</div>
	<div class="main">
        
		<h1>规范说明 <small></small></h1>
        <blockquote>
            <p>写在规则前面的话——项目的可维护性第一。</p>
            <small>阿当</small>
        </blockquote>
		<p><p>此规范为参考规范，不全是硬性要求，部分硬性约定见 <a href="rule.php#document">文档结构</a> &amp; <a href="rule#">书写规范</a>,统一团队编码规范和风格。</p>
        <p>目标是让所有代码都是有规可循的，并且能够得到沉淀，减少重复劳动。</p>
        <div class="tips"><strong>大家一起完善。 </strong> </div>
        
		<h2>文档结构</h2>
<pre class="prettyprint">

</pre>

        <h2>目录、文档结构</h2>
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
                </ul>
            </li>
        </ol>
        
        <h2>命名规范</h2>
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
                </ul>
            </li>
        </ol>
        <h3>常用词命名统一表</h3>
        <h5>规则：</h5>
        
        
        <h2>CSS规范</h2>
        <p>外部CSS引用，必须使用如下格式( rel 在前，href 在后，无 type="text/css" 及 charset )：</p>
        <pre>&lt;link rel="stylesheet" href="http://pic.lvmama.com/styles/v3/combo.css" &gt;</pre>
        <h3>CSS 注意事项</h3>
        <ul>
            <li>无特殊说明，编码统一为utf-8；</li>
            <li>防止文件合并及编码转换时造成问题，请将样式中文字体名字改成对应的英文名字（unicode码），如：宋体（ \5b8b\4f53）微软雅黑（”Microsoft YaHei”,”\5FAE\8F6F\96C5\9ED1″）；</li>
            <li>书写代码前，考虑并提高样式重复使用率；</li>
            <li>禁止使用 <code>expression</code> 表达式；</li>
            <li>禁止滥用 <code>!important</code>；</li>
            <li>能缩写的尽量缩写，如 <code>padding:5px 0 0 5px;</code>；</li>
            <li>层级(z-index)必须清晰明确，适当划分组件层级范围，禁止层级间盲目攀比；</li>
            <li>为方便组件模块化和提高弹性，正常情况下，为避免外边界冲突，组件不应设置外边界，外边界用组合css方式实现，如：m10{margin:10px}mt10{margin-top:10px}等；</li>
            <li>必须为大区块&amp;重要模块的样式添加注释，小区块适量注释；</li>
            <li>正式发布前应进行压缩，压缩后文件的命名应添加”.min”后缀；</li>
            <li>代码缩进与格式：请参照以下 CSS 书写规范；</li>
        </ul>
        
        <h3>CSS 书写规范</h3>
        <p class="lead">以下书写规范针对组件开发使用，非组件书写格式建议使用单行式排版。</p>
        <ul>
            <li>使用四个空格的 soft-tabs 缩进</li>
            <li>写组选择器时，保持选择器各占一行</li>
            <li>在属性块的左 “{” 前应该有一个空格</li>
            <li>关闭属性块的右 “}” 要新起一行</li>
            <li>每个属性的 “:” 后包含一个空格</li>
            <li>每个属性应该自己独占一行</li>
            <li>分割选择器的 “,” 后应该包含一个空格</li>
            <li>Don't include spaces after commas in RGB or RGBa colors, and don't preface values with a leading zero</li>
            <li>小写所有16进制值, 例如, <code>#fff</code> 而非 <code>#FFF</code></li>
            <li>使用简写16进制值, 例如, <code>#fff</code> 而非 <code>#ffffff</code></li>
            <li>选择器中引用属性值, 例如, <code>input[type="text"]</code>
            </li>
            <li>避免0值设置单位, 例如, <code>margin: 0;</code> 而非 <code>margin: 0px;</code></li>
        </ul>
        
<h4>错误示例：</h4>
<pre class="prettyprint linenums">
.selector, .selector-secondary, .selector[type=text] {
    padding:15px;
    margin:0px 0px 15px;
    background-color:rgba(0, 0, 0, 0.5);
    box-shadow:0 1px 2px #CCC,inset 0 1px 0 #FFFFFF
}
</pre>

<h4>正确示例：</h4>
<pre class="prettyprint linenums">
.selector,
.selector-secondary,
.selector[type="text"] {
    padding: 15px;
    margin: 0 0 15px;
    background-color: rgba(0,0,0,.5);
    box-shadow: 0 1px 2px #ccc, inset 0 1px 0 #fff;
}
</pre>


        <p>常见的CSS术语，请参见 <a href="http://en.wikipedia.org/wiki/Cascading_Style_Sheets#Syntax">syntax section of the Cascading Style Sheets article</a> on Wikipedia.</p>
        
        <h3>属性顺序</h3>

<pre class="prettyprint linenums">
.declaration-order {
    /* Positioning 定位 */
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 100;
    
    /* Box-model 盒模型 */
    display: block;
    float: right;
    width: 100px;
    height: 100px;
    
    /* Typography 排版 */
    font: normal 13px "Helvetica Neue", sans-serif;
    line-height: 1.5
    color: #333;
    text-align: center;
    
    /* Visual 视觉 */
    background-color: #f5f5f5;
    border: 1px solid #e5e5e5;
    border-radius: 3px;
    
    /* Misc 其他 */
    opacity: 1;
}
</pre>

        <p>相关属性应放在一起，将定位与盒模型属性写在最前面，其次是排版和视觉效果的属性。</p>
        <p>关于属性顺序的完整列表，请参考 <a href="http://twitter.github.com/recess">Recess</a>.</p>
        
        <h3>格式化例外</h3>
        <p>某些情况下，这是有道理的，稍微偏离默认的 <a href="#css-syntax">语法</a>.</p>
        
        <h4>前缀属性</h4>
        <p>当使用供应商前缀的属性时，每个属性缩进到vlaue值垂直对齐的位置，方便多行编辑。</p>

<pre class="prettyprint linenums">
/* Corner radius-圆角 */
.selector {
  -webkit-border-radius: 3px;
     -moz-border-radius: 3px;
          border-radius: 3px;
}
</pre>

        <p>注：<code>-khtml-border-radius: 3px;</code> 是苹果的那个浏览器的，现在使用 <code>-webkit-</code></p>
        <p>在 Textmate、Sublime Text 2 以及 notepad++等工具中, 都支持多行编辑。</p>
        
        <h4>单一属性的书写规则</h4>
        <p>在有些情况下，每个样式只有一个属性，考虑到可读性及更快地编辑删除等，保持同一行书写。</p>

<pre class="prettyprint linenums">
.span1 { width: 60px; }
.span2 { width: 140px; }
.span3 { width: 220px; }

.sprite {
    display: inline-block;
    width: 16px;
    height: 15px;
    background-image: url(../img/sprite.png);
}
.icon           { background-position: 0 0; }
.icon-home      { background-position: 0 -20px; }
.icon-account   { background-position: 0 -40px; }
</pre>

        <h3>可读性</h3>
        <p>代码是由人来书写和维护的。确保你的代码有很好的注释描述，以便他人使用。</p>
        
        <h4>注释</h4>
        <p>好的代码都有一个良好的代码注释而不仅仅是一个类名</p>

<h4>Bad example:</h4>
<pre class="prettyprint linenums">
/* Modal header */
.modal-header {
  ...
}
</pre>

<h4>Good example:</h4>
<pre class="prettyprint linenums">
/* Wrapping element for .modal-title and .modal-close */
.modal-header {
  ...
}
</pre>

        <h4>类名与命名</h4>
        <ul>
            <li>保持类名使用小写字母或连接符 (不要使用下划线或驼峰命名法)</li>
            <li>避免使用随意的首字符命名法</li>
            <li>保持命名尽可能短并简洁</li>
            <li>使用有意义的命名；使用结构化或目的性的意义名称</li>
            <li>根据最近的父组件基类作为命名前缀</li>
            <li>为JavaScript预留钩子的命名，请以 JS_ 起始，比如：JS_ui-tab, JS_slidebox；或者使用 data-* 挂钩JS功能</li>
        </ul>

<h4>Bad example:</h4>
<pre class="prettyprint linenums">
.t { ... }
.red { ... }
.header { ... }
</pre>

<h4>Good example:</h4>
<pre class="prettyprint linenums">
.tweet { ... }
.important { ... }
.tweet-header { ... }
</pre>

        <h4>选择器</h4>
        <ul>
            <li>在通用的元素标签中使用类</li>
            <li>要保持尽量简短，并限制每个选择器最多三个class</li>
            <li>必要时使用最近的父类 (如，在不使用前缀类时)</li>
        </ul>

<h4>Bad example:</h4>
<pre class="prettyprint linenums">
span { ... }
.page-container #stream .stream-item .tweet .tweet-header .username { ... }
.avatar { ... }
</pre>

<h4>Good example:</h4>
<pre class="prettyprint linenums">
.avatar { ... }
.tweet-header .username { ... }
.tweet .avatar { ... }
</pre>

        <h3>组织</h3>
        <ul>
            <li>组织代码段的组成部分</li>
            <li>指定一个一致的注释层次结构</li>
            <li>如果使用多个css文件，则按组件进行划分</li>
        </ul> 
        
        
        <p>更多详情常见：CSS目录下 readme.md 文件</p>
        
	</div>
</div>

<?php include("common/footer.html");?>
</body>
</html>