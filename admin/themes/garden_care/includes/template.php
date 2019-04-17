<!DOCTYPE html>
<html lang="es">
	<head>
		<?php $website->get_includes('head.php'); ?>
	</head>
	<body>
		<?php 
			//$website->get_global('scripts');
		?>
		<?php 
			// $website->get_includes('header.php');
			$website->get_section_active(); ?>
		
		<?php $website->get_includes('copyright.php'); ?>
		<?php $website->get_includes('scripts.php'); ?>
		<?php $website->get_includes('footer.php'); ?>
	</body>
</html>