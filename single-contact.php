<?php
get_header();
while (have_posts()) {
    the_post(); ?>

<div class="page-wrapper">
  <h1 class="page-title"><?php the_title(); ?></h1>
  <div class="contact">
    <h2>Wojskowy Klub Sportowy "Śląsk"</h2>
    <div class="contact-item <?php echo wp_is_mobile() ? "contact-item--mobile" : "contact-item--desktop"; ?>">
      <?php wks_echo_svg(get_theme_file_uri("/icons/home.svg")); ?>
      <span><?php echo get_field('address'); ?></span>
    </div>
    <div class="contact-item <?php echo wp_is_mobile() ? "contact-item--mobile" : "contact-item--desktop"; ?>">
      <?php wks_echo_svg(get_theme_file_uri("/icons/edit.svg")); ?>
      <span>NIP:
        <?php
        echo wp_is_mobile() ? "<br>" : "\$nbsp";
        echo get_field('nip');
        ?>
      </span>
    </div>
    <div class="contact-item <?php echo wp_is_mobile() ? "contact-item--mobile" : "contact-item--desktop"; ?>">
      <?php wks_echo_svg(get_theme_file_uri("/icons/edit.svg")); ?>
      <span>REGON:       
        <?php
        echo wp_is_mobile() ? "<br>" : "\$nbsp";
        echo get_field('regon');
        ?>
      </span>
    </div>
    <div class="contact-item <?php echo wp_is_mobile() ? "contact-item--mobile" : "contact-item--desktop"; ?>">
      <?php wks_echo_svg(get_theme_file_uri("/icons/edit.svg")); ?>
      <span>KRS:        
        <?php
        echo wp_is_mobile() ? "<br>" : "\$nbsp";
        echo get_field('krs');
        ?>
      </span>
    </div>
    <div class="contact-item <?php echo wp_is_mobile() ? "contact-item--mobile" : "contact-item--desktop"; ?>">
      <?php wks_echo_svg(get_theme_file_uri("/icons/phone.svg")); ?>
      <span>tel:        
        <?php
        echo wp_is_mobile() ? "<br>" : "\$nbsp";
        echo get_field('phone');
        ?>
      </span>
    </div>
    <div class="contact-item <?php echo wp_is_mobile() ? "contact-item--mobile" : "contact-item--desktop"; ?>">
      <?php wks_echo_svg(get_theme_file_uri("/icons/fax.svg")); ?>
      <span>fax:        
        <?php
        echo wp_is_mobile() ? "<br>" : "\$nbsp";
        echo get_field('fax');
        ?>
      </span>
    </div>
    <div class="contact-item <?php echo wp_is_mobile() ? "contact-item--mobile" : "contact-item--desktop"; ?>">
      <?php wks_echo_svg(get_theme_file_uri("/icons/mail.svg")); ?>
      <span>email:<?php echo wp_is_mobile() ? "<br>" : "\$nbsp"; ?>
      <a class="contact-email" href="mailto:<?php echo get_field('email'); ?>"><?php echo get_field('email'); ?></a></span>
    </div>
    <div class="contact-item <?php echo wp_is_mobile() ? "contact-item--mobile" : "contact-item--desktop"; ?>">
      <?php wks_echo_svg(get_theme_file_uri("/icons/bank.svg")); ?>
      <span>PKO BP S.A        
        <?php
        echo wp_is_mobile() ? "<br>" : "\$nbsp";
        echo get_field('bank');
        ?>
      </span>
    </div>
    <div class="contact-item <?php echo wp_is_mobile() ? "contact-item--mobile" : "contact-item--desktop"; ?>">
      <?php wks_echo_svg(get_theme_file_uri("/icons/bank.svg")); ?>
      <span>Darowizny:        
        <?php
        echo wp_is_mobile() ? "<br>" : "\$nbsp";
        echo get_field('darowizny');
        ?>
      </span>
    </div>
    <div class="contact-invitation">
      <span>Zapraszamy</span>
      <span>od poniedziałku od piątku</span>
      <span>7:15-15:15</span>
    </div>
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.617119036099!2d16.993658215642775!3d51.09707324844222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470fc218b5d95de5%3A0x87a3041ca60c9b39!2sOporowska%2062%2C%2053-434%20Wroc%C5%82aw!5e0!3m2!1spl!2spl!4v1581020369699!5m2!1spl!2spl" 
      class="contact-map <?php echo wp_is_mobile() ? "contact-map--mobile" : "contact-map--desktop"; ?>">
    </iframe>
  </div>
</div>

<?php
}

get_footer();

?>
