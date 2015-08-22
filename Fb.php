<?php
	ini_set('display_errors',1); //on affiche les erreurs, c'est toujours pratique. We display errors, it's useful.
	$url = "https://api.facebook.com/method/links.getStats?urls=".urlencode("https://www.facebook.com/zbis85")."&format=json"; //on donne l'URL de notre page fan en la reliant à l'API publique de Facebook. Il sort les données au format JSON. We give our personal fanpage URL linked with public Facebook API. Data are published with Json format.
    $data = json_decode(file_get_contents($url)); // On décode le fichier JSON lié à notre URL. We decode JSON folder linked to our URL.
    print_r($data[0]->like_count); //on affiche seulement le nombre de fans Facebook.
?>

