<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?> · Oricode - Twitter Bootstrap</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $description; ?>">

<meta name="author" content="Authors of Bootstrap">
<!--
<link href="assets/css/reset.css" rel="stylesheet">
<link href="assets/css/common.css" rel="stylesheet">
-->
<!-- Le styles -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/docs.css" rel="stylesheet">
<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
<link href="assets/js/jscrollpane/jquery.jscrollpane.css" rel="stylesheet">
<!--<link href="assets/css/icons-pure-css.css" rel="stylesheet">-->
<link href="assets/css/custom.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
<!-- Navbar
================================================== -->

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
			</button>
			<a class="brand" href="./index.php">Bootstrap</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li <?php if(isset($page) && $page == 'home') echo 'class="active"' ?>> <a href="./index.php" title="Home">首页</a> </li>
                    <li <?php if(isset($page) && $page == 'getting') echo 'class="active"' ?>> <a href="./getting-started.php" title="Get started">概述</a> </li>
                    <li <?php if(isset($page) && $page == 'scaffolding') echo 'class="active"' ?>> <a href="./scaffolding.php" title="Scaffolding">框架</a> </li>
                    <li <?php if(isset($page) && $page == 'base-css') echo 'class="active"' ?>> <a href="./base-css.php" title="Base CSS">基础CSS</a> </li>
                    <li <?php if(isset($page) && $page == 'components') echo 'class="active"' ?>> <a href="./components.php" title="Components">组件</a> </li>
                    <li <?php if(isset($page) && $page == 'javascript') echo 'class="active"' ?>> <a href="./javascript.php" title="JavaScript">Javascript插件</a> </li>
                    <li <?php if(isset($page) && $page == 'customize') echo 'class="active"' ?>> <a href="./customize.php" title="Customize">定制</a> </li>
                    <li class="divider-vertical"></li>
                    <li <?php if(isset($page) && $page == 'bugs-fixed') echo 'class="active"' ?>> <a href="./bugs-and-fixed.php" title="Bugs - Fixed">Bugs - Fixed</a> </li>
					<li <?php if(isset($page) && $page == 'standard') echo 'class="active"' ?>> <a href="./standard.php" title="Guide"> 前端规范</a> </li>
					<li <?php if(isset($page) && $page == 'update') echo 'class="active"' ?>> <a href="./guide.php" title="Guide"> 前端进阶</a> </li>
                    <li <?php if(isset($page) && $page == 'project') echo 'class="active"' ?>> <a href="./project.php" title="Projects"> 项目</a> </li>
					<li <?php if(isset($page) && $page == 'update') echo 'class="active"' ?>> <a href="./update-log.php" title="Update log"> 更新日志</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- 
===============================================
===============================================
-------------------- 分割线 --------------------
===============================================
===============================================
-->