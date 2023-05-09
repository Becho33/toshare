<?php


$serverName ="localhost";
$dBUsername ="id20454605_php1";
$dBPassword ="Happytree666!";
$dBName ="id20454605_phpproject01";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
    
}