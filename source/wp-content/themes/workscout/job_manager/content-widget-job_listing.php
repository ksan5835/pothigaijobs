<li <?php job_listing_class(); ?>>
	<a href="<?php the_job_permalink(); ?>">
		<div class="position">
			<h3><?php the_title(); ?></h3>
		</div>
		<ul class="meta">
			<li class="location"><i class="fa fa-map-marker"></i> <?php the_job_location( false ); ?></li>
			<li class="company"><i class="fa fa-building-o"></i> <?php the_company_name(); ?></li>
			<li class="job-type <?php echo get_the_job_type() ? sanitize_title( get_the_job_type()->slug ) : ''; ?>"><i class="fa fa-filter"></i> <?php the_job_type(); ?></li>
		</ul>
	</a>
</li>