<?php
/**
 * LP共通 料金比較表セクション（トップページ／料金プランページで共通利用）
 * SPは表構造のまま横スクロールで対応する。
 *
 * @param bool   $args['show_heading'] セクション見出し（アイコンラベル＋タイトル）を表示するか
 * @param string $args['eyebrow']      見出しのアイコンラベル
 * @param string $args['title']        見出しタイトル
 * @param string $args['subtitle']     見出し下の説明文（HTML可）
 * @param bool   $args['card']         白背景カード＋水色背景セクションで囲むか（トップページ用）
 */
if ( !defined( 'ABSPATH' ) ) exit;

$lp_img_base = get_stylesheet_directory_uri() . '/assets/images/lp/';

$lp_show_heading = $args['show_heading'] ?? true;
$lp_eyebrow       = $args['eyebrow'] ?? 'Pricing';
$lp_title         = $args['title'] ?? 'まずは無料ではじめよう';
$lp_subtitle      = $args['subtitle'] ?? '旅行の計画が決まったら、そのままプレミアムへ。<br>大切な旅だから、もっと自由に使いたい人のために。';
$lp_use_card      = $args['card'] ?? false;

$lp_pricing_rows = array(
  array( 'label' => '月額料金', 'free' => 'text', 'free_value' => '¥0', 'premium' => 'text', 'premium_value' => '¥480' ),
  array( 'label' => 'プランモード', 'free' => 'check', 'premium' => 'check' ),
  array( 'label' => '予定調整モード', 'free' => 'check', 'premium' => 'check' ),
  array( 'label' => 'URLでのメンバー招待', 'free' => 'check', 'premium' => 'check' ),
  array( 'label' => '作成できるプランの数', 'free' => 'text', 'free_value' => '3つまで', 'premium' => 'text', 'premium_value' => '無制限' ),
  array( 'label' => 'デザインテンプレート', 'free' => 'dash', 'premium' => 'check' ),
  array( 'label' => 'PDF書き出し', 'free' => 'dash', 'premium' => 'check' ),
  array( 'label' => '広告非表示', 'free' => 'dash', 'premium' => 'check' ),
);
?>
<section class="lp-pricing<?php echo $lp_use_card ? ' lp-pricing--card' : ''; ?>">
  <div class="lp-pricing__inner">
    <?php if ( $lp_show_heading ) : ?>
      <?php get_template_part( 'template-parts/lp/partials/section-heading', null, array(
        'eyebrow' => $lp_eyebrow,
        'title'   => $lp_title,
      ) ); ?>
    <?php endif; ?>

    <p class="lp-pricing__subtitle"><?php echo wp_kses_post( $lp_subtitle ); ?></p>

    <div class="lp-pricing-table__wrapper js-fade-in">
      <table class="lp-pricing-table">
        <thead>
          <tr>
            <th class="lp-pricing-table__row-label-header" scope="col"></th>
            <th class="lp-pricing-table__col-header lp-pricing-table__col-header--free" scope="col">Free</th>
            <th class="lp-pricing-table__col-header lp-pricing-table__col-header--premium" scope="col">Premium</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ( $lp_pricing_rows as $lp_row_index => $lp_row ) : ?>
            <tr class="lp-pricing-table__row <?php echo $lp_row_index % 2 === 0 ? 'lp-pricing-table__row--odd' : 'lp-pricing-table__row--even'; ?>">
              <th class="lp-pricing-table__row-label" scope="row"><?php echo esc_html( $lp_row['label'] ); ?></th>
              <?php foreach ( array( 'free', 'premium' ) as $lp_plan ) : ?>
                <td class="lp-pricing-table__cell<?php echo 'premium' === $lp_plan ? ' lp-pricing-table__cell--premium' : ''; ?>">
                  <?php if ( 'check' === $lp_row[ $lp_plan ] ) : ?>
                    <img class="lp-pricing-table__icon" src="<?php echo esc_url( $lp_img_base . 'checkmark.svg' ); ?>" alt="対応">
                  <?php elseif ( 'dash' === $lp_row[ $lp_plan ] ) : ?>
                    <span class="lp-pricing-table__dash" aria-label="非対応"></span>
                  <?php else : ?>
                    <?php echo esc_html( $lp_row[ $lp_plan . '_value' ] ); ?>
                  <?php endif; ?>
                </td>
              <?php endforeach; ?>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <?php if ( $lp_use_card ) : ?>
      <img class="lp-pricing__illustration" src="<?php echo esc_url( $lp_img_base . 'undraw-travel-booking.svg' ); ?>" alt="" loading="lazy">
    <?php endif; ?>
  </div>
</section>
