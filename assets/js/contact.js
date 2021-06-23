jQuery.extend(jQuery.validator.messages, {
    required: "※こちらの項目を入力してください",
    email: "正しいメール形式をご入力ください",
});
var aa = document.getElementById('text-error');

$("#cform").validate({
    messages: {
        require_content: "※こちらの項目を選択してください",
        company_name: "※こちらの項目を選択してください",
        email: "※こちらの項目を選択してください",
        phone: "※こちらの項目を選択してください",
        message: "※こちらの項目を選択してください"
    },
    rules: {
        "require_content[]": {
            required: true,
            minlength: 1
        },
        "message": {
            required: true
        },
    },

    highlight: function (element, errorClass, validClass) {
        $(element).addClass(errorClass).removeClass(validClass);
        $(element).closest('.control-group').addClass(errorClass);
        $('#message_err').html = '赤枠が表示されている項目のご入力をお願いいたします。';
        $("#message_err").addClass(errorClass);
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass(errorClass).addClass(validClass);
        $(element).closest('.control-group').removeClass(errorClass);
    },

    errorLabelContainer: ".js-errors",
    errorElement: "li",

    // submitHandler: function (form) {
    //     $("#submit-btn").prop('disabled', true);
    //     let formSubmiting = $(`<div id="form-submiting"><div class="lds-submiting"><div></div><div></div><div></div></div></div>`);
    //     $('body').append(formSubmiting);
    //     $(form).submit();

    // }
});