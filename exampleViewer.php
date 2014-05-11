<?php
	ob_start("ob_gzhandler");
	require_once('examples.php');
	$captionFunc = $_GET['name'] . 'Caption';
	$codeFunc = $_GET['name'] . 'Code';
	$caption = $captionFunc();
	
	if ($_GET['preview'])
	{
		if (!$code = $_POST['code'])
		{
			$code = $codeFunc();
		}
	}
	else
	{
		$code = $codeFunc();
	}
	
	if (strpos($code, '<body>') === false)
	{
		$code = "<html>\n<body>\n\n" . $code . "\n\n</body>\n</html>";
	}
	
	if ($_GET['preview'])
	{
		echo str_replace('<body>', '<body><script type="text/javascript" src="exampleViewer.js"></script><form action="exampleViewer.php?preview=1&amp;name=' . $_GET['name'] . '" method="post"><input type="hidden" name="code" id="code" /></form>', $code);
	}
	else
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Live Example - Creating Webpages</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="author" content="Paul Spangler" />
<link rel="shortcut icon" href="http://spanglerco.com/favicon.gif" />
<link rel="stylesheet" href="http://webpages.spanglerco.com/css/main.css" />
<!--[if IE 6]>
<link rel="stylesheet" href="http://webpages.spanglerco.com/css/IE6-main.css" />
<![endif]-->
<!-- suggest script -->
	<style type="text/css">@import url("http://webpages.spanglerco.com/search/include/js_suggest/SuggestFramework.css");</style>
	<script type="text/javascript" src="http://webpages.spanglerco.com/search/include/js_suggest/SuggestFramework.js"></script>
	<script type="text/javascript">
	<!--
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
		
		var update;
		
		function frameLoaded(updateCallback, frameHeight)
		{
			if (frameHeight && frameHeight > 0)
			{
				document.getElementById('frame').height = frameHeight;
			}
			document.getElementById('loading').style.display = 'none';
			update = updateCallback;
		}
		
		function updatePreview()
		{
			if (update)
			{
				document.getElementById('loading').style.display = 'block';
				document.getElementById('frame').height = '';
				update(document.getElementById('code').value);
			}
		}
	//-->
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
<div id="title">Live Example</div>
</div>
<ul id="topLinks">
<li id="feedbackLink"><a href="http://webpages.spanglerco.com/feedback.php">Feedback</a></li>
<li><a href="http://webpages.spanglerco.com">Home</a></li>
<li><a href="http://webpages.spanglerco.com/search/search.php">Search</a></li>
</ul>
</div>
<div id="main">
<!--/sphider_noindex-->
<div id="splash">Live Example</div>
<div id="content" style="margin-left: 10px;">
<h1><?php echo $caption ?></h1>
<h3>Preview</h3>
<script type="text/javascript">
<!--
document.write('<div id="loading" style="height: 75px; margin: 0px 0px -75px; position: relative; top: 50px; left: 0px; width: 100%; text-align: center; font-weight: bold; font-size: 30px; color: #004400;">Loading...</div>');
//-->
</script>
<iframe id="frame" src="http://webpages.spanglerco.com/exampleViewer.php?name=<?php echo $_GET['name'] ?>&amp;preview=1" width="95%" scrolling="yes">
<p>To use the live example feature, your browser must support frames. You can still view the result of the default example by <a href="http://webpages.spanglerco.com/exampleViewer.php?name=<?php echo $_GET['name'] ?>&amp;preview=1">clicking here</a>.</p>
</iframe>
<h3>Code</h3>
<script type="text/javascript">
<!--
document.write('<div><input type="button" value="Edit the code below and click here to update the preview" onclick="updatePreview();" style="background-color: #DDDDBB; color: #004400;" /></div><br />');
//-->
</script>
<textarea id="code" style="width: 95%; height: 500px;" rows="10" cols="80"><?php echo $code ?></textarea>
</div>
</div>
</div>
<div id="footer">Copyright &copy; 2010 <a href="http://spanglerco.com/websites.htm">Paul Spangler</a></div>
</body>
</html>
<?php
}
?>