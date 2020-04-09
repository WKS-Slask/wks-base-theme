<?php
get_header();

while (have_posts()) {
    the_post(); ?>

<div class="page-wrapper">
  <h1 class="page-title"><?php the_title(); ?></h1>
  <div class="page-content"><?php the_content(); ?></div>
</div>

<?php
}

get_footer();

?>
