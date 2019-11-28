<?php
if (is_file('./data/install.lock')) {
    header('Location: ./index.php');
    exit;
}
define('YHWL_DATA_PATH', './data/');
define('APP_NAME', 'install');
define('APP_PATH', './install/');
define('APP_DEBUG', false);
require("./thinkphp/setup.php");