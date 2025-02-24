<?php // config.php
define('URLROOT', 'http://nhyiratours.local/'); 

date_default_timezone_set('UTC');
$mysqli = new mysqli('localhost', 'root', 'root', 'nhiraba');

if ($mysqli->connect_errno) {
    echo "cannot connect MYSQLI error no{$mysqli->connect_errno}:{$mysqli->connect_errno}";
    exit();
}