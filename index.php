<?php
  get_header(); ?>

<div class="posts-container">


<?php  if ( have_posts() ) {	while ( have_posts() ) :	the_post();?>
								<a href="<?php echo get_permalink(); ?>">

                  <h2 class="center"> <?php									the_title(); ?></h2>
<?php							the_post_thumbnail();?>
								</a>
                <?php the_content(); ?>
                <hr />
              <?php endwhile; } else {?> <p class="center">No posts here!</p> <?php }
      the_posts_pagination();?>
    </div>
          <?php
get_footer();
          ?>
