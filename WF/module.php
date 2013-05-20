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
            <li><a href="#tpl">tpl <small>布局模板</small></a></li>
            <li><a href="#dropdown">dropdown <small>下拉菜单</small></a></li>
            
            <li><a href="#table">table <small>表格</small></a></li>
			<li><a href="#btn">btn <small>按钮</small></a></li>
			<li><a href="#btn-group">btn-group <small>按钮组</small></a></li>
            <li><a href="#btn-dropdown">btn-dropdown <small>按钮菜单</small></a></li>
            <li><a href="#form">form <small>表单</small></a></li>
            
            <li><a href="#nav">nav <small>导航</small></a></li>
            <li><a href="#breadcrumb">breadcrumb <small>面包屑</small></a></li>
            <li><a href="#paging">paging <small>分页</small></a></li>
            <li><a href="#label">label/tag <small>标签标记</small></a></li>
            <li><a href="#poptip">poptip <small>提示层</small></a></li>
            <li><a href="#tiptext">tiptext <small>提示文本</small></a></li>
            <li><a href="#tipbox">tipbox <small>提示框</small></a></li>
            <li><a href="#progress">progress <small>进度条</small></a></li>
            <li><a href="#media">media <small>媒体对象</small></a></li>
			<li><a href="#step">step <small>步骤</small></a></li>
			<li><a href="#misc">misc <small>杂项</small></a></li>
        </ul>
	</div> <!-- // div.sidebar -->
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
            
            <div class="docs-example">
                <div class="crumbs">
                    <p>
                        <span>您当前所处的位置：</span>
                        <a href="../">首页</a> &gt; 
                        <a href="../module.php">组件</a> &gt; 
                        面包屑
                    </p>
                </div>
                
            </div>
<pre class="prettyprint linenums">
&lt;div class="crumbs"&gt;
    &lt;p&gt;
        &lt;span&gt;您当前所处的位置：&lt;/span&gt;
        &lt;a href="../"&gt;首页&lt;/a&gt; &amp;gt; 
        &lt;a href="../module.php"&gt;组件&lt;/a&gt; &amp;gt; 
        面包屑
    &lt;/p&gt;
&lt;/div&gt;
</pre>
            <h4>面包屑的作用</h4>
            <ul>
                <li>让用户了解当前所处位置，以及当前页面在整个网站中的位置。</li>
                <li>提供返回各个层级的快速入口，方便用户操作。</li>
                <li>降低跳出率，面包屑路径会是一个诱惑首次访问者在进入一个页面后去浏览这个网站的非常好的方法。</li>
                <li>面包屑有利于网站内链的建设，用面包屑大大增加了网站的内部连接，提高用户体验。</li>
            </ul>
            
        </section>
        
        
        
        <section id="paging">
            <h1>分页</h1>
            <p>实现功能完备的分页组件，扩展辅助js时可实现前端分页。</p>
            <p>事实上一个网站也许只有一两种风格的分页模块，下面列举两种尺寸，两种风格的分页布局供大家参考</p>
            <p>详见：<a href="xOne/paging.html">paging</a></p>
        </section>
        
        
        
        <section id="label">
            <h1>标签标记</h1>
            <h3>标签 <small>标签和注释文字</small></h3>
            <table class="table-info table-full">
                <thead>
                    <tr>
                        <th title="Labels">标签</th>
                        <th title="Markup">代码</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="label" title="Default">默认</span>
                        </td>
                        <td>
                            <code>&lt;span class="label"&gt;默认&lt;/span&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="label label-success" title="Success">成功</span>
                        </td>
                        <td>
                            <code>&lt;span class="label label-success"&gt;成功&lt;/span&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="label label-warning" title="Warning">警告</span>
                        </td>
                        <td>
                            <code>&lt;span class="label label-warning"&gt;警告&lt;/span&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="label label-important" title="Important">重要</span>
                        </td>
                        <td>
                            <code>&lt;span class="label label-important"&gt;重要&lt;/span&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="label label-info" title="Info">信息</span>
                        </td>
                        <td>
                            <code>&lt;span class="label label-info"&gt;信息&lt;/span&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="label label-inverse" title="Inverse">相反</span>
                        </td>
                        <td>
                            <code>&lt;span class="label label-inverse"&gt;相反&lt;/span&gt;</code>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <h3 title="Badges">标记 <small>标记信息、未完成任务、未读信息等</small></h3>
            <p>用来显示指示信息或标识某某数量(未完成任务、未读信息等)的简洁小组件。在CRM中往往用在任务处理列表或消息提醒上。</p>
            <table class="table-info table-full">
                <thead>
                    <tr>
                    <th title="Name">名称</th>
                    <th title="Example">例子</th>
                    <th title="Markup">代码</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            默认
                        </td>
                        <td>
                            <span class="badge">1</span>
                        </td>
                        <td>
                            <code>&lt;span class="badge"&gt;1&lt;/span&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            成功
                        </td>
                        <td>
                            <span class="badge badge-success">2</span>
                        </td>
                        <td>
                            <code>&lt;span class="badge badge-success"&gt;2&lt;/span&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            警告
                        </td>
                        <td>
                            <span class="badge badge-warning">4</span>
                        </td>
                        <td>
                            <code>&lt;span class="badge badge-warning"&gt;4&lt;/span&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            重要
                        </td>
                        <td>
                            <span class="badge badge-important">6</span>
                        </td>
                        <td>
                            <code>&lt;span class="badge badge-important"&gt;6&lt;/span&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            信息
                        </td>
                        <td>
                            <span class="badge badge-info">8</span>
                        </td>
                        <td>
                            <code>&lt;span class="badge badge-info"&gt;8&lt;/span&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            相反
                        </td>
                        <td>
                            <span class="badge badge-inverse">10</span>
                        </td>
                        <td>
                            <code>&lt;span class="badge badge-inverse"&gt;10&lt;/span&gt;</code>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <h3>tag <small>标签</small></h3>
            <div class="docs-example">
                <h4>Intelligent son <small>聪明的儿子</small></h4>
                <p>
                One day, the father lets eight year-old son send a <a href="###" class="tag">letter</a>, the son took the letter , the father then remembered <a class="tag tag-blue" href="###">didn't</a> write the address and addressee's name on the envelope. <br>
                After the son comes back, the father asks him: "You have <a class="tag tag-red" href="###">thrown</a> the letter in the mail box?" <br>
                "Certainly" <br>
                "You have not seen on the envelope not to write the address and the addressee name?" <br>
                "I certainly saw <span class="tag">nothing</span> written on the envelope." <br>
                "Then why you didn't take it back?" <br>
                "I also thought that you do not write the address and the addressee, is for does not want to let me know that you do send the letter to who!" 
                </p>

                <p>之乎者也，<a href="###" class="tag tag-blue">如果</a>用的是中文呢？来点<a href="###" class="tag tag-green">English</a>混排一下。</p>
                
                <p class="f12"><span class="tag tag-blue">来个</span>小字体版的：之乎者也，<a href="###" class="tag">如果</a>用的是中文呢？来点<a href="###" class="tag tag-red">English</a>混排一下。</p>
        	</div>
            
            
            <h3>轻松实现折叠效果</h3>
            <p>当没有任何内容时，可以很方便的将标签和徽章折叠起来（通过CSS的 <code>:empty</code>  选择器）。</p>
            
        </section>
        
        
        
        <section id="poptip">
            <h1>poptip <small>提示层</small></h1>
        	
            <div class="docs-example">
                <div class="ui-box">
                    Little Robert asked his mother for two cents. "What did you do with the money I gave you yesterday?" <br>
                    "I gave it to a poor old woman," he answered. <br>
                    "You're a good boy," said the mother proudly. "Here are two cents more. But why are you so interested in the old woman?" <br>
                    "She is the one who sells the candy."<br>
                </div>
            
            </div>
        
        </section>
        
        
        
        <section id="tiptext">
            <h1>提示文本</h1>
            <p>老版本请参考 <a href="../cndocs/solutions/alerts.html">信息提示框</a></p>
            <p>带各类图标的提示文案，可带有提示箭头。</p>
            <div class="docs-example">
                <p class="ui-tiptext ui-tiptext-message">
                    <i class="ui-tiptext-icon iconfont" title="提示">&#xF046;</i>
                    消息提醒：自行编辑，非系统消息
                </p>

                <p class="ui-tiptext ui-tiptext-error">
                    <i class="ui-tiptext-icon iconfont" title="出错">&#xF045;</i>
                    错误提醒：自行编辑，非系统消息
                </p>

                <p class="ui-tiptext ui-tiptext-warning">
                    <i class="ui-tiptext-icon iconfont" title="警告">&#xF047;</i>
                    警告提醒：自行编辑，非系统消息
                </p>

                <p class="ui-tiptext ui-tiptext-success">
                    <i class="ui-tiptext-icon iconfont" title="成功">&#xF049;</i>
                    成功提醒：自行编辑，非系统消息
                </p>

                <p class="ui-tiptext ui-tiptext-question">
                    <i class="ui-tiptext-icon iconfont" title="疑问">&#xF04A;</i>
                    帮助提醒：自行编辑，非系统消息
                </p>

                <p class="ui-tiptext ui-tiptext-stop">
                    <i class="ui-tiptext-icon iconfont" title="阻止">&#xF048;</i>
                    停止提醒：自行编辑，非系统消息
                </p>

                <p class="ui-tiptext ui-tiptext-wait">
                    <i class="ui-tiptext-icon iconfont" title="等待">&#xF04B;</i>
                    等待提醒：自行编辑，非系统消息
                </p>

            </div>
            
            <div class="docs-example">
                <div class="ui-tiptext-container ui-tiptext-container-message">
                    <p class="ui-tiptext ui-tiptext-message">
                        <i class="ui-tiptext-icon iconfont" title="提示">&#xF046;</i>
                        消息提醒：自行编辑，非系统消息
                    </p>
                    <div class="ui-tiptext-close iconfont">&#xF028;</div>
                </div>
                
                <div class="ui-tiptext-container ui-tiptext-container-error">
                    <p class="ui-tiptext ui-tiptext-error">
                        <i class="ui-tiptext-icon iconfont" title="出错">&#xF045;</i>
                        错误提醒：自行编辑，非系统消息
                    </p>
                </div>
                
                <div class="ui-tiptext-container ui-tiptext-container-warning">
                    <p class="ui-tiptext ui-tiptext-warning">
                        <i class="ui-tiptext-icon iconfont" title="警告">&#xF047;</i>
                        警告提醒：自行编辑，非系统消息
                    </p>
                </div>
                
                <div class="ui-tiptext-container ui-tiptext-container-success">
                    <p class="ui-tiptext ui-tiptext-success">
                        <i class="ui-tiptext-icon iconfont" title="成功">&#xF049;</i>
                        成功提醒：自行编辑，非系统消息
                    </p>
                </div>
                
                <div class="ui-tiptext-container ui-tiptext-container-question">
                    <p class="ui-tiptext ui-tiptext-question">
                        <i class="ui-tiptext-icon iconfont" title="疑问">&#xF04A;</i>
                        帮助提醒：自行编辑，非系统消息
                    </p>
                </div>
                
                <div class="ui-tiptext-container ui-tiptext-container-stop">
                    <p class="ui-tiptext ui-tiptext-stop">
                        <i class="ui-tiptext-icon iconfont" title="阻止">&#xF048;</i>
                        停止提醒：自行编辑，非系统消息
                    </p>
                </div>
                
                <div class="ui-tiptext-container ui-tiptext-container-wait">
                    <p class="ui-tiptext ui-tiptext-wait">
                        <i class="ui-tiptext-icon iconfont" title="等待">&#xF04B;</i>
                        等待提醒：自行编辑，非系统消息
                    </p>
                </div>
                
                <span class="ui-tiptext-container ui-tiptext-container-message ib">
                    <span class="ui-tiptext ui-tiptext-message">
                        <i class="ui-tiptext-icon iconfont" title="提示">&#xF046;</i>
                        消息提醒：自行编辑，非系统消息
                    </span>
                </span>
                
                <div class="ui-tiptext-container ui-tiptext-container-message">
                    <div class="ui-tiptext-arrow ui-tiptext-arrowup">
                        <em>◆</em>
                        <span>◆</span>
                    </div>
                    <p class="ui-tiptext ui-tiptext-message">
                        <i class="ui-tiptext-icon iconfont" title="提示">&#xF046;</i>
                        消息提醒：自行编辑，非系统消息
                    </p>
                </div>
                
                <div class="ui-tiptext-container ui-tiptext-container-message">
                    <div class="ui-tiptext-arrow ui-tiptext-arrowdown">
                        <em>◆</em>
                        <span>◆</span>
                    </div>
                    <p class="ui-tiptext ui-tiptext-message">
                        <i class="ui-tiptext-icon iconfont" title="提示">&#xF046;</i>
                        消息提醒：自行编辑，非系统消息
                    </p>
                </div>
                
                <div class="ui-tiptext-container ui-tiptext-container-message">
                    <div class="ui-tiptext-arrow ui-tiptext-arrowleft">
                        <em>◆</em>
                        <span>◆</span>
                    </div>
                    <p class="ui-tiptext ui-tiptext-message">
                        <i class="ui-tiptext-icon iconfont" title="提示">&#xF046;</i>
                        消息提醒：自行编辑，非系统消息
                    </p>
                </div>
                
            </div>
        </section>
        
        
        
        <section id="tipbox">
            <h1>提示框</h1>
            
            
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
        
        
        
        <?php include("common/comment.html");?>
	</div> <!-- // div.main -->
</div>

<?php include("common/footer.html");?>
</body>
</html>