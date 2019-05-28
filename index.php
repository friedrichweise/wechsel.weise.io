<!DOCTYPE html>
<html lang="en"> 
<head> 
	<title>wechsel – use your keyboard to manage bluetooth connections on macOS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1">
	<meta name="author" content="Friedrich Weise">
	<meta name="description" content="wechsel claims to simplify the interaction with bluetooth connections on macOS. Instead of using the builtin Bluetooth menu bar, you can seamlessly switch between bluetooth devices using your keyboard. The tool offers a global hotkey to display a Spotlight-like window">
	<meta name="keywords" content="macos,swift,bluetooth,utility,hotkey,keyboard">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
</head> 
<body>
	<div class="spacer"></div>
	<section class="content">
		<a href="https://github.com/friedrichweise/wechsel" target="_blank" class="github"></a>
		<img src="img/screenshot.png" alt="screenshot of the app" class="screenshot">
		<header class="header">
			<h1>wechsel</h1>
			<h2>keyboard focused utility to connect bluetooth audio devices to your Mac</h2>
		</header>
		<p>wechsel (/ˈvɛksəl/) claims to simplify the interaction with bluetooth connections on macOS. Instead of using the builtin Bluetooth menu bar, seamlessly switch between bluetooth devices with your keyboard. The tool offers a global hotkey to display a Spotlight-like window. After selecting a specific device using the arrow keys, simply hit the ↵ Enter key to connect/disconnect the device.<br>
		<?php 
			ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0)'); 
			$apiURL = "https://api.github.com/repos/friedrichweise/wechsel/releases";
			$content = json_decode(file_get_contents($apiURL), true);
			if($content): ?>
		<div class="downloadSection">
			<a href="<?php echo($content[0]['assets'][0]['browser_download_url']); ?>" class="downloadButton">
				<span class="icon icon--download"></span>
				Download
				<span class="light"><?php echo($content[0]['tag_name']); ?></span>
			</a>
			<a href="https://github.com/friedrichweise/wechsel/" class="downloadButton">
				<span class="icon icon--github"></span>
				Github
				<span class="light">GPLv3</span>
			</a>
			<p class="meta">
				Last Updated: <?php $d = new DateTime($content[0]['published_at']); echo $d->format('d.m.Y'); ?>, <a href="<?php echo($content[0]['html_url']); ?>">Changelog</a>
			</p>
			<div class="homebrew">
				<b>Homebrew Installation</b>
				<pre>brew tap friedrichweise/wechsel
brew cask install wechsel</pre>
			</div>
		</div>
		<?php endif; ?>
		
	</section>
	
</body>
</html>
<!-- Stylesheets -->
<link rel="stylesheet" href="styles/styles.min.css">
