<?php
/**
 * LPトップページ専用ヒーローセクション
 */
if ( !defined( 'ABSPATH' ) ) exit;

$lp_hero_image = get_stylesheet_directory_uri() . '/assets/images/lp/hero-photo.jpg';
$lp_hero_smartphone_image = get_stylesheet_directory_uri() . '/assets/images/lp/hero-smartphone.png';
?>
<section class="lp-hero" style="background-image: url(<?php echo esc_url( $lp_hero_image ); ?>);">
  <?php get_template_part( 'template-parts/lp/header' ); ?>
  <div class="lp-hero__inner">
    <h1 class="lp-hero__title">
      友達と、一緒に<span class="lp-hero__title-accent">“旅’’</span>をつくろう。
    </h1>
    <a class="lp-hero__cta lp-button lp-button--large" href="#">まずは無料でお試し</a>
  </div>
  <div class="lp-hero__smartphone">
    <img src="<?php echo esc_url( $lp_hero_smartphone_image ); ?>" alt="">
  </div>
</section>
