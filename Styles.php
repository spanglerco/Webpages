<?php
require_once('template.php');
head('Styles', 'Advanced HTML');
keyPoints('HTML uses CSS to describe a document\'s <i>appearance</i>.',
			'Using the <i>style</i> attribute, most tags allow you to change their appearance.',
			'Styles <i>cascade</i> from a parent element to all of the other elements in it. Web browsers combine all of the styles to determine the final appearance of the element.');
?>
<p>Previous sections introduced how to format text with bold and italics. What about color? HTML provides a wide range of options for changing the appearance of an HTML document. There are three ways to add styles to HTML, but all of them are very similar. This section will focus on one: the <i>style</i> attribute.</p>
<h3>CSS</h3>
<p>First, we need a way to describe how an HTML document should look. Recall from the HTML Introduction section that HTML defines the <i>structure</i> of a document. To tell web browsers about the <i>appearance</i> of a document, we use a form of Cascading Style Sheets (CSS). In general, HTML documents include style sheets written in CSS that the web browser combines with the HTML to add visual styles to the structure of the text. However, HTML also allows small pieces of CSS code to be embedded into each tag using the <i>style</i> attribute.</p>
<p style="text-align: center;">For example, this paragraph was centered using the style attribute.</p>
<?php insertCode('stylesCenter', true); ?>
<p>You can <a href="Styles_unstyled.php">click here</a> to view this page with the CSS styles removed.</p>
<h3>The Style Attribute</h3>
<p>The style attribute can appear on most HTML tags that contain content (such as &lt;p&gt;, &lt;table&gt;, &lt;ul&gt;, and even &lt;i&gt;). The value of the style attribute is a bit of CSS that controls the appearence of that HTML element (remember that HTML elements include the actual tag and its content). CSS styles are of the form "<i>property</i>: <i>value</i>;". <i>Property</i> determines what part of the element's apperance it being defined, and <i>value</i> is that definition. Here's another example of using styles:</p>
<?php insertCode('stylesMultiple', true); ?>
<table border="1" style="text-align: center;">
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
<?php insertCode('stylesCommon', true); ?>
<?php
footer('Tables.php', 'Text_and_Fonts.php');
?>