	<footer class="footer">
		<div class="wrapper">
			<div class="row">
				<div class="footer-col">
					<h5>Menu</h5>
					<?php echo fuel_nav(array('container_tag_class' => 'footer-nav', 'item_id_prefix' => 'fnav_'))?>
				</div>
				<div class="footer-col">
					<h5>Latest News</h5>
					<ul>
						<li><a href="wibble">First Latest news item</a></li>
						<li><a href="wibble">second Latest news item</a></li>
						<li><a href="wibble">Third Latest news item</a></li>
					</ul>
					<h5>Latest Events</h5>
					<ul>
						<li><a href="wibble">First Latest event item</a></li>
						<li><a href="wibble">second Latest event item</a></li>
						<li><a href="wibble">Third Latest event item</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h5>Social Media</h5>
					<p>
						<a href="wibble" class="footer-social-link" target="_blank" title="Facebook Link"><i class="fa fa-facebook"></i></a>
						<a href="wibble" class="footer-social-link" target="_blank" title="Twitter Link"><i class="fa fa-twitter"></i></a>
						<a href="wibble" class="footer-social-link" target="_blank" title="Instagram Link"><i class="fa fa-instagram"></i></a>
						<a href="wibble" class="footer-social-link" target="_blank" title="Google Plus Link"><i class="fa fa-google-plus"></i></a>
					</p>
				</div>
			</div>
		</div>
		<p class="colophon small">&copy; <?php echo date("Y"); ?> <a href="http://thedaylightstudio.com" target="_blank">Daylight Studio</a></p>
	</footer>

	<?php /* JavaScript at the bottom for faster page loading */?>
	<?php echo js('plugins, main'); ?>
	<?php echo js($js); ?>
	<?php echo fuel_block('tracking')?>
</body>
</html>