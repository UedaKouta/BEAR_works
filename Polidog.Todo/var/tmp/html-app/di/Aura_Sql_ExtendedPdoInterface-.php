<?php

namespace Ray\Di\Compiler;

$instance = new \Aura\Sql\ExtendedPdo('sqlite:/Applications/MAMP/htdocs/Polidog.Todo/var/db/todo.sqlite3', '', '', array(), array());
$is_singleton = true;
return $instance;
