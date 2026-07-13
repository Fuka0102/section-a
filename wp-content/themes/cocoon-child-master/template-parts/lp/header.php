<?php
/**
 * LP共通ヘッダー（グロナビ）
 * トップ／機能紹介／料金プランの3ページで共通利用する。
 * SPはグロナビの代わりに画面下部固定のlp-sp-barを表示する（js/lp/sp-bar.jsでスクロール停止時にスライド表示）。
 * lp-back-to-topはPCのみ表示。一定量スクロールしたら現れ、クリックでページトップへスムーズスクロールする（js/lp/back-to-top.js）。
 */
if ( !defined( 'ABSPATH' ) ) exit;

$lp_header_img_base = get_stylesheet_directory_uri() . '/assets/images/lp/';
?>
<header class="lp-header">
  <div class="lp-header__inner">
    <a class="lp-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <img class="lp-header__logo-image" src="<?php echo esc_url( $lp_header_img_base . 'logo.png' ); ?>" alt="TABICO">
    </a>
    <nav class="lp-header__nav" aria-label="グローバルナビゲーション">
      <ul class="lp-header__nav-list">
        <li class="lp-header__nav-item">
          <a class="lp-header__nav-link" href="<?php echo esc_url( home_url( '/features/' ) ); ?>">機能・使い方</a>
        </li>
        <li class="lp-header__nav-item">
          <a class="lp-header__nav-link" href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>">料金プラン</a>
        </li>
      </ul>
      <a class="lp-header__cta lp-button" href="#">まずは無料でお試し</a>
    </nav>
  </div>
</header>

<div class="lp-sp-bar" id="lp-sp-bar">
  <button type="button" class="lp-sp-bar__logo js-back-to-top" aria-label="ページトップへ戻る">
    <img class="lp-sp-bar__logo-image" src="<?php echo esc_url( $lp_header_img_base . 'logo.png' ); ?>" alt="TABICO">
  </button>
  <a class="lp-sp-bar__link" href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>">料金プラン</a>
  <a class="lp-sp-bar__link" href="<?php echo esc_url( home_url( '/features/' ) ); ?>">機能・使い方</a>
  <a class="lp-sp-bar__cta" href="#">無料でお試し</a>
</div>

<button type="button" class="lp-back-to-top js-back-to-top" aria-label="ページトップへ戻る">
  <span class="lp-back-to-top__arrow"></span>
</button>
