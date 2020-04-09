<?php
get_header(); ?>
<section class="front-page-slider">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <?php if (!wp_is_mobile()) { ?>
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      </ol>
    <?php } ?>

  <div class="carousel-inner">
    <?php
    $sliderPosts = new WP_Query(array(
        "post_type" => "post",
        "posts_per_page" => 5
    ));

    while ($sliderPosts->have_posts()) {
        $sliderPosts->the_post(); ?>
            <div class="carousel-item <?php echo $sliderPosts->current_post === 0 ? "active" : ""; ?>">
            <a href="<?php the_permalink(); ?>">
              <div class="front-page-slider-item">
                <figure class="front-page-slider-figure front-page-slider-figure--desktop">
                  <img src="<?php wks_the_post_thumbnail_url(); ?>" alt="test" class="front-page-slider-image">
                </figure>
                <div class="front-page-slide-title <?php echo wp_is_mobile()
                    ? "front-page-slide-title--mobile"
                    : "front-page-slide-title--desktop"; ?>"><?php the_title(); ?></div>
                <div class="front-page-slider-overlay"></div>
              </div>
            </a>
            </div>
          <?php
    }
    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php get_footer();

?>
