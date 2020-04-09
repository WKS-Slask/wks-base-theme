<?php
get_header();

while (have_posts()) {
    the_post();?>

<div class="single <?php echo wp_is_mobile() ? "single--mobile" : "single--desktop"; ?>">
  <div class="single-section-title-wrapper">
    <h1 class="page-title"><?php the_title();?></h1>
    <a href="<?php echo get_field('facebook', get_post()); ?>">
      <div class="single-section-social-wrapper">
        <div class="single-section-social <?php echo wp_is_mobile() ? "single-section-social--mobile" : "single-section-social--desktop" ?>">
          <?php wks_echo_svg(get_theme_file_uri('/icons/facebook.svg'));?>
        </div>
      </a>
      <a href="<?php echo get_field('webpage_url', get_post()); ?>">
        <div class="single-section-social <?php echo wp_is_mobile() ? "single-section-social--mobile" : "single-section-social--desktop" ?>">
          <?php wks_echo_svg(get_theme_file_uri('/icons/internet.svg'));?>
        </div>
      </a>
    </div>
  </div>
  <figure class="single-figure <?php echo wp_is_mobile() ? "single-figure--mobile" : "single-figure--desktop"; ?>">
    <img
      src="<?php wks_the_post_thumbnail_url(); ?>"
      alt="<?php echo get_post_field('post_name', get_post()); ?>"
      class="single-image"
    />
  </figure>
    <div
      class="single-section-content"
    >
      <?php the_content();?>
    </div>
    <h2 class="single-section-subtitle">Aktualności</h2>
    <div class="single-section-listing">
      <?php
$sectionPosts = new WP_Query(array(
        "category_name" => get_post_field('post_name', get_post()),
    ));

    while ($sectionPosts->have_posts()) {

        $sectionPosts->the_post();
        global $post;
        ?>
        <div class="single-section-card-wrapper">
          <a href="<?php the_permalink();?>" class="single-section-card-anchor">
            <figure class="single-section-card-figure">
              <img
                src="<?php wks_the_post_thumbnail_url(); ?>"
                alt="<?php echo get_post_field('post_name', get_post()); ?>"
                class="single-section-card-image"
              />
            </figure>
          </a>
          <div class="single-section-card-date">
            <span><?php wks_echo_svg(get_theme_file_uri("/icons/calendar.svg"));?></span>
            <span><?php echo the_time('d F Y'); ?></span>
            &nbsp;&nbsp;|&nbsp;&nbsp;
            <span><?php echo get_the_category_list(',&nbsp;&nbsp;'); ?></span>
          </div>
          <a href="<?php the_permalink();?>" class="single-section-card-anchor">
            <div class="single-section-card-title"><?php the_title();?></div>
          </a>
        </div>
      <?php
}
    ?>
      </div>
      <div class="single-section-pagination">
        <?php echo paginate_links(array(
        "prev_text" => "<",
        "next_text" => ">",
    )); ?>
    </div>

</div>

<?php
}

get_footer();
?>
