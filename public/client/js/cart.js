var check = false;

function changeVal(el) {
    var qt = parseFloat(el.parent().children(".qt").html());
    var price = parseFloat(el.parent().children(".price").html());
    var eq = Math.round(price * qt * 100) / 100;

    el.parent().children(".full-price").html(eq + " đ");

    changeTotal();
}

function changeTotal() {


    $("#order").find(".allprice").each(function (key, value) {
        var total_price = $("#site-footer").find("h2[class = 'total']").find("span").text();
        var price = $(value).find(".full-price").text();
        total_price.val(total_price + price);
    })

}

$(document).ready(function () {

    $(".qt-plus").click(function () {
        $(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);

        $(this).parent().children(".full-price").addClass("added");

        var el = $(this);
        window.setTimeout(function () { el.parent().children(".full-price").removeClass("added"); changeVal(el); }, 150);
    });

    $(".qt-minus").click(function () {

        child = $(this).parent().children(".qt");

        if (parseInt(child.html()) > 1) {
            child.html(parseInt(child.html()) - 1);
        }

        $(this).parent().children(".full-price").addClass("minused");

        var el = $(this);
        window.setTimeout(function () { el.parent().children(".full-price").removeClass("minused"); changeVal(el); }, 150);
    });

    window.setTimeout(function () { $(".is-open").removeClass("is-open") }, 1200);
});


function order() {
    $("#order_cart").modal('show');
    e.preventDefault();
}

function submit_order() {
    $("#order").find(".sp").each(function (key, value) {
        var new_amount = $(value).find("#new_amount");
        var amount = $(value).find("p[id = 'amount']").text();
        new_amount.val(amount);
    });
    var locat = $("#form_order").find("#location").val();
    var location = $("#order").find("#location")
    var total_price = $("#site-footer").find("h2[class = 'total']").find("span").text();
    var price = $("#order").find("#total_price");
    price.val(total_price);
    location.val(locat);
    $("#code_promo").val($("#code").val());
    $("#order").submit();
}

function showOrder() {
    var product_id_order = $("#show_form_order").find("#product_id_order");
    var color_id_order = $("#show_form_order").find("#color_id_order");
    var size_order = $("#show_form_order").find("#size_order");
    var amount_order = $("#show_form_order").find("#amount_order");
    var product_id = $("#new_order").find("#proID").val();
    var color_id = $("#new_order").find("#colorID").val();
    var size = $("#new_order").find("select[ id= 'size']").val();
    var amount = $("#new_order").find("#amount").val();

    product_id_order.val(product_id);
    color_id_order.val(color_id);
    size_order.val(size);
    amount_order.val(amount);
    $("#show_form_order").submit();
}

function promo() {
    $("#order").find("form[id = 'promo']").submit();
}
