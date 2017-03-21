<?php
	$template->getHeader();
	?>
		<h1><?php print $title; ?></h1>
		<p><?php print $description; ?></p>
	<?php
	foreach($rules AS $index => $rule) {
		?>
			<h2 id="rules_<?php print ($index + 1); ?>"><strong>$<?php print ($index + 1); ?></strong> <?php print $rule->title; ?></h2>
			<p><?php print $rule->text; ?></p>
		<?php
	}
	
	$template->getFooter();
?>