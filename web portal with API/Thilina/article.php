<head>
<link rel="stylesheet" href="./css/article.css" type="text/css"/>
<link rel="shortcut icon" href="https://storage.googleapis.com/apiit-static/logo-1.jpg" type="image/x-icon">

</head>

<?php
require ("./navbar_nr.php");
require ("./config.php");

$sql = "SELECT * FROM entry";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

        echo '<h3> Article ID '.$row["ID"].'</h3>';
        echo '<h1><center>'. $row["title"] .'</center></h1>';
        echo '<h5><i> <b>keywords : </b>' .$row["keywords"]. '</i></h5>';
        echo '<div id="article">';
        echo $row["text"];
        echo '</div><br><br><hr><br>';
    }
} else {

    echo "0 results";
}
$connection->close();

?>
