<?php
  get_header(); ?>

<div class="posts-container">


<?php  if ( have_posts() ) {		the_post();?>
								<a href="<?php echo get_permalink(); ?>">

                  <h2 class="center"> <?php									the_title(); ?></h2>
<?php							the_post_thumbnail();?>
								</a>
                <?php the_content(); ?>
                <hr />
                <?php } else {?> <p class="center">No posts here!</p> <?php }?>
    </div>
          <?php
posts_nav_link('','Previous post','Next post');
get_footer();
          ?>
