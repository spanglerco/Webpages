<?php
require_once('template.php');
head('HTML Introduction', 'Basic HTML');
keyPoints('Web browsers read HTML documents to determine how to display a web page.',
			'HTML documents are made of plain text with special tags that define the document\'s appearance.',
			'HTML tags define the structure of a document.');
?>
<h3>What is HTML?</h3>
<p>Web pages are simply text files read by a web browser (a program like the one you are using now). Web browsers find information about the <i>structure</i> and <i>appearance</i> of the text inside the file before displaying it for you to see. Hypertext markup language (HTML), is read by a web browser in order to display web pages. It is simply text with extra information that describes to the browser what the document looks like. This extra information comes in the form of "tags."</p>
<h3>HTML Tags</h3>
<p>Without tags, a web page is just a normal text document. Try it: open a regular text document (text document's usually end with .txt) in your browser and it will only display plain text. Now try adding &lt;b&gt; to the beginning of the document and saving the file with a .htm at the end of the file name (the .htm tells the browser that the document is an HTML document). If you open the new .htm file in your browser, all of the text should now be bold.</p>
<p>&lt;b&gt; is an example of an HTML tag. All tags start with &lt; and end with &gt;. The word (or in this case letter) within the brackets is the name of the tag. &lt;b&gt; is the <b>bold</b> tag, which causes the browser to make bolden text. Some tags help format a document, but more often tags define the <i>structure</i> of an HTML document.</p>
<h3>Example HTML Document</h3>
<p>Here is a short example of an HTML document. Open any plain text editor (Windows users can use Notepad, for example), then copy and paste the following text into a new document:</p>
<?php insertCode('introDocument', false); ?>
<p>Save the document with a file name that ends with ".htm" so that web browsers will know it is a web page rather than a regular text file. Then, open the file in your browser (many browsers use the File menu) to view your first web page. Future examples will provide a link to the Live Example feature. You can use this feature to preview and modify the examples without having to save them to a file.</p>
<p>HTML tags naturally structure documents. Here's what each part of the document means:</p>
<ul>
<li>&lt;html&gt;: The first tag tells the browser that this is an HTML document.</li>
<li>&lt;head&gt;: The head tag contains extra information for the browser, in this case the title of the document.</li>
<li>&lt;body&gt;: The body tag let's the browser know that the rest of the HTML is the document's content.</li>
<li>&lt;h1&gt;: Represents a large heading. Everything between &lt;h1&gt; and &lt;/h1&gt; is in the heading.</li>
<li>&lt;p&gt;: Divides text into paragraphs. Each paragraph has some space in between to make reading easier.</li>
<li>&lt;/body&gt; and &lt;/html&gt;: These <i>end tags</i> close the body and html tags from the beginning of the document. This tells the browser this is the end of the HTML document.</li>
</ul>
<?php
footer('Getting_Started.php', 'Basic_Tags.php');
?>