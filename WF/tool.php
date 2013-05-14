<?php $page = "tool" ?>
<?php $title="工具"?>
<?php $description = "本项目基于cnBootstrap开源项目创建，致力于前端快捷开发！" ?>
<?php include("./common/meta.php"); ?>
</head>
<body>
<?php include("./common/header.php"); ?>

<div class="wrap">
	<div class="sidebar">
		<ul class="nav none">
			<li><a href="#markdown">Markdown</a></li>
			<li><a href="#git">Git</a></li>
			<li><a href="#nodejs">Nodejs</a></li>
		</ul>
	</div>
	<div class="main">
        <section id="overview">
            <h1>造好的轮子</h1>
            <p>这里收集<strong>那些造好的轮子</strong>，具备良好的设计与实现，并方便我们进行快速开发使用的工具</p>
            <p><strong>注：</strong>如果你也知道一些好的轮子，不妨拿出来和大家分享一下!</p>
        </section>
        
        <section id="markdown">
            <h1>Markdown</h1>
            <p>详情请参考：<a href="./xOne/markdown.html">Markdown 语法说明</a></p>
            <p>Markdown 语法的目标是：成为一种适用于网络的<em>书写</em>语言。</p>
            <p>可读性，无论如何，都是最重要的。一份使用 Markdown 格式撰写的文件应该可以直接以纯文本发布，并且看起来不会像是由许多标签或是格式指令所构成。Markdown 语法受到一些既有 text-to-HTML 格式的影响，包括 <a href="http://docutils.sourceforge.net/mirror/setext.html">Setext</a>、<a href="http://www.aaronsw.com/2002/atx/">atx</a>、<a href="http://textism.com/tools/textile/">Textile</a>、<a href="http://docutils.sourceforge.net/rst.html">reStructuredText</a>、<a href="http://www.triptico.com/software/grutatxt.html">Grutatext</a> 和 <a href="http://ettext.taint.org/doc/">EtText</a>，而最大灵感来源其实是纯文本电子邮件的格式。</p>
            <p>Markdown 最适合来书写使用说明、介绍或规范等，通常用于书写 Readme.md</p>
        </section>
        
        
        
        <section id="git">
            <h1>Git</h1>
            <p>详情请参考：<a href="https://github.com/webcoding/useGit">useGit项目</a></p>
        </section>
        
        
        
        <section id="nodejs">
            <h1>Nodejs</h1>
            <p>更多请参考：</p>
            <ul>
            	<li><a href="https://github.com/webcoding/nodejs">nodejs 入门学习</a></li>
            </ul>
        </section>
    </div>
</div>

<?php include("common/footer.html");?>
</body>
</html>