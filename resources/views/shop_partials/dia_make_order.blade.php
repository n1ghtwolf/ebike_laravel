<form id="orderForm" novalidate="novalidate" action="{{ route('order.create') }}">
    @csrf
    <div class="modal-header">
        <h4 class="modal-title" id="formModalLabel">Оформить заказ</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="hideModal()">×</button>
    </div>
    <div class="modal-body">
        <div class="form-group row align-items-center">
            <label class="col-sm-3 text-left text-sm-right mb-0">Номер телефона</label>
            <div class="col-sm-9">
                <input type="text" id="mobile_number" name="mobile_number" class="form-control" placeholder="+38012345678">
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label class="col-sm-3 text-left text-sm-right mb-0">Имя</label>
            <div class="col-sm-9">
                <input type="text" id="name" name="name" class="form-control" placeholder="Ваше имя" required>
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label class="col-sm-3 text-left text-sm-right mb-0">Email</label>
            <div class="col-sm-9">
                <input type="email" id="email" name="email" class="form-control" placeholder="Ваш e-mail" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 text-left text-sm-right mb-0">Коментарий к заказу </label>
            <div class="col-sm-9">
                <textarea rows="5" id="message" class="form-control"
                          placeholder="Если у вас остались какие-либо вопросы по заказу напишите их здесь" required>
                </textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal" onclick="hideModal()">Отмена</button>
        <button type="submit" class="btn btn-primary">Оформить заказ</button>
    </div>
</form>
