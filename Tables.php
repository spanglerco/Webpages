<?php
require_once('template.php');
head('Tables', 'Basic HTML');
keyPoints('HTML Tables format text into a series of rows and columns.',
			'Each table row has one or more cells, but all rows must have the same number of cells.',
			'You can improve readability by adding captions and headers to tables, and by adjusting cell padding and spacing.');
?>
<p>Often used for formatting blocks of text, HTML tables are an easy way to add a fixed structure to a web page.</p>
<h3>Creating a Simple Table</h3>
<p>First, take a look at a simple table and the HTML used to create it:</p>
<table border="1">
	<tr>
		<td>Row 1, Col 1</td>
		<td>Row 1, Col 2</td>
	</tr>
	<tr>
		<td>Row 2, Col 1</td>
		<td>Row 2, Col 2</td>
	</tr>
</table>
<?php insertCode('tableSimple', true); ?>
<p>Not surprisingly, HTML tables are added using the &lt;table&gt; tag. But, similar to lists, the table tag alone doesn't tell the web browser anything useful. Instead, tables contain rows (each &lt;tr&gt; tag is a new table row) and columns. Within each row is a cell for every column (each &lt;td&gt;, or table data, is a single cell). The <i>border</i> attribute on the table tag tells the web browser to put a border around each cell of size 1. Increasing the value of the table border attribute will increase the size of the border around each cell.</p>
<h3>Table Headers</h3>
<p>HTML provides a way to easily add headers to each column of a table. Most web browsers will display table headers in bold so the reader can tell it apart from a regular table cell. To add a header, use the &lt;th&gt; tag (table header) instead of &lt;td&gt; for one of the rows:</p>
<?php insertCode('tableHeaders', true); ?>
<p>Which produces the following table:</p>
<table border="1">
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
</table>
<p>Note that the &lt;th&gt; tags still appear in table rows (&lt;tr&gt;). HTML does not restrict table headers to being at the top of a table, either. Adding headers in multiple places in the table can help for tables with a lot of rows.</p>
<h3>Captions</h3>
<p>It is also easy to add captions to HTML tables using the &lt;caption&gt; tag. Most browsers display table captions centered above the table, and require the caption tag to appear immediately after the table tag:</p>
<?php insertCode('tableCaption', true); ?>
<p>Which looks like:</p>
<table border="1">
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
</table>
<h3>Table Formatting</h3>
<p>Besides the border attribute, HTML tables also have the <i>cellspacing</i> and <i>cellpadding</i> attributes, which can help increase the readability of tables. Consider the following two tables:</p>
<table border="0">
	<tr>
		<td valign="top"><table border="1">
			<tr>
				<td>2.112332</td>
				<td>5.432165</td>
			</tr>
			<tr>
				<td>3.765356</td>
				<td>9.332865</td>
			</tr>
		</table></td>
		<td style="width: 100px;">&nbsp;</td>
		<td><table border="1" cellspacing="4" cellpadding="10">
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
		</table></td>
	</tr>
</table>
<p>The second table, which adds table headers, cellpadding, and cellspacing, is much easier to read and understand. Cellpadding is space between the border of a cell and the cell's data, and cellspacing adds extra space between two cells. Here is the HTML for the second table above:</p>
<?php insertCode('tablePadding', true); ?>
<?php
footer('Formatting.php', 'Styles.php');
?>