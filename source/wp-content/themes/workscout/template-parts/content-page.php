<!-- Titlebar
================================================== -->
<?php 
$submit_job_page = get_option('job_manager_submit_job_form_page_id');
$resume_job_page = get_option('resume_manager_submit_resume_form_page_id');
if (!empty($submit_job_page) && is_page($submit_job_page) || !empty($resume_job_page) && is_page($resume_job_page)) { ?>
	<!-- Titlebar
	================================================== -->
	<div id="titlebar" class="single submit-page">
		<div class="container">

			<div class="sixteen columns">
				<h2><i class="fa fa-plus-circle"></i> <?php the_title(); ?></h2>
			</div>

		</div>
	</div>
<?php } else { ?>
	<?php $header_image = get_post_meta($post->ID, 'pp_job_header_bg', TRUE); 
	if(!empty($header_image)) { ?>
		<div id="titlebar" class="photo-bg single" style="background: url('<?php echo esc_url($header_image); ?>')">
	<?php } else { ?>
		<div id="titlebar" class="single">
	<?php } ?>
		<div class="container">

			<div class="sixteen columns">
				<h1><?php the_title(); ?></h1>
				<?php if(function_exists('bcn_display')) { ?>
		        <nav id="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
					<ul>
			        	<?php bcn_display_list(); ?>
			        </ul>
				</nav>
				<?php } ?>
			</div>
		</div>
	</div>
<?php 
}

$layout  = get_post_meta($post->ID, 'pp_sidebar_layout', true);
if(empty($layout)) { $layout = 'full-width'; }
$class = ($layout !="full-width") ? "eleven columns" : "sixteen columns" ;

?>

<div class="container <?php echo esc_attr($layout); ?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>
	<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'workscout' ),
					'after'  => '</div>',
				) );
			?>

			<footer class="entry-footer">
				<?php edit_post_link( esc_html__( 'Edit', 'workscout' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-footer -->
	
			<?php
		        if(ot_get_option('pp_pagecomments','on') == 'on') {
		        	
		            // If comments are open or we have at least one comment, load up the comment template
		            if ( comments_open() || get_comments_number() ) :
		                comments_template();
		            endif;
		        }
		    ?>
	</article>

	<?php if($layout !="full-width") { get_sidebar(); }?>

</div>