<?php
require_once('template.php');
head('Basic Tags', 'Basic HTML');
keyPoints('There are a lot of HTML tags, but only a handful are needed to write a full HTML document.',
			'There are six different sizes of header tags, h1 (largest) to h6 (smallest).',
			'Links and images require attributes to tell the browser more information about them.',
			'Not all tags have content. These tags do not have an end tag but instead end with a /.');
?>
<p>Modern web browsers recognize over 75 HTML tags. However, some of them are fundamental in creating and structuring web pages.</p>
<h3>Headers</h3>
<p>The previous example used two header tags, but note that the tag was &lt;h<i>1</i>&gt;. In fact, there are six different header tags, each ranging in size. You can use these different levels of headers to achieve an outline-style hierarchy within a web page. Remember to include an end tag for each header tag (e.g. '&lt;/h1&gt;) to tell the browser to return to normal text. From largest to smallest, the header tags are:</p>
<?php insertCode('basicHeaders', true); ?>
<h3>Paragraphs</h3>
Another tag from the last section's example document is the paragraph tag, &lt;p&gt;. These simply group text together into blocks to form paragraphs. Like header tags, be sure to include end paragraph tags. Some browsers do not require end tags for paragraphs, but leaving them out can lead to problems later in the HTML document.</p>
<?php insertCode('basicPara', true); ?>
<h3>Links</h3>
Most web pages contain <i>hyperlinks</i>, which allow users to move between different pages without having to type the URL for each page. For example, the area above and to the left is full of links that allow navigation between the different sections of this website. Links don't have to be between two pages on the same site, though. Here are links to <a href="http://google.com">Google</a>, <a href="http://wikipedia.org">Wikipedia</a>, and <a href="http://spanglerco.com">my homepage</a>. Links allow web pages to be interconnected and are fundamental in how search engines like Yahoo work.</p>
<p>You can insert a link into an HTML document using the &lt;a&gt; tag (a stands for anchor). Here is the HTML used above to insert three links:</p>
<?php insertCode('basicLinks', true); ?>
<h3>Attributes</h3>
<p>The previous example introduces HTML tag <i>attributes</i>. The &lt;a&gt; tag uses the <i>href</i> attribute (href stands for hypertext reference) to tell the browser where to send the user when the link is clicked. To make links, you only need to know that attributes have a name (like href) and a value (like "http://google.com"), which are separated by an =. The next section is all about HTML tag attributes and will go into more detail.</p>
<h3>Images</h3>
<p>Another important HTML tag is the image tag, &lt;img&gt;. When a web browser finds an &lt;img&gt; tag, it displays the image referenced by the <i>src</i> attribute.</p>
<?php insertCode('basicImage', true); ?>
<p>The &lt;img&gt; tag also introduces a new concept: not all HTML tags have content (a tag's content appears between the tag and its end tag). Specifically, the &lt;img&gt; tag does not have any content, so the tag ends with a /. This extra / at the end represents the missing end tag, and should be used whenever a tag doesn't have any content.</p>
<?php
footer('HTML_Intro.php', 'Tag_Attributes.php');
?>