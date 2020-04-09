<?php

function wks_footer_is_mobile() {
    if (wp_is_mobile()) {
        echo "footer-column--mobile";
    } else {
        echo "footer-column--desktop";
    }
} ?>

   <footer class="footer">
      <div class="footer-partners">
        <h3 class="footer-title">Partnerzy</h3>
        <div class="footer-logos-wrapper">
        <?php
        $sponsors = new WP_Query(array(
            "post_type" => "sponsors",
            "posts_per_page" => -1,
            "order" => 'ASC'
        ));

        while ($sponsors->have_posts()) {

            $sponsors->the_post();
            $logoWidth = get_field_object('white-logo', $sponsor->ID)["value"]["sizes"]["footer-sponsor-logo-width"];
            $whiteLogoUrl = get_field_object('white-logo', $sponsor->ID)["value"]["sizes"]["footer-sponsor-logo"];
            $colorLogoUrl = get_field_object('color-logo', $sponsor->ID)["value"]["sizes"]["footer-sponsor-logo"];
            ?>

          <a 
            href="<?php echo get_field('sponsor-url'); ?>" 
            class="footer-logo-link" id="sponsor-container-<?php the_ID(); ?>" 
            style="width: <?php echo $logoWidth; ?>px"
          >
            <img 
              src="<?php echo $whiteLogoUrl; ?>" 
              alt="<?php echo get_post_field('post_name', get_post()); ?>" 
              title="<?php the_title(); ?>" 
              class="footer-logo" 
              id="sponsor-white-<?php the_ID(); ?>"
            />
            <img 
              src="<?php echo $colorLogoUrl; ?>" 
              alt="<?php echo get_post_field('post_name', get_post()); ?>" 
              title="<?php the_title(); ?>" 
              class="footer-logo" 
              id="sponsor-color-<?php the_ID(); ?>"
            />
          </a>

       <?php
        }
        ?>
        </div>
      </div>

      <div class="footer-columns-wrapper">
        <div class="footer-column <?php echo wks_footer_is_mobile() ? "footer-column--mobile" : ""; ?>">
          <h5>Kontakt</h5>
          <div class="footer-column-item">
            <?php wks_echo_svg(get_theme_file_uri('/icons/home.svg')); ?>
            <span>53-434 Wrocław, Oporowska 62</span>
          </div>
          <div class="footer-column-item">
            <?php wks_echo_svg(get_theme_file_uri('/icons/mail.svg')); ?>
            <a href="mailto:sekretariat@wks-slask.pop.pl">
              sekretariat@wks-slask.pop.pl
            </a>
          </div>
          <div class="footer-column-item">
            <?php wks_echo_svg(get_theme_file_uri('/icons/phone.svg')); ?>
            <span>71 733 77 77</span>
          </div>
          <div class="footer-column-item">
            <?php wks_echo_svg(get_theme_file_uri('/icons/phone.svg')); ?>
            <span>71 733 77 79</span>
          </div>
          <div class="footer-column-item">
            <?php wks_echo_svg(get_theme_file_uri('/icons/fax.svg')); ?>
            <span>71 733 77 79</span>
          </div>
        </div>
        <div class="footer-column <?php echo wks_footer_is_mobile() ? "footer-column--mobile" : ""; ?>">
          <h5>Nasze sekcje</h5>
          <div class="footer-column-item">
            <?php wks_echo_svg(get_theme_file_uri('/icons/run.svg')); ?>
            <a href="<?php echo site_url('sekcja/bieg-na-orientacje/'); ?>">Bieg na orienttację</a>
          </div>
          <div class="footer-column-item">
            <?php wks_echo_svg(get_theme_file_uri('/icons/judo.svg')); ?>
            <a href="<?php echo site_url('sekcja/judo/'); ?>">Judo</a>
          </div>
          <div class="footer-column-item">
            <?php wks_echo_svg(get_theme_file_uri('/icons/koszykowka.svg')); ?>
            <a href="<?php echo site_url('sekcja/koszykowka/'); ?>">Koszykówka</a>
          </div>
          <div class="footer-column-item">
            <?php wks_echo_svg(get_theme_file_uri('/icons/jump.svg')); ?>
            <a href="<?php echo site_url('sekcja/lekkoatletyka/'); ?>">Lekko atletyka</a>
          </div>
          <div class="footer-column-item">
            <?php wks_echo_svg(get_theme_file_uri('/icons/swim.svg')); ?>
            <a href="<?php echo site_url('sekcja/plywanie/'); ?>">Pływanie</a>
          </div>
          <div class="footer-column-item">
            <?php wks_echo_svg(get_theme_file_uri('/icons/football.svg')); ?>
            <a href="<?php echo site_url('sekcja/pilka-nozna/'); ?>">Piłka nożna</a>
          </div>
          <div class="footer-column-item">
            <?php wks_echo_svg(get_theme_file_uri('/icons/team-sports.svg')); ?>
            <a href="<?php echo site_url('sekcja/pilka-reczna/'); ?>">Piłka ręczna</a>
          </div>
          <div class="footer-column-item">
            <?php wks_echo_svg(get_theme_file_uri('/icons/weights.svg')); ?>
            <a href="<?php echo site_url('sekcja/podnoszenie-ciezarow/'); ?>">Podnoszenie ciężarów</a>
          </div>
          <div class="footer-column-item">
            <?php wks_echo_svg(get_theme_file_uri('/icons/target.svg')); ?>
            <a href="<?php echo site_url('sekcja/strzelectwo/'); ?>">Strzelectwo</a>
          </div>
          <div class="footer-column-item">
            <?php wks_echo_svg(get_theme_file_uri('/icons/fight.svg')); ?>
            <a href="<?php echo site_url('sekcja/zapasy-styl-klasyczny/'); ?>">Zapasy styl klasyczny</a>
          </div>
          <div class="footer-column-item">
            <?php wks_echo_svg(get_theme_file_uri('/icons/fight.svg')); ?>
            <a href="<?php echo site_url('sekcja/zapasy-styl-wolny/'); ?>">Zapasy styl wolny</a>
          </div>
        </div>
        <div class="footer-column <?php echo wks_footer_is_mobile() ? "footer-column--mobile" : ""; ?>">
          <h5>WKS Śląsk Wrocław</h5>
            <p>
              Naszym nadrzędnym celem statutowym jest upowszechnianie kultury
              fizycznej i sportu wśród dzieci i młodzieży. Następnym celem jest
              upowszechnianie wiedzy i umiejętności na rzecz obronności państwa, w
              tym podejmowanie działań na rzecz rozwoju dyscyplin sportowo
              przydatnych dla wojska. Oferujemy również działalność sportową i
              rekreacyjną dla osób niepełnosprawnych, a także zajmujemy się
              organizowaniem różnego rodzaju imprez sportowych dla dzieci i
              młodzieży z uwzględnieniem ich wypoczynku.
            </p>
        </div>
       </div>
       <div class="footer-copyrights">© 2020 Copyright: WKS "ŚLĄSK" Wszelkie Prawa Zastrzeżone.</div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>