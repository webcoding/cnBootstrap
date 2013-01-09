<?php $page = "solution" ?>
<?php $title="前端解决方案"?>
<?php $description = "全兼容的前端解决方案" ?>
<?php include("./templates/header.php"); ?>

<!-- Masthead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1 title="Guide">兼容解决方案</h1>
    <p class="lead" title="">头痛的问题，我们提前搞定</p>
  </div>
</header>


  <div class="container">
     <!-- <div class="span12">-->
        
	<!-- Overview
	================================================== -->
	<!--
	<section id="overview">
		<div class="page-header">
			<h1>概述</h1>
		</div>
		<p>有时候一个小小的问题，可能需要调试很久或者是每个人遇到都要去调整，那么这都是些什么问题，下面列出了最常用的解决方案，目前仍在规划制作中...</p>
	</section>
	<div class="page-header">
		<h1></h1>
	</div>
	-->
	
	<!-- Solutions
	================================================== -->
	<section id="solutions">
		
		<h3>兼容解决方案 <small>头痛的问题，我们提前搞定</small></h3>
		<p><a href="solutions.html">solutions</a></p>
		<!-- 预添加简洁分类筛选 Todo -->
		
		<ul class="thumbnails case">
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/typo.html"><img src="../solutions/img/default.png" alt="中文排版" ><h4>中文排版</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/center-middle.html"><img src="../solutions/img/center-middle.png" alt="垂直/水平居中" ><h4>水平/垂直居中</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/select-mask.html"><img src="../solutions/img/select-mask.png" alt="IE6 浮层遮盖" ><h4>IE6 浮层遮盖</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/rotate.html"><img src="../solutions/img/rotate.png" alt="跨浏览器翻转" ><h4>跨浏览器翻转</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/remove-outline.html"><img src="../solutions/img/outline.png" alt="" ><h4>去除虚线框</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/position-fixed.html"><img src="../solutions/img/position-fixed.png" alt="IE6 position:fixed" ><h4>IE6 position:fixed</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/pngfix.html"><img src="../solutions/img/png24.png" alt="IE6 PNG 半透明" ><h4>IE6 PNG 半透明</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/placeholder.html"><img src="../solutions/img/placeholder.png" alt="跨浏览器 Placeholder" ><h4>跨浏览器 Placeholder</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/min-max.html"><img src="../solutions/img/min-max.png" alt="IE6 最大/小宽度" ><h4>IE6 最大/小宽度</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/localStorage.html"><img src="../solutions/img/localStorage.png" alt="跨浏览器文本存储" ><h4>跨浏览器文本存储</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/linear-gradient.html"><img src="../solutions/img/linear-gradient.png" alt="跨浏览器线性渐变" ><h4>跨浏览器线性渐变</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/ime-disabled.html"><img src="../solutions/img/ime.png" alt="强制非中文输入法" ><h4>强制非中文输入法</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/ie-z-index-bug.html"><img src="../solutions/img/z-index.png" alt="IE z-index bug" ><h4>IE z-index bug</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/force-wrap.html"><img src="../solutions/img/default.png" alt="文本强制换行" ><h4>文本强制(不)换行</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/font-face.html"><img src="../solutions/img/font-face.jpg" alt="@font-face" ><h4>@font-face</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/float-center.html"><img src="../solutions/img/float-center.png" alt="float:center" ><h4>float:center 居中浮动</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/equal-height-layout.html"><img src="../solutions/img/layout.png" alt="布局等高栏" ><h4>布局等高栏</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/drop-shadow.html"><img src="../solutions/img/box-shadow.png" alt="跨浏览器投影" ><h4>跨浏览器投影</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/custom-file.html"><img src="../solutions/img/upload.png" alt="自定义上传文件样式" ><h4>自定义上传文件样式</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/cross-domain-iframe.html"><img src="../solutions/img/iframe.png" alt="iframe 跨域自适应" ><h4>iframe 跨域自适应</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/cross-browers-copy.html"><img src="../solutions/img/clipboard.png" alt="跨浏览器剪贴功能" ><h4>跨浏览器剪贴功能</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/1px-round-corner.html"><img src="../solutions/img/radius-1px-box.png" alt="一像素圆角" ><h4>一像素圆角</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/detect-character.html"><img src="../solutions/img/default.png" alt="检测字符类型" ><h4>检测字符类型</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/divider.html"><img src="../solutions/img/default.png" alt="分割线" ><h4>分割线</h4></a></li>
			<!--<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/geolocation.html"><img src="../solutions/img/default.png" alt="geolocation 地理定位" ><h4>geolocation 地理定位</h4></a></li>-->
			
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/border.html"><img src="../solutions/img/border.png" alt="" ><h4>border</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/clear-float"><img src="../solutions/img/default.png" alt="" ><h4>清除浮动</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/ellipsis"><img src="../solutions/img/default.png" alt="" ><h4>省略号</h4></a></li>
			
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/radio-checkbox"><img src="../solutions/img/default.png" alt="" ><h4>radio/checkbox</h4></a></li>
			<li class="span2"><a class="thumbnail">what's the next?<h4>敬请期待，佳作马上登场！</h4></a></li>
		</ul>
		
		<h3>组件解决方案 <small>统一规划、批量生产</small></h3>
		<ul class="thumbnails case">
		    <li class="span2"><a class="thumbnail" target="_blank" href="../solutions/pages.html"><img src="../solutions/img/default.png" alt="页码组件" ><h4>页码组件</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/alert.html"><img src="../solutions/img/default.png" alt="通知提醒" ><h4>通知提醒</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="base-css.php#buttons"><img src="../solutions/img/default.png" alt="全CSS按钮" ><h4>全CSS按钮</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/table.html"><img src="../solutions/img/default.png" alt="常用表格" ><h4>常用表格</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/form.html"><img src="../solutions/img/default.png" alt="Form表单" ><h4>Form表单</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/layout"><img src="../solutions/img/default.png" alt="对话框" ><h4>对话框</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/layout"><img src="../solutions/img/default.png" alt="" ><h4>弹出框</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/layout"><img src="../solutions/img/default.png" alt="" ><h4>弹出框</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/layout"><img src="../solutions/img/default.png" alt="" ><h4>布局</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/form"><img src="../solutions/img/default.png" alt="" ><h4>form表单</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/copyhtml"><img src="../solutions/img/default.png" alt="" ><h4>html固定用法</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/imgtext"><img src="../solutions/img/default.png" alt="" ><h4>图文混排</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/itemlist"><img src="../solutions/img/default.png" alt="" ><h4>项目列表</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/newslist"><img src="../solutions/img/default.png" alt="" ><h4>新闻列表</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/tabs"><img src="../solutions/img/default.png" alt="" ><h4>tab标题</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/copyrun"><img src="../solutions/img/default.png" alt="" ><h4>Copy&Run</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/bugs"><img src="../solutions/img/default.png" alt="" ><h4>Bugs列表</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/tools"><img src="../solutions/img/default.png" alt="" ><h4>前端工具</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/css-resource"><img src="../solutions/img/default.png" alt="" ><h4>css资源</h4></a></li>
			
		</ul>
		
		<h3>HTML5/CSS3 解决方案 <small>提升体验、平滑升级</small></h3>
		<ul class="thumbnails case">
		    <li class="span2"><a class="thumbnail" target="_blank" href="../solutions/css3-light-animation.html"><img src="../solutions/img/light.png" alt="CSS3 光影动画" ><h4>CSS3 光影动画</h4></a></li>
		    <li class="span2"><a class="thumbnail" target="_blank" href="../solutions/css3-box-shadow.html"><img src="../solutions/img/default.png" alt="CSS3 阴影特效" ><h4>CSS3 阴影特效</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/html5"><img src="../solutions/img/default.png" alt="" ><h4>HTML5</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/css3-base"><img src="../solutions/img/default.png" alt="" ><h4>css3属性详解</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/css3-btn"><img src="../solutions/img/default.png" alt="" ><h4>CSS3按钮</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/css3-text"><img src="../solutions/img/default.png" alt="" ><h4>CSS3文字特效</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/css3-content"><img src="../solutions/img/default.png" alt="" ><h4>CSS3生成内容</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/box-shadow"><img src="../solutions/img/default.png" alt="" ><h4>CSS3盒子阴影</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/accordion"><img src="../solutions/img/default.png" alt="" ><h4>CSS3 accordion</h4></a></li>
			<li class="span2"><a class="thumbnail" target="_blank" href="../solutions/tabs"><img src="../solutions/img/default.png" alt="" ><h4>CSS3 tabs</h4></a></li>
			<li class="span2"><a class="thumbnail">what's the next?<h4>敬请期待，佳作马上登场！</h4></a></li>
		</ul>
		
		<h3>JS解决方案 <small>经典功能、一锤定音</small></h3>
		<ul class="thumbnails case">
		    <li class="span2"><a class="thumbnail" target="_blank" href="../solutions/sort.html"><img src="../solutions/img/default.png" alt="" ><h4>JS 排序</h4></a></li>
			<li class="span2"><a class="thumbnail">what's the next?<h4>敬请期待，佳作马上登场！</h4></a></li>
		</ul>
	</section>
		
		
		
	    

      </div>
   <!-- </div>-->

</div>



<?php include("common/footer.html");?>