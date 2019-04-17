<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<?php $website->get_includes('head.php'); ?>
	</head>
	<body>
		<div class="page-container">
			<div class="left-content">
				<div class="mother-grid-inner">
					<?php $website->get_includes('header.php'); ?>
					<div class="inner-block">
						<?php $website->get_section_active(); ?>
					</div>
					<?php $website->get_includes('footer.php'); ?>
				</div>
			</div>
			<?php $website->get_includes('navigation.php'); ?>
			<div class="clearfix"> </div>
		</div>
		<?php $website->get_includes('scripts.php'); ?>
	</body>
</html>


                      
						

