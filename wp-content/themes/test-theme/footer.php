    <footer class="footer">
    	<div class="row">
    		<p class="navbar-brand">2014 Your Company</p>
    		<?php
    		$defaults = array(
    			'theme_location'  => 'footer-menu',
    			'container'       => 'false',
    			'menu_class'      => 'nav navbar-nav navbar-right'
    		);

    		wp_nav_menu( $defaults );
    		?>
    	</div>

    </footer>

</div> <!-- /container -->

<?php wp_footer(); ?>
</body>
</html>