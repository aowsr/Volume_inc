/**
 * Created by w16024005 on 23/04/2018.
 */
$(document).ready(function () {

    $.ajax({
        type: 'post',
        url: 'functions.php',
        data: {
            total_cart_items: "total_items"
        },
        success: function (response) {
            document.getElementById("total_items").innerHTML = response;
        }
    });

});
function cart(id) {
    var item = document.getElementById(id);
    var prodId = document.getElementById(id).value;

    $.ajax({
        type: 'post',
        url: 'functions.php',
        data: {
            item_id: prodId
        },
        success: function (response) {
            document.getElementById("total_items").innerHTML = response;
        }
    });

}