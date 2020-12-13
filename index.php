<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://currency23.p.rapidapi.com/currencyToAll?base=USD&int=1",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: currency23.p.rapidapi.com",
		"x-rapidapi-key: cac42a454bmsh9b2be104a7413e4p1375bbjsnf2c2f7878e3a"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}

?>