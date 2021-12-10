<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./build/css/front.css">
    <script src="./build/js/front.js" defer></script>
    <title><?=$title?></title>
</head>
<body>
<?php include dirname(__DIR__) . "/../view/__partials/menu.view.php"?>
<?php include dirname(__DIR__) . "/../view/__partials/leftMenu.view.php"?>
<?= $html ?>
</body>
</html>
