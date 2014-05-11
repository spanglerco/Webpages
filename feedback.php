<?php
require_once('template.php');
head('Feedback', 'Feedback');

$page = $_POST['page'] + 1;
unset($_POST['page']);

if ($_POST['data'])
{
	$data = unserialize(urldecode($_POST['data']));
	unset($_POST['data']);
	$data = array_merge($data, $_POST);
}
else
{
	$data = $_POST;
}

if ($page == 5)
{
mail('ENTER_ADDRESS_HERE', 'Creating Webpages Feedback', 'The following feedback was received:' . "\n\n" . print_r($data, true), 'From: Creating Webpages <ENTER_ADDRESS_HERE>' . "\r\n" . 'Reply-To: ENTER_ADDRESS_HERE');
?>
<h3>Thank You</h3>
<p>Your feedback has been received. Your comments are appreciated.</p>
<?php
}
else
{
?>
<form action="feedback.php" method="post" id="feedback" onsubmit="document.forms.feedback.back.disabled = true; document.forms.feedback.next.disabled = true;">
<?php
switch ($page)
{
	case 1:
?>
<p>Your feedback will be used to help improve this website and will remain anonymous. Please answer each question honestly so that we may bring you a better website experience. You can leave additional comments about any of the questions at the end of the survey.</p>
<h3>1. Had you created web pages before visiting this website?</h3>
<div class="answers">
<?php insertRadio('q1', '1', 'No, I hadn\'t created web pages before.', true);
	insertRadio('q1', '2', 'Yes, I have created web pages before using: ', false); ?>
</div>
<div class="subanswers">
<?php
	insertCheckbox('q1_2_html', 'HTML', false);
	insertCheckbox('q1_2_dreamweaver', 'Dreamweaver', false);
	insertCheckbox('q1_2_frontpage', 'Frontpage', false);
	insertCheckbox('q1_2_visualstudio', 'Visual Studio/ASP.NET', true);
	insertCheckbox('q1_2_other', 'Other (please specify):', false); ?>
	<input type="text" class="textbox" name="q1_2_other_value" value="<?php echo $data['q1_2_other_value']; ?>" />
</div>
<h3>2. Did you have any problems accessing the website?</h3>
<div class="answers">
<?php
	insertRadio('q2', '1', 'No, I didn\'t have any problem accessing the website.', true);
	insertRadio('q2', '2', 'Yes, I had problems accessing the website (please specify below).', false);
?>
</div>
<div class="subanswers">
	<textarea name="q2_2_value" class="textbox" rows="4" cols="50"><?php echo $data['q2_2_value']; ?></textarea>
</div>
<h3>3. What information, if any, were you hoping to find on the website but did not?</h3>
<div class="answers">
	<textarea name="q3_value" rows="4" cols="50"><?php echo $data['q3_value']; ?></textarea>
</div>
<?php
		unsetArrayValues($data, 'q1_2_html', 'q1_2_dreamweaver', 'q1_2_frontpage', 'q1_2_visualstudio', 'q1_2_other', 'q1_2_other_value');
		break;
		
	case 2:
?>
<p>For the following statements, please indicate how strongly you agree or disagree.</p>
<table border="1" cellpadding="10">
	<tr valign="bottom" style="text-align: center;">
		<td>&nbsp;</td>
		<th>Strongly&nbsp;Agree<br />6</th>
		<td>5</td>
		<td>4</td>
		<td>3</td>
		<td>2</td>
		<th>Strongly&nbsp;Disagree<br />1</th>
		<td>Did not use this feature</td>
	</tr>
<?php
	insertStatementScale('q4', 'The home page (Getting Started) helped me to navigate through the rest of the manual.', true);
	insertStatementScale('q5', 'I feel that I can create a full web page after reading the manual.', false);
	insertStatementScale('q6', 'I feel that I can create a full web page after reading the manual if I could refer back to the manual as I write it.', false);
	insertStatementScale('q7', 'The search function helped me find specific information.', true);
	insertStatementScale('q8', 'The examples were helpful in the learning process.', true);
	insertStatementScale('q9', 'I understood the examples.', true);
	insertStatementScale('q10', 'The text was easy to understand.', false);
?>
</table>
<?php
		break;
		
	case 3:
?>
<p>Please answer the following questions.</p>
<h3>11. Are there any sections that you had to read multiple times to understand the information?</h3>
<div class="answers">
<?php
	insertRadio('q11', '1', 'No, I didn\'t have to reread any sections to understand.', true);
	insertRadio('q11', '2', 'Yes, I had to reread some of the sections (specify which ones):', false);
?>
</div>
<div class="subanswers">
	<textarea name="q11_2_value" class="textbox" rows="4" cols="50"><?php echo $data['q11_2_value']; ?></textarea>
</div>
<h3>12.	Did you ever feel lost while trying to navigate the website?</h3>
<div class="answers">
<?php
	insertRadio('q12', '1', 'No, I didn\'t ever feel lost on the website.', true);
	insertRadio('q12', '2', 'Yes, I felt lost at some point.', false);
?>
</div>
<h3>13.	Did the format (links, color, layout, etc.) of the website help you navigate?</h3>
<div class="answers">
<?php
	insertRadio('q13', '1', 'No, the format did not help me navigate.', true);
	insertRadio('q13', '2', 'Yes, the format helped me navigate.', false);
?>
</div>
<?php
		break;
		
	case 4:
?>
<p>The survey is almost done. Please answer the following questions.</p>
<h3>14.	What additional information would you like to see on the website on your next visit?</h3>
<div class="answers">
	<textarea name="q14_value" class="textbox" rows="4" cols="50"><?php echo $data['q14_value']; ?></textarea>
</div>
<h3>15.	How did you navigate through the website?</h3>
<div class="answers">
<?php
	insertCheckbox('q15_left', 'Section Links on the left side', true);
	insertCheckbox('q15_next', 'The next and previous section links at the bottom of each page', true);
	insertCheckbox('q15_search', 'The search feature', true);
	insertCheckbox('q15_other', 'Other (please specify):', false);
?>
	<input type="text" name="q15_other_value" class="textbox" value="<?php echo $data['q15_othervalue']; ?>" />
</div>
<h3>16.	Do you have any suggestions for improving the website or its content? If so, what?</h3>
<div class="answers">
	<textarea name="q16_value" class="textbox" rows="4" cols="50"><?php echo $data['q16_value']; ?></textarea>
</div>
<h3>17.	Thank you for completing the survey, you can leave any additional comments about the previous questions here.</h3>
<div class="answers">
	<textarea name="q17_value" class="textbox" rows="4" cols="50"><?php echo $data['q17_value']; ?></textarea>
</div>
<?php
		unsetArrayValues($data, 'q1', 'q15_left', 'q15_next', 'q15_search', 'q15_other');
		break;
}
?>
<p>Page <?php echo $page ?> of 4</p>
<p><input type="hidden" name="data" value="<?php echo urlencode(serialize($data)); ?>" />
<input type="hidden" name="page" value="<?php echo $page; ?>" />
<input type="button" value="&lt;- Back" name="back" onclick="this.disabled = true; document.forms.feedback.next.disabled = true; document.forms.feedback.page.value -= 2; document.forms.feedback.submit();" <?php if ($page == 1) echo 'disabled="disabled"'; ?> />&nbsp;&nbsp;&nbsp;<input type="submit" value="<?php echo ($page == 4) ? 'Submit' : 'Next -&gt;'; ?>" name="next" /></p>
</form>
<?php
}
footer('', '');

function insertStatementScale($name, $statement, $allowNA)
{
	global $data;
	
	print '<tr><td>' . $statement . '</td>';
	
	for ($i = 6; $i > 0; --$i)
	{
		print '<td style="text-align: center;"><input type="radio" name="' . $name . '" value="' . $i . '" ';
		
		if ($data[$name] == $i)
		{
			print 'checked="checked" ';
		}
		
		print '/></td>';
	}
	
	if ($allowNA)
	{
		print '<td style="text-align: center;"><input type="radio" name="' . $name . '" value="-1" ';
		
		if ($data[$name] == -1)
		{
			print 'checked="checked" ';
		}
		
		print '/></td></tr>';
	}
	else
	{
		print '<td>&nbsp;</td></tr>';
	}
}

function unsetArrayValues(&$array)
{
	$num = func_num_args();
	for ($i=1; $i < $num; ++$i)
	{
		unset($array[func_get_arg($i)]);
	}
}

function insertRadio($name, $value, $label, $newLine)
{
	global $data;
	
	echo '<input type="radio" name="' . $name . '" id="' . $name . '_' . $value . '" ';
	
	if ($data[$name] == $value)
	{
		echo 'checked="checked" ';
	}
	
	echo 'value="' . $value . '" /><label for="' . $name . '_' . $value . '">' . $label . '</label>';
	
	if ($newLine)
	{
		echo '<br />';
	}
}

function insertCheckbox($name, $label, $newLine)
{
	global $data;
	
	echo '<input type="checkbox" name="' . $name . '" id="' . $name . '" ';
	
	if ($data[$name] == 1)
	{
		echo 'checked="checked" ';
	}
	
	echo 'value="1" /><label for="' . $name . '">' . $label . '</label>';
	
	if ($newLine)
	{
		echo '<br />';
	}
}
?>