<?php
  get_header(); ?>

<div class="posts-container">


<?php  if ( have_posts() ) {		the_post();?>
								<a href="<?php echo get_permalink(); ?>">

                  <h2 class="center"> <?php									the_title(); ?></h2>
<?php							the_post_thumbnail();?>
</a>
                <?php the_content(); ?>
                <hr /><h3>Comments</h3><?php comments_template(); comment_form();
                ?>
                <span class="prev-post"><?php previous_post_link(); ?><br /></span>
<span class="next-post"><?php next_post_link(); ?></span><?php } else {?> <p class="center">No posts here!</p> <?php }?>

    </div>
          <?php

get_footer();
          ?>
