
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="./css/words.css">

<h1>Look Up words  <i class="fa fa-search"></i></h1>

<p>Use synonyms for a better worded articles. Powered by the wordsapi for a better writing experince.</p>


<form name="form" action="words.php" method="get" class="form1">
    <div>
    <input class ='text1' type="text" name="word" placeholder="Search the words">
    <button class ="button1" type="submit"><i class="fa fa-search"></i></button>
    </div>
</form>
<div class="grid-container">
  <div class="grid-item">
<?php 

error_reporting(0);

if ($_GET['word']=='') {
    $word="Search";
}
else
{
    $word=$_GET['word'];
}
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://rapidapi.p.rapidapi.com/words/$word/typeOf",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: wordsapiv1.p.rapidapi.com",
		"x-rapidapi-key: 0e4c18a876msh18bc0eab6fd5c26p10556djsn127bc921ec7c"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
$data = json_decode($response);



if ($err) {
	echo "cURL Error #:" . $err;
} else {
    $input_name = ucfirst($data->word);    
    $space = ",";
    $equal = " = ";

    $output = $data->typeOf;
    echo($input_name.$equal);
    foreach($output as $out)
    {
        print_r(ucfirst($out.$space));
    }
}
 ?></div>

 <div class="back">
     <a href="./index.php">Home</a>
 </div>