<?php
function tableSimpleCode()
{
	return '<table border="1">
	<tr>
		<td>Row 1, Col 1</td>
		<td>Row 1, Col 2</td>
	</tr>
	<tr>
		<td>Row 2, Col 1</td>
		<td>Row 2, Col 2</td>
	</tr>
</table>';
}

function tableSimpleCaption()
{
	return 'A simple HTML table';
}


function tableHeadersCode()
{
	return '<table border="1">
	<tr>
		<th>Column 1</th>
		<th>Column 2</th>
	</tr>
	<tr>
		<td>Row 1, Col 1</td>
		<td>Row 1, Col 2</td>
	</tr>
	<tr>
		<td>Row 2, Col 1</td>
		<td>Row 2, Col 2</td>
	</tr>
</table>';
}

function tableHeadersCaption()
{
	return 'HTML table with column headers';
}


function tableCaptionCode()
{
	return '<table border="1">
	<caption>Table 1: A simple table</caption>
	<tr>
		<th>Column 1</th>
		<th>Column 2</th>
	</tr>
	<tr>
		<td>Row 1, Col 1</td>
		<td>Row 1, Col 2</td>
	</tr>
	<tr>
		<td>Row 2, Col 1</td>
		<td>Row 2, Col 2</td>
	</tr>
</table>';
}

function tableCaptionCaption()
{
	return 'The table with a caption added';
}


function tablePaddingCode()
{
	return '<table border="1" cellspacing="4" cellpadding="10">
	<tr>
		<th>Mass</th>
		<th>Volume</th>
	</tr>
	<tr>
		<td>2.112332</td>
		<td>5.432165</td>
	</tr>
	<tr>
		<td>3.765356</td>
		<td>9.332865</td>
	</tr>
</table>';
}

function tablePaddingCaption()
{
	return 'An HTML table is easier to read with headers and padding';
}


function advStyleGreenCode()
{
	return '<html>
	<head>
		<style type="text/css">
			b {
				color: green;
			}
		</style>
	</head>
	<body>
		<p>This is normal text, this is <b>green</b> text. This is also <b>green</b>.</p>
	</body>
</html>';
}

function advStyleGreenCaption()
{
	return 'An example style tag that turns all of the bold text green';
}


function advStyleMultipleCode()
{
	return '<html>
	<head>
		<style type="text/css">
			body
			{
				font-family: Georgia, Arial, serif;
				background-color: #DDDDBB;
				color: #004400;
				font-size: larger;
			}
			
			i
			{
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<p>This text is dark green on a light background. All <i>italic</i> text will also be bold.</p>
	</body>
</html>';
}

function advStyleMultipleCaption()
{
	return 'An HTML document with multiple styles';
}


function advStyleClassesCode()
{
	return '<html>
	<head>
		<style type="text/css">
			.special
			{
				color: red;
				font-size: larger;
			}
		</style>
	</head>
	<body>
		<p>Normal text, <span class="special">special text</span>.</p>
		<p class="special">A whole paragraph of special text!</p>
	</body>
</html>';
}

function advStyleClassesCaption()
{
	return 'Using CSS classes';
}


function advStyleIdCode()
{
	return '<html>
	<head>
		<style type="text/css">
			p
			{
				color: green;
			}
			#redP
			{
				color: red;
			}
		</style>
	</head>
	<body>
		<p>Green paragraph</p>
		<p id="redP">Red paragraph</p>
	</body>
</html>';
}

function advStyleIdCaption()
{
	return 'Cascading styles using an id';
}


function basicHeadersCode()
{
	return '<h1>This is a main heading</h1>
<h2>This is a sub-heading</h2>
<h3>This is a medium heading</h3>
<h4>This is a heading</h4>
<h5>This is a small heading</h5>
<h6>This is a smaller heading</h6>';
}

function basicHeadersCaption()
{
	return 'Header tags, largest (h1) to smallest (h6)';
}


function basicParaCode()
{
	return '<p>This is a paragraph of text. Be sure to end the paragraph:</p>';
}

function basicParaCaption()
{
	return 'A short paragraph';
}


function basicLinksCode()
{
	return 'Here are links to <a href="http://google.com">Google</a>, <a href="http://wikipedia.org">Wikipedia</a>, and <a href="http://spanglerco.com">my homepage</a>.';
}

function basicLinksCaption()
{
	return 'Inserting several links';
}


function basicImageCode()
{
	return '<img src="http://spanglerco.com/images/top.jpg" />';
}

function basicImageCaption()
{
	return 'Using the &lt;img&gt; tag to display an image';
}


function colorShadesCode()
{
	return '<table border="0" cellspacing="5">
	<tr>
		<td style="background-color: rgb(0, 0, 0); color: white;">0, 0, 0</td>
		<td style="background-color: rgb(64, 0, 0); color: white;">64, 0, 0</td>
		<td style="background-color: rgb(128, 0, 0);">128, 0, 0</td>
		<td style="background-color: rgb(255, 0, 0);">255, 0, 0</td>
	</tr>
</table>';
}

function colorShadesCaption()
{
	return 'One row from the following table showing shades of colors';
}


function colorHexCode()
{
	return '<table border="0" cellspacing="5">
	<tr>
		<td style="background-color: #000000; color: white;">#000000</td>
		<td style="background-color: #400000; color: white;">#400000</td>
		<td style="background-color: #800000;">#800000</td>
		<td style="background-color: #FF0000;">#FF0000</td>
	</tr>
</table>';
}

function colorHexCaption()
{
	return 'The same table as above, but using hexadecimal colors';
}


function formattingCommonCode()
{
	return 'The two most common formatting tags are <i>italics</i> and <b>bold</b>. Other common formatting tags include <sup>super</sup> and <sub>sub</sub>scripts, <code>computer output</code>, and <pre>preformatted         text</pre>.';
}

function formattingCommonCaption()
{
	return 'Examples of common formatting tags';
}


function formattingMoreCode()
{
	return '<p>big and small can control the <big>size</big> of <small>text</small>, while ins and del can show document <del>proofreading</del> <ins>editing</ins>. HTML also helps quoting large peices of text using blockquote:</p>
<blockquote><p>This is a long quote and would appear on multiple lines in a printed text.</p></blockquote>';
}

function formattingMoreCaption()
{
	return 'More formatting examples';
}


function formattingNestedCode()
{
	return 'Two formatting tags can be <i><b>nested</b></i> to combine their properties.';
}

function formattingNestedCaption()
{
	return 'Nesting multiple formatting tags';
}


function introDocumentCode()
{
	return '<html>
	<head>
		<title>This is my first web page!</title>
	</head>
	<body>
		<h1>Look!</h1>
		<p>This is my first web page.</p>
	</body>
</html>';
}

function introDocumentCaption()
{
	return 'My first web page';
}


function documentsMinimumCode()
{
	return '<html>
	<head>
		<title>This text appears in the browser\'s title bar and history</title>
	</head>
	<body>
	</body>
</html>';
}

function documentsMinimumCaption()
{
	return 'A minimal HTML document';
}


function documentsMetaCode()
{
	return '<head>
	<meta name="author" content="Paul Spangler" />
</head>';
}

function documentsMetaCaption()
{
	return 'Using the meta tag to show the author of a page';
}


function elementsBrCode()
{
	return '<br />';
}

function elementsBrCaption()
{
	return 'A single line break tag';
}


function elementsHeaderCode()
{
	return '<h1>This is a large header</h1>';
}

function elementsHeaderCaption()
{
	return 'A single header tag with content';
}


function elementsLinkCode()
{
	return '<a href="http://spanglerco.com">Look, a link</a>';
}

function elementsLinkCaption()
{
	return 'A link with an href attribute';
}


function elementsNestedCode()
{
	return '<p>Nesting elements also allows for formatting such as <b>bold</b> and <i>italics</i>.</p>';
}

function elementsNestedCaption()
{
	return 'Example a nesting elements using formatting';
}


function linksAnchorCode()
{
	return '<p>For example, <a href="#bottom">click here</a> to go to the bottom of the page.</p>';
}

function linksAnchorCaption()
{
	return 'Linking to a bookmark anchor';
}


function linkBookmarkCode()
{
	return '<p><a name="bottom">This is the bottom of the page.</a> Now <a href="#">click here</a> to go back to the top.</p>';
}

function linkBookmarkCaption()
{
	return 'A bookmark that allows users to jump to the bottom of the page';
}


function linkTargetCode()
{
	return '<a href="Links.php" target="_blank">This will open this page in a new window</a>';
}

function linkTargetCaption()
{
	return 'Opening a link in a new window using the target attribute';
}


function linksNamedTargetCode()
{
	return 'For example, <a href="Links.php" target="links">this link</a> and <a href="Links.php" target="links">this link</a> both open in the same window.';
}

function linksNamedTargetCaption()
{
	return 'Opening multiple links in the same window';
}


function listsUlCode()
{
	return '<ul>
	<li>This is the first item.</li>
	<li>This is the second item.</li>
	<li>This is the third item.</li>
</ul>';
}

function listsUlCaption()
{
	return 'A simple unordered list';
}


function listsOlCode()
{
	return '<ol>
	<li>This is the first item.</li>
	<li>This is the second item.</li>
	<li>This is the third item.</li>
</ol>';
}

function listsOlCaption()
{
	return 'A simple ordered list';
}


function listsDlCode()
{
	return '<dl>
	<dt>First term</dt>
		<dd>Description of the first term</dd>
	<dt>Second term</dt>
		<dd>Description of the second term</dd>
	<dt>Third term</dt>
		<dd>Description of the third term</dd>
</dl>';
}

function listsDlCaption()
{
	return 'A simple definition list';
}


function stylesCenterCode()
{
	return '<p style="text-align: center;">For example, this paragraph was centered using the style attribute.</p>';
}

function stylesCenterCaption()
{
	return 'Using the style attribute to center a paragraph';
}


function stylesMultipleCode()
{
	return '<table border="1" style="text-align: center;">
	<tr>
		<td style="color: red;">red</td>
		<td style="color: blue;">blue</td>
		<td style="color: green; width: 200px;">wide green</td>
	</tr>
</table>';
}

function stylesMultipleCaption()
{
	return 'Using different styles';
}


function stylesCommonCode()
{
	return '<table border="1">
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
		<td style="background-color: olive;">Try applying this property to the body tag</td>
	</tr>
	<tr>
		<td>border</td>
		<td><i>width</i> <i>type</i> <i>color</i></td>
		<td style="border: 5px double maroon;">Some common border types are solid, double, dashed, and groove</td>
	</tr>
	<tr>
		<td>font-size</td>
		<td>xx-small, medium, xx-large, etc. or a number in px</td>
		<td style="font-size: 200%;">Font size can also be a percentage of the parent element\'s font</td>
	</tr>
</table>';
}

function stylesCommonCaption()
{
	return 'Some common CSS style properties';
}


function attributesHrefCode()
{
	return '<a href="http://wikipedia.org">Click here</a>';
}

function attributesHrefCaption()
{
	return 'An &lt;a&gt; tag with the href attribute';
}


function attributesSizeCode()
{
	return '<img src="http://blog.spanglerco.com/headerS1.jpg" width="20px" height="20px" />';
}

function attributesSizeCaption()
{
	return 'The &lt;img&gt; tag can also have the width and height attributes';
}


function textColorCode()
{
	return '<p style="color: maroon;">Maroon paragraph 1.</p>
<p style="color: maroon;">Another maroon paragraph.</p>';
}

function textColorCaption()
{
	return 'One way to color multiple paragraphs';
}


function textDivCode()
{
	return '<div style="color: maroon;">
	<p>Maroon paragraph 1.</p>
	<p>Another maroon paragraph.</p>
</div>';
}

function textDivCaption()
{
	return 'Coloring multiple paragraphs using &lt;div&gt;';
}


function textSpanCode()
{
	return '<p>This is normal text, but <span style="color: blue; font-weight: bold;">this is not</span>.</p>';
}

function textSpanCaption()
{
	return 'Styling a few words in a paragraph';
}


function textFontCode()
{
	return '<p style="font-family: madeupfont, Harrington, Helvetica, Arial, serif;">Some of you will see Harrington font, but you may see Helvetica, Arial, or a generic serif font.</p>';
}

function textFontCaption()
{
	return 'Changing a paragraph\'s font';
}
?>