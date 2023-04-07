<?php

$config_data = file_get_contents("./config.json");
$config = json_decode($config_data);
$local_path = $config->URL_PATH;

$CSS_PATH = $config->CSS_PATH;
$cssHeader = 'header_main.css';
$cssStyle = 'style.css';

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
    <title>Cosmetolog</title>
</head>
<body>
<?php include ('./templates/header/header.html'); ?>
</body>
</html>
