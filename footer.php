<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
<div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'blankslate' ), '<a href="http://www.jirosworld.com/">Jiro Ghianni</a>' ); ?>
</div>

<!-- extra footer uit blank slate: -->
<div id="footer">
			&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>
		</div>

</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>