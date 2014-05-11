<?php
require_once('template.php');
head('HTML Documents', 'Advanced HTML');
keyPoints('Complete HTML documents have a head, a title, and a body. The &lt;html&gt; tag is always first.',
			'Web browsers use a document\'s title to identify the page.',
			'Search engines use metadata to find and index web pages.');
?>
<h3>A Full HTML Document</h3>
<p>The very first example in this manual used the &lt;html&gt; and &lt;body&gt; tags. Now we return to see what it takes to really makes an HTML document. Web browsers will usually display any file that ends with .htm (or some prefer .html) as a web page, even if it only contains text. A correct HTML document, however, contains at a <i>minimum</i>:</p>
<?php insertCode('documentsMinimum', true); ?>
<p>Note that the html tag is the first and only element at the <i>root</i> level of the document: all of the other elements are children of html. Then there are two "sections" to a document: the head and the body. The &lt;head&gt; tag is used to give the browser more information about the document such as title, author, and description. The next section shows how styles can also exist in the head when they are not specific to a particular element. The &lt;body&gt; tag contains all of the visible content for the document.</p>
<h3>HTML Metadata</h3>
<p>The most important tag that appears in the head of a document is the &lt;title&gt; tag. It contains the text used by the browser to identify which page the user is currently viewing. It is important to add a title tag to every HTML document, usually before beginning on the body of the document. Besides the title, HTML document heads can contain information called <i>metadata</i>, which browsers may choose to show in a separate dialog. One of the most common metadata for HTML documents is author information. Metadata is added to a page using the &lt;meta&gt; tag:</p>
<?php insertCode('documentsMeta', false); ?>
<p>The <i>name</i> attribute tells the browser what the metadata means, while the <i>content</i> attribute is the value for that metadata. In this case, the author of the page is Paul Spangler. Other useful metadata includes description and keywords, which are used by search engines to determine when to show your web page as a in search results.</p>
<p>The head of an HTML document can also include styles common to the entire document (see the next section), as well as <i>scripting</i> code called JavaScript that is used to create interactive web pages.</p>
<?php
footer('Color.php', 'Advanced_Styles.php');
?>