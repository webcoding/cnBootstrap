
<!-- Navbar
================================================== -->
<div class="topbar">
    
</div> <!-- //.topbar -->

<!-- 头部\\ -->
<div class="navbar header" role="banner">
    <div class="navbar-inner">
        <div class="wrap">
            <h2 class="hide-clip">主导航</h2>
            <a rel="home" class="brand hide-clip" href="/">WebCoding</a>
            <ul class="nav nav-pills main-nav" role="navigation">
                <li <?php if(isset($page) && $page == 'home') echo 'class="active"' ?>><a href="index.php">首页</a></li>
                <li <?php if(isset($page) && $page == 'framework') echo 'class="active"' ?>><a href="framework.php">基础框架</a></li>
                <li <?php if(isset($page) && $page == 'module') echo 'class="active"' ?>><a href="module.php">组件模块化</a></li>
                <li <?php if(isset($page) && $page == 'javascript') echo 'class="active"' ?>><a href="javascript.php">JavaScript插件</a></li>
                <li <?php if(isset($page) && $page == 'start') echo 'class="active"' ?>><a href="start.php">开始使用</a></li>
                <li <?php if(isset($page) && $page == 'build') echo 'class="active"' ?>><a href="build.php">创建组件模块</a></li>
            	<li class="divider-vertical"></li>
                <li <?php if(isset($page) && $page == 'rule') echo 'class="active"' ?>><a href="rule.php">规范和最佳实践</a></li>
                <li <?php if(isset($page) && $page == 'tool') echo 'class="active"' ?>><a href="tool.php">工具</a></li>
                <li <?php if(isset($page) && $page == 'labs') echo 'class="active"' ?>><a href="labs.php">前端实验室</a></li>
            </ul>
        </div>
    </div>
</div> <!-- //.navbar -->

