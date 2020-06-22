<?php

namespace Ray\Di\Compiler;

$instance = new \Polidog\Todo\Module\App($prototype('BEAR\\Sunday\\Extension\\Transfer\\HttpCacheInterface-'), $prototype('BEAR\\Sunday\\Extension\\Router\\RouterInterface-'), $prototype('BEAR\\Sunday\\Extension\\Transfer\\TransferInterface-'), $singleton('BEAR\\Resource\\ResourceInterface-'), $prototype('BEAR\\Sunday\\Extension\\Error\\ErrorInterface-'));
$is_singleton = false;
return $instance;
