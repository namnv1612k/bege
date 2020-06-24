/* Frontend */

Frontend = {
    addWish: function (product_id, user_id = null) {
        let data = {};
        $.ajax({
            url: base_url + '/api/product/addWish',
            method: "POST",
            data: {
                product_id: product_id,
                user_id: user_id
            },
            success: function (response) {
                data = response;
                console.log(data);

                if (data.status === 'success') {
                    toastr.success(data.message, data.title);
                } else if (data.status === 'exist') {
                    toastr.info(data.message, data.title);
                } else if (data.status === 'fail') {
                    toastr.warning(data.message, data.title);
                } else {
                    toastr.error(data.message, data.title);
                }
            },
            error: function (error) {
                toastr.error('Đã có lỗi không xác định', 'Lỗi');
            }
        })
    },

    addCart: function (product_id) {
        let message = {};
        $.ajax({
            url: base_url + '/api/cart/addCart',
            method: "POST",
            data: {
                product_id: product_id,
            },
            success: function (response) {
                message = response.message;

                if (message.status === 'success') {
                    toastr.success(message.message, message.title);
                } else if (message.status === 'exist') {
                    toastr.info(message.message, message.title);
                } else if (message.status === 'fail') {
                    toastr.warning(message.message, message.title);
                } else {
                    toastr.error(message.message, message.title);
                }
            },
            error: function (error) {
                toastr.error('Đã có lỗi không xác định', 'Lỗi');
            }
        })
    },

    comment: function (type, id, user_id = null) {
        $('.comment-form').validate({
            rules: {
                comment: { required: true, maxlength: 2000 }
            },
            messages: {
                comment: {
                    required: 'Không được bỏ trống',
                    maxlength: 'Tối đa 2000 ký tự'
                }
            }
        });
        $.ajax({
            url: base_url + '/api/post-comment',
            method: 'POST',
            data: {
                type: type,
                id: id,
                user_id: user_id,
                comment: $('#comment').val(),
                rate: $('#rate').val() ?? null,
                reply_for: $('#reply_for').val() ?? null
            },
            success: function (response) {
                let data = response;
                if (data.status === 'warning') {
                    toastr.warning(data.message, data.title)
                } else if (data.status === 'success') {
                    toastr.success(data.message, data.title)
                } else {
                    toastr.error('Đã có lỗi không xác định', 'Lỗi');
                }

                // reload page
                setTimeout(function() {
                    location.reload();
                }, 3000);
            },
            error: function (error) {
                toastr.error('Đã có lỗi không xác định', 'Lỗi');
            }
        })
    },
    subscribe: function (type) {
        $.ajax({
            url: base_url + '/api/subscribe/sendMail',
            method: 'POST',
            data: {
                email: $('#subscribe').val() ?? null
            },
            success: function (response) {
                let data = response;
                if (data.status === 'success') {
                    toastr.success(data.message, data.title)
                } else if (data.status === 'warning') {
                    toastr.warning(data.message, data.title)
                } else {
                    toastr.error('Đã có lỗi xảy ra khi gửi mail', 'Không thể gửi')
                }
            },
            error: function () {
                toastr.error('Đã có lỗi xảy ra khi gửi mail', 'Không thể gửi')
            }
        })
    }
};

$.validate = require('jquery-validation');
// Validate form contact
$(document).ready(function () {
    $('#form-contact').validate({
        rules: {
            first_name: {required: true},
            last_name: {required : true},
            email: {required: true, email: true},
            subject: { required: true },
            message: { required: true, maxlength: 20 },
        },
        messages: {
            first_name: {
                required: 'Không được bỏ trống',
            },
            last_name: {
                required: 'Không được bỏ trống'
            },
            email: {
                required: 'Không được bỏ trống',
                email: 'Sai định dạng email'
            },
            subject: {
                required: 'Không được bỏ trống',
            },
            message: {
                required: 'Không được bỏ trống',
                maxlength: 'Tối đa 2000 ký tự'
            },
        },
        errorElement: 'span',
        errorClass: "invalid-feedback",
        success: function(label,element) {
            $(element).removeClass('is-invalid').addClass('is-valid')
        },
        highlight: function(element) {
            $(element).addClass('is-invalid').removeClass('is-valid');
        }
    })
});
