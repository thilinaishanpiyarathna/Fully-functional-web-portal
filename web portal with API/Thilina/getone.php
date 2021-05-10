
<?php
$curlS=curl_init();
curl_setopt($curlS,CURLOPT_URL,"http://localhost/Website_API/api/showonearticleapi.php?aid=24&ak=12123456");
curl_setopt($curlS,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curlS,CURLOPT_HEADER,false);
$result=curl_exec($curlS);
echo($result);

