<?php $page = "getting" ?>
<?php $title="Getting Started"?>
<?php $description = "" ?>
<?php include("./templates/header.php"); ?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1 title="Getting started">概述</h1>
    <p class="lead" title="Overview of the project, its contents, and how to get started with a simple template.">项目的概述、内容，以及如何开始使用一个简单的模板。</p>
  </div>
</header>


<div class="container">

<!-- Docs nav
================================================== -->
<div class="row">
  <div class="span3 bs-docs-sidebar">
    <ul class="nav nav-list bs-docs-sidenav">
      <li><a href="#download-bootstrap" title="Download"><i class="icon-chevron-right"></i> 下载</a></li>
      <li><a href="#file-structure" title="File structure"><i class="icon-chevron-right"></i> 文件结构</a></li>
      <li><a href="#contents" title="What's included"><i class="icon-chevron-right"></i> 包括哪些内容</a></li>
      <li><a href="#html-template" title="HTML template"><i class="icon-chevron-right"></i> HTML模版</a></li>
      <li><a href="#examples" title="Examples"><i class="icon-chevron-right"></i> 实例</a></li>
      <li><a href="#what-next" title="What next?"><i class="icon-chevron-right"></i> 接下来是什么?</a></li>
    </ul>
  </div>
  <div class="span9">



    <!-- Download
    ================================================== -->
    <section id="download-bootstrap">
      <div class="page-header">
        <h1>1. 下载</h1>
      </div>
      <p class="lead" title="Before downloading, be sure to have a code editor (we recommend Sublime Text 2) and some working knowledge of HTML and CSS. We won't walk through the source files here, but they are available for download. We'll focus on getting started with the compiled Bootstrap files.">在下载之前，请你确保有一个代码编辑器(我们推荐 <a href="http://sublimetext.com/2">Sublime Text 2</a>)并且准备了HTMl和CSS的相关知识。我们不能直接在这里修改源代码，但是提供它们的下载。现在我们就可以专注于编译Bootstrap文件了。</p>

      <div class="row-fluid">
        <div class="span6">
          <h2 title="Download compiled">下载编译</h2>
          <p title="Fastest way to get started: get the compiled and minified versions of our CSS, JS, and images. No docs or original source files."><strong>开始的最快方式：</strong> 包含编译后并且压缩过的CSS、JS以及图片。这里没有文档及原始文件。</p>
          <p><a class="btn btn-large btn-primary" href="assets/bootstrap.zip" >下载 Bootstrap</a></p>
        </div>
        <div class="span6">
          <h2 title="Download source">下载源码</h2>
          <p title="Get the original files for all CSS and JavaScript, along with a local copy of the docs by downloading the latest version directly from GitHub.">从GitHub上直接下载最新的版本，包含所有的CSS和JavaScript的原始文件，以及文档的本地副本。</p>
          <p><a class="btn btn-large" href="https://github.com/twitter/bootstrap/zipball/master" >下载 Bootstrap 源码</a></p>
        </div>
      </div>
    </section>



    <!-- File structure
    ================================================== -->
    <section id="file-structure">
      <div class="page-header">
        <h1>2. 文件结构</h1>
      </div>
      <p class="lead" title="Within the download you'll find the following file structure and contents, logically grouping common assets and providing both compiled and minified variations.">你会发现下载文件对文档结构和内容都进行了逻辑划分，并提供编译版和压缩版。</p>
      <p title="Once downloaded, unzip the compressed folder to see the structure of (the compiled) Bootstrap. You'll see something like this:">下载完成后，解压文件夹便会看到Bootstrap的结构。你会看到下面的结构：</p>
<pre class="prettyprint">
bootstrap/
├── css/
│   ├── bootstrap.css
│   ├── bootstrap.min.css
├── js/
│   ├── bootstrap.js
│   ├── bootstrap.min.js
├── img/
│   ├── glyphicons-halflings.png
│   ├── glyphicons-halflings-white.png
└── README.md
</pre>
      <p title="This is the most basic form of Bootstrap: compiled files for quick drop-in usage in nearly any web project. We provide compiled CSS and JS (bootstrap.*), as well as compiled and minified CSS and JS (bootstrap.min.*). The image files are compressed using ImageOptim, a Mac app for compressing PNGs.">l这是最基本的Bootstrap结构：编译后的文件非常精简并使用在几乎所有的Web项目中。我们提供编译的CSS和Js(<code>bootstrap.*</code>)以及编译后压缩过的版本(<code>bootstrap.min.*</code>)。图片文件使用的是<a href="http://imageoptim.com/">ImageOptim</a>——一个专门压缩PNG图片的Mac应用。</p>
      <p title="Please note that all JavaScript plugins require jQuery to be included.">请注意所有的JavaScript插件的使用都需要引用jQuery框架。</p>
	  <h3>写在前面的话：</h3>
      <p>以上是bootstrap的结构，但是也许你不想一下子全部引用进来，比如bootstrap.css，那怎么办呢，所以你要去细分，让这个NB的项目具有更强的组合性，Bootstrap Customize做了这件事，但是具体如何去用该如何避免一些冲突，这里Bootstrap缺少了详尽的注释，类似于开发文档一样的，就像我之前整理的一份css reset文档，详尽描述了各种reset元素的取舍（以及为什么），这样一来就不仅仅是使用这么一个NB项目，而是知道这个项目为什么这么做，从底层的一个小小的代码就知道为什么，那对前端开发者来说绝对是福音啊！并且也要让bootstrap兼容IE6才行啊，进行细分再研究其中的相关取舍原因，这第一件事就是结构划分，下面看看规划样本（这里面甚多都是最基础的文件命名，为了避免引用中的冲突，可在文件前添加自定义前缀（ori-）以示同一系列结构文件，同时区别于其他文件结构）</p>
      <p>这不是新作一个项目，而是研究Bootstrap为何如此设计，并引进新的技术到此中来！（也不你也想做整理一整套的网站架构所需的模块-html/css/js等一整套构造，便于管理和维护的，现在的bootstrap就是这么一套系统，现在我们做的就是去研究它使用它并完善它）</p>
      <p>下面即是基于个人多方总结后的构想方案:</p>
<pre class="prettyprint">
Oricode/
├── css/
│   ├── reset.css     ├── core.css
│   ├── common.css    │
│   ├── pro-common.css│
│   ├── pro-custom.css
├── js/
│   ├── common.js
│   ├── pro-custom.js
├── img/
│   ├── combo.png
│   ├── pro-png24.png
└── README.md
</pre>
	  <p>事实上在使用bootstrap这个框架的时候，仍然遇到不少阻碍，有时和现有网站结构极为不同，导致难以应用。现在我正在个人项目中极力推广这宗架构的使用，是Oricode的方式，这没有bootstrap勾画的更全面，但是结构更明晰机动性也更强了，全以项目为单位来构建，辅以项目名称前缀！通过在项目中的使用，由点及面的推广和使用bootstrap！</p>
      <p>一个好的前端整理方案就是统一样式和自定义样式相分离的，经过和N多的系统相互杂糅，也不会出问题或者很小的问题干扰，这也是 <code>Oricode</code> 的初衷，有了经得起考验的基础代码，上层建筑才更牢固，开发人员也会说：“下面的代码写的那么精简，考虑那么全面，我怎么写也不能随便乱组合代码啊！”由于积极思想的作用，全局规划就起作用了！<code>Oricode</code> 就是为了做这事儿的！</p>
    </section>



    <!-- Contents
    ================================================== -->
    <section id="contents">
      <div class="page-header">
        <h1>3. 包括哪些内容</h1>
      </div>
      <p class="lead" title="Bootstrap comes equipped with HTML, CSS, and JS for all sorts of things, but they can be summarized with a handful of categories visible at the top of the Bootstrap documentation.">Bootstrap 内置了实现各类功能的 HTML, CSS 和 JS，并且它们被归纳到导航条上精简的几个类别下。</p>

      <h2 title="Docs sections">文档部分</h2>
      <h4><a href="./scaffolding.php">框架</a></h4>
      <p title="Global styles for the body to reset type and background, link styles, grid system, and two simple layouts.">设置了网页文档的重定义、背景、栅格系统以及两列简单布局的全局样式</p>
      <h4><a href="./base-css.php">基础CSS</a></h4>
      <p title="Basic styles for common interface components like tabs and pills, navbar, alerts, page headers, and more.">常见的HTML元素，如排版、代码、表格、按钮的样式。此外还包含 <a href="http://glyphicons.com">Glyphicons</a> ——一个完美的Icon小图标集。</p>
      <h4><a href="./components.php">组件</a></h4>
      <p title="Basic styles for common interface components like tabs and pills, navbar, alerts, page headers, and more.">界面界面组件的基本样式，如切换标签、导航条、通知、页头等等。</p>
      <h4><a href="./javascript.php">JavaScript 插件</a></h4>
      <p title="Similar to Components, these JavaScript plugins are interactive components for things like tooltips, popovers, modals, and more.">通用组件，如工具提醒、弹出提醒、对话框等等。</p>

      <h2 title="List of components">组件列表</h2>
      <p title="Together, the Components and JavaScript plugins sections provide the following interface elements:">总之，<strong>组件</strong> 和<strong>JavaScript插件</strong>部分提供了以下界面元素：</p>
      <ul>
        <li>按钮组</li>
        <li>按钮下拉菜单</li>
        <li title="Navigational tabs, pills, and lists">导航选项卡、列表</li>
        <li>导航栏</li>
        <li>标签</li>
        <li>标识</li>
        <li title="Page headers and hero unit">页头</li>
        <li>缩略图</li>
        <li>通知</li>
        <li>进度条</li>
        <li>对话框</li>
        <li>下拉列表</li>
        <li>工具提醒</li>
        <li>弹出提醒</li>
        <li>折叠</li>
        <li>轮播/跑马灯</li>
        <li>输入提醒</li>
      </ul>
      <p title="In future guides, we may walk through these components individually in more detail. Until then, look for each of these in the documentation for information on how to utilize and customize them.">在未来的发展中，我们可能会对个别的组件实现更多的细节。在此之前，文档中仅仅介绍如何利用它们进行自定义设置。</p>
    </section>



    <!-- HTML template
    ================================================== -->
    <section id="html-template">
      <div class="page-header">
        <h1>4. 基本的HTML模板</h1>
      </div>
      <p class="lead" title="With a brief intro into the contents out of the way, we can focus on putting Bootstrap to use. To do that, we'll utilize a basic HTML template that includes everything we mentioned in the File structure.">作为一个简短的文档介绍，我们可以集中精力去使用Bootstrap。要做到这一点，我们将利用一个基本的HTML模板，其中包括我们所需要的<a href="#file-structure">文件结构</a>。</p>
      <p title="Now, here's a look at a typical HTML file:">现在，我们就来看一个<strong>典型的HTML文件</strong>：</p>
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
      <p title="To make this a Bootstrapped template, just include the appropriate CSS and JS files:">要使用这个 <strong>Bootstrap模版</strong>，只需要包含相应的CSS和JS文件：</p>
<pre class="prettyprint linenums">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Bootstrap 101 Template&lt;/title&gt;
&lt;!-- Bootstrap --&gt;
&lt;link href="css/bootstrap.min.css" rel="stylesheet" media="screen"&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Hello, world!&lt;/h1&gt;
&lt;script src="http://code.jquery.com/jquery-latest.js"&gt;&lt;/script&gt;
&lt;script src="js/bootstrap.min.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
      <p title="And you're set! With those two files added, you can begin to develop any site or application with Bootstrap."><strong>设置完毕！</strong> 引入这两个文件后，你就可以用Bootstrap开始开发任意网站或应用程序了。</p>
    </section>



    <!-- Examples
    ================================================== -->
    <section id="examples">
      <div class="page-header">
        <h1>5. 实例</h1>
      </div>
      <p class="lead" title="Move beyond the base template with a few example layouts. We encourage folks to iterate on these examples and not simply use them as an end result.">在基础模版上进行创新实现的一些布局示例。我们鼓励人们去创新这些示例而不是仅仅简单的使用这些例子或将其作为最终的效果来用。</p>
      <ul class="thumbnails bootstrap-examples">
        <li class="span3">
          <a class="thumbnail" href="examples/starter-template.html">
            <img src="assets/img/examples/bootstrap-example-starter.jpg" alt="">
          </a>
          <h4 title="Starter template">入门模板</h4>
          <p title="A barebones HTML document with all the Bootstrap CSS and JavaScript included.">包含了Bootstrap所有的CSS和JS文件的标准HTML文档。</p>
        </li>
        <li class="span3">
          <a class="thumbnail" href="examples/hero.html">
            <img src="assets/img/examples/bootstrap-example-hero.jpg" alt="">
          </a>
          <h4 title="Basic marketing site">基本的营销型网站</h4>
          <p title="Featuring a hero unit for a primary message and three supporting elements.">设置有一个主要显示区和三个次内容显示区。</p>
        </li>
        <li class="span3">
          <a class="thumbnail" href="examples/fluid.html">
            <img src="assets/img/examples/bootstrap-example-fluid.jpg" alt="">
          </a>
          <h4 title="Fluid layout">流体布局</h4>
          <p title="Uses our new responsive, fluid grid system to create a seamless liquid layout.">使用新的响应式布局、流体栅格系统创建的一个无缝的流体布局。</p>
        </li>

        <li class="span3">
          <a class="thumbnail" href="examples/marketing-narrow.html">
            <img src="assets/img/examples/bootstrap-example-marketing-narrow.png" alt="">
          </a>
          <h4 title="Narrow marketing">小型营销</h4>
          <p title="Slim, lightweight marketing template for small projects or teams.">规模较小的项目或团队的营销模板。</p>
        </li>
        <li class="span3">
          <a class="thumbnail" href="examples/signin.html">
            <img src="assets/img/examples/bootstrap-example-signin.png" alt="">
          </a>
          <h4 title="Sign in">登陆界面</h4>
          <p title="Barebones sign in form with custom, larger form controls and a flexible layout.">标准的登陆框以及自定义的标志，能更大程度的控制及灵活的布局。</p>
        </li>
        <li class="span3">
          <a class="thumbnail" href="examples/sticky-footer.html">
            <img src="assets/img/examples/bootstrap-example-sticky-footer.png" alt="">
          </a>
          <h4 title="Sticky footer">固定页脚</h4>
          <p title="Pin a fixed-height footer to the bottom of the user's viewport.">固定页脚始终位于浏览器窗口的最底部。</p>
        </li>

        <li class="span3">
          <a class="thumbnail" href="examples/carousel.html">
            <img src="assets/img/examples/bootstrap-example-carousel.png" alt="">
          </a>
          <h4 title="Carousel jumbotron">大屏幕轮播/旋转木马</h4>
          <p title="A more interactive riff on the basic marketing site featuring a prominent carousel.">更具交互性的基本营销网站，具有一个突出的轮播效果。</p>
        </li>
      </ul>
    </section>




    <!-- Next
    ================================================== -->
    <section id="what-next">
      <div class="page-header">
        <h1>接下来是什么？</h1>
      </div>
      <p class="lead" title="Head to the docs for information, examples, and code snippets, or take the next leap and customize Bootstrap for any upcoming project.">去了解文档说明、实例以及代码片段，或者进行直接为即将开展的项目定制Bootstrap。</p>
      <a class="btn btn-large btn-primary" href="./scaffolding.php" >访问Bootstrap文档</a>
      <a class="btn btn-large" href="./customize.php" style="margin-left: 5px;" >定制Bootstrap</a>
    </section>




  </div>
</div>

</div>



<?php include("common/footer.html");?>