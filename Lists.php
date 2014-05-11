<?php
require_once('template.php');
head('Lists', 'Basic HTML');
keyPoints('HTML defines three types of lists: unordered (bulleted), ordered (numbered), and definition lists.',
			'Web browsers automatically add bullets, numbering, and formatting for lists.',
			'Unordered and ordered lists both use the &lt;li&gt; tag for each item within the list.',
			'Definition lists use &lt;dt&gt; and &lt;dd&gt; tags for each term.');
?>
<h3>Unordered (bulleted) Lists</h3>
<p>Lists are an easy way for web pages to present a series of points. For example, you've seen an unordered list at the top of each section of this website giving key points about the section. In HTML, unordered lists (sometimes called bulleted lists) are inserted using the &lt;ul&gt; tag. Unlike previous tags, however, the &lt;ul&gt; tag itself doesn't do much. Instead, it requires another tag, &lt;li&gt; (list item) to define each item within the list:</p>
<?php insertCode('listsUl', true); ?>
<p>In the previous example, note how each &lt;li&gt; tag is within the main &lt;ul&gt; tag. That is how the web browser knows the list items are related and should be added to the same list. Also, it's easy to forget to include the end tags for &lt;li&gt;, but just like paragraphs, it can cause problems later.</p>
<h3>Ordered (numbered) Lists</h3>
<p>The other common type of HTML list is the ordered list (also called a numbered list). The basic usage of the ordered list is almost identical to unordered lists: instead of using &lt;ul&gt;, just use &lt;ol&gt;. The browser will automatically number each item in the list.</p>
<?php insertCode('listsOl', true); ?>
<p>The &lt;li&gt; tag is still used to indicate a list item, but using &lt;ol&gt; tells the browser to add numbers instead of bullets to the beginning of each item.</p>
<h3>Definition Lists</h3>
<p>HTML defines a third type of list, though it is much less common. A definition list does not use &lt;li&gt; tags to denote each list item. Instead, these lists have two parts for each item: a term (name) and a description. Descriptions are indented on the line after each term in the list. The tags for definition lists are &lt;dl&gt; (definition list), &lt;dt&gt; (definition term), and &lt;dd&gt; (definition description):</p>
<?php insertCode('listsDl', true); ?>
<p>Note that the &lt;dd&gt; is <i>not</i> inside the &lt;dt&gt; tag. Indenting has only been added to help visualize what the list will look like in a web browser.</p>
<?php
footer('Tag_Attributes.php', 'HTML_Elements.php');
?>