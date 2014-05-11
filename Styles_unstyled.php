<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Styles - Creating Webpages</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="author" content="Paul Spangler" />
<link rel="shortcut icon" href="http://spanglerco.com/favicon.gif" />
	<style type="text/css">@import url("http://webpages.spanglerco.com/search/include/js_suggest/SuggestFramework.css");</style>
	<script type="text/javascript" src="http://webpages.spanglerco.com/search/include/js_suggest/SuggestFramework.js"></script>
	<script type="text/javascript">
		window.onload = function()
		{
			var query = document.getElementById('query');
			query.setAttribute("action", "http://webpages.spanglerco.com/search/include/js_suggest/suggest.php");
			query.setAttribute("columns", "2");
			query.setAttribute("autocomplete", "on");
			query.setAttribute("delay", "1500");
			query = null;
			initializeSuggestFramework();
		};
	</script>
<!-- /suggest script -->
</head>
<body>
<!--sphider_noindex-->
<div id="page">
<div id="header">
<div id="headerText">
<div id="search">Search the website:<form action="http://webpages.spanglerco.com/search/search.php" method="get" style="display: inline;">
<table><tr><td>
<div style="text-align: left; display: inline;"> 
<input type="text" name="query" id="query" size="40" value="" />
</div>
</td>

<td>
<input type="submit" value="Search" />
<input type="hidden" name="search" value="1" />
</td></tr></table>
</form>
</div>
<div id="title">Creating Webpages</div>
</div>
<ul id="topLinks">
<li><a href="http://webpages.spanglerco.com">Home</a></li>
<!--<li><a href="http://webpages.spanglerco.com">Index</a></li>
<li><a href="http://webpages.spanglerco.com">Glossary</a></li>-->
<li><a href="http://webpages.spanglerco.com/search/search.php">Search</a></li>
<!--<li><a href="http://webpages.spanglerco.com">Table of Contents</a></li>-->
</ul>

</div>
<div id="main">
<div id="leftLinks">
<div id="sectionTitle">sections</div>
<div>
Overview
<ul>
<li><a href="http://webpages.spanglerco.com/Getting_Started.php">Getting Started</a></li>
</ul>
</div>
<div>
Basic HTML
<ul>
<li><a href="http://webpages.spanglerco.com/HTML_Intro.php">HTML Intro</a></li>

<li><a href="http://webpages.spanglerco.com/Basic_Tags.php">Basic Tags</a></li>
<li><a href="http://webpages.spanglerco.com/Tag_Attributes.php">Tag Attributes</a></li>
<li><a href="http://webpages.spanglerco.com/Lists.php">Lists</a></li>
<li><a href="http://webpages.spanglerco.com/HTML_Elements.php">HTML Elements</a></li>
<li><a href="http://webpages.spanglerco.com/Formatting.php">Formatting</a></li>
<li><a href="http://webpages.spanglerco.com/Tables.php">Tables</a></li>
</ul>
</div>
<div>
Advanced HTML
<ul>

<li><a href="http://webpages.spanglerco.com/Styles.php">Styles</a></li>
<li><a href="http://webpages.spanglerco.com/Text_and_Fonts.php">Text and Fonts</a></li>
<li><a href="http://webpages.spanglerco.com/Links.php">Links</a></li>
<li><a href="http://webpages.spanglerco.com/Color.php">Color</a></li>
<li><a href="http://webpages.spanglerco.com/HTML_Documents.php">HTML Documents</a></li>
<li><a href="http://webpages.spanglerco.com/Advanced_Styles.php">Advanced Styles</a></li>
</ul>
</div>
</div>
<!--/sphider_noindex-->
<div id="splash">Advanced HTML</div>

<div id="content">
<h1>Styles</h1>
<div id="key">
Key points
<ul>
<li>HTML uses CSS to describe a document's <i>appearance</i>.</li><li>Using the <i>style</i> attribute, most tags allow you to change their appearance.</li><li>Styles <i>cascade</i> from a parent element to all of the other elements in it. Web browsers combine all of the styles to determine the final appearance of the element.</li></ul></div><p>Previous sections introduced how to format text with bold and italics. What about color? HTML provides a wide range of options for changing the appearance of an HTML document. There are three ways to add styles to HTML, but all of them are very similar. This section will focus on one: the <i>style</i> attribute.</p>

<h3>CSS</h3>
<p>First, we need a way to describe how an HTML document should look. Recall from the HTML Introduction section that HTML defines the <i>structure</i> of a document. To tell web browsers about the <i>appearance</i> of a document, we use a form of Cascading Style Sheets (CSS). In general, HTML documents include style sheets written in CSS that the web browser combines with the HTML to add visual styles to the structure of the text. However, HTML also allows small pieces of CSS code to be embedded into each tag using the <i>style</i> attribute.</p>
<p style="text-align: center;">For example, this paragraph was centered using the style attribute.</p>
<pre class="example"><code>&lt;p style="text-align: center;"&gt;For example, this paragraph was centered using the style attribute.&lt;/p&gt;</code>

Using the style attribute to center a paragraph</pre><p>You can <a href="Styles_unstyled.php">click here</a> to view this page with the CSS styles removed.</p>
<h3>The Style Attribute</h3>
<p>The style attribute can appear on most HTML tags that contain content (such as &lt;p&gt;, &lt;table&gt;, &lt;ul&gt;, and even &lt;i&gt;). The value of the style attribute is a bit of CSS that controls the appearence of that HTML element (remember that HTML elements include the actual tag and its content). CSS styles are of the form "<i>property</i>: <i>value</i>;". <i>Property</i> determines what part of the element's apperance it being defined, and <i>value</i> is that definition. Here's another example of using styles:</p>

<pre class="example"><code>&lt;table border="1" style="text-align: center;"&gt;
	&lt;tr&gt;
		&lt;td style="color: red;"&gt;red&lt;/td&gt;
		&lt;td style="color: blue;"&gt;blue&lt;/td&gt;
		&lt;td style="color: green; width: 200px;"&gt;wide green&lt;/td&gt;

	&lt;/tr&gt;
&lt;/table&gt;</code>
Using different styles</pre><table border="1" style="text-align: center;">
	<tr>
		<td style="color: red;">red</td>
		<td style="color: blue;">blue</td>
		<td style="color: green; width: 200px;">wide green</td>

	</tr>
</table>
<p>When applied to the table, the <i>text-align</i> style property affects all of the text in the table. Also, each table cell receives its own <i>color</i> style, which changes the text color. The last table cell defines two style properties, color and <i>width</i>, separated by a semicolon. The combination of multiple properties from different tags is called style <i>cascading</i>, which is the source of the name of CSS. A single HTML element's appearance is affected not only by its own style attribute, but the styles of each of its parent elements as well.</p>
<h3>Common Style Properties</h3>

<p>Later sections will go into more detail about styling text and using color, but here are some basic CSS properties that you can use in an element's style attribute:</p>
<table border="1">
	<tr>
		<th>Property</th>
		<th>Values</th>
		<th>Result</th>
	</tr>
	<tr>

		<td>text-align</td>
		<td>left, center, right, or justify</td>
		<td style="text-align: right;">This text is right aligned</td>
	</tr>
	<tr>
		<td>color</td>
		<td>a color name (like red or teal)</td>

		<td style="color: teal;">Teal?</td>
	</tr>
	<tr>
		<td>width, height</td>
		<td>number of pixels (px) or in em</td>
		<td><p style="width: 10em;">Em units depend on the current font</p></td>
	</tr>

	<tr>
		<td>background-color</td>
		<td>a color name (like blue or olive)</td>
		<td style="background-color: olive;">Try applying this property to the &lt;body&gt; tag</td>
	</tr>
	<tr>

		<td>border</td>
		<td><i>width</i> <i>type</i> <i>color</i></td>
		<td style="border: 5px double maroon;">Some common border types are solid, double, dashed, and groove</td>
	</tr>
	<tr>

		<td>font-size</td>
		<td>xx-small, medium, xx-large, etc. or a number in px</td>
		<td style="font-size: 200%;">Font size can also be a percentage of the parent element's font</td>
	</tr>
</table>
<pre class="example"><code>&lt;table border="1"&gt;
	&lt;tr&gt;

		&lt;th&gt;Property&lt;/th&gt;
		&lt;th&gt;Values&lt;/th&gt;
		&lt;th&gt;Result&lt;/th&gt;
	&lt;/tr&gt;

	&lt;tr&gt;
		&lt;td&gt;text-align&lt;/td&gt;
		&lt;td&gt;left, center, right, or justify&lt;/td&gt;
		&lt;td style="text-align: right;"&gt;This text is right aligned&lt;/td&gt;

	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;color&lt;/td&gt;
		&lt;td&gt;a color name (like red or teal)&lt;/td&gt;
		&lt;td style="color: teal;"&gt;Teal?&lt;/td&gt;

	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;width, height&lt;/td&gt;
		&lt;td&gt;number of pixels (px) or in em&lt;/td&gt;
		&lt;td&gt;&lt;p style="width: 10em;"&gt;Em units depend on the current font&lt;/p&gt;&lt;/td&gt;

	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;background-color&lt;/td&gt;
		&lt;td&gt;a color name (like blue or olive)&lt;/td&gt;
		&lt;td style="background-color: olive;"&gt;Try applying this property to the body tag&lt;/td&gt;

	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;border&lt;/td&gt;
		&lt;td&gt;&lt;i&gt;width&lt;/i&gt; &lt;i&gt;type&lt;/i&gt; &lt;i&gt;color&lt;/i&gt;&lt;/td&gt;

		&lt;td style="border: 5px double maroon;"&gt;Some common border types are solid, double, dashed, and groove&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;font-size&lt;/td&gt;

		&lt;td&gt;xx-small, medium, xx-large, etc. or a number in px&lt;/td&gt;
		&lt;td style="font-size: 200%;"&gt;Font size can also be a percentage of the parent element's font&lt;/td&gt;
	&lt;/tr&gt;
&lt;/table&gt;</code>
Some common CSS style properties</pre><!--sphider_noindex-->

<div id="navigation">
<a href="Tables.php">&lt;- Previous section</a><a class="float-right" href="Text_and_Fonts.php">Next section -&gt;</a></div>
</div>
<div id="clear"></div>
</div>
</div>
<div id="footer">Copyright &copy; 2010 <a href="http://spanglerco.com/websites.htm">Paul Spangler</a></div>
</body>
<!--/sphider_noindex-->
</html>