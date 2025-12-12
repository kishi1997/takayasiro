#　デザイン作成ルール

添付の PC/SP のデザインを WordPress トップページのパーツとして下記のルールに従ってレスポンシブで作成してください。

## 共有事項

- 環境構築やリセット CSS はすでに作成済みのため不要。

## コーディングルール

- レスポンシブでのコーディング
- 添付画像のデザインに必ず等しいコーディング
- 各ページへのリンクは共通して `<?php bloginfo('url'); ?>/works/` の形式で/閉じまで記載。
- text のサイズは rem を使用（1rem=10px で設定済み）
- font は変数で指定済みのものを使用
- color も変数で指定済みのものを使用
- base カラーで 453112、base フォントで Noto Sans JP を指定済みなので再度指定不要

## 変数

$font-Noto-jp: "Noto Sans JP", sans-serif;
$font-Roboto: "Roboto", sans-serif;
$font-Work-sans: "Work Sans", sans-serif;
$base-text: #453112;
$primary-color: #00523f;
$orange-color: #d56134;
$line-color: #2aae42;
$green-color: #00523f;
$base-color: #f7f4e9;

//breakpoint 設定
$breakpoint-header: 1340px; //header-menu用
$breakpoint-lg: 1280px; //large_pc
$breakpoint-md: 1080px; //medium_tab
$breakpoint-sm: 768px; //small_sp
$breakpoint-s: 640px;
$breakpoint-xs: 480px; //sp

## 画像

- 実際の画像はこちらで用意します。
- セクション名＋画像名を組み合わせる（ロゴは `logo.png`）。
- トップページなので必ず top-をつける（例：top-hero.jpg）。
- 基本的に jpg を使用。
- alt には日本語での画像の説明を入れる。
- ソースのパスは `<?php bloginfo('template_url');?>/img/` を利用する（すべての画像は img 直下にある）。

## CSS

- SCSS を利用
- コメントは書かないようにする
- クラス名：FLOCSS を利用。（例：'top-fv-banner**inner', 'top-fv-banner**phone-wrapper'）
- `&-container`等、クラス名を書かずに省略する書き方を禁止。（入れ子構造にはする）
- 共通パーツ以外はページ名を最初に必ずつける（例：top ページ `.top-skill`）
- コードは top-skill であれば.top-skill{}の中にすべて記述
- 変数は記載済みなので共有する必要ない

## 共通パーツ

-　セクションタイトルなどの共通パーツは「c-」を最初に必ずつけ作成

## レスポンシブの対応について

- 文字サイズは clamp 使って調整（例：font-size: clamp(1rem, 0.9vw, 1.5rem);）

## レイアウトに下記クラスを使用

.l-container {
max-width: 1200px;
margin-inline: auto;

@include max-screen($breakpoint-lg) {
padding: 0 4%;
}
}

## 追跡削除コマンド

git rm themes/yaotemp/css/design.css
git rm themes/yaotemp/css/design.css.map
git rm themes/yaotemp/css/design.scss
git rm themes/yaotemp/home.php
git rm themes/yaotemp/js/design.js
