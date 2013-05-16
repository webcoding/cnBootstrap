<?php $page = "Extend" ?>
<?php $title="Extend"?>
<?php $description = "" ?>
<?php include("./templates/header.php"); ?>
<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1 title="Extending Bootstrap">扩展</h1>
    <p class="lead" title="Extend Bootstrap to take advantage of included styles and components, as well as LESS variables and mixins.">BT扩展，充分利用了风格样式和组件以及变量和混合。</p>
  <div>
</header>

  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#built-with-less" title="Built with LESS"><i class="icon-chevron-right"></i> 使用LESS</a></li>
          <li><a href="#compiling" tilte="Compiling Bootstrap"><i class="icon-chevron-right"></i> 编译Bootstrap</a></li>
          <li><a href="#static-assets" title="Use as static assets"><i class="icon-chevron-right"></i> 使用静态资源</a></li>
        </ul>
      </div>
      <div class="span9">



        <!-- BUILT WITH LESS
        ================================================== -->
        <section id="built-with-less">
          <div class="page-header">
            <h1 title="Built with LESS">使用LESS</h1>
          </div>

          <img style="float: right; height: 36px; margin: 10px 20px 20px" src="assets/img/less-logo-large.png" alt="LESS CSS">
          <p class="lead" title="Bootstrap is made with LESS at its core, a dynamic stylesheet language created by our good friend, Alexis Sellier. It makes developing systems-based CSS faster, easier, and more fun.">Bootstrap使用LESS构造核心，LESS是由我们的好友 <a href="http://cloudhead.io">Alexis Sellier</a> 创造的一种动态样本表语言。它让系统底层的CSS开发变得更快捷高效，更有生趣。
      </p>

          <h3 title="Why LESS?">为什么使用LESS？</h3>
          <p title="One of Bootstrap's creators wrote a quick blog post about this, summarized here:">Bootstrap的一个创造者写了一篇关于<a href="http://www.wordsbyf.at/2012/03/08/why-less/">为什么使用LESS</a>的博文，摘要如下：</p>
          <ul>
            <li title="Bootstrap compiles faster ~6x faster with Less compared to Sass">Bootstrap编译速度更快约6倍，相比于Sass。</li>
            <li title="Less is written in JavaScript, making it easier to us to dive in and patch compared to Ruby with Sass.">LESS是写在JavaScript中，使其更容易给调试，相比于Sass用Ruby编译。</li>
            <li title="Less is more; we want to feel like we're writing CSS and making Bootstrap approachable to all.">少即是多即我们想要的感觉，就像我们在编写的CSS且使Bootstrap更平易近人。</li>
          </ul>

          <h3 title="What's included?">包含什么？</h3>
          <p title="As an extension of CSS, LESS includes variables, mixins for reusable snippets of code, operations for simple math, nesting, and even color functions.">做为CSS的扩展，LESS包括变量，可重用代码段的混合，简单的数学操作，内嵌，以及颜色方法等等。</p>

          <h3 title="Learn more">了解更多</h3>
          <p title="Visit the official website at http://lesscss.org to learn more.">详见LESS官网 <a href="http://lesscss.org">http://lesscss.org</a> 。<br>详见LESS中国官网 <a href="http://lesscss.net">http://lesscss.net</a> 。
      </p>
        </section>



        <!-- COMPILING LESS AND BOOTSTRAP
        ================================================== -->
        <section id="compiling">
          <div class="page-header">
            <h1 title="Compiling Bootstrap with Less">使用LESS编译 <small>LESS变量和变量值，以及用法指南</small></h1>
          </div>

          <p class="lead" title="Since our CSS is written with Less and utilizes variables and mixins, it needs to be compiled for final production implementation. Here's how.">由于使用了LESS变量及混入来书写css，所以就需要编译生成到生产环境，这里是怎么实现的：</p>

          <div class="alert alert-info">
            <strong>Note:</strong> If you're submitting a pull request to GitHub with modified CSS, you <strong>must</strong> recompile the CSS via any of these methods.
          </div>

          <h2 title="Tools for compiling">编译工具</h2>

          <h3 title="Command line">命令行</h3>
          <p title="Follow the instructions in the project readme on GitHub for compiling via command line.">按照在GitHub上的 <a href="https://github.com/twitter/bootstrap#developers">项目自述</a>中的说明，通过命令行编译。</p>

          <h3>JavaScript</h3>
          <p><a href="http://lesscss.org/">Download the latest Less.js</a> and include the path to it (and Bootstrap) in the <code>&lt;head&gt;</code>.</p>
<pre class="prettyprint">
&lt;link rel="stylesheet/less" href="/path/to/bootstrap.less"&gt;
&lt;script src="/path/to/less.js"&gt;&lt;/script&gt;
</pre>
          <p>To recompile the .less files, just save them and reload your page. Less.js compiles them and stores them in local storage.</p>

          <h3>Unofficial Mac app</h3>
          <p><a href="http://incident57.com/less/">The unofficial Mac app</a> watches directories of .less files and compiles the code to local files after every save of a watched .less file. If you like, you can toggle preferences in the app for automatic minifying and which directory the compiled files end up in.</p>

          <h3>More apps</h3>
          <h4><a href="http://crunchapp.net/" target="_blank">Crunch</a></h4>
          <p>Crunch is a great looking LESS editor and compiler built on Adobe Air.</p>
          <h4><a href="http://incident57.com/codekit/" target="_blank">CodeKit</a></h4>
          <p>Created by the same guy as the unofficial Mac app, CodeKit is a Mac app that compiles LESS, SASS, Stylus, and CoffeeScript.</p>
          <h4><a href="http://wearekiss.com/simpless" target="_blank">Simpless</a></h4>
          <p>Mac, Linux, and Windows app for drag and drop compiling of LESS files. Plus, the <a href="https://github.com/Paratron/SimpLESS" target="_blank">source code is on GitHub</a>.</p>

        </section>



        <!-- Static assets
        ================================================== -->
        <section id="static-assets">
          <div class="page-header">
            <h1>Use as static assets</h1>
          </div>
          <p class="lead"><a href="./getting-started.html">Quickly start</a> any web project by dropping in the compiled or minified CSS and JS. Layer on custom styles separately for easy upgrades and maintenance moving forward.</p>

          <h3>Setup file structure</h3>
          <p>Download the latest compiled Bootstrap and place into your project. For example, you might have something like this:</p>
<pre>
  <span class="icon-folder-open"></span> app/
      <span class="icon-folder-open"></span> layouts/
      <span class="icon-folder-open"></span> templates/
  <span class="icon-folder-open"></span> public/
      <span class="icon-folder-open"></span> css/
          <span class="icon-file"></span> bootstrap.min.css
      <span class="icon-folder-open"></span> js/
          <span class="icon-file"></span> bootstrap.min.js
      <span class="icon-folder-open"></span> img/
          <span class="icon-file"></span> glyphicons-halflings.png
          <span class="icon-file"></span> glyphicons-halflings-white.png
</pre>

          <h3>Utilize starter template</h3>
          <p>Copy the following base HTML to get started.</p>
<pre class="prettyprint linenums">
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap 101 Template&lt;/title&gt;
    &lt;!-- Bootstrap --&gt;
    &lt;link href="public/css/bootstrap.min.css" rel="stylesheet"&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, world!&lt;/h1&gt;
    &lt;!-- Bootstrap --&gt;
    &lt;script src="public/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

          <h3>Layer on custom code</h3>
          <p>Work in your custom CSS, JS, and more as necessary to make Bootstrap your own with your own separate CSS and JS files.</p>
<pre class="prettyprint linenums">
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap 101 Template&lt;/title&gt;
    &lt;!-- Bootstrap --&gt;
    &lt;link href="public/css/bootstrap.min.css" rel="stylesheet"&gt;
    &lt;!-- Project --&gt;
    &lt;link href="public/css/application.css" rel="stylesheet"&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, world!&lt;/h1&gt;
    &lt;!-- Bootstrap --&gt;
    &lt;script src="public/js/bootstrap.min.js"&gt;&lt;/script&gt;
    &lt;!-- Project --&gt;
    &lt;script src="public/js/application.js"&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

        </section>

      </div>
    </div>

</div>



<?php include("common/footer.html");?>