<?php $page = "javascript" ?>
<?php $title="Javascript"?>
<?php $description = "" ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?> · Oricode - Twitter Bootstrap</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $description; ?>">
<link href="assets/css/bootstrap.css" rel="stylesheet">

<link href="http://pic.lvmama.com/styles/new_v/header-air.css" rel="stylesheet" />
<!--<link href="http://10.3.1.41/search/css/header-air.css" rel="stylesheet" />-->
<link href="http://10.3.1.41/search/css/ui-common.css" rel="stylesheet">
<link href="http://10.3.1.41/search/css/ui-search.css" rel="stylesheet">
<link href="http://10.3.1.41/search/css/ui-components.css" rel="stylesheet">
<link href="http://10.3.1.41/rili/styles/calendar.css" rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<body>
<!-- Navbar
================================================== -->

<!-- 
===============================================
===============================================
-------------------- 分割线 --------------------
===============================================
===============================================
-->


<div class="container"> <br>
<br>
<br>
<br>
<div class="tooltip fade top in" style="top: 485px; left: 109px; display: block; "><div class="tooltip-arrow"></div><div class="tooltip-inner"><h5 class="tooltip-title">超级自由行</h5><div class="tooltip-content"><p>超级自由行产品可自选航班、景点和酒店</p></div></div></div>
<br>
<br>
<br>

	<a class="icon301" rel="tooltip" data-content='超级自由行产品可自选航班、景点和酒店' data-original-title='超级自由行产品介绍' title="超级自由行" ></a>
<a href="#" class="btn btn-large btn-danger" rel="popover" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">Click to toggle popover</a>
</div>

        <!-- Tooltips
================================================== -->
        <section id="tooltips">
            <div class="page-header">
                <h1>Tooltips <small>bootstrap-tooltip.js</small></h1>
            </div>
            <h2>Examples</h2>
            <p>Inspired by the excellent jQuery.tipsy plugin written by Jason Frame; Tooltips are an updated version, which don't rely on images, use CSS3 for animations, and data-attributes for local title storage.</p>
            <p>Hover over the links below to see tooltips:</p>
            <div class="bs-docs-example tooltip-demo">
                <p class="muted" style="margin-bottom: 0;">Tight pants next level keffiyeh <a href="#" rel="tooltip" title="Default tooltip">you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="#" rel="tooltip" title="Another tooltip">have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="#" rel="tooltip" title="Another one here too">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" rel="tooltip" title="The last tip!">twitter handle</a> freegan cred raw denim single-origin coffee viral. </p>
            </div>
            <h3>Four directions</h3>
            <div class="bs-docs-example tooltip-demo">
                <ul class="bs-docs-tooltip-examples">
                    <li><a href="#" rel="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</a></li>
                    <li><a href="#" rel="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</a></li>
                    <li><a href="#" rel="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</a></li>
                    <li><a href="#" rel="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</a></li>
                </ul>
            </div>
            <hr class="bs-docs-separator">
            <h2>Usage</h2>
            <p>Trigger the tooltip via JavaScript:</p>
            <pre class="prettyprint linenums">$('#example').tooltip(options)</pre>
            <h3>Options</h3>
            <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-animation=""</code>.</p>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 100px;">Name</th>
                        <th style="width: 100px;">type</th>
                        <th style="width: 50px;">default</th>
                        <th>description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>animation</td>
                        <td>boolean</td>
                        <td>true</td>
                        <td>apply a css fade transition to the tooltip</td>
                    </tr>
                    <tr>
                        <td>html</td>
                        <td>boolean</td>
                        <td>true</td>
                        <td>Insert html into the tooltip. If false, jquery's <code>text</code> method will be used to insert content into the dom. Use text if you're worried about XSS attacks.</td>
                    </tr>
                    <tr>
                        <td>placement</td>
                        <td>string|function</td>
                        <td>'top'</td>
                        <td>how to position the tooltip - top | bottom | left | right</td>
                    </tr>
                    <tr>
                        <td>selector</td>
                        <td>string</td>
                        <td>false</td>
                        <td>If a selector is provided, tooltip objects will be delegated to the specified targets.</td>
                    </tr>
                    <tr>
                        <td>title</td>
                        <td>string | function</td>
                        <td>''</td>
                        <td>default title value if `title` tag isn't present</td>
                    </tr>
                    <tr>
                        <td>trigger</td>
                        <td>string</td>
                        <td>'hover'</td>
                        <td>how tooltip is triggered - click | hover | focus | manual</td>
                    </tr>
                    <tr>
                        <td>delay</td>
                        <td>number | object</td>
                        <td>0</td>
                        <td><p>delay showing and hiding the tooltip (ms) - does not apply to manual trigger type</p>
                            <p>If a number is supplied, delay is applied to both hide/show</p>
                            <p>Object structure is: <code>delay: { show: 500, hide: 100 }</code></p></td>
                    </tr>
                </tbody>
            </table>
            <div class="alert alert-info"> <strong>Heads up!</strong> Options for individual tooltips can alternatively be specified through the use of data attributes. </div>
            <h3>Markup</h3>
            <p>For performance reasons, the Tooltip and Popover data-apis are opt in. If you would like to use them just specify a selector option.</p>
            <pre class="prettyprint linenums">&lt;a href="#" rel="tooltip" title="first tooltip"&gt;hover over me&lt;/a&gt;</pre>
            <h3>Methods</h3>
            <h4>$().tooltip(options)</h4>
            <p>Attaches a tooltip handler to an element collection.</p>
            <h4>.tooltip('show')</h4>
            <p>Reveals an element's tooltip.</p>
            <pre class="prettyprint linenums">$('#element').tooltip('show')</pre>
            <h4>.tooltip('hide')</h4>
            <p>Hides an element's tooltip.</p>
            <pre class="prettyprint linenums">$('#element').tooltip('hide')</pre>
            <h4>.tooltip('toggle')</h4>
            <p>Toggles an element's tooltip.</p>
            <pre class="prettyprint linenums">$('#element').tooltip('toggle')</pre>
            <h4>.tooltip('destroy')</h4>
            <p>Hides and destroys an element's tooltip.</p>
            <pre class="prettyprint linenums">$('#element').tooltip('destroy')</pre>
        </section>
        
        <!-- Popovers
================================================== -->
        <section id="popovers">
            <div class="page-header">
                <h1>Popovers <small>bootstrap-popover.js</small></h1>
            </div>
            <h2>Examples</h2>
            <p>Add small overlays of content, like those on the iPad, to any element for housing secondary information. Hover over the button to trigger the popover. <strong>Requires <a href="#tooltips">Tooltip</a> to be included.</strong></p>
            <h3>Static popover</h3>
            <p>Four options are available: top, right, bottom, and left aligned.</p>
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
            <h3>Live demo</h3>
            
            <hr class="bs-docs-separator">
            <h2>Usage</h2>
            <p>Enable popovers via JavaScript:</p>
            <pre class="prettyprint linenums">$('#example').popover(options)</pre>
            <h3>Options</h3>
            <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-animation=""</code>.</p>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 100px;">Name</th>
                        <th style="width: 100px;">type</th>
                        <th style="width: 50px;">default</th>
                        <th>description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>animation</td>
                        <td>boolean</td>
                        <td>true</td>
                        <td>apply a css fade transition to the tooltip</td>
                    </tr>
                    <tr>
                        <td>html</td>
                        <td>boolean</td>
                        <td>true</td>
                        <td>Insert html into the popover. If false, jquery's <code>text</code> method will be used to insert content into the dom. Use text if you're worried about XSS attacks.</td>
                    </tr>
                    <tr>
                        <td>placement</td>
                        <td>string|function</td>
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
                        <td><p>delay showing and hiding the popover (ms) - does not apply to manual trigger type</p>
                            <p>If a number is supplied, delay is applied to both hide/show</p>
                            <p>Object structure is: <code>delay: { show: 500, hide: 100 }</code></p></td>
                    </tr>
                </tbody>
            </table>
            <div class="alert alert-info"> <strong>Heads up!</strong> Options for individual popovers can alternatively be specified through the use of data attributes. </div>
            <h3>Markup</h3>
            <p>For performance reasons, the Tooltip and Popover data-apis are opt in. If you would like to use them just specify a selector option.</p>
            <h3>Methods</h3>
            <h4>$().popover(options)</h4>
            <p>Initializes popovers for an element collection.</p>
            <h4>.popover('show')</h4>
            <p>Reveals an elements popover.</p>
            <pre class="prettyprint linenums">$('#element').popover('show')</pre>
            <h4>.popover('hide')</h4>
            <p>Hides an elements popover.</p>
            <pre class="prettyprint linenums">$('#element').popover('hide')</pre>
            <h4>.popover('toggle')</h4>
            <p>Toggles an elements popover.</p>
            <pre class="prettyprint linenums">$('#element').popover('toggle')</pre>
            <h4>.popover('destroy')</h4>
            <p>Hides and destroys an element's popover.</p>
            <pre class="prettyprint linenums">$('#element').popover('destroy')</pre>
        </section>
<!-- Footer
================================================== -->



<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<!--<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>--> 
<!--<script type="text/javascript" src="assets/widgets.js"></script> -->

<!--<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.min.js"></script>
<script>window.jQuery || document.write('<script src="/OriCode/jquery.min.js"><\/script>')</script>--> 
<script src="assets/js/jquery.js"></script> 

<!--<script src="assets/js/bootstrap-tooltip.js"></script> -->
<script src="http://10.3.1.41/search/js/js/ori-tooltip.js"></script> 
<script src="assets/js/bootstrap-popover.js"></script> 
<script src="assets/js/bootstrap-affix.js"></script>

<!--<script src="assets/js/application.js"></script>-->
<script>
!function ($) {

  $(function(){

    var $window = $(window)

    // Disable certain links in docs
    $('a[href=#]').click(function (e) {
      e.preventDefault()
    })

    // tooltip demo
//    $('body').tooltip({
//      selector: "a[rel=tooltip]"
//    })

    $('a[class^="icon"]').tooltip()
    $('.popover-test').popover()

    // popover demo
    $("a[rel=popover]")
      .popover({trigger: 'hover'})
      .click(function(e) {
        e.preventDefault()
      })

  })

}(window.jQuery)

</script>
<!--[if lte IE 6]>

<![endif]--> 
<!--<script src="/OriCode/mbase/DD_belatedPNG-min.js" ></script>
<script type="text/javascript">
   DD_belatedPNG.fix('.ie6png');
</script>
--> 

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/OriCode/mbase/js/jquery-1.7.2.min.js"><\/script>')</script>


<script src="/OriCode/mbase/js/jquery-ui-1.8.21.custom.min.js"></script>
<script src="/OriCode/mbase/js/jquery.tools.min.js"></script>
<script src="/OriCode/mbase/js/jquery.imgareaselect.js"></script>
<script src="/OriCode/mbase/js/ui-custom.js"></script>-->
</body>
</html>
