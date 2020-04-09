<?php
get_header();

while (have_posts()) {
    the_post(); ?>

<div class="single <?php echo wp_is_mobile() ? "single--mobile" : "single--desktop"; ?>">
  <h1 class="page-title"><?php the_title(); ?></h1>
  <div class="single-meta">
    <div class="single-date">
      <span><?php wks_echo_svg(get_theme_file_uri("/icons/calendar.svg")); ?></>
      <span><?php echo the_time('d F Y'); ?></span>
      &nbsp;&nbsp;|&nbsp;&nbsp;
      <span><?php echo get_the_category_list(',&nbsp;&nbsp;'); ?></span>
    </div>
  </div>
  <figure class="single-figure <?php echo wp_is_mobile() ? "single-figure--mobile" : "single-figure--desktop"; ?>">
    <img 
      src="<?php wks_the_post_thumbnail_url(); ?>" 
      alt="<?php echo get_post_field('post_name', get_post()); ?>" 
      class="single-image"
    />
  </figure>
  <?php echo wp_is_mobile() ? "" : '<div class="single-content-wrapper">'; ?>
    <div 
      class="single-article-content <?php echo wp_is_mobile() ? "single-article-content--mobile" : "single-article-content--desktop"; ?>"
    >
      <?php the_content(); ?>
    </div>
    <div class="single-sidebar <?php echo wp_is_mobile() ? "single-sidebar--mobile" : "single-sidebar--desktop"; ?>">
      <h3 class="single-sidebar-title <?php echo wp_is_mobile() ? "single-sidebar-title--mobile" : "single-sidebar-title--desktop"; ?>">Najnowsze</h3>
      <?php
      $recent_posts = new WP_Query('posts_per_page=3');
      while ($recent_posts->have_posts()) {
          $recent_posts->the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="single-sidebar-card">
              <img 
                src="<?php wks_the_post_thumbnail_url(); ?>" 
                alt="<?php echo get_post_field('post_name', get_post()); ?>" 
                class="single-sidebar-card-image" 
              />
              <div class="single-sidebar-card-meta">
                <div class="single-date">
                  <span><?php wks_echo_svg(get_theme_file_uri("/icons/calendar.svg")); ?></>
                  <span><?php echo the_time('d F Y'); ?></span>
                </div>
                <h5 class="single-sidebar-card-title"><?php the_title(); ?></h5>
              </div>
            </div>
          </a>
      <?php
      }
      ?>
    </div>
  <?php echo wp_is_mobile() ? "" : "</div>"; ?>
</div>

<?php
}

get_footer();
?>
 