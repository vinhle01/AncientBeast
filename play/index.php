<?php
/* Ancient Beast - Free Open Source Online PvP TBS: card game meets chess, with creatures.
 * Copyright (C) 2007-2012  Valentin Anastase (a.k.a. Dread Knight)
 *
 * This file is part of Ancient Beast.
 *
 * Ancient Beast is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * Ancient Beast is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * http://www.AncientBeast.com
 * https://github.com/FreezingMoon/AncientBeast
 * DreadKnight@FreezingMoon.org
 */
$style = '
.strike {
	text-decoration: line-through;
}
#bar {
	background: transparent;
	width: 100%;
	height: 25px;
	position: relative;
	margin-top: -35px;
}
#bar a {
	text-decoration: none;
	text-shadow: none;
	font-weight: bold !important;
	font-family: Verdana,Arial,sans-serif;
	font-size: .9em !important;
	padding: 2px 7px !important;
	cursor: pointer;
	border-radius: 4px;
	border: 1px solid #d3d3d3;
	color: #555555;
	background: rgb(255,255,255); /* Old browsers */
	background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(241,241,241,1) 50%,rgba(225,225,225,1) 51%,rgba(246,246,246,1) 100%);
}
#bar a:hover {background: white; color: black;}
iframe.fullscreen {padding-top: 0;}
';

$page_title = "Ancient Beast - Game";
require_once('../header.php');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="launcher/jquery.fullscreen-min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$(document).bind("fullscreenchange", function() {
		$('#game').toggleClass('fullscreen');
	});
});
</script>

<div id="bar">
	<a onclick="if(confirm('Reset Game?')) var ifr=document.getElementsByName('game')[0]; ifr.src=ifr.src;" style="margin-left: 15px;">Reset Game</a>
	<a onclick="$('#game').fullScreen(true)" style="margin-left: 682px;">Fullscreen</a>
</div>
<div class="center">
	<iframe id="game" name="game" src="../combat/" style="border: 4px ridge; border-color: grey; width: 934px; height: 525px;" seamless webkitAllowFullScreen mozAllowFullScreen allowFullScreen></iframe>
</div>
<div class="div center" id="info">
Best played using a modern browser, <a href="https://www.google.com/chrome" target="_blank"><b>Google Chrome</b></a> recommended. <a href="<?php echo $site_root; ?>combat/" target="_blank"><b>Click here to open the game in new tab.</b></a><br>
<a href="#comment-939192362"><b>Version 0.2 (released 15th June 2013)</b></a> - <a href="https://github.com/FreezingMoon/AncientBeast/issues/" target="_blank"><b>You can report all issues on Github</b></a> - <a href="https://github.com/FreezingMoon/AncientBeast/issues/milestones" target="_blank"><b>v0.3 ETA: 14th December 2014</b></a>
There's no online multiplayer for now, but you can play online with friends by using a <b><a href="http://teamviewer.com" target="_blank">Screen Sharing Software</a></b>.
<a href="<?php echo $site_root; ?>game/AncientBeast.html" download><b>Click here if you would like to download a desktop shortcut for this awesome game. Limited time offer!</b></a></div>

<?php
disqus();
include('../footer.php'); ?>
