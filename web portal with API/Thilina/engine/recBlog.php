<html>
<head></head>
<body>
<?php  require_once ("../config.php");
session_start();


?>






<?php
$sql = "INSERT INTO entry (title, keywords,text,users) VALUES ('".$_GET["title"]."', '".$_GET["keys"]."', '".$_GET["entry"]."', ".$_SESSION["userId"].")";



if ($connection->query($sql) === TRUE) {
  header("Location:../article.php");
} else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();


?>
</body>
