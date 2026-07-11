<?php
/**
 * LPトップページ（固定フロントページ）
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

<?php get_template_part( 'template-parts/lp/hero' ); ?>
<?php get_template_part( 'template-parts/lp/problem' ); ?>
<div class="lp-section-arrow">
  <img class="lp-section-arrow__image" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/lp/arrow.png' ); ?>" alt="" loading="lazy">
</div>
<?php get_template_part( 'template-parts/lp/about-modes' ); ?>
<?php get_template_part( 'template-parts/lp/steps' ); ?>
<?php get_template_part( 'template-parts/lp/pricing-table', null, array(
  'card' => true,
) ); ?>
<?php get_template_part( 'template-parts/lp/cta' ); ?>
<?php get_template_part( 'template-parts/lp/footer' ); ?>

<?php wp_footer(); ?>
</body>
</html>
