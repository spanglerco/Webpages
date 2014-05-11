<?php
require_once('template.php');
head('Text and Fonts', 'Advanced HTML');
keyPoints('Text can be styled using the &lt;span&gt; tag, or groups of elements can be styled with the &lt;div&gt; tag.',
			'Block elements can contain other block or inline elements, but inline elements can only contain inline elements.',
			'You should carefully consider alternative fonts in case a user\'s web browser does not support your favorite.');
?>
<h3>Structuring Text</h3>
<p>HTML provides several tags other than &lt;p&gt; for breaking text into pieces. Earlier sections discussed lists and tables, but some other <i>containers</i> are &lt;div&gt; (division) and &lt;span&gt;. Both of these tags are mainly used to apply styles to sections of an HTML document. For example, the following text can be written in two ways:</p>
<div style="color: maroon;">
	<p>Maroon paragraph 1.</p>
	<p>Another maroon paragraph.</p>
</div>
<?php insertCode('textColor', true); ?>
<?php insertCode('textDiv', true); ?>
<p>A single &lt;div&gt; element can contain multiple paragraphs, or even other containers. Since styles cascade, any styles added to the div element will be given to all of the paragraphs inside the div.</p>
<h3>The &lt;span&gt; Tag</h3>
<p>Another useful tag for styling text is the &lt;span&gt; tag. By itself, it doesn't do anything, but when given a style attribute, it allows only part of a paragraph to be styled:</p>
<?php insertCode('textSpan', true); ?>
<p>Which produces the following text. This is normal text, but <span style="color: blue; font-weight: bold;">this is not</span>.</p>
<h3>Block or Inline</h3>
<p>The difference between &lt;div&gt; and &lt;span&gt; is that the div tag is called a <i>block</i> tag, while span is an <i>inline</i> tag. Block elements can contain other block or inline elements, but cause web browsers to add space around them. The &lt;p&gt; tag is a block element, which is why two paragraphs start on different lines.</p>
<p>On the other hand, inline elements do not start on a new line, but can only contain other inline elements. Putting a &lt;div&gt; inside of a &lt;span&gt; would work in modern browsers, but would not be correct (and is likely to not be consistent across different browsers). Plain text by itself is considered an inline element.</p>
<h3>Font</h3>
<p>Web browser automatically size header tags, but most times that's not enough. Changing font size was introduced in the previous section about styles, but there is also a CSS style property for setting the font for text. The <i>font-family</i> property allows you to set the font for any HTML tag to a list of choices. The first font that the web browser supports in the list will be used. For example:</p>
<p style="font-family: madeupfont, Harrington, Helvetica, Arial, serif;">Some of you will see Harrington font, but you may see Helvetica, Arial, or a generic serif font.</p>
<?php insertCode('textFont', true); ?>
<p>The font-family property should always contain at least one "standard" font and one of the default fonts, serif or sans-serif. Otherwise the browser is free to choose whatever font it wants.</p>
<?php
footer('Styles.php', 'Links.php');
?>