<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp-portfolio2021' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e+5|J|Y)XD>N!k~/$NHb3yc vCd,F&ZR`lX<W, gR+fMod[gRqw*`b4:*?3vD2{(' );
define( 'SECURE_AUTH_KEY',  '|*kx36+vt|$^_JiPbKMCdwn{kF5s32M?2_Spt$oEx5hcjy/G){m5(ex=K&NlFmz9' );
define( 'LOGGED_IN_KEY',    'j<sof5}GQ@0M_nI$#hCaLb>N:@e-(JPS!cv;n^9y KULAMFS>M8un:dHHgoq4w`W' );
define( 'NONCE_KEY',        'tgO{,=w+y+]00UUsKqR x.mG%TXa$~`h{-BC;+eu>0_|f]3wgVx8lmRoxXjn1fqE' );
define( 'AUTH_SALT',        'Qe4NQ3/[rm*)N5CV!mR/v, O&6~3A.zz9S?`s.|/3:<4#sTfnW:X+vDx@fd_S%Gv' );
define( 'SECURE_AUTH_SALT', 'egkvP?pc76_(Ud91LG$K?k7wzc,u*}2oGX,=zv. ;Hm5ti;R?{v($W2?hl?syp_{' );
define( 'LOGGED_IN_SALT',   '@IqxE6Od_NG??NaXio1GJ^TEq.}!a|x8t3<eYa@Q^c{r-}&Jy>mbmX-5%kx!T<$h' );
define( 'NONCE_SALT',       'q<j,IA`<;DB%($@[Ff>pdt8d60Dq<6<AKM&f)6b.lE!,??sh6Syw`5hBG@,oCbi ' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
