<?php
require_once('template.php');
head('Color', 'Advanced HTML');
keyPoints('CSS color properties can be specified by color name, RGB number, or in hexadecimal.',
			'Using color numbers, there are millions of colors to choose from.');
?>
<h3>Representing Colors in HTML</h3>
<p>In the Styles section, you saw the CSS color and background-color properties. Both of those properties required a color value. The previous examples used color names, but HTML does not limit the list of available colors to the ones you can name. Modern web browsers are capable of displaying over 16 million different colors. To represent colors, HTML divides each color into three numbers: a red value, a green value, and a blue value. These are often referred to as RGB colors.</p>
<p>Each number for a color can be any integer from 0 to 255, representing how much of that color <i>component</i> is in the final color. For example, the following code is for the first row in the proceeding color table:</p>
<?php insertCode('colorShades', true); ?>
<table border="0" cellspacing="5">
	<tr>
		<td style="background-color: rgb(0, 0, 0); color: white;">0, 0, 0</td>
		<td style="background-color: rgb(64, 0, 0); color: white;">64, 0, 0</td>
		<td style="background-color: rgb(128, 0, 0);">128, 0, 0</td>
		<td style="background-color: rgb(255, 0, 0);">255, 0, 0</td>
	</tr>
	<tr>
		<td style="background-color: rgb(0, 0, 0); color: white;">0, 0, 0</td>
		<td style="background-color: rgb(0, 64, 0); color: white;">0, 64, 0</td>
		<td style="background-color: rgb(0, 128, 0);">0, 128, 0</td>
		<td style="background-color: rgb(0, 255, 0);">0, 255, 0</td>
	</tr>
	<tr>
		<td style="background-color: rgb(0, 0, 0); color: white;">0, 0, 0</td>
		<td style="background-color: rgb(0, 0, 64); color: white;">0, 0, 64</td>
		<td style="background-color: rgb(0, 0, 128); color: white;">0, 0, 128</td>
		<td style="background-color: rgb(0, 0, 255); color: white;">0, 0, 255</td>
	</tr>
	<tr>
		<td style="background-color: rgb(0, 0, 0); color: white;">0, 0, 0</td>
		<td style="background-color: rgb(64, 0, 64); color: white;">64, 0, 64</td>
		<td style="background-color: rgb(128, 0, 128); color: white;">128, 0, 128</td>
		<td style="background-color: rgb(255, 0, 255); color: white;">255, 0, 255</td>
	</tr>
	<tr>
		<td style="background-color: rgb(0, 0, 0); color: white;">0, 0, 0</td>
		<td style="background-color: rgb(0, 64, 64); color: white;">0, 64, 64</td>
		<td style="background-color: rgb(0, 128, 128); color: white;">0, 128, 128</td>
		<td style="background-color: rgb(0, 255, 255);">0, 255, 255</td>
	</tr>
	<tr>
		<td style="background-color: rgb(0, 0, 0); color: white;">0, 0, 0</td>
		<td style="background-color: rgb(64, 64, 0); color: white;">64, 64, 0</td>
		<td style="background-color: rgb(128, 128, 0); color: white;">128, 128, 0</td>
		<td style="background-color: rgb(255, 255, 0);">255, 255, 0</td>
	</tr>
	<tr>
		<td style="background-color: rgb(0, 0, 0); color: white;">0, 0, 0</td>
		<td style="background-color: rgb(64, 64, 64); color: white;">64, 64, 64</td>
		<td style="background-color: rgb(128, 128, 128); color: white;">128, 128, 128</td>
		<td style="background-color: rgb(255, 255, 255);">255, 255, 255</td>
	</tr>
</table>
<p>That is just a small sample of colors available, and color components don't have to be added evenly.</p>
<h3>Writing Colors in Hexadecimal</h3>
<p>Commonly, colors are represented using hexadecimal rather than rgb numbers. In hexadecimal, each digit of a number ranges from 0 to 15, but the digits 10 through 15 are represented as the letters A to F. For example, the number 27 is 1*16 + 11, so in hexadecimal is 1B. Knowing how to convert numbers to hexadecimal, however, is not needed to write HTML. Instead, all you need to know is that colors can be represented in hex as three two-digit numbers from 00 to FF. Instead of using rgb, hex numbers start with #:</p>
<?php insertCode('colorHex', true); ?>
<table border="0" cellspacing="5">
	<tr>
		<td style="background-color: #000000; color: white;">#000000</td>
		<td style="background-color: #400000; color: white;">#400000</td>
		<td style="background-color: #800000;">#800000</td>
		<td style="background-color: #FF0000;">#FF0000</td>
	</tr>
	<tr>
		<td style="background-color: #000000; color: white;">#000000</td>
		<td style="background-color: #004000; color: white;">#004000</td>
		<td style="background-color: #008000;">#008000</td>
		<td style="background-color: #00FF00;">#00FF00</td>
	</tr>
	<tr>
		<td style="background-color: #000000; color: white;">#000000</td>
		<td style="background-color: #000040; color: white;">#000040</td>
		<td style="background-color: #000080; color: white;">#000080</td>
		<td style="background-color: #0000FF; color: white;">#0000FF</td>
	</tr>
	<tr>
		<td style="background-color: #000000; color: white;">#000000</td>
		<td style="background-color: #400040; color: white;">#400040</td>
		<td style="background-color: #800080; color: white;">#800080</td>
		<td style="background-color: #FF00FF; color: white;">#FF00FF</td>
	</tr>
	<tr>
		<td style="background-color: #000000; color: white;">#000000</td>
		<td style="background-color: #004040; color: white;">#004040</td>
		<td style="background-color: #008080; color: white;">#008080</td>
		<td style="background-color: #00FFFF;">#00FFFF</td>
	</tr>
	<tr>
		<td style="background-color: #000000; color: white;">#000000</td>
		<td style="background-color: #404000; color: white;">#404000</td>
		<td style="background-color: #808000; color: white;">#808000</td>
		<td style="background-color: #FFFF00;">#FFFF00</td>
	</tr>
	<tr>
		<td style="background-color: #000000; color: white;">#000000</td>
		<td style="background-color: #404040; color: white;">#404040</td>
		<td style="background-color: #808080; color: white;">#808080</td>
		<td style="background-color: #FFFFFF;">#FFFFFF</td>
	</tr>
</table>
<p>By using different combinations of red, green, and blue, you have millions of colors to choose from when styling your HTML document.</p>
<?php
footer('Links.php', 'HTML_Documents.php');
?>