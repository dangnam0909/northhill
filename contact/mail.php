<?php 
date_default_timezone_set('Asia/Tokyo');
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
require('PHPMailer-6.4.0/src/Exception.php');
require('PHPMailer-6.4.0/src/PHPMailer.php');
require('PHPMailer-6.4.0/src/SMTP.php');
// header('Content-Type: application/json');
$errors = array();

/* if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  $errors['message'] = "Mothed Not Allow";
  echo json_encode($errors);
  exit();
} */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$fields = array(
'require_content',
'company_name',
'email',
'phone',
'message'
);
 
foreach ($fields as $field) {
  if(!validate($field))  $errors[$field] = '※こちらの項目を入力してください';
}

// if(!validateReCaptcha())
//   $errors['recaptcha'] = 'あなたがロボットでないなら。 更新して再試行してください！';
}
if(empty($errors)){
  extract($_POST);
  if(isset($_POST['confirm'])){

$body = <<<EOT
■お問い合わせ内容
        $require_content

■貴社名
        $company_name

■部署名・役職
        $department_name

■ご担当者様
        $care_content

■メールアドレス
        $email

■WebサイトURL
        $web_url

■電話番号
        $phone

■資料請求
        $require_document

■お問い合わせ
        $message
EOT;

$admin_subject = "【お問い合わせ】 " . $require_content;
$admin_body = <<<EOT
--------------------------------------------------------------------------

このメールは ノース・ヒル公式サイトの
お問い合わせ、資料請求フォームから送信されました。

--------------------------------------------------------------------------

$body

------------------------------------------------------------------------
EOT;

$customer_subject = "ノース・ヒルに関する【お問い合わせ】ありがとうございました";
$customer_body = <<<EOT
※このメールには自動返信メールです。
この度はお問い合わせをいただき、誠にありがとうございます。
--------------------------------------------------------------------------
$company_name
$care_content 様


この度は、お問い合わせいただきまして、
誠にありがとうございました。

下記は内容の控えとなりますので、保管いただきますよう
お願い申し上げます。
--------------------------------------------------------------------------

$body

--------------------------------------------------------------------------

頂戴いたしましたお問い合わせにつきましては、内容を確認の上、
後ほどご回答いたします。
なお、お問い合わせの内容によっては、ご回答まで数日かかる場合や
ご回答いたしかねる場合がございます。
恐れ入りますが、予めご了承くださいますようお願いいたします。
EOT;

 
  $to = "Chief@north-hill.co.jp";
// $to = "ps1906001@gmail.com";
    //   $bcc  = "";

  sendEmail($email, $customer_subject, $customer_body);
  $send = sendEmail($to, $admin_subject, $admin_body);
  
  if(!$send){
    $errors['confirm'] = "メールを送信できません";
  } else{
    header('Location:'. SITE_URL ."/thanks/" );
  }
}
}

if(!empty($errors)){  
  http_response_code(422);
//   echo json_encode($errors);
  //var_dump($errors);
  exit();
}

// echo json_encode(['status'  =>  'success']);
// exit();

function sendEmail($to, $subject, $body, $bcc=false){
  mb_language("ja");
  $subject = mb_convert_encoding($subject, "ISO-2022-JP","AUTO");
  $subject = mb_encode_mimeheader($subject);
   
  $from_email = 'no-reply@email.com';
  $from_name = "【お問い合わせ】";
  $headers  = "MIME-Version: 1.0 \n" ;
  $headers .= "From: " .
       "".mb_encode_mimeheader (mb_convert_encoding($from_name,"ISO-2022-JP","AUTO")) ."" .
       "<".$from_email."> \n";
  $headers .= "Reply-To: " .
       "".mb_encode_mimeheader (mb_convert_encoding($from_name,"ISO-2022-JP","AUTO")) ."" .
       "<".$from_email."> \n";
  $headers .= "Content-Type: text/plain;charset=UTF-8 \n";
  if($bcc)
  $headers .= "Bcc: {$bcc} \n";
  $sendmail_params  = "-f$from_email";
//   $result = mb_send_mail($to, $subject, $body, $headers, $sendmail_params);
$result = false;
  if(!$result){
    $mail = new PHPMailer();
    $mail->IsSMTP();
    //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->CharSet = 'UTF-8';
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(false);
    $mail->Username = "xxx.0000@gmail.com";
    $mail->Password = "xxxxx";
    $mail->SetFrom($from_email, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    if($bcc)    $mail->addBCC($bcc);
    return $mail->Send();
  }
  return true;
}

function validate($field){
  return (isset($_POST[$field]) && $_POST[$field]!="");
}

function validateReCaptcha(){
  $recaptcha = isset($_POST['recaptcha'])?$_POST['recaptcha']:false;
  if (!$recaptcha)  return false;
  $secret   = '6LfzSLoUAAAAAPDkvnzQy1wqbzbnAHrU-MUXj8ZL';
  $response = file_get_contents(
    "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $recaptcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
  );
  $response = json_decode($response);

  if ($response->success === false)  return false;
  return true;

  /* if ($response->success==true && $response->score <= 0.5) {
      //Do something to denied access
  } */
}