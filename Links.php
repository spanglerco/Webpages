<?php
require_once('template.php');
head('Links', 'Advanced HTML');
keyPoints('The anchor tag (&lt;a&gt;) can be used for creating hyperlinks and bookmarks.',
			'Links to bookmarks start with #, and bookmarks are defined using the <i>name</i> attribute instead of href.',
			'When used sparingly, links can be opened in new windows using the <i>target</i> attribute.');
?>
<h3>Anchors</h3>
<p>Briefly discussed in the Basic Tags section, hyperlinks interconnect web pages into websites. You can add a link to a web page by using the &lt;a&gt; (anchor) tag and the <i>href</i> attribute. However, that is not the only use of the &lt;a&gt; tag. Anchors can instead use the <i>name</i> attribute to create a "bookmark" in a long HTML document. These bookmarks allow users to jump between sections of a page without having to reload the whole page. Bookmarks are especially useful for a table of contents on a long page.</p>
<p>For example, <a href="#bottom">click here</a> to go to the bottom of the page.</p>
<?php insertCode('linksAnchor', true); ?>
<p>Notice that the link is a normal hyperlink, except instead of another page's URL, the href attribute starts with # and then the name of a bookmark. At the bottom of the page is the actual bookmark:</p>
<?php insertCode('linkBookmark', true); ?>
<p>When the web browser encounters a link that starts with #, it looks for a bookmark with a matching name. It if finds one, it scrolls down until the bookmark anchor is at the top of the screen (or it hits the bottom of the page). However, if the browser doesn't find a matching anchor, it will scroll to the top of the page. By linking to just "#", the user is sent to the top of the page when the link is clicked.</p>
<h3>Link Targets</h3>
<p>Sometimes, such as a link to a glossary or help page, it makes sense to open a link in a new window. Doing so keeps the original web page in place so the user can return to it later. However, it is important to consider why the link needs to be opened in a new window, since most users find a new window confusing or even annoying if it's unexpected.</p>
<p>To open a link in a new window, use the &lt;a&gt; tag's <i>target</i> attribute. <a href="Links.php" target="_blank">This will open this page in a new window</a>.</p>
<?php insertCode('linkTarget', true); ?>
<p>In the previous example, "_blank" was used as the value of the target attribute. This is a special value that will always open a link in a new window. You can also use a specific value so that links will share a new window: each link the user clicks overwrites the previous one. For example, <a href="Links.php" target="links">this link</a> and <a href="Links.php" target="links">this link</a> both open in the same window.</p>
<?php insertCode('linksNamedTarget', true); ?>
<p>Using a specific target allows you to minimize the number of new windows for users, but can be even more confusing since often times web browsers do not automatically show a window if it has already been opened.</p>
<p><a name="bottom">This is the bottom of the page.</a> Now <a href="#">click here</a> to go back to the top.</p>
<?php
footer('Text_and_Fonts.php', 'Color.php');
?>