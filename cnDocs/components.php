<?php $page = "components" ?>
<?php $title="Components"?>
<?php $description = "" ?>
<?php include("./templates/header.php"); ?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
<div class="container">
<h1 title="组件">组件</h1>
<p class="lead" title="Dozens of reusable components built to provide navigation, alerts, popovers, and more.">内置几十种高可用的组件，以实现导航栏、通知和弹出框等功能。</p>
</div>
</header>


<div class="container">

<!-- Docs nav
================================================== -->
<div class="row">
	<div class="span3 bs-docs-sidebar">
		<ul class="nav nav-list bs-docs-sidenav">
			<li><a href="#dropdowns" title="Dropdowns"><i class="icon-chevron-right"></i> 下拉菜单</a></li>
			<li><a href="#buttonGroups" title="Button groups"><i class="icon-chevron-right"></i> 按钮组</a></li>
			<li><a href="#buttonDropdowns" title="Button dropdowns"><i class="icon-chevron-right"></i> 下拉按钮组</a></li>
			<li><a href="#navs" title="Navs"><i class="icon-chevron-right"></i> 导航</a></li>
			<li><a href="#navbar" title="Navbar"><i class="icon-chevron-right"></i> 导航条</a></li>
			<li><a href="#breadcrumbs" title="Breadcrumbs"><i class="icon-chevron-right"></i> 面包屑导航</a></li>
			<li><a href="#pagination" title="Pagination"><i class="icon-chevron-right"></i> 分页</a></li>
			<li><a href="#labels-badges" title="Labels and badges"><i class="icon-chevron-right"></i> 标签及标记</a></li>
			<li><a href="#typography" title="Typography"><i class="icon-chevron-right"></i> 排版</a></li>
			<li><a href="#thumbnails" title="Thumbnails"><i class="icon-chevron-right"></i> 缩略图</a></li>
			<li><a href="#alerts" title="Alerts"><i class="icon-chevron-right"></i> 通知</a></li>
			<li><a href="#progress" title="Progress bars"><i class="icon-chevron-right"></i> 进度条</a></li>
			<li><a href="#media" title="Media object"><i class="icon-chevron-right"></i> 媒体对象</a></li>
			<li><a href="#misc" title="Misc"><i class="icon-chevron-right"></i> 杂项</a></li>
		</ul>
	</div>
<div class="span9">



    <!-- Dropdowns
    ================================================== -->
    <section id="dropdowns">
      <div class="page-header">
        <h1>下拉菜单</h1>
      </div>

      <h2 title="Example">示例</h2>
      <p title="Toggleable, contextual menu for displaying lists of links. Made interactive with the dropdown javascript plugin.">可切换的下拉菜单。使用动态效果需要 <a href="./javascript.html#dropdowns">javascript下拉菜单插件</a> 的支持。</p>
      <div class="bs-docs-example">
        <div class="dropdown clearfix">
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
				<li><a tabindex="-1" href="#" title="Action">动作</a></li>
				<li><a tabindex="-1" href="#" title="Another action">另一个动作</a></li>
				<li><a tabindex="-1" href="#" title="Something else here">其他</a></li>
				<li class="divider"></li>
				<li><a tabindex="-1" href="#" title="Separated link">被间隔的链接</a></li>
			</ul>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu"&gt;
&lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
&lt;li class="divider"&gt;&lt;/li&gt;
&lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>

      <h2 title="Markup">代码</h2>
      <p title="Looking at just the dropdown menu, here's the required HTML. You need to wrap the dropdown's trigger and the dropdown menu within .dropdown, or another element that declares position: relative;. Then just create the menu.">下拉菜单的代码需要在下拉项之外嵌套 <code>.dropdown</code>，或者针对下拉项使用相对定位。然后创建菜单即可。</p>

<pre class="prettyprint linenums">
&lt;div class="dropdown"&gt;
&lt;!-- Link or button to toggle dropdown --&gt;
&lt;ul class="dropdown-menu" role="menu" aria-labelledby="dLabel"&gt;
&lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
&lt;li class="divider"&gt;&lt;/li&gt;
&lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
</pre>

      <h2 title="Options">选项</h2>
      <p title="Align menus to the right and add include additional levels of dropdowns.">下拉菜单支持右对齐以及下级菜单。</p>

      <h3 title="Aligning the menus">对齐方式</h3>
      <p title="Add .pull-right to a .dropdown-menu to right align the dropdown menu.">添加 <code>.pull-right</code> 到 <code>.dropdown-menu</code> 上可实现下拉菜单的右对齐。</p>
<pre class="prettyprint linenums">
&lt;ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel"&gt;
...
&lt;/ul&gt;
</pre>

      <h3 title="Sub menus on dropdowns">二级下拉菜单</h3>
      <p title="Add an extra level of dropdown menus, appearing on hover like those of OS X, with some simple markup additions. Add .dropdown-submenu to any li in an existing dropdown menu for automatic styling.">实现额外的水平下拉菜单，只需添加少量的代码，并且在实现的li位置添加 <code>.dropdown-submenu</code> 即可。</p>
      <div class="bs-docs-example">
        <div class="dropdown clearfix">
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
				<li><a tabindex="-1" href="#" title="Action">动作</a></li>
				<li><a tabindex="-1" href="#" title="Another action">另一个动作</a></li>
				<li><a tabindex="-1" href="#" title="Something else here">其他</a></li>
				<li class="divider"></li>
				<li class="dropdown-submenu">
					<a tabindex="-1" href="#" title="More options">更多选项</a>
					<ul class="dropdown-menu">
						<li><a tabindex="-1" href="#" title="Second level link">二级链接</a></li>
						<li><a tabindex="-1" href="#">二级链接</a></li>
						<li><a tabindex="-1" href="#">二级链接</a></li>
						<li><a tabindex="-1" href="#">二级链接</a></li>
						<li><a tabindex="-1" href="#">二级链接</a></li>
					</ul>
				</li>
			</ul>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;ul class="dropdown-menu" role="menu" aria-labelledby="dLabel"&gt;
...
&lt;li class="dropdown-submenu"&gt;
&lt;a tabindex="-1" href="#"&gt;More options&lt;/a&gt;
&lt;ul class="dropdown-menu"&gt;
  ...
&lt;/ul&gt;
&lt;/li&gt;
&lt;/ul&gt;
</pre>

    </section>




    <!-- Button Groups
    ================================================== -->
    <section id="buttonGroups">
      <div class="page-header">
        <h1 title="Button groups">按钮组 <small>添加更多按钮，实现类似工具条功能</small></h1>
      </div>
	  <p>按钮组可以将多个按钮做为一个复合组件来用。由一系列 <code>&lt;a&gt;</code> 或 <code>&lt;button&gt;</code> 元素构建。</p>
      <h3>最佳实践</h3>
	  <p>我们建议使用按钮组和工具条时应遵循下列准则：</p>
	  <ul>
        <li>在一个按钮组中只使用一种元素，<code>&lt;a&gt;</code> 或 <code>&lt;button&gt;</code> 。</li>
        <li>不要在同一个按钮组中使用不同按钮颜色。</li>
        <li>使用图标补充内容或直接替代文本时，应包含说明性的alt或title文字。</li>
      </ul>
	  <p><span class="label label-info">补充</span> 下面会单独强调带下拉框的按钮组，其包含一个下拉/上弹三角以表示可点击触发下拉/上弹。
      </p>
	  <h2 title="Examples">实例</h2>
      <p title="Two basic options, along with two more specific variations.">两种基本设置，随意控制具体的变化。</p>

      <h3 title="Single button group">单按钮组</h3>
      <p title="Wrap a series of buttons with .btn in .btn-group.">在 <code>.btn-group</code> 中包括了一系列附带 <code>.btn</code> 样式的按钮</p>
      <div class="bs-docs-example">
        <div class="btn-group" style="margin: 9px 0 5px;">
          <button class="btn">左</button>
          <button class="btn">中</button>
          <button class="btn">右</button>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="btn-group"&gt;
&lt;button class="btn"&gt;1&lt;/button&gt;
&lt;button class="btn"&gt;2&lt;/button&gt;
&lt;button class="btn"&gt;3&lt;/button&gt;
&lt;/div&gt;
</pre>

      <h3 title="Multiple button groups">多按钮组</h3>
      <p title='Combine sets of &lt;div class="btn-group"&gt; into a &lt;div class="btn-toolbar"&gt; for more complex components.'>集合几组 <code>&lt;div class="btn-group"&gt;</code>，再用 <code>&lt;div class="btn-toolbar"&gt;</code> 包装就可以合成工具条组件。
      </p>
      <div class="bs-docs-example">
        <div class="btn-toolbar" style="margin: 0;">
          <div class="btn-group">
            <button class="btn">1</button>
            <button class="btn">2</button>
            <button class="btn">3</button>
            <button class="btn">4</button>
          </div>
          <div class="btn-group">
            <button class="btn">5</button>
            <button class="btn">6</button>
            <button class="btn">7</button>
          </div>
          <div class="btn-group">
            <button class="btn">8</button>
          </div>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="btn-toolbar"&gt;
&lt;div class="btn-group"&gt;
...
&lt;/div&gt;
&lt;/div&gt;
</pre>

      <h3 title="Vertical button groups">垂直按钮组</h3>
      <p title="Make a set of buttons appear vertically stacked rather than horizontally.">实现一组按钮垂直排列，而非水平排列。</p>
      <div class="bs-docs-example">
        <div class="btn-group btn-group-vertical">
          <button type="button" class="btn"><i class="icon-align-left"></i></button>
          <button type="button" class="btn"><i class="icon-align-center"></i></button>
          <button type="button" class="btn"><i class="icon-align-right"></i></button>
          <button type="button" class="btn"><i class="icon-align-justify"></i></button>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="btn-group btn-group-vertical"&gt;
...
&lt;/div&gt;
</pre>


      <hr class="bs-docs-separator">


      <h4 title="Checkbox and radio flavors">复选和单选形式</h4>
      <p title="Button groups can also function as radios, where only one button may be active, or checkboxes, where any number of buttons may be active. View the Javascript docs for that.">按钮组也可实现单选和复选功能。单选只有一个按钮可被按下，而多选可以按下多个按钮。详见<a href="./javascript.php#buttons">Javascript插件</a>。</p>
		<p><a class="btn js-btn" href="./javascript.php#buttons">获取相关的javascript »</a></p>
      <h4 title="Dropdowns in button groups">按钮组中的下拉项</h4>
      <p title="Heads up! Buttons with dropdowns must be individually wrapped in their own .btn-group within a .btn-toolbar for proper rendering."><span class="label label-info">强调!</span> 为了渲染正常，带下拉项的按钮应该被 <code>.btn-group</code> 嵌套，然后再放入 <code>.btn-toolbar</code> 内。</p>
    </section>



    <!-- Split button dropdowns
    ================================================== -->
    <section id="buttonDropdowns">
      <div class="page-header">
        <h1 title="Button dropdown menus">按钮下拉菜单 <small>基于按钮组构建下拉菜单</small></h1>
      </div>


      <h2 title="Overview and examples">简介和示例</h2>
      <p title="Use any button to trigger a dropdown menu by placing it within a .btn-group and providing the proper menu markup.">使用任意按钮来触发一个下拉菜单——通过设置class <code>.btn-group</code> 和合适的标签即可。</p>
      <div class="bs-docs-example">
        <div class="btn-toolbar" style="margin: 0;">
          <div class="btn-group">
            <button class="btn dropdown-toggle" data-toggle="dropdown" title="Action">动作 <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
          <div class="btn-group">
            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" title="Action">动作 <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
          <div class="btn-group">
            <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown" title="Danger">危险 <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
          <div class="btn-group">
            <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown" title="Warning">警告 <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
          <div class="btn-group">
            <button class="btn btn-success dropdown-toggle" data-toggle="dropdown" title="Success">成功 <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
          <div class="btn-group">
            <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" title="Info">信息 <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
          <div class="btn-group">
            <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown" title="Inverse">逆操作 <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
        </div><!-- /btn-toolbar -->
      </div>
<pre class="prettyprint linenums">
&lt;div class="btn-group"&gt;
&lt;a class="btn dropdown-toggle" data-toggle="dropdown" href="#"&gt;
Action
&lt;span class="caret"&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;ul class="dropdown-menu"&gt;
&lt;!-- dropdown menu links --&gt;
&lt;/ul&gt;
&lt;/div&gt;
</pre>

      <h3 title="Sizes">按钮大小</h3>
      <p title="Utilize the extra button classes .btn-mini, .btn-small, or .btn-large for sizing.">可使用额外的按钮类 <code>.btn-large</code>, <code>.btn-small</code> 或 <code>.btn-mini</code> 控制大小。</p>
      <div class="bs-docs-example">
        <div class="btn-toolbar" style="margin: 0;">
          <div class="btn-group">
            <button class="btn btn-large dropdown-toggle" data-toggle="dropdown">大号按钮 <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
          <div class="btn-group">
            <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">小号按钮 <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
          <div class="btn-group">
            <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown">迷你按钮 <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
        </div><!-- /btn-toolbar -->
      </div>

      <h3 title="Requires javascript">javascript 依赖</h3>
      <p title="Button dropdowns require the Bootstrap dropdown plugin to function.">下拉按钮依赖于<a href="./javascript.php#dropdowns">下拉按钮插件</a>。</p>
      <p title="In some cases&mdash;like mobile&mdash;dropdown menus will extend outside the viewport. You need to resolve the alignment manually or with custom javascript.">在某些情形下 &mdash; 利于移动设备 &mdash; 下拉按钮可能会超出当前的可视区域。你需要手动或者使用javascript的方式解决屏幕的自适应问题。</p>

      <hr class="bs-docs-separator">


      <h2 title="Split button dropdowns">分离式下拉按钮</h2>
      <p title="Building on the button group styles and markup, we can easily create a split button. Split buttons feature a standard action on the left and a dropdown toggle on the right with contextual links."></p>
      <p>在分组按钮的样式和标签基础上我们可以很容易的创建分离式下拉按钮。分离式下拉按钮左边部分有标准的按钮功能，右边部分有一个下拉菜单。</p>
      <p>我们利用第二个按钮动作扩展了下拉按钮，点击右边图标时触发。</p>
      <div class="bs-docs-example">
        <div class="btn-toolbar" style="margin: 0;">
          <div class="btn-group">
            <button class="btn">动作</button>
            <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
          <div class="btn-group">
            <button class="btn btn-primary">动作</button>
            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
          <div class="btn-group">
            <button class="btn btn-danger">危险</button>
            <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
          <div class="btn-group">
            <button class="btn btn-warning">警告</button>
            <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
          <div class="btn-group">
            <button class="btn btn-success">成功</button>
            <button class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
          <div class="btn-group">
            <button class="btn btn-info">信息</button>
            <button class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
          <div class="btn-group">
            <button class="btn btn-inverse">逆操作</button>
            <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
        </div><!-- /btn-toolbar -->
      </div>
<pre class="prettyprint linenums">
&lt;div class="btn-group"&gt;
&lt;button class="btn"&gt;Action&lt;/button&gt;
&lt;button class="btn dropdown-toggle" data-toggle="dropdown"&gt;
&lt;span class="caret"&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;ul class="dropdown-menu"&gt;
&lt;!-- dropdown menu links --&gt;
&lt;/ul&gt;
&lt;/div&gt;
</pre>

	  <h3 title="Sizes">按钮大小</h3>
      <p title="Utilize the extra button classes .btn-mini, .btn-small, or .btn-large for sizing.">可使用额外的按钮类 <code>.btn-large</code>, <code>.btn-small</code> 或 <code>.btn-mini</code> 控制大小。</p>
      <div class="bs-docs-example">
        <div class="btn-toolbar">
          <div class="btn-group">
            <button class="btn btn-large">大号action</button>
            <button class="btn btn-large dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
        </div><!-- /btn-toolbar -->
        <div class="btn-toolbar">
          <div class="btn-group">
            <button class="btn btn-small">小号action</button>
            <button class="btn btn-small dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
        </div><!-- /btn-toolbar -->
        <div class="btn-toolbar">
          <div class="btn-group">
            <button class="btn btn-mini">迷你action</button>
            <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
        </div><!-- /btn-toolbar -->
      </div>
<pre class="prettyprint linenums">
&lt;div class="btn-group"&gt;
&lt;button class="btn btn-mini"&gt;Action&lt;/button&gt;
&lt;button class="btn btn-mini dropdown-toggle" data-toggle="dropdown"&gt;
&lt;span class="caret"&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;ul class="dropdown-menu"&gt;
&lt;!-- dropdown menu links --&gt;
&lt;/ul&gt;
&lt;/div&gt;
</pre>

      <h3 title="Dropup menus">上弹菜单</h3>
      <p title="Dropdown menus can also be toggled from the bottom up by adding a single class to the immediate parent of .dropdown-menu. It will flip the direction of the .caret and reposition the menu itself to move from the bottom up instead of top down.">下拉菜单也可以变成上弹菜单，只要在 <code>.dropdown-menu</code> 最近的父标签上应用 <code>.dropup</code> 即可。它会改变 <code>.caret</code> 的箭头方向，并将菜单底部与按钮顶部对齐。</p>
      <div class="bs-docs-example">
        <div class="btn-toolbar" style="margin: 0;">
          <div class="btn-group dropup">
            <button class="btn" title="Dropup">上弹按钮</button>
            <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
          <div class="btn-group dropup">
            <button class="btn primary" title="Right dropup">上弹按钮(右对齐)</button>
            <button class="btn primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
            <ul class="dropdown-menu pull-right">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </div><!-- /btn-group -->
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="btn-group dropup"&gt;
&lt;button class="btn"&gt;Dropup&lt;/button&gt;
&lt;button class="btn dropdown-toggle" data-toggle="dropdown"&gt;
&lt;span class="caret"&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;ul class="dropdown-menu"&gt;
&lt;!-- dropdown menu links --&gt;
&lt;/ul&gt;
&lt;/div&gt;
</pre>

    </section>



    <!-- Nav, Tabs, & Pills
    ================================================== -->
    <section id="navs">
      <div class="page-header">
        <h1 title="Nav: tabs, pills, and lists">导航：标签页，胶囊链接和列表<small>定制性灵活的列表导航</small></h1>
      </div>
      
      <h2 title="Lightweight defaults Same markup, different classes">轻巧的默认项 <small>同样的标记，不同的类</small></h2>
      <p title="All nav components here&mdash;tabs, pills, and lists&mdash;share the same base markup and styles through the .nav class."><p>所有的导航组件，诸如标签页/胶囊链接/列表，<strong>使用同样的标记和样式</strong> &mdash; <code>.nav</code> 类。
      </p>
      <p>Tabs 分为导航和内容两部分，主要用于展示相同类型的内容，用于页面内或页面间切换。</p>
     
      <h3 title="Basic tabs">基本的标签页</h3>
      <p title="Take a regular &lt;ul&gt; of links and add .nav-tabs:">对存放链接的 <code>&lt;ul&gt;</code> 应用 <code>.nav-tabs</code>：</p>
      <div class="bs-docs-example">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#" title="Home">首页</a></li>
          <li><a href="#" title="Profile">介绍</a></li>
          <li><a href="#" title="Messages">消息</a></li>
        </ul>
      </div>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-tabs"&gt;
&lt;li class="active"&gt;
&lt;a href="#"&gt;Home&lt;/a&gt;
&lt;/li&gt;
&lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>

      <h3 title="Basic pills">基本的胶囊链接</h3>
      <p title="Take that same HTML, but use .nav-pills instead:">HTML不变，使用 <code>.nav-pills</code>：</p>
      <div class="bs-docs-example">
        <ul class="nav nav-pills">
          <li class="active"><a href="#" title="Home">首页</a></li>
          <li><a href="#" title="Profile">介绍</a></li>
          <li><a href="#" title="Messages">消息</a></li>
        </ul>
      </div>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-pills"&gt;
&lt;li class="active"&gt;
&lt;a href="#"&gt;Home&lt;/a&gt;
&lt;/li&gt;
&lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>

      <h3 title="Disabled state">禁用状态</h3>
      <p title="For any nav component (tabs, pills, or list), add .disabled for gray links and no hover effects. Links will remain clickable, however, unless custom javascript is implemented to prevent those clicks.">对于任意的导航组件(标签页、胶囊链接或列表)，添加 <code>.disabled</code> 只是改变成 <strong>灰色链接及无悬停状态</strong>。链接本身仍然是可以点击的，除非去自定义javascript阻止点击行为。</p>
      <div class="bs-docs-example">
        <ul class="nav nav-pills">
          <li><a href="#" title="Clickable link">可点击链接</a></li>
          <li><a href="#" title="Clickable link">可点击链接</a></li>
          <li class="disabled" title="Disabled link"><a href="#">不可点击链接</a></li>
        </ul>
      </div>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-pills"&gt;
...
&lt;li class="disabled"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
...
&lt;/ul&gt;
</pre>

      <h3 title="Component alignment">对齐方式</h3>
      <p title="To align nav links, use the .pull-left or .pull-right utility classes. Both classes will add a CSS float in the specified direction.">可以使用 <code>.pull-left</code> 或 <code>.pull-right</code> 设置导航链接的对齐方式。两者都依赖CSS float实现左/右对齐。</p>
	  
      <hr class="bs-docs-separator">


      <h2 title="Stackable">叠放式导航 <small>竖直排列标签和胶囊链接</small></h2>
      <p title="As tabs and pills are horizontal by default, just add a second class, .nav-stacked, to make them appear vertically stacked.">默认情况下标签和胶囊链接是水平排列的，使用 <code>.nav-stacked</code> 就可以将其变成竖直排列。</p>
      
      <h3 title="Stacked tabs">叠放式标签</h3>
      <div class="bs-docs-example">
        <ul class="nav nav-tabs nav-stacked">
          <li class="active"><a href="#" title="Home">首页</a></li>
          <li><a href="#" title="Profile">介绍</a></li>
          <li><a href="#" title="Messages">消息</a></li>
        </ul>
      </div>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-tabs nav-stacked"&gt;
...
&lt;/ul&gt;
</pre>

      <h3 title="Stacked pills">叠放式胶囊链接</h3>
      <div class="bs-docs-example">
        <ul class="nav nav-pills nav-stacked">
          <li class="active"><a href="#" title="Home">首页</a></li>
          <li><a href="#" title="Profile">介绍</a></li>
          <li><a href="#" title="Messages">消息</a></li>
        </ul>
      </div>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-pills nav-stacked"&gt;
...
&lt;/ul&gt;
</pre>


      <hr class="bs-docs-separator">


      <h2 title="Dropdowns">下拉项 <small>改良的导航组件</small></h2>
      <p title="Add dropdown menus with a little extra HTML and the dropdowns javascript plugin.">在标签和胶囊链接中创建下拉菜单非常方便，仅需增加极少的HTML标签和<a href="./javascript.html#dropdowns">jQuery下拉插件</a>即可。</p>

      <h3 title="Tabs with dropdowns">带下拉项的标签页</h3>
      <div class="bs-docs-example">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#">首页</a></li>
          <li><a href="#">帮助</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">下拉 <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </li>
        </ul>
      </div>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-tabs"&gt;
&lt;li class="dropdown"&gt;
&lt;a class="dropdown-toggle"
   data-toggle="dropdown"
   href="#"&gt;
    Dropdown
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
&lt;ul class="dropdown-menu"&gt;
  &lt;!-- links --&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;/ul&gt;
</pre>

      <h3 title="Pills with dropdowns">带下拉的胶囊链接</h3>
      <div class="bs-docs-example">
        <ul class="nav nav-pills">
          <li class="active"><a href="#">首页</a></li>
          <li><a href="#">帮助</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">下拉 <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">动作</a></li>
              <li><a href="#">另一个动作</a></li>
              <li><a href="#">其他</a></li>
              <li class="divider"></li>
              <li><a href="#">被间隔的链接</a></li>
            </ul>
          </li>
        </ul>
      </div>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-pills"&gt;
&lt;li class="dropdown"&gt;
&lt;a class="dropdown-toggle"
   data-toggle="dropdown"
   href="#"&gt;
    Dropdown
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
&lt;ul class="dropdown-menu"&gt;
  &lt;!-- links --&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;/ul&gt;
</pre>


      <hr class="bs-docs-separator">


      <h2 title="Nav lists">导航列表 <small>构建简单的叠放式导航，适用于侧边栏</small></h2>
      <p title="A simple and easy way to build groups of nav links with optional headers. They're best used in sidebars like the Finder in OS X.">导航列表可以便捷地创建带有标头(可选)的导航链接组，非常适合用做侧边栏（与OS X中的Finder类似）。</p>
	  <p>从结构上看，其与标签和胶囊链接无异，都使用同样的导航样式，所以用法和自定义都一样简洁。</p>

      <h3 title="Example nav list">导航列表例子</h3>
      <p title='Take a list of links and add class="nav nav-list":'>对存放一组链接的列表使用 <code>class="nav nav-list"</code> 样式：</p>
	  <div class="bs-docs-example">
        <div class="well" style="max-width: 340px; padding: 8px 0;">
          <ul class="nav nav-list">
            <li class="nav-header" title="List header">列表头</li>
            <li class="active"><a href="#" title="Home">首页</a></li>
            <li><a href="#" title="Library">类库</a></li>
            <li><a href="#" title="Applications">应用</a></li>
            <li class="nav-header" title="Another list header">另一个列表头</li>
            <li><a href="#" title="Profile">介绍</a></li>
            <li><a href="#" title="Settings">设置</a></li>
            <li class="divider"></li>
            <li><a href="#" title="Help">帮助</a></li>
          </ul>
        </div> <!-- /well -->
      </div>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-list"&gt;
&lt;li class="nav-header"&gt;列表头&lt;/li&gt;
&lt;li class="active"&gt;&lt;a href="#"&gt;首页&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="#"&gt;类库&lt;/a&gt;&lt;/li&gt;
...
&lt;/ul&gt;
</pre>
      <p title='Note For nesting within a nav list, include class="nav nav-list" on any nested &lt;ul&gt;.'>
        <span class="label label-info">小提示</span> 需要嵌套的导航列表，在 <code>&lt;ul&gt;</code> 上添加 <code>class="nav nav-list"</code> 样式即可。</p>
		<h3>使用图标的例子</h3>
		<p>同样的例子，使用 <code>&lt;i&gt;</code> 标签显示图标。</p>
		<div class="bs-docs-example">
			<div class="well" style="max-width: 340px; padding: 8px 0;">
				  <ul class="nav nav-list">
						<li class="nav-header" title="List header">列表头</li>
						<li class="active"><a href="#" title="Home"><i class="icon-white icon-home"></i> 首页</a></li>
						<li><a href="#" title="Library"><i class="icon-book"></i> 类库</a></li>
						<li><a href="#" title="Applications"><i class="icon-pencil"></i> 应用</a></li>
						<li class="nav-header" title="Another list header">另一个列表头</li>
						<li><a href="#" title="Profile"><i class="icon-user"></i> 介绍</a></li>
						<li><a href="#" title="Settings"><i class="icon-cog"></i> 设置</a></li>
						<li class="divider"></li>
						<li><a href="#" title="Help"><i class="icon-flag"></i> 帮助</a></li>
				  </ul>
			</div> <!-- /well -->
		</div>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-list"&gt;
&lt;li class="nav-header"&gt;列表头&lt;/li&gt;
&lt;li class="active"&gt;&lt;a href="#"&gt;&lt;i class="icon-white icon-home"&gt;&lt;/i&gt; 首页&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-book"&gt;&lt;/i&gt; 类库&lt;/a&gt;&lt;/li&gt;
...
&lt;/ul&gt;
</pre>
      <h3 title="Horizontal dividers">水平间隔</h3>
      <p title="Add a horizontal divider by creating an empty list item with the class .divider, like so:">应用 <code>.divider</code> 的空列表项会显示为一个水平间隔，如下：</p>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-list"&gt;
...
&lt;li class="divider"&gt;&lt;/li&gt;
...
&lt;/ul&gt;
</pre>


      <hr class="bs-docs-separator">


      <h2 title="Tabbable nav">标签页切换导航 <small>通过javascript让标签动起来</small></h2>
      <p title="Bring your tabs to life with a simple plugin to toggle between content via tabs. Bootstrap integrates tabbable tabs in four styles: top (default), right, bottom, and left.">我们使用一个简单的插件切换标签页对应的内容，从而让标签页变得生动。Bootstrap 提供了四种样式的标签页：置顶(默认)，居右，置底，居左。</p>

      <h3 title="Tabbable example">标签页切换示例</h3>
      <p title="To make tabs tabbable, create a .tab-pane with unique ID for every tab and wrap them in .tab-content.">要实现标签页，需要为每一个tab创建具有惟一Id的 <code>.tab-pane</code> 并在外面用使用 <code>.tab-content</code>嵌套起来。</p>
      <div class="bs-docs-example">
        <div class="tabbable" style="margin-bottom: 18px;">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab" title="Section 1">第1节</a></li>
            <li><a href="#tab2" data-toggle="tab">第2节</a></li>
            <li><a href="#tab3" data-toggle="tab">第3节</a></li>
          </ul>
          <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
            <div class="tab-pane active" id="tab1">
              <p title="I'm in Section 1.">我在第1节</p>
            </div>
            <div class="tab-pane" id="tab2">
              <p title="Howdy, I'm in Section 2.">你好，我在第1节</p>
            </div>
            <div class="tab-pane" id="tab3">
              <p title="What up girl, this is Section 3.">怎么了妹纸，这是第3节</p>
            </div>
          </div>
        </div> <!-- /tabbable -->
      </div>
<pre class="prettyprint linenums">
&lt;div class="tabbable"&gt; &lt;!-- Only required for left/right tabs --&gt;
&lt;ul class="nav nav-tabs"&gt;
&lt;li class="active"&gt;&lt;a href="#tab1" data-toggle="tab"&gt;Section 1&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="#tab2" data-toggle="tab"&gt;Section 2&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content"&gt;
&lt;div class="tab-pane active" id="tab1"&gt;
  &lt;p&gt;I'm in Section 1.&lt;/p&gt;
&lt;/div&gt;
&lt;div class="tab-pane" id="tab2"&gt;
  &lt;p&gt;Howdy, I'm in Section 2.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>

      <h4 title="Fade in tabs">淡入标签</h4>
      <p title="To make tabs fade in, add .fade to each .tab-pane.">实现淡入效果只需添加 <code>.fade</code> 到每一个 <code>.tab-pane</code>上即可。</p>

      <h4 title="Requires jQuery plugin">依赖的jQuery插件</h4>
      <p title="All tabbable tabs are powered by our lightweight jQuery plugin. Read more about how to bring tabbable tabs to life on the javascript docs page.">所有的标签切换都是由轻量级jQuery插件驱动，要了解更多详情请参考 <a href="./javascript.php#tabs">JavaScript插件文档</a>。</p>

      <h3 title="Tabbable in any direction">任意方向上使用标签切换页</h3>

      <h4 title="Tabs on the bottom">标签置底</h4>
      <p title="Flip the order of the HTML and add a class .tabs-below to put tabs on the bottom.">反转HTML的顺序，用 <code>.tabs-below</code> 将标签居底。</p>
      <div class="bs-docs-example">
        <div class="tabbable tabs-below">
          <div class="tab-content">
            <div class="tab-pane active" id="A">
              <p>这是章节A</p>
            </div>
            <div class="tab-pane" id="B">
              <p>你好，这是章节B</p>
            </div>
            <div class="tab-pane" id="C">
              <p>怎么了妹纸，这是章节C</p>
            </div>
          </div>
          <ul class="nav nav-tabs">
            <li class="active"><a href="#A" data-toggle="tab">第1节</a></li>
            <li><a href="#B" data-toggle="tab">第2节</a></li>
            <li><a href="#C" data-toggle="tab">第3节</a></li>
          </ul>
        </div> <!-- /tabbable -->
      </div>
<pre class="prettyprint linenums">
&lt;div class="tabbable tabs-below"&gt;
&lt;div class="tab-content"&gt;
...
&lt;/div&gt;
&lt;ul class="nav nav-tabs"&gt;
...
&lt;/ul&gt;
&lt;/div&gt;
</pre>

      <h4 title="Tabs on the left">标签居左</h4>
      <p title="Swap the class to put tabs on the left.">使用 <code>.tabs-left</code> 将标签居左。</p>
      <div class="bs-docs-example">
        <div class="tabbable tabs-left">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#lA" data-toggle="tab">第1节</a></li>
            <li><a href="#lB" data-toggle="tab">第2节</a></li>
            <li><a href="#lC" data-toggle="tab">第3节</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="lA">
              <p>这是章节A</p>
            </div>
            <div class="tab-pane" id="lB">
              <p>你好，这是章节B</p>
            </div>
            <div class="tab-pane" id="lC">
              <p>怎么了妹纸，这是章节C</p>
            </div>
          </div>
        </div> <!-- /tabbable -->
      </div>
<pre class="prettyprint linenums">
&lt;div class="tabbable tabs-left"&gt;
&lt;ul class="nav nav-tabs"&gt;
...
&lt;/ul&gt;
&lt;div class="tab-content"&gt;
...
&lt;/div&gt;
&lt;/div&gt;
</pre>

      <h4 title="Tabs on the right">标签居右</h4>
      <p title="Swap the class to put tabs on the right.">使用 <code>.tabs-right</code> 将标签居右。</p>
      <div class="bs-docs-example">
        <div class="tabbable tabs-right">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#rA" data-toggle="tab">第1节</a></li>
            <li><a href="#rB" data-toggle="tab">第2节</a></li>
            <li><a href="#rC" data-toggle="tab">第3节</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="rA">
              <p>这是章节A</p>
            </div>
            <div class="tab-pane" id="rB">
              <p>你好，这是章节B</p>
            </div>
            <div class="tab-pane" id="rC">
              <p>怎么了妹纸，这是章节C</p>
            </div>
          </div>
        </div> <!-- /tabbable -->
      </div>
<pre class="prettyprint linenums">
&lt;div class="tabbable tabs-right"&gt;
&lt;ul class="nav nav-tabs"&gt;
...
&lt;/ul&gt;
&lt;div class="tab-content"&gt;
...
&lt;/div&gt;
&lt;/div&gt;
</pre>

    </section>



    <!-- Navbar
    ================================================== -->
    <section id="navbar">
      <div class="page-header">
        <h1 title="Navbar">导航条</h1>
      </div>


      <h2 title="Basic navbar"></h2>
      <p title="To start, navbars are static (not fixed to the top) and include support for a project name and basic navigation. Place one anywhere within a .container, which sets the width of your site and content.">最初状态，导航条是静态的(也不是置顶的)，包括项目名称和基本导航功能。它可以放置在设置了网站或内容宽度的 <code>.container</code> 容器任意位置。</p>
      <div class="bs-docs-example">
        <div class="navbar">
          <div class="navbar-inner">
            <a class="brand" href="#" title="Title">项目名称</a>
            <ul class="nav">
              <li class="active"><a href="#">首页</a></li>
              <li><a href="#">链接</a></li>
              <li><a href="#">链接</a></li>
            </ul>
          </div>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="navbar"&gt;
&lt;div class="navbar-inner"&gt;
&lt;a class="brand" href="#"&gt;Title&lt;/a&gt;
&lt;ul class="nav"&gt;
  &lt;li class="active"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>


      <hr class="bs-docs-separator">


      <h2 title="Navbar components">导航条组件</h2>

      <h3 title="Brand">品牌名称</h3>
      <p title="A simple link to show your brand or project name only requires an anchor tag.">用于展示品牌或项目名称的一个简单链接，只需要一个锚标签。</p>
      <div class="bs-docs-example">
        <div class="navbar">
          <div class="navbar-inner">
            <a class="brand" href="#">项目名称</a>
          </div>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;a class="brand" href="#"&gt;Project name&lt;/a&gt;
</pre>

      <h3 title="Nav links">导航链接</h3>
      <p title="Nav items are simple to add via unordered lists.">导航项与无序列表非常相似。</p>
      <div class="bs-docs-example">
        <div class="navbar">
          <div class="navbar-inner">
            <ul class="nav">
              <li class="active"><a href="#">首页</a></li>
              <li><a href="#">链接</a></li>
              <li><a href="#">链接</a></li>
            </ul>
          </div>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;ul class="nav"&gt;
&lt;li class="active"&gt;
&lt;a href="#">Home&lt;/a&gt;
&lt;/li&gt;
&lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
      <p title="You can easily add dividers to your nav links with an empty list item and a simple class. Just add this between links:">将应用 <code>.divider-vertical</code> 的空列表项插入到两个链接项之间，就会得到分隔条：</p>
      <div class="bs-docs-example">
        <div class="navbar">
          <div class="navbar-inner">
            <ul class="nav">
              <li class="active"><a href="#">首页</a></li>
              <li class="divider-vertical"></li>
              <li><a href="#">链接</a></li>
              <li class="divider-vertical"></li>
              <li><a href="#">链接</a></li>
              <li class="divider-vertical"></li>
            </ul>
          </div>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;ul class="nav"&gt;
...
&lt;li class="divider-vertical"&gt;&lt;/li&gt;
...
&lt;/ul&gt;
</pre>

      <h3 title="Forms">导航条中的表单</h3>
      <p title="To properly style and position a form within the navbar, add the appropriate classes as shown below. For a default form, include .navbar-form and either .pull-left or .pull-right to properly align it.">导航条内的表单，用 <code>.navbar-form</code> 进行样式化如下图所示，由 <code>.pull-left</code> 或 <code>.pull-right</code> 决定居左还是居右。</p>
      <div class="bs-docs-example">
        <div class="navbar">
          <div class="navbar-inner">
            <form class="navbar-form pull-left">
              <input type="text" class="span2">
              <button type="submit" class="btn">提交</button>
            </form>
          </div>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;form class="navbar-form pull-left"&gt;
&lt;input type="text" class="span2"&gt;
&lt;button type="submit" class="btn"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre>

      <h3 title="Search form">搜索表单</h3>
      <p title="For a more customized search form, add .navbar-search to the form and .search-query to the input for specialized styles in the navbar.">对导航栏应用 <code>.navbar-search</code> 的同时对其中的输入框使用 <code>.search-query</code> ，就会得到另一种搜索样式，从而增强搜索表单的可定制性。</p>
      <div class="bs-docs-example">
        <div class="navbar">
          <div class="navbar-inner">
            <form class="navbar-search pull-left">
              <input type="text" class="search-query" placeholder="Search">
            </form>
          </div>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;form class="navbar-search pull-left"&gt;
&lt;input type="text" class="search-query" placeholder="Search"&gt;
&lt;/form&gt;
</pre>

      <h3 title="Component alignment">组件对齐</h3>
      <p title="Align nav links, search form, or text, use the .pull-left or .pull-right utility classes. Both classes will add a CSS float in the specified direction.">我们使用 <code>.pull-left</code> 或 <code>.pull-right</code> 对齐链接，搜索表单或是文本。这两个类都使用CSS浮动进行对齐。</p>

      <h3 title="Using dropdowns">添加下拉菜单</h3>
      <p title="Add dropdowns and dropups to the nav with a bit of markup and the dropdowns javascript plugin.">在导航中很容易添加上下拉菜单，要用到 <a href="./javascript.html/#dropdown">下拉javascript插件</a>。</p>
<pre class="prettyprint linenums">
&lt;ul class="nav"&gt;
&lt;li class="dropdown"&gt;
&lt;a href="#" class="dropdown-toggle" data-toggle="dropdown">
  Account
  &lt;b class="caret"&gt;&lt;/b&gt;
&lt;/a&gt;
&lt;ul class="dropdown-menu"&gt;
  ...
&lt;/ul&gt;
&lt;/li&gt;
&lt;/ul&gt;
</pre>
      <p title="Visit the javascript dropdowns documentation for more markup and information on calling dropdowns.">访问 <a href="./javascript.php#dropdowns">javascript下拉菜单文档</a> 及更多调用下拉菜单的代码和信息。</p>

      <h3 title="Text">导航条中的文本</h3>
      <p title="Wrap strings of text in an element with .navbar-text, usually on a &lt;p&gt; tag for proper leading and color.">导航中包括文本的标签一般要有 <code>.navbar-text</code> 样式，这里通常在导航条中用 <code>&lt;p&gt;</code> 标签包装文本以设置行高和颜色。</p>


      <hr class="bs-docs-separator">


      <h2 title="Optional display variations">导航条的可选变量</h2>
      <p title="Fix the navbar to the top or bottom of the viewport with an additional class on the outermost div, .navbar.">只要在最外层的div上应用 <code>.navbar</code> ，就可以将导航条固定到顶部或是底部。</p>

      <h3 title="Fixed to top">固定在顶部</h3>
      <p title="Add .navbar-fixed-top and remember to account for the hidden area underneath it by adding at least 40px padding to the &lt;body&gt;. Be sure to add this after the core Bootstrap CSS and before the optional responsive CSS.">添加 <code>.navbar-fixed-top</code> 并且一定要在 <code>&lt;body&gt;</code> 上面通过 <code>padding</code> (左右方向)留出一块至少40px的空白。这样可以保证这段样式添加在Bootstrap核心CSS之前，在响应式CSS(可选的)之后。</p>
      <div class="bs-docs-example bs-navbar-top-example">
        <div class="navbar navbar-fixed-top" style="position: absolute;">
          <div class="navbar-inner">
            <div class="container" style="width: auto; padding: 0 20px;">
              <a class="brand" href="#">项目名称</a>
              <ul class="nav">
                <li class="active"><a href="#">首页</a></li>
                <li><a href="#">链接</a></li>
                <li><a href="#">链接</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="navbar navbar-fixed-top"&gt;
...
&lt;/div&gt;
</pre>

      <h3 title="Fixed to bottom">固定在底部</h3>
      <p title="Add .navbar-fixed-bottom instead.">添加 <code>.navbar-fixed-bottom</code> 即可。</p>
      <div class="bs-docs-example bs-navbar-bottom-example">
        <div class="navbar navbar-fixed-bottom" style="position: absolute;">
          <div class="navbar-inner">
            <div class="container" style="width: auto; padding: 0 20px;">
              <a class="brand" href="#">项目名称</a>
              <ul class="nav">
                <li class="active"><a href="#">首页</a></li>
                <li><a href="#">链接</a></li>
                <li><a href="#">链接</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="navbar navbar-fixed-bottom"&gt;
...
&lt;/div&gt;
</pre>

      <h3 title="Static top navbar">静态顶部导航</h3>
      <p title="Create a full-width navbar that scrolls away with the page by adding .navbar-static-top. Unlike the .navbar-fixed-top class, you do not need to change any padding on the body.">创建一个满屏且有滚动的页面时，添加 <code>.navbar-static-top</code> 样式。你无需在 <code>body</code> 上改变任何的padding值，这个不像 <code>.navbar-fixed-top</code> 样式。</p>
      <div class="bs-docs-example bs-navbar-top-example">
        <div class="navbar navbar-static-top" style="margin: -1px -1px 0;">
          <div class="navbar-inner">
            <div class="container" style="width: auto; padding: 0 20px;">
              <a class="brand" href="#">项目名称</a>
              <ul class="nav">
                <li class="active"><a href="#">首页</a></li>
                <li><a href="#">链接</a></li>
                <li><a href="#">链接</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="navbar navbar-static-top"&gt;
...
&lt;/div&gt;
</pre>


      <hr class="bs-docs-separator">


      <h2 title="Responsive navbar">响应式导航条</h2>
      <p title="To implement a collapsing responsive navbar, wrap your navbar content in a containing div, .nav-collapse.collapse, and add the navbar toggle button, .btn-navbar.">如果我们想根据置顶导航条中的不同内容实现响应性设计，就可以将导航内容嵌套在一个 <code>.nav-collapse.collapse</code> div容器中，并对按钮都应用 <code>.btn-navbar</code> 类。</p>
      <div class="bs-docs-example">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <a class="brand" href="#">项目名称</a>
              <div class="nav-collapse">
                <ul class="nav">
                  <li class="active"><a href="#">首页</a></li>
                  <li><a href="#">链接</a></li>
                  <li><a href="#">链接</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">下拉 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">动作</a></li>
					  <li><a href="#">另一个动作</a></li>
					  <li><a href="#">其他</a></li>
                      <li class="divider"></li>
                      <li class="nav-header" title="Nav header">导航头</li>
                      <li><a href="#">被间隔的链接</a></li>
                      <li><a href="#" title="One more separated link">再一个被间隔的链接</a></li>
                    </ul>
                  </li>
                </ul>
                <form class="navbar-search pull-left" action="">
                  <input type="text" class="search-query span2" placeholder="Search">
                </form>
                <ul class="nav pull-right">
                  <li><a href="#">链接</a></li>
                  <li class="divider-vertical"></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">下拉 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">动作</a></li>
					  <li><a href="#">另一个动作</a></li>
					  <li><a href="#">其他</a></li>
                      <li class="divider"></li>
                      <li><a href="#">被间隔的链接</a></li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.nav-collapse -->
            </div>
          </div><!-- /navbar-inner -->
        </div><!-- /navbar -->
      </div>
<pre class="prettyprint linenums">
&lt;div class="navbar"&gt;
&lt;div class="navbar-inner"&gt;
&lt;div class="container"&gt;

  &lt;!-- .btn-navbar is used as the toggle for collapsed navbar content --&gt;
  &lt;a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"&gt;
    &lt;span class="icon-bar"&gt;&lt;/span&gt;
    &lt;span class="icon-bar"&gt;&lt;/span&gt;
    &lt;span class="icon-bar"&gt;&lt;/span&gt;
  &lt;/a&gt;

  &lt;!-- Be sure to leave the brand out there if you want it shown --&gt;
  &lt;a class="brand" href="#"&gt;Project name&lt;/a&gt;

  &lt;!-- Everything you want hidden at 940px or less, place within here --&gt;
  &lt;div class="nav-collapse"&gt;
    &lt;!-- .nav, .navbar-search, .navbar-form, etc --&gt;
  &lt;/div&gt;

&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
      <div class="alert alert-info" title="Heads up! The responsive navbar requires the collapse plugin and responsive Bootstrap CSS file.">
        <strong>注意!</strong> 响应式导航条需要 <a href="./javascript.php#collapse">collapse插件</a> 和 <a href="./scaffolding.php#responsive">响应式CSS文件</a>.
      </div>


      <hr class="bs-docs-separator">


      <h2 title="Inverted variation">反相变化</h2>
      <p title="Modify the look of the navbar by adding .navbar-inverse.">应用反相样式 <code>.navbar-inverse</code> 修改导航条的外观。</p>
      <div class="bs-docs-example">
        <div class="navbar navbar-inverse" style="position: static;">
          <div class="navbar-inner">
            <div class="container">
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".subnav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <a class="brand" href="#">项目名称</a>
              <div class="nav-collapse subnav-collapse">
                <ul class="nav">
                  <li class="active"><a href="#">首页</a></li>
                  <li><a href="#">链接</a></li>
                  <li><a href="#">链接</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">下拉 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">动作</a></li>
					  <li><a href="#">另一个动作</a></li>
					  <li><a href="#">其他</a></li>
                      <li class="divider"></li>
                      <li class="nav-header">导航头</li>
                      <li><a href="#">被间隔的链接</a></li>
                      <li><a href="#">再一个被间隔的链接</a></li>
                    </ul>
                  </li>
                </ul>
                <form class="navbar-search pull-left" action="">
                  <input type="text" class="search-query span2" placeholder="Search">
                </form>
                <ul class="nav pull-right">
                  <li><a href="#">链接</a></li>
                  <li class="divider-vertical"></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">下拉 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">动作</a></li>
					  <li><a href="#">另一个动作</a></li>
					  <li><a href="#">其他</a></li>
                      <li class="divider"></li>
                      <li><a href="#">被间隔的链接</a></li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.nav-collapse -->
            </div>
          </div><!-- /navbar-inner -->
        </div><!-- /navbar -->
      </div>
<pre class="prettyprint linenums">
&lt;div class="navbar navbar-inverse"&gt;
...
&lt;/div&gt;
</pre>

    </section>



    <!-- Breadcrumbs
    ================================================== -->
    <section id="breadcrumbs">
      <div class="page-header">
        <h1 title="Breadcrumbs">面包屑导航条</h1>
      </div>
	  <h2>为什么使用面包屑导航条</h2>
      <p>面包屑导航栏用于展示用户当前在网站/应用中的位置，但并不是首要导航。适宜布局清爽，简洁明了的场合。</p>
      <h2 title="Examples">示例</h2>
      <p title="A single example shown as it might be displayed across multiple pages.">一个简单的例子，可以用在多个页面中。</p>
      <div class="bs-docs-example">
        <ul class="breadcrumb">
          <li class="active">首页</li>
        </ul>
        <ul class="breadcrumb">
          <li><a href="#">首页</a> <span class="divider">/</span></li>
          <li class="active">类库</li>
        </ul>
        <ul class="breadcrumb" style="margin-bottom: 5px;">
          <li><a href="#" title="Home">首页</a> <span class="divider">/</span></li>
          <li><a href="#" title="Library">类库</a> <span class="divider">/</span></li>
          <li class="active" title="Data">数据</li>
        </ul>
      </div>
<pre class="prettyprint linenums">
&lt;ul class="breadcrumb"&gt;
&lt;li&gt;&lt;a href="#"&gt;Home&lt;/a&gt; &lt;span class="divider"&gt;/&lt;/span&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="#"&gt;Library&lt;/a&gt; &lt;span class="divider"&gt;/&lt;/span&gt;&lt;/li&gt;
&lt;li class="active"&gt;Data&lt;/li&gt;
&lt;/ul&gt;
</pre>

    </section>



    <!-- Pagination
    ================================================== -->
    <section id="pagination">
      <div class="page-header">
        <h1 title="Pagination -- Two options for paging through content">页码 <small>使用两个参数对内容进行分页</small></h1>
      </div>

      <h2 title="Standard pagination">标准分页</h2>
      <p title="Simple pagination inspired by Rdio, great for apps and search results. The large block is hard to miss, easily scalable, and provides large click areas.">简单的分页灵感来自于Rdio，应用于应用程序及搜索结果。大页码不容易错过，容易扩展并提供大尺度点击范围。</p>
      <div class="bs-docs-example">
        <div class="pagination">
          <ul>
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="pagination"&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a href="#"&gt;Prev&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="#"&gt;Next&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
</pre>


      <hr class="bs-docs-separator">


      <h2 title="Options">自定义选项</h2>

      <h3 title="Disabled and active states">禁用与激活状态</h3>
      <p title="Links are customizable for different circumstances. Use .disabled for unclickable links and .active to indicate the current page."><p>Bootstrap使用一组样式类定制页码的状态，<code>.disabled</code> 用于不可点击链接，而 <code>.active</code> 用于表示当前页链接。
      </p>针对不同的情况，页码链接是可定制的。应用 <code>.disabled</code> 禁用一个链接以及 <code>.active</code> 凸显当前页。</p>
      <div class="bs-docs-example">
        <div class="pagination pagination-centered">
          <ul>
            <li class="disabled"><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
         </ul>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="pagination "&gt;
&lt;ul&gt;
&lt;li class="disabled"&gt;&lt;a href="#"&gt;Prev&lt;/a&gt;&lt;/li&gt;
&lt;li class="active"&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
...
&lt;/ul&gt;
&lt;/div&gt;
</pre>

      <h3 title="Alignment">对齐方式</h3>
      <p title="Add one of two optional classes to change the alignment of pagination links: .pagination-centered and .pagination-right.">使用 <code>.pagination-centered</code> 和 <code>.pagination-right</code> 可以改变页码的对齐方式，前者居中，后者居右。</p>
      <div class="bs-docs-example">
        <div class="pagination pagination-centered">
          <ul>
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
         </ul>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="pagination pagination-centered"&gt;
...
&lt;/div&gt;
</pre>
      <div class="bs-docs-example">
        <div class="pagination pagination-right">
          <ul>
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="pagination pagination-right"&gt;
...
&lt;/div&gt;
</pre>


      <hr class="bs-docs-separator">


      <h2 title="Pager">前后页</h2>
      <p title="Quick previous and next links for simple pagination implementations with light markup and styles. It's great for simple sites like blogs or magazines.">前后页组件是一组简便的分页实现，标记更少，样式更轻，适用于轻量级网站，如博客或网志。</p>

      <h3 title="Default example">默认示例</h3>
      <p title="By default, the pager centers links.">默认情况下，前后页组件居中。</p>
      <div class="bs-docs-example">
        <ul class="pager">
          <li><a href="#" title="previous">上一页</a></li>
          <li><a href="#" title="next">下一页</a></li>
        </ul>
      </div>
<pre class="prettyprint linenums">
&lt;ul class="pager"&gt;
&lt;li&gt;&lt;a href="#"&gt;上一页&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="#"&gt;下一页&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>

      <h3 title="Aligned links">居于左右端的链接</h3>
      <p title="Alternatively, you can align each link to the sides:">另一种情况下，链接分别居于左右端：</p>
      <div class="bs-docs-example">
        <ul class="pager">
          <li class="previous"><a href="#" title="&larr; Older">&larr; 过去的</a></li>
          <li class="next"><a href="#" title="Newer &rarr;">更新的 &rarr;</a></li>
        </ul>
      </div>
<pre class="prettyprint linenums">
&lt;ul class="pager"&gt;
&lt;li class="previous"&gt;
&lt;a href="#"&gt;&amp;larr; 过去的&lt;/a&gt;
&lt;/li&gt;
&lt;li class="next"&gt;
&lt;a href="#"&gt;更新的 &amp;rarr;&lt;/a&gt;
&lt;/li&gt;
&lt;/ul&gt;
</pre>

      <h3 title="Optional disabled state">禁用状态</h3>
      <p title="Pager links also use the general .disabled utility class from the pagination.">前后页链接仍使用 <code>.disabled</code> 设置无效状态。</p>
      <div class="bs-docs-example">
        <ul class="pager">
          <li class="previous disabled"><a href="#">&larr; 过去的</a></li>
          <li class="next"><a href="#">更新的 &rarr;</a></li>
        </ul>
      </div>
<pre class="prettyprint linenums">
&lt;ul class="pager"&gt;
&lt;li class="previous disabled"&gt;
&lt;a href="#"&gt;&amp;larr; 过去的&lt;/a&gt;
&lt;/li&gt;
...
&lt;/ul&gt;
</pre>

    </section>



    <!-- Labels and badges
    ================================================== -->
    <section id="labels-badges">
      <div class="page-header">
        <h1 title="Labels and badges">标签及标记</h1>
      </div>
      <h3>标签 <small>标签和注释文字</small></h3>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th title="Labels">标签</th>
            <th title="Markup">代码</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <span class="label" title="Default">默认</span>
            </td>
            <td>
              <code>&lt;span class="label"&gt;默认&lt;/span&gt;</code>
            </td>
          </tr>
          <tr>
            <td>
              <span class="label label-success" title="Success">成功</span>
            </td>
            <td>
              <code>&lt;span class="label label-success"&gt;成功&lt;/span&gt;</code>
            </td>
          </tr>
          <tr>
            <td>
              <span class="label label-warning" title="Warning">警告</span>
            </td>
            <td>
              <code>&lt;span class="label label-warning"&gt;警告&lt;/span&gt;</code>
            </td>
          </tr>
          <tr>
            <td>
              <span class="label label-important" title="Important">重要</span>
            </td>
            <td>
              <code>&lt;span class="label label-important"&gt;重要&lt;/span&gt;</code>
            </td>
          </tr>
          <tr>
            <td>
              <span class="label label-info" title="Info">信息</span>
            </td>
            <td>
              <code>&lt;span class="label label-info"&gt;信息&lt;/span&gt;</code>
            </td>
          </tr>
          <tr>
            <td>
              <span class="label label-inverse" title="Inverse">相反</span>
            </td>
            <td>
              <code>&lt;span class="label label-inverse"&gt;相反&lt;/span&gt;</code>
            </td>
          </tr>
        </tbody>
      </table>

      <h3 title="Badges">标记 <small>标记信息、未完成任务、未读信息等</small></h3>
      <p>用来显示指示信息或标识某某数量(未完成任务、未读信息等)的简洁小组件。在CRM中往往用在任务处理列表或消息提醒上。</p>
	  <h3>可用的类</h3>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th title="Name">名称</th>
            <th title="Example">例子</th>
            <th title="Markup">代码</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              默认
            </td>
            <td>
              <span class="badge">1</span>
            </td>
            <td>
              <code>&lt;span class="badge"&gt;1&lt;/span&gt;</code>
            </td>
          </tr>
          <tr>
            <td>
              成功
            </td>
            <td>
              <span class="badge badge-success">2</span>
            </td>
            <td>
              <code>&lt;span class="badge badge-success"&gt;2&lt;/span&gt;</code>
            </td>
          </tr>
          <tr>
            <td>
              警告
            </td>
            <td>
              <span class="badge badge-warning">4</span>
            </td>
            <td>
              <code>&lt;span class="badge badge-warning"&gt;4&lt;/span&gt;</code>
            </td>
          </tr>
          <tr>
            <td>
              重要
            </td>
            <td>
              <span class="badge badge-important">6</span>
            </td>
            <td>
              <code>&lt;span class="badge badge-important"&gt;6&lt;/span&gt;</code>
            </td>
          </tr>
          <tr>
            <td>
              信息
            </td>
            <td>
              <span class="badge badge-info">8</span>
            </td>
            <td>
              <code>&lt;span class="badge badge-info"&gt;8&lt;/span&gt;</code>
            </td>
          </tr>
          <tr>
            <td>
              相反
            </td>
            <td>
              <span class="badge badge-inverse">10</span>
            </td>
            <td>
              <code>&lt;span class="badge badge-inverse"&gt;10&lt;/span&gt;</code>
            </td>
          </tr>
        </tbody>
      </table>
	  
	  <h3>Easily collapsible</h3>
	  <p>For easy implementation, labels and badges will simply collapse (via CSS's <code>:empty</code> selector) when no content exists within.</p>

    </section>



    <!-- Typographic components
    ================================================== -->
    <section id="typography">
      <div class="page-header">
        <h1 title="Typographic components">排版组件 <small>用以分割内容的页标题和主角单元</small></h1>
      </div>

      <h2 title="Hero unit">主角单元</h2>
      <p title="A lightweight, flexible component to showcase key content on your site. It works well on marketing and content-heavy sites.">这是一个轻巧灵活的组件，可以用在网站中着重展示内容，被称为“Hero unit”/主角单元。适用于市场类或强调内容的网站。</p>
      <div class="bs-docs-example">
        <div class="hero-unit">
          <h1>Hello, world!</h1>
          <p title="This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.">主角单元Hero Unit是一简单的大屏组件，用于增强内容或信息的吸引力</p>
          <p><a class="btn btn-primary btn-large" title="Learn More">了解更多</a></p>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="hero-unit"&gt;
&lt;h1&gt;Heading&lt;/h1&gt;
&lt;p&gt;Tagline&lt;/p&gt;
&lt;p&gt;
&lt;a class="btn btn-primary btn-large"&gt;
  Learn more
&lt;/a&gt;
&lt;/p&gt;
&lt;/div&gt;
</pre>

      <h2 title="Page header">页面标题</h2>
      <p title="A simple shell for an h1 to appropriately space out and segment sections of content on a page. It can utilize the h1's default small, element as well most other components (with additional styles)."><p>相当于一个简单的 <code>h1</code> 外壳，它有适当的留白，以便在页面中分割内容片段。还可以在 <code>h1</code> 内嵌入 <code>small</code>，html元素或是其他组件。</p>
      <div class="bs-docs-example">
        <div class="page-header">
          <h1 title="Example page header  Subtext for header">页面标题的例子 <small>子标题文字</small></h1>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="page-header"&gt;
&lt;h1&gt;Example page header&lt;/h1&gt;
&lt;/div&gt;
</pre>

    </section>




        <!-- Thumbnails
        ================================================== -->
        <section id="thumbnails">
          <div class="page-header">
            <h1 title="Thumbnails Grids of images, videos, text, and more">缩略项 <small>基于栅格的图象，视频，文字等等</small></h1>
          </div>

          <h2 title="Default thumbnails">默认缩略项</h2>
          <p title="By default, Bootstrap's thumbnails are designed to showcase linked images with minimal required markup.">默认情况下，Bootstrap的缩略项使用很少的标记来展示链接图象。</p>
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span3">
                <a href="#" class="thumbnail">
                  <img data-src="holder.js/260x180" alt="">
                </a>
              </li>
              <li class="span3">
                <a href="#" class="thumbnail">
                  <img data-src="holder.js/260x180" alt="">
                </a>
              </li>
              <li class="span3">
                <a href="#" class="thumbnail">
                  <img data-src="holder.js/260x180" alt="">
                </a>
              </li>
              <li class="span3">
                <a href="#" class="thumbnail">
                  <img data-src="holder.js/260x180" alt="">
                </a>
              </li>
            </ul>
          </div>

          <h2 title="Highly customizable">高可定制</h2>
          <p title="With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.">使用少量其他标记就可以在缩略项中添加任何一种HTML内容，比如标题，段落，或按钮。</p>
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span4">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="">
                  <div class="caption">
                    <h3 title="Thumbnail label">缩略项标签</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a href="#" class="btn btn-primary">动作</a> <a href="#" class="btn">动作</a></p>
                  </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="">
                  <div class="caption">
                    <h3 title="Thumbnail label">缩略项标签</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a href="#" class="btn btn-primary">动作</a> <a href="#" class="btn">动作</a></p>
                  </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="">
                  <div class="caption">
                    <h3 title="Thumbnail label">缩略项标签</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a href="#" class="btn btn-primary">动作</a> <a href="#" class="btn">动作</a></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>

          <h3 title="Why use thumbnails"></h3>
          <p title="Thumbnails (previously .media-grid up until v1.4) are great for grids of photos or videos, image search results, retail products, portfolios, and much more. They can be links or static content.">缩略项（1.4版之前使用 <code>.media-grid</code> ）适用于栅格化的图片和视频，图片搜索结果，零售产品，文件夹等等。缩略项可以是链接，也可以是静态内容。</p>

          <h3 title="Simple, flexible markup">简洁灵活的代码</h3>
          <p title="Thumbnail markup is simple&mdash;a ul with any number of li elements is all that is required. It's also super flexible, allowing for any type of content with just a bit more markup to wrap your contents.">缩略项标记既简单又灵活—只须用一个 <code>ul</code> 嵌套多个 <code>li</code> 元素。缩略项内容可以是任何一种HTML内容，只须少许标记。</p>

          <h3 title="Uses grid column sizes">使用栅格列确定大小</h3>
          <p title="Lastly, the thumbnails component uses existing grid system classes&mdash;like .span2 or .span3—for control of thumbnail dimensions.">新版本中，缩略项组件使用栅格类—诸如 <code>.span2</code> 或 <code>.span3</code> —确定缩略项的尺寸。</p>

          <h2 title="Markup">代码</h2>
          <p title="As mentioned previously, the required markup for thumbnails is light and straightforward. Here's a look at the default setup for linked images:">正如之前所提到的，缩略项所需的标记是很少的。下面就是一个 <strong>带链接图象</strong> 的默认设置：</p>
<pre class="prettyprint linenums">
&lt;ul class="thumbnails"&gt;
  &lt;li class="span4"&gt;
    &lt;a href="#" class="thumbnail"&gt;
      &lt;img data-src="holder.js/300x200" alt=""&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  ...
&lt;/ul&gt;
</pre>
          <p title="For custom HTML content in thumbnails, the markup changes slightly. To allow block level content anywhere, we swap the <a> for a <div> like so:">缩略项中的HTML内容仅须更改少许标记。将 <code>&lt;a&gt;</code> 变成 <code>&lt;div&gt;</code> 即可定制块状内容，如下：</p>
<pre class="prettyprint linenums">
&lt;ul class="thumbnails"&gt;
  &lt;li class="span4"&gt;
    &lt;div class="thumbnail"&gt;
      &lt;img data-src="holder.js/300x200" alt=""&gt;
      &lt;h3&gt;Thumbnail label&lt;/h3&gt;
      &lt;p&gt;Thumbnail caption...&lt;/p&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  ...
&lt;/ul&gt;
</pre>

          <h2 title="More examples">更多例子</h2>
          <p title="Explore all your options with the various grid classes available to you. You can also mix and match different sizes.">尝试更多栅格类，混用不同的尺寸。</p>
          <ul class="thumbnails">
            <li class="span4">
              <a href="#" class="thumbnail">
                <img data-src="holder.js/360x270" alt="">
              </a>
            </li>
            <li class="span3">
              <a href="#" class="thumbnail">
                <img data-src="holder.js/260x120" alt="">
              </a>
            </li>
            <li class="span2">
              <a href="#" class="thumbnail">
                <img data-src="holder.js/160x120" alt="">
              </a>
            </li>
            <li class="span3">
              <a href="#" class="thumbnail">
                <img data-src="holder.js/260x120" alt="">
              </a>
            </li>
            <li class="span2">
              <a href="#" class="thumbnail">
                <img data-src="holder.js/160x120" alt="">
              </a>
            </li>
          </ul>

        </section>



    <!-- Alerts
    ================================================== -->
    <section id="alerts">
      <div class="page-header">
        <h1 title="Alerts  Styles for success, warning, and error messages">通知 <small>给成功、警告及错误消息指定样式</small></h1>
      </div>

      <h2 title="Default alert">默认样式</h2>
      <p title="Wrap any text and an optional dismiss button in .alert for a basic warning alert message.">在任意文本和关闭按钮外嵌套 <code>.alert</code> 样式即实现通知消息的基类，无需嵌套p标签。</p>
      <div class="bs-docs-example">
        <div class="alert" title="Warning!  Best check yo self, you're not looking too good.">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>警告!</strong> 最好检查一下，你看起来不是很好。
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="alert"&gt;
&lt;button type="button" class="close" data-dismiss="alert"&gt;&times;&lt;/button&gt;
&lt;strong&gt;Warning!&lt;/strong&gt; Best check yo self, you're not looking too good.
&lt;/div&gt;
</pre>

      <h3 title="Dismiss buttons">关闭按钮</h3>
      <p title='Mobile Safari and Mobile Opera browsers, in addition to the data-dismiss="alert" attribute, require an href="#" for the dismissal of alerts when using an &lt;a&gt; tag.'>移动Safari和移动Opera浏览器在使用 <code>&lt;a&gt;</code> 标签时，除了 <code>data-dismiss="alert"</code> 属性外，还要具有 <code>href="#"</code> 属性来支持关闭通知。</p>
      <pre class="prettyprint linenums">&lt;a href="#" class="close" data-dismiss="alert"&gt;&times;&lt;/button&gt;</pre>
      <p title='Alternatively, you may use a &lt;button&gt; element with the data attribute, which we have opted to do for our docs. When using &lt;button&gt;, you must include type="button" or your forms may not submit.'>或者，也可以使用带有data属性的 <code>&lt;button&gt;</code> 元素，在Bootstrap文档中有使用。当使用 <code>&lt;button&gt;</code> 时，必须应用 <code>type="button"</code> 除非你的表单无需提交。</p>
      <pre class="prettyprint linenums">&lt;button type="button" class="close" data-dismiss="alert"&gt;&times;&lt;/button&gt;</pre>

      <h3 title="Dismiss alerts via javascript">与javascript配合良好</h3>
      <p title="Use the alerts jQuery plugin for quick and easy dismissal of alerts.">友好的 <a href="./javascript.html#alerts">jQuery插件</a> 驱动通知消息，方便用户快速地关闭通知。</p>


      <hr class="bs-docs-separator">


      <h2 title="Options">选项</h2>
      <p title="For longer messages, increase the padding on the top and bottom of the alert wrapper by adding .alert-block.">对于较长的信息，对通知添加 <code>.alert-block</code> 样式来增加上下内间距。</p>
      <div class="bs-docs-example">
        <div class="alert alert-block">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h4>Warning!</h4>
          <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="alert alert-block"&gt;
&lt;button type="button" class="close" data-dismiss="alert"&gt;&times;&lt;/button&gt;
&lt;h4&gt;Warning!&lt;/h4&gt;
Best check yo self, you're not...
&lt;/div&gt;
</pre>


      <hr class="bs-docs-separator">


      <h2 title="Contextual alternatives">语境下的强化</h2>
      <p title="Add optional classes to change an alert's connotation.">Add optional classes to change an alert's connotation.</p>

      <h3 title="Error or danger"></h3>
      <div class="bs-docs-example">
        <div class="alert alert-error">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Oh snap!</strong> Change a few things up and try submitting again.
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="alert alert-error"&gt;
...
&lt;/div&gt;
</pre>

      <h3 title="Success">Success</h3>
      <div class="bs-docs-example">
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Well done!</strong> You successfully read this important alert message.
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="alert alert-success"&gt;
...
&lt;/div&gt;
</pre>

      <h3 title="Information">Information</h3>
      <div class="bs-docs-example">
        <div class="alert alert-info">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="alert alert-info"&gt;
...
&lt;/div&gt;
</pre>

    </section>



    <!-- Progress bars
    ================================================== -->
    <section id="progress">
      <div class="page-header">
        <h1 title="Progress bars  For loading, redirecting, or action status">进度条 <small>用于载入，重定向或表示进行中的状态</small></h1>
      </div>

      <h2 title="Examples and markup">示例及代码</h2>

      <h3 title="Basic">基本效果</h3>
      <p title="Default progress bar with a vertical gradient.">默认的垂直渐变进度条。</p>
      <div class="bs-docs-example">
        <div class="progress">
          <div class="bar" style="width: 60%;"></div>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="progress"&gt;
&lt;div class="bar" style="width: 60%;"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>

      <h3 title="Striped">条纹效果</h3>
      <p title="Uses a gradient to create a striped effect. Not availabel in IE7-8.">使用渐变创建条纹进度条（不支持IE7-8）</p>
      <div class="bs-docs-example">
        <div class="progress progress-striped">
          <div class="bar" style="width: 20%;"></div>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="progress progress-striped"&gt;
&lt;div class="bar" style="width: 20%;"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>

      <h3 title="Animated">动画效果</h3>
      <p title="Add .active to .progress-striped top animate the stripes right to left. Not available in all versions of IE.">如果使用 <code>.active</code> ，那么 <code>.progress-striped</code> 导航栏就会呈现自右向左的条纹跑马灯动画效果（不支持IE）。</p>
      <div class="bs-docs-example">
        <div class="progress progress-striped active">
          <div class="bar" style="width: 45%"></div>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="progress progress-striped active"&gt;
&lt;div class="bar" style="width: 40%;"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>

      <h3 title="Stacked">进度划分</h3>
      <p title="Place multiple bars into the same .progress to stack them.">同一个进度条 <code>.progress</code> 内不同的进度划分。</p>
      <div class="bs-docs-example">
        <div class="progress">
          <div class="bar bar-success" style="width: 35%"></div>
          <div class="bar bar-warning" style="width: 20%"></div>
          <div class="bar bar-danger" style="width: 10%"></div>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="progress"&gt;
&lt;div class="bar bar-success" style="width: 35%;"&gt;&lt;/div&gt;
&lt;div class="bar bar-warning" style="width: 20%;"&gt;&lt;/div&gt;
&lt;div class="bar bar-danger" style="width: 10%;"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>


      <hr class="bs-docs-separator">


      <h2 title="Options">选项</h2>

      <h3 title="Additional colors">其他颜色</h3>
      <p title="Progress bars use some of the same button and alert classes for consistent styles.">进度条使用和按钮/警告类相似的样式，提供一致的颜色风格。</p>
      <div class="bs-docs-example">
        <div class="progress progress-info" style="margin-bottom: 9px;">
          <div class="bar" style="width: 20%"></div>
        </div>
        <div class="progress progress-success" style="margin-bottom: 9px;">
          <div class="bar" style="width: 40%"></div>
        </div>
        <div class="progress progress-warning" style="margin-bottom: 9px;">
          <div class="bar" style="width: 60%"></div>
        </div>
        <div class="progress progress-danger">
          <div class="bar" style="width: 80%"></div>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="progress progress-info"&gt;
&lt;div class="bar" style="width: 20%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-success"&gt;
&lt;div class="bar" style="width: 40%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-warning"&gt;
&lt;div class="bar" style="width: 60%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-danger"&gt;
&lt;div class="bar" style="width: 80%"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>

      <h3 title="Striped bars">条纹进度条</h3>
      <p title="Similar to the solid colors, we have varied striped progress bars.">与纯色相似，也可以使用多色的条纹进度条。</p>
      <div class="bs-docs-example">
        <div class="progress progress-info progress-striped" style="margin-bottom: 9px;">
          <div class="bar" style="width: 20%"></div>
        </div>
        <div class="progress progress-success progress-striped" style="margin-bottom: 9px;">
          <div class="bar" style="width: 40%"></div>
        </div>
        <div class="progress progress-warning progress-striped" style="margin-bottom: 9px;">
          <div class="bar" style="width: 60%"></div>
        </div>
        <div class="progress progress-danger progress-striped">
          <div class="bar" style="width: 80%"></div>
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="progress progress-info progress-striped"&gt;
&lt;div class="bar" style="width: 20%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-success progress-striped"&gt;
&lt;div class="bar" style="width: 40%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-warning progress-striped"&gt;
&lt;div class="bar" style="width: 60%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-danger progress-striped"&gt;
&lt;div class="bar" style="width: 80%"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>


      <hr class="bs-docs-separator">


      <h2 title="Browser support">浏览器支持</h2>
      <p title="Progress bars use CSS3 gradients, transitions, and animations to achieve all their effects. These features are not supported in IE7-9 or older versions of Firefox.">进度条使用CSS3渐变/过渡/动画以实现所有效果。IE7到IE9，以及某些老版本的Firefox还不能完全支持这些特性。</p>
      <p title="Versions earlier than Internet Explorer 10 and Opera 12 do not support animations.">目前，IE10和Opera12(不包含这两个)之前的版本不支持动画效果。</p>

    </section>


        <!-- Media object
        ================================================== -->
        <section id="media">
          <div class="page-header">
            <h1 title="Media object">媒体对象</h1>
          </div>
          <p class="lead" title="Abstract object styles for building various types of components (like blog comments, Tweets, etc) that feature a left- or right-aligned image alongside textual content.">创建各种各类的组件(如：博客评论、微博等)，这些混合富文本一般都采用左或右对齐排版结构。</p>

          <h2 title="Default example">默认示例</h2>
          <p title="The default media allow to float a media object (images, video, audio) to the left or right of a content block.">默认情况下，是实现媒体对象（图片、视频、音频）浮动到内容的左侧或右侧。</p>
          <div class="bs-docs-example">
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" data-src="holder.js/64x64">
              </a>
              <div class="media-body">
                <h4 class="media-heading" title="Media heading">媒体标题</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" data-src="holder.js/64x64">
              </a>
              <div class="media-body">
                <h4 class="media-heading" title="Media heading">媒体标题</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                <div class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading" title="Media heading">媒体标题</h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                  </div>
                </div>
              </div>
            </div>
          </div>
<pre class="prettyprint linenums">
&lt;div class="media"&gt;
  &lt;a class="pull-left" href="#"&gt;
    &lt;img class="media-object" data-src="holder.js/64x64"&gt;
  &lt;/a&gt;
  &lt;div class="media-body"&gt;
    &lt;h4 class="media-heading"&gt;媒体标题&lt;/h4&gt;
    ...

    &lt;!-- Nested media object --&gt;
    &lt;div class="media"&gt;
      ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>


          <hr class="bs-docs-separator">


          <h2 title="Medai list">媒体列表</h2>
          <p title="With a bit of extra markup, you can use media inside list (useful for comment threads or articles lists)."></p>
          <div class="bs-docs-example">
            <ul class="media-list">
              <li class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" data-src="holder.js/64x64">
                </a>
                <div class="media-body">
                  <h4 class="media-heading" title="Media heading">媒体标题</h4>
                  <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                  <!-- Nested media object -->
                  <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object" data-src="holder.js/64x64">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading" title="Nested media heading">嵌套的媒体列表</h4>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                      <!-- Nested media object -->
                      <div class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object" data-src="holder.js/64x64">
                        </a>
                        <div class="media-body">
                          <h4 class="media-heading" title="Nested media heading">嵌套的媒体列表</h4>
                          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Nested media object -->
                  <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object" data-src="holder.js/64x64">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading" title="Nested media heading">嵌套的媒体列表</h4>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                    </div>
                  </div>
                </div>
              </li>
              <li class="media">
                <a class="pull-right" href="#">
                  <img class="media-object" data-src="holder.js/64x64">
                </a>
                <div class="media-body">
                  <h4 class="media-heading" title="Media heading">媒体标题</h4>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                </div>
              </li>
            </ul>
          </div>
<pre class="prettyprint linenums">
&lt;ul class="media-list"&gt;
  &lt;li class="media"&gt;
    &lt;a class="pull-left" href="#"&gt;
      &lt;img class="media-object" data-src="holder.js/64x64"&gt;
    &lt;/a&gt;
    &lt;div class="media-body"&gt;
      &lt;h4 class="media-heading"&gt;媒体标题&lt;/h4&gt;
      ...

      &lt;!-- Nested media object --&gt;
      &lt;div class="media"&gt;
        ...
     &lt;/div&gt;
    &lt;/div&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</pre>

</section>



    <!-- Miscellaneous
    ================================================== -->
    <section id="misc">
      <div class="page-header">
        <h1 title="Miscellaneous  Lightweight utility components">杂项 <small>轻量级的工具组件</small></h1>
      </div>

      <h2 title="Wells">消息墙</h2>
      <p title="Use the well as a simple effect on an element to give it an inset effect.">用来给某个元素添加包框效果。</p>
      <div class="bs-docs-example">
        <div class="well" title="Look, I'm in a well!">
			来看呀来看呀，这就是消息墙！
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="well"&gt;
...
&lt;/div&gt;
</pre>
      <h3 title="Optional classes">可选类</h3>
      <p title="Control padding and rounded corners with two optional modifier classes.">有两个可选的修饰符的类，分别控制填充和圆角。</p>
      <div class="bs-docs-example">
        <div class="well well-large">
			来看呀来看呀，这就是消息墙！
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="well well-large"&gt;
...
&lt;/div&gt;
</pre>
      <div class="bs-docs-example">
        <div class="well well-small">
        	来看呀来看呀，这就是消息墙！
        </div>
      </div>
<pre class="prettyprint linenums">
&lt;div class="well well-small"&gt;
...
&lt;/div&gt;
</pre>

      <h2 title="Close icon">关闭图标</h2>
      <p title="Use the generic close icon for dismissing content like modals and alerts.">像对话框和弹出框一样，用常见的叉叉图标关闭内容。</p>
      <div class="bs-docs-example">
        <p><button class="close" style="float: none;">&times;</button></p>
      </div>
      <pre class="prettyprint linenums">&lt;button class="close"&gt;&amp;times;&lt;/button&gt;</pre>
      <p title='iOS devices require an href="#" for click events if you rather use an anchor.'>如果你更喜欢用锚点，那么iOS设备需要有 href="#" 支持click事件。</p>
      <pre class="prettyprint linenums">&lt;a class="close" href="#"&gt;&amp;times;&lt;/a&gt;</pre>

      <h2 title="Helper classes">常用帮助/辅助类</h2>
      <p title="Simple, focused classes for small display or behavior tweaks.">简洁精巧的辅助类对小分辨率或其他操作提供便捷支持。</p>

      <h4>.pull-left</h4>
      <p>Float an element left</p>
<pre class="prettyprint linenums">
class="pull-left"
</pre>
<pre class="prettyprint linenums">
.pull-left {
  float: left;
}
</pre>

      <h4>.pull-right</h4>
      <p>Float an element right</p>
<pre class="prettyprint linenums">
class="pull-right"
</pre>
<pre class="prettyprint linenums">
.pull-right {
  float: right;
}
</pre>

      <h4>.muted</h4>
      <p title="Change an element's color to #999">改变元素内容颜色为#999</p>
<pre class="prettyprint linenums">
class="muted"
</pre>
<pre class="prettyprint linenums">
.muted {
  color: #999;
}
</pre>

      <h4>.clearfix</h4>
      <p title="Clear the float on any element">清除 <code>float</code> 浮动</p>
<pre class="prettyprint linenums">
class="clearfix"
</pre>
<pre class="prettyprint linenums">
.clearfix {
  *zoom: 1;
  &:before,
  &:after {
    display: table;
    content: "";
  }
  &:after {
    clear: both;
  }
}
</pre>

    </section>



  </div>
</div>

</div>


<?php include("common/footer.html");?>