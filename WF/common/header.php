
<!-- Navbar
================================================== -->
<div class="topbar">
    
</div> <!-- //.topbar -->

<!-- 头部\\ -->
<div class="navbar header" role="banner">
    <div class="navbar-inner">
        <div class="wrap">
            <h2 class="hide-clip">主导航</h2>
            <a rel="home" class="brand hide-clip" href="/">Pandora</a>
            <ul class="nav nav-pills main-nav" role="navigation">
                <li <?php if(isset($page) && $page == 'home') echo 'class="active"' ?>><a href="index.php">首页</a></li>
                <li <?php if(isset($page) && $page == 'framework') echo 'class="active"' ?>><a href="framework.php">基础框架</a></li>
                <li <?php if(isset($page) && $page == 'module') echo 'class="active"' ?>><a href="module.php">组件模块化</a></li>
                <li <?php if(isset($page) && $page == 'javascript') echo 'class="active"' ?>><a href="javascript.php">JavaScript插件</a></li>
                <li <?php if(isset($page) && $page == 'rule') echo 'class="active"' ?>><a href="rule.php">代码规范</a></li>
                <li class="divider-vertical"></li>
                <li <?php if(isset($page) && $page == 'build') echo 'class="active"' ?>><a href="build.php">管理发布</a></li>
                <li <?php if(isset($page) && $page == 'tool') echo 'class="active"' ?>><a href="wheel.php">造好的轮子</a></li>
                <li <?php if(isset($page) && $page == 'labs') echo 'class="active"' ?>><a href="labs.php">前端实验室</a></li>
            </ul>
        </div>
    </div>
</div> <!-- //.navbar -->

