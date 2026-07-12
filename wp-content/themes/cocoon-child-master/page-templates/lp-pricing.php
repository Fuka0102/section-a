<?php
/**
 * Template Name: 料金プラン
 *
 * LP料金プランページ
 * Cocoon標準のheader.php/footer.php（ブログ用クロム）は使わず、
 * wp_head()/wp_footer()を直接呼び出す専用ドキュメントとして組み立てる。
 */
if ( !defined( 'ABSPATH' ) ) exit;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_template_part( 'template-parts/lp/page-hero', null, array(
  'eyebrow' => 'PRICING',
  'title'   => 'シンプルな2プランのみ',
) ); ?>
<?php get_template_part( 'template-parts/lp/pricing-table', null, array(
  'show_heading' => false,
  'subtitle'     => 'まずは無料で試して、気に入ったらプレミアムへ。<br>大切な旅だから、もっと自由に使いたい人のために。',
) ); ?>
<?php get_template_part( 'template-parts/lp/faq' ); ?>
<?php get_template_part( 'template-parts/lp/cta' ); ?>
<?php get_template_part( 'template-parts/lp/footer' ); ?>

<?php wp_footer(); ?>
</body>
</html>
