<?php

$config_data = file_get_contents("./config.json");
$config = json_decode($config_data);
$local_path = $config->URL_PATH;

$CSS_PATH = $config->CSS_PATH;
$cssAdminPanel = 'admin_panel.css';
$cssStyle = 'style.css';

$JS_PATH = $config->JS_PATH;
$jsAdmin = 'functional_scripts/admin_panel.js';
$jsTinyLib = 'lib/tinymce/tinymce.min.js';


$admin_name = "admin";
$password = "123";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" type="text/css" href="<?php echo($CSS_PATH . "$cssStyle"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo($CSS_PATH . $cssAdminPanel); ?>">
    <script rel="script" type="application/javascript" src="<?php echo($JS_PATH . $jsTinyLib); ?>"></script>
    <script rel="script" type="module" src="<?php echo($JS_PATH . $jsAdmin); ?>" defer></script>
    <title>Admin panel</title>
</head>
<body>
<header class="admin_header">
    <h1 class="admin_h1">@Admin panel</h1>
</header>
<?php

if (isset($_POST["login"]) && isset($_POST["password"]) && $_POST["login"] == $admin_name && $_POST["password"] == $password) {
    require("./templates/admin/admin_new_article.html");
} else {
    require("./templates/admin/admin_auth.html");
}
?>
</body>
</html>
