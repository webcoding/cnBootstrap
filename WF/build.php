<?php $page = "build" ?>
<?php $title="创建组件模块"?>
<?php $description = "本项目基于cnBootstrap开源项目创建，致力于前端快捷开发！" ?>
<?php include("./common/meta.php"); ?>
</head>
<body>
<?php include("./common/header.php"); ?>

<div class="wrap">
	<div class="sidebar">
		<ul class="nav none">
			<li><a href="#howtobuild">如何创建组件模块</a></li>
			<li><a href="#">注意事项</a></li>
		</ul>
	</div>
    
	<div class="main">
        <section id="howtobuild">
            <h1>如何创建组件模块</h1>
            <p>对于项目或页面中重复使用的区块，都可以制作成组件模块，但为了以后的维护及使用，需要遵守以下法则制作：</p>
            <ul>
            	<li>布局结构要么已固定要么就要具备一定的扩展性</li>
                <li>所对应的CSS样式必须要按照CSS规范书写</li>
                <li>要保证其独立性与兼容性</li>
            </ul>
        </section>
        
    </div>
    
</div>

<?php include("common/footer.html");?>
</body>
</html>