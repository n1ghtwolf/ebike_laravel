import $ from 'jquery';

const selections = {
    kit_id: null,
    display_id: null,
    brakes_id: null,
    battery_id: null,
};

function updatePrice() {
    let total = 0;
    Object.keys(selections).forEach((key) => {
        const id = selections[key];
        if (id) {
            const input = $(`input[name=${key}][value="${id}"]`);
            total += parseFloat(input.data('price')) || 0;
        }
    });
    $('#totalPrice').text(total.toLocaleString('ru-RU') + ' грн');
    $('#orderBtn').prop('disabled', !Object.values(selections).every(Boolean));
}

$('body').on('change', '.product-choice', function () {
    const name = $(this).attr('name');
    selections[name] = $(this).val();
    updatePrice();
});

$('#orderBtn').on('click', function () {
    const query = $.param(selections);
    window.showDialog(`/order/form?${query}`);
});