
//  functions for modal dialog
// const modal_id = $('#modal');
function showDialog(route) {
    let modal = $('#modal');
    modal.html('');
    modal.load(route);
    showModal();
}
function showModal(){
    $('#modal').show();
    $('#modal').addClass('show');
}
function hideModal(){
    $('#modal').removeClass('show');
}
