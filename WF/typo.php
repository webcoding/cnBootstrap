
<h1>排版 <small>详细参见 <a href="xOne/typo.html">typo.css</a></small></h1>
<p>首先应用 Reset 重设，对常用标签进行使用规划，使其应用达到恰到好处的效果。</p>

<h2><a href="xOne/less/normalize.css" title="标签无差异化">normalize</a> 与 <a href="xOne/less/reset.css" title="传统样式重设">reset</a> 重设</h2>
<p>reset.css 是 Pandora 的浏览器重设样式，消除浏览器布局标签的默认属性，使用前可引用无差异化样式 normalize.css 效果更佳。</p>
<p>Pandora 的 reset.css 是极精简的重置样式，并综合AliceUI 及 bootstrap等修改 <a href="http://necolas.github.com/normalize.css/">normalize.css</a> 形成无差异化的浏览器基础样式，统一浏览器的默认标签属性。</p>

<p>除 <code>reset.css</code> 以及 Pandora 适合中文排版的 <code>typo.css</code> 样式(修改自 <abbr title="typo.css by @sofish">typo</abbr> 与 <abbr title="bootstrap by @mdo and @fat">bootstrap</abbr>)外，Pandora 还内置了大量可组合的便捷实用的样式，需要注意这类样式，如：<code>.btn</code>，详情参看<a heft="#keyword">Pandora项目保留字</a>。</p>
<p><span class="label label-info">注意!</span> 当前国内布局通常要使用reset，但现在也有越来越多的攻城师开始注意 normalize的作用了，充分发挥浏览器默认属性的优势。</p>

<h3>常用功能类</h3>

<pre>
normalize.css 最常用的清除浮动
combo.css 便捷组合样式表中
</pre>

<ul>
    <li><p><code>clearfix</code> 清除浮动</p></li>
    <li><p><code>hide</code> 隐藏元素</p></li>
    <li><p><code>.fl</code> <code>.fr</code> 左右浮动</p></li>
    <li><p><code>center-box</code> <code>center-item</code> 浮动居中</p></li>
    <li><p><code>ellipsis</code> 文字单行溢出省略号</p>
        <div class="ellipsis" style="width:100px;">单行文本，这里文字太多了太多了</div>
    </li>
    <li><p><code>text-justify</code> 文本两端对齐</p></li>
</ul>

