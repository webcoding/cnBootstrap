<?php $page = "home" ?>
<?php $title="Design Pattern Library"?>
<?php $description = "cnBootstrap项目作为研究并学习bootstrap以及实践cnBootstrap之用，由于Bootstrap项目不太适用国内或者说我正在从事的项目，必须要做部分的调整，进一步研究调试cnBootstrap，本项目仍然在Github中开源，便于大家交流讨论及测试应用。" ?>
<?php include("./templates/header.php"); ?>

<div class="jumbotron masthead">
  <div class="container">
    <h1>cnBootstrap</h1>
    <p>Bootstrap中文版——时尚、直观、强大的前端框架<br>使Web开发更快，更容易。</p>
    <p>
      <a href="https://github.com/xiaohan1219/cnBootstrap" class="btn btn-primary btn-large" title="Download Bootstrap">下载 cnBootstrap<small>(v1.0)</small></a>
    </p>
    <ul class="masthead-links">
      <li>
        <a href="https://github.com/xiaohan1219/cnBootstrap" title="Github Progect">访问 GitHub 项目</a>
      </li>
      <li>
        <a href="./getting-started.php#examples" title="Examples">例子</a>
      </li>
      <li>
        <a href="./extend.php" title="Extend">扩展</a>
      </li>
      <li>
        Version 1.0 base on TB v2.2.1
      </li>
	  <li>
	  	<a href="./bugs-and-fixed.php" title="Browser compatibility reproduce the bug and solution">Bugs and Fixed</a>
	  </li>
    </ul>
  </div>
</div>
<div class="bs-docs-social">
  <div class="container">
    <ul class="bs-docs-social-buttons">
      <li>
        <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=xiaohan1219&repo=cnBootstrap&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="100px" height="20px" style="vertical-align: middle;"></iframe>
      </li>
      <li>
        <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=xiaohan1219&repo=cnBootstrap&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="98px" height="20px" style="vertical-align: middle;"></iframe>
      </li>
      <li class="follow-btn">
        <a href="https://github.com/xiaohan1219/cnBootstrap" class="twitter-follow-button" data-link-color="#0069D6" data-show-count="true">Follow @cnBootstrap</a>
      </li>
      <li class="tweet-btn">
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="https://github.com/xiaohan1219/cnBootstrap" data-count="horizontal" data-via="twbootstrap" data-related="mdo:Creator of Twitter Bootstrap">Tweet</a>
      </li>
    </ul>
  </div>
</div>
<div class="container">

  <div class="marketing">

    <h1 title="Introducing Bootstrap.">Bootstrap简介</h1>
    <p class="marketing-byline" title="Need reasons to love Bootstrap? Look no further.">爱上Bootstrap需要理由么？无需观望</p>

    <div class="row-fluid">
      <div class="span4">
        <img src="assets/img/bs-docs-twitter-github.png">
        <h2>由匠人建 为匠人用</h2>
        <p>由 Twitter 大神<a href="http://twitter.com/mdo">@mdo</a> and <a href="http://twitter.com/fat">@fat</a>创建, Bootstrap 使用 <a href="http://lesscss.org">LESS CSS</a>, 通过 <a href="http://nodejs.org">Node</a> 编译, 在 <a href="http://github.com">GitHub</a> 网站上进行管理维护并不断完善。</p>
      </div>
      <div class="span4">
        <img src="assets/img/bs-docs-responsive-illustrations.png">
        <h2 title="Made for everyone.">适合于每一个人</h2>
        <p title="Bootstrap was made to not only look and behave great in the latest desktop browsers (as well as IE7!), but in tablet and smartphone browsers via responsive CSS as well.">Bootstrap 不仅仅在主流浏览器表现卓越 (设置包括IE7), 并且通过 <a href="./scaffolding.php#responsive">响应式布局</a> 提供对平板和智能手机的支持。</p>
      </div>
      <div class="span4">
        <img src="assets/img/bs-docs-bootstrap-features.png">
        <h2 title="Packed with features.">功能便携</h2>
        <p title="A 12-column responsive grid, dozens of components, JavaScript plugins, typography, form controls, and even a web-based Customizer to make Bootstrap your own.">12列的响应<a href="./scaffolding.php#grid">栅格布局</a>，众多的组件，<a href="./javascript.php">JavaScript插件</a>，排版，表格控件，甚至可以<a href="./customize.php">基于网络定制自己的Bootstrap</a>。</p>
      </div>
    </div>

    <hr class="soften">

    <h1 title="Built with Bootstrap.">Bootstrap案例</h1>
    <p class="marketing-byline" title="For even more sites built with Bootstrap, visit the unofficial Tumblr or browse the examples.">更多案例请查看 <a href="http://builtwithbootstrap.tumblr.com/" target="_blank">非官方Tumblr站</a> 或 <a href="./getting-started.php#examples">浏览例子</a>。</p>
    <div class="row-fluid">
      <ul class="thumbnails example-sites">
        <li class="span3">
          <a class="thumbnail" href="http://soundready.fm/" target="_blank">
            <img src="assets/img/example-sites/soundready.png" alt="SoundReady.fm">
          </a>
        </li>
        <li class="span3">
          <a class="thumbnail" href="http://kippt.com/" target="_blank">
            <img src="assets/img/example-sites/kippt.png" alt="Kippt">
          </a>
        </li>
        <li class="span3">
          <a class="thumbnail" href="http://www.gathercontent.com/" target="_blank">
            <img src="assets/img/example-sites/gathercontent.png" alt="Gather Content">
          </a>
        </li>
        <li class="span3">
          <a class="thumbnail" href="http://www.jshint.com/" target="_blank">
            <img src="assets/img/example-sites/jshint.png" alt="JS Hint">
          </a>
        </li>
      </ul>
     </div>

  </div>

</div>
<?php include("common/footer.html");?>