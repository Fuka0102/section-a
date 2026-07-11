<?php
/**
 * LP下層ページ共通ヒーロー帯（機能紹介／料金プランページで共通利用）
 * 青帯背景＋ヘッダー内包＋アイコンラベル・タイトル。
 *
 * @param string $args['eyebrow'] アイコンラベル（例: "FEATURES"）
 * @param string $args['title']   帯タイトル
 */
if ( !defined( 'ABSPATH' ) ) exit;

$lp_page_hero_eyebrow = $args['eyebrow'] ?? '';
$lp_page_hero_title   = $args['title'] ?? '';
?>
<section class="lp-page-hero">
  <?php get_template_part( 'template-parts/lp/header' ); ?>
  <div class="lp-page-hero__inner">
    <?php get_template_part( 'template-parts/lp/partials/section-heading', null, array(
      'eyebrow' => $lp_page_hero_eyebrow,
      'title'   => $lp_page_hero_title,
    ) ); ?>
  </div>
</section>
