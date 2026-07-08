<?php
/**
 * LPトップページ専用「旅行計画、こんなことで困ってない？」セクション
 * PCはFigma通りの散らばり配置（%座標で再現）、SPは縦積みカードに変換する。
 */
if ( !defined( 'ABSPATH' ) ) exit;

$lp_img_base = get_stylesheet_directory_uri() . '/assets/images/lp/';
?>
<section class="lp-problem">
  <div class="lp-problem__heading">
    <p class="lp-problem__eyebrow">PROBLEM</p>
    <h2 class="lp-problem__title">旅行計画、こんなことで困ってない？</h2>
  </div>

  <div class="lp-problem__scene">
    <div class="lp-problem__illustration">
      <img class="lp-problem__illustration-image" src="<?php echo esc_url( $lp_img_base . 'undraw-focused.svg' ); ?>" alt="" loading="lazy">
      <img class="lp-problem__illustration-badge" src="<?php echo esc_url( $lp_img_base . 'problem-badge.png' ); ?>" alt="" loading="lazy">
    </div>

    <div class="lp-problem__balloon lp-problem__balloon--1">
      <p class="lp-problem__balloon-text">行き先は決まったけど、<strong>LINEで予定をやり取りするのが面倒</strong></p>
      <img class="lp-problem__balloon-tail" src="<?php echo esc_url( $lp_img_base . 'balloon-tail.svg' ); ?>" alt="" loading="lazy">
    </div>

    <div class="lp-problem__balloon lp-problem__balloon--2">
      <p class="lp-problem__balloon-text">あれ、この間あの子が行きたいって言ってたお店、<strong>どこで話したんだっけ・・・</strong></p>
      <img class="lp-problem__balloon-tail" src="<?php echo esc_url( $lp_img_base . 'balloon-tail.svg' ); ?>" alt="" loading="lazy">
    </div>

    <div class="lp-problem__balloon lp-problem__balloon--3">
      <p class="lp-problem__balloon-text">いつも<strong>私ばっかり</strong>予定を決めてる気がする・・・</p>
      <img class="lp-problem__balloon-tail" src="<?php echo esc_url( $lp_img_base . 'balloon-tail.svg' ); ?>" alt="" loading="lazy">
    </div>

    <div class="lp-problem__balloon lp-problem__balloon--4">
      <p class="lp-problem__balloon-text">行きたいところを聞いてもみんなから<strong>「どこでもいいよ！」</strong>って返ってくる・・・</p>
      <img class="lp-problem__balloon-tail" src="<?php echo esc_url( $lp_img_base . 'balloon-tail.svg' ); ?>" alt="" loading="lazy">
    </div>
  </div>
</section>
