<?php $page = "home" ?>
<?php $title="前端框架"?>
<?php $description = "本项目基于cnBootstrap开源项目创建，致力于前端快捷开发！" ?>
<?php include("./common/meta.php"); ?>
</head>
<body>
<?php include("./common/header.php"); ?>

<div class="wrap">
	<div class="sidebar">
		<ul class="nav none">
			<li><a href="#overview">概述</a></li>
            <li><a href="#todo">项目规划</a></li>
			<li><a href="#example">一个简单的例子</a></li>
			<li><a href="#start">开始使用</a></li>
			<li><a href="extend.php">扩展</a></li>
		</ul>
	</div>
	<div class="main">
        <section id="overview">
            <h1>前端项目 Pandora</h1>
            <blockquote>
                <p>无论你身在何方处在何时，请记住Pandora的盒子最底下的是希望。<em>「 xiaohan 」 </em></p>
            </blockquote>
            <p> 这项目一路艰辛，借鉴Bootstrap的思想并结合自己的工作想整合一个适合自己当前工作的前端框架，到底被什么绊住了呢，看着日子一天天过，真是揪心啊，AliceUI还是比较给力，这么快新版就出来了，还好我之前已经整理了部分<a href="../cnDocs/solution.php#module">组件解决方案</a>，这里可以直接使用了，曾经的努力虽然少，但还是有些许价值。</p>
            <p>加快设计开发进度吧，咱没有熟悉自动化的编译工具，但是手工作适应自己的开发版还是可以的，努力！加油！！！</p>
            <p>看到人家的项目都有卡通形象，着实比较可爱，我也用一个，咱的就叫做潘多拉-Pandora吧</p>
            <p>潘多拉（Pandora，也译作潘朵拉），希腊神话中火神赫淮斯托斯用粘土做成的地上的第一个女人，作为对普罗米修斯盗火的惩罚送给人类的第一个女人。众神亦加入使她拥有更诱人的魅力。根据大英博物馆所藏的一只白底基里克斯杯（古希腊一种双耳浅口的大酒杯），潘多拉的另一名字是「安妮斯朵拉」（Anesidora），意思为「送上礼物的她」。根据神话，潘多拉打开一个「盒子」（应作坛子，希腊文原作πίθος，πίθοι，英语：）。而现时当提到「潘多拉的盒子」，通常是指潘多拉出于好奇而打开了盒子，释放出人世间的所有邪恶——贪婪、虚无、诽谤、嫉妒、痛苦——当她再盖上盒子时，<b>只剩下希望在里面</b>。</p>
            <p>让我们期待 <strong>Pandora</strong> 吧，也许她最初表现不佳，但毕竟还有希望！</p>
            
            <h3>制作规划</h3>
            <ul>
                <li>修正reset样式的实现，首先是无差异化重设normalize，之后是传统意义上的reset.css效果</li>
                <li>首先确定排版样式，大量的默认排版组合及固定用法 .pd10 .mt10等</li>
                <li>之后是单元组件，专一的组件实现，如button、表单等</li>
                <li>插件工具类，如tooltip，dialog等</li>
                <li>基础样式及扩展前缀，如btn 其外嵌套 metro_style(metro风格) google_style(Google风格)实现不同的风格系统</li>
                <li>自定义字体图标jackey的使用</li>
            </ul>
        </section>
        
        
        
        <section id="todo">
            <h1>项目规划</h1>
            
            <h3>基础</h3>
            <div class="modules">
                <a href="#">normalize.css <small>无差异化</small></a>
                <a href="#">reset.css <small>重设样式</small></a>
                <a href="#">typo.css <small>排版</small></a>
                <a href="#">combo.css <small>组合样式</small></a>
                <a href="#">icon/iconfont <small>图标/字体集</small></a>
                <a href="#">grid <small>栅格系统</small></a>
            </div>
            
            <h3>CSS 组件</h3>
            <div class="modules">
                <a href="#">ui-box <small>区块盒子</small></a>
                <a href="#">list <small>列表</small></a>
                <a href="#">imglist <small>图片列表</small></a>
                <a href="#">imgtext <small>图文混排</small></a>
                <a href="#">tips <small>可操作浮层</small></a>
                <a href="#">table <small>表格</small></a>
                <a href="#">nav <small>导航</small></a>
                <a href="#">topbar <small>顶部导航</small></a>
                <a href="#">breadcrumb <small>面包屑</small></a>
                <a href="#">paging <small>分页</small></a>
                <a href="#">dropdown <small>下拉菜单</small></a>
                <a href="#">btn <small>按钮[组]</small></a>
                <a href="#">form <small>表单</small></a>
                <a href="#">search <small>搜索框</small></a>
                <a href="#">filter <small>类目过滤</small></a>
                <a href="#">label <small>着重标记</small></a>
                <a href="#">counter <small>数字提醒</small></a>
                <a href="#">alert message <small>可操作消息</small></a>
                <a href="#">modal <small>弹出对话框</small></a>
                <a href="#">progress <small>进度条</small></a>
                <a href="#">media <small>媒体对象</small></a>
                <a href="#">step <small>步骤/流程</small></a>
                <a href="#">misc <small>杂项</small></a>
                <a href="#">unit <small>组件单元</small></a>
            </div>
            
            <h3>JavaScript 组件</h3>
            <div class="modules">
                <a href="#">slides <small>图片轮播</small></a>
                <a href="#">imgscoll <small>图片滚动</small></a>
                <a href="#">tiptext <small>浮层提示</small></a>
                <a href="#">countdown <small>倒计时</small></a>
                <a href="#">selectbox <small>下拉选项</small></a>
                <a href="#">dropdown <small>下拉菜单</small></a>
                <a href="#">tab <small>标签切换</small></a>
                <a href="#">sort <small>多维排序</small></a>
                <a href="#">pading <small>分页</small></a>
                <a href="#">modal <small>弹出对话框</small></a>
                <a href="#">stars <small>星星打分</small></a>
                <a href="#">wordcount <small>字数检测</small></a>
                <a href="#">validator <small>表单验证</small></a>
                <a href="#">scrollspy <small>滚动侦听</small></a>
                <a href="#">lightbox <small>图片浏览浮层</small></a>
                <a href="#">linkage <small>联动操作</small></a>
                <a href="#">autocomplete <small>自动完成</small></a>
            </div>
            
            <h3>主要项目页面 DEMO</h3>
            <div class="modules">
                <dl class="dl-hor">
                	<dt>驴妈妈</dt>
                    <dd>
                        <a href="#">index</a>
                    </dd>
                	<dt>定制游</dt>
                    <dd>
                        <a href="#">custom</a>
                        <a href="#">custom-list</a>
                    </dd>
                    <dt>积分商城</dt>
                    <dd>
                        <a href="#">points</a>
                        <a href="#">points-list</a>
                        <a href="#">points-details</a>
                    </dd>
                </dl>
            </div>
            
            
            <h2>工具准备</h2>
            
            <ul>
                <li>Git - 版本控制</li>
                <li>Markdown - 书写文档</li>
                <li>Nodejs - 二期平台</li>
            	<!-- 二期开发
                <li>Spm - 包管理 <small>[二期]</small></li>
            	<li>Nico - 调试&文档 <small>[二期]</small></li>
                <li>Peaches - 雪碧图 <small>[二期]</small></li>
                <li>Stylus - 预编译 <small>[二期]</small></li>
                <li>Stylib - 样式库搭建工具 <small>[二期]</small></li>
                -->
            </ul>
            
        </section>
        
        
        
        <section id="example">
            <h1>一个简单的例子</h1>
            <p>实现一个metro风格的橙色按钮居中显示，仅仅使用预设样式组合即可：</p>
            <div class="docs-example">
                <p class="tc metro_style">
                    <button class="btn btn-orange">居中按钮</button>
                </p>
            </div>
<pre>
&lt;p class="tc metro_style"&gt;
    &lt;button class="btn btn-orange"&gt;居中按钮&lt;/button&gt;
&lt;/p&gt;
</pre>
        </section>
        
        
        
        <section id="start">
            <h1>开始使用</h1>
            <p>本项目已经开始在生产线测试使用，样式文件为core.css，本项目中亦设置N个产品的开发版同步上线调试，供研究使用。</p>
            <p>您可以直接下载release稳定版使用。</p>
        </section>
        
        
	</div>
</div>


<?php include("common/footer.html");?>
</body>
</html>