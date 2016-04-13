<?php

include "../config.php";

$redis = new Redis();

$healthy = true;

foreach ($config['database']['redis'] as $redisConfig) {
    $healthy = $healthy && $redis->connect($redisConfig['host'], $redisConfig['port']);
}

echo $healthy ? 'true' : 'false';
