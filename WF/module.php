<?php $page = "module" ?>
<?php $title="组件模块化"?>
<?php $description = "本项目基于cnBootstrap开源项目创建，致力于前端快捷开发！" ?>
<?php include("./common/meta.php"); ?>
</head>
<body>
<?php include("./common/header.php"); ?>

<div class="wrap">
	<div class="sidebar">
        <ul class="nav none">
            <li><a href="#tpl">tpl <small class="iconfont">布局模板</small></a></li>
            <li><a href="#dropdown">dropdown <small class="iconfont">下拉菜单</small></a></li>
            
            <li><a href="#table">table <small class="iconfont">表格</small></a></li>
			<li><a href="#btn">btn <small class="iconfont">按钮</small></a></li>
			<li><a href="#btn-group">btn-group <small class="iconfont">按钮组</small></a></li>
            <li><a href="#btn-dropdown">btn-dropdown <small class="iconfont">按钮菜单</small></a></li>
            <li><a href="#form">form <small class="iconfont">表单</small></a></li>
            
            <li><a href="#nav">nav <small class="iconfont">导航</small></a></li>
            <li><a href="#breadcrumb">breadcrumb <small class="iconfont">面包屑</small></a></li>
            <li><a href="#paging">paging <small class="iconfont">分页</small></a></li>
            <li><a href="#label">label <small class="iconfont">标签标记</small></a></li>
            <li><a href="#counters">counter <small class="iconfont">数字提醒</small></a></li>
            <li><a href="#alert">alert <small class="iconfont">通知提醒</small></a></li>
            <li><a href="#progress">progress <small class="iconfont">进度条</small></a></li>
            <li><a href="#media">media <small class="iconfont">媒体对象</small></a></li>
			<li><a href="#step">step <small class="iconfont">步骤</small></a></li>
			<li><a href="#misc">misc <small class="iconfont">杂项</small></a></li>
        </ul>
	</div>
	<div class="main">
		<section id="tpl">
            <h1>布局模板</h1>
            <p>最常用的布局结构堪称经典，可以作为布局模板使用——内容盒子，列表，图文混排，图片滚动，下拉菜单等</p>
            <p><strong>注：</strong>经典布局不是指单一的某一种布局，针对不同的风格设计，都有优良的布局经典，敏捷开发无处不在，这里仅就某一类设计浅谈布局实现(@此处实例多是修改BT项目实例或引用lvmama的项目或针对未来需求的预设实现)。</p>
            <p>详情参看： <a href="tpl.php">tpl</a></p>
        </section>
        
        
        
        <section id="table">
            <h1>表格</h1>
            <p>页面中常用的表格，信息展示，布局表格，产品列表，特定功能类。</p>
            <p>详情参看： <a href="xOne/tables.html">tables</a></p>
        </section>
        
        
        
        <section id="btn">
            <h1>按钮</h1>
            <p>集合五种尺寸的按钮，3中类型，四种标签，N*4种风格(默认+metro_style+google_stylr+lv_style)，更可以与图标/字体集组合，能满足大部分的按钮需求。</p>
            <p>详情参看： <a href="xOne/buttons.html">buttons</a></p>
        </section>
        
        
        
        <section id="btn-group">
            <h1>按钮组</h1>
            <p>实现一组功能相关的按钮，如单选按钮组等</p>
            <p>详情参看： <a href="xOne/buttons.html">buttons</a></p>
        </section>
        
        
        
        <section id="btn-dropdown">
            <h1>按钮菜单</h1>
            <p>由按钮组合实现的下拉菜单</p>
            <p>详情参看： <a href="xOne/buttons.html">buttons</a></p>
        </section>
        
        
        
        <section id="form">
            <h1>表单</h1>
            <p>处理表单最头疼的事情莫过于N中不同的排版杂糅在一起，以致于对齐甚至都要单独个性化处理。</p>
            <p>这里总结了两种尺寸下的四种常见form布局方式，支持混合使用，几乎统一了表单的各类布局实现。</p>
            <p>详情参看： <a href="xOne/forms.html">forms</a></p>
        </section>
        
        
        
        <section id="nav">
            <h1>导航</h1>
            <p>顶部导航，侧栏导航等</p>
            <p>详情参看： <a href="xOne/nav.html">Nav</a></p>
        </section>
        
        
        
        <section id="breadcrumb">
            <h1>面包屑</h1>
            <p>此处实现了最常用的三种面包屑导航</p>
            <p>详情参看： <a href="xOne/crumb.html">breadcrumb</a></p>
        </section>
        
        
        
        <section id="paging">
            <h1>分页</h1>
            <p>实现功能完备的分页组件，扩展辅助js时可实现前端分页。</p>
            <p>事实上一个网站也许只有一两种风格的分页模块，下面列举两种尺寸，两种风格的分页布局供大家参考</p>
            <p>详见：<a href="xOne/paging.html">paging</a></p>
        </section>
        
        
        
        <section id="label">
            <h1>标签标记</h1>
        </section>
        
        
        
        <section id="counters">
            <h1>数字提醒</h1>
            <p>某消息/信息的数目提醒</p>
        </section>
        
        
        
        <section id="alert">
            <h1>通知提醒</h1>
        </section>
        
        
        
        <section id="progress">
            <h1>进度条</h1>
            <p>显示某操作进程进度</p>
        </section>
        
        
        
        <section id="media">
            <h1>媒体对象</h1>
            <p>图文混排等</p>
        </section>
        
        
        
        <section id="step">
            <h1>步骤</h1>
            <p>操作步骤的常用布局实现</p>
        </section>
        
        
        
        <section id="misc">
            <h1>杂项</h1>
            <p>消息墙等组件</p>
        </section>
        
	</div>
</div>

<?php include("common/footer.html");?>
</body>
</html>