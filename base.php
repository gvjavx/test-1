<?php
require('config.php');

/*
db connect
*/
$db = new mysqli($host, $db_username, $db_password, $db_name);
if ($db->connect_errno) {
    echo "Failed to connect to MySQLI: " . $db->connect_error;
}

/*
url function
*/
function url() {
    global $http, $url_link, $host;
    return $host == 'localhost' ? $http . '://' . $host . '/' . $url_link . '/' : $http . '://' . $url_link . '/';
}

/*
assets function
*/
$links = url();
function assets() {
    global $asset_folder, $links;
    return $links . $asset_folder . '/';
}

/*
date time setting
*/
date_default_timezone_set('Asia/Jakarta');
?>