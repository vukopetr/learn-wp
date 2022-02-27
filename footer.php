	<footer>
		<p>This is another paragraph ...</p>
		<section class="menu-area">
			<div class="container">
				<div class="align">
					<div class="row">
						<section class="logo col text-center">
							Copyright 2022 - Learn WP
						</section>
						<nav class="main-menu col text-end">
							<?php 
								wp_nav_menu( array(
									'theme_location' => 'footer_menu',
								) );
							?>
						</nav>
					</div>	
				</div>
			</div>
		</section>
	</footer>
	
	<?php wp_footer(); ?>
	
</body>
</html> 