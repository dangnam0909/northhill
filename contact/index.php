<?php

require_once "../functions.php";

set_title("お問い合わせ（個人情報の取扱いについて）｜株式会社ノース・ヒル");
set_desc("株式会社ノース・ヒルの個人情報の取扱いについて掲載しています。");
?>
<?php section('stylesheet');?>
<link href="<?php asset('css/contact.css');?>?5" rel="stylesheet">
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
    <section id="page-heading">
        <div class="container">
            <div class="page-heading__inner">
                <div>
                    <h2 class="page-title--contact">
                        <span>お問い合わせ</span>
                    </h2>
                    <div class="con-content">
                        <p>
                            お問い合わせに際し、個人情報を株式会社ノース・ヒル（以下弊社）にお知らせいただく必要があります。以下の「個人情報の取扱いについて」をお読みいただき、ご同意いただける場合は下の「同意する」ボタンをクリックして、入力フォームの画面へ進んでください。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact__content" class="contact__content">
        <div class="container">
            <div class="contact-wrap">
                <h2 class="ct-title">
                    個人情報の取扱いについて
                </h2>
                <div class="ct-cnt">
                    <p>
                        <span class="bold">1．弊社の名称</span><br>
                        株式会社ノース・ヒル
                    </p>
                    <p>
                        <span class="bold">2．弊社の個人情報に関する管理者</span><br>
                        個人情報保護管理者　渡邊　大介<br>
                        TEL:06-6358-9160／FAX：06-6355-5247<br>
                        〒530-6013 大阪市北区天満橋1-8-30 OAPタワー13F <a href="https://goo.gl/maps/pFMWXjJThgVdF9796"
                            target="blank_">[MAP]</a>
                    </p>
                    <p>
                        <span class="bold">3．収集・利用目的</span><br>
                        お問い合わせへの対応のため、お名前、メールアドレス、会社名、電話番号、住所などを収集いたします。
                    </p>
                    <p>
                        <span class="bold">4．第三者への提供</span><br>
                        収集した個人情報は第三者への提供は致しません。ただし、法令に基づく場合には、ご本人様の同意なく個人情報の利用・提供を行うことがあります。
                    </p>
                    <p>
                        <span class="bold">5．個人情報の委託</span><br>
                        本ホームページのWEB、メールサーバはレンタルサーバを利用しております。
                        レンタルサーバ会社の選定は、個人情報保護の観点ならびにJISQ15001:2017の要求事項から評価し選定して契約を交わしております。
                    </p>
                    <p>
                        <span class="bold">6．個人情報の開示、訂正、追加又は削除、並びに利用停止、第三者提供の停止について</span><br>
                        収集した個人情報については、個人情報保護管理者が管理しています。当社が保有する開示対象個人情報の開示、訂正、追加又は削除、並びに利用停止、第三者提供の停止をご請求される場合は、上記2の管理者にお申し出下さい。尚、そのときは本人確認をさせていただきますので、身分証明書のご提示をお願い致します。
                    </p>
                    <p>
                        <span class="bold">７．任意性</span><br>
                        個人情報をご提出いただくかはご本人様のご任意ですが、この通知文によりご不明な点が解消されず、個人情報をご提出いただけない場合、お問い合わせへの回答が届かない場合があります。
                    </p>
                    <p>
                        <span class="bold">8．本人が容易に認識できない方法による個人情報の取得について</span><br>
                        Cookie等の本人の容易に知りえない手段を用いて個人情報を取得することはありません。
                    </p>
                </div>
                <div class="btn-wrap">
                    <div class="btnw c-green">
                        <a href="<?php url('contact/form.php');?>" title="同意する">同意する</a>
                    </div>
                    <div class="btnw c-gray">
                        <a href="<?php url();?>" title="同意しない">同意しない</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php section('scripts');?>

<?php endsection();?>
<?php get_footer();?>