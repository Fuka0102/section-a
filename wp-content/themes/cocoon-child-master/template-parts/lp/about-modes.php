<?php
/**
 * LPトップページ専用「旅の計画を、みんなで」セクション（PLAN/ARRANGEモード紹介）
 * PCは画像とテキストの左右交互レイアウト、SPは画像→テキストの縦積みに変換する。
 */
if ( !defined( 'ABSPATH' ) ) exit;

$lp_img_base = get_stylesheet_directory_uri() . '/assets/images/lp/';
?>
<section class="lp-about-modes">
  <?php get_template_part( 'template-parts/lp/partials/section-heading', null, array(
    'eyebrow' => 'What’s TABICO?',
    'title'   => '旅の計画を、みんなで',
  ) ); ?>

  <p class="lp-about-modes__intro">
    「どこ行く？」から「行ってきた！」まで——TABICOは、<strong>友達と一緒に旅行計画をリアルタイムで作れる</strong>Webサービスです。<br>
    LINEに流れる情報も、幹事だけに集中する負担も、もうなくていい。<br>
    みんなで決めて、みんなで楽しむ旅をつくろう。
  </p>

  <div class="lp-feature-row">
    <div class="lp-feature-row__content">
      <div class="lp-feature-row__heading">
        <span class="lp-feature-row__number">01</span>
        <h3 class="lp-feature-row__mode-title">
          <span class="lp-feature-row__mode-title-en">PLAN</span>
          <span class="lp-feature-row__mode-title-ja">モード</span>
        </h3>
      </div>
      <p class="lp-feature-row__callout">まずはみんなどこ行きたい？</p>
      <p class="lp-feature-row__description">
        まずはアイデアを出し合おう。行きたい場所、やりたいこと——思いついたものをどんどん追加。<strong>「行きたい！」ボタン</strong>で気軽に意見を集めて、みんなの希望を見える化できます。
      </p>
    </div>
    <div class="lp-feature-row__media">
      <div class="lp-feature-row__media-inner lp-feature-row__media-inner--plan">
        <img class="lp-feature-row__mockup" src="<?php echo esc_url( $lp_img_base . 'plan_image.png' ); ?>" alt="" loading="lazy">
      </div>
    </div>
  </div>

  <div class="lp-feature-row lp-feature-row--reverse">
    <div class="lp-feature-row__content">
      <div class="lp-feature-row__heading">
        <span class="lp-feature-row__number">02</span>
        <h3 class="lp-feature-row__mode-title">
          <span class="lp-feature-row__mode-title-en">ARRANGE</span>
          <span class="lp-feature-row__mode-title-ja">モード</span>
        </h3>
      </div>
      <p class="lp-feature-row__callout">みんなで旅行のスケジュールを<br class="lp-feature-row__callout-break">作ってみよう</p>
      <p class="lp-feature-row__description">
        みんなの希望を日程に落とし込もう。泊数を選ぶと日数分のカレンダーが表示され、決まった予定をみんなで登録・編集できます。予定はドラッグ&amp;ドロップで移動でき、<strong>Google マップのリンクやメモも添付可能</strong>。旅のしおりがそのまま完成します。
      </p>
    </div>
    <div class="lp-feature-row__media">
      <div class="lp-feature-row__media-inner lp-feature-row__media-inner--arrange">
        <img class="lp-feature-row__mockup" src="<?php echo esc_url( $lp_img_base . 'arrange_image.png' ); ?>" alt="" loading="lazy">
      </div>
    </div>
  </div>
</section>
