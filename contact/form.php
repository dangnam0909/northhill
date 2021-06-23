<?php

require_once "../functions.php";
set_title("お問い合わせ｜株式会社ノース・ヒル");
set_desc("株式会社ノース・ヒルへのお問い合わせページです。制作の依頼・お見積、資料請求、取材のご依頼やその他お問い合わせはこちらから。");
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
    <section id="contact__form" class="contact__content">
        <div class="container">
            <div class="contact-wrap">
                <h2 class="ct-title">
                    お問い合わせ
                </h2>
                <form action="<?php url('contact') ?>/confirm.php" id="cform" name="form" method="POST">
                    <div class="ct-cnt">
                        <p>
                            ノース・ヒルに関するお問い合わせ、資料請求は以下のフォームよりお願いいたします。
                        </p>
                        <p>
                            ※[必須]の項目は必ずご記入ください<br>
                            ※ご記入のメールアドレスに返信されますので正確にご記入いただきますようお願いいたします<br>
                            ※メールアドレスをお持ちでない方は、06-6358-9160までお電話ください
                        </p>
                        <ul class="js-errors" id="warning"></ul>
                        <p id="message_err">赤枠が表示されている項目のご入力をお願いいたします。</p>
                        <dl class="form-content">
                            <dt>
                                <label for="require_content">お問い合わせ内容<span class="need">[必須]</span></label>
                            </dt>
                            <dd>
                                <div class="control-group">
                                    <label class="">
                                        <input type="radio" name="require_content" value="ご依頼・ご相談"
                                            class="form-input"><span>ご依頼・ご相談</span>
                                    </label>
                                    <label class="">
                                        <input type="radio" name="require_content" value="採用について"
                                            class=""><span>採用について</span>
                                    </label>
                                    <label class="">
                                        <input type="radio" name="require_content" value="パートナーのご応募"
                                            class="form-input"><span>パートナーのご応募</span>
                                    </label>
                                    <label class="">
                                        <input type="radio" name="require_content" value="その他"
                                            class="form-input"><span>その他</span>
                                    </label>
                                </div>
                            </dd>
                            <dt>
                                <label for="company_name">貴社名<span class="need">[必須]</span></label>
                            </dt>
                            <dd>
                                <input type="text" id="company_name" name="company_name" required class="form-input">
                            </dd>
                            <dt>
                                <label for="department_name">部署名・役職</label>
                            </dt>
                            <dd>
                                <input type="text" id="department_name" name="department_name" class="form-input">
                            </dd>
                            <dt>
                                <label for="care_content">ご担当者様</label>
                            </dt>
                            <dd>
                                <input type="text" id="care_content" name="care_content" class="form-input">
                            </dd>
                            <dt>
                                <label for="email">メールアドレス<span class="need">[必須]</span></label>
                            </dt>
                            <dd>
                                <input type="email" id="email" name="email" required class="form-input">
                            </dd>
                            <dt>
                                <label for="web_url">WebサイトURL</label>
                            </dt>
                            <dd>
                                <input type="url" id="web_url" name="web_url" class="form-input">
                            </dd>
                            <dt>
                                <label for="phone">電話番号<span class="need">[必須]</span></label>
                            </dt>
                            <dd>
                                <input type="tel" id="phone" name="phone" required class="form-input">
                            </dd>
                            <hr class="line-hr">
                            <dt>
                                <label for="require_document">資料請求</label>
                            </dt>
                            <dd>
                                <label class="mgr-30">
                                    <input type="radio" name="require_document" value="請求する"
                                        class="form-input"><span>請求する</span>
                                </label>
                                <label class="mgr-30">
                                    <input type="radio" name="require_document" value="請求しない"
                                        class="form-input"><span>請求しない</span>
                                </label>
                            </dd>
                            <dt class="align-self">
                                <label for="message">お問い合わせ<br/><span class="need">[必須]</span></label>
                                <p class="note">できるだけ具体的にご記入ください</p>
                            </dt>
                            <dd>
                                <textarea name="message" id="message" cols="30" rows="10" class="form-input"></textarea>
                            </dd>
                        </dl>
                    </div>
                    <hr class="line-hr">
                    <div class="cf-note">
                        <p>
                            上記の内容で問題がなければ「この内容で確認する」をクリックしてください。<br>
                            （再度、最終確認ページが表示されます。記入もれがあった場合は警告メッセージが表示されます。）
                        </p>
                        <a href="<?php url('privacy-policy') ?>" title="プライバシーポリシーについて"
                            target="blank_">プライバシーポリシーについて</a>
                    </div>
                    <div class="btn-wrap">
                        <div class="btnw c-green">
                            <input type="hidden" name="recaptcha" id="recaptcha" />
                            <input type="submit" name="submit" class="submit-btn" id="submit-btn" value="内容を確認する">
                        </div>
                        <div class="btnw c-gray">
                            <a href="javascript:void(0)" onclick="window.history.back();">戻る</a>
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
<script src="<?php asset('libs/jquery.validate.min.js');?>"></script>
<script src="<?php asset('js/contact.js');?>"></script>

<script src="https://www.google.com/recaptcha/api.js?render=6LfzSLoUAAAAACWyh9U5GgjG3p106V1QmKaqsxM1"></script>

<script>
grecaptcha.ready(function() {
    loadRecaptcha();
});
</script>
<?php endsection();?>
<?php get_footer();?>