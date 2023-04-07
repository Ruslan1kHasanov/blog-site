<?php

$config_data = file_get_contents("./config.json");
$config = json_decode($config_data);
$local_path = $config->URL_PATH;

$CSS_PATH = $config->CSS_PATH;
$cssHeader = 'header_main.css';
$cssHeaderSecondary = 'header_secondary.css';
$cssStyle = 'style.css';
$cssArticleContainer = 'articles_container.css';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="noindex, nofollow">

    <link rel="stylesheet" type="text/css" href="<?php echo ($CSS_PATH . "$cssStyle"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo ($CSS_PATH . "$cssHeader"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo ($CSS_PATH . "$cssHeaderSecondary"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo ($CSS_PATH . "$cssArticleContainer"); ?>">
    <title>Cosmetolog</title>
</head>
<body>
<?php include ('./templates/header/header.html'); ?>

    <main class="main_wrapper">
        <h2 class="h2_articles">Статьи</h2>
        <div class="article_wrapper">
            <?php
                $article_data = file_get_contents("./content/articles/tesed_article.json");
                $article = json_decode($article_data, 1);
                echo ("<h3>{$article["title"]}</h3>");
                echo ("<img src='{$article["img"]}' alt='{$article["title"]}' width='700px' height='550px'>");
                echo ("<p>{$article["description"]}</p>");

                $article_data = file_get_contents("./content/articles/test.json");
                $article = json_decode($article_data, 1);
                echo ("<h3>{$article["title"]}</h3>");
                echo ("<img src='{$article["img"]}' alt='{$article["title"]}' width='700px' height='550px'>");
                echo ("<p>{$article["description"]}</p>")
            ?>
        </div>
    </main>
</body>
</html>
