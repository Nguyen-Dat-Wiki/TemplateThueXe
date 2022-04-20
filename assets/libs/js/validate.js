$(document).ready(function() {
    $.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            return this.optional(element) || regexp.test(value);
        },
        "Please check your input."
    );
    //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
    $("#login_form").validate({
        rules: {
            username_login: {
                required: true,
                regex: /^[a-zA-Z-' ]*$/,
                minlength: 5,
                maxlength: 10
            }
        },
        messages: {
            username_login: {
                required: "Vui lòng nhập username",
                minlength: "Username tối thiểu 5 ký tự",
                maxlength: "Username tối đa 10 ký tự",
                regex: "Vui lòng nhập chỉ ký tự"
            }
        }
    });
    $("#create_form").validate({
        rules: {
            username_create: {
                required: true,
                regex: /^[a-zA-Z-' ]*$/,
                minlength: 5,
                maxlength: 10
            },
            email_create: {
                required: true,
                minlength: 5,
                maxlength: 100
            },
            password_create: {
                required: true,
                minlength: 7,
                maxlength: 100
            },
            Confirm_password: {
                required: true,
                minlength: 7,
                maxlength: 100
            }
        },
        messages: {
            username_create: {
                required: "Vui lòng nhập username",
                minlength: "Username tối thiểu 5 ký tự",
                maxlength: "Username tối đa 10 ký tự",
                regex: "Vui lòng nhập chỉ ký tự"
            },
            email_create: {
                required: "Bắt buộc phải điền email"
            },
            password_create: {
                required: "Mật khẩu chưa đủ mạnh"
            },
            Confirm_password: {
                required: "Mật khẩu chưa đủ mạnh"
            }
        }
    });

    $("#password").validate({
        rules: {
            passnew: {
                required: true,
                minlength: 7,
                maxlength: 100
            },
            checkpassnew: {
                required: true,
                minlength: 7,
                maxlength: 100
            }
        },
        messages: {
            passnew: {
                required: "Mật khẩu chưa đủ mạnh"
            },
            checkpassnew: {
                required: "Mật khẩu chưa đủ mạnh"
            }
        }
    });
});
