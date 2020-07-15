/* Frontend */
$.validate = require('jquery-validation');
const baseURL = base_url;
const SUCCESS = 'success';
const ERROR   = 'error';
const FAIL    = 'fail';
const INFO    = 'info';
const WARNING = 'warning';
const EXIST   = 'exist';
Frontend = {
    // Function alert by Toastr Global
    alertToastr: function (value) {
        if (value.status === SUCCESS) {
            toastr.success(value.content, value.title);
        } else if (value.status === EXIST) {
            toastr.info(value.content, value.title);
        } else if (value.status === FAIL) {
            toastr.warning(value.content, value.title);
        } else if (value.status === WARNING) {
            toastr.warning(value.content, value.title);
        } else if (value.status === INFO) {
            toastr.info(value.content, value.title);
        } else if (value.status === null) {
        } else {
            toastr.error(value.content ?? 'Đã xảy ra lỗi không xác định', value.title ?? 'Error');
        }
    },

    formatCurrency: function (price) {
        // return $.number(price) + ' ₫'
        return  price.toLocaleString('en', {
            minimumFractionDigits: 0,
            style: 'currency',
            currency: 'VND'
        });
    },

    // Add to wishlist
    addWish: function (product_id) {
        let data = {};
        var that = this;
        $.ajax({
            url: baseURL + '/product/addWish',
            method: "POST",
            data: {
                product_id: product_id,
            },
            success: function (response) {
                data = response;
                that.alertToastr(data)
            },
            error: function (error) {
                toastr.error('Đã có lỗi không xác định', 'Lỗi');
            }
        })
    },

    removeWish: function (id) {
        that = this;
        $.ajax({
            url: baseURL + '/wishlist/remove/' + id,
            method: 'GET',
            success: function (response) {
                let message = response;
                if (message.status === SUCCESS) {
                    $('.wish-item-' + id).toggle('slow');
                }
                that.alertToastr(message)
            },
            error: function (error) {
                that.alertToastr(message)
            }
        })
    },

    // Add cart
    addCart: function (product_id) {
        let message = {};
        var that = this;
        $.ajax({
            url: baseURL + '/cart/add',
            method: "POST",
            data: {
                id: product_id
            },
            success: function (response) {
                message = response.message;
                let countCart = response.countCart;
                let totalPrice = that.formatCurrency(response.totalPrice);
                let item = response.item;
                if (message.status === 'success') {
                    $('#list-cart-header').append(
                        '<li class="cart-item-' + product_id + '">\n' +
                        '    <div class="single-shop-cart-wrapper">\n' +
                        '        <div class="shop-cart-img">\n' +
                        '            <a href="#"><img src="' + item.image + '" alt="' + item.name + '"></a>\n' +
                        '        </div>\n' +
                        '        <div class="shop-cart-info">\n' +
                        '            <h5><a href="' + baseURL + '/product/' + item.slug + '">' + item.name + '</a></h5>\n' +
                        '            <span class="price">' + that.formatCurrency(item.price) + '</span>\n' +
                        '            <span class="quantity">Qty: ' + item.quantity + '</span>\n' +
                        '            <span class="cart-remove"><a onclick="Frontend.removeItemCart(' + product_id + ')"><i class="fa fa-times"></i></a></span>\n' +
                        '        </div>\n' +
                        '    </div>\n' +
                        '</li>'
                    ).show('slow');
                    $('.cart-count').text(countCart).fadeIn();
                    $('.cart-total-price').text(totalPrice).fadeIn();
                }
                if (message.status === 'info') {
                    $('.cart-item-'+product_id).find('.single-shop-cart-wrapper > .shop-cart-info > .quantity').text('Qty: ' + item.quantity )
                    $('.cart-total-price').text(that.formatCurrency(totalPrice))
                }
                that.alertToastr(message);
            },
            error: function (error) {
                toastr.error('Đã có lỗi không xác định', 'Lỗi');
            }
        })
    },

    // Comment
    comment: function (type, id, user_id = null) {
        var that = this;
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
            url: baseURL + '/api/post-comment',
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
                that.alertToastr(data)

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

    // Subscribe
    subscribe: function (type) {
        var that = this;
        $.ajax({
            url: baseURL + '/api/subscribe/sendMail',
            method: 'POST',
            data: {
                email: $('#subscribe').val() ?? null
            },
            success: function (response) {
                let data = response;
                that.alertToastr(data)
            },
            error: function () {
                toastr.error('Đã có lỗi xảy ra khi gửi mail', 'Không thể gửi')
            }
        })
    },

    // Remove item cart
    removeItemCart: function (id) {
        that = this;
        $.ajax({
            url: baseURL + '/cart/remove',
            method: "POST",
            data: {
                id: id
            },
            success: function (response) {
                let message = response.message;
                let countCart = response.countCart;
                let totalPrice = that.formatCurrency(response.totalPrice);
                if (message.status !== ERROR) {
                    $('.cart-count').text(countCart).fadeIn();
                    $('.cart-total-price').text(totalPrice).fadeIn();
                    $('.cart-item-' + id).toggle('slow');
                }
                that.alertToastr(message)
            },
            error: function () {
                toastr.error('Đã có lỗi không xác định', 'Lỗi');
            }
        })
    },

    // Apply Coupon
    applyCoupon: function () {
        that = this;
        let code = $('input[name="code"]').val();
        that = this;
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            url: baseURL + '/checkout/apply-coupon',
            method: 'POST',
            data: {
                code: code
            },
            success: function (response) {
                let message = response.message;
                let discount = response.discount;
                let totalPrice = response.totalPrice;
                let code = response.code;

                that.alertToastr(message);

                $('.order-price').text(that.formatCurrency(totalPrice - discount));
                $('input[name="voucher_code"]').val(code);
                if (message.status === SUCCESS) {
                    $('.cart-total-price.cart-subtotal').text(that.formatCurrency(totalPrice) + ' - ' + that.formatCurrency(discount)).fadeIn();
                } else {
                    $('.cart-total-price.cart-subtotal').text(that.formatCurrency(totalPrice));
                }
            }
        })
    },
};

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
    });

    // Payment
    $('#payment-form').validate({
        rules: {
            first_name: { required: true },
            last_name: { required: true },
            address: { required: true },
            email: { required: true, email: true },
            phone: { required: true },
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
