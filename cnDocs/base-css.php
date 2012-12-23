<?php $page = "base-css" ?>
<?php $title="Base CSS"?>
<?php $description = "" ?>
<?php include("./templates/header.php"); ?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1 title="Base CSS">基础CSS</h1>
        <p class="lead" title="Fundamental HTML elements styled and enhanced with extensible classes.">在框架的基础上，对HTML基础元素进行样式定义，并利用可扩展的class增强其展示效果，从而提供形式新颖，风格一致的外观和体验。</p>
    </div>
</header>
<div class="container"> 
    
    <!-- Docs nav
================================================== -->
    <div class="row">
        <div class="span3 bs-docs-sidebar">
            <ul class="nav nav-list bs-docs-sidenav">
                <li><a href="#typography" title="Typography"><i class="icon-chevron-right"></i> 排版</a></li>
                <li><a href="#code" title="Code"><i class="icon-chevron-right"></i> 代码</a></li>
                <li><a href="#tables" title="Tables"><i class="icon-chevron-right"></i> 表格</a></li>
                <li><a href="#forms" title="Forms"><i class="icon-chevron-right"></i> 表单</a></li>
                <li><a href="#buttons" title="Buttons"><i class="icon-chevron-right"></i> 按钮</a></li>
                <li><a href="#images" title="Images"><i class="icon-chevron-right"></i> 图片</a></li>
                <li><a href="#icons" title="Icons by Glyphicons"><i class="icon-chevron-right"></i> 图标</a></li>
                <li><a href="#icons-pure-css" title="Pure CSS icons"><i class="icon-chevron-right"></i> 纯CSS图标</a></li>
            </ul>
        </div>
        <div class="span9"> 
            
            <!-- Typography
    ================================================== -->
            <section id="typography">
                <div class="page-header">
                    <h1 title="Typography">排版 <small> 标题，段落，列表，以及其他行级元素</small></h1>
                </div>
                <h2 id="headings" title="Headings">标题</h2>
                <p title="All HTML headings, h1 through h6 are available.">所有的HTML标题, <code>&lt;h1&gt;</code> 到 <code>&lt;h6&gt;</code> 都可以用。</p>
                <div class="bs-docs-example">
                    <h1>h1. 一级标题</h1>
                    <h2>h2. 二级标题</h2>
                    <h3>h3. 三级标题</h3>
                    <h4>h4. 四级标题</h4>
                    <h5>h5. 五级标题</h5>
                    <h6>h6. 六级标题</h6>
                </div>
                <h2 id="body-copy" title="Body copy">Body copy</h2>
                <p title="Bootstrap's global default font-size is 14px, with a line-height of 20px. This is applied to the &lt;body&gt; and all paragraphs. In addition, &lt;p&gt; (paragraphs) receive a bottom margin of half their line-height (10px by default).">Bootstrap 全局默认字体大小14px，行高20px。这适用于 <code>&lt;body&gt;</code> 和所有段落 <code>&lt;p&gt;</code>。此外，<code>&lt;p&gt;</code> 还会设置等值一半行高的下边距（默认是10px）。</p>
                <p><span class="label label-info">注意!</span> 针对中文显示，默认设置为12px/22px、14px/24px。</p>
                <div class="bs-docs-example">
                    <p>制定本规范的目的在于使我们的CSS代码更加易于维护和重用，从而提升效率执行本规范时建议的流程。建议使用D(esign)C(oding)D(ebug)V(alidate)R(oundup)，即DCDVR的流程。首先需要规划样式并分为共有样式 和页面个性化样式，然后才开始编码，编码的同时进行Debug，Validate和代码片断的总结，而不是在所有模板都完成后才进行这三个步骤。</p>
                    <p>这种方式我很是赞同，编码同时即DVR（这样团队开发确实能提高效率的），值得效法和推广！</p>
					<p>前端框架设计模式：减少依赖，避免耦合；统一风格，让代码有规可循，保证团队协作效率。</p>
                </div>
                <pre class="prettyprint">&lt;p&gt;...&lt;/p&gt;</pre>
                <h3>Lead body copy</h3>
                <p title="Make a paragraph stand out by adding .lead.">通过添加 <code>.lead</code> 实现段落强调。</p>
                <div class="bs-docs-example">
                    <p class="lead">写在规则前面的话——项目的可维护性第一。</p>
                </div>
                <pre class="prettyprint">&lt;p class="lead"&gt;...&lt;/p&gt;</pre>
                <h3 title="Built with Less">内置Less</h3>
                <p title="The typographic scale is based on two LESS variables in variables.less: @baseFontSize and @baseLineHeight. The first is the base font-size used throughout and the second is the base line-height. We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Bootstrap adapts.">
				整个排版系统的单位尺度都取决于 <strong>variables.less</strong> 文件中的两个Less变量： <code>@baseFontSize</code> 和 <code>@baseLineHeight</code>。 前者决定全局的默认字体大小font-size，后者决定默认的行高line-height。我们利用这些变量，配合一些数学运算，就可以得到定义样式时所需的margins, paddings, line-heights等等。配置它们以使Bootstrap能自适应。</p>
                <hr class="bs-docs-separator">
                <h2 id="emphasis" title="Emphasis">强调</h2>
                <p title="Make use of HTML's default emphasis tags with lightweight styles.">使用HTML默认的强调标签。</p>
                <h3><code>&lt;small&gt;</code></h3>
                <p title="For de-emphasizing inline or blocks of text, use the small tag.">对于不再强调内联或文本块，<small>使用小标签。</small></p>
                <div class="bs-docs-example">
                    <p title="This line of text is meant to be treated as fine print."><small>这一行文本意味着它不是强调的内容。</small></p>
                </div>
                <pre class="prettyprint">
&lt;p&gt;
  &lt;small&gt;这一行文本意味着它不是强调的内容。&lt;/small&gt;
&lt;/p&gt;
</pre>          
<h3 title="Bold">加粗</h3>
<p title="For emphasizing a snippet of text with a heavier font-weight.">使用加粗来强调文本</p>
          <div class="bs-docs-example">
            <p title="The following snippet of text is rendered as bold text.">下面的代码片段的文本呈现为<strong>粗体文本</strong>。</p>
          </div>
          <pre class="prettyprint">&lt;strong&gt;粗体文本&lt;/strong&gt;</pre>

          <h3 title="Italics">斜体</h3>
          <p title="For emphasizing a snippet of text with italics.">使用斜体来强调文本</p>
          <div class="bs-docs-example">
            <p title="The following snippet of text isrendered as italicized text.">下面的代码片段的文本 <em>呈现为斜体字</em>。</p>
          </div>
          <pre class="prettyprint">&lt;em&gt;呈现为斜体字&lt;/em&gt;</pre>

          <p title="Feel free to use &lt;b&gt; and &lt;i&gt; in HTML5. &lt;b&gt; is meant to highlight words or phrases without conveying additional importance while &lt;i&gt; is mostly for voice, technical terms, etc."><span class="label label-info">注意!</span> 在HTML5中仍然可以使用 <code>&lt;b&gt;</code> 和 <code>&lt;i&gt;</code> 标签，但是它们的用途已经发生了改变。
	<code>&lt;b&gt;</code> 在过去仅仅用来加粗单词或短语，没有任何语义上的含义，现在定义需要强调的部分（如果您希望把文本标记为相比其他文本更为重要，应该使用 <code>&lt;strong&gt;</code> 标签。）。而 <code>&lt;i&gt;</code> 主要用在语音和技术等方面。</p>

          <h3 title="Emphasis classes">强调类</h3>
          <p title="Convey meaning through color with a handful of emphasis utility classes.">通过颜色来表示强调的工具类</p>
          <div class="bs-docs-example">
            <p class="muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
            <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
            <p class="text-error">Donec ullamcorper nulla non metus auctor fringilla.</p>
            <p class="text-info">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>
            <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
          </div>
<pre class="prettyprint linenums">
&lt;p class="muted"&gt;Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.&lt;/p&gt;
&lt;p class="text-warning"&gt;Etiam porta sem malesuada magna mollis euismod.&lt;/p&gt;
&lt;p class="text-error"&gt;Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
&lt;p class="text-info"&gt;Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.&lt;/p&gt;
&lt;p class="text-success"&gt;Duis mollis, est non commodo luctus, nisi erat porttitor ligula.&lt;/p&gt;
</pre>                
				<hr class="bs-docs-separator">
                <h2 id="abbreviations" title="Abbreviations">缩写形式</h2>
                <p title="Stylized implemenation of HTML's &lt;abbr&gt; element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a title attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover.">HTML的 <code>&lt;abbr&gt;</code> 标签是为缩写语或缩写词在hover状态时能显示扩展的文本。使用 <code>title</code> 属性的 <code>&lt;abbr&gt;</code> 会带有点状(dotted)底边线，鼠标经过时会显示带问号的箭头，并提示完整的字词信息。</p>
                <h3><code>&lt;abbr&gt;</code></h3>
                <p title="For expanded text on long hover of an abbreviation, include the title attribute.">要在缩写词上实现hover时的扩展文本，应该包含 <code>title</code> 属性.</p>
                <div class="bs-docs-example">
                    <p title="An abbreviation of the word attribute is attr.">单词 attribute 的缩写是 <abbr title="attribute">attr</abbr>。</p>
                </div>
                <pre class="prettyprint">&lt;abbr title="attribute"&gt;attr&lt;/abbr&gt;</pre>
                <h3><code>&lt;abbr class="initialism"&gt;</code></h3>
                <p title="Add .initialism to an abbreviation for a slightly smaller font-size.">对缩写词元素应用 <code>.initialism</code> 会减小一号字体大小，以协调排版效果。</p>
                <div class="bs-docs-example">
					<p title="HTML is the best thing since sliced bread."><abbr title="HyperText Markup Language 超文本标记语言" class="initialism">HTML</abbr> 是自切片面包问世以来最棒的发明。</p>
                </div>
                <pre class="prettyprint">&lt;abbr title="HyperText Markup Language" class="initialism"&gt;attr&lt;/abbr&gt;</pre>
                <hr class="bs-docs-separator">
                <h2 id="addresses" title="Addresses">地址</h2>
                <p title="Present contact information for the nearest ancestor or the entire body of work.">定义文档作者或拥有者的联系信息。</p>
                <h3><code>&lt;address&gt;</code></h3>
                <p title="Preserve formatting by ending all lines with &lt;br&gt;">通过行尾的 <code>&lt;br&gt;</code> 标签保持格式。</p>
                <div class="bs-docs-example">
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
                <pre class="prettyprint linenums">
&lt;address&gt;
&lt;strong&gt;tCreator文化有限公司&lt;/strong&gt;&lt;br&gt;
某省某市某大道404号&lt;br&gt;
佚名大厦, A座49楼&lt;br&gt;
&lt;abbr title="Phone"&gt;P:&lt;/abbr&gt; (123) 456-7890
&lt;/address&gt;

&lt;address&gt;
&lt;strong&gt;有关负责人&lt;/strong&gt;&lt;br&gt;
&lt;a href="mailto:#"&gt;first.last@gmail.com&lt;/a&gt;
&lt;/address&gt;
</pre>
                <hr class="bs-docs-separator">
                <h2 id="blockquotes" title="Blockquotes">引用</h2>
                <p title="For quoting blocks of content from another source within your document.">定义摘自另一个源的块引用。</p>
                <h3 title="Default blockquote">默认引用</h3>
                <p title="Wrap &lt;blockquote&gt; around any HTML as the quote. For straight quotes we recommend a &lt;p&gt;.">用 <code>&lt;blockquote&gt;</code> 嵌套 <abbr title="HyperText Markup Language">HTML</abbr> 即可实现引用。对于连续的引用内容，建议使用 <code>&lt;p&gt;</code> 标签。</p>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>元素</th>
                            <th>使用方式</th>
                            <th>备注</th>
                        </tr>
                    </thead>
                    <tbody>
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
                    </tbody>
                </table>
                <div class="bs-docs-example">
                    <blockquote>
					<p>菩提本无树，明镜亦非台；本来无一物，何处惹尘埃。</p>
					</blockquote>
                </div>
                <pre class="prettyprint linenums">
&lt;blockquote&gt;
&lt;p&gt;菩提本无树，明镜亦非台；本来无一物，何处惹尘埃。&lt;/p&gt;
&lt;/blockquote&gt;
</pre>
                <h3 title="Blockquote options">引用文字选项</h3>
                <p title="Style and content changes for simple variations on a standard blockquote.">对标准的引用文本实现简单的样式和内容风格的变化。</p>
                <h4 title="Naming a source">引用出处</h4>
                <p title="Add &lt;small&gt; tag for identifying the source. Wrap the name of the source work in &lt;cite&gt;.">可以添加一个可选的 <code>&lt;small&gt;</code> 元素来表示引用的出处，该元素会利用样式在内容前加入宽度为一个字长的破折号 <code>&amp;mdash;</code>。可以将引言或出处置于 <cite> 标签内。
      </p>
                <div class="bs-docs-example">
                    <blockquote>
                    <p>远看山有色，近听水无声。春去花还在，人来鸟不惊。</p>
					<small title="Someone famous in Source Title">王维 <cite title="Source Title">《画》</cite></small>
					</blockquote>
                </div>
                <pre class="prettyprint linenums">
&lt;blockquote&gt;
&lt;p&gt;远看山有色，近听水无声。春去花还在，人来鸟不惊。&lt;/p&gt;
&lt;small&gt;王维 &lt;cite title="Source Title"&gt;《画》&lt;/cite&gt;&lt;/small&gt;
&lt;/blockquote&gt;
</pre>
                <h4 title="Alternate displays">另一种引用效果</h4>
                <p title="Use .pull-right for a floated, right-aligned blockquote.">使用 <code>.pull-right</code> 实现由浮动且文本右对齐的引用框。</p>
                <div class="bs-docs-example" style="overflow: hidden;">
                    <blockquote class="pull-right">
					<p>曾经沧海难为水，除却巫山不是云。取次花丛懒回顾，半缘修道半缘君。</p>
					<small title="Someone famous in Source Title">元稹 <cite title="Source Title">《离思五首》之四</cite></small>
					</blockquote>
                </div>
                <pre class="prettyprint linenums">
&lt;blockquote class="pull-right"&gt;
...
&lt;/blockquote&gt;
</pre>
                <hr class="bs-docs-separator">
                
                <!-- Lists -->
                <h2 id="lists" title="Lists">列表</h2>
                <h3 title="Unordered">无序列表</h3>
                <p title="A list of items in which the order does not explicitly matter.">定义一个<em>没有</em>明确重要性的项目列表</p>
                <div class="bs-docs-example">
                    <ul>
                        <li>cnBootstrap是个好框架</li>
                        <li>jQuery是个好框架</li>
                        <li>artDialog是个好框架</li>
                        <li>artTemplate是个好的JS模板</li>
                        <li>Git是个好工具</li>
                        <li>为什么选择Git
                            <ul>
                                <li>更方便的 Merge</li>
                                <li>更方便的管理</li>
                                <li>更健壮的系统</li>
                                <li>对网络的依赖性更低</li>
                                <li>更少的&ldquo;仓库污染&rdquo;</li>
                            </ul>
                        </li>
                        <li>YUI是个好框架</li>
                        <li>AliceUI是个好框架</li>
                        <li>raphaeljs是个好框架</li>
                    </ul>
                </div>
                <pre class="prettyprint linenums">
&lt;ul&gt;
&lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;
</pre>
                <h3 title="Ordered">有序列表</h3>
                <p title="A list of items in which the order does explicitly matter.">定义一个<em>有</em>明确重要性的项目列表。</p>
                <div class="bs-docs-example">
                    <ol>
                        <li>CSS规范-减少依赖，避免耦合</li>
                        <li>统一风格，让代码有规可循，保证团队协作效率</li>
                        <li>文件编码必须使用utf-8（无BOM）</li>
                        <li>文件一律通过 link 链入 (NOT @import)</li>
                        <li>当只是单个页面使用时，才写在 &lt;head&gt; 的 &lt;style&gt; 中</li>
                    </ol>
                </div>
                <pre class="prettyprint linenums">
&lt;ol&gt;
&lt;li&gt;...&lt;/li&gt;
&lt;/ol&gt;
</pre>
                <h3 title="Unstyled">无样式列表</h3>
                <p title="A list of items with no list-style or additional left padding.">没有 <code>list-style</code> 即没有左侧内边距的列表。</p>
                <div class="bs-docs-example">
                    <ul class="unstyled">
                        <li>以动手实践为荣 , 以只看不练为耻;</li>
                        <li>以打印日志为荣 , 以单步跟踪为耻;</li>
                        <li>以空格缩进为荣 , 以制表缩进为耻;</li>
                        <li>以单元测试为荣 , 以人工测试为耻;
                            <ul>
                                <li>DreamWeaver很不错</li>
                                <li>Notepad++也很好用</li>
                                <li>配合Zen-Coding很爽</li>
                                <li>使用Sublime Text也不错</li>
                            </ul>
                        </li>
                        <li>以模块复用为荣 , 以复制粘贴为耻;</li>
                        <li>以多态应用为荣 , 以分支判断为耻;</li>
                        <li>以精简干练为荣 , 以冗余拖沓为耻;</li>
                        <li>以总结分享为荣 , 以跪求其解为耻;</li>
                    </ul>
                </div>
                <pre class="prettyprint linenums">
&lt;ul class="unstyled"&gt;
&lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;
</pre>
                <h3 title="Description">描述</h3>
                <p title="A list of terms with their associated descriptions.">列表项目及其关联描述</p>
                <div class="bs-docs-example">
                    <dl>
                        <dt title="Description list">描述列表</dt>
                        <dd title="A description list is perfect for defining terms.">适用于术语的定义/解释</dd>
                        <dt>计算机</dt>
                        <dd>用来计算的仪器 ... ...</dd>
                        <dt>显示器</dt>
                        <dd>以视觉方式显示信息的装置 ... ...</dd>
                    </dl>
                </div>
                <pre class="prettyprint linenums">
&lt;dl&gt;
&lt;dt&gt;...&lt;/dt&gt;
&lt;dd&gt;...&lt;/dd&gt;
&lt;/dl&gt;
</pre>
                <h4 title="Horizontal description">水平状态的描述</h4>
                <p title="Make terms and descriptions in &lt;dl&gt; line up side-by-side.">实现 <code>&lt;dl&gt;</code> 标签内项目和描述同一行内且内侧对齐。</p>
                <div class="bs-docs-example">
                    <dl class="dl-horizontal">
                    	<dt title="Description list">描述列表</dt>
                        <dd title="A description list is perfect for defining terms.">适用于术语的定义/解释</dd>
                        <dt>Coffee</dt>
                        <dd>Black hot drink</dd>
                        <dt>Milk</dt>
                        <dd>White cold drink</dd>
                    </dl>
                </div>
                <pre class="prettyprint linenums">
&lt;dl class="dl-horizontal"&gt;
&lt;dt&gt;...&lt;/dt&gt;
&lt;dd&gt;...&lt;/dd&gt;
&lt;/dl&gt;
</pre>
                <p title="Horizontal description lists will truncate terms that are too long to fit in the left column fix text-overflow. In narrower viewports, they will change to the default stacked layout. ">
				<span class="label label-info">注意!</span>
				水平列表中如果项目名称太长，需要添加 <code>text-overflow</code> 属性。在小分辨率下，他们会以堆叠式布局显示。 
				</p>
            </section>
            
            <!-- Code
    ================================================== -->
            <section id="code">
                <div class="page-header">
                    <h1 title="Code">代码 <small>行级/块状代码片段</small></h1>
                </div>
                <h2 title="Inline">内联样式/行内样式</h2>
                <p title="Wrap inline snippets of code with &lt;code&gt;.">使用 <code>&lt;code&gt;</code> 包装行级代码片段。</p>
                <div class="bs-docs-example">
				<p title="For example, &lt;section&gt; should be wrapped as inline. ">例如：<code>&lt;section&gt;</code> 应该被作为行级代码包装。</p>
				</div>
                <pre class="prettyprint linenums">
例如：&lt;code&gt;&lt;section&gt;&lt;/code&gt; 应该被作为行级代码包装。
</pre>
                <h2 title="Basic block">基本块状内容</h2>
                <p title="Use &lt;pre&gt; for multiple lines of code. Be sure to escape any angle brackets in the code for proper rendering.">使用 <code>&lt;pre&gt;</code> 对多行代码进行包装。 切记一定要对代码中的每个&lt;&gt;进行转义，这样方能得到正常的渲染结果。
      </p>
                <div class="bs-docs-example">
                    <pre title="Sample text here...">&lt;p&gt;示范文本...&lt;/p&gt;</pre>
                </div>
                <pre class="prettyprint linenums" style="margin-bottom: 9px;">
&lt;pre&gt;
&amp;lt;p&amp;gt;示范文本...&amp;lt;/p&amp;gt;
&lt;/pre&gt;
</pre>
                <p title="Be sure to keep code within &lt;pre&gt; tags as close to the left as possible; it will render all tabs."><span class="label label-info">注意!</span> 尽可能地让 <code>&lt;pre&gt;</code> 左对齐；因为会渲染所有空格和tab（就是你键盘左边的那个tab键）。</p>
                <p title="You may optionally add the .pre-scrollable class which will set a max-height of 350px and provide a y-axis scrollbar.">还可以使用 <code>.pre-scrollable</code> 给代码区域设置350px的最大高度并设置一个纵向滚动条。</p>
            </section>
            
            <!-- Tables
    ================================================== -->
            <section id="tables">
                <div class="page-header">
                    <h1 title="Tables">表格</h1>
                </div>
                <h2>表格标签</h2>
                <table class="table table-bordered table-striped">
                <colgroup>
                    <col class="span1">
                    <col class="span7">
                </colgroup>
                <thead>
                    <tr>
                        <th>标签</th>
                        <th>描述</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>&lt;table&gt;</code></td>
                        <td>包含格式化成表格的数据</td>
                    </tr>
                    <tr>
                        <td><code>&lt;thead&gt;</code></td>
                        <td>包含表头行(<code>&lt;tr&gt;</code>)，标示列</td>
                    </tr>
                    <tr>
                        <td><code>&lt;tbody&gt;</code></td>
                        <td>包含表的内容行(<code>&lt;tr&gt;</code>)</td>
                    </tr>
                    <tr>
                        <td><code>&lt;tr&gt;</code></td>
                        <td>表格的列，包含一个个单元格 (<code>&lt;td&gt;</code> 或者 <code>&lt;th&gt;</code>)形成一行数据</td>
                    </tr>
                    <tr>
                        <td><code>&lt;td&gt;</code></td>
                        <td>表格的单元格</td>
                    </tr>
                    <tr>
                        <td><code>&lt;th&gt;</code></td>
                        <td>用于表头，标识列。必须用于 <code>&lt;thead&gt;</code> 中</td>
                    </tr>
                    <tr>
                        <td><code>&lt;caption&gt;</code></td>
                        <td>描述和总结表，对于屏幕阅读设备（screen readers） 特别有用</td>
				    </tr>
                </tbody>
                </table>
                <h2>表格类型</h2>
                <table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>名称</th>
						<th>样式</th>
						<th>描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>默认表格</td>
						<td class="muted">无</td>
						<td>没有任何其他样式，仅是行和列</td>
					</tr>
					<tr>
						<td>基本表格</td>
						<td><code>.table</code></td>
						<td>行间只有水平的线</td>
					</tr>
					<tr>
						<td>有边框的表格</td>
						<td><code>.table-bordered</code></td>
						<td>添加圆角和外边框</td>
					</tr>
					<tr>
						<td>有:hover的表格</td>
						<td><code>.table-hover</code></td>
						<td>添加悬停/滑过（hover）状态</td>
					</tr>
					<tr>
						<td>奇偶相间的表格</td>
						<td><code>.table-striped</code></td>
						<td>行间添加奇偶背景色 (1, 3, 5, etc)</td>
					</tr>
					<tr>
						<td>压缩的表格</td>
						<td><code>.table-condensed</code></td>
						<td>将<code>td</code> 和 <code>th</code>元素的纵向间距（padding）减半从 8px 到 4px</td>
					</tr>
				</tbody>
				</table>
                <h2 title="Default styles">默认表格样式</h2>
                <p title="For basic styling&mdash;light padding and only horizontal dividers&mdash;add the base class .table to any &lt;table&gt;.">仅使用一组横向边线对表格进行格式化，以保证可读性并维持表格结构不变。使用此默认效果 <code>.table</code> 样式是必须的。</p>
                <div class="bs-docs-example">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <pre class="prettyprint linenums">
&lt;table class="table"&gt;
…
&lt;/table&gt;
</pre>
                <hr class="bs-docs-separator">
                <h2>Optional classes</h2>
                <p>Add any of the following classes to the <code>.table</code> base class.</p>
                <h3><code>.table-striped</code> <small>奇偶相间的表格</small></h3>
                <p>Adds zebra-striping to any table row within the <code>&lt;tbody&gt;</code> via the <code>:nth-child</code> CSS selector (not available in IE7-IE8).</p>
                <p>为了实现更好的视觉效果可以在表行上添加奇偶线—仅仅添加 <code>.table-striped</code>样式。</p>
                <p class="muted"><strong>警告:</strong> 奇偶相间的背景使用 <code>:nth-child</code> CSS 选择器 ，在IE7-IE8不支持此特性。</p>
                <div class="bs-docs-example">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="table table-striped"&gt;
…
&lt;/table&gt;
</pre>
                <h3><code>.table-bordered</code> <small>有边框的表格</small></h3>
                <p>Add borders and rounded corners to the table.</p>
                <p>给整个表格添加边框，同时添加圆角美化表格的内容。</p>
                <div class="bs-docs-example">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2">1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@TwBootstrap</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <pre class="prettyprint linenums">
&lt;table class="table table-bordered"&gt;
…
&lt;/table&gt;
</pre>
                <h3><code>.table-hover</code> <small>hover变色的表格</small></h3>
                <p>Enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
                <div class="bs-docs-example">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="table table-hover"&gt;
…
&lt;/table&gt;
</pre>
                <h3><code>.table-condensed</code> <small>压缩的表格</small></h3>
                <p>Makes tables more compact by cutting cell padding in half.</p>
                <p>使你的表格更紧凑可以使用 <code>.table-condensed</code> 样式，减半单元格的边距（padding），从8px 到 4px。</p>
                <div class="bs-docs-example">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="table table-condensed"&gt;
…
&lt;/table&gt;
</pre>
                <h3>组合使用上面的样式</h3>
                <p>利用上面的样式，进行组合灵活的实现自己表格的样式。</p>
                <div class="bs-docs-example">
                    <table class="table table-striped table-bordered table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="table table-striped table-bordered table-hover table-condensed"&gt;
…
&lt;/table&gt;
</pre>
                <hr class="bs-docs-separator">
                <h2>Optional row classes <small>可选标识的表格</small></h2>
                <p>Use contextual classes to color table rows.</p>
                <table class="table table-bordered table-striped">
                    <colgroup>
                    <col class="span1">
                    <col class="span7">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Class</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
			                <td>
			                  <code>.success</code>
			                </td>
			                <td>Indicates a successful or positive action.</td>
			              </tr>
			              <tr>
			                <td>
			                  <code>.error</code>
			                </td>
			                <td>Indicates a dangerous or potentially negative action.</td>
			              </tr>
			              <tr>
			                <td>
			                  <code>.warning</code>
			                </td>
			                <td>Indicates a warning that might need attention.</td>
			              </tr>
			              <tr>
			                <td>
			                  <code>.info</code>
			                </td>
			                <td>Used as an alternative to the default styles.</td>
			              </tr>
                    </tbody>
                </table>
                <div class="bs-docs-example">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product</th>
                                <th>Payment Taken</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="success">
                                <td>1</td>
                                <td>TB - Monthly</td>
                                <td>01/04/2012</td>
                                <td>Approved</td>
                            </tr>
                            <tr class="error">
                                <td>2</td>
                                <td>TB - Monthly</td>
                                <td>02/04/2012</td>
                                <td>Declined</td>
                            </tr>
                            <tr class="warning">
			                  <td>3</td>
			                  <td>TB - Monthly</td>
			                  <td>03/04/2012</td>
			                  <td>Pending</td>
			                </tr>
			                <tr class="info">
			                  <td>4</td>
			                  <td>TB - Monthly</td>
			                  <td>04/04/2012</td>
			                  <td>Call in to confirm</td>
			                </tr>
                        </tbody>
                    </table>
                </div>
                <pre class="prettyprint linenums">
...
&lt;tr class="success"&gt;
&lt;td&gt;1&lt;/td&gt;
&lt;td&gt;TB - Monthly&lt;/td&gt;
&lt;td&gt;01/04/2012&lt;/td&gt;
&lt;td&gt;Approved&lt;/td&gt;
&lt;/tr&gt;
...
</pre>
                <hr class="bs-docs-separator">
                <h2>Supported table markup</h2>
                <p>List of supported table HTML elements and how they should be used.</p>
                <table class="table table-bordered table-striped">
                    <colgroup>
                    <col class="span1">
                    <col class="span7">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Tag</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>&lt;table&gt;</code></td>
                            <td> Wrapping element for displaying data in a tabular format </td>
                        </tr>
                        <tr>
                            <td><code>&lt;thead&gt;</code></td>
                            <td> Container element for table header rows (<code>&lt;tr&gt;</code>) to label table columns </td>
                        </tr>
                        <tr>
                            <td><code>&lt;tbody&gt;</code></td>
                            <td> Container element for table rows (<code>&lt;tr&gt;</code>) in the body of the table </td>
                        </tr>
                        <tr>
                            <td><code>&lt;tr&gt;</code></td>
                            <td> Container element for a set of table cells (<code>&lt;td&gt;</code> or <code>&lt;th&gt;</code>) that appears on a single row </td>
                        </tr>
                        <tr>
                            <td><code>&lt;td&gt;</code></td>
                            <td> Default table cell </td>
                        </tr>
                        <tr>
                            <td><code>&lt;th&gt;</code></td>
                            <td> Special table cell for column (or row, depending on scope and placement) labels<br>
                                Must be used within a <code>&lt;thead&gt;</code></td>
                        </tr>
                        <tr>
                            <td><code>&lt;caption&gt;</code></td>
                            <td> Description or summary of what the table holds, especially useful for screen readers </td>
                        </tr>
                    </tbody>
                </table>
                <pre class="prettyprint linenums">
&lt;table&gt;
&lt;caption&gt;...&lt;/caption&gt;
&lt;thead&gt;
&lt;tr&gt;
  &lt;th&gt;...&lt;/th&gt;
  &lt;th&gt;...&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
  &lt;td&gt;...&lt;/td&gt;
  &lt;td&gt;...&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
</pre>
            </section>
            
            <!-- Forms
    ================================================== -->
            <section id="forms">
                <div class="page-header">
                    <h1>Forms</h1>
                </div>
                <h2>灵活的HTML和CSS</h2>
                <p>DPL可以使你的表单元素和控件看上去非常好，没有任何多余的HTML，我们会提供你需要的多种模式。</p>
                <p>使用简洁和可扩展的样式实现了复杂的布局，是你可以方便的实现样式和绑定事件，你可以按照下面的内容一步步的去做。</p>
                <h2>四种表单布局</h2>
                <p>DPL 支持4种典型的表单布局:</p>
                <ul>
                    <li>垂直表单 (默认)</li>
                    <li>内联表单(Inline)</li>
                    <li>搜索</li>
                    <li>横向表单(Horizontal)</li>
                </ul>
                <p>不同布局类型的表单需要修改一些标签，但是控件的行为是一致的。</p>
                <h2>控件的状态和其他</h2>
                <p>DPL 中包含你所希望的所有表单控件的样式，同时包含一系列的自定义组件，例如在input前面或者后面附加内容；支持复选框列表。</p>
                <p>表单控件有各种状态：错误、警告和成功，除此之外还有当禁用控件时的不可用状态。</p>
                <h2>四种类型的表单</h2>
				<p>DPL提供了简单的标签和样式来实现常见的四种表单。</p>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>名称</th>
                            <th>样式</th>
                            <th>描述</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>垂直表单 (默认)</th>
                            <td><code>.form-vertical</code> <span class="muted">(可选)</span></td>
                            <td>Stacked, left-aligned labels over controls</td>
                        </tr>
                        <tr>
                            <th>内联表单</th>
                            <td><code>.form-inline</code></td>
                            <td>居左的label和内联的元素组成的简洁的表单</td>
                        </tr>
                        <tr>
                            <th>搜索表单</th>
                            <td><code>.form-search</code></td>
                            <td>精致的圆形边框搜索表单</td>
                        </tr>
                        <tr>
                            <th>水平表单</th>
                            <td><code>.form-horizontal</code></td>
                            <td>居左但内容右对齐的label和控件在一行</td>
                        </tr>
                    </tbody>
                </table>
                <h2>Default styles <small>基础表单</small></h2>
                <p>Individual form controls receive styling, but without any required base class on the <code>&lt;form&gt;</code> or large changes in markup. Results in stacked, left-aligned labels on top of form controls.</p>
                <p>仅使用表单元素，没有额外的标签</p>
                <form class="bs-docs-example">
					<fieldset>
	                    <legend>Legend</legend>
	                    <label>Label name</label>
	                    <input type="text" placeholder="Type something…">
	                    <span class="help-block">Example block-level help text here.</span>
	                    <label class="checkbox">
	                        <input type="checkbox"> Check me out 
						</label>
	                    <button type="submit" class="btn">Submit</button>
					</fieldset>
                </form>
                <pre class="prettyprint linenums">
&lt;form&gt;
  &lt;fieldset&gt;
    &lt;legend&gt;Legend&lt;/legend&gt;
    &lt;label&gt;Label name&lt;/label&gt;
    &lt;input type="text" placeholder="Type something…"&gt;
    &lt;span class="help-block"&gt;Example block-level help text here.&lt;/span&gt;
    &lt;label class="checkbox"&gt;
      &lt;input type="checkbox"&gt; Check me out
    &lt;/label&gt;
    &lt;button type="submit" class="btn"&gt;Submit&lt;/button&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;
</pre>
                <hr class="bs-docs-separator">
                <h2>Optional layouts</h2>
                <p>Included with Bootstrap are three optional form layouts for common use cases.</p>
                <h3>Search form</h3>
                <p>Add <code>.form-search</code> to the form and <code>.search-query</code> to the <code>&lt;input&gt;</code> for an extra-rounded text input.</p>
                <form class="bs-docs-example form-search">
                    <input type="text" class="input-medium search-query">
                    <button type="submit" class="btn">Search</button>
                </form>
                <pre class="prettyprint linenums">
&lt;form class="form-search"&gt;
&lt;input type="text" class="input-medium search-query"&gt;
&lt;button type="submit" class="btn"&gt;Search&lt;/button&gt;
&lt;/form&gt;
</pre>
                <h3>Inline form <small>内联表单</small></h3>
                <p>Add <code>.form-inline</code> for left-aligned labels and inline-block controls for a compact layout.</p>
                <p>对于 <code>.form-inline</code> 和 <code>.form-horizontal</code>样式, 我们使用”inline-block“方式.</p>
                <form class="bs-docs-example form-inline">
                    <input type="text" class="input-small" placeholder="Email">
                    <input type="password" class="input-small" placeholder="Password">
                    <label class="checkbox">
                        <input type="checkbox"> Remember me 
						</label>
                    <button type="submit" class="btn">Sign in</button>
                </form>
                <pre class="prettyprint linenums">
&lt;form class="form-inline"&gt;
  &lt;input type="text" class="input-small" placeholder="Email"&gt;
  &lt;input type="password" class="input-small" placeholder="Password"&gt;
  &lt;label class="checkbox"&gt;
    &lt;input type="checkbox"&gt; Remember me
  &lt;/label&gt;
  &lt;button type="submit" class="btn"&gt;Sign in&lt;/button&gt;
&lt;/form&gt;
</pre>
                <h3>Horizontal form</h3>
                <p>Right align labels and float them to the left to make them appear on the same line as controls. Requires the most markup changes from a default form:</p>
                <ul>
                    <li>Add <code>.form-horizontal</code> to the form</li>
                    <li>Wrap labels and controls in <code>.control-group</code></li>
                    <li>Add <code>.control-label</code> to the label</li>
                    <li>Wrap any associated controls in <code>.controls</code> for proper alignment</li>
                </ul>
                <form class="bs-docs-example form-horizontal">
                    <legend>Legend</legend>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                            <input type="text" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Password</label>
                        <div class="controls">
                            <input type="password" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <label class="checkbox">
                                <input type="checkbox"> Remember me 
							</label>
                            <button type="submit" class="btn">Sign in</button>
                        </div>
                    </div>
                </form>
                <pre class="prettyprint linenums">
&lt;form class="form-horizontal"&gt;
  &lt;div class="control-group"&gt;
    &lt;label class="control-label" for="inputEmail"&gt;Email&lt;/label&gt;
    &lt;div class="controls"&gt;
      &lt;input type="text" id="inputEmail" placeholder="Email"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="control-group"&gt;
    &lt;label class="control-label" for="inputPassword"&gt;Password&lt;/label&gt;
    &lt;div class="controls"&gt;
      &lt;input type="password" id="inputPassword" placeholder="Password"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="control-group"&gt;
    &lt;div class="controls"&gt;
      &lt;label class="checkbox"&gt;
        &lt;input type="checkbox"&gt; Remember me
      &lt;/label&gt;
      &lt;button type="submit" class="btn"&gt;Sign in&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
</pre>
                <hr class="bs-docs-separator">
                <h2>Supported form controls <small>支持的表单控件</small></h2>
                <p>Examples of standard form controls supported in an example form layout.</p>
                <h3>Inputs</h3>
                <p>Most common form control, text-based input fields. Includes support for all HTML5 types: text, password, datetime, datetime-local, date, month, time, week, number, email, url, search, tel, and color.</p>
                <p>支持的表单默认元素。包括支持所有的HTML5类型：文本，密码，日期时间，本地日期时间，日期，月份，时间，星期，号码，电子邮件，网址，搜索，电话，和颜色。</p>
                <p>Requires the use of a specified <code>type</code> at all times.</p>
                <form class="bs-docs-example form-inline">
                    <input type="text" placeholder="Text input">
                </form>
                <pre class="prettyprint linenums">
&lt;input type="text" placeholder="Text input"&gt;
</pre>

          <h3>Textarea</h3>
          <p>Form control which supports multiple lines of text. Change <code>rows</code> attribute as necessary.</p>
          <form class="bs-docs-example form-inline">
            <textarea rows="3"></textarea>
          </form>
<pre class="prettyprint linenums">
&lt;textarea rows="3"&gt;&lt;/textarea&gt;
</pre>
                <h3>Checkboxes and radios</h3>
                <p>Checkboxes are for selecting one or several options in a list while radios are for selecting one option from many.</p>
                <p>可以非常简单的使用 <code>&lt;label class="checkbox"&gt;</code> 包围着 <code>&lt;input type="checkbox"&gt;</code> 元素形成一个选项。</p>
                <h4>Default (stacked)</h4>
                <form class="bs-docs-example">
                    <label class="checkbox">
                        <input type="checkbox" value="">
                        Option one is this and that&mdash;be sure to include why it's great 
						</label>
                    <br>
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Option one is this and that&mdash;be sure to include why it's great 
						</label>
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Option two can be something else and selecting it will deselect option one 
						</label>
                    <p class="help-block"><strong>提示：</strong> Labels 包含的选项可以提供更大的点击区域，提升表单的可用性。</p>
                </form>
                <pre class="prettyprint linenums">
&lt;label class="checkbox"&gt;
&lt;input type="checkbox" value=""&gt;
Option one is this and that&mdash;be sure to include why it's great
&lt;/label&gt;

&lt;label class="radio"&gt;
&lt;input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked&gt;
Option one is this and that&mdash;be sure to include why it's great
&lt;/label&gt;
&lt;label class="radio"&gt;
&lt;input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"&gt;
Option two can be something else and selecting it will deselect option one
&lt;/label&gt;
</pre>
                <h4>Inline checkboxes <small>内联的复选框</small></h4>
                <p>Add the <code>.inline</code> class to a series of checkboxes or radios for controls appear on the same line.</p>
                <p>同时支持内联的复选框和单选框，仅仅附加 <code>.inline</code> 样式在应用了 <code>checkbox</code> 和 <code>radio</code> 的元素上。</p>
                <form class="bs-docs-example">
                    <label class="checkbox inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> 1 
					</label>
                    <label class="checkbox inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2"> 2 
					</label>
                    <label class="checkbox inline">
                        <input type="checkbox" id="inlineCheckbox3" value="option3"> 3 
					</label>
                </form>
                <pre class="prettyprint linenums">
&lt;label class="checkbox inline"&gt;
  &lt;input type="checkbox" id="inlineCheckbox1" value="option1"&gt; 1
&lt;/label&gt;
&lt;label class="checkbox inline"&gt;
  &lt;input type="checkbox" id="inlineCheckbox2" value="option2"&gt; 2
&lt;/label&gt;
&lt;label class="checkbox inline"&gt;
  &lt;input type="checkbox" id="inlineCheckbox3" value="option3"&gt; 3
&lt;/label&gt;
</pre>
                <h3>Selects</h3>
                <p>Use the default option or specify a <code>multiple="multiple"</code> to show multiple options at once.</p>
                <form class="bs-docs-example">
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <br>
                    <select multiple="multiple">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </form>
                <pre class="prettyprint linenums">
&lt;select&gt;
  &lt;option&gt;1&lt;/option&gt;
  &lt;option&gt;2&lt;/option&gt;
  &lt;option&gt;3&lt;/option&gt;
  &lt;option&gt;4&lt;/option&gt;
  &lt;option&gt;5&lt;/option&gt;
&lt;/select&gt;

&lt;select multiple="multiple"&gt;
  &lt;option&gt;1&lt;/option&gt;
  &lt;option&gt;2&lt;/option&gt;
  &lt;option&gt;3&lt;/option&gt;
  &lt;option&gt;4&lt;/option&gt;
  &lt;option&gt;5&lt;/option&gt;
&lt;/select&gt;
</pre>
                <hr class="bs-docs-separator">
                <h2>Extending form controls</h2>
                <p>Adding on top of existing browser controls, Bootstrap includes other useful form components.</p>
                <h3>Prepended and appended inputs <small>前置 & 后置输入框</small></h3>
                <p>Add text or buttons before or after any text-based input. Do note that <code>select</code> elements are not supported here.</p>
                <p>输入框组—包含前置后者后置文本—给输入框提供了上下文，更方便用户输入。一个很好的例子是在一个需要输入邮箱名的输入框中附加”@“。</p>
                <h4>Default options</h4>
                <p>Wrap an <code>.add-on</code> and an <code>input</code> with one of two classes to prepend or append text to an input.</p>
                <p>在内联表单上使用前置后置文本时，要将 <code>.add-on</code> 和 <code>input</code> 放在同一行上，不要有空格。</p>
                <form class="bs-docs-example">
                    <div class="input-prepend">
						<span class="add-on">@</span>
                        <input class="span2" id="prependedInput" size="16" type="text" placeholder="Username">
                    </div>
                    <br>
                    <div class="input-append">
                        <input class="span2" id="appendedInput" size="16" type="text">
                        <span class="add-on">.00</span> </div>
                </form>
                <pre class="prettyprint linenums">
&lt;div class="input-prepend"&gt;
  &lt;span class="add-on"&gt;@&lt;/span&gt;
  &lt;input class="span2" id="prependedInput" type="text" placeholder="Username"&gt;
&lt;/div&gt;
&lt;div class="input-append"&gt;
  &lt;input class="span2" id="appendedInput" type="text"&gt;
  &lt;span class="add-on"&gt;.00&lt;/span&gt;
&lt;/div&gt;
</pre>
                <h4>Combined</h4>
                <p>Use both classes and two instances of <code>.add-on</code> to prepend and append an input.</p>
                <form class="bs-docs-example form-inline">
                    <div class="input-prepend input-append">
						<span class="add-on">$</span>
                        <input class="span2" id="appendedPrependedInput" type="text">
                        <span class="add-on">.00</span>
					</div>
                </form>
                <pre class="prettyprint linenums">
&lt;div class="input-prepend input-append"&gt;
  &lt;span class="add-on"&gt;$&lt;/span&gt;
  &lt;input class="span2" id="appendedPrependedInput" type="text"&gt;
  &lt;span class="add-on"&gt;.00&lt;/span&gt;
&lt;/div&gt;
</pre>

          <h4>Buttons instead of text</h4>
          <p>Instead of a <code>&lt;span&gt;</code> with text, use a <code>.btn</code> to attach a button (or two) to an input.</p>
          <form class="bs-docs-example">
            <div class="input-append">
              <input class="span2" id="appendedInputButton" type="text">
              <button class="btn" type="button">Go!</button>
            </div>
          </form>
<pre class="prettyprint linenums">
&lt;div class="input-append"&gt;
  &lt;input class="span2" id="appendedInputButton" type="text"&gt;
  &lt;button class="btn" type="button"&gt;Go!&lt;/button&gt;
&lt;/div&gt;
</pre>
          <form class="bs-docs-example">
            <div class="input-append">
              <input class="span2" id="appendedInputButtons" type="text">
              <button class="btn" type="button">Search</button>
              <button class="btn" type="button">Options</button>
            </div>
          </form>
<pre class="prettyprint linenums">
&lt;div class="input-append"&gt;
  &lt;input class="span2" id="appendedInputButtons" type="text"&gt;
  &lt;button class="btn" type="button"&gt;Search&lt;/button&gt;
  &lt;button class="btn" type="button"&gt;Options&lt;/button&gt;
&lt;/div&gt;
</pre>

          <h4>Button dropdowns</h4>
          <p></p>
          <form class="bs-docs-example">
            <div class="input-append">
              <input class="span2" id="appendedDropdownButton" type="text">
              <div class="btn-group">
                <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
            </div><!-- /input-append -->
          </form>
<pre class="prettyprint linenums">
&lt;div class="input-append"&gt;
  &lt;input class="span2" id="appendedDropdownButton" type="text"&gt;
  &lt;div class="btn-group"&gt;
    &lt;button class="btn dropdown-toggle" data-toggle="dropdown"&gt;
      Action
      &lt;span class="caret"&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
      ...
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>

          <form class="bs-docs-example">
            <div class="input-prepend">
              <div class="btn-group">
                <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <input class="span2" id="prependedDropdownButton" type="text">
            </div><!-- /input-prepend -->
          </form>
<pre class="prettyprint linenums">
&lt;div class="input-prepend"&gt;
  &lt;div class="btn-group"&gt;
    &lt;button class="btn dropdown-toggle" data-toggle="dropdown"&gt;
      Action
      &lt;span class="caret"&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
      ...
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;input class="span2" id="prependedDropdownButton" type="text"&gt;
&lt;/div&gt;
</pre>

          <form class="bs-docs-example">
            <div class="input-prepend input-append">
              <div class="btn-group">
                <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <input class="span2" id="appendedPrependedDropdownButton" type="text">
              <div class="btn-group">
                <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
            </div><!-- /input-prepend input-append -->
          </form>
<pre class="prettyprint linenums">
&lt;div class="input-prepend input-append"&gt;
  &lt;div class="btn-group"&gt;
    &lt;button class="btn dropdown-toggle" data-toggle="dropdown"&gt;
      Action
      &lt;span class="caret"&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
      ...
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;input class="span2" id="appendedPrependedDropdownButton" type="text"&gt;
  &lt;div class="btn-group"&gt;
    &lt;button class="btn dropdown-toggle" data-toggle="dropdown"&gt;
      Action
      &lt;span class="caret"&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
      ...
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>

          <h4>Search form</h4>
          <form class="bs-docs-example form-search">
            <div class="input-append">
              <input type="text" class="span2 search-query">
              <button type="submit" class="btn">Search</button>
            </div>
            <div class="input-prepend">
              <button type="submit" class="btn">Search</button>
              <input type="text" class="span2 search-query">
            </div>
          </form>
<pre class="prettyprint linenums">
&lt;form class="form-search"&gt;
&lt;div class="input-append"&gt;
&lt;input type="text" class="span2 search-query"&gt;
&lt;button type="submit" class="btn"&gt;Search&lt;/button&gt;
&lt;/div&gt;
&lt;div class="input-prepend"&gt;
&lt;button type="submit" class="btn"&gt;Search&lt;/button&gt;
&lt;input type="text" class="span2 search-query"&gt;
&lt;/div&gt;
&lt;/form&gt;
</pre>

          <h3>Control sizing</h3>
          <p>Use relative sizing classes like <code>.input-large</code> or match your inputs to the grid column sizes using <code>.span*</code> classes.</p>

          <h4>Block level inputs</h4>
          <p>Make any <code>&lt;input&gt;</code> or <code>&lt;textarea&gt;</code> element behave like a block level element.</p>
          <form class="bs-docs-example" style="padding-bottom: 15px;">
            <div class="controls">
              <input class="input-block-level" type="text" placeholder=".input-block-level">
            </div>
          </form>
<pre class="prettyprint linenums">
&lt;input class="input-block-level" type="text" placeholder=".input-block-level"&gt;
</pre>

          <h4>Relative sizing</h4>
          <form class="bs-docs-example" style="padding-bottom: 15px;">
            <div class="controls docs-input-sizes">
              <input class="input-mini" type="text" placeholder=".input-mini">
              <input class="input-small" type="text" placeholder=".input-small">
              <input class="input-medium" type="text" placeholder=".input-medium">
              <input class="input-large" type="text" placeholder=".input-large">
              <input class="input-xlarge" type="text" placeholder=".input-xlarge">
              <input class="input-xxlarge" type="text" placeholder=".input-xxlarge">
            </div>
          </form>
<pre class="prettyprint linenums">
&lt;input class="input-mini" type="text" placeholder=".input-mini"&gt;
&lt;input class="input-small" type="text" placeholder=".input-small"&gt;
&lt;input class="input-medium" type="text" placeholder=".input-medium"&gt;
&lt;input class="input-large" type="text" placeholder=".input-large"&gt;
&lt;input class="input-xlarge" type="text" placeholder=".input-xlarge"&gt;
&lt;input class="input-xxlarge" type="text" placeholder=".input-xxlarge"&gt;
</pre>
          <p>
            <span class="label label-info">Heads up!</span> In future versions, we'll be altering the use of these relative input classes to match our button sizes. For example, <code>.input-large</code> will increase the padding and font-size of an input.
          </p>

          <h4>Grid sizing</h4>
          <p>Use <code>.span1</code> to <code>.span12</code> for inputs that match the same sizes of the grid columns.</p>
		  <p>使用栅格系统的 <code>.span*</code> 样式来设定表单元素的大小。</p>
          <form class="bs-docs-example" style="padding-bottom: 15px;">
            <div class="controls docs-input-sizes">
              <input class="span1" type="text" placeholder=".span1">
              <input class="span2" type="text" placeholder=".span2">
              <input class="span3" type="text" placeholder=".span3">
              <select class="span1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <select class="span2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <select class="span3">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </form>
<pre class="prettyprint linenums">
&lt;input class="span1" type="text" placeholder=".span1"&gt;
&lt;input class="span2" type="text" placeholder=".span2"&gt;
&lt;input class="span3" type="text" placeholder=".span3"&gt;
&lt;select class="span1"&gt;
...
&lt;/select&gt;
&lt;select class="span2"&gt;
...
&lt;/select&gt;
&lt;select class="span3"&gt;
...
&lt;/select&gt;
</pre>
                <p>For multiple grid inputs per line, <strong>use the <code>.controls-row</code> modifier class for proper spacing</strong>. It floats the inputs to collapse white-space, sets the proper margins, and the clears the float.</p>
                <form class="bs-docs-example" style="padding-bottom: 15px;">
                    <div class="controls">
                        <input class="span5" type="text" placeholder=".span5">
                    </div>
                    <div class="controls controls-row">
                        <input class="span4" type="text" placeholder=".span4">
                        <input class="span1" type="text" placeholder=".span1">
                    </div>
                    <div class="controls controls-row">
                        <input class="span3" type="text" placeholder=".span3">
                        <input class="span2" type="text" placeholder=".span2">
                    </div>
                    <div class="controls controls-row">
                        <input class="span2" type="text" placeholder=".span2">
                        <input class="span3" type="text" placeholder=".span3">
                    </div>
                    <div class="controls controls-row">
                        <input class="span1" type="text" placeholder=".span1">
                        <input class="span4" type="text" placeholder=".span4">
                    </div>
                </form>
                <pre class="prettyprint linenums">
&lt;div class="controls"&gt;
  &lt;input class="span5" type="text" placeholder=".span5"&gt;
&lt;/div&gt;
&lt;div class="controls controls-row"&gt;
  &lt;input class="span4" type="text" placeholder=".span4"&gt;
  &lt;input class="span1" type="text" placeholder=".span1"&gt;
&lt;/div&gt;
...
</pre>

          <h3>Uneditable inputs</h3>
          <p>Present data in a form that's not editable without using actual form markup.</p>
          <form class="bs-docs-example">
            <span class="input-xlarge uneditable-input">Some value here</span>
          </form>
<pre class="prettyprint linenums">
&lt;span class="input-xlarge uneditable-input"&gt;Some value here&lt;/span&gt;
</pre>

          <h3>Form actions</h3>
          <p>End a form with a group of actions (buttons). When placed within a <code>.form-horizontal</code>, the buttons will automatically indent to line up with the form controls.</p>
          <form class="bs-docs-example">
            <div class="form-actions">
              <button type="submit" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn">Cancel</button>
            </div>
          </form>
<pre class="prettyprint linenums">
&lt;div class="form-actions"&gt;
&lt;button type="submit" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
&lt;button type="button" class="btn"&gt;Cancel&lt;/button&gt;
&lt;/div&gt;
</pre>

                <h3>Help text <small>帮助文本</small></h3>
                <p>Inline and block level support for help text that appears around form controls.</p>
                <p>可以为表单元素添加帮助文本,在表单元素后面使用 <code>&lt;span class="help-inline"&gt;</code> 或者 <code>&lt;p class="help-block"&gt;</code> 包含帮助信息</p>
                <h4>Inline help</h4>
                <form class="bs-docs-example form-inline">
                    <input type="text"> <span class="help-inline">Inline help text</span>
                </form>
                <pre class="prettyprint linenums">
&lt;input type="text"&gt;&lt;span class="help-inline"&gt;Inline help text&lt;/span&gt;
</pre>
                <h4>Block help</h4>
                <form class="bs-docs-example form-inline">
                    <input type="text">
                    <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                </form>
                <pre class="prettyprint linenums">
&lt;input type="text"&gt;&lt;span class="help-block"&gt;A longer block of help text that breaks onto a new line and may extend beyond one line.&lt;/span&gt;
</pre>
                <hr class="bs-docs-separator">
                <h2>Form control states</h2>
                <p>Provide feedback to users or visitors with basic feedback states on form controls and labels.</p>
                <h3>Input focus</h3>
                <p>We remove the default <code>outline</code> styles on some form controls and apply a <code>box-shadow</code> in its place for <code>:focus</code>.</p>
                <form class="bs-docs-example form-inline">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="This is focused...">
                </form>
                <pre class="prettyprint linenums">
&lt;input class="input-xlarge" id="focusedInput" type="text" value="This is focused..."&gt;
</pre>
                <h3>Disabled inputs</h3>
                <p>Add the <code>disabled</code> attribute on an input to prevent user input and trigger a slightly different look.</p>
                <form class="bs-docs-example form-inline">
                    <input class="input-xlarge" id="disabledInput" type="text" placeholder="Disabled input here…" disabled>
                </form>
                <pre class="prettyprint linenums">
&lt;input class="input-xlarge" id="disabledInput" type="text" placeholder="Disabled input here..." disabled&gt;
</pre>
                <h3>Validation states <small>验证状态</small></h3>
                <p>Bootstrap includes validation styles for error, warning, info, and success messages. To use, add the appropriate class to the surrounding <code>.control-group</code>.</p>
                <p>DPL同时包含各种验证状态样式：错误、警告、信息和成功。可以在 <code>.control-group</code> 元素上应用这些样式。</p>
                <form class="bs-docs-example form-horizontal">
	            <div class="control-group warning">
	              <label class="control-label" for="inputWarning">Input with warning</label>
	              <div class="controls">
	                <input type="text" id="inputWarning">
	                <span class="help-inline">Something may have gone wrong</span>
	              </div>
	            </div>
	            <div class="control-group error">
	              <label class="control-label" for="inputError">Input with error</label>
	              <div class="controls">
	                <input type="text" id="inputError">
	                <span class="help-inline">Please correct the error</span>
	              </div>
	            </div>
	            <div class="control-group info">
	              <label class="control-label" for="inputInfo">Input with info</label>
	              <div class="controls">
	                <input type="text" id="inputInfo">
	                <span class="help-inline">Username is taken</span>
	              </div>
	            </div>
	            <div class="control-group success">
	              <label class="control-label" for="inputSuccess">Input with success</label>
	              <div class="controls">
	                <input type="text" id="inputSuccess">
	                <span class="help-inline">Woohoo!</span>
	              </div>
	            </div>
	          </form>
                <pre class="prettyprint linenums">
&lt;div class="control-group warning"&gt;
  &lt;label class="control-label" for="inputWarning"&gt;Input with warning&lt;/label&gt;
  &lt;div class="controls"&gt;
    &lt;input type="text" id="inputWarning"&gt;
    &lt;span class="help-inline"&gt;Something may have gone wrong&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="control-group error"&gt;
  &lt;label class="control-label" for="inputError"&gt;Input with error&lt;/label&gt;
  &lt;div class="controls"&gt;
    &lt;input type="text" id="inputError"&gt;
    &lt;span class="help-inline"&gt;Please correct the error&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="control-group success"&gt;
  &lt;label class="control-label" for="inputSuccess"&gt;Input with success&lt;/label&gt;
  &lt;div class="controls"&gt;
    &lt;input type="text" id="inputSuccess"&gt;
    &lt;span class="help-inline"&gt;Woohoo!&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
            </section>
            
<!-- Buttons
================================================== -->
            <section id="buttons">
                <div class="page-header">
                    <h1 title="Buttons">按钮</h1>
                </div>
                <h2 title="Default buttons">默认按钮</h2>
                <p title="Button styles can be applied to anything with the .btn class applied. However, typically you'll want to apply these to only &lt;a&gt; and &lt;button&gt; elements for the best rendering.">按钮的样式可以使用任何标签并添加样式 <code>.btn</code> 。但是一般而言你应该仅使用 <code>&lt;a&gt;</code> 和 <code>&lt;button&gt;</code> 元素。但是当使用menuButton时，请使用<code>&lt;div&gt;</code>。</p>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Button</th>
                            <th>class=""</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><button type="button" class="btn">Default</button></td>
                            <td><code>btn</code></td>
                            <td title="Standard gray button with gradient">默认的灰色按钮，并带有渐变色</td>
                        </tr>
                        <tr>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                            <td><code>btn btn-primary</code></td>
                            <td title="Provides extra visual weight and identifies the primary action in a set of buttons">视觉吸引力强，用于标识一组按钮中最主要的那个动作</td>
                        </tr>
                        <tr>
                            <td><button type="button" class="btn btn-info">Info</button></td>
                            <td><code>btn btn-info</code></td>
                            <td title="Used as an alternative to the default styles">可用于替换默认样式</td>
                        </tr>
                        <tr>
                            <td><button type="button" class="btn btn-success">Success</button></td>
                            <td><code>btn btn-success</code></td>
                            <td title="Indicates a successful or positive action">表示操作成功或动作正确</td>
                        </tr>
                        <tr>
                            <td><button type="button" class="btn btn-warning">Warning</button></td>
                            <td><code>btn btn-warning</code></td>
                            <td title="Indicates caution should be taken with this action">表示该动作应谨慎</td>
                        </tr>
                        <tr>
                            <td><button type="button" class="btn btn-danger">Danger</button></td>
                            <td><code>btn btn-danger</code></td>
                            <td title="Indicates a dangerous or potentially negative action">表示危险或有潜在威胁的动作</td>
                        </tr>
                        <tr>
                            <td><button type="button" class="btn btn-inverse">Inverse</button></td>
                            <td><code>btn btn-inverse</code></td>
                            <td title="Alternate dark gray button, not tied to a semantic action or use">备用的暗灰色按钮，表示跟语义无关的操作</td>
                        </tr>
                        <tr>
                            <td><button type="button" class="btn btn-link">Link</button></td>
                            <td><code>btn btn-link</code></td>
                            <td title="Deemphasize a button by making it look like a link while maintaining button behavior">淡化使它看起来像一个链接，同时保持有按钮的行为</td>
                        </tr>
                    </tbody>
                </table>
                <p>一般而言，按钮仅当链接作为一个行为对象时来使用时。例如“下载”应当为一个按钮，“最近活动”应该是一个链接。</p>
                <h4 title="Cross browser compatibility">扩浏览器兼容</h4>
                <p title="IE9 doesn't crop background gradients on rounded corners, so we remove it. Related, IE9 jankifies disabled button elements, rendering text gray with a nasty text-shadow that we cannot fix.">IE9不支持渐变背景色的圆角裁剪，我们只好去掉了这个特性。此外，IE9 还搞砸了 <code>button</code> 元素的禁用样式，居然在渲染时使用一个丑陋的文本阴影修饰按钮的灰色文字，对此我们实在无能为力。</p>
                <h2 title="Button sizes">按钮大小</h2>
                <p title="Fancy larger or smaller buttons? Add .btn-large, .btn-small or .btn-mini for additional sizes.">你喜欢大的还是小的按钮？添加样式 <code>.btn-large</code>, <code>.btn-small</code> 或者 <code>.btn-mini</code> 实现不同的样式。</p>
                <div class="bs-docs-example">
                    <p>
                        <button type="button" class="btn btn-large btn-primary">大号按钮</button>
                        <button type="button" class="btn btn-large">大号按钮</button>
                    </p>
                    <p>
                        <button type="button" class="btn btn-primary">默认按钮</button>
                        <button type="button" class="btn">默认按钮</button>
                    </p>
                    <p>
                        <button type="button" class="btn btn-small btn-primary">小号按钮</button>
                        <button type="button" class="btn btn-small">小号按钮</button>
                    </p>
                    <p>
                        <button type="button" class="btn btn-mini btn-primary">迷你按钮</button>
                        <button type="button" class="btn btn-mini">迷你按钮</button>
                    </p>
                </div>
                <pre class="prettyprint linenums">
&lt;p&gt;
&lt;button class="btn btn-large btn-primary" type="button"&gt;大号按钮&lt;/button&gt;
&lt;button class="btn btn-large" type="button"&gt;大号按钮&lt;/button&gt;
&lt;/p&gt;
&lt;p&gt;
&lt;button class="btn btn-primary" type="button"&gt;默认按钮&lt;/button&gt;
&lt;button class="btn" type="button"&gt;默认按钮&lt;/button&gt;
&lt;/p&gt;
&lt;p&gt;
&lt;button class="btn btn-small btn-primary" type="button"&gt;小号按钮&lt;/button&gt;
&lt;button class="btn btn-small" type="button"&gt;小号按钮&lt;/button&gt;
&lt;/p&gt;
&lt;p&gt;
&lt;button class="btn btn-mini btn-primary" type="button"&gt;迷你按钮&lt;/button&gt;
&lt;button class="btn btn-mini" type="button"&gt;迷你按钮&lt;/button&gt;
&lt;/p&gt;
</pre>
                <p title="Create block level buttons&mdash;those that span the full width of a parent&mdash; by adding .btn-block.">通过添加 <code>.btn-block</code> 样式，创建块级按钮且等于父级宽度。</p>
                <div class="bs-docs-example">
                    <div class="well" style="max-width: 400px; margin: 0 auto 10px;">
                        <button type="button" class="btn btn-large btn-block btn-primary">块级按钮</button>
                        <button type="button" class="btn btn-large btn-block">块级按钮</button>
                    </div>
                </div>
                <pre class="prettyprint linenums">
&lt;button class="btn btn-large btn-block btn-primary" type="button"&gt;Block level button&lt;/button&gt;
&lt;button class="btn btn-large btn-block" type="button"&gt;Block level button&lt;/button&gt;
</pre>
                <h2 title="Disabled state">禁用状态</h2>
                <p title="Make buttons look unclickable by fading them back 50%.">禁用状态使按钮色彩减淡50%，并设置无法点击。</p>
                <h3 title="Anchor element"></h3>
                <p title="Add the .disabled class to &lt;a&gt; buttons or add the disabled attribute to &lt;button&gt; buttons.">对超链接按钮添加 <code>.disabled</code> 类，或是在 <code>&lt;button&gt;</code> 元素中设置 <code>disabled</code> 属性，即可将其变成禁用状态。</p>
                <div class="bs-docs-example"> 
					<p><a href="#" class="btn btn-large btn-primary disabled">Primary link</a> 
					<a href="#" class="btn btn-large disabled">Link</a></p>
					<p><button type="button" class="btn btn-large btn-primary disabled" disabled="disabled">Primary button</button>
                    <button type="button" class="btn btn-large" disabled>Button</button></p>
				</div>
                <pre class="prettyprint linenums">
&lt;p&gt;
&lt;a href="#" class="btn btn-large btn-primary disabled"&gt;Primary link&lt;/a&gt;
&lt;a href="#" class="btn btn-large disabled"&gt;Link&lt;/a&gt;
&lt;/p&gt;
&lt;p&gt;
&lt;button type="button" class="btn btn-large btn-primary disabled" disabled="disabled"&gt;Primary button&lt;/button&gt;
&lt;button type="button" class="btn btn-large" disabled&gt;Button&lt;/button&gt;
&lt;/p&gt;
</pre>
                <p title="We use .disabled as a utility class here, similar to the common .active class, so no prefix is required."><span class="label label-info">注意！</span> 我们把 <code>.disabled</code> 作为工具类来用，就像用 <code>.active</code> 一样，因而无须添加.btn前缀。</p>
                
                <h2 title="One class, multiple tags">按钮类可用于多种标签</h2>
                <p title="Use the .btn class on an &lt;a&gt;, &lt;button&gt;, or &lt;input&gt; element.">可以在<code>&lt;a&gt;</code>、<code>&lt;button&gt;</code>、<code>&lt;input&gt;</code> 等元素上使用 <code>.btn</code> 类。</p>
                <form class="bs-docs-example">
                    <a class="btn" href="">Link</a>
                    <button class="btn" type="submit">Button</button>
                    <input class="btn" type="button" value="Input">
                    <input class="btn" type="submit" value="Submit">
                </form>
                <pre class="prettyprint linenums">
&lt;a class="btn" href=""&gt;Link&lt;/a&gt;
&lt;button class="btn" type="submit"&gt;Button&lt;/button&gt;
&lt;input class="btn" type="button" value="Input"&gt;
&lt;input class="btn" type="submit" value="Submit"&gt;
</pre>
                <p title='As a best practice, try to match the element for your context to ensure matching cross-browser rendering. If you have an input, use an &lt;input type="submit"&gt; for your button.'>作为一个最佳实践，假如你使用 <code>input</code> , 那么就用 <code>&lt;input type="submit"&gt;</code> 实现你的按钮来兼容跨浏览器的渲染。</p>
            </section>
            
<!-- Images
================================================== -->
            <section id="images">
                <div class="page-header">
                    <h1>图片</h1>
                </div>
                <p title="Add classes to an &lt;img&gt; element to easily style images in any project.">一个 <code>&lt;img&gt;</code> 元素的图像可以轻松地在任何项目中添加图片样式。</p>
                <div class="bs-docs-example bs-docs-example-images"> 
					<img data-src="holder.js/140x140" class="img-rounded">
					<img data-src="holder.js/140x140" class="img-circle">
					<img data-src="holder.js/140x140" class="img-polaroid">
				</div>
<pre class="prettyprint linenums">
&lt;img data-src="holder.js/140x140" class="img-rounded"&gt;
&lt;img data-src="holder.js/140x140" class="img-circle"&gt;
&lt;img data-src="holder.js/140x140" class="img-polaroid"&gt;
</pre>
                <p title=".img-rounded and .img-circle do not work in IE7-8 due to lack of border-radius support."><span class="label label-info">注意!</span> 因为IE7-8缺乏对 <code>border-radius</code>的支持，将导致 <code>.img-rounded</code> 和 <code>.img-circle</code> 样式失效。</p>
            </section>
            
            <!-- Icons
    ================================================== -->
            <section id="icons">
                <div class="page-header">
                    <h1>Icons <small>by <a href="http://glyphicons.com" target="_blank">Glyphicons</a></small></h1>
                </div>
				
                <h2>Icon glyphs</h2>
                <p>140 icons in sprite form, available in dark gray (default) and white, provided by <a href="http://glyphicons.com" target="_blank">Glyphicons</a>.</p>
                <ul class="the-icons clearfix">
                    <li><i class="icon-glass"></i> icon-glass</li>
                    <li><i class="icon-music"></i> icon-music</li>
                    <li><i class="icon-search"></i> icon-search</li>
                    <li><i class="icon-envelope"></i> icon-envelope</li>
                    <li><i class="icon-heart"></i> icon-heart</li>
                    <li><i class="icon-star"></i> icon-star</li>
                    <li><i class="icon-star-empty"></i> icon-star-empty</li>
                    <li><i class="icon-user"></i> icon-user</li>
                    <li><i class="icon-film"></i> icon-film</li>
                    <li><i class="icon-th-large"></i> icon-th-large</li>
                    <li><i class="icon-th"></i> icon-th</li>
                    <li><i class="icon-th-list"></i> icon-th-list</li>
                    <li><i class="icon-ok"></i> icon-ok</li>
                    <li><i class="icon-remove"></i> icon-remove</li>
                    <li><i class="icon-zoom-in"></i> icon-zoom-in</li>
                    <li><i class="icon-zoom-out"></i> icon-zoom-out</li>
                    <li><i class="icon-off"></i> icon-off</li>
                    <li><i class="icon-signal"></i> icon-signal</li>
                    <li><i class="icon-cog"></i> icon-cog</li>
                    <li><i class="icon-trash"></i> icon-trash</li>
                    <li><i class="icon-home"></i> icon-home</li>
                    <li><i class="icon-file"></i> icon-file</li>
                    <li><i class="icon-time"></i> icon-time</li>
                    <li><i class="icon-road"></i> icon-road</li>
                    <li><i class="icon-download-alt"></i> icon-download-alt</li>
                    <li><i class="icon-download"></i> icon-download</li>
                    <li><i class="icon-upload"></i> icon-upload</li>
                    <li><i class="icon-inbox"></i> icon-inbox</li>
					
                    <li><i class="icon-play-circle"></i> icon-play-circle</li>
                    <li><i class="icon-repeat"></i> icon-repeat</li>
                    <li><i class="icon-refresh"></i> icon-refresh</li>
                    <li><i class="icon-list-alt"></i> icon-list-alt</li>
                    <li><i class="icon-lock"></i> icon-lock</li>
                    <li><i class="icon-flag"></i> icon-flag</li>
                    <li><i class="icon-headphones"></i> icon-headphones</li>
                    <li><i class="icon-volume-off"></i> icon-volume-off</li>
                    <li><i class="icon-volume-down"></i> icon-volume-down</li>
                    <li><i class="icon-volume-up"></i> icon-volume-up</li>
                    <li><i class="icon-qrcode"></i> icon-qrcode</li>
                    <li><i class="icon-barcode"></i> icon-barcode</li>
                    <li><i class="icon-tag"></i> icon-tag</li>
                    <li><i class="icon-tags"></i> icon-tags</li>
                    <li><i class="icon-book"></i> icon-book</li>
                    <li><i class="icon-bookmark"></i> icon-bookmark</li>
                    <li><i class="icon-print"></i> icon-print</li>
                    <li><i class="icon-camera"></i> icon-camera</li>
                    <li><i class="icon-font"></i> icon-font</li>
                    <li><i class="icon-bold"></i> icon-bold</li>
                    <li><i class="icon-italic"></i> icon-italic</li>
                    <li><i class="icon-text-height"></i> icon-text-height</li>
                    <li><i class="icon-text-width"></i> icon-text-width</li>
                    <li><i class="icon-align-left"></i> icon-align-left</li>
                    <li><i class="icon-align-center"></i> icon-align-center</li>
                    <li><i class="icon-align-right"></i> icon-align-right</li>
                    <li><i class="icon-align-justify"></i> icon-align-justify</li>
                    <li><i class="icon-list"></i> icon-list</li>
					
                    <li><i class="icon-indent-left"></i> icon-indent-left</li>
                    <li><i class="icon-indent-right"></i> icon-indent-right</li>
                    <li><i class="icon-facetime-video"></i> icon-facetime-video</li>
                    <li><i class="icon-picture"></i> icon-picture</li>
                    <li><i class="icon-pencil"></i> icon-pencil</li>
                    <li><i class="icon-map-marker"></i> icon-map-marker</li>
                    <li><i class="icon-adjust"></i> icon-adjust</li>
                    <li><i class="icon-tint"></i> icon-tint</li>
                    <li><i class="icon-edit"></i> icon-edit</li>
                    <li><i class="icon-share"></i> icon-share</li>
                    <li><i class="icon-check"></i> icon-check</li>
                    <li><i class="icon-move"></i> icon-move</li>
                    <li><i class="icon-step-backward"></i> icon-step-backward</li>
                    <li><i class="icon-fast-backward"></i> icon-fast-backward</li>
                    <li><i class="icon-backward"></i> icon-backward</li>
                    <li><i class="icon-play"></i> icon-play</li>
                    <li><i class="icon-pause"></i> icon-pause</li>
                    <li><i class="icon-stop"></i> icon-stop</li>
                    <li><i class="icon-forward"></i> icon-forward</li>
                    <li><i class="icon-fast-forward"></i> icon-fast-forward</li>
                    <li><i class="icon-step-forward"></i> icon-step-forward</li>
                    <li><i class="icon-eject"></i> icon-eject</li>
                    <li><i class="icon-chevron-left"></i> icon-chevron-left</li>
                    <li><i class="icon-chevron-right"></i> icon-chevron-right</li>
                    <li><i class="icon-plus-sign"></i> icon-plus-sign</li>
                    <li><i class="icon-minus-sign"></i> icon-minus-sign</li>
                    <li><i class="icon-remove-sign"></i> icon-remove-sign</li>
                    <li><i class="icon-ok-sign"></i> icon-ok-sign</li>
					
                    <li><i class="icon-question-sign"></i> icon-question-sign</li>
                    <li><i class="icon-info-sign"></i> icon-info-sign</li>
                    <li><i class="icon-screenshot"></i> icon-screenshot</li>
                    <li><i class="icon-remove-circle"></i> icon-remove-circle</li>
                    <li><i class="icon-ok-circle"></i> icon-ok-circle</li>
                    <li><i class="icon-ban-circle"></i> icon-ban-circle</li>
                    <li><i class="icon-arrow-left"></i> icon-arrow-left</li>
                    <li><i class="icon-arrow-right"></i> icon-arrow-right</li>
                    <li><i class="icon-arrow-up"></i> icon-arrow-up</li>
                    <li><i class="icon-arrow-down"></i> icon-arrow-down</li>
                    <li><i class="icon-share-alt"></i> icon-share-alt</li>
                    <li><i class="icon-resize-full"></i> icon-resize-full</li>
                    <li><i class="icon-resize-small"></i> icon-resize-small</li>
                    <li><i class="icon-plus"></i> icon-plus</li>
                    <li><i class="icon-minus"></i> icon-minus</li>
                    <li><i class="icon-asterisk"></i> icon-asterisk</li>
                    <li><i class="icon-exclamation-sign"></i> icon-exclamation-sign</li>
                    <li><i class="icon-gift"></i> icon-gift</li>
                    <li><i class="icon-leaf"></i> icon-leaf</li>
                    <li><i class="icon-fire"></i> icon-fire</li>
                    <li><i class="icon-eye-open"></i> icon-eye-open</li>
                    <li><i class="icon-eye-close"></i> icon-eye-close</li>
                    <li><i class="icon-warning-sign"></i> icon-warning-sign</li>
                    <li><i class="icon-plane"></i> icon-plane</li>
                    <li><i class="icon-calendar"></i> icon-calendar</li>
                    <li><i class="icon-random"></i> icon-random</li>
                    <li><i class="icon-comment"></i> icon-comment</li>
                    <li><i class="icon-magnet"></i> icon-magnet</li>
					
                    <li><i class="icon-chevron-up"></i> icon-chevron-up</li>
                    <li><i class="icon-chevron-down"></i> icon-chevron-down</li>
                    <li><i class="icon-retweet"></i> icon-retweet</li>
                    <li><i class="icon-shopping-cart"></i> icon-shopping-cart</li>
                    <li><i class="icon-folder-close"></i> icon-folder-close</li>
                    <li><i class="icon-folder-open"></i> icon-folder-open</li>
                    <li><i class="icon-resize-vertical"></i> icon-resize-vertical</li>
                    <li><i class="icon-resize-horizontal"></i> icon-resize-horizontal</li>
                    <li><i class="icon-hdd"></i> icon-hdd</li>
                    <li><i class="icon-bullhorn"></i> icon-bullhorn</li>
                    <li><i class="icon-bell"></i> icon-bell</li>
                    <li><i class="icon-certificate"></i> icon-certificate</li>
                    <li><i class="icon-thumbs-up"></i> icon-thumbs-up</li>
                    <li><i class="icon-thumbs-down"></i> icon-thumbs-down</li>
                    <li><i class="icon-hand-right"></i> icon-hand-right</li>
                    <li><i class="icon-hand-left"></i> icon-hand-left</li>
                    <li><i class="icon-hand-up"></i> icon-hand-up</li>
                    <li><i class="icon-hand-down"></i> icon-hand-down</li>
                    <li><i class="icon-circle-arrow-right"></i> icon-circle-arrow-right</li>
                    <li><i class="icon-circle-arrow-left"></i> icon-circle-arrow-left</li>
                    <li><i class="icon-circle-arrow-up"></i> icon-circle-arrow-up</li>
                    <li><i class="icon-circle-arrow-down"></i> icon-circle-arrow-down</li>
                    <li><i class="icon-globe"></i> icon-globe</li>
                    <li><i class="icon-wrench"></i> icon-wrench</li>
                    <li><i class="icon-tasks"></i> icon-tasks</li>
                    <li><i class="icon-filter"></i> icon-filter</li>
                    <li><i class="icon-briefcase"></i> icon-briefcase</li>
                    <li><i class="icon-fullscreen"></i> icon-fullscreen</li>
                </ul>
				
                <h3>Glyphicons attribution</h3>
                <p><a href="http://glyphicons.com/">Glyphicons</a> Halflings are normally not available for free, but an arrangement between Bootstrap and the Glyphicons creators have made this possible at not cost to you as developers. As a thank you, we ask you to include an optional link back to <a href="http://glyphicons.com/">Glyphicons</a> whenever practical.</p>


                <hr class="bs-docs-separator">


                <h2>How to use</h2>
                <p>All icons require an <code>&lt;i&gt;</code> tag with a unique class, prefixed with <code>icon-</code>. To use, place the following code just about anywhere:</p>
                <pre class="prettyprint linenums">
&lt;i class="icon-search"&gt;&lt;/i&gt;
</pre>
                <p>There are also styles available for inverted (white) icons, made ready with one extra class. We will specifically enforce this class on hover and active states for nav and dropdown links.</p>
                <pre class="prettyprint linenums">
&lt;i class="icon-search icon-white"&gt;&lt;/i&gt;
</pre>
                <p> 
					<span class="label label-info">Heads up!</span> 
					When using beside strings of text, as in buttons or nav links, be sure to leave a space after the <code>&lt;i&gt;</code> tag for proper spacing. 
				</p>
				
				
                <hr class="bs-docs-separator">
				
				
                <h2>Icon examples</h2>
                <p>Use them in buttons, button groups for a toolbar, navigation, or prepended form inputs.</p>
				
                <h4>Buttons</h4>
				
                <h5>Button group in a button toolbar</h5>
                <div class="bs-docs-example">
		            <div class="btn-toolbar">
		              <div class="btn-group">
		                <a class="btn" href="#"><i class="icon-align-left"></i></a>
		                <a class="btn" href="#"><i class="icon-align-center"></i></a>
		                <a class="btn" href="#"><i class="icon-align-right"></i></a>
		                <a class="btn" href="#"><i class="icon-align-justify"></i></a>
		              </div>
		            </div>
		          </div>
                <pre class="prettyprint linenums">
&lt;div class="btn-toolbar"&gt;
&lt;div class="btn-group"&gt;

&lt;a class="btn" href="#"&gt;&lt;i class="icon-align-left"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="btn" href="#"&gt;&lt;i class="icon-align-center"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="btn" href="#"&gt;&lt;i class="icon-align-right"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="btn" href="#"&gt;&lt;i class="icon-align-justify"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                <h5>Dropdown in a button group</h5>
                <div class="bs-docs-example">
                    <div class="btn-group btn-toolbar"> 
						<a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> 用户</a> 
						<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#" title="User"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" title="Edit"><i class="icon-pencil"></i> 修改</a></li>
                            <li><a href="#" title="Delete"><i class="icon-trash"></i> 删除</a></li>
                            <li><a href="#" title="Ban"><i class="icon-ban-circle"></i> 禁止</a></li>
                            <li class="divider"></li>
                            <li><a href="#" title="Make admin"><i class="i"></i> 设为管理员</a></li>
                        </ul>
                    </div>
					<p>
						<a class="btn" href="#" title="Refresh"><i class="icon-refresh"></i> 刷新</a>
						<a class="btn btn-success" href="#" title="Checkout"><i class="icon-shopping-cart icon-white"></i> 签出</a>
						<a class="btn btn-danger" href="#" title="Delete"><i class="icon-trash icon-white"></i> 删除</a>
					</p>
					<p>
						<a class="btn btn-large" href="#" title="Comment"><i class="icon-comment"></i> 点评</a>
						<a class="btn btn-small" href="#" title="Settings"><i class="icon-cog"></i> 设置</a>
						<a class="btn btn-small btn-info" href="#" title="More Info"><i class="icon-info-sign icon-white"></i> 更多信息</a>
					</p>
                </div>
                <pre class="prettyprint linenums">
&lt;div class="btn-group"&gt;
  &lt;a class="btn btn-primary" href="#"&gt;&lt;i class="icon-user icon-white"&gt;&lt;/i&gt; User&lt;/a&gt;
  &lt;a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"&gt;&lt;span class="caret"&gt;&lt;/span&gt;&lt;/a&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-pencil"&gt;&lt;/i&gt; Edit&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-trash"&gt;&lt;/i&gt; Delete&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-ban-circle"&gt;&lt;/i&gt; Ban&lt;/a&gt;&lt;/li&gt;
    &lt;li class="divider"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="i"&gt;&lt;/i&gt; Make admin&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>

          <h5>Small button</h5>
		  <div class="bs-docs-example">
            <a class="btn btn-large" href="#"><i class="icon-star"></i> Star</a>
            <a class="btn btn-small" href="#"><i class="icon-star"></i> Star</a>
            <a class="btn btn-mini" href="#"><i class="icon-star"></i> Star</a>
          </div>
<pre class="prettyprint linenums">
&lt;a class="btn btn-large" href="#"&gt;&lt;i class="icon-star"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="btn btn-small" href="#"&gt;&lt;i class="icon-star"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="btn btn-mini" href="#"&gt;&lt;i class="icon-star"&gt;&lt;/i&gt;&lt;/a&gt;
</pre>


                <h4>Navigation</h4>
                <div class="bs-docs-example">
                    <div class="well" style="padding: 8px 0; margin-bottom: 0;">
                        <ul class="nav nav-list">
                            <li class="active"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
                            <li><a href="#"><i class="icon-book"></i> Library</a></li>
                            <li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
                            <li><a href="#"><i class="i"></i> Misc</a></li>
                        </ul>
                    </div>
                </div>
                <pre class="prettyprint linenums">
&lt;ul class="nav nav-list"&gt;
  &lt;li class="active"&gt;&lt;a href="#"&gt;&lt;i class="icon-home icon-white"&gt;&lt;/i&gt; Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-book"&gt;&lt;/i&gt; Library&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-pencil"&gt;&lt;/i&gt; Applications&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;&lt;i class="i"&gt;&lt;/i&gt; Misc&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>

          <h4>Form fields</h4>
          <form class="bs-docs-example form-horizontal">
            <div class="control-group">
              <label class="control-label" for="inputIcon">Email address</label>
              <div class="controls">
                <div class="input-prepend">
                  <span class="add-on"><i class="icon-envelope"></i></span><input class="span2" id="inputIcon" type="text">
                </div>
              </div>
            </div>
          </form>
<pre class="prettyprint linenums">
&lt;div class="control-group"&gt;
  &lt;label class="control-label" for="inputIcon"&gt;Email address&lt;/label&gt;
  &lt;div class="controls"&gt;
    &lt;div class="input-prepend"&gt;
      &lt;span class="add-on"&gt;&lt;i class="icon-envelope"&gt;&lt;/i&gt;&lt;/span&gt;
      &lt;input class="span2" id="inputIcon" type="text"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
            </section>
            <!-- Pure CSS GUI icons
        ================================================== -->
            <section id="icons-pure-css">
                <div class="page-header">
                    <h1>Pure CSS GUI icons <small>by <a href="http://nicolasgallagher.com" target="_blank">Nicolas Gallagher</a></small></h1>
                </div>
                <p>Known support: Firefox 3.5+, Safari 5+, Chrome 5+, Opera 10.6+.</p>
                <h2><strong>84 GUI icons</strong> created from semantic HTML.</h2>
                <!--
                <div class="pc3-icon row">
                    <div class="span3">
                        <h3>User interaction</h3>
                        <ul>
                            <li class="search"><a href="#non">Search</a></li>
                            <li class="comment"><a href="#non">Comment</a></li>
                            <li class="like"><a href="#non">Like</a></li>
                            <li class="add"><a href="#non">Add</a></li>
                            <li class="remove"><a href="#non">Remove</a></li>
                            <li class="delete"><a href="#non">Delete</a></li>
                            <li class="add-alt"><a href="#non">Add</a></li>
                            <li class="remove-alt"><a href="#non">Remove</a></li>
                            <li class="delete-alt"><a href="#non">Delete</a></li>
                            <li class="report"><a href="#non">Report</a></li>
                            <li class="trash"><a href="#non">Trash</a></li>
                            <li class="lock"><a href="#non">Lock</a></li>
                            <li class="unlock"><a href="#non">Unlock</a></li>
                            <li class="update"><a href="#non">Update status</a></li>
                            <li class="retweet"><a href="#non">Retweet</a></li>
                            <li class="save"><a href="#non">Save</a></li>
                            <li class="edit"><a href="#non">Edit</a></li>
                            <li class="download"><a href="#non">Download</a></li>
                            <li class="arrow forward"><a href="#non">Forward</a></li>
                            <li class="arrow back"><a href="#non">Back</a></li>
                            <li class="arrow up"><a href="#non">Up</a></li>
                            <li class="arrow down"><a href="#non">Down</a></li>
                            <li class="arrow-alt forward"><a href="#non">Forward</a></li>
                            <li class="arrow-alt back"><a href="#non">Back</a></li>
                            <li class="arrow-alt up"><a href="#non">Up</a></li>
                            <li class="arrow-alt down"><a href="#non">Down</a></li>
                            <li class="arrow-alt2 forward"><a href="#non">Forward</a></li>
                            <li class="arrow-alt2 back"><a href="#non">Back</a></li>
                            <li class="arrow-alt2 up"><a href="#non">Up</a></li>
                            <li class="arrow-alt2 down"><a href="#non">Down</a></li>
                        </ul>
                    </div>
                    <div class="span3">
                        <h3>Miscellaneous</h3>
                        <ul>
                            <li class="home"><a href="#non">Home</a></li>
                            <li class="photo"><a href="#non">Photo</a></li>
                            <li class="video"><a href="#non">Video</a></li>
                            <li class="music"><a href="#non">Music</a></li>
                            <li class="call"><a href="#non">Call</a></li>
                            <li class="call call-on"><a href="#non">Call in progress</a></li>
                            <li class="tags"><a href="#non">Tags</a></li>
                            <li class="rss"><a href="#non">RSS</a></li>
                            <li class="email"><a href="#non">Email</a></li>
                            <li class="profile"><a href="#non">Profile</a></li>
                            <li class="file"><a href="#non">File</a></li>
                            <li class="folder"><a href="#non">Folder</a></li>
                            <li class="list"><a href="#non">List view</a></li>
                            <li class="permalink"><a href="#non">Permalink</a></li>
                            <li class="history"><a href="#non">History</a></li>
                            <li class="tools"><a href="#non">Tools</a></li>
                            <li class="player">MP3 Player</li>
                            <li class="headphones">Headphones</li>
                            <li class="ribbon">Ribbon</li>
                            <li class="views">Views</li>
                            <li class="location">Location</li>
                            <li class="info">Info</li>
                            <li class="help">Help</li>
                            <li class="pie">Pie chart</li>
                            <li class="success">Success</li>
                            <li class="success-alt">Success (alt)</li>
                            <li class="warning">Warning</li>
                            <li class="denied">Denied</li>
                        </ul>
                    </div>
                    <div class="span3">
                        <h3>Media controls</h3>
                        <ul>
                            <li class="power"><a href="#non">Power</a></li>
                            <li class="play"><a href="#non">Play</a></li>
                            <li class="stop"><a href="#non">Stop</a></li>
                            <li class="pause"><a href="#non">Pause</a></li>
                            <li class="play-alt"><a href="#non">Play</a></li>
                            <li class="stop-alt"><a href="#non">Stop</a></li>
                            <li class="pause-alt"><a href="#non">Pause</a></li>
                            <li class="volume"><a href="#non">Volume</a></li>
                            <li class="volume volume-on"><a href="#non">Volume on</a></li>
                            <li class="volume mute"><a href="#non">Mute</a></li>
                            <li class="volume volume-up"><a href="#non">Volume up</a></li>
                            <li class="volume volume-down"><a href="#non">Volume down</a></li>
                            <li class="mic"><a href="#non">Mic</a></li>
                            <li class="fforward"><a href="#non">Fast forward</a></li>
                            <li class="frewind"><a href="#non">Fast rewind</a></li>
                            <li class="next"><a href="#non">Next track</a></li>
                            <li class="prev"><a href="#non">Previous track</a></li>
                            <li class="repeat"><a href="#non">Repeat</a></li>
                            <li class="expand"><a href="#non">Expand</a></li>
                            <li class="shrink"><a href="#non">Shrink</a></li>
                            <li class="toggle-size"><a href="#non">Toggle video size</a></li>
                            <li class="pop"><a href="#non">Pop out</a></li>
                            <li class="enlarge"><a href="#non">Enlarge</a></li>
                            <li class="full"><a href="#non">Full-screen</a></li>
                            <li class="exit"><a href="#non">Exit full-screen</a></li>
                            <li class="eject"><a href="#non">Eject</a></li>
                        </ul>
                    </div>
                </div>
                -->
                <h3>About Pure CSS GUI icons</h3>
                <p>An experiment that uses pseudo-elements to create 84 simple GUI icons using CSS and semantic HTML. Shared as an exercise in creative problem solving and working within constraints. This is not a “production ready” CSS icon set.</p>
                <p>Demo for <a href="http://nicolasgallagher.com/pure-css-gui-icons/">Pure CSS GUI icons (experimental)</a>.</p>
                <hr class="bs-docs-separator">
                <h2>How to use</h2>
                <div class="bs-docs-example">
				<ul>
   <li class="power"><a href="#non">Power</a></li>
   <li class="play"><a href="#non">Play</a></li>
   <li class="stop"><a href="#non">Stop</a></li>
   <li class="pause"><a href="#non">Pause</a></li>
</ul>
				</div>
                <pre class="prettyprint linenums">
&lt;ul&gt;
   &lt;li class="power"&gt;&lt;a href="#non"&gt;Power&lt;/a&gt;&lt;/li&gt;
   &lt;li class="play"&gt;&lt;a href="#non"&gt;Play&lt;/a&gt;&lt;/li&gt;
   &lt;li class="stop"&gt;&lt;a href="#non"&gt;Stop&lt;/a&gt;&lt;/li&gt;
   &lt;li class="pause"&gt;&lt;a href="#non"&gt;Pause&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
                <p>Each icon uses its own set of styles. For example, the key parts of the CSS responsible for the “expand” icon are as follows:</p>
                <!--
                <pre class="prettyprint linenums">
.expand a:before {
   content:"";
   position:absolute;
   top:50%;
   left:1px;
   width:5px;
   height:0;
   border-width:7px 7px 0;
   border-style:solid;
   border-color:transparent #c55500;
   margin-top:-4px;
   /* css3 */
   -webkit-transform:rotate(-45deg);
   -moz-transform:rotate(-45deg);
   -o-transform:rotate(-45deg);
   transform:rotate(-45deg);
}

.expand a:after {
   content:"";
   position:absolute;
   top:50%;
   left:5px;
   width:8px;
   height:8px;
   border-width:3px 0 0 3px;
   border-style:solid;
   border-color:#c55500;
   margin-top:-6px;
}

.expand a:hover:before,
.expand a:focus:before,
.expand a:active:before {
   border-color:transparent #730800;
}

.expand a:hover:after,
.expand a:focus:after,
.expand a:active:after {
   border-color:#730800;
}
</pre>
-->
                <p>The <a href="http://nicolasgallagher.com/pure-css-gui-icons/demo/" target="_blank">demo page</a> contains a full set of user interaction and media player control icons, as well as other common icons. For now, several icons actually require more than one element as CSS 2.1 only specifies 2 pseudo-elements per element that can contain generated content. The CSS3 Generated and Replaced Content Module allows for an unlimited number of pseudo-elements but has yet to be fully implemented in any modern browser.</p>
        </div>
    </div>
</div>
<?php include("common/footer.html");?>