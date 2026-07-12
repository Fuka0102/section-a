<?php //子テーマ用関数
if ( !defined( 'ABSPATH' ) ) exit;

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下に子テーマ用の関数を書く

//TABICO LP用ページ（トップ／機能紹介／料金プラン）かどうかを判定
if ( !function_exists( 'is_tabico_lp_page' ) ):
function is_tabico_lp_page() {
  return is_front_page() || is_page_template( array(
    'page-templates/lp-features.php',
    'page-templates/lp-pricing.php',
  ) );
}
endif;

//LP専用のCSS/JSを読み込む
add_action( 'wp_enqueue_scripts', 'tabico_lp_enqueue_assets' );
function tabico_lp_enqueue_assets() {
  if ( !is_tabico_lp_page() ) {
    return;
  }

  $lp_css_file = get_stylesheet_directory() . '/css/lp.css';
  wp_enqueue_style(
    'tabico-lp',
    get_stylesheet_directory_uri() . '/css/lp.css',
    array(),
    file_exists( $lp_css_file ) ? filemtime( $lp_css_file ) : false
  );

  $lp_sp_bar_js_file = get_stylesheet_directory() . '/js/lp/sp-bar.js';
  wp_enqueue_script(
    'tabico-lp-sp-bar',
    get_stylesheet_directory_uri() . '/js/lp/sp-bar.js',
    array(),
    file_exists( $lp_sp_bar_js_file ) ? filemtime( $lp_sp_bar_js_file ) : false,
    true
  );

  $lp_scroll_reveal_js_file = get_stylesheet_directory() . '/js/lp/scroll-reveal.js';
  wp_enqueue_script(
    'tabico-lp-scroll-reveal',
    get_stylesheet_directory_uri() . '/js/lp/scroll-reveal.js',
    array(),
    file_exists( $lp_scroll_reveal_js_file ) ? filemtime( $lp_scroll_reveal_js_file ) : false,
    true
  );

  $lp_back_to_top_js_file = get_stylesheet_directory() . '/js/lp/back-to-top.js';
  wp_enqueue_script(
    'tabico-lp-back-to-top',
    get_stylesheet_directory_uri() . '/js/lp/back-to-top.js',
    array(),
    file_exists( $lp_back_to_top_js_file ) ? filemtime( $lp_back_to_top_js_file ) : false,
    true
  );

  //FAQアコーディオンは料金プランページのみで使用
  if ( is_page_template( 'page-templates/lp-pricing.php' ) ) {
    $lp_faq_js_file = get_stylesheet_directory() . '/js/lp/faq-accordion.js';
    wp_enqueue_script(
      'tabico-lp-faq',
      get_stylesheet_directory_uri() . '/js/lp/faq-accordion.js',
      array(),
      file_exists( $lp_faq_js_file ) ? filemtime( $lp_faq_js_file ) : false,
      true
    );
  }
}

//LPページではCocoon標準のフロント用CSS/JSを読み込まない
//（Cocoon本体のwp_enqueue_scripts_custom()より後に実行する必要があるため優先度20で登録）
add_action( 'wp_enqueue_scripts', 'tabico_lp_dequeue_cocoon_assets', 20 );
function tabico_lp_dequeue_cocoon_assets() {
  if ( !is_tabico_lp_page() ) {
    return;
  }

  //ハンドル名はcocoon-master/lib/utils.phpのwp_enqueue_style_theme_*()に準拠
  $cocoon_style_handles = array(
    'cocoon-style',
    'cocoon-keyframes',
    'cocoon-child-style',
    'cocoon-child-keyframes',
    'cocoon-skin-style',
    'cocoon-skin-keyframes',
  );
  foreach ( $cocoon_style_handles as $handle ) {
    wp_dequeue_style( $handle );
  }

  //ハンドル名はcocoon-master/lib/_defins.phpのTHEME_JS等に準拠
  $cocoon_script_handles = array(
    'cocoon-js',
    'cocoon-child-js',
    'cocoon-skin-js',
  );
  foreach ( $cocoon_script_handles as $handle ) {
    wp_dequeue_script( $handle );
  }
}