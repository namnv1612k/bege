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
