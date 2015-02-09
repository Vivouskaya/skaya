<div id="footer">
	<div class="col-md-6">
		Blog propulsé par <a href="http://wordpress.org/">WordPress</a> et con&ccedil;u par <a href="http://www.skaya.com">Vivien Debeaupte</a>
	</div>
	<div class="col-md-6">
		<a href="feed:<?php bloginfo('rss2_url'); ?>">Articles (RSS)</a> et <a href="feed:<?php bloginfo('comments_rss2_url'); ?>">Commentaires (RSS)</a>.
		<?php echo get_num_queries(); ?> requêtes. <?php timer_stop(1); ?> secondes.
		</p>
	</div>
	<div class="row">
		Copyright &#169; <?php print(date(Y)); ?> <?php bloginfo('name'); ?>
	</div>
</div>

