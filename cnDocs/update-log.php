<?php $page = "update" ?>
<?php $title="Update log"?>
<?php $description = "" ?>
<?php include("./templates/header.php"); ?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
<div class="container">
<h1>Update and Planning</h1>
<p class="lead">Update log and Planning list.</p>
</div>
</header>


<div class="container">

<!-- Docs nav
================================================== -->
<div class="row">
  <div class="span3 bs-docs-sidebar">
    <ul class="nav nav-list bs-docs-sidenav">
      <li><a href="#update"><i class="icon-chevron-right"></i> Update log</a></li>
      <li><a href="#planning"><i class="icon-chevron-right"></i> Planning</a></li>
    </ul>
  </div>
  <div class="span9">
  	<!-- Update
    ================================================== -->
    <section id="update">
      <div class="page-header">
        <h1>Update</h1>
      </div>、
<!-- <h2>Done list</h2>-->
      <h2>Doing list</h2>
      <p>menu for bugs lists of links. Made interactive with the bugs.</p><ol>
<li><a href="">详细划分结构</a></li> 
<li><a href="">增加Bugs and Fixed</a></li>
</ol>
<!-- <h2>ToDo list</h2>-->
      <h2>合并项目</h2>
      <p>Some project joinin.</p><ol>
<li><a target="_blank" href="https://github.com/blueimp/JavaScript-Load-Image">JavaScript-Load-Image</a></li> 
<li><a target="_blank" href="https://github.com/blueimp/jQuery-File-Upload">jQuery-File-Upload</a></li>
<li><a target="_blank" href="https://github.com/blueimp/Bootstrap-Image-Gallery">Bootstrap-Image-Gallery</a></li>
<li><a target="_blank" href="https://github.com/blueimp/JavaScript-Templates">JavaScript-Templates</a></li>
<li><a target="_blank" href="http://harvesthq.github.com/chosen/" title="Chosen is a JavaScript plugin that makes long, unwieldy select boxes much more user-friendly. It is currently available in both jQuery and Prototype flavors.">Chosen</a></li>
<li><a target="_blank" href="https://github.com/koenpunt/html5-boilerplate" title="A professional front-end template that helps you build fast, robust, adaptable, and future-proof websites."></a>HTML5 Boilerplate</li>
<li><a target="_blank" href=""></a></li>
<li><a target="_blank" href=""></a></li>
<li><a target="_blank" href=""></a></li>
</ol>
<!-- <h2>Doing list</h2>-->
    </section>
	<!-- Planning
    ================================================== -->
    <section id="planning">
      <div class="page-header">
        <h1>Planning</h1>
      </div>
      <p>menu for bugs lists of links. Made interactive with the bugs.</p>
      <ol>
<li><a href="">研究使用SeaJS</a></li> 
<li><a href="">Html模块化引入</a></li>
<li><a href="">js 模板artTemplate的使用</a></li>
</ol>
    </section>

  </div>
</div>

</div>



<?php include("common/footer.html");?>