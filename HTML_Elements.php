<?php
require_once('template.php');
head('HTML Elements', 'Basic HTML');
keyPoints('Web browsers have a defined set of rules for using HTML tags.',
			'Empty tags don\'t have any content, and end with a /.',
			'Some tags have attributes, which always appear in the start tag.',
			'HTML elements, which include a tag, its attributes, and its content, can be nested.');
?>
<p>Previous sections have used discussed HTML tags and attributes, but a tag has not yet been formally defined.</p>
<h3>What is an HTML Tag?</h3>
<p>HTML has a set of rules when it comes to using a tag, and not every tag can be used everywhere in an HTML document. An HTML tag is always lowercase and at a minimum has a name. The simplest tag HTML has to offer is the &lt;br&gt; (line break) tag, which forces the following text to start on a new line:</p>
<?php insertCode('elementsBr', false); ?>
<p>Line break is an example of a tag that doesn't have any content: it is meaningful by itself. These tags are called empty tags, and the slash at the end of the tag tells the browser not to look for any content associated with that tag. Most tags, however, do have content. For example, the header tags:</p>
<?php insertCode('elementsHeader', false); ?>
<p>Tags that have content are divided into three parts: a start tag, the content, and an end tag. In the previous example, &lt;h1&gt; is the start tag, "This is a large header" is the content, and &lt;/h1&gt; is the end tag. The end tag lets the browser know when to stop applying content to that tag.</p>
<h3>Tag Attributes</h3>
<p>A tag can also have attributes, such as the anchor tag's <i>href</i> attribute:</p>
<?php insertCode('elementsLink', true); ?>
<p>Attributes always appear in the start tag, but empty tags can also contain attributes (such as &lt;img&gt;). Tags can also have multiple attributes separated by spaces, but can only have each attribute at most once (a link cannot have two destinations).</p>
<h3>HTML Elements</h3>
<p>All of these concepts combine to form the definition on an HTML element. An element is a tag, its attributes, and its content, including both the start tag and the end tag (if there is one). A tag's content can include other elements (such as list items in an unordered list), allowing HTML documents to describe a nested structure such as tables in a later section. Nesting elements also allows for formatting such as <b>bold</b> and <i>italics</i>. Formatting is the topic of the next section.</p>
<?php insertCode('elementsNested', true); ?>
<?php
footer('Lists.php', 'Formatting.php');
?>