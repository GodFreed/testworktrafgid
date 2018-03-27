<?
if(!empty($_GET["token"])) {
	$token = $_GET["token"];
	$pdo = new PDO("mysql:host=127.0.0.1;dbname=testworktrafgid;charset=utf8", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} else {
    header('Location: http://testworktrafgid/');
}

//импровизированая маршрутизация
switch ($token) {
	case "get_offers":
		getOffers($pdo);
		break;
		
	case "get_operators":
		getOperators($pdo);
		break;
}

function getOffers($pdo) {
	
	$resultSet = $pdo->query("SELECT requests.offer_id, offers.name as offer_name, requests.count, operators.name FROM requests, offers, operators WHERE requests.count > 2 AND requests.operator_id IN(10, 12) AND requests.offer_id = offers.id AND requests.operator_id = operators.id;")->fetchAll();
	
	$json = json_encode($resultSet);

    echo $json;
    
}

function getOperators($pdo) {

	$pdo->query("SET sql_mode='';");
	$resultSet = $pdo->query("SELECT offers.name, SUM(requests.count) as count_sum, SUM(requests.price) as price_sum FROM offers, requests WHERE requests.offer_id = offers.id GROUP BY requests.offer_id;")->fetchAll();
    
	$json = json_encode($resultSet);

    echo $json;

}