<form id="orderForm" method="POST" action="{{ route('order.create') }}">
    @csrf
    <input type="hidden" name="kit_id" value="{{ $kit_id }}">
    <input type="hidden" name="display_id" value="{{ $display_id }}">
    <input type="hidden" name="brakes_id" value="{{ $brakes_id }}">
    <input type="hidden" name="battery_id" value="{{ $battery_id }}">
    <div class="modal-header">
        <h5 class="modal-title">Оформить заказ</h5>
        <button type="button" class="close" aria-label="Close" onclick="hideModal()">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="form-group mb-2">
            <label>Ваше имя</label>
            <input class="form-control" type="text" name="name" required maxlength="25">
        </div>
        <div class="form-group mb-2">
            <label>Email</label>
            <input class="form-control" type="email" name="email" required>
        </div>
        <div class="form-group mb-2">
            <label>Мобильный телефон (+380...)</label>
            <input class="form-control" type="text" name="mobile_number" required value="+380">
        </div>
        <div class="form-group mb-2">
            <label>Размер обода</label>
            <input class="form-control" type="text" name="rim_size" required>
        </div>
        <div class="form-group mb-2">
            <label>Комментарий</label>
            <textarea class="form-control" name="message" rows="2" maxlength="255"></textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="hideModal()">Отмена</button>
        <button type="submit" class="btn btn-primary">Отправить заказ</button>
    </div>
</form>