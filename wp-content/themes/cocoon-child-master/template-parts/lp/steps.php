<?php
/**
 * LPトップページ専用「3ステップで旅の計画がまとまる」セクション
 * PC/SPともにカードを並べ、SPは縦積み・矢印は下向きに簡略化する。
 */
if ( !defined( 'ABSPATH' ) ) exit;

$lp_img_base = get_stylesheet_directory_uri() . '/assets/images/lp/';

$lp_steps = array(
  array(
    'number'      => '01',
    'illustration' => 'undraw-join.svg',
    'title'       => '友達を招待する',
    'description' => '旅行ページを作成したら、URLを共有するだけ。<strong>アカウント登録不要</strong>で、すぐに全員が参加できます。',
  ),
  array(
    'number'      => '02',
    'illustration' => 'undraw-sharing-ideas.svg',
    'title'       => '行きたい場所を出し合う',
    'description' => 'プランモードでアイデアを自由に追加。「行きたい！」ボタンで気軽に意見を集めて、<strong>みんなの希望を見える化</strong>しましょう。',
  ),
  array(
    'number'      => '03',
    'illustration' => 'undraw-calendar.svg',
    'title'       => '日程に落とし込む',
    'description' => '予定調整モードでカレンダーに予定を登録。<strong>ドラッグ＆ドロップで</strong>順番を変えながら、旅のしおりをみんなで完成させよう。',
  ),
);
?>
<section class="lp-steps">
  <?php get_template_part( 'template-parts/lp/partials/section-heading', null, array(
    'eyebrow' => 'How to Use',
    'title'   => '3ステップで旅の計画がまとまる',
  ) ); ?>

  <div class="lp-steps__list">
    <?php foreach ( $lp_steps as $lp_step_index => $lp_step ) : ?>
      <?php if ( $lp_step_index > 0 ) : ?>
        <img class="lp-steps__connector" src="<?php echo esc_url( $lp_img_base . 'step_arrow0' . $lp_step_index . '.png' ); ?>" alt="" loading="lazy">
      <?php endif; ?>
      <div class="lp-step-card">
        <span class="lp-step-card__badge">STEP<span class="lp-step-card__badge-number"><?php echo esc_html( $lp_step['number'] ); ?></span></span>
        <img class="lp-step-card__illustration" src="<?php echo esc_url( $lp_img_base . $lp_step['illustration'] ); ?>" alt="" loading="lazy">
        <h3 class="lp-step-card__title"><?php echo esc_html( $lp_step['title'] ); ?></h3>
        <p class="lp-step-card__description"><?php echo wp_kses_post( $lp_step['description'] ); ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>
