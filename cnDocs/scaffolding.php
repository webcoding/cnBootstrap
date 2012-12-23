<?php $page = "scaffolding" ?>
<?php $title="Scaffolding"?>
<?php $description = "" ?>
<?php include("./templates/header.php"); ?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1 title="Scaffolding">框架</h1>
        <p class="lead" title="Bootstrap is built on responsive 12-column grids, layouts, and components.">Bootstrap是建立在响应式布局12列栅格系统之上实现布局和组件。</p>
    </div>
</header>
<div class="container"> 

<!-- Docs nav
================================================== -->
    <div class="row">
        <div class="span3 bs-docs-sidebar">
            <ul class="nav nav-list bs-docs-sidenav">
                <li><a href="#global" title="Global styles"><i class="icon-chevron-right"></i> 全局样式</a></li>
                <li><a href="#gridSystem" title="Grid system"><i class="icon-chevron-right"></i> 栅格系统</a></li>
                <li><a href="#fluidGridSystem" title="Fluid grid system"><i class="icon-chevron-right"></i> 流动栅格系统</a></li>
                <li><a href="#layouts" title="Layouts"><i class="icon-chevron-right"></i> 布局</a></li>
                <li><a href="#responsive" title="Responsive design"><i class="icon-chevron-right"></i> 响应式设计</a></li>
            </ul>
        </div>
        <div class="span9"> 
            
            <!-- Global Bootstrap settings
			================================================== -->
            <section id="global">
                <div class="page-header">
                    <h1 title="Global settings">全局设置 <small>重置CSS，排版和链接</small></h1>
                </div>
                <h3 title="Requires HTML5 doctype">要求HTML5 doctype</h3>
                <p title="Bootstrap makes use of certain HTML elements and CSS properties that require the use of the HTML5 doctype. Include it at the beginning of all your projects.">Bootstrap用到的HTML元素和CSS属性需要HTML5 doctype。因此每个使用Bootstrap的页面都应该包启HTML5声明。</p>
                <p>页面框架是创建所有页面的基础，拷贝以下代码作为你的页面的初始状态。</p>
                <pre class="prettyprint linenums">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="utf-8" /&gt;
&lt;title&gt;your title&lt;/title&gt;
&lt;link rel="stylesheet" href="css_example_url" /&gt;
&lt;script src="js_example_url"&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
...
&lt;/body&gt;
&lt;/html&gt;
</pre>
                <h3 title="Typography and links">排版和链接</h3>
                <p title="Bootstrap sets basic global display, typography, and link styles. Specifically, we:">Bootstrap设置了基本的全局显示效果，排版和链接样式。具体来说，我们:</p>
				<ul>
                    <li>移除了 <code>margin</code> 的 <code>margin</code></li>
                    <li>设置 <code>margin</code> 背景色为 <code>background-color: white;</code></li>
                    <li>将 <code>@baseFontFamily</code>, <code>@baseFontSize</code>, 和 <code>@baseLineHeight</code> 做为排版的基础变量</li>
                    <li>使用 <code>@linkColor</code> 设置全局链接的颜色，链接仅在 <code>:hover</code> 状下显示下划线</li>
                </ul>
                <p title="These styles can be found within scaffolding.less.">这些样式都在 <strong>scaffolding.less</strong>文件中。</p>
                <p>在page.less文件中，我们对全局显示、字体、链接做了设置。你可以通过修改variables.less中相关的值来改变这些设置。相关的设置：</p>
                <h3 title="通过Normalize重置默认样式">Reset via Normalize</h3>
				<p title="With Bootstrap 2, the old reset block has been dropped in favor of Normalize.css, a project by Nicolas Gallagher that also powers the HTML5 Boilerplate. While we use much of Normalize within our reset.less, we have removed some elements specifically for Bootstrap.">从Bootstrap 2开始，使用 <a href="http://necolas.github.com/normalize.css/" target="_blank">Normalize.css</a> 对默认的CSS进行重置(reset)。<a href="http://necolas.github.com/normalize.css/" target="_blank">Normalize.css</a> 项目由 <a href="http://twitter.com/necolas" target="_blank">Nicolas Gallagher</a> 创建 <a href="http://html5boilerplate.com" target="_blank">HTML5 Boilerplate</a> 项目也出于他手。新的reset代码保存在 reset.less ，并移除了一些元素，从而更加简洁明了。</p>
            </section>
            
            <!-- Grid system
    ================================================== -->
            <section id="gridSystem">
                <div class="page-header">
                    <h1 title="Default grid system">默认栅格系统 <small>响应式的12列系统</small></h1>
                </div>
                <h2>Live grid example</h2>
                <p title="The default Bootstrap grid system utilizes 12 columns, making for a 940px wide container without responsive features enabled. With the responsive CSS file added, the grid adapts to be 724px and 1170px wide depending on your viewport. Below 767px viewports, the columns become fluid and stack vertically.">在缺省情况下，Bootstrap提供940px宽, 12列的无<a href="./scaffolding.php#responsive">响应功能</a>栅格系统。通过添加响应式CSS样式，栅格系统能自适应宽度为724px 和 1170px的分辨率，并且在767px分辨率以下，栅格将变化为流体布局及垂直堆栈式排列。</p>
                <div class="bs-docs-grid">
                    <div class="row show-grid">
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                    </div>
                    <div class="row show-grid">
                        <div class="span2">2</div>
                        <div class="span3">3</div>
                        <div class="span4">4</div>
                    </div>
                    <div class="row show-grid">
                        <div class="span4">4</div>
                        <div class="span5">5</div>
                    </div>
                    <div class="row show-grid">
                        <div class="span9">9</div>
                    </div>
                </div>
				
                <h3 titlt="Basic grid HTML"></h3>
                <p title="For a simple two column layout, create a .row and add the appropriate number of .span* columns. As this is a 12-column grid, each .span* spans a number of those 12 columns, and should always add up to 12 for each row (or the number of columns in the parent).">一个基本的布局由两个“列”组成，栅格系统由一系列横跨12等分的"span*"组成。
				
				For a simple two column layout, create a <code>.row</code> and add the appropriate number of <code>.span*</code> columns. As this is a 12-column grid, each <code>.span*</code> spans a number of those 12 columns, and should always add up to 12 for each row (or the number of columns in the parent).</p>
                <pre class="prettyprint linenums">
&lt;div class="row"&gt;
  &lt;div class="span4"&gt;...&lt;/div&gt;
  &lt;div class="span8"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>
                <p>Given this example, we have <code>.span4</code> and <code>.span8</code>, making for 12 total columns and a complete row.</p>
                <h2>Offsetting columns</h2>
                <p>Move columns to the right using <code>.offset*</code> classes. Each class increases the left margin of a column by a whole column. For example, <code>.offset4</code> moves <code>.span4</code> over four columns.</p>
                <div class="bs-docs-grid">
                    <div class="row show-grid">
                        <div class="span4">4</div>
                        <div class="span3 offset2">3 offset 2</div>
                    </div><!-- /row -->
                    <div class="row show-grid">
                        <div class="span3 offset1">3 offset 1</div>
                        <div class="span3 offset2">3 offset 2</div>
                    </div><!-- /row -->
                    <div class="row show-grid">
                        <div class="span6 offset3">6 offset 3</div>
                    </div><!-- /row --> 
                </div>
                <pre class="prettyprint linenums">
&lt;div class="row"&gt;
  &lt;div class="span4"&gt;...&lt;/div&gt;
  &lt;div class="span3 offset2"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>
                <h2>Nesting columns</h2>
                <p>To nest your content with the default grid, add a new <code>.row</code> and set of <code>.span*</code> columns within an existing <code>.span*</code> column. Nested rows should include a set of columns that add up to the number of columns of its parent.</p>
                <h3>Example</h3>
                <p>Here two nested <code>.span4</code> columns are placed within a <code>.span8</code>.</p>
                <div class="row show-grid">
                    <div class="span9"> 
						Level 1 column
                        <div class="row show-grid">
                            <div class="span6"> 
								Level 2 
							</div>
                            <div class="span3"> 
								Level 2 
							</div>
                        </div>
                    </div>
                </div>
                <pre class="prettyprint linenums">
&lt;div class="row"&gt;
  &lt;div class="span9"&gt;
    Level 1 column
    &lt;div class="row"&gt;
      &lt;div class="span6"&gt;Level 2&lt;/div&gt;
      &lt;div class="span3"&gt;Level 2&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
            </section>
            
			
			
            <!-- Fluid grid system
    ================================================== -->
            <section id="fluidGridSystem">
                <div class="page-header">
                    <h1>Fluid grid system</h1>
                </div>
				
                <h2>Live fluid grid example</h2>
                <p>The fluid grid system uses percents instead of pixels for column widths. It has the same responsive capabilities as our fixed grid system, ensuring proper proportions for key screen resolutions and devices.</p>
                <div class="bs-docs-grid">
                    <div class="row-fluid show-grid">
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                    </div>
                    <div class="row-fluid show-grid">
                        <div class="span4">4</div>
                        <div class="span4">4</div>
                        <div class="span4">4</div>
                    </div>
                    <div class="row-fluid show-grid">
                        <div class="span4">4</div>
                        <div class="span8">8</div>
                    </div>
                    <div class="row-fluid show-grid">
                        <div class="span6">6</div>
                        <div class="span6">6</div>
                    </div>
                    <div class="row-fluid show-grid">
                        <div class="span12">12</div>
                    </div>
                </div>
                <h3>Basic fluid grid HTML</h3>
                <p>Make any row "fluid" by changing <code>.row</code> to <code>.row-fluid</code>. The column classes stay the exact same, making it easy to flip between fixed and fluid grids.</p>
                <pre class="prettyprint linenums">
&lt;div class="row-fluid"&gt;
  &lt;div class="span4"&gt;...&lt;/div&gt;
  &lt;div class="span8"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>

          <h2>Fluid offsetting</h2>
          <p>Operates the same way as the fixed grid system offsetting: add <code>.offset*</code> to any column to offset by that many columns.</p>
          <div class="bs-docs-grid">
            <div class="row-fluid show-grid">
              <div class="span4">4</div>
              <div class="span4 offset4">4 offset 4</div>
            </div><!-- /row -->
            <div class="row-fluid show-grid">
              <div class="span3 offset3">3 offset 3</div>
              <div class="span3 offset3">3 offset 3</div>
            </div><!-- /row -->
            <div class="row-fluid show-grid">
              <div class="span6 offset6">6 offset 6</div>
            </div><!-- /row -->
          </div>
<pre class="prettyprint linenums">
&lt;div class="row-fluid"&gt;
  &lt;div class="span4"&gt;...&lt;/div&gt;
  &lt;div class="span4 offset2"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>

          <h2>Fluid nesting</h2>
          <p>Fluid grids utilize nesting differently: each nested level of columns should add up to 12 columns. This is because the fluid grid uses percentages, not pixels, for setting widths.</p>
          <div class="row-fluid show-grid">
            <div class="span12">
              Fluid 12
              <div class="row-fluid show-grid">
                <div class="span6">
                  Fluid 6
                  <div class="row-fluid show-grid">
                    <div class="span6">
                      Fluid 6
                    </div>
                    <div class="span6">
                      Fluid 6
                    </div>
                  </div>
                </div>
                <div class="span6">
                  Fluid 6
                </div>
              </div>
            </div>
          </div>
<pre class="prettyprint linenums">
&lt;div class="row-fluid"&gt;
  &lt;div class="span12"&gt;
    Fluid 12
    &lt;div class="row-fluid"&gt;
      &lt;div class="span6"&gt;
        Fluid 6
        &lt;div class="row-fluid"&gt;
          &lt;div class="span6"&gt;Fluid 6&lt;/div&gt;
          &lt;div class="span6"&gt;Fluid 6&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="span6"&gt;Fluid 6&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
            </section>
            



            <!-- Layouts (Default and fluid)
    ================================================== -->
            <section id="layouts">
                <div class="page-header">
                    <h1>Layouts</h1>
                </div>
                <h2>Fixed layout</h2>
                <p>Provides a common fixed-width (and optionally responsive) layout with only <code>&lt;div class="container"&gt;</code> required.</p>
                <p>默认布局宽度为940px、居中，简单的使用 <code>&lt;div class="container"&gt;</code> 即可达到效果。</p>
                <div class="mini-layout">
                    <div class="mini-layout-body"></div>
                </div>
                <pre class="prettyprint linenums">
&lt;body&gt;
  &lt;div class="container"&gt;
    ...
  &lt;/div&gt;
&lt;/body&gt;
</pre>
                <h2>Fluid layout</h2>
                <p>Create a fluid, two-column page with <code>&lt;div class="container-fluid"&gt;</code>&mdash;great for applications and docs.</p>
                <p><code>&lt;div class="container-fluid"&gt;</code> 是一种更自由的布局。更适合apps或者docs使用。</p>
                <div class="mini-layout fluid">
                    <div class="mini-layout-sidebar"></div>
                    <div class="mini-layout-body"></div>
                </div>
                <pre class="prettyprint linenums">
&lt;div class="container-fluid"&gt;
  &lt;div class="row-fluid"&gt;
    &lt;div class="span2"&gt;
      &lt;!--Sidebar content--&gt;
    &lt;/div&gt;
    &lt;div class="span10"&gt;
      &lt;!--Body content--&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
            </section>
            
            <!-- Responsive design
    ================================================== -->
            <section id="responsive">
                <div class="page-header">
                    <h1 title="Responsive design">响应式设计 <small>Media Query根据设备和分辨率的不同而使用不同样式</small></h1>
                </div>
                <h2 title="Enabling responsive features">启用响应功能</h2>
                <p title="Turn on responsive CSS in your project by including the proper meta tag and additional stylesheet within the <head> of your document. If you've compiled Bootstrap from the Customize page, you need only include the meta tag.">在您的项目文档 <code>&lt;head&gt;</code> 中包括适当的meta标签以及额外的样式表即可打开响应式CSS。如果你使用的是“自定义”Bootstrap页面，那么你只需要包括meta标签即可。</p>
                <pre class="prettyprint linenums">
&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
&lt;link href="assets/css/bootstrap-responsive.css" rel="stylesheet"&gt;
</pre>
          <p title="Bootstrap doesn't include responsive features by default at this time as not everything needs to be responsive. Instead of encouraging developers to remove this feature, we figure it best to enable it as needed."><span class="label label-info" title="Heads up!">提醒</span>  并不是所有的设计都需要响应功能，所以 Bootstrap 在默认情况下不包含响应功能。但不是为了鼓励开发者移除此功能，这里我们最好启用它。</p>

          <h2 title="About responsive Bootstrap">响应式设计用来做什么？</h2>
          <img src="assets/img/responsive-illustrations.png" alt="Responsive devices" style="float: right; margin: 0 0 20px 20px;">
          <p title="Media queries allow for custom CSS based on a number of conditions—ratios, widths, display type, etc—but usually focuses around min-width and max-width.">Medias Query允许浏览器基于不同的条件而使用不同的CSS：比如宽高比，宽度，显示类型等等。但最常用的条件还是 <code>min-width</code> 和 <code>max-width</code> 。
		</p>
		<ul>
			<li title="Modify the width of column in our grid">在栅格中修改列的宽度</li>
			<li title="Stack elements instead of float wherever necessary">堆叠元素，而不是让其浮动</li>
			<li title="Resize headings and text to be more appropriate for devices">根据不同设备重置标题和文字的大小，以获得更好的阅读体验。</li>
        </ul>
          <p title="Use media queries responsibly and only as a start to your mobile audiences. For larger projects, do consider dedicated code bases and not layers of media queries.">谨慎地使用media query，建议仅仅将其做为你的手机用户的初体验。对于大型项目而言，最好还是选择专业的代码库，而不是进行层层的media查询。</p>

          <h2 title="Supported devices">支持的设备</h2>
          <p title="Bootstrap supports a handful of media queries in a single file to help make your projects more appropriate on different devices and screen resolutions. Here's what's included:">Bootstrap在responsive.less文件中提供了一组media query，令你的项目可以更为便捷地适应多种设备和分辨率。包括：</p>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th title="Label">设备</th>
                <th title="Layout width">布局宽度</th>
                <th title="Column width">列宽度</th>
                <th title="Gutter width">间隔宽度</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td title="Large display">大分辨率</td>
                <td>&gt;=1200px</td>
                <td>70px</td>
                <td>30px</td>
              </tr>
              <tr>
                <td title="Default">默认</td>
                <td>&gt;=980px</td>
                <td>60px</td>
                <td>20px</td>
              </tr>
              <tr>
                <td title="Portrait tablets">水平平板</td>
                <td>&gt;=768px</td>
                <td>42px</td>
                <td>20px</td>
              </tr>
              <tr>
                <td title="Phones to tablets">智能手机到垂直平板</td>
                <td>&lt;=767px</td>
                <td class="muted" colspan="2" title="Fluid columns, no fixed widths">流式列，非固定宽度</td>
              </tr>
              <tr>
                <td title="Phones">智能手机</td>
                <td>&lt;=480px</td>
                <td class="muted" colspan="2" title="Fluid columns, no fixed widths">流式列，非固定宽度</td>
              </tr>
            </tbody>
          </table>
<pre class="prettyprint linenums">
/* Large desktop */
@media (min-width: 1200px) { ... }

/* Portrait tablet to landscape and desktop */
@media (min-width: 768px) and (max-width: 979px) { ... }

/* Landscape phone to portrait tablet */
@media (max-width: 767px) { ... }

/* Landscape phones and down */
@media (max-width: 480px) { ... }
</pre>


          <h2 title="Responsive utility classes">响应式设计类</h2>
          <p title="For faster mobile-friendly development, use these utility classes for showing and hiding content by device. Below is a table of the available classes and their effect on a given media query layout (labeled by device). They can be found in responsive.less.">为了更高效友好地面向移动设备开发，可以使用这些基础实用类根据设备的不同决定内容的显示或隐藏。下表展示了可用的类，及其在media query（设备标识）下的效果。
	这些类保存在 <code>responsive.less</code>。</p>
          <table class="table table-bordered table-striped responsive-utilities">
            <thead>
              <tr>
                <th>Class</th>
                <th>Phones <small>767px and below</small></th>
                <th>Tablets <small>979px to 768px</small></th>
                <th>Desktops <small>Default</small></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th><code>.visible-phone</code></th>
                <td class="is-visible">Visible</td>
                <td class="is-hidden">Hidden</td>
                <td class="is-hidden">Hidden</td>
              </tr>
              <tr>
                <th><code>.visible-tablet</code></th>
                <td class="is-hidden">Hidden</td>
                <td class="is-visible">Visible</td>
                <td class="is-hidden">Hidden</td>
              </tr>
              <tr>
                <th><code>.visible-desktop</code></th>
                <td class="is-hidden">Hidden</td>
                <td class="is-hidden">Hidden</td>
                <td class="is-visible">Visible</td>
              </tr>
              <tr>
                <th><code>.hidden-phone</code></th>
                <td class="is-hidden">Hidden</td>
                <td class="is-visible">Visible</td>
                <td class="is-visible">Visible</td>
              </tr>
              <tr>
                <th><code>.hidden-tablet</code></th>
                <td class="is-visible">Visible</td>
                <td class="is-hidden">Hidden</td>
                <td class="is-visible">Visible</td>
              </tr>
              <tr>
                <th><code>.hidden-desktop</code></th>
                <td class="is-visible">Visible</td>
                <td class="is-visible">Visible</td>
                <td class="is-hidden">Hidden</td>
              </tr>
            </tbody>
          </table>

          <h3 title="When to use">何时适用</h3>
          <p title="Use on a limited basis and avoid creating entirely different versions of the same site. Instead, use them to complement each device's presentation. Responsive utilities should not be used with tables, and as such are not supported.">你的网站已经有了一点底子，但并不想再为不同设备而重新创建一个完全不同的站点，这种情况就适合使用实用类来完善呈现效果。响应式设计不应该使用在表格布局上，它也是不被支持的。</p>

          <h3 title="Responsive utilities test case">测试案例</h3>
          <p title="Resize your browser or load on different devices to test the above classes.">改变你的浏览器尺寸，或是不在同的设备上浏览，以观察上述类的效果。</p>
          <h4 title="Visible on...">显示</h4>
          <p title="Green checkmarks indicate that class is visible in your current viewport.">绿色选中的复选框是表示在您当前的窗口中是可见的。</p>
          <ul class="responsive-utilities-test">
            <li>Phone<span class="visible-phone">&#10004; Phone</span></li>
            <li>Tablet<span class="visible-tablet">&#10004; Tablet</span></li>
            <li>Desktop<span class="visible-desktop">&#10004; Desktop</span></li>
          </ul>
          <h4 title="Hidden on...">隐藏</h4>
          <p title="Here, green checkmarks indicate that class is hidden in your current viewport.">这里绿色选中的复选框是表示在您当前的窗口中是隐藏的。</p>
          <ul class="responsive-utilities-test hidden-on">
            <li>Phone<span class="hidden-phone">&#10004; Phone</span></li>
            <li>Tablet<span class="hidden-tablet">&#10004; Tablet</span></li>
            <li>Desktop<span class="hidden-desktop">&#10004; Desktop</span></li>
          </ul>

        </section>



      </div>
    </div>
	
</div>
<?php include("common/footer.html");?>