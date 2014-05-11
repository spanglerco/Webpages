function updateHTML(code)
{
	document.getElementById('code').value = code;
	document.forms[0].submit();
}

window.onload = function()
{
	if (parent && parent.frameLoaded)
	{
		parent.frameLoaded(updateHTML, document.body.scrollHeight + 20);
	}
};