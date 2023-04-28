<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
spl_autoload_register(function ($class) {
	$class = str_replace("\\", "/", $class);
    require_once sprintf(__DIR__.'/../components/%s.php', $class);
});
