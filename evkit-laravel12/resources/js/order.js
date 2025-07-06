import $ from 'jquery';

window.$ = window.jQuery = $;

function initOrderForm() {
    $('#orderForm').on('submit', function (event) {
        event.preventDefault();
        const form = $(this);
        $.ajax({
            url: form.attr('action') || '/order/create',
            type: 'POST',
            data: form.serialize(),
            success: (response) => {
                window.location.href = '/order/confirm';
            },
            error: (xhr) => {
                alert('Ошибка: ' + (xhr.responseJSON?.message || 'Не удалось оформить заказ'));
            }
        });
    });
}

window.showDialog = function (url) {
    $('#modal_content').load(url, () => {
        $('#modal').modal('show');
        initOrderForm();
    });
};

window.hideModal = function(){ $('#modal').modal('hide'); };

document.addEventListener('DOMContentLoaded', () => {
    if ($('#orderForm').length) {
        initOrderForm();
    }
});