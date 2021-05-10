<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/news.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        $url = "https://newsapi.org/v2/everything?q=science&apiKey=0568f00c5ed4459bb4adc3f3f5d61303";
        $response = file_get_contents($url);
        $Newsdata = json_decode($response);

    ?>
    <div>
        <?php
            foreach ($Newsdata->articles as $news)
            {
        ?>
        <div class="zero">
                <div class="first">
                    <img src="<?php echo $news->urlToImage ?>" alt="" srcset="">
                </div>
                <div class="second">

                    <h1> <?php echo $news->title?></h1>
                    <h5><?php echo $news->description?></h5>
                    <p><?php echo $news->author?></p>
                    <a href="<?php echo $news->url?>" class="link"><?php echo("Go to the site"); ?></a>
                    
                </div>
        </div>
           <?php
            }?>    
    </div>
</body>
</html>