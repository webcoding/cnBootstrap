<?php $page = "skill" ?>
<?php $title="Skill"?>
<?php $description = "" ?>
<?php include("./templates/header.php"); ?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1>Skill And Experience</h1>
        <p class="lead">Skill And Experience list.</p>
    </div>
</header>
<div class="container"> 
    
    <!-- Docs nav
================================================== -->
    <div class="row">
        <div class="span3 bs-docs-sidebar">
            <ul class="nav nav-list bs-docs-sidenav">
                <li><a href="#bugs"><i class="icon-chevron-right"></i> Bugs和解决方案</a></li>
                <li><a href="#skill"><i class="icon-chevron-right"></i> 技巧和经验</a></li>
                <li><a href="#other"><i class="icon-chevron-right"></i> 其他经验</a></li>
            </ul>
        </div>
        <div class="span9"> 
            <!-- Dropdowns
    ================================================== -->
            <section id="skill">
                <div class="page-header">
                    <h1>技巧和经验</h1>
                </div>
                <h2>Skill And Experience <small>CSS技巧和经验集合</small></h2>
                <p class="lead">CSS技巧和经验列表</p>
                <p>点击下拉出详细的解决办法</p>
                <ol>
                    <li><a href="">如何清除图片下方出现几像素的空白间隙？ </a></li>
                    <li><a href="">如何让文本垂直对齐文本输入框？ </a></li>
                    <li><a href="">如何让单行文本在容器内垂直居中？ </a></li>
                    <li><a href="">如何让超链接访问后和访问前的颜色不同且访问后仍保留hover和active效果？ </a></li>
                    <li><a href="">为什么Standard mode下IE无法设置滚动条的颜色？ </a></li>
                    <li><a href="">如何使文本溢出边界不换行强制在一行内显示？ </a></li>
                    <li><a href="">如何使文本溢出边界显示为省略号？ </a></li>
                    <li><a href="">如何使连续的长字符串自动换行？ </a></li>
                    <li><a href="">如何清除浮动？ </a></li>
                    <li><a href="">如何定义鼠标指针的光标形状为手型并兼容所有浏览器？ </a></li>
                    <li><a href="">如何让已知高度的容器在页面中水平垂直居中？ </a></li>
                    <li><a href="">如何让未知尺寸的图片在已知宽高的容器内水平垂直居中？ </a></li>
                    <li><a href="">如何设置span的宽度和高度（即如何设置内联元素的宽高）？ </a></li>
                    <li><a href="">如何给一个元素定义多个不同的css规则？ </a></li>
                    <li><a href="">如何让某个元素充满整个页面？ </a></li>
                    <li><a href="">如何让某个元素距离窗口上右下左4边各10像素？ </a></li>
                    <li><a href="">如何去掉超链接的虚线框？ </a></li>
                    <li><a href="">如何容器透明，内容不透明？ </a></li>
                    <li><a href="">如何让整个页面水平居中？ </a></li>
                    <li><a href="">为什么容器的背景色没显示出来？为什么容器无法自适应内容高度？ </a></li>
                    <li><a href="">如何做1像素细边框的table？ </a></li>
                    <li><a href="">如何使页面文本行距始终保持为n倍字体大小的基调？ </a></li>
                    <li><a href="">标准模式Standard mode和怪异模式Quirks mode下的盒模型区别？ </a></li>
                    <li><a href="">以图换字的几种方法及优劣分析 </a></li>
                    <li><a href="">为什么2个相邻div的margin只有1个生效？ </a></li>
                    <li><a href="">如何在文本框中禁用中文输入法？ </a></li>
                    <li><a href="">如何解决列表中list-style-image不能精准定位的问题？ </a></li>
                    <li><a href="">如何解决伪对象:before和:after在input标签上的怪异表现的问题？ </a></li>
                    <li><a href="">如何解决伪对象:before和:after无法在Chrome,Safari,Opera上定义过渡和动画的问题？ </a></li>
                    <li><a href="">如何让层在falsh上显示？ </a></li>
                    <li><a href="">如何使用标准的方法在页面上插入flash？ </a></li>
                    <li><a href="">如何在点文字时也选中复选框或单选框？ </a></li>
                    <li><a href="">IE下如何对Standard Mode与Quirks Mode进行切换？ </a></li>
                    <li><a href="">如何区别display:none与visibility:hidden？ </a></li>
                    <li><a href="">如何设置IE下的iframe背景透明？ </a></li>
                </ol>
            </section>
            
            <!-- Skill
    ================================================== -->
            <section id="dropdowns">
                <div class="page-header">
                    <h1>Bugs menus</h1>
                </div>
                <h2>Example</h2>
                <p></p>
                <div class="bs-docs-example"> </div>
                <pre class="prettyprint linenums">

</pre>
            </section>
            <!-- Skill list
    ================================================== -->
            <section id="">
                <ol>
                    <li>
                        <h3>如何清除图片下方出现几像素的空白间隙？</h3>
                        <p>方法1：</p>
                        <pre class="prettyprint linenums">
img{display:block;}
</pre>
                        <p>方法2：</p>
                        <pre class="prettyprint linenums">
img{vertical-align:top;}
</pre>
                        <p>除了top值，还可以设置为text-top | middle | bottom | text-bottom，甚至特定的
                            <length>
                            和
                            <percentage>
                            值都可以</p>
                        <p>方法3：</p>
                        <pre class="prettyprint linenums">
#test{font-size:0;line-height:0;}
</pre>
                        <p>#test为img的父元素</p>
                    </li>
                </ol>
            </section>
            
            <!-- Skill
    ================================================== -->
            <section id="dropdowns">
                <div class="page-header">
                    <h1>Bugs menus</h1>
                </div>
                <h2>Example</h2>
                <p></p>
                <div class="bs-docs-example"> </div>
                <pre class="prettyprint linenums">

</pre>
            </section>
            
        </div>
    </div>
</div>
<?php include("common/footer.html");?>