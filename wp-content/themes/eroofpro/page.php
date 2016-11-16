<?php get_header(); ?>
	
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		
		<section class="title-container">
	        <div class="container">
	            <div class="page-header">
	                <h1 class="page-title"><?php the_title(); ?></h1>
	                <!-- <p class="breadcrumbs"><a href="<?php //echo get_home_url(); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <span><?php //echo the_title(); ?></span></p> -->
	            </div>
	        </div>
	    </section>
		<div class="container">
			<div class="content-container">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>