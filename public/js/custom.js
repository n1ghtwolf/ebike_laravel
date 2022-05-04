$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
//  functions for modal dialog
// const modal_id = $('#modal');
function showDialog(route) {
    let modal_content = $('#modal_content');
    modal_content.load(route);
    showModal();
}
function showModal(){
    $('#modal').addClass('show').show(300);
}
function hideModal(){
    $('#modal').removeClass('show').hide(600);
}
