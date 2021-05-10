<?php
header("Content-type:application/JSON");
function array_push_assoc($array,$key,$value){
    $array[$key]=$value;
    return $array;
}

require("../config.php");
if (isset($_GET["aid"]));
$sqlkey = "SELECT idUsers FROM users WHERE api_key =".$_GET["ak"];
$apikey = ($connection->query($sqlkey));
if ($apikey->num_rows > 0) {

    
    $articleid=$_GET["aid"];
    $sql = "SELECT * FROM entry";
    $result = $connection->query($sql);
    $reply = Array(); $data = Array(); $meta = Array();
    $meta=array_push_assoc($meta,'API key',$_GET["ak"]);

    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {

            $data[]=$row["title"];
            $data[]=$row["keywords"];
            $data[]=$row["text"];
        }
        $reply=array_push_assoc($reply,'data',$data);
        $reply=array_push_assoc($reply,'meta',$meta);
        echo json_encode($reply);
    }

} else {

    echo json_encode(
        array('message' => '0 results')
      );
}
$connection->close();

?>

