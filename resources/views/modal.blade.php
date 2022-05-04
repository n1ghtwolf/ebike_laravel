<div class="modal fade" id="modal" tabindex="-1" style="display: none; padding-right: 17px;" aria-modal="true"
     role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

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
