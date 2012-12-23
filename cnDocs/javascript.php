<?php $page = "javascript" ?>
<?php $title="Javascript"?>
<?php $description = "" ?>
<?php include("./templates/header.php"); ?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead">
  <div class="container">
    <h1>JavaScript</h1>
    <p class="lead" title="Bring Bootstrap's components to life&mdash;now with 13 custom jQuery plugins.">让Bootstrap的组件变得生动—提供了13种 jQuery 组件。
  </div>
</header>

  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#overview" title="Overview"><i class="icon-chevron-right"></i> 概述</a></li>
          <li><a href="#transitions" title="Transitions"><i class="icon-chevron-right"></i> 过渡效果</a></li>
          <li><a href="#modals" title="Modal"><i class="icon-chevron-right"></i> 对话框</a></li>
          <li><a href="#dropdowns" title="Dropdown"><i class="icon-chevron-right"></i> 下拉项</a></li>
          <li><a href="#scrollspy" title="Scrollspy"><i class="icon-chevron-right"></i> 滚动侦听</a></li>
          <li><a href="#tabs" title="Tab"><i class="icon-chevron-right"></i> 切换标签页</a></li>
          <li><a href="#tooltips" title="Tooltip"><i class="icon-chevron-right"></i> 工具提示</a></li>
          <li><a href="#popovers" title="Popover"><i class="icon-chevron-right"></i> 弹出提示</a></li>
          <li><a href="#alerts" title="Alert"><i class="icon-chevron-right"></i> 通知</a></li>
          <li><a href="#buttons" title="Button"><i class="icon-chevron-right"></i> 按钮</a></li>
          <li><a href="#collapse" title="Collapse"><i class="icon-chevron-right"></i> 折叠</a></li>
          <li><a href="#carousel" title="Carousel"><i class="icon-chevron-right"></i> 轮播/跑马灯</a></li>
          <li><a href="#typeahead" title="Typeahead"><i class="icon-chevron-right"></i> 输入提醒</a></li>
          <li><a href="#affix" title="Affix"><i class="icon-chevron-right"></i> 位置控制</a></li>
        </ul>
      </div>
      <div class="span9">


        <!-- Overview
        ================================================== -->
        <section id="overview">
          <div class="page-header">
            <h1>概述</h1>
          </div>

          <h3>Individual or compiled</h3>
          <p title="Plugins can be included individually (though some have required dependencies), or all at once. Both bootstrap.js and bootstrap.min.js contain all plugins in a single file.">插件能够单独使用(虽然有些需要有依赖)或者一次性全部引用进来。<strong>bootstrap.js</strong> 和 <strong>bootstrap.min.js</strong> 都在一个文件中包含了所有的插件。</p>

          <h3 title="Data attributes">数据属性</h3>
          <p title="You can use all Bootstrap plugins purely through the markup API without writing a single line of JavaScript. This is Bootstrap's first class API and should be your first consideration when using a plugin.">你可以通过API标记使用所有的Bootstrap插件，而不必编写一行代码。这是Bootstrap插件最重要的特点，也是你选择使用插件时首要考虑的问题。</p>

          <p title="That said, in some situations it may be desirable to turn this functionality off. Therefore, we also provide the ability to disable the data attribute API by unbinding all events on the body namespaced with `'data-api'`. This looks like this:">这表示，在某些情况下，你可以采取措施关闭其功能。因此，我们还提供禁用数据属性API的功能——通过命名空间data-api取消绑定事件。比如下面这样：
          <pre class="prettyprint linenums">$('body').off('.data-api')</pre>

          <p title="Alternatively, to target a specific plugin, just include the plugin's name as a namespace along with the data-api namespace like this:">另外，针对特定的插件，也可以使用插件名加data-api的形式作为其命名空间，像下面这样：</p>
          <pre class="prettyprint linenums">$('body').off('.alert.data-api')</pre>

          <h3 title="Programmatic API"></h3>
          <p title="We also believe you should be able to use all Bootstrap plugins purely through the JavaScript API. All public APIs are single, chainable methods, and return the collection acted upon.">我们确信，你应该能够通过JavaScript API使用所有的Bootstrap插件。所有的公共API都是单一的，支持链式写法并返回集合以便操作。</p>
          <pre class="prettyprint linenums">$(".btn.danger").button("toggle").addClass("fat")</pre>
          <p title="All methods should accept an optional options object, a string which targets a particular method, or nothing (which initiates a plugin with default behavior):">所有的方法都应该可以接受一个可选参数，一个实现特定方法的字符串或者什么也不设置(启用插件的默认效果)：</p>
<pre class="prettyprint linenums">
$("#myModal").modal()                       // initialized with defaults
$("#myModal").modal({ keyboard: false })   // initialized with no keyboard
$("#myModal").modal('show')                // initializes and invokes show immediately</p>
</pre>
          <p title="Each plugin also exposes its raw constructor on a `Constructor` property: $.fn.popover.Constructor. If you'd like to get a particular plugin instance, retrieve it directly from an element: $('[rel=popover]').data('popover').">Each plugin also exposes its raw constructor on a `Constructor` property: <code>$.fn.popover.Constructor</code>. If you'd like to get a particular plugin instance, retrieve it directly from an element: <code>$('[rel=popover]').data('popover')</code>.</p>
		  
		  <h3 title="No Conflict">解决冲突</h3>
          <p title="Sometimes it is necessary to use Bootstrap plugins with other UI frameworks. In these circumstances,  namespace collisions can occasionally occur. If this happens, you may call .noConflict on the plugin you wish to revert the value of.">有时候必须要Bootstrap和其他Ui框架同时使用。这种情况下，命名空间冲突偶有发生。如果发生这种情况，你可以在插件中调用 <code>.noConflict</code> 以获得你需要恢复的值。</p>

<pre class="prettyprint linenums">
var bootstrapButton = $.fn.button.noConflict() // return $.fn.button to previously assigned value
$.fn.bootstrapBtn = bootstrapButton            // give $().bootstrapBtn the bootstrap functionality
</pre>

          <h3 title="Events">事件</h3>
          <p title="Bootstrap provides custom events for most plugin's unique actions. Generally, these come in an infinitive and past participle form - where the infinitive (ex. show) is triggered at the start of an event, and its past participle form (ex. shown) is trigger on the completion of an action.">Bootstrap在大多数插件中都提供了自定义事件。一般来说，有两种形式——触发事件(如显示)和监听事件(如显示完成时)</p>
          <p title="All infinitive events provide preventDefault functionality. This provides the ability to stop the execution of an action before it starts.">所有的触发事件都提供阻止冒泡(preventDefault)机制。这能有效的避免级联事件。</p>
<pre class="prettyprint linenums">
$('#myModal').on('show', function (e) {
    if (!data) return e.preventDefault() // stops modal from being shown
})
</pre>
        </section>



        <!-- Transitions
        ================================================== -->
        <section id="transitions">
          <div class="page-header">
            <h1 title="Transitions">过渡效果 <small>bootstrap-transition.js</small></h1>
          </div>
          <h3 title="About transitions">关于过渡效果</h3>
          <p title="For simple transition effects, include bootstrap-transition.js once alongside the other JS files. If you're using the compiled (or minified) bootstrap.js, there is no need to include this&mdash;it's already there.">对于简单的转场效果，包含 bootstrap-transition.js 文件即可滑入幻灯片或淡出消息框。需要动画(animation)插件支持</p>
          <h3 title="Use cases">用例</h3>
          <p title="A few examples of the transition plugin:">使用过渡插件的几个例子：</p>
          <ul>
            <li title="Sliding or fading in modals">模态窗口的淡入淡出</li>
            <li title="Fading out tabs">tabs标签的淡入</li>
            <li title="Fading out alerts">通知的淡出</li>
            <li title="Sliding carousel panes">轮播插件的窗格化</li>
          </ul>

        </section>



        <!-- Modal
        ================================================== -->
        <section id="modals">
          <div class="page-header">
            <h1 title="Modals  bootstrap-modal.js">对话框 <small>bootstrap-modal.js</small></h1>
          </div>


          <h2 title="Examples">示例</h2>
          <p title="Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.">类似传统的javascript模态对话框，但更圆滑更灵活，带有最基本的功能和智能默认项。</p>

          <h3 title="Static example">静态的例子</h3>
          <p title="A rendered modal with header, body, and set of actions in the footer.">下面就是一个静态渲染的模态对话框。</p>
          <div class="bs-docs-example" style="background-color: #f5f5f5;">
            <div class="modal" style="position: relative; top: auto; left: auto; margin: 0 auto 20px; z-index: 1; max-width: 100%;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 title="Modal header">对话框标题</h3>
              </div>
              <div class="modal-body">
                <p title="One fine body&hellip;">小寒，你好！</p>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn" title="Close">关闭</a>
                <a href="#" class="btn btn-primary" title="Save changes">保存更改</a>
              </div>
            </div>
          </div>
<pre class="prettyprint linenums">
&lt;div class="modal hide fade"&gt;
  &lt;div class="modal-header"&gt;
    &lt;button type="button" class="close" data-dismiss="modal" aria-hidden="true"&gt;&amp;times;&lt;/button&gt;
    &lt;h3&gt;对话框标题&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="modal-body"&gt;
    &lt;p&gt;小寒，你好！&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="modal-footer"&gt;
    &lt;a href="#" class="btn"&gt;关闭&lt;/a&gt;
    &lt;a href="#" class="btn btn-primary"&gt;保存更改&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>

          <h3 title="Live demo">动态的例子</h3>
          <p title="Toggle a modal via JavaScript by clicking the button below. It will slide down and fade in from the top of the page.">点击下的按钮会通过javascript触发一个模态对话框。对话框从页面顶端滑下的同时逐渐呈现。</p>
          <!-- sample modal content -->
          <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 id="myModalLabel" title="Modal Heading">对话框标题</h3>
            </div>
            <div class="modal-body">
              <h4 title="Text in a modal">老祖宗的老话</h4>
              <p>夏不睡石，秋不睡板。春不露脐，冬不蒙头。白天多动，夜里少梦。<br>
			  睡前洗脚，胜吃补药。晚上开窗，一觉都香。贪凉失盖，不病才怪。<br>
			  早睡早起，怡神爽气，贪房贪睡，添病减岁。夜里磨牙，肚里虫爬。</p>

              <h4 title="Popover in a modal"></h4>
              <p>This <a href="#" role="button" class="btn popover-test" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">button</a> should trigger a popover on click.</p>

              <h4 title="Tooltips in a modal">对话框中的工具提示</h4>
              <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> should have tooltips on hover.</p>

              <hr>

              <h4 title="Overflowing text to show optional scrollbar"></h4>
              <p title="We set a fixed max-height on the .modal-body. Watch it overflow with all this extra lorem ipsum text we've included.">我们对 <code>.modal-body</code> 样式修正了 <code>max-height</code> 。对于超过高度的内容就会显示滚动条。</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal">Close</button>
              <button class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <div class="bs-docs-example" style="padding-bottom: 24px;">
            <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-large" title="Launch demo modal">点击演示</a>
          </div>
<pre class="prettyprint linenums">
&lt!-- Button to trigger modal --&gt;
&lt;a href="#myModal" role="button" class="btn" data-toggle="modal"&gt;点击演示&lt;/a&gt;

&lt!-- Modal --&gt;
&lt;div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"&gt;
  &lt;div class="modal-header"&gt;
    &lt;button type="button" class="close" data-dismiss="modal" aria-hidden="true"&gt;&times;&lt;/button&gt;
    &lt;h3 id="myModalLabel"&gt;对话框标题&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="modal-body"&gt;
    &lt;p&gt;小寒，你好！&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="modal-footer"&gt;
    &lt;button class="btn" data-dismiss="modal" aria-hidden="true"&gt;关闭&lt;/button&gt;
    &lt;button class="btn btn-primary"&gt;保存更改&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
				<div class="alert alert-info"><strong>强调！</strong> 实现对话框淡入淡出的动画效果，必须引用 bootstrap-transition.js，再对 <code>.modal</code> 元素应用 <code>.fade</code>。</div>
                <hr class="bs-docs-separator">
                <h2 title="Usage">用法</h2>
                <h3 title="Via data attributes"></h3>
                <p title='Activate a modal without writing JavaScript. Set data-toggle="modal" on a controller element, like a button, along with a data-target="#foo" or href="#foo" to target a specific modal to toggle.'>你可以简单的利用javascript插件实现一个模态窗口，仅需要在HTML标签中配置 <code>data-toggle="modal"</code> 作为触发模态窗口的控制器，同时指定 <code>data-target="#foo"</code> 或者 <code>href="#foo"</code> 来关联要弹出的元素的ID，这些内容将显示在模态对话框中。</p>
                <p>同时，配置模态窗口的配置项，可以在控制器或者模态窗口的标签上配置一些数据。</p>
                <pre class="prettyprint linenums" title="Launch modal">&lt;button type="button" data-toggle="modal" data-target="#myModal"&gt;点击触发对话框&lt;/button&gt;</pre>
                <h3 title="Via JavaScript">配置JavaScript</h3>
                <p title="Call a modal with id myModal with a single line of JavaScript:">使用JavaScript调用ID为 <code>myModal</code> 的模态对话框：</p>
                <pre class="prettyprint linenums">$('#myModal').modal(options)</pre>
                <h3 title="Options">选项</h3>
                <p title='Options can be passed via data attributes or JavaScript. For data attributes, append the option name to data-, as in data-backdrop="".'>选项可以通过data属性或JavaScript设置。对于data属性，只需在选项名称后附加 <code>data-</code>，作为 <code>data-backdrop=""</code>。</p>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width: 100px;" title="Name">名字</th>
                            <th style="width: 50px;" title="type">类型</th>
                            <th style="width: 50px;" title="default">默认值</th>
                            <th title="description">描述</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>backdrop</td>
                            <td title="boolean">布尔值</td>
                            <td>true</td>
                            <td title="Includes a modal-backdrop element. Alternatively, specify static for a backdrop which doesn't close the modal on click.">包括 modal-backdrop 模态背景元素。另外，指定特定的背景后在其上点击无法关闭模态窗口。</td>
                        </tr>
                        <tr>
                            <td>keyboard</td>
                            <td>布尔值</td>
                            <td>true</td>
                            <td title="Closes the modal when escape key is pressed">为true时按下ESC键关闭模态对话框。</td>
                        </tr>
                        <tr>
                            <td>show</td>
                            <td>布尔值</td>
                            <td>true</td>
                            <td title="Shows the modal when initialized.">在初始化时显示对话框。</td>
                        </tr>
                        <tr>
                            <td>remote</td>
                            <td>path</td>
                            <td>false</td>
                            <td><p title="If a remote url is provided, content will be loaded via jQuery's load method and injected into the .modal-body. If you're using the data api, you may alternatively use the href tag to specify the remote source. An example of this is shown below:">如果是远程的URL，内容将通过jQuery的 <code>load</code> 方法加载并注入<code>.modal-body</code>。如果使用了data api，则可以选择使用指定的远程数据源的 <code>href</code> 标签，示例如下：</p>
                                <pre class="prettyprint linenums" title="click me"><code>&lt;a data-toggle="modal" href="remote.html" data-target="#modal"&gt;点击我&lt;/a&gt;</code></pre></td>
                        </tr>
                    </tbody>
                </table>
                <h3 title="Methods">方法</h3>
                <h4>.modal(options)</h4>
                <p title="Activates your content as a modal. Accepts an optional options object.">将某个元素变成对话框激活，接受一个 <code>object</code> 做为可选参数。</p>
                <pre class="prettyprint linenums">
$('#myModal').modal({
  keyboard: false
})
</pre>
          <h4>.modal('toggle')</h4>
          <p title="Manually toggles a modal.">手动切换对话框打开和关闭。</p>
          <pre class="prettyprint linenums">$('#myModal').modal('toggle')</pre>
          <h4>.modal('show')</h4>
          <p title="Manually opens a modal.">打开对话框</p>
          <pre class="prettyprint linenums">$('#myModal').modal('show')</pre>
          <h4>.modal('hide')</h4>
          <p title="Manually hides a modal.">关闭对话框</p>
          <pre class="prettyprint linenums">$('#myModal').modal('hide')</pre>
          <h3 title="Events">事件</h3>
          <p title="Bootstrap's modal class exposes a few events for hooking into modal functionality.">Bootstrap的对话框类扩展了一组事件，可以介入对话框的某些功能实现。</p>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 150px;" title="Event">事件</th>
               <th title="Description">描述</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>show</td>
               <td title="This event fires immediately when the show instance method is called.">该事件在调用 <code>show</code> 方法时立刻触发。</td>
             </tr>
             <tr>
               <td>shown</td>
               <td title="This event is fired when the modal has been made visible to the user (will wait for css transitions to complete).">该事件在对话框已经呈现给用户后（要等CSS过渡效果生效后）触发。</td>
             </tr>
             <tr>
               <td>hide</td>
               <td title="This event is fired immediately when the hide instance method has been called.">该事件在对话框使用 <code>hide</code> 方法时立刻触发。</td>
             </tr>
             <tr>
               <td>hidden</td>
               <td title="This event is fired when the modal has finished being hidden from the user (will wait for css transitions to complete).">该事件在对话框已经关闭后（要等CSS过渡效果生效后）触发。</td>
             </tr>
            </tbody>
          </table>
<pre class="prettyprint linenums">
$('#myModal').on('hidden', function () {
  // do something…
})
</pre>
        </section>



        <!-- Dropdowns
        ================================================== -->
        <section id="dropdowns">
          <div class="page-header">
            <h1 title="Dropdowns">下拉项 <small>bootstrap-dropdown.js</small></h1>
          </div>


          <h2 title="Examples">示例</h2>
          <p title="Add dropdown menus to nearly anything with this simple plugin, including the navbar, tabs, and pills.">这个简单的插件几乎可以给任何组件添加下拉菜单，包括导航栏，标签页和胶囊链接。</p>

          <h3 title="Within a navbar">导航栏</h3>
          <div class="bs-docs-example">
            <div id="navbar-example" class="navbar navbar-static">
              <div class="navbar-inner">
                <div class="container" style="width: auto;">
                  <a class="brand" href="#" title="Project Name">项目名称</a>
                  <ul class="nav" role="navigation">
                    <li class="dropdown">
                      <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">下拉 <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                        <li><a tabindex="-1" href="#" title="Action">动作</a></li>
						<li><a tabindex="-1" href="#" title="Another action">另一个动作</a></li>
						<li><a tabindex="-1" href="#" title="Something else here">其他</a></li>
						<li class="divider"></li>
						<li><a tabindex="-1" href="#" title="Separated link">被间隔的链接</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">下拉2 <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                        <li><a tabindex="-1" href="#" title="Action">动作</a></li>
						<li><a tabindex="-1" href="#" title="Another action">另一个动作</a></li>
						<li><a tabindex="-1" href="#" title="Something else here">其他</a></li>
						<li class="divider"></li>
						<li><a tabindex="-1" href="#" title="Separated link">被间隔的链接</a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="nav pull-right">
                    <li id="fat-menu" class="dropdown">
                      <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">下拉3 <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                        <li><a tabindex="-1" href="#" title="Action">动作</a></li>
						<li><a tabindex="-1" href="#" title="Another action">另一个动作</a></li>
						<li><a tabindex="-1" href="#" title="Something else here">其他</a></li>
						<li class="divider"></li>
						<li><a tabindex="-1" href="#" title="Separated link">被间隔的链接</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div> <!-- /navbar-example -->
          </div> 

          <h3 title="Within tabs">胶囊连接</h3>
          <div class="bs-docs-example">
            <ul class="nav nav-pills">
              <li class="active"><a href="#" title="Regular link">常规连接</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" id="drop4" role="button" data-toggle="dropdown" href="#">下拉 <b class="caret"></b></a>
                <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
					<li><a tabindex="-1" href="#" title="Action">动作</a></li>
					<li><a tabindex="-1" href="#" title="Another action">另一个动作</a></li>
					<li><a tabindex="-1" href="#" title="Something else here">其他</a></li>
					<li class="divider"></li>
					<li><a tabindex="-1" href="#" title="Separated link">被间隔的链接</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#">下拉2 <b class="caret"></b></a>
                <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop5">
					<li><a tabindex="-1" href="#" title="Action">动作</a></li>
					<li><a tabindex="-1" href="#" title="Another action">另一个动作</a></li>
					<li><a tabindex="-1" href="#" title="Something else here">其他</a></li>
					<li class="divider"></li>
					<li><a tabindex="-1" href="#" title="Separated link">被间隔的链接</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#">下拉3 <b class="caret"></b></a>
                <ul id="menu3" class="dropdown-menu" role="menu" aria-labelledby="drop5">
					<li><a tabindex="-1" href="#" title="Action">动作</a></li>
					<li><a tabindex="-1" href="#" title="Another action">另一个动作</a></li>
					<li><a tabindex="-1" href="#" title="Something else here">其他</a></li>
					<li class="divider"></li>
					<li><a tabindex="-1" href="#" title="Separated link">被间隔的链接</a></li>
                </ul>
              </li>
            </ul> <!-- /tabs -->
          </div> 


          <hr class="bs-docs-separator">


          <h2 title="Usage">用法</h2>

          <h3 title="Via data attributes">使用数据属性</h3>
          <p title='Add data-toggle="dropdown" to a link or button to toggle a dropdown.'>依赖bootstrap-dropdown.js，然后设置 <code>data-toggle="dropdown"</code> 可以为任何元素添加并激活下拉项。</p>
<pre class="prettyprint linenums">
&lt;div class="dropdown"&gt;
  &lt;a class="dropdown-toggle" data-toggle="dropdown" href="#"&gt;Dropdown trigger&lt;/a&gt;
  &lt;ul class="dropdown-menu" role="menu" aria-labelledby="dLabel"&gt;
    ...
  &lt;/ul&gt;
&lt;/div&gt;
</pre>		  
		  <p class="alert alert-info"><strong>强调！</strong> 可以使用 <code>data-target="#id"</code> 或 <code>href="#id"</code> 激活某个下拉项，如下：</p>
		  <div class="bs-docs-example">
            <ul class="nav nav-pills">
				<li><a href="#" title="Regular link">常规连接</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" id="drop4" role="button" data-toggle="dropdown" href="#">下拉项 <b class="caret"></b></a>
					<ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
						<li><a tabindex="-1" href="#" title="Action">动作</a></li>
						<li><a tabindex="-1" href="#" title="Another action">另一个动作</a></li>
						<li><a tabindex="-1" href="#" title="Something else here">其他</a></li>
						<li class="divider"></li>
						<li><a tabindex="-1" href="#" title="Separated link">被间隔的链接</a></li>
					</ul>
				</li>
				<li class="active">
					<a data-toggle="dropdown" href="#menutest1">点击我看看</a>
				</li>
            </ul> <!-- /tabs -->
          </div> 
<pre class="prettyprint linenums">
&lt;ul class="nav nav-pills"&gt;
  &lt;li&gt;&lt;a href="#"&gt;规则的链接&lt;/a&gt;&lt;/li&gt;
  &lt;li class="dropdown" id="menutest1"&gt;
    &lt;a class="dropdown-toggle" data-toggle="dropdown" href="#menutest1"&gt;
      下拉项
      &lt;b class="caret"&gt;&lt;/b&gt;
    &lt;/a&gt;
    &lt;ul class="dropdown-menu"&gt;
      &lt;li&gt;&lt;a href="#"&gt;动作&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;另一个动作&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;其他&lt;/a&gt;&lt;/li&gt;
      &lt;li class="divider"&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;被间隔的链接&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li class='active'&gt;
    &lt;a data-toggle="dropdown" href="#menutest1"&gt;点击我看看&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</pre>
          <p title='To keep URLs intact, use the data-target attribute instead of href="#".'>为了保持URL的完整，使用 <code>data-target</code> 属性而不是 <code>href="#"</code>。</p>
<pre class="prettyprint linenums">
&lt;div class="dropdown"&gt;
  &lt;a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html"&gt;
    Dropdown
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;ul class="dropdown-menu" role="menu" aria-labelledby="dLabel"&gt;
    ...
  &lt;/ul&gt;
&lt;/div&gt;
</pre>

          <h3 title="Via JavaScript">使用JavaScript</h3>
          <p title="Call the dropdowns via JavaScript:">激活下拉菜单需要使用JavaScript。</p>
          <pre class="prettyprint linenums">$('.dropdown-toggle').dropdown()</pre>

          <h3 title="Options">选项</h3>
          <p title="None"><em>无</em></p>

          <h3 title="Methods">方法</h3>
          <h4>$().dropdown('toggle')</h4>
          <p title="A programatic api for toggling menus for a given navbar or tabbed navigation.">程式化的API为给定的导航菜单或选项卡导航提供菜单切换。</p>
        </section>



        <!-- ScrollSpy
        ================================================== -->
        <section id="scrollspy">
          <div class="page-header">
            <h1 title="ScrollSpy">滚动侦测 <small>bootstrap-scrollspy.js</small></h1>
          </div>


          <h2 title="Explamle in navbar">导航栏示例</h2>
          <p title="The ScrollSpy plugin is for automatically updating nav targets based on scroll position. Scroll the area below the navbar and watch the active class change. The dropdown sub items will be highlighted as well.">滚动侦测会根据当前滚动条位置而自动更新导航栏中的链接状态。滚动下面的内容区域，然后观察导航条状态，导航条中的菜单甚至下拉项都会同步高亮。试一下！</p>
          <div class="bs-docs-example">
            <div id="navbarExample" class="navbar navbar-static">
              <div class="navbar-inner">
                <div class="container" style="width: auto;">
                  <a class="brand" href="#" title="Project Name">项目名称</a>
                  <ul class="nav">
                    <li><a href="#yanguo">杨过</a></li>
                    <li><a href="#zhangwuji">张无忌</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">情之为何 <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#one">one</a></li>
                        <li><a href="#two">two</a></li>
                        <li class="divider"></li>
                        <li><a href="#three">three</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div data-spy="scroll" data-target="#navbarExample" data-offset="0" class="scrollspy-example">
				<h4 id="yanguo">杨过</h4>
				<p>杨过和小龙女最终做了神仙眷侣<br>
			    也许他知道，也许他不知道<br>
				也许他装作不知道<br>
				程英和陆无双为他负尽青春抛尽韶华<br>
				郭襄为他天涯思君念念不忘<br>
				也许他记得，也许他不记得<br>
				曾经有一个叫公孙绿萼的姑娘把一生停驻在他一刹那的目光里，<br>
				而他所能给的，也只能是一曲清箫、三枚金针或者某一刻的眷顾而已。。。。。。</p>
				<h4 id="zhangwuji">张无忌</h4>
				<p>张无忌放弃了江湖与江山<br>
				他把幸福给了赵敏<br>
				却把牵挂给了小昭<br>
				把漂泊给了蛛儿<br>
				把憾恨给了芷若……</p>
				<h4 id="one">one</h4>
				<p>杨过与小龙女终成眷属，逍遥于江湖之外，他可记得，还有一个痴心的女子对他天涯思君念念不忘，抛尽韶华，守候一生。他是否会想起，多年前那张天真无邪的面容，是否会想起，初遇时她莞尔一笑，道，我姓郭，单名一个襄字。</p>
				<p>眷恋的人，给不了你承诺，于是你终于明白，幸福是一件多么可遇不可求的事情。可是为何仍要飞蛾扑火，执着一生？也许就如李莫愁时常低吟的那样：问世间情为何物，直教人生死相许。这世界上最复杂的东西，一个人又如何能想的透彻？</p>
				<h4 id="two">two</h4>
				<p>倚天的结局处，周芷若曾这样问过张无忌，在小昭、蛛儿、赵敏和她四个人中，他真正爱的人是哪一个。张无忌一时感慨万千，想起自己也曾扪心自问过，那时只觉得，若能和四位姑娘一起长相厮守，岂不逍遥快活？然而世事变迁,小昭远赴波斯做了教主，表妹蛛儿逝世，芷若误入歧途，只有赵姑娘一直陪在自己身边。虽然期间曾产生过误会，他对赵敏是又爱又恨，但心里从未放下过对她的牵念。然而，芷若的介入总让他内心摇摆不定，始终无法正视自己的情感。直到这一刻，面对赵敏的不辞而别，他终于发现，自己对那鬼灵精怪的小妖女竟这般难以割舍，若是今生再见不了她，自己也决计活不下去了。他终于找到心底的那个答案，对芷若，他是一向敬重，对蛛儿，他是心生感激，对小昭，他是意存怜惜，但对赵敏，却是刻骨铭心的相爱。</p>
				<p>人有时候，总在失去时才后知后觉，一些人，一些事，以为只是生命中一抹浮云，以为可以从此相忘于江湖，却在别离之际发现，那些过往原来早已扎根在心底，拿不掉，抹不去。</p>
				<h4 id="three">three</h4>
				<p>有一个人，教会你如何去爱了，但是，他却不爱你了。<br>
				有一个人，你一直在等他，他却忘记了你。<br>
				有一个人，他想离开了，你却没有丝毫挽留，因为你渐渐明白，挽留是没有用的，你能给的，只有自由。</p>
				<p>你以为只要走的很潇洒，就不会有太多的痛苦，就不会有留恋，可是，为什么在喧闹的人群中会突然沉默下来，为什么听歌听到一半会突然哽咽不止。你不知道自己在期待什么，不知道自己在坚持什么，脑海里挥之不去的，都是过往的倒影。</p>
				<p>爱你的人，对你的要求很少，可以在很想你的时候看看你，可以在寂寞的时候和你说句话，这就是她所有的幸福。</p>
				<p>如果因为执念而作出仓促的决定，可以离开，但请不要走远，不要急着为彼此定性，不要急着分清界限， 回头看看，她是否还在。</p>
				<p>善待爱你的那个人，那个不希望你困扰，所以强颜欢笑、骗你说释怀了的人，那个默默关注你，从不曾离开的人，如果你还彷徨着，如果你还抑制不住的想着她，如果你还在意她的一颦一簇，不妨给她一个可能，也给自己一个可能。</p>
				<p>在爱情里，如果两人都很被动，一段美好的姻缘不免在时间的摧残下消磨殆尽，并不是两个人不适合，而是双方都习惯于等待，等待对方先主动，没有耐心的人于是选择离开，最后徒留遗憾。</p>
				<p>所以，爱是有来生的，就像不灭的火种，只需加点干柴，它依旧能发出夺目的火光。</p>
            </div>
          </div>


          <hr class="bs-docs-separator">


          <h2 title="Usage">用法</h2>

          <h3 title="Via data attributes">使用data属性</h3>
          <p title='To easily add scrollspy behavior to your topbar navigation, just add data-spy="scroll" to the element you want to spy on (most typically this would be the body) and data-target=".navbar" to select which nav to use. You'll want to use scrollspy with a .nav component.'>在想侦测的元素(往往是body)上添加 <code>data-spy="scroll"</code> 就很容易在置顶导航条上实现滚动侦测。一般你会在 <code>.nav</code> 使用滚动侦听插件。</p>
          <pre class="prettyprint linenums">&lt;body data-spy="scroll" data-target=".navbar"&gt;...&lt;/body&gt;</pre>

          <h3 title="Via JavaScript">使用JavaScript</h3>
          <p title="Call the scrollspy via JavaScript:">通过javascript调用滚动侦测：</p>
          <pre class="prettyprint linenums">$('#navbar').scrollspy()</pre>

          <div class="alert alert-info" title='Heads up!  Navbar links must have resolvable id targets. For example, a &lt;a href="#home"&gt;home&lt;/a&gt; must correspond to something in the dom like &lt;div id="home"&gt;&lt;/div&gt;.'>
		  <strong>强调!</strong> 导航条链接必须指向一个可解析的元素id。举个例子，导航中的 <code>&lt;a href="#home"&gt;home&lt;/a&gt;</code> 必须对应着dom中一个真实存在的id='home'元素，比如 <code>&lt;div id="home"&gt;&lt;/div&gt;</code> 。
          </div>

          <h3 title="Mothods">方法</h3>
          <h4>.scrollspy('refresh')</h4>
          <p title="When using scrollspy in conjunction with adding or removing of elements from the DOM, you'll need to call the refresh method like so:">当使用滚动侦听且结合DOM节点的添加删除操作时，需要调用refresh方法，如下：</p>
<pre class="prettyprint linenums">
$('[data-spy="scroll"]').each(function () {
  var $spy = $(this).scrollspy('refresh')
});
</pre>

          <h3 title="Options">选项</h3>
		  <p title='Options can be passed via data attributes or JavaScript. For data attributes, append the option name to data-, as in data-offset="".'>选项可以通过data属性或JavaScript设置。对于data属性，只需在选项名称后附加 <code>data-</code>，作为 <code>data-offset=""</code>。</p>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;" title="Name">名称</th>
               <th style="width: 100px;" title="type">类型</th>
               <th style="width: 50px;" title="default">默认值</th>
               <th title="Description">描述</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>offset</td>
               <td>数字</td>
               <td>10</td>
               <td title="Pixels to offset from top when calculating position of scroll.">计算滚动位置时相对顶端的偏移量</td>
             </tr>
            </tbody>
          </table>

          <h3 title="Events">事件</h3>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 150px;" title="Event">事件</th>
               <th title="Description">描述</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>activate</td>
               <td title="This event fires whenever a new item becomes activated by the scrollspy.">此事件将触发一个新的项目激活滚动侦听功能。</td>
            </tr>
            </tbody>
          </table>
        </section>



        <!-- Tabs
        ================================================== -->
        <section id="tabs">
          <div class="page-header">
            <h1 title="Togglable tabs">切换标签页 <small>bootstrap-tab.js</small></h1>
          </div>


          <h2 title="Example tabs">标签页示例</h2>
          <p title="Add quick, dynamic tab functionality to transiton through panes of local content, even via dropdown menus.">该插件通过点击标签页和胶囊链接切换显示不同容器中的内容。</p>
          <div class="bs-docs-example">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">周星驰</a></li>
              <li><a href="#profile" data-toggle="tab">至尊宝</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">爱情 <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#dropdown1" data-toggle="tab">感情</a></li>
                  <li><a href="#dropdown2" data-toggle="tab">幸福</a></li>
                </ul>
              </li>
            </ul>
            <div id="myTabContent" class="tab-content">
				<div class="tab-pane fade in active" id="home">
					<p>这世上有一个被说滥的故事，叫大话西游。<br>
					这世上有一句被说滥的情话，“曾经有一份真挚的爱情摆在我面前，......”<br>
					十年前，一群青春浪漫的孩子，在街头小影院，被周星驰逗得前仰马翻。<br>
					十年后，一个人，两张碟，突然就看懂了，开头孙悟空为什么放弃西天取经：才华横溢的年轻人不愿意被条条框框所束缚。<br>
					这是一种有趣的对比，十年前的我们青春年少，逃课躲在小影院，疯狂迷恋周星驰，仿佛开头不愿取经的孙悟空，十年后的我们为人父母，规规矩矩，任你有再大的本事翻不出生活的五指山，如同带上紧箍咒的至尊宝，走上西天之路。<br>
					这是一个关于宿命的故事，十年前我们看出了笑声，十年后却看出了眼泪，前生，今世，轮回，体制，爱情，从开头到结尾，从大战观音到毅然走上取经之路，不到三个小时；而我们从年少懵懂到老于世故却走了整整二十年，一部电影浓缩了人的一生，大话西游应该得奥斯卡。</p>
				</div>
                <div class="tab-pane fade" id="profile">
					<p>
					紫霞说：谁拔出我的紫青宝剑，谁就是我的如意郎君。<br>晶晶爱了弃她而去的悟空五百年，五百年后看见跟悟空一模一样的至尊宝时仍然念念不忘，原来恨一个人可以这么久。<br>
					晶晶说：你不怕我杀了你吗？<br>
					至尊宝：怕，不过没办法，我不想你看着我的时候心里却想着另外一个人。</p>
					<p>至尊宝爱上了晶晶，为了救晶晶，又遇见了紫霞，当他发现紫霞才是最爱的时候，又放不下晶晶，爱情有时不是两个人的事，而是三个人的事，爱情方程千古难解，命运永远在跟至尊宝开着愚人的玩笑，他只有变成孙悟空才能救紫霞，而变成孙悟空就不能对紫霞再有半点情欲，有时候可以选择也是一种痛苦。</p>
                </div>
				<div class="tab-pane fade" id="dropdown1">
					<p>几米说：
					当你喜欢我的时候，我不喜欢你<br>
					当你爱上我的时候，我喜欢上你<br>
					当你离开我的时候，我却爱上你<br>
					是你走的太快，还是我跟不上你的脚步？<br>
					我们错过了诺亚方舟，错过了泰坦尼克号，错过了一切惊险与不惊险，我们还要继续错过...</p>
				</div>
				<div class="tab-pane fade" id="dropdown2">
					<p>但是，请允许我说这样自私的话<br>
					多年后<br>
					你若未嫁<br>
					我若未娶<br>
					那我们能不能在一起？？？<br>
					记住你欠我的幸福!!</p>
              </div>
            </div>
          </div>


          <hr class="bs-docs-separator">


          <h2 title="Usage">用法</h2>
          <p title="Enable tabbable tabs via JavaScript (each tab needs to be activated individually):">通过JavaScript启用tab标签功能(每个tab选项卡需要分别激活)</p>
<pre class="prettyprint linenums">
$('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})</pre>
          <p title="You can activate individual tabs in several ways:">支持的JavaScript激活方式</p>
<pre class="prettyprint linenums">
$('#myTab a[href="#profile"]').tab('show'); // Select tab by name
$('#myTab a:first').tab('show'); // Select first tab
$('#myTab a:last').tab('show'); // Select last tab
$('#myTab li:eq(2) a').tab('show'); // Select third tab (0-indexed)
</pre>

          <h3 title="Markup">标记</h3>
          <p title='You can activate a tab or pill navigation without writing any JavaScript by simply specifying data-toggle="tab" or data-toggle="pill" on an element. Adding the nav and nav-tabs classes to the tab ul will apply the Bootstrap tab styling.'>在某个元素上设置 <code>data-toggle="tab"</code> 或 <code>data-toggle="pill"</code> 而无须编写javascript，就可以激活标签页或是胶囊链接。</p>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-tabs"&gt;
  &lt;li&gt;&lt;a href="#home" data-toggle="tab"&gt;首页&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#profile" data-toggle="tab"&gt;介绍&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#messages" data-toggle="tab"&gt;消息&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#settings" data-toggle="tab"&gt;设置&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>

          <h3 title="Mothods">方法</h3>
          <h4>$().tab</h4>
          <p title="Activates a tab element and content container. Tab should have either a data-target or an href targeting a container node in the DOM.">激活一个标签页元素和内容容器。标签页应该含有 <code>data-target='#id'</code> 或 <code>href='#id'</code> 属性以指向dom中的某个容器节点。</p>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-tabs" id="myTab"&gt;
  &lt;li class="active"&gt;&lt;a href="#home"&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#profile"&gt;Profile&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#messages"&gt;Messages&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#settings"&gt;Settings&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;div class="tab-content"&gt;
  &lt;div class="tab-pane active" id="home"&gt;...&lt;/div&gt;
  &lt;div class="tab-pane" id="profile"&gt;...&lt;/div&gt;
  &lt;div class="tab-pane" id="messages"&gt;...&lt;/div&gt;
  &lt;div class="tab-pane" id="settings"&gt;...&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
  $(function () {
    $('#myTab a:last').tab('show');
  })
&lt;/script&gt;
</pre>

          <h3 title="Events">事件</h3>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 150px;" title="Event">事件</th>
               <th title="Description">描述</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>show</td>
               <td title="This event fires on tab show, but before the new tab has been shown. Use event.target and event.relatedTarget to target the active tab and the previous active tab (if available) respectively.">该事件在标签开始展示时（尚未渲染完之前）触发。<code>event.target</code> 指向要激活的标签，<code>event.relatedTarget</code> 提向之前已激活的标签（如果有的话）。</td>
            </tr>
            <tr>
               <td>shown</td>
               <td title="This event fires on tab show after a tab has been shown. Use event.target and event.relatedTarget to target the active tab and the previous active tab (if available) respectively.">该事件在标签已经呈现后（已渲染完成）触发。<code>event.target</code> 指向要激活的标签，<code>event.relatedTarget</code> 提向之前已激活的标签（如果有的话）。</td>
             </tr>
            </tbody>
          </table>
<pre class="prettyprint linenums">
$('a[data-toggle="tab"]').on('shown', function (e) {
  e.target // activated tab
  e.relatedTarget // previous tab
})
</pre>
        </section>


        <!-- Tooltips
        ================================================== -->
        <section id="tooltips">
          <div class="page-header">
            <h1 title="Tooltips">工具提示 <small>bootstrap-tooltip.js</small></h1>
          </div>


          <h2 title="Examples">示例</h2>
          <p title="Inspired by the excellent jQuery.tipsy plugin written by Jason Frame; Tooltips are an updated version, which don't rely on images, use CSS3 for animations, and data-attributes for local title storage.">受Jason Frame所写的出色的jQuery.tipsy插件所启发；Tooltips做为前者的升级版，不依赖于图像， 使用css3显示动画效果，利用data-属性对标题做本地化存储。</p>
          <p title="Hover over the links below to see tooltips:">鼠标经过下面链接时显示tooltips：</p>
          <div class="bs-docs-example tooltip-demo">
            <p class="muted" style="margin-bottom: 0;">Tight pants next level keffiyeh <a href="#" rel="tooltip" title="Default tooltip">you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="#" rel="tooltip" title="Another tooltip">have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="#" rel="tooltip" title="Another one here too">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" rel="tooltip" title="The last tip!">twitter handle</a> freegan cred raw denim single-origin coffee viral.
            </p>
          </div>

          <h3 title="Four directions">支持四个方向</h3>
          <div class="bs-docs-example tooltip-demo">
            <ul class="bs-docs-tooltip-examples">
              <li><a href="#" rel="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</a></li>
              <li><a href="#" rel="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</a></li>
              <li><a href="#" rel="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</a></li>
              <li><a href="#" rel="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</a></li>
            </ul>
          </div>


          <hr class="bs-docs-separator">


          <h2 title="Usage">用法</h2>
          <p title="Trigger the tooltip via JavaScript:">通过javascript触发工具提示：</p>
          <pre class="prettyprint linenums">$('#example').tooltip(options)</pre>

          <h3 title="Options">选项</h3>
          <p title="">Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-animation=""</code>.</p>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;" title="Name">名称</th>
               <th style="width: 100px;" title="type">类型</th>
               <th style="width: 50px;" title="">默认值</th>
               <th title="Description">描述</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>animation</td>
               <td title="boolean">布尔值</td>
               <td>true</td>
               <td title="apply a css fade transition to the tooltip">为工具提示添加一个淡入的过渡效果。</td>
             </tr>
             <tr>
               <td>html</td>
               <td title="boolean">布尔值</td>
               <td>false</td>
               <td title="Insert html into the tooltip. If false, jquery's text method will be used to insert content into the dom. Use text if you're worried about XSS attacks."></td>
             </tr>
             <tr>
               <td>placement</td>
               <td title="string|function">字符串或函数</td>
               <td>'top'</td>
               <td title="how to position the tooltip - top | bottom | left | right">工具提示的位置：top | bottom | left | right。</td>
             </tr>
             <tr>
               <td>selector</td>
               <td title="string">字符串</td>
               <td>false</td>
               <td title="If a selector is provided, tooltip objects will be delegated to the specified targets.">如果提供了selector，将对符合条件的某个或多个元素启用工具提示。</td>
             </tr>
             <tr>
               <td>title</td>
               <td title="string|function">字符串或函数</td>
               <td>''</td>
               <td title="default title value if `title` tag isn't present">如果'title'属性不存在的话，就使用该值做为默认的标题。</td>
             </tr>
             <tr>
               <td>trigger</td>
               <td title="string">字符串</td>
               <td>'hover'</td>
               <td title="how tooltip is triggered - click | hover | focus | manual">工具提示的触发方式：点击(click) | 鼠标经过(hover) | 获得焦点(focus) | 手动触发(manual)</td>
             </tr>
             <tr>
               <td>delay</td>
               <td title="number|object">数字或对象</td>
               <td>0</td>
               <td>
                <p title="delay showing and hiding the tooltip (ms) - does not apply to manual trigger type">显示和隐藏时的延迟时间(以毫秒计)</p>
                <p title="If a number is supplied, delay is applied to both hide/show">如果提供的是一个数字，延迟就会同时被应用到显示和隐藏。</p>
                <p title="Object structure is: delay: { show: 500, hide: 100 }">如果是一个对象，其结构就是: <code>delay: { show: 500, hide: 100 }</code></p>
               </td>
             </tr>
            </tbody>
          </table>
          <div class="alert alert-info" title="Heads up!  Options for individual tooltips can alternatively be specified through the use of data attributes.">
            <strong>强调!</strong>
            每个工具提示都可以单独通过设置data-属性以实现与javascript调用同样的功能
          </div>

          <h3 title="Markup">标记</h3>
          <p title="For performance reasons, the Tooltip and Popover data-apis are opt in. If you would like to use them just specify a selector option.">出于性能的考虑，在使用工具提示和弹出提示时建议利用data-属性，再指定一个selector选项即可。</p>
          <pre class="prettyprint linenums">&lt;a href="#" rel="tooltip" title="first tooltip"&gt;hover over me&lt;/a&gt;</pre>

          <h3 title="Mothods">方法</h3>
          <h4>$().tooltip(options)</h4>
          <p title="Attaches a tooltip handler to an element collection.">对某个元素集合添加工具提示的处理。</p>
          <h4>.tooltip('show')</h4>
          <p title="Reveals an element's tooltip.">显示某个元素的工具提示。</p>
          <pre class="prettyprint linenums">$('#element').tooltip('show')</pre>
          <h4>.tooltip('hide')</h4>
          <p title="Hides an element's tooltip.">隐藏某个元素的工具提示。</p>
          <pre class="prettyprint linenums">$('#element').tooltip('hide')</pre>
          <h4>.tooltip('toggle')</h4>
          <p title="Toggles an element's tooltip.">切换某个元素的工具提示的隐藏和显示状态。</p>
          <pre class="prettyprint linenums">$('#element').tooltip('toggle')</pre>
          <h4>.tooltip('destroy')</h4>
          <p title="Hides and destroys an element's tooltip.">隐藏和销毁某个元素的工具提示。</p>
          <pre class="prettyprint linenums">$('#element').tooltip('destroy')</pre>
        </section>



      <!-- Popovers
      ================================================== -->
      <section id="popovers">
        <div class="page-header">
          <h1 title="Popovers">弹出提示 <small>bootstrap-popover.js</small></h1>
        </div>

        <h2 title="Examples">示例</h2>
        <p title="Add small overlays of content, like those on the iPad, to any element for housing secondary information. Hover over the button to trigger the popover. Requires Tooltip to be included.">与iPad上的效果类似，把存放输助信息的元素显示为弹出框提示。Hover over the button to trigger the popover. <strong>需要包含 <a href="#tooltips">Tooltip</a>。</strong></p>

        <h3 title="Static popover">静态的弹出提示</h3>
        <p title="Four options are available: top, right, bottom, and left aligned.">支持四个方向的弹出提示：top, right, bottom 和 left。</p>
        <div class="bs-docs-example bs-docs-example-popover">
          <div class="popover top">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover top</h3>
            <div class="popover-content">
              <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
          </div>

          <div class="popover right">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover right</h3>
            <div class="popover-content">
              <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
          </div>

          <div class="popover bottom">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover bottom</h3>
            <div class="popover-content">
              <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
          </div>

          <div class="popover left">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover left</h3>
            <div class="popover-content">
              <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
          </div>

          <div class="clearfix"></div>
        </div>
        <p>No markup shown as popovers are generated from JavaScript and content within a <code>data</code> attribute.</p>

        <h3 title="Live demo">动态的例子</h3>
        <div class="bs-docs-example" style="padding-bottom: 24px;">
          <a href="#" class="btn btn-large btn-danger" rel="popover" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">Click to toggle popover</a>
        </div>

        <h4>Four directions</h4>
        <div class="bs-docs-example tooltip-demo">
          <ul class="bs-docs-tooltip-examples">
            <li><a href="#" class="btn" rel="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on top">Popover on top</a></li>
            <li><a href="#" class="btn" rel="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on right">Popover on right</a></li>
            <li><a href="#" class="btn" rel="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on bottom">Popover on bottom</a></li>
            <li><a href="#" class="btn" rel="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on left">Popover on left</a></li>
          </ul>
        </div>


        <hr class="bs-docs-separator">


        <h2 title="Usage">用法</h2>
        <p title="Enable popovers via JavaScript:">使用javascript启用弹出提示：</p>
        <pre class="prettyprint linenums">$('#example').popover(options)</pre>

        <h3 title="Options">选项</h3>
        <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-animation=""</code>.</p>
        <table class="table table-bordered table-striped">
          <thead>
           <tr>
             <th style="width: 100px;" title="Name">名称</th>
             <th style="width: 100px;" title="type">类型</th>
             <th style="width: 50px;" title="default">默认值</th>
             <th title="Description">描述</th>
           </tr>
          </thead>
          <tbody>
           <tr>
             <td>animation</td>
             <td title="boolean">布尔值</td>
             <td>true</td>
             <td title="apply a css fade transition to the tooltip">为弹出提示添加一个淡入的过渡效果。</td>
           </tr>
           <tr>
             <td>html</td>
             <td title="boolean">布尔值</td>
             <td>false</td>
             <td>Insert html into the popover. If false, jquery's <code>text</code> method will be used to insert content into the dom. Use text if you're worried about XSS attacks.</td>
           </tr>
           <tr>
             <td>placement</td>
             <td title="string|function">字符串或函数</td>
             <td>'right'</td>
             <td>how to position the popover - top | bottom | left | right</td>
           </tr>
           <tr>
             <td>selector</td>
             <td>string</td>
             <td>false</td>
             <td>if a selector is provided, tooltip objects will be delegated to the specified targets</td>
           </tr>
           <tr>
             <td>trigger</td>
             <td>string</td>
             <td>'click'</td>
             <td>how popover is triggered - click | hover | focus | manual</td>
           </tr>
           <tr>
             <td>title</td>
             <td>string | function</td>
             <td>''</td>
             <td>default title value if `title` attribute isn't present</td>
           </tr>
           <tr>
             <td>content</td>
             <td>string | function</td>
             <td>''</td>
             <td>default content value if `data-content` attribute isn't present</td>
           </tr>
           <tr>
             <td>delay</td>
             <td>number | object</td>
             <td>0</td>
             <td>
              <p>delay showing and hiding the popover (ms) - does not apply to manual trigger type</p>
              <p>If a number is supplied, delay is applied to both hide/show</p>
              <p>Object structure is: <code>delay: { show: 500, hide: 100 }</code></p>
             </td>
           </tr>
          </tbody>
        </table>
        <div class="alert alert-info" title="">
          <strong>Heads up!</strong>
          Options for individual popovers can alternatively be specified through the use of data attributes.
        </div>

        <h3 title="Markup">标记</h3>
        <p title="">For performance reasons, the Tooltip and Popover data-apis are opt in. If you would like to use them just specify a selector option.</p>

        <h3 title="Mothods">方法</h3>
        <h4>$().popover(options)</h4>
        <p title="">Initializes popovers for an element collection.</p>
        <h4>.popover('show')</h4>
        <p title="">Reveals an elements popover.</p>
        <pre class="prettyprint linenums">$('#element').popover('show')</pre>
        <h4>.popover('hide')</h4>
        <p title="">Hides an elements popover.</p>
        <pre class="prettyprint linenums">$('#element').popover('hide')</pre>
        <h4>.popover('toggle')</h4>
        <p title="">Toggles an elements popover.</p>
        <pre class="prettyprint linenums">$('#element').popover('toggle')</pre>
        <h4>.popover('destroy')</h4>
        <p title="">Hides and destroys an element's popover.</p>
        <pre class="prettyprint linenums">$('#element').popover('destroy')</pre>
      </section>



      <!-- Alert
      ================================================== -->
      <section id="alerts">
        <div class="page-header">
          <h1 title="Alert messages">通知消息 <small>bootstrap-alert.js</small></h1>
        </div>


        <h2 title="Example alerts">通知示例</h2>
        <p title="Add dismiss functionality to all alert messages with this plugin.">Add dismiss functionality to all alert messages with this plugin.</p>
        <div class="bs-docs-example">
          <div class="alert fade in">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
          </div>
        </div>

        <div class="bs-docs-example">
          <div class="alert alert-block alert-error fade in">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4 class="alert-heading">Oh snap! You got an error!</h4>
            <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
            <p>
              <a class="btn btn-danger" href="#">Take this action</a> <a class="btn" href="#">Or do this</a>
            </p>
          </div>
        </div>


        <hr class="bs-docs-separator">


        <h2 title="Usage">用法</h2>
        <p title="Enable dismissal of an alert via JavaScript:">通过javascript触发通知：</p>
        <pre class="prettyprint linenums">$(".alert").alert()</pre>

        <h3 title="Markup">标记</h3>
        <p title='Just add data-dismiss="alert" to your close button to automatically give an alert close functionality.'>只须对关闭按钮添加 <code>data-dismiss="alert"</code> 就会自动实现一个通知的关闭功能。</p>
        <pre class="prettyprint linenums">&lt;a class="close" data-dismiss="alert" href="#"&gt;&amp;times;&lt;/a&gt;</pre>

        <h3 title="Mothods">方法</h3>
        <h4>$().alert()</h4>
        <p title="Wraps all alerts with close functionality. To have your alerts animate out when closed, make sure they have the .fade and .in class already applied to them.">对所有通知消息赋予关闭功能。在要关闭时使用动画效果，就要在通知上应用 <code>.fade</code> 和 <code>.in</code>。</p>
        <h4>.alert('close')</h4>
        <p title="Closes an alert.">关闭通知</p>
        <pre class="prettyprint linenums">$(".alert").alert('close')</pre>


        <h3 title="Events">事件</h3>
        <p title="Bootstrap's alert class exposes a few events for hooking into alert functionality.">Bootstrap的通知类扩展了一组事件，可以介入通知的某些功能实现。</p>
        <table class="table table-bordered table-striped">
          <thead>
           <tr>
             <th style="width: 150px;" title="Event">事件</th>
             <th title="Description">描述</th>
           </tr>
          </thead>
          <tbody>
           <tr>
             <td>close</td>
             <td title="This event fires immediately when the close instance method is called.">在调用 <code>close</code> 方法时立刻触发。</td>
           </tr>
           <tr>
             <td>closed</td>
             <td title="This event is fired when the alert has been closed (will wait for css transitions to complete).">在通知已经关闭后（等待css过渡效果完成）触发。</td>
           </tr>
          </tbody>
        </table>
<pre class="prettyprint linenums">
$('#my-alert').bind('closed', function () {
  // do something…
})
</pre>
      </section>



          <!-- Buttons
          ================================================== -->
          <section id="buttons">
            <div class="page-header">
              <h1 title="Buttons">按钮 <small>bootstrap-button.js</small></h1>
            </div>

            <h2 title="Example uses">使用示例</h2>
            <p title="Do more with buttons. Control button states or create groups of buttons for more components like toolbars.">控制按钮的状态或者为其他复合控件(比如工具条)创建按钮组。</p>

            <h4 title="Stateful">具备状态的</h4>
            <p title='Add data-loading-text="Loading..." to use a loading state on a button.'>添加 data-loading-text="Loading..." 属性将激活按钮的加载状态效果。</p>
            <div class="bs-docs-example" style="padding-bottom: 24px;">
              <button type="button" id="fat-btn" data-loading-text="loading..." class="btn btn-primary" title="Loading state">
                加载状态
              </button>
            </div>
            <pre class="prettyprint linenums">&lt;button type="button" class="btn btn-primary" data-loading-text="Loading..."&gt;Loading state&lt;/button&gt;</pre>

            <h4 title="Single toggle">单独开关</h4>
            <p title='Add data-toggle="button" to activate toggling on a single button.'>添加 data-toggle="button" 属性将激活按钮的单独开关状态。</p>
            <div class="bs-docs-example" style="padding-bottom: 24px;">
              <button type="button" class="btn btn-primary" data-toggle="button" title="Single Toggle">单独开关</button>
            </div>
            <pre class="prettyprint linenums">&lt;button type="button" class="btn" data-toggle="button"&gt;Single Toggle&lt;/button&gt;</pre>

            <h4 title="Checkbox">复选</h4>
            <p title='Add data-toggle="buttons-checkbox" for checkbox style toggling on btn-group.'>添加 data-toggle="buttons-checkbox" 属性将激活按钮组的复选状态。</p>
            <div class="bs-docs-example" style="padding-bottom: 24px;">
              <div class="btn-group" data-toggle="buttons-checkbox">
                <button type="button" class="btn btn-primary">左</button>
                <button type="button" class="btn btn-primary">中</button>
                <button type="button" class="btn btn-primary">右</button>
              </div>
            </div>
<pre class="prettyprint linenums">
&lt;div class="btn-group" data-toggle="buttons-checkbox"&gt;
  &lt;button type="button" class="btn"&gt;左&lt;/button&gt;
  &lt;button type="button" class="btn"&gt;中&lt;/button&gt;
  &lt;button type="button" class="btn"&gt;右&lt;/button&gt;
&lt;/div&gt;
</pre>

            <h4 title="Radio">单选</h4>
            <p title='Add data-toggle="buttons-radio" for radio style toggling on btn-group.'>添加 data-toggle="buttons-radio" 属性将激活按钮组的单选状态。</p>
            <div class="bs-docs-example" style="padding-bottom: 24px;">
              <div class="btn-group" data-toggle="buttons-radio">
                <button type="button" class="btn btn-primary">左</button>
                <button type="button" class="btn btn-primary">中</button>
                <button type="button" class="btn btn-primary">右</button>
              </div>
            </div>
<pre class="prettyprint linenums">
&lt;div class="btn-group" data-toggle="buttons-radio"&gt;
  &lt;button type="button" class="btn"&gt;左&lt;/button&gt;
  &lt;button type="button" class="btn"&gt;中&lt;/button&gt;
  &lt;button type="button" class="btn"&gt;右&lt;/button&gt;
&lt;/div&gt;
</pre>


            <hr class="bs-docs-separator">


            <h2 title="Usage">用法</h2>
            <p title="Enable buttons via JavaScript:">通过JavaScript启用按钮：</p>
            <pre class="prettyprint linenums">$('.nav-tabs').button()</pre>

            <h3 title="Markup">标记</h3>
            <p title="Data attributes are integral to the button plugin. Check out the example code below for the various markup types.">Data属性是按钮组件的组成部分。下面示例代码将展示各种标记类型。</p>

            <h3 title="Options">选项</h3>
            <p title="None"><em>无</em></p>

            <h3 title="Mothods">方法</h3>
            <h4>$().button('toggle')</h4>
            <p title="Toggles push state. Gives the button the appearance that it has been activated.">Toggles push state. Gives the button the appearance that it has been activated.</p>
            <div class="alert alert-info" title="Heads up!  You can enable auto toggling of a button by using the data-toggle attribute.">
              <strong>强调!</strong>
               可以使用 data-toggle 属性自动设置按钮状态。
            </div>
            <pre class="prettyprint linenums">&lt;button type="button" class="btn" data-toggle="button" &gt;…&lt;/button&gt;</pre>
            <h4>$().button('loading')</h4>
            <p title="Sets button state to loading - disables button and swaps text to loading text. Loading text should be defined on the button element using the data attribute data-loading-text.">设置按钮为载入状态 - 按钮无效且将文本变成载入文本 载入文本应该设置在按钮的 <code>data-loading-text</code> 的属性中。
            </p>
            <pre class="prettyprint linenums">&lt;button type="button" class="btn" data-loading-text="loading stuff..." &gt;...&lt;/button&gt;</pre>
            <div class="alert alert-info" title='Firefox persists the disabled state across page loads. A workaround for this is to use autocomplete="off".'>
              <strong>强调!</strong> 
              <a href="https://github.com/twitter/bootstrap/issues/793">Firefox在页面载入时会保持按钮无效状态</a>。变通方案是在按钮上应用 <code>autocomplete="off"</code>。
            </div>
            <h4>$().button('reset')</h4>
            <p title="Resets button state - swaps text to original text.">重置按钮状态 - 将按钮文字复原。</p>
            <h4>$().button(string)</h4>
            <p title="Resets button state - swaps text to any data defined text state.">重置按钮状态 - 将按钮文字变成为指定的文字。</p>
<pre class="prettyprint linenums">&lt;button type="button" class="btn" data-complete-text="finished!" &gt;...&lt;/button&gt;
&lt;script&gt;
  $('.btn').button('complete')
&lt;/script&gt;
</pre>
          </section>



          <!-- Collapse
          ================================================== -->
          <section id="collapse">
            <div class="page-header">
              <h1 title="Collapse">折叠 <small>bootstrap-collapse.js</small></h1>
            </div>

            <h3 title="About">介绍</h3>
            <p title="Get base styles and flexible support for collapsible components like accordions and navigation.">为可折叠的组件(比如手风琴式应用，导航栏)提供基本的样式和灵活的支持。</p>
            <p class="muted" title="Requires the Transitions plugin to be included."><strong>*</strong> 需要包含 Transitions 插件。</p>

            <h2 title="Example accordion">手风琴式应用示例</h2>
            <p title="Using the collapse plugin, we built a simple accordion style widget:">使用折叠插件构造手风琴式的边栏：</p>

            <div class="bs-docs-example">
              <div class="accordion" id="accordion2">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                      Collapsible Group Item #1
                    </a>
                  </div>
                  <div id="collapseOne" class="accordion-body collapse in">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                      Collapsible Group Item #2
                    </a>
                  </div>
                  <div id="collapseTwo" class="accordion-body collapse">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                      Collapsible Group Item #3
                    </a>
                  </div>
                  <div id="collapseThree" class="accordion-body collapse">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>
            </div>
<pre class="prettyprint linenums">
&lt;div class="accordion" id="accordion2"&gt;
  &lt;div class="accordion-group"&gt;
    &lt;div class="accordion-heading"&gt;
      &lt;a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"&gt;
        Collapsible Group Item #1
      &lt;/a&gt;
    &lt;/div&gt;
    &lt;div id="collapseOne" class="accordion-body collapse in"&gt;
      &lt;div class="accordion-inner"&gt;
        Anim pariatur cliche...
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="accordion-group"&gt;
    &lt;div class="accordion-heading"&gt;
      &lt;a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"&gt;
        Collapsible Group Item #2
      &lt;/a&gt;
    &lt;/div&gt;
    &lt;div id="collapseTwo" class="accordion-body collapse"&gt;
      &lt;div class="accordion-inner"&gt;
        Anim pariatur cliche...
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
...
</pre>
            <p title="">You can also use the plugin without the accordion markup. Make a button toggle the expanding and collapsing of another element.</p>
<pre class="prettyprint linenums">
&lt;button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo"&gt;
  simple collapsible
&lt;/button&gt;

&lt;div id="demo" class="collapse in"&gt; … &lt;/div&gt;
</pre>


            <hr class="bs-docs-separator">


            <h2 title="Usage">用法</h2>

            <h3 title="Via data attributes">使用data属性</h3>
            <p title="Just add data-toggle='collapse' and a data-target to element to automatically assign control of a collapsible element. The data-target attribute accepts a css selector to apply the collapse to. Be sure to add the class collapse to the collapsible element. If you'd like it to default open, add the additional class in.">只要在元素上添加 <code>data-toggle="collapse"</code> 和 <code>data-target</code> 就能自动变成可折叠的。
	     <code>data-target</code> 属性接受一个css选择器，以选取元素添加折叠。
	     一定要在折叠元素上添加 <code>.collapse</code> 。如果要默认某折叠元素是打开的，只要添加 <code>.in</code>。</p>
            <p title='To add accordion-like group management to a collapsible control, add the data attribute data-parent="#selector". Refer to the demo to see this in action.'>若要对某个折叠控件添加手风琴风格的分组管理，就要添加 <code>data-parent="#selector"</code>。详见上面的演示。</p>

            <h3 title="Via JavaScript">使用JavaScript</h3>
            <p title="Enable manually with:">手动调用：</p>
            <pre class="prettyprint linenums">$(".collapse").collapse()</pre>

            <h3 title="Options">选项</h3>
            <p title="">Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-parent=""</code>.</p>
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
                 <th style="width: 100px;" title="Name">名称</th>
                 <th style="width: 50px;" title="type">类型</th>
                 <th style="width: 50px;" title="default">默认值</th>
                 <th title="Description">描述</th>
               </tr>
              </thead>
              <tbody>
               <tr>
                 <td>parent</td>
                 <td title="selector">选择器</td>
                 <td>false</td>
                 <td title="If selector then all collapsible elements under the specified parent will be closed when this collapsible item is shown. (similar to traditional accordion behavior)">如果指定了选择器，那么在显示折叠顶时，所有被选取的元素集合中的可折叠项都被关闭（与传统的手风琴应用相似）。</td>
               </tr>
               <tr>
                 <td>toggle</td>
                 <td title="boolean">布尔值</td>
                 <td>true</td>
                 <td title="Toggles the collapsible element on invocation">切换可折叠元素</td>
               </tr>
              </tbody>
            </table>


            <h3 title="Mothods">方法</h3>
            <h4>.collapse(options)</h4>
            <p title="">Activates your content as a collapsible element. Accepts an optional options <code>object</code>.
<pre class="prettyprint linenums">
$('#myCollapsible').collapse({
  toggle: false
})
</pre>
            <h4>.collapse('toggle')</h4>
            <p>Toggles a collapsible element to shown or hidden.</p>
            <h4>.collapse('show')</h4>
            <p>Shows a collapsible element.</p>
            <h4>.collapse('hide')</h4>
            <p>Hides a collapsible element.</p>

            <h3 title="Events">事件</h3>
            <p>Bootstrap's collapse class exposes a few events for hooking into collapse functionality.</p>
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
                 <th style="width: 150px;" title="Event">事件</th>
                 <th title="Description">描述</th>
               </tr>
              </thead>
              <tbody>
               <tr>
                 <td>show</td>
                 <td title="This event fires immediately when the show instance method is called.">该事件在调用 <code>show</code> 实例方法时立刻触发。</td>
               </tr>
               <tr>
                 <td>shown</td>
                 <td title="This event is fired when a collapse element has been made visible to the user (will wait for css transitions to complete).">该事件在可折叠元素已经呈现给用户后触发（等待CSS过渡效果完成）。</td>
               </tr>
               <tr>
                 <td>hide</td>
                 <td title="This event is fired immediately when the hide method has been called.">
                  该事件在调用 <code>hide</code> 方法时立刻触发。</td>
               </tr>
               <tr>
                 <td>hidden</td>
                 <td title="This event is fired when a collapse element has been hidden from the user (will wait for css transitions to complete).">该事件在可折叠元素已经在用户面前完全隐藏后触发（等待CSS过渡效果完成）。</td>
               </tr>
              </tbody>
            </table>
<pre class="prettyprint linenums">
$('#myCollapsible').on('hidden', function () {
  //  做点hidden之后的事情…
})</pre>
          </section>



           <!-- Carousel
          ================================================== -->
          <section id="carousel">
            <div class="page-header">
              <h1 title="Carousel">轮播/旋转木马 <small>bootstrap-carousel.js</small></h1>
            </div>

            <h2 title="Example carousel">轮播示例</h2>
            <p title="">The slideshow below shows a generic plugin and component for cycling through elements like a carousel.</p>
            <div class="bs-docs-example">
              <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="assets/img/bootstrap-mdo-sfmoma-01.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>First Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="assets/img/bootstrap-mdo-sfmoma-02.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Second Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="assets/img/bootstrap-mdo-sfmoma-03.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Third Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
              </div>
            </div>
<pre class="prettyprint linenums">
&lt;div id="myCarousel" class="carousel slide"&gt;
  &lt;!-- Carousel items --&gt;
  &lt;div class="carousel-inner"&gt;
    &lt;div class="active item"&gt;…&lt;/div&gt;
    &lt;div class="item"&gt;…&lt;/div&gt;
    &lt;div class="item"&gt;…&lt;/div&gt;
  &lt;/div&gt;
  &lt;!-- Carousel nav --&gt;
  &lt;a class="carousel-control left" href="#myCarousel" data-slide="prev"&gt;&amp;lsaquo;&lt;/a&gt;
  &lt;a class="carousel-control right" href="#myCarousel" data-slide="next"&gt;&amp;rsaquo;&lt;/a&gt;
&lt;/div&gt;
</pre>

            <div class="alert alert-warning" title="">
              <strong>Heads up!</strong>
              When implementing this carousel, remove the images we have provided and replace them with your own.
            </div>


            <hr class="bs-docs-separator">


            <h2 title="Usage">用法</h2>

            <h3 title="Via data attributes">使用data属性</h3>
            <p>...</p>

            <h3 title="Via JavaScript">使用JavaScript</h3>
            <p title="Call carousel manually with:">通用javascript调用：</p>
            <pre class="prettyprint linenums">$('.carousel').carousel()</pre>

            <h3 title="Options">选项</h3>
            <p title="">Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-interval=""</code>.</p>
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
                 <th style="width: 100px;" title="Name">名称</th>
                 <th style="width: 50px;" title="type">类型</th>
                 <th style="width: 50px;" title="default">默认值</th>
                 <th title="Description">描述</th>
               </tr>
              </thead>
              <tbody>
               <tr>
                 <td>interval</td>
                 <td title="number">数字</td>
                 <td>5000</td>
                 <td>The amount of time to delay between automatically cycling an item. If false, carousel will not automatically cycle.</td>
               </tr>
               <tr>
                 <td>pause</td>
                 <td title="string">字符串</td>
                 <td>"hover"</td>
                 <td>Pauses the cycling of the carousel on mouseenter and resumes the cycling of the carousel on mouseleave.</td>
               </tr>
              </tbody>
            </table>

            <h3 title="Mothods">方法</h3>
            <h4>.carousel(options)</h4>
            <p title="Initializes the carousel with an optional options object and starts cycling through items.">初始化轮播组件，接受一个 <code>object</code> 做为可选参数并开始循环播环。</p>
<pre class="prettyprint linenums">
$('.carousel').carousel({
  interval: 2000
})
</pre>
            <h4>.carousel('cycle')</h4>
            <p title="Cycles through the carousel items from left to right.">从左向右循环播放。</p>
            <h4>.carousel('pause')</h4>
            <p title="Stops the carousel from cycling through items.">中止播放。</p>
            <h4>.carousel(number)</h4>
            <p title="Cycles the carousel to a particular frame (0 based, similar to an array).">播放到某个特定的帧(与数组类似，从0开始计数)。</p>
            <h4>.carousel('prev')</h4>
            <p title="Cycles to the previous item.">回到上一帧。</p>
            <h4>.carousel('next')</h4>
            <p title="Cycles to the next item.">回到下一帧。</p>

            <h3 title="Events">事件</h3>
            <p title="">Bootstrap's carousel class exposes two events for hooking into carousel functionality.</p>
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
                 <th style="width: 150px;" title="Event">事件</th>
                 <th title="Description">描述</th>
               </tr>
              </thead>
              <tbody>
               <tr>
                 <td>slide</td>
                 <td title="This event fires immediately when the slide instance method is invoked.">该事件在调用 <code>slide</code> 实例方法时立刻触发。</td>
               </tr>
               <tr>
                 <td>slid</td>
                 <td title="This event is fired when the carousel has completed its slide transition.">该事件在轮播项切换效果完成之后触发。</td>
               </tr>
              </tbody>
            </table>
          </section>



          <!-- Typeahead
          ================================================== -->
          <section id="typeahead">
            <div class="page-header">
              <h1 title="Typeahead">输入提醒 <small>bootstrap-typeahead.js</small></h1>
            </div>
			

            <h2 title="Example">示例</h2>
            <p title="A basic, easily extended plugin for quickly creating elegant typeaheads with any form text input.">简单，易于拓展，可迅速地为表单中的文本输入框创建优雅的提醒。如下：</p>
            <div class="bs-docs-example" style="background-color: #f5f5f5;">
              <input type="text" class="span3" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
            </div>
            <pre class="prettyprint linenums">&lt;input type="text" data-provide="typeahead"&gt;</pre>


            <hr class="bs-docs-separator">


            <h2 title="Usage">用法</h2>

            <h3 title="Via data attributes">使用data属性</h3>
            <p title="Add data attributes to register an element with typeahead functionality as shown in the example above.">使用data-属性为一个元素加入输入提醒功能。</p>

            <h3 title="Via JavaScript">使用JavaScript</h3>
            <p title="Call the typeahead manually with:">手动调用输入提醒：</p>
            <pre class="prettyprint linenums">$('.typeahead').typeahead()</pre>

            <h3 title="Options">选项</h3>
            <p title="">Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-source=""</code>.</p>
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
                 <th style="width: 100px;" title="Name">名称</th>
                 <th style="width: 50px;" title="type">类型</th>
                 <th style="width: 100px;" title="default">默认值</th>
                 <th title="Description">描述</th>
               </tr>
              </thead>
              <tbody>
                <tr>
                 <td>source</td>
                 <td title="array, function">数组,函数</td>
                 <td>[ ]</td>
                 <td title="The data source to query against. May be an array of strings or a function. The function is passed two arguments, the query value in the input field and the process callback. The function may be used synchronously by returning the data source directly or asynchronously via the process callback's single argument.">用于查询的数据源。May be an array of strings or a function. The function is passed two arguments, the <code>query</code> value in the input field and the <code>process</code> callback. The function may be used synchronously by returning the data source directly or asynchronously via the <code>process</code> callback's single argument.</td>
               </tr>
               <tr>
                 <td>items</td>
                 <td title="number">数字</td>
                 <td>8</td>
                 <td title="The max number of items to display in the dropdown.">下拉列表中的最多显示个数。</td>
               </tr>
               <tr>
                 <td>minLength</td>
                 <td title="number">数字</td>
                 <td>1</td>
                 <td title="The minimum character length needed before triggering autocomplete suggestions">触发自动完成插件所需要的最小字符数。</td>
               </tr>
               <tr>
                 <td>matcher</td>
                 <td title="function">函数</td>
                 <td title="case insensitive">不区分大小写</td>
                 <td title="The method used to determine if a query matches an item. Accepts a single argument, the item against which to test the query. Access the current query with this.query. Return a boolean true if query is a match.">该matcher函数用于决定某个查询是否匹配某个项。它接受唯一一个参数， <code>item</code> ，用于测试是否符合查询。通过 <code>this.query</code> 访问当前查询，如果匹配查询，就返回一个布尔值 <code>true</code>。</td>
               </tr>
               <tr>
                 <td>sorter</td>
                 <td title="function">函数</td>
                 <td title="exact match, case sensitive, case insensitive">精确匹配，<br>区分大小写，<br>不区分大小写</td>
                 <td title="Method used to sort autocomplete results. Accepts a single argument items and has the scope of the typeahead instance. Reference the current query with this.query.">该函数用来排序自动完成的结果。它接受唯一一个参数 <code>items</code> ，还拥有输入提醒的范围。使用 <code>this.query</code> 引用当前查询。</td>
               </tr>
               <tr>
                 <td>updater</td>
                 <td title="function">函数</td>
                 <td title="returns selected item">返回选定的项目</td>
                 <td title="The method used to return selected item. Accepts a single argument, the item and has the scope of the typeahead instance.">该方法用于返回选定的项目。接受一个参数，实现该项的输入提醒的限定范围。</td>
               </tr>
               <tr>
                 <td>highlighter</td>
                 <td title="function">函数</td>
                 <td title="highlights all default matches">高亮所有默认的匹配</td>
                 <td title="Method used to highlight autocomplete results. Accepts a single argument item and has the scope of the typeahead instance. Should return html.">该函数用来高亮自动完成的结果。它接受唯一一个参数 <code>items</code> ，还拥有输入提醒的范围。应该返回html。</td>
               </tr>
              </tbody>
            </table>

            <h3 title="Mothods">方法</h3>
            <h4>.typeahead(options)</h4>
            <p title="Initializes an input with a typeahead.">使用输入提醒初始化一个输入框。</p>
          </section>



          <!-- Affix
          ================================================== -->
          <section id="affix">
            <div class="page-header">
              <h1 title="Affix">跟随 <small>bootstrap-affix.js</small></h1>
            </div>

            <h2 title="Example">示例</h2>
            <p title="">The subnavigation on the left is a live demo of the affix plugin.</p>

            <hr class="bs-docs-separator">

            <h2>Usage</h2>

            <h3 title="Via data attributes">使用data属性</h3>
            <p title="">To easily add affix behavior to any element, just add <code>data-spy="affix"</code> to the element you want to spy on. Then use offsets to define when to toggle the pinning of an element on and off.</p>

            <pre class="prettyprint linenums">&lt;div data-spy="affix" data-offset-top="200"&gt;...&lt;/div&gt;</pre>

            <div class="alert alert-info" title="">
              <strong>Heads up!</strong>
              You must manage the position of a pinned element and the behavior of its immediate parent. Position is controlled by <code>affix</code>, <code>affix-top</code>, and <code>affix-bottom</code>. Remember to check for a potentially collapsed parent when the affix kicks in as it's removing content from the normal flow of the page.
            </div>

            <h3>Via JavaScript</h3>
            <p title="">Call the affix plugin via JavaScript:</p>
            <pre class="prettyprint linenums">$('#navbar').affix()</pre>

            <h3 title="Mothods">方法</h3>
            <h4>.affix('refresh')</h4>
            <p title="">When using affix in conjunction with adding or removing of elements from the DOM, you'll want to call the refresh method:</p>
<pre class="prettyprint linenums">
$('[data-spy="affix"]').each(function () {
  $(this).affix('refresh')
});
</pre>
          <h3 title="Options">选项</h3>
          <p title="">Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-offset-top="200"</code>.</p>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;">Name</th>
               <th style="width: 100px;">type</th>
               <th style="width: 50px;">default</th>
               <th title="Description">描述</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>offset</td>
               <td>number | function | object</td>
               <td>10</td>
               <td>Pixels to offset from screen when calculating position of scroll. If a single number is provide, the offset will be applied in both top and left directions. To listen for a single direction, or multiple unique offsets, just provided an object <code>offset: { x: 10 }</code>. Use a function when you need to dynamically provide an offset (useful for some responsive designs).</td>
             </tr>
            </tbody>
          </table>
        </section>



      </div>
    </div>
	
</div>
<?php include("common/footer.html");?>