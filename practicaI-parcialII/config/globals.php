<?php

    define("DIR", dirname(__DIR__));
    define("APPDIR", DIR . "/App");
    define("VIEWS", APPDIR . "/Views");
    define("PUBLICDIR", DIR . "/public");
    define("HASH", hash("md5",DIR));
?>