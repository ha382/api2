<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://famous-quotes4.p.rapidapi.com/random?count=2&category=all",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: famous-quotes4.p.rapidapi.com",
		"x-rapidapi-key: cac42a454bmsh9b2be104a7413e4p1375bbjsnf2c2f7878e3a"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);



// Will dump a beauty json :3
var_dump(json_decode($response, true));
$response = file_get_contents($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}

$data = array($response);

echo "<br>OUTPUT: ".$data["category"];

?>
<html>
    <head>

    </head>
    <body>
        <form action="">
            <input type="text" name="location"/>
            <button type="submit">submit</button>
        </form>
    </body>
</html>