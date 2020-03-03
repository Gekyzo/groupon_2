$(document).ready(function() {
    $('.add-form-trigger').on('click', function(e) {
        e.preventDefault()
        let targetFormId = $(this).data('activate-form')
        let $targetForm = $(`.add-form[data-form-id=${targetFormId}]`)

        $.post($targetForm.attr('action'), $targetForm.serialize(), function(
            data
        ) {
            $('#cart-counter').text(data.count)
            let currentVal = parseInt($('.cart-price').text())
            let lastBoughtProduct = data.price
            $('.cart-price').text(`${currentVal + lastBoughtProduct} €`)
        })
    })
})
