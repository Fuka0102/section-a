<?php
/**
 * 機能紹介ページ専用「TABICOでできること」セクション
 * 01〜04の機能ブロックを配列ループで描画する。
 * 画像＋テキスト交互レイアウトは`_feature-row.scss`をトップページ（PLAN/ARRANGEモード紹介）と共通利用。
 */
if ( !defined( 'ABSPATH' ) ) exit;

$lp_img_base = get_stylesheet_directory_uri() . '/assets/images/lp/';

$lp_features = array(
  array(
    'number'      => '01',
    'title'       => 'まず、アイデアを出し合おう',
    'badge'       => 'Plan モード',
    'description' => '行きたい場所、やりたいこと——思いついたものをどんどん追加できます。「行きたい！」ボタンで気軽に意見を集めて、何人が興味を持っているかが一目でわかります。<strong>多数決で自然にプランが絞り込まれていく</strong>ので、誰も損しない旅づくりができます。',
    'checklist'   => array(
      '行きたい場所・やりたいことを自由に追加',
      '「行きたい！」ボタンで意見を集約',
      '<strong>参加人数・希望数をリアルタイムで確認</strong>',
    ),
    'image'       => 'plan_image.png',
    'reverse'     => false,
  ),
  array(
    'number'      => '02',
    'title'       => '次に、日程に落とし込もう',
    'badge'       => 'Plan モード',
    'description' => '泊数を選ぶとGoogleカレンダー風のUIが日数分表示され、決まった予定をみんなで登録・編集できます。予定はドラッグ＆ドロップで移動でき、各予定にGoogle マップのリンクやメモも添付可能。<br><strong>旅のしおりがそのまま完成します。</strong>',
    'checklist'   => array(
      'カレンダー形式で日程を共同編集',
      'ドラッグ＆ドロップで予定を移動',
      'Google マップリンク・メモを添付できる',
    ),
    'image'       => 'arrange_image.png',
    'reverse'     => true,
  ),
  array(
    'number'      => '03',
    'title'       => 'URLを送るだけで全員参加',
    'badge'       => '',
    'description' => '<strong>アカウント登録は不要です。</strong><br>作成した旅行ページのURLを共有するだけで、友達がすぐに参加できます。<strong>LINEでもメールでも、どこからでも招待できます。</strong>',
    'checklist'   => array(
      'URLシェアだけで招待完了',
      'メンバーのアカウント登録不要',
      '<strong>人数制限なし</strong>',
    ),
    'image'       => 'feature_mockup_03.png',
    'reverse'     => false,
  ),
  array(
    'number'      => '04',
    'title'       => '完成したしおりを、持ち歩こう',
    'badge'       => '',
    'description' => '完成した旅行プランはPDFに書き出して保存できます。スマホでも見やすい表示なので、旅先でそのまま使えます。<strong>プレミアムプランなら保存数が無制限になり、過去の旅の記録も残しておけます</strong>。',
    'checklist'   => array(
      '<strong>PDFで書き出して保存・印刷できる</strong>',
      'スマホ表示に最適化されたデザイン',
      'プレミアムなら保存数無制限',
    ),
    'image'       => 'feature_mockup_04.png',
    'reverse'     => true,
  ),
);
?>
<section class="lp-features">
  <p class="lp-features__intro">
    旅行の計画に必要なことを、ぜんぶ一箇所に。<br>
    みんなで使えるから、誰かに負担が集中しない。
  </p>

  <?php foreach ( $lp_features as $lp_feature ) : ?>
    <div class="lp-feature-row<?php echo $lp_feature['reverse'] ? ' lp-feature-row--reverse' : ''; ?>">
      <div class="lp-feature-row__content">
        <div class="lp-feature-row__heading">
          <span class="lp-feature-row__number"><?php echo esc_html( $lp_feature['number'] ); ?></span>
          <h3 class="lp-feature-row__title"><?php echo esc_html( $lp_feature['title'] ); ?></h3>
        </div>
        <?php if ( !empty( $lp_feature['badge'] ) ) : ?>
          <p class="lp-feature-row__badge"><?php echo esc_html( $lp_feature['badge'] ); ?></p>
        <?php endif; ?>
        <p class="lp-feature-row__description"><?php echo wp_kses_post( $lp_feature['description'] ); ?></p>
        <ul class="lp-feature-row__checklist">
          <?php foreach ( $lp_feature['checklist'] as $lp_checklist_item ) : ?>
            <li class="lp-feature-row__checklist-item">
              <img class="lp-feature-row__checklist-icon" src="<?php echo esc_url( $lp_img_base . 'feature-checkmark.svg' ); ?>" alt="">
              <span class="lp-feature-row__checklist-text"><?php echo wp_kses_post( $lp_checklist_item ); ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="lp-feature-row__media">
        <div class="lp-feature-row__media-inner lp-feature-row__media-inner--feature">
          <img class="lp-feature-row__mockup" src="<?php echo esc_url( $lp_img_base . $lp_feature['image'] ); ?>" alt="" loading="lazy">
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</section>
