<?php
require_once('template.php');
head('Formatting', 'Basic HTML');
keyPoints('HTML includes many formatting tags to help text <b><i>stand out</i></b>.',
			'Formatting tags can be nested, but must be closed in the correct order.');
?>
<h3>Common Formatting Tags</h3>
<p>HTML includes a large number of tags made for formatting text. The two most common formatting tags are <i>&lt;i&gt;</i> (italics) and <b>&lt;b&gt;</b> (bold). Other common formatting tags include <sup>super</sup> and <sub>sub</sub>scripts (&lt;sub&gt; and &lt;sup&gt;), <code>computer output</code> (&lt;code&gt;), and</p>
<pre>preformatted         text (&lt;pre&gt;).</pre>
<?php insertCode('formattingCommon', true); ?>
<h3>More Formatting Tags</h3>
<p>&lt;big&gt; and &lt;small&gt; can control the <big>size</big> of <small>text</small>, while &lt;ins&gt; and &lt;del&gt; can show document <del>proofreading</del> <ins>editing</ins>. HTML also helps quoting large peices of text using &lt;blockquote&gt;:</p>
<blockquote><p>This is a long quote and would appear on multiple lines in a printed text. So, it needs to be in a blockquote rather than an inline quote surrounded by quotation marks. This is a long quote and would appear on multiple lines in a printed text. So, it needs to be in a blockquote rather than an inline quote surrounded by quotation marks. This is a long quote and would appear on multiple lines in a printed text. So, it needs to be in a blockquote rather than an inline quote surrounded by quotation marks.</p></blockquote>
<?php insertCode('formattingMore', true); ?>
<h3>Using Formatting Tags</h3>
<p>All of the formatting tags can be used anywhere within an HTML document that printed text appears. For example, within a paragraph (&lt;p&gt;) or link (&lt;a&gt;). This is made possible by HTML's support of element nesting as discussed in the previous section. Note also that two formatting tags can be <i><b>nested</b></i> to combine their properties, but it is important to close the tags in the correct order. See the example below:</p>
<?php insertCode('formattingNested', true); ?>
<p>Since the bold tag is opened <i>last</i>, it is closed <i>first</i>. Remember that only complete HTML elements can be nested, and elements include the start tag, content, and end tag. When writing HTML, it is always a good idea to close a tag right after opening it and then add the content last, so that the end tag will be in the correct place.</p>
<?php
footer('HTML_Elements.php', 'Tables.php');
?>