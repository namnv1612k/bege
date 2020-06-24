// Admin js
const appUrl = base_url;

AdminJs = {
    copyToClipboard: function (element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).html()).select();
        document.execCommand("copy");
        $temp.remove();
        $(element).attr('data-original-title', 'Đã sao chép').tooltip('show');
    },

    saveEditProduct: function (id) {
        let $data = [];
        axios.put('/admin/product/' + id + '/save', {id: id})
            .then(function (response) {
                return $data = response.data
            })
            .catch(function (response) {
                console.log(response)
            })
    },

    checkExist: function(table, column, value, element) {
        $.ajax({
            url: appUrl + '/api/helper/CheckExistData',
            method: 'POST',
            data: {
                table: table,
                column: column,
                value: value
            },
            success: function (response) {
                if (response.status === 'fail') {
                    $(element).addClass('is-invalid').removeClass('is-valid');
                    $(element).siblings('.invalid-feedback').text(column + ' đã tồn tại').show('slow')
                } else {
                    $(element).addClass('is-valid').removeClass('is-invalid');
                    $(element).siblings('.invalid-feedback').text(column + ' đã tồn tại').hide('slow')
                }
            },
            error: function (error) {
                console.log(error)
            }
        })
    }
};
