<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<?php
$servername = 'Your.Address.Here';
$yourname = "Your name and contact info";
$twit = "Your Twitter handle";
?>

<head><title>Public ADOM Server: <?php echo $servername ?></title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="description" content="Information and instructions for this public ADOM Server" />
<link rel="STYLESHEET" type="text/css" href="k.css" />
</head>
<body>

<h1><?php echo $servername?></h1>
<p>This is a public, session-recording <a href="http://adom.de">ADOM</a> (optionally <a href="http://kiserai.net/adom/sage/">Sage</a>) 1.1.1 / 1.2.0pX / 1.0.0 / Challenge Game SSH server.</p>
<p>Please read through the following instructions before playing.</p>

<p>Follow on twitter: <a href="https://twitter.com/<?php echo $twit ?>"><?php echo $twit ?></a></p>


<h1>Table of Contents</h1>
<ul class='toc'>
<li><a href="#news">News</a></li>
<li><a href="#connect">Connecting</a></li>
<li><a href="#play">Playing</a></li>
<li><a href="#spectate">Spectating</a>   </li>
<li><a href="#ttyrec">Session recording and playback</a></li>
<li><a href="#score">Hiscore</a></li>
<li><a href="#config">Editing the config files</a></li>
<li><a href="#putty">SSH Client Settings</a></li>
<li><a href="#misc">Miscellaneous</a></li>
<li><a href="#contact">Contact and Thanks</a></li></ul>

<h2><a id="news">News</a></h2>
<p>Item 1</p>
<p>Item 2</p>

<h2><a id="connect">Connecting</a></h2>

 <p>Connect to <?php echo $servername ?>, default SSH port (22), with your SSH client.</p>

 <p>If you're a Windows user and don't have a SSH client, download PuTTY from the offical download page <a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html">here</a>. PuTTY is a single executable and needs no installing. Enter the hostname (<?php echo $servername ?>) and the rest of the recommended configuration listed <a href="#putty">below</a> and connect.</p>

 <p>You must use the SSH2 protocol for SSH interaction! The server will not allow the use of the obsolete SSH1 version (PuTTY should use the version 2 by default). Telnet is not available.</p>

 <p>When you get <strong>"The server's host key is not cached in the registry"</strong>: this is a normal message the first time you connect.  Accept the host key by hitting 'yes'.</p>

<h2><a id="play">Playing</a></h2>

  <p>To create a new user, give username 'adom' and password 'adom', follow directions, then disconnect and log in again with your newly created account.</p>

  <p>NOTE: only 3 registrations allowed per IP every day.</p>

  <p>ADOM will not launch if your terminal size is something other than 80x25 characters!!</p>

  <p>The first time you launch ADOM, you may erroneously be told that your terminal is the wrong size.  This should go away upon subsequent launches if your terminal is 80x25.</p>

  <p>At the menu, you may choose whether you want to play ADOM 1.1.1, a 1.2.0 prerelease, 1.0.0, and/or a challenge game and whether you want to use Sage or not. Note that 1.1.1/1.2.0pX/1.0.0/Eternium Man have separate save- and hiscore files. The server automatically enforces the rules of challenge games; breaking the rules will get your ADOM process killed.</p>
 <p>All 1.2.0 prereleases are available to play for people who donated to the <a href="http://www.indiegogo.com/resurrect-adom-development">ADOM Resurrection</a> campaign.  Simply select the menu option for 1.2.0pX and select a specific prerelease.  If you have not done this before, you can press '0' where you will be prompted for the details from the e-mail you got entitled "ADOM 1.2.0p4 now available for ADOM: The Resurrection Donors". Some 1.2.0 prereleases are available to all players. This list is currently: p3, 5, 18, 19, and 20.</p>
 <p>The server (actually part of ADOM Sage) allows you to select your own birth sign upon character creation.  Certain versions also allow you to reroll your birth stats until you are satisfied (also toggleable in Sage). Supported versions include 1.1.1 and 1.2.0p20, 21, and 22. Please use the stat roller gently.</p>

 <p>PROTIP:</p>

    <blockquote><p>In the game, there is a place called "The Bug-Infested Temple". Normally you will need at least a hundred deaths recorded to be allowed entry. However,  on the server, you will not need to reach this limit.</p></blockquote>

<h2><a id="spectate">Spectating</a></h2>

  <p>To spectate current players, log in with username 'spectator' and password 'spectator'. You may then choose the game to spectate, if there are players online.</p>
  <p>You can also spectate at the regular user menu by pressing 's', no password required.</p>

<h2><a id="ttyrec">Session recording and playback</a></h2>

  <p>Optionally, you can record every ADOM session. Press 'r' at the menu to toggle this feature.  It is off by default.</p>

  <p>You can play back any recorded game by logging in with the username 'ttyrecplay' and the password 'ttyrecplay'. Instructions for selecting and playing a recording are explained when you log in. </p>
  <p>The recordings are in "ttyrec" format, and can be downloaded from each user's WWW-accessable /ttyrecs directory if they've enabled WWW access).</p>

   <p>ttyrecs older than 30 days will be deleted.</p>

<h2><a id="score">Hiscore</a></h2>

   <p>The hiscore dumps of the server are available at the following address: </p>
   <blockquote><p><a href="adom_hiscore">http://<?php echo $servername?>/adom_hiscore/</a></p></blockquote>

  <p>On the IRC channel <a href="irc://irc.freenode.net/adom">#adom on Freenode</a>, there is the IRC bot named Fistanarius announcing new Hall of Fame (top 100) entries, if they exceed a certain number of points. </p>
  <p>Scores (above a higher threshold) are also announced on <a href="https://twitter.com/<?php echo $twit ?>">Twitter</a>.</p>
<h2><a id="config">Editing the config files</a></h2>

  <p>You are allowed to edit ADOM and ADOM Sage configuration files on the server. You can launch the nano editor (see main menu when you log in) for writing your own configurations.</p>

 <p>Key bindings are displayed at the bottom of the nano window. "^" means "control", so press ctrl+o to save and ctrl+x to exit.</p>

<h2><a id="putty">Recommended SSH Client Settings</a></h2>
<h3><em>PuTTY</em></h3>
 <ul><li>Window -&gt; Rows: 25 (you NEED this to launch ADOM!)</li>
  <li>Window -&gt; Columns: 80 (this should be the default)</li>
  <li>Window -&gt; "Forbid resizing completely" or "Change the size of the font" (so resizing the window can't happen or doesn't break anything)</li>
  <li>Window -&gt; Translation -&gt; Remote Character Set: -&gt; UTF-8 (for nice blocks and lines with Sage)</li>
  <li>Window -&gt; Appearance -&gt; "Underline"</li>
  <li>Window -&gt; Selection -&gt; Windows (Middle extends, Right brings up menu) (prevents right-click from pasting)</li>
  <li>Window -&gt; Colours -&gt; check "Bolded text is a different color"</li>
  <li>Terminal -&gt; Bell -&gt; None (bell disabled)</li>
  <li>Terminal -&gt; Features -&gt; Disable application keypad mode (this makes the numpad work)</li>
  <li>Terminal -&gt; Keyboard -&gt; xterm R6 (in order to use the function keys properly)</li>
  <li>Connection -&gt; SSH -&gt; Enable Compression</li>
  <li>Connection -&gt; Enable TCP keepalives</li>
</ul>


  <p>You may want to change the default font, too. Note that you can save these settings, including username (Connection -&gt; Auto-login username) in the main Session window.</p>

 <p>If you are used to the DOS or Windows versions of ADOM, it's possible to configure PuTTY to look like them; thanks to rmcin329 for finding this (Windows XP only?):</p>

        <table>
        <tr><td>ANSI black</td>  <td>  0   0   0</td><td>ANSI bold black</td><td>119 119 119</td></tr>
        <tr><td>ANSI red:</td>   <td>255  68   0</td><td>ANSI bold red</td><td>255 119 0</td></tr>
        <tr><td>ANSI green</td>  <td>  0 170   0</td><td>ANSI bold green</td><td>0 255 0</td></tr>
        <tr><td>ANSI yellow</td> <td>153  85   0</td><td>ANSI bold yellow</td><td>221 221 0</td></tr>
        <tr><td>ANSI blue</td>   <td>  0   0 170</td><td>ANSI bold blue</td><td>0 119 255</td></tr>
        <tr><td>ANSI magenta</td><td>170   0 170</td><td>ANSI bold magenta</td><td>255 0 255</td></tr>
        <tr><td>ANSI cyan</td>   <td>  0 170 170</td><td>ANSI bold cyan</td><td>0 255 255</td></tr>
        <tr><td>ANSI white</td>  <td>187 187 187</td><td>ANSI bold white</td><td>255 255 255</td></tr></table>

<h3><em>Terminal on Mac</em></h3>

<ul><li>Check "Use bright colors for bold text"</li></ul>

<h3><em>OpenSSH (Linux/Unix/BSD)</em></h3>
<p>In your ~/.ssh/config:</p>
<blockquote>
<p>Host ancardia<br />
HostName <?php echo $servername?><br />
User your-username<br />
ServerAliveInterval 60<br />
Compression yes<br /></p>
</blockquote>


<h3><em>All/Other</em></h3>
<p>See the documentation for your terminal emulator.  In general:</p>
<ul><li>Enable UTF8 support</li>
    <li>Enforce an 80x25 window</li>
    <li>Set colors as you wish</li></ul>

<h2><a id="misc">Miscellaneous</a></h2>

  <p>There is a little problem with the terminal bell - spectators are able to
  send it. You should disable the bell from the playing/spectating terminal.</p>

  <p>If the game happens to crash, there is a restore system that allows you to restore the last save game. <strong>IMPORTANT:</strong></p>
  <ul><li>For <strong>all versions</strong>, backups are created when you save and quit (press <strong>Sy</strong> and quit ADOM).</li>
<li>Additionally with version <strong>1.1.1</strong>, and certain 1.2.0 prereleases, backups are created <strong>every 1000 turns</strong> and when you press <strong>Sn</strong>. Preleases where this is supported include 20, 21, and 22.</li>
</ul>

  <p>In #adom on Freenode, there is a bot named AdomDBbot.  Use "@m monstername" for detailed concise info about a monster, and "@i itemname" for detailed concise info about an item.</p>

  <p>Also, you can enable your user directory to be accessible (read-only) at http://<?php echo $servername?>/adom_users/username. You can enable or disable this access any time you wish. Useful for exporting character dumps, configs, etc.!</p>

  <p>The source code for ADOM Sage, with Alucard's modifications, can be found on <a href="https://github.com/AlucardZero/adom-sage/">GitHub</a>.</p>

 <p>The source code for the star sign selector, and a version for Windows, is <a href="ss">available</a>.</p>
<h2><a id="contact">Contact and Thanks</a></h2>

  <p><?php echo $servername?> is run by <?php echo $yourname?></p>

  <p>Please report any trouble to #adom on Freenode. If you need further assistance, especially user account or password maintenance, send <?php echo $yourname?> e-mail.</p>

  <p>You might also want to visit the #adom channel in IRCNet, but then again you might not want to.  There is also #adom on Freenode (newer, smaller, and friendlier).</p>
  
  <p>Huge thanks to Chousuke, Vladimir Panteleev, jaakkos, and sorear for making all this possible!</p>

  <p>Sensible enhancement ideas are also welcome! Have fun playing!</p>

</body></html>
