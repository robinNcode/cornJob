<?php

include 'entry_class.php';

$name = rand('1231', '4214') . "uirweoi";
$phone = "013" . rand('12345678', '99999999');
$created_at = date('Y-m-d H:i:s');

setEntry($name, $phone, $created_at);