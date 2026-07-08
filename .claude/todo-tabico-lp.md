# TABICO LP実装 todo

詳細な背景・設計方針は `/todo-tabico-lp.md`（プロジェクト直下）を参照。実装が完了した項目は `[x]` にチェックすること。

## 1. ビルド環境

- [x] `package.json` 作成（gulp / gulp-sass / sass / rename / plumber を追加）
- [x] `gulpfile.js` 作成（`scss/lp/lp.scss` → `css/lp.css`、watchタスクも用意。親テーマ `cocoon-master/gulpfile.js` の構成を踏襲）
- [x] `scss/lp/_variables.scss`（色・フォント・768pxブレークポイント用の値を定義）
- [x] `scss/lp/_mixins.scss`（`@mixin sp { @media screen and (max-width: 768px) { @content; } }`）
- [x] `npm install` → `npx gulp` で `css/lp.css` が生成されることを確認

## 2. functions.php

- [x] LP専用アセット（`css/lp.css` / `js/lp/faq-accordion.js`）を `is_front_page() || is_page_template([...])` の条件で `wp_enqueue_style`/`wp_enqueue_script`
- [x] 同条件でCocoon標準のフロントCSS/JSを `wp_dequeue_style`/`wp_dequeue_script`

## 3. 共通コンポーネント（3ページ共通）

- [x] `template-parts/lp/header.php` + `scss/lp/components/_header.scss`（グロナビ、SPはハンバーガーメニュー）
- [x] `scss/lp/components/_button.scss`（CTAボタン：角丸オレンジ。グラデーションテキストは白文字ベタ塗りに簡略化）
- [x] `template-parts/lp/cta.php` + `scss/lp/components/_cta-section.scss`（「さぁTABICOで計画しよう」。装飾イラストはSPで非表示に）
- [x] `template-parts/lp/footer.php` + `scss/lp/components/_footer.scss`

## 4. アセット書き出し

- [x] Figmaからイラスト・写真・アイコンを書き出し `assets/images/lp/` に配置（get_design_context/get_screenshotで都度取得。ヒーロー写真はJPEG変換・圧縮して4.6MB→216KBに削減。電話モックアップ周りの微小な装飾アイコン群は簡略化のため省略）

## 5. トップページ（front-page.php）

- [x] `template-parts/lp/hero.php` + `scss/lp/components/_hero.scss`（グラデーションテキストは白文字＋オレンジアクセントに簡略化）
- [x] `template-parts/lp/problem.php` + `scss/lp/components/_balloon-card.scss`（吹き出し4つ。PCはFigma実測値を%換算した散らばり配置、SPは位置・尻尾ロジックを廃止し縦積みカードに変換）
- [ ] `template-parts/lp/about-modes.php` + `scss/lp/components/_feature-row.scss`（PLAN/ARRANGEモード紹介、交互レイアウト。SPは画像→テキストの縦積み）
- [ ] `template-parts/lp/steps.php` + `scss/lp/components/_step-card.scss`（3ステップ。SPは縦積み、矢印は下向きに簡略化）
- [ ] `template-parts/lp/pricing-table.php` + `scss/lp/components/_pricing-table.scss`（Free/Premium比較表。SPは表構造のまま横スクロール）
- [ ] `front-page.php` 組み立て：header → hero → problem → about-modes → steps → pricing-table → cta → footer

## 6. 機能紹介ページ（page-templates/lp-features.php）

- [ ] `template-parts/lp/features-block.php`（01〜04を配列ループで呼び出すパラメータ化部品、`_feature-row.scss` を再利用）
- [ ] `page-templates/lp-features.php` 組み立て：header → hero帯 → features-block×4 → cta → footer

## 7. 料金プランページ（page-templates/lp-pricing.php）

- [ ] `template-parts/lp/faq.php` + `scss/lp/components/_faq.scss` + `js/lp/faq-accordion.js`（アコーディオン開閉、aria-expanded制御）
- [ ] `page-templates/lp-pricing.php` 組み立て：header → hero帯 → pricing-table（共通部品を再利用） → faq → cta → footer

## 8. WP管理画面設定

- [ ] 「設定→表示設定」でトップページを固定ページ（front-page.php使用）に設定
- [ ] 「機能紹介」「料金プラン」の固定ページを作成し、対応テンプレートを割り当て
- [ ] グロナビ（機能・使い方／料金プラン／まずは無料でお試し）のリンク先を実ページに更新

## 9. レスポンシブ調整（768px）

- [ ] 全セクションを768px以下で確認・調整（SP対応方針は `/todo-tabico-lp.md` の対応表を参照）

## 10. 全体QA

- [ ] `grep -rn "margin-bottom"` で子テーマ内に未使用であることを確認
- [ ] BEM命名・スタイル付与要素へのクラス付与を確認
- [ ] PC幅・SP幅（768px以下）でFigmaと見比べて崩れがないか確認
- [ ] FAQアコーディオンのクリック／キーボード操作・aria-expanded切り替えを確認
- [ ] グロナビの遷移先が正しいことを確認
