
<div class="yellow" style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>);">
<a href="/>">Home</a> /
<a><?php the_title();?></a>

</div>
<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
