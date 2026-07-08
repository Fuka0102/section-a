<?php
/**
 * LP共通CTAセクション「さぁTABICOで計画しよう」
 * トップ／機能紹介／料金プランの3ページで共通利用する。
 */
if ( !defined( 'ABSPATH' ) ) exit;

$lp_cta_image_base = get_stylesheet_directory_uri() . '/assets/images/lp/';
?>
<section class="lp-cta">
  <div class="lp-cta__inner">
    <div class="lp-cta__heading">
      <p class="lp-cta__eyebrow">Let’s create our plan!</p>
      <h2 class="lp-cta__title">さぁTABICOで計画しよう</h2>
    </div>
    <p class="lp-cta__body">
      旅行の計画が決まったら、そのままプレミアムへ。<br>
      大切な旅だから、もっと自由に使いたい人のために。
    </p>
    <a class="lp-cta__button lp-button lp-button--large" href="#">まずは無料でお試し</a>
  </div>
  <img class="lp-cta__illustration lp-cta__illustration--airplane" src="<?php echo esc_url( $lp_cta_image_base . 'undraw-airplane.svg' ); ?>" alt="" loading="lazy">
  <img class="lp-cta__illustration lp-cta__illustration--traveler" src="<?php echo esc_url( $lp_cta_image_base . 'undraw-travel-mode.svg' ); ?>" alt="" loading="lazy">
</section>
