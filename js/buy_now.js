function buy_now(price_value){
    $('#package_price').val(price_value);
    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
    $('#edit_data').modal('show');
}