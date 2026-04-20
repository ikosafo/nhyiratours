<?php
// Detect environment
$host = $_SERVER['HTTP_HOST'];

if ($host === 'nhyiratours.local') {
    define('URLROOT', 'http://nhyiratours.local');
} else {
    define('URLROOT', 'https://pieronetours.com');
}