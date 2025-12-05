<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'About' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'about';

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h2>About</h2>
	<p>CBC - DVWA Demo website is a PHP/MySQL web application that is damn vulnerable. Its main goals are to be an aid for security professionals to test their skills and tools in a legal environment, help web developers better understand the processes of securing web applications and aid teachers/students to teach/learn web application security in a class room environment</p>
	<p>This is a customized version of DVWA (Damn Vulnerable Web Application).</p>
	<p>Pre-August 2020, All material is copyright 2008-2015 RandomStorm & Ryan Dewhurst.</p>
	<p>Ongoing, All material is copyright Robin Wood and probably Ryan Dewhurst.</p>

	<h2>Links</h2>
	<ul>
		<li>Original DVWA Project: " . dvwaExternalLinkUrlGet( 'https://github.com/digininja/DVWA' ) . "</li>
		<li>Bug Tracker: " . dvwaExternalLinkUrlGet( 'https://github.com/digininja/DVWA/issues' ) . "</li>
		<li>Wiki: " . dvwaExternalLinkUrlGet( 'https://github.com/digininja/DVWA/wiki' ) . "</li>
	</ul>

	<h2>Credits</h2>
	<ul>
		<li>Brooks Garrett: " . dvwaExternalLinkUrlGet( 'http://brooksgarrett.com/','www.brooksgarrett.com' ) . "</li>
		<li>Craig</li>
		<li>g0tmi1k: " . dvwaExternalLinkUrlGet( 'https://blog.g0tmi1k.com/','g0tmi1k.com' ) . "</li>
		<li>Jamesr: " . dvwaExternalLinkUrlGet( 'https://www.creativenucleus.com/','www.creativenucleus.com' ) . "</li>
		<li>Jason Jones</li>
		<li>RandomStorm</li>
		<li>Ryan Dewhurst: " . dvwaExternalLinkUrlGet( 'https://wpscan.com/','wpscan.com' ) . "</li>
		<li>Shinkurt: " . dvwaExternalLinkUrlGet( 'http://www.paulosyibelo.com/','www.paulosyibelo.com' ) . "</li>
		<li>Tedi Heriyanto: " . dvwaExternalLinkUrlGet( 'http://tedi.heriyanto.net/','tedi.heriyanto.net' ) . "</li>
		<li>Tom Mackenzie</li>
		<li>Robin Wood: " . dvwaExternalLinkUrlGet( 'https://digi.ninja/','digi.ninja' ) . "</li>
		<li>Zhengyang Song: " . dvwaExternalLinkUrlGet( 'https://github.com/songzy12/','songzy12' ) . "</li>
	</ul>

	<h2>License</h2>
	<p>CBC - DVWA Demo website is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.</p>

	<h2>Development</h2>
	<p>This is based on the original DVWA project. Everyone is welcome to contribute to the original DVWA project and help make it as successful as it can be.</p>
</div>\n";

dvwaHtmlEcho( $page );

exit;

?>
