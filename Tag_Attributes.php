<?php
require_once('template.php');
head('Tag Attributes', 'Basic HTML');
keyPoints('Some HTML tags require attributes to give the web browser more information.',
			'HTML tag attributes are in the form <i>name</i>="<i>value</i>".',
			'A single tag can have multiple attributes, but cannot have the same attribute more than once.');
?>
<p>For some tags, like the &lt;a&gt; and &lt;img&gt; from the previous section, web browsers need extra information than just the name of the tag. HTML tag attributes gives browsers that extra information so it knows where to find an image, for example.</p>
<h3>Attribute Format</h3>
<p>Attributes have a specific format: <i>name</i>="<i>value</i>". Where <i>name</i> is the attribute's name, similar to a tag's name, and <i>value</i> is what the browser uses to determine what to do with the tag. Note that the quotation marks ("") around the value are not part of the value, but rather let the browser know where the value starts and where it ends. Here is an example of an attribute within the &lt;a&gt; tag:</p>
<?php insertCode('attributesHref', true); ?>
<p>Some browsers allow HTML authors to leave out the quotation marks for short values, but it is not recommended nor considered correct HTML.</p>
<h3>Multiple Attributes</h3>
<p>A single HTML tag can have multiple attributes separated by a space. However, a single tag cannot have the same attribute more than once. For example, an &lt;img&gt; can have the <i>src</i>, <i>width</i>, and <i>height</i> attributes, but cannot have src twice.</p>
<?php insertCode('attributesSize', true); ?>
<p>For &lt;img&gt; tags, the width and height attributes are optional. The <i>px</i> at the end of the numbers mean pixels and will be discussed in the later section about HTML styles.</p>
<?php
footer('Basic_Tags.php', 'Lists.php');
?>