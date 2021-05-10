<?php 
require_once ("navbar_nr.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="https://storage.googleapis.com/apiit-static/logo-1.jpg" type="image/x-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>API</title>
<link rel="stylesheet" type="text/css" href="./css/api.css"/>
<link rel="shortcut icon" href="https://storage.googleapis.com/apiit-static/logo-1.jpg" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="./css/loginmsg.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
</head>
<body>

<?php if (isset($_SESSION['userUid'])) {
               require ("./api/api_inc.php");
               
               
            } 
            else {
                require ("./engine/loginmsg.php");
                
                
            }
            ?>
            


<?php require ("./footer.php");?>
</body>
</html>