<?php
	function head($title, $shortTitle)
	{
		ob_start("ob_gzhandler");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title ?> - Creating Webpages</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="author" content="Paul Spangler" />
<link rel="shortcut icon" href="http://spanglerco.com/favicon.gif" />
<link rel="stylesheet" href="css/main.css" />
<!--[if IE 6]>
<link rel="stylesheet" href="css/IE6-main.css" />
<![endif]-->
<!-- suggest script -->
	<style type="text/css">@import url("http://webpages.spanglerco.com/search/include/js_suggest/SuggestFramework.css");</style>
	<script type="text/javascript" src="http://webpages.spanglerco.com/search/include/js_suggest/SuggestFramework.js"></script>
	<script type="text/javascript">
		window.onload = function()
		{
			var query = document.getElementById('query');
			query.setAttribute("action", "http://webpages.spanglerco.com/search/include/js_suggest/suggest.php");
			query.setAttribute("columns", "2");
			query.setAttribute("autocomplete", "on");
			query.setAttribute("delay", "1500");
			query = null;
			initializeSuggestFramework();
		};
	</script>
<!-- /suggest script -->
</head>
<body>
<!--sphider_noindex-->
<div id="page">
<div id="header">
<div id="headerText">
<div id="search">Search the website:<form action="http://webpages.spanglerco.com/search/search.php" method="get" style="display: inline;">
<table><tr><td>
<div style="text-align: left; display: inline;"> 
<input type="text" name="query" id="query" size="40" value="" />
</div>
</td>
<td>
<input type="submit" value="Search" />
<input type="hidden" name="search" value="1" />
</td></tr></table>
</form>
</div>
<div id="title">Creating Webpages</div>
</div>
<ul id="topLinks">
<li id="feedbackLink"><a href="http://webpages.spanglerco.com/feedback.php">Feedback</a></li>
<li><a href="http://webpages.spanglerco.com">Home</a></li>
<li><a href="http://webpages.spanglerco.com/search/search.php">Search</a></li>
</ul>
</div>
<div id="main">
<div id="leftLinks">
<div id="sectionTitle">Sections</div>
<div>
Overview
<ul>
<li><a href="http://webpages.spanglerco.com/Getting_Started.php">Getting Started</a></li>
</ul>
</div>
<div>
Basic HTML
<ul>
<li><a href="http://webpages.spanglerco.com/HTML_Intro.php">HTML Intro</a></li>
<li><a href="http://webpages.spanglerco.com/Basic_Tags.php">Basic Tags</a></li>
<li><a href="http://webpages.spanglerco.com/Tag_Attributes.php">Tag Attributes</a></li>
<li><a href="http://webpages.spanglerco.com/Lists.php">Lists</a></li>
<li><a href="http://webpages.spanglerco.com/HTML_Elements.php">HTML Elements</a></li>
<li><a href="http://webpages.spanglerco.com/Formatting.php">Formatting</a></li>
<li><a href="http://webpages.spanglerco.com/Tables.php">Tables</a></li>
</ul>
</div>
<div>
Advanced HTML
<ul>
<li><a href="http://webpages.spanglerco.com/Styles.php">Styles</a></li>
<li><a href="http://webpages.spanglerco.com/Text_and_Fonts.php">Text and Fonts</a></li>
<li><a href="http://webpages.spanglerco.com/Links.php">Links</a></li>
<li><a href="http://webpages.spanglerco.com/Color.php">Color</a></li>
<li><a href="http://webpages.spanglerco.com/HTML_Documents.php">HTML Documents</a></li>
<li><a href="http://webpages.spanglerco.com/Advanced_Styles.php">Advanced Styles</a></li>
</ul>
</div>
</div>
<!--/sphider_noindex-->
<div id="splash"><?php echo $shortTitle ?></div>
<div id="content">
<h1><?php echo $title ?></h1>
<?php
	}
	
	function keyPoints()
	{
?>
<div id="key">
Key points
<ul>
<?php
		$num = func_num_args();
		for ($i=0; $i < $num; ++$i)
		{
			echo '<li>' . func_get_arg($i) . '</li>';
		}
		
		print '</ul></div>';
	}
	
	function insertCode($name, $example)
	{
		require_once('examples.php');
		$code = $name . 'Code';
		$caption = $name . 'Caption';
		print '<pre class="example">';
		if ($example)
		{
			print '<a href="example/' . $name . '">Click to view Live Example</a>' . "\n\n";
		}
		print '<code>' . str_replace(array('<', '>'), array('&lt;', '&gt;'), $code()) . '</code>' . "\n" . $caption() . '</pre>';
	}
	
	function footer($previous, $next)
	{
?>
<!--sphider_noindex-->
<div id="navigation">
<?php
if ($previous != '') print '<a href="' . $previous . '">&lt;- Previous Section</a>';
if ($next != '') print '<a class="float-right" href="' . $next . '">Next Section -&gt;</a>';
?>
</div>
</div>
<div id="clear"></div>
</div>
</div>
<div id="footer">Copyright &copy; 2010 <a href="http://spanglerco.com/websites.htm">Paul Spangler</a></div>
</body>
<!--/sphider_noindex-->
</html>
<?php
		ob_end_flush();
	}
?>