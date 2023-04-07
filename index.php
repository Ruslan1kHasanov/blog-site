<?php
$config_data = file_get_contents("./config.json");
$config = json_decode($config_data);
$local_path = $config->URL_PATH;

$CSS_PATH = $config->CSS_PATH;
$cssHeader = 'header_main.css';
$cssStyle = 'style.css';
$cssAbout = 'about_me.css';
$cssCallMe = 'call_me.css';

$JS_PATH = $config->JS_PATH;
$jsIndex = 'index.js';
$jsGsap = 'lib/gsap.js';
$jsScrlTrig = 'lib/scroll_trigger.js';
$jsScrlSmth = 'lib/scroll_smooth.js';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="noindex, nofollow">

    <link rel="stylesheet" type="text/css" href="<?php echo($CSS_PATH . "$cssStyle"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo($CSS_PATH . "$cssHeader"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo($CSS_PATH . "$cssCallMe"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo($CSS_PATH . "$cssAbout"); ?>">
    <script rel="script" type="application/javascript" src="<?php echo($JS_PATH . "$jsScrlTrig"); ?>" defer></script>
    <script rel="script" type="application/javascript" src="<?php echo($JS_PATH . "$jsScrlSmth"); ?>" defer></script>
    <script rel="script" type="application/javascript" src="<?php echo($JS_PATH . "$jsGsap"); ?>" defer></script>
    <script rel="script" type="module" src="<?php echo($JS_PATH . "$jsIndex"); ?>" defer></script>
    <title>Cosmetolog</title>
</head>
<body>
<div class="main_content">
    <div class="main_wrapper">
        <?php
        include('./templates/header/header.html');
        include('./templates/main_content/about_me/about_me.html');
        include('templates/main_content/pop_up_windows/call_me.html');
        ?>
    </div>
</div>
</body>
</html>
