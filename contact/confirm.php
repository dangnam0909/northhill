<?php

require_once "../functions.php";
include "mail.php";
set_title("お問い合わせ｜株式会社ノース・ヒル");
set_desc("株式会社ノース・ヒルへのお問い合わせページです。制作の依頼・お見積、資料請求、取材のご依頼やその他お問い合わせはこちらから。");
?>
<?php section('stylesheet');?>
<link href="<?php asset('css/contact.css');?>" rel="stylesheet">
<?php endsection();?>
<?php
get_header();
?>
<main id="contact" class="confirm">
    <div class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="<?php url()?>" title="TOP">TOP</a></li>
                <li><span>お問い合わせ</span></li>
            </ul>
        </div>
    </div>
    <section id="contact__confirm" class="contact__content">
        <div class="container">
            <div class="contact-wrap">
                <h2 class="ct-title">
                    内容確認
                </h2>
                <form action="" id="cform" name="form" method="POST">
                    <div class="ct-cnt">
                        <p class="hide-pc">
                            ノース・ヒルに関するお問い合わせ、資料請求は以下のフォームよりお願いいたします。
                        </p>
                        <p class="hide-pc">
                            ※[必須]の項目は必ずご記入ください<br>
                            ※ご記入のメールアドレスに返信されますので正確にご記入いただきますようお願いいたします<br>
                            ※メールアドレスをお持ちでない方は、06-6358-9160までお電話ください
                        </p>
                        <p class="red hide-pc">
                            赤枠が表示されている項目のご入力をお願いいたします。
                        </p>
                        <dl class="form-content">
                            <dt>
                                <label for="require_content">お問い合わせ内容<span class="need">[必須]</span></label>
                            </dt>
                            <dd>
                                <input type="hidden" id="require_content" name="require_content" value="<?php echo isset($require_content) ? $require_content : "" ?>">
                                <p class="result">
                                <?php echo isset($require_content) ? $require_content : "" ?>
                                </p>
                            </dd>
                            <dt>
                                <label for="company_name">貴社名<span class="need">[必須]</span></label>
                            </dt>
                            <dd>
                                <input type="hidden" id="company_name" name="company_name"
                                    value="<?php echo isset($company_name) ? $company_name : "" ?>">
                                <p class="result"><?php echo isset($company_name) ? $company_name : "" ?></p>
                            </dd>
                            <dt>
                                <label for="department_name">部署名・役職</label>
                            </dt>
                            <dd>
                                <input type="hidden" id="department_name" name="department_name"
                                    value="<?php echo isset($department_name) ? $department_name : "" ?>">
                                <p class="result"><?php echo isset($department_name) ? $department_name : "" ?></p>
                            </dd>
                            <dt>
                                <label for="care_content">ご担当者様</label>
                            </dt>
                            <dd>
                                <input type="hidden" id="care_content" name="care_content"
                                    value="<?php echo isset($care_content) ? $care_content : "" ?>">
                                <p class="result"><?php echo isset($care_content) ? $care_content : "" ?></p>
                            </dd>
                            <dt>
                                <label for="email">メールアドレス<span class="need">[必須]</span></label>
                            </dt>
                            <dd>
                                <input type="hidden" id="email" name="email"
                                    value="<?php echo isset($email) ? $email : "" ?>">
                                <p class="result"><?php echo isset($email) ? $email : "" ?></p>
                            </dd>
                            <dt>
                                <label for="web_url">WebサイトURL</label>
                            </dt>
                            <dd>
                                <input type="hidden" id="web_url" name="web_url"
                                    value="<?php echo isset($web_url) ? $web_url : "" ?>">
                                <p class="result"><?php echo isset($web_url) ? $web_url : "" ?></p>
                            </dd>
                            <dt>
                                <label for="phone">電話番号<span class="need">[必須]</span></label>
                            </dt>
                            <dd>
                                <input type="hidden" id="phone" name="phone"
                                    value="<?php echo isset($phone) ? $phone : "" ?>">
                                <p class="result"><?php echo isset($phone) ? $phone : "" ?></p>
                            </dd>
                            <hr class="line-hr">
                            <dt>
                                <label for="require_document">資料請求</label>
                            </dt>
                            <dd>
                                <input type="hidden" id="require_document" name="require_document" value="<?php echo isset($require_document) ? $require_document : "" ?>">
                                <p class="result">
                                <?php echo isset($require_document) ? $require_document : "" ?>
                                </p>
                            </dd>
                            <dt>
                                <input type="hidden" id="message" name="message"
                                    value="<?php echo isset($message) ? $message : "" ?>">
                                <label for="message">お問い合わせ<span class="need">[必須]</span></label>
                                <p class="note">できるだけ具体的にご記入ください</p>
                            </dt>
                            <dd>
                                <p class="result"><?php echo isset($message) ? $message : "" ?></p>
                            </dd>
                        </dl>
                    </div>
                    <hr class="line-hr">
                    <div class="cf-note">
                        <p>
                            上記の内容で問題がなければ「この内容で確認する」をクリックしてください。<br>
                            （再度、最終確認ページが表示されます。記入もれがあった場合は警告メッセージが表示されます。）
                        </p>
                        <a href="<?php url('privacy-policy') ?>" title="プライバシーポリシーについて" target="blank_">プライバシーポリシーについて</a>
                    </div>
                    <div class="btn-wrap">
                        <div class="btnw --green">
                            <input type="hidden" name="recaptcha" id="recaptcha" />
                            <input type="submit" name="confirm" class="submit-btn" value="送信する">
                        </div>
                        <div class="btnw --gray">
                            <a href="javascript:void(0)" onclick="window.history.back();" title="入力画面に戻る">入力画面に戻る</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
</main>
<?php section('scripts');?>
<script>
function loadRecaptcha() {
    grecaptcha.execute('6LfzSLoUAAAAACWyh9U5GgjG3p106V1QmKaqsxM1', {
            action: 'contact_form'
        })
        .then(function(token) {
            document.getElementById('recaptcha').value = token;
        });
}
</script>

<script src="https://www.google.com/recaptcha/api.js?render=6LfzSLoUAAAAACWyh9U5GgjG3p106V1QmKaqsxM1"></script>

<script>
grecaptcha.ready(function() {
    loadRecaptcha();
});
</script>
<script>
$("#cform").submit(function(event) {
    $("#submit-btn").prop('disabled', true);
    let formSubmiting = $(
        `<div id="form-submiting"><div class="lds-submiting"><div></div><div></div><div></div></div></div>`);
    $('body').append(formSubmiting);
});
</script>
<?php endsection();?>
<?php get_footer();?>