<?php

require_once "../functions.php";

set_title("送信完了｜株式会社ノース・ヒル");
set_desc("株式会社ノース・ヒルへのお問い合わせが完了いたしました。");
?>
<?php section('stylesheet');?>
<link href="<?php asset('css/contact.css');?>" rel="stylesheet">
<?php endsection();?>
<?php
get_header();
?>
<main id="contact">
    <div class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="<?php url()?>" title="TOP">TOP</a></li>
                <li><span>お問い合わせ</span></li>
            </ul>
        </div>
    </div>
    <section id="contact__content" class="contact__content">
        <div class="container">
            <div class="contact-wrap">
                <h2 class="ct-title">
                    送信しました
                </h2>
                <div class="ct-cnt c-thanks">
                    <p>
                        お問い合わせ、ありがとうございました。
                    </p>
                    <p>
                        24時間以内に自動返信メールが届かない場合には、再度お問い合わせ願います。
                    </p>
                    <p>
                        また自動返信メール受信後3営業日以内に当方よりご返答がない場合には、<br>
                        大変お手数ですが再度お問い合わせいただくか、<br class="br-pc" />お電話によるお問い合わせに変更していただきますようお願い致します。
                    </p>
                </div>
                <div class="btn-wrap c-thanks">
                    <div class="btnw c-black">
                        <a href="<?php url();?>" title="TOPへ戻る">TOPへ戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php section('scripts');?>

<?php endsection();?>
<?php get_footer();?>