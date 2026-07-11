<?php
/**
 * LP共通ヘッダー（グロナビ）
 * トップ／機能紹介／料金プランの3ページで共通利用する。
 * リンク先はセクション8（固定ページ作成後）で実URLに差し替える。
 * SPはグロナビの代わりに画面下部固定のlp-sp-barを表示する（js/lp/sp-bar.jsでスクロール停止時にスライド表示）。
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
          <a class="lp-header__nav-link" href="#">料金プラン</a>
        </li>
      </ul>
      <a class="lp-header__cta lp-button" href="#">まずは無料でお試し</a>
    </nav>
  </div>
</header>

<div class="lp-sp-bar" id="lp-sp-bar">
  <a class="lp-sp-bar__link" href="#">料金プラン</a>
  <a class="lp-sp-bar__link" href="<?php echo esc_url( home_url( '/features/' ) ); ?>">機能・使い方</a>
  <a class="lp-sp-bar__cta" href="#">無料でお試し</a>
</div>
