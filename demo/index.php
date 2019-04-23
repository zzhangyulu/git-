<?php
$redis = new Redis();
$redis->connect('127.0.0.1',6379);
//$redis->set('user','tom');
//echo $redis->ping();
if (!$redis->exists('user')){
    $redis->set('user','tom');
    $redis->expire('user',30);
    echo'设置user值';
}

echo $redis->get('user');
echo $redis->ttl('user');