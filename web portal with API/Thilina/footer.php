<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/footer.css"/>
<title>Forecast Weather using OpenWeatherMap with PHP</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Spectral+SC:wght@300&display=swap" rel="stylesheet"> 
</head>

<?php
$apiKey = "689454ffb58d2b6e85b335f5d8451779";
$cityId = "1241622";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>

<body>
<div class="footer">
    <div class="report-container">
        <div class="one">
            
            <div>
                <?php echo date("jS F, Y",$currentTime); ?>
                <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
                
                
        </div>
            <div class="wimg">
                <?php echo ucwords($data->weather[0]->description); ?>
                <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> 
            </div>

        </div>

    </div>
<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://rapidapi.p.rapidapi.com/country/code?code=lk",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: covid-19-data.p.rapidapi.com",
		"x-rapidapi-key: 0e4c18a876msh18bc0eab6fd5c26p10556djsn127bc921ec7c"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$data1 = json_decode($response);

if ($err) {
	echo "cURL Error #:" . $err;
}

?>

    <div class="covid">
        <div class="uno">
            <i class="fa fa-globe" aria-hidden="true"></i>
            <?php 
                foreach ($data1 as $key ) {
                    echo($key->country);
                }
                ?>
        </div>

        <div class="dos">
            <i class="fa fa-plus-square" aria-hidden="true" style="color:red"></i>
            <?php 
            foreach ($data1 as $key ) {
                print_r($key->confirmed);
                echo(" COVID-19 Patients Discovered");
            }
            ?> 
        </div>
        <div class="tres">
            <i class="fa fa-plus-square" aria-hidden="true"style="color:green"></i>
            <?php 
            foreach ($data1 as $key ) {
                print_r($key->recovered);
            } echo(" COVID-19 Patients Recovered");
            ?> 
        </div>
    </div>
   
</div>
</body>
</html>