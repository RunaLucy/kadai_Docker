<?php
// ADOdbモジュールの読み込み
require ('/sample/lib/adodb5/adodb.inc.php');

// DBアカウント情報の設定
$sqltype = "mysql";
$server = "localhost";
$user = "root";
$password = "runa";
$dbname = "dbname1";

// ADOdbのインスタンスを作成
$DB = NewADOConnection($sqltype);

// DBに接続
$DB->pconnect($server, $user, $password, $dbname);

// 接続確認
if (!$DB) die("接続に失敗しました");

// SQLを実行
//$result = $DB->execute("INSERT INTO test VALUES('10', '山本')");

echo "<pre>";

//if (!$result) {
	// エラーメッセージ出力
//	echo "データを挿入できませんでした\n";
//	echo "エラー：".$DB->ErrorMsg()."\n";
//} else {
//	echo "データを挿入しました";
//}

echo "</pre>";

?>
