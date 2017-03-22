<?php
	use \CTN\Auth;
?>
<!DOCTYPE html>
<html lang="<?php print $template->getLanguage(true); ?>">
	<head>
		<title><?php print $template->getTitle(); ?></title>
		<meta charset="<?php print $template->getCharset(); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" type="image/png" href="<?php print $template->getThemeURL('assets/icon.png'); ?>" />
		<?php
			$template->includeCSS([
				'css/bootstrap.css',
				'css/bootstrap-responsive.css',
				'css/style.css'
			]);
			
			$template->includeJS();
		?>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"></button>
						<a class="brand" href="<?php print $template->getURL('/'); ?>">CrackTheNet</a>
						<div class="nav-collapse collapse">
							<ul class="nav">
								<?php
									if(!Auth::isLoggedIn()) {
										?>
											<li><a href="<?php print $template->getURL('/login'); ?>">Login</a></li>
											<li><a href="<?php print $template->getURL('/register'); ?>">Registrieren</a></li>
										<?php
									}
								?>
								<li><a href="<?php print $template->getURL('/rules'); ?>">Regeln</a></li>
								<li><a href="<?php print $template->getURL('/help'); ?>">Hilfe</a></li>
								<li><a href="<?php print $template->getURL('/imprint'); ?>">Impressum</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</header>
		<div class="container">
			<div class="row">
				<?php
					if(Auth::isLoggedIn()) {
						?>
							<div class="span3 bs-docs-sidebar">
								<ul class="nav nav-list bs-docs-sidenav affix-top">
									<li class="active"><a href="<?php print $template->getURL('/overview'); ?>"><i class="icon-chevron-right"></i> Übersicht</a></li>
									<li><a href=""><i class="icon-chevron-right"></i> Nachrichten (0)</a></li>
									<li><a href="#"><i class="icon-chevron-right"></i> Computer</a></li>
									<li><a href="#"><i class="icon-chevron-right"></i> AngriffsCenter</a></li>
									<li><a href="#"><i class="icon-chevron-right"></i> Cluster</a></li>
									<li><a href="#"><i class="icon-chevron-right"></i> Netzwerkumgebung</a></li>
									<li><a href="#"><i class="icon-chevron-right"></i> Tools</a></li>
									<li><a href="#"><i class="icon-chevron-right"></i> Rangliste</a></li>
									<li><a href="#"><i class="icon-chevron-right"></i> Lotterie</a></li>
									<li><a href="<?php print $template->getURL('/logout'); ?>"><i class="icon-chevron-right"></i> Abmelden</a></li>
								</ul>
							</div>
							<div class="span9">
						<?php
					} else {
						?>
							<div class="span12">
						<?php
					}
				?>