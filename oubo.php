<?php
require_once "Mail.php";

// メールの文字セット
define( "MAIL_CHARSET", "ISO-2022-JP" );


// smtpサーバ接続情報
$param = array(
  "host" => "smtp.gmail.com"
  , "port" => 465
  , "auth" => true
  , "username" => "kutabaranai@gmail.com"
  , "password" => "samurai0714"
  , "timeout" => 20
);

// 送信先情報
$to = array( "kutabaranai@gmail.com" );
$cc = array( "メールアドレス2", "メールアドレス3" );
$bcc = array( "メールアドレス4" );

// 送信元＆件名＆本文を用意し、エンコード
$from = "de2p株式会社";
$from = mb_encode_mimeheader( $from, MAIL_CHARSET );
$subject = "メール送信test";
$subject = mb_encode_mimeheader( $subject, MAIL_CHARSET );
$body = "本文1行目。\n本文2行目!!\n本文3行目！";
$body = mb_convert_encoding( $body, MAIL_CHARSET, "UTF-8" );

// メールヘッダ
$header = array(
  "From" => $from
  , "To" => implode( "kutabaranai@gmail.com", $to )
  , "Cc" => implode( ",", $cc )
  , "Bcc" => implode( ",", $bcc )
  , "Subject" => $subject
  , "Content-Type" => "text/plain; charset=" . MAIL_CHARSET
);

// PEAR::Mailオブジェクト取得
$obj =& Mail::factory( "smtp", $param );

// メール送信
$recipients = array_merge( $to, $cc, $bcc );
$ret = $obj->send( $recipients, $header, $body );
if ( PEAR::isError( $ret ) ) {
  echo "Code[" . $ret->getCode() . "], Msg[" . $ret->getMessage() . "]\n";
} else {
  echo "メールを送信しました。\n";
}

?>





<!--
<!DOCTYPE html>
<html>
<lang type="ja">
  <head>
    <meta charset="utf-8">
    <title>歯科求人ナビ応募フォーム</title>
    <link type="text/css" rel="stylesheet" href="style.css">
  </head>
  <body>
  <h2>2分で登録簡単応募フォーム</h2>
  <h3>お名前</h3>
  <h3>資格</h3>
  <h3>連絡先電話番号</h3>
  <h3>メールアドレス</h3>
  <h3>住所</h3>
  <h3>応募した求人</h3>
<?php echo $name;?>


  </body>
  </html> -->