<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/png" href="<?php echo URL; ?>favicon.png" />

    <title><?php echo $header['title'];?></title>

    <script type="text/javascript" src="<?php echo URL;?>scripts/frameworks/jquery/jquery.js"></script>

    <script type="text/javascript" src="<?php echo URL;?>scripts/frameworks/bootstrap-test/js/bootstrap.js"></script>
    <link href="<?php echo URL;?>scripts/frameworks/bootstrap-test/css/bootstrap.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="<?php echo URL ."build/css/" .$viewConfig["content"] .".css"; ?>" />
    <script type="text/javascript" src="<?php echo URL ."build/js/" .$viewConfig["content"] .".js"; ?>"></script>
    <?php
    if(isset($resources["styles"]))
        foreach($resources["styles"] as $style)
            echo "<link rel=stylesheet type=text/css href=" .URL ."scripts/frameworks/" .$style ." />";

    if(isset($resources["scripts"]))
        foreach($resources["scripts"] as $script)
            echo "<script type=text/javascript src=" .URL ."scripts/frameworks/" .$script ." /></script>";

    ?>
    <?php
    if(isset($config['description'])){
        ?>
        <meta name="description" content="<?php echo $header['description']; ?>">
        <meta name="abstract" content="<?php echo $header['description']; ?>">
    <?php
    } else {
        ?>
        <meta name="description" content="">
        <meta name="abstract" content="">
    <?php
    }
    ?>

    <meta name="keywords" content="">
    <meta name = "robots" content = "index,follow" />
</head>
<body>
    <div class="container">
        <div class="row">
            <?php $this->generatePage(); ?>
        </div>
    </div>
</body>
</html>