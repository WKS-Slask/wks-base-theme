<?php get_header(); ?>
  <div class="page-wrapper">
    <h1 class="page-title">Dokumenty</h1>
    <div class="documents <?php echo wp_is_mobile() ? "documents--mobile" : "documents--desktop"; ?>">
      <?php while (have_posts()) {
          the_post(); ?>

          <div class="documents-card <?php echo wp_is_mobile() ? "documents-card--mobile" : "documents-card--desktop"; ?>">
            <div class="documents-card-title <?php echo wp_is_mobile() ? "documents-card-title--mobile" : "documents-card-title--desktop"; ?>">
              <?php echo get_field('title'); ?>
            </div>
            <div class="documents-card-border <?php echo wp_is_mobile() ? "documents-card-border--mobile" : "documents-card-border--desktop"; ?>">
              <div 
                class="documents-card-description <?php echo wp_is_mobile() ? "documents-card-description--mobile" : "documents-card-description--desktop"; ?>"
              >
                <?php echo get_field('description'); ?> 
              </div>
              <a download href="<?php echo get_field('file'); ?>" class="documents-card-button">Pobierz</a>
            </div>
          </div>

      <?php
      } ?>
    </div>
  </div>
  <?php get_footer(); ?>
