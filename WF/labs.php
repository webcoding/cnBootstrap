<?php $page = "labs" ?>
<?php $title="前端实验室"?>
<?php $description = "本项目基于cnBootstrap开源项目创建，致力于前端快捷开发！" ?>
<?php include("./common/meta.php"); ?>
</head>
<body>
<?php include("./common/header.php"); ?>

<div class="wrap">
	<div class="sidebar">
		<ul class="nav none">
			<li><a href="#solution">兼容解决方案</a></li>
			<li><a href="#html5">HTML5探索</a></li>
			<li><a href="#css3">CSS3研究</a></li>
			<li><a href="#jscode">JS代码段</a></li>
		</ul>
	</div>
	<div class="main">
		<section id="solution">
            <h1>兼容解决方案</h1>
            <p class="lead">头痛的问题，我们提前搞定</p>
            <p>详情参看： <a href="../cndocs/solution.php">兼容解决方案</a></p>
        </section>
        
        
        
		<section id="html5">
            <h1>HTML5探索</h1>
            <p>关注HTML5文档，可参看：<a href="http://www.w3.org/html/ig/zh/wiki/HTML5">HTML5</a></p>
        </section>
        
        
        
		<section id="css3">
            <h1>CSS3研究</h1>
            <p>CSS3实现的功能越发强悍了，这个必须关注！</p>
        </section>
        
        
        
		<section id="jscode">
            <h1>JS代码段</h1>
            <p>常用的JS代码段，很有用处，值得收集！</p>
        </section>
	</div>
</div>


<?php include("common/footer.html");?>
</body>
</html>