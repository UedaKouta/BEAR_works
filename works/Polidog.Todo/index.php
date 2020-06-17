<?php
// error_log("[". date('Y-m-d H:i:s') . dirname(__DIR__). "にてゲット\n" , 3, "/Applications/MAMP/htdocs/BEAR_works/works/Polidog.Todo/log/debug.log");
error_log("[". date('Y-m-d H:i:s') . dirname(__DIR__). "にてゲット\n" , 3, "/var/app/current/works/Polidog.Todo/log/debug.log");

require dirname(__DIR__) . '/Polidog.Todo/autoload.php';
exit((require dirname(__DIR__) . '/Polidog.Todo/bootstrap.php')(PHP_SAPI === 'cli-server' ? 'html-app' : 'prod-html-app'));
