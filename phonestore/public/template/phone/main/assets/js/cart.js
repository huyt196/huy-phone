function addCart(productId, num) {
    //console.log(1);
    $.post('index.php?module=phone&controller=cart&action=add', {
        'id': productId,
        'num': num
    }, function (data) {
        //console.log(data);
        location.reload();
    })
}
function addMoreCart(id, quantity) {
    let num = parseInt($('#num_' + id).val());
    num += quantity;

    $('#num_' + id).val(num);
    updateCart(id, num);
}

function fixCartNum(id) {
    
    $('#num_' + id).val(Math.abs($('#num_' + id).val()));

    updateCart(id, $('#num_' + id).val());
}

function updateCart(productId, num) {
    //alert(productId);
    $.post('index.php?module=phone&controller=cart&action=update', {
        'id': productId,
        'num': num
    }, function (data) {
        //console.log(data);
        location.reload();
    })
}
