
//  functions for modal dialog
// const modal_id = $('#modal');
function showDialog(route) {
    let modal_content = $('#modal_content');
    modal_content.html('');
    modal_content.load(route);
    showModal();
}
function showModal(){
    $('#modal').show();
    $('#modal').addClass('show');
}
function hideModal(){
    $('#modal').removeClass('show');
}
