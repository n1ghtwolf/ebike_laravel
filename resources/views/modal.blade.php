<div class="modal fade" id="Modal" tabindex="-1" style="display: none; padding-right: 17px;" aria-modal="true"
     role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="formModalLabel">Оформить заказ</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form id="orderForm" class="mb-4" novalidate="novalidate"
                      action="{{ route('order.create') }}">
                    @csrf
                    <div class="form-group row align-items-center">
                        <label class="col-sm-3 text-left text-sm-right mb-0">Номер телефона</label>
                        <div class="col-sm-9">
                            <input type="text" id="mobile_number" name="mobile_number" class="form-control"
                                   placeholder="+38012345678">
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-3 text-left text-sm-right mb-0">Имя</label>
                        <div class="col-sm-9">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Ваше имя"
                                   required="">
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-3 text-left text-sm-right mb-0">Email</label>
                        <div class="col-sm-9">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Ваш e-mail"
                                   required="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 text-left text-sm-right mb-0">Коментарий к заказу </label>
                        <div class="col-sm-9">
                            <textarea rows="5" id="message" class="form-control"
                                      placeholder="Если у вас остались какие-либо вопросы по заказу напишите их здесь"
                                      required=""></textarea>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Отмена</button>
                <button type="submit" class="btn btn-primary">Оформить заказ</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script type="module">

    $('#orderForm').on('submit', function (event) {
        event.preventDefault();

        let name = $('#name').val();
        let email = $('#email').val();
        let mobile_number = $('#mobile_number').val();
        let message = $('#message').val();
        let kit = $('#kit').val();
        let brakes = $('#brakes').val();
        let rim = $('#rim').val();
        let battery = $('#battery').val();

        $.ajax({
            url: "{{ route('order.create') }}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                name: name,
                email: email,
                mobile_number: mobile_number,
                message: message,
                kit: kit,
                brakes: brakes,
                rim: rim,
                battery: battery,
            },
            success: function (response) {
                console.log(response);
            },
        });
    });
</script>
