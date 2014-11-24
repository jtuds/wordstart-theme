<body <?php body_class(); ?>>

	<header role="banner">
				
				<h1>
					<?php if (is_front_page()) { ?>
						<img src="<?php echo bloginfo('template_directory'); ?>/dist/images/logo.png">
						<span class="visuallyhidden">Logo alt/company name</span>
					<?php } else { ?>
						<a href="<?php bloginfo('url'); ?>">
							<img src="<?php echo bloginfo('template_directory'); ?>/dist/images/logo.png">
							<span class="visuallyhidden">Logo alt/company name</span>
						</a>
					<?php } ?>
				</h1>

	</header>