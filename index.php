<?php
get_header(); ?>
  <div class="page-wrapper">
    <h1 class="page-title">Aktualności</h1>
    <div class="posts-listing">
      <?php while (have_posts()) {

          the_post();
          global $post;
          ?>
        <div class="posts-card-wrapper">
          <a href="<?php the_permalink(); ?>" class="posts-card-anchor">
            <figure class="posts-card-figure">
              <img src="<?php wks_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_field('post_name', get_post()); ?>" class="posts-card-image" />
            </figure>
          </a>
          <div class="posts-card-date">
            <span><?php wks_echo_svg(get_theme_file_uri("/icons/calendar.svg")); ?></span>
            <span><?php echo the_time('d F Y'); ?></span>
            &nbsp;&nbsp;|&nbsp;&nbsp;
            <span><?php echo get_the_category_list(',&nbsp;&nbsp;'); ?></span>
          </div>
          <a href="<?php the_permalink(); ?>" class="posts-card-anchor">
            <div class="posts-card-title"><?php the_title(); ?></div>
          </a>
            <div class="posts-card-excerpt"><?php the_excerpt(); ?></div>
        </div>
      <?php
      } ?>
      </div>
      <div class="posts-pagination">
        <?php echo paginate_links(array(
            "prev_text" => "<",
            "next_text" => ">"
        )); ?>
    </div>
  </div>
<?php get_footer(); ?>


