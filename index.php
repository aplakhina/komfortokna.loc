<?php
    ini_set("display_errors", 1);

	include_once "mvc/core/model.php";
	include_once "mvc/core/view.php";
	include_once "mvc/core/controller.php";
	include_once "mvc/core/route.php";

    include_once "libs/lessCss/less.php";
    include_once "libs/mailer/PHPMailerAutoload.php";
    include_once "libs/fileManager/fileManager.php";

    include_once "config.php";

	Route::start();