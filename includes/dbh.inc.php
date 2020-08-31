<?php

$servername = "192.168.0.31";
$dBUsername = "admin";
$dBPassword = "";
$dBname = "wenhao";

$conn = mysql_connect($servername, $dBUsername, $dBPassword, $dBname);

if(!$conn){
    die("Connection failed:".mysql_connection_errror());
}
