<?php
/**
 * LP共通ヘッダー（グロナビ）
 * トップ／機能紹介／料金プランの3ページで共通利用する。
 * リンク先はセクション8（固定ページ作成後）で実URLに差し替える。
 */
if ( !defined( 'ABSPATH' ) ) exit;
?>
<header class="lp-header">
  <div class="lp-header__inner">
    <button type="button" class="lp-header__menu-toggle" aria-expanded="false" aria-controls="lp-header-nav-list">
      <span class="lp-header__menu-icon"></span>
      <span class="lp-header__sr-only">メニューを開く</span>
    </button>
    <nav class="lp-header__nav" aria-label="グローバルナビゲーション">
      <ul class="lp-header__nav-list" id="lp-header-nav-list">
        <li class="lp-header__nav-item">
          <a class="lp-header__nav-link" href="#">機能・使い方</a>
        </li>
        <li class="lp-header__nav-item">
          <a class="lp-header__nav-link" href="#">料金プラン</a>
        </li>
      </ul>
      <a class="lp-header__cta lp-button" href="#">まずは無料でお試し</a>
    </nav>
  </div>
</header>
