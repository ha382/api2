<?php


$url="https://famous-quotes4.p.rapidapi.com/random?count=2&category=all";
//  Initiate curl
$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

// Will dump a beauty json :3
var_dump(json_decode($result, true));
$result = file_get_contents($url);
// Will dump a beauty json :3
var_dump(json_decode($result, true));


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