function showOffers() {
    $.ajax({
        data: {token: "get_offers"},
        type: "get",
        dataType: "json",
        url: "server.php",
        success: function(data) {
            //наполнить шапку таблицы
            $(".table > thead").append('<tr><th>Идентификатор сделки</th><th>Имя товара</th><th>Количество проданых товаров</th><th>Имя оператора</th></tr>');
            
            //наполнить тело таблицы
            data.forEach(function(item) {
                $(".table > tbody").append('<tr><td>'+ item.offer_id +'</td><td>'+ item.offer_name +'</td><td>'+ item.count +'</td><td>'+ item.name +'</td></tr>');
            });
        }
    });
}

function showOperators() {
    $.ajax({
        data: {token: "get_operators"},
        type: "get",
        dataType: "json",
        url: "server.php",
        success: function(data) {
            //наполнить шапку таблицы
            $(".table > thead").append('<tr><th>Товар</th><th>Количество проданых товаров</th><th>Общая сума проданых товаров</th></tr>');
            
            //наполнить тело таблицы
            data.forEach(function(item) {
                $(".table > tbody").append('<tr><td>'+ item.name +'</td><td>'+ item.count_sum +'</td><td>'+ item.price_sum +'</td></tr>');
            });
        }
    });
}

$("a").click(function( event ) {
    //отображение тела панели перед запросом
    $("#main").show();
    
    //очистка таблицы перед новым запросом
    $('.table tr').remove();
    
    //отмена перехода по ссылке
    event.preventDefault();
});

$("#main").hide();