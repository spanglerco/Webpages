<?php
require_once('template.php');
head('Advanced Styles', 'Advanced HTML');
keyPoints('CSS styles can be defined in the head of an HTML document using the &lt;style&gt; tag.',
			'Styles in the head are applied to elements by tag, class, or id.',
			'When cascading styles conflict, the most specific one will be used.');
?>
<h3>Defining Styles in the Head</h3>
<p>Besides using the style attribute, HTML includes a &lt;style&gt; tag that can be placed in the <b>&lt;head&gt;</b> of an HTML document. Anything in the style tag affects pieces of the entire document. Inside the style tag, rather than using HTML, you include CSS code, very similar to the code used in style attributes. The only difference is that styles are grouped together using { and }, and groups are assigned a tag that they affect. Here is a simple example:</p>
<?php insertCode('advStyleGreen', true); ?>
<p>Which produces text similar to: This is normal text, this is <b style="color: green;">green</b> text. This is also <b style="color: green;">green</b>. First, the style tag requires the <i>type</i> attribute, whose only possible value is "text/css". This attribute tells the browser what type of style information is being used. Second, b { starts a group of styles that affect <i>every</i> &lt;b&gt; tag in the document. Then, color: green is a standard CSS property like you've used with the style attribute. Finally, the } ends the group of styles.</p>
<h3>Another Example</h3>
<p>Just like how style attributes can contain multiple properties, so too can a group of styles in the style tag.</p>
<?php insertCode('advStyleMultiple', true); ?>
<p>This above HTML will produce a document similar to the following:</p>
<div style="width: 100%; height: 50px; font-size: larger; font-family: Georgia, Arial, serif; background-color: #DDDDBB; color: #004400;"><p>This text is dark green on a light background. All <i style="font-weight: bold;">italic</i> text will also be bold.</p></div>
<p>Since CSS styles cascade and all visible HTML elements are within the body tag, the entire document is affected by anything in the body group. However, if any styles conflict between a parent and child element, the most specific style wins (in this case the child element is always more specific than the parent).</p>
<h3>HTML Classes and Ids</h3>
<p>So far, you have seen that CSS styles can be applied to all tags of a certain type (in the style tag) and individual tags (with the style attribute). However, CSS provides two more ways to choose which elements receive certain styles: classes and ids. Any tag that supports the style attribute can be given a <i>class</i> attribute. Styles within the style tag can reference the name of the class, and all elements regardless of which tag they are, will receive those styles:</p>
<?php insertCode('advStyleClasses', true); ?>
<p>Instead of using tag names, a dot (.) is used, followed by the name of the class. In the previous example, the style group is applied to any element whose class is "special". The resulting text would look like:</p>
<p>Normal text, <span style="color: red; font-size: larger;">special text</span>.</p>
<p style="color: red; font-size: larger;">A whole paragraph of special text!</p>
<p>Ids are used very similarly. However, an element's id must be unique among all elements in the entire HTML document. Then, the CSS in the style tag can reference a particular element by its id using a # followed by the name of the element:</p>
<?php insertCode('advStyleId', true); ?>
<p style="color: green;">Green paragraph</p>
<p style="color: red;">Red paragraph</p>
<p>Note that the red paragraph's styles override the generic style given to all p elements. This is because referencing by an id is essentially the same as including the style attribute on that element.</p>
<h3>More CSS</h3>
<p>There's a lot more to CSS than what's been covered in this manual. However, this is enough to get you started. If you are interested in learning more about CSS, I recommend <a href="http://www.w3schools.com/css/default.asp">w3schools.com</a>.</p>
<?php
footer('HTML_Documents.php', '');
?>