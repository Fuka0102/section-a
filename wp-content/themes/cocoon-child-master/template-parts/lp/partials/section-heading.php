<?php
/**
 * LP共通セクション見出し（黄色アイコンラベル＋タイトル）
 * 複数セクション（CTA/困りごと/PLAN・ARRANGE/3ステップ/料金/FAQ）で共通利用する。
 *
 * @param string $args['eyebrow'] アイコンラベル（例: "PROBLEM"）
 * @param string $args['title']   セクションタイトル
 */
if ( !defined( 'ABSPATH' ) ) exit;

$lp_heading_eyebrow = $args['eyebrow'] ?? '';
$lp_heading_title   = $args['title'] ?? '';
?>
<div class="lp-section-heading">
  <p class="lp-section-heading__eyebrow"><?php echo esc_html( $lp_heading_eyebrow ); ?></p>
  <h2 class="lp-section-heading__title"><?php echo esc_html( $lp_heading_title ); ?></h2>
</div>
