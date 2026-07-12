<?php
/**
 * LP料金プランページ専用「よくあるご質問」セクション
 * アコーディオン開閉はjs/lp/faq-accordion.jsで制御する（aria-expandedを切り替え）。
 */
if ( !defined( 'ABSPATH' ) ) exit;

$lp_img_base = get_stylesheet_directory_uri() . '/assets/images/lp/';

$lp_faq_items = array(
  array(
    'question' => '無料プランでどこまで使えますか？',
    'answer'   => 'プランモード・予定調整モード・メンバー招待など、旅行計画に必要な基本機能はすべて無料で使えます。しおりの保存が3件までという制限があります。',
  ),
  array(
    'question' => 'プレミアムプランはいつでも解約できますか？',
    'answer'   => 'はい、いつでも解約可能です。解約後も、期間終了までプレミアム機能をご利用いただけます。',
  ),
  array(
    'question' => '支払い方法は何が使えますか？',
    'answer'   => 'クレジットカードでのお支払いに対応しています（対応ブランド：Visa、Mastercard、JCB、American Express）。',
  ),
  array(
    'question' => '作成した旅のしおりは他の人も見られますか？',
    'answer'   => 'URLを共有するだけで、友達や家族にも旅のしおりを見てもらえます。アカウント登録は不要です。',
  ),
);
?>
<section class="lp-faq">
  <div class="lp-faq__heading">
    <span class="lp-faq__heading-decoration">FAQ</span>
    <h2 class="lp-faq__title">よくあるご質問</h2>
  </div>

  <div class="lp-faq__list">
    <?php foreach ( $lp_faq_items as $lp_faq_index => $lp_faq_item ) : ?>
      <div class="lp-faq__item js-fade-in">
        <button type="button" class="lp-faq__question" aria-expanded="false" aria-controls="lp-faq-answer-<?php echo esc_attr( $lp_faq_index ); ?>">
          <img class="lp-faq__icon" src="<?php echo esc_url( $lp_img_base . 'icon_q.png' ); ?>" alt="">
          <span class="lp-faq__question-text"><?php echo esc_html( $lp_faq_item['question'] ); ?></span>
        </button>
        <div class="lp-faq__answer" id="lp-faq-answer-<?php echo esc_attr( $lp_faq_index ); ?>">
          <img class="lp-faq__icon" src="<?php echo esc_url( $lp_img_base . 'icon_a.png' ); ?>" alt="">
          <p class="lp-faq__answer-text"><?php echo esc_html( $lp_faq_item['answer'] ); ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
