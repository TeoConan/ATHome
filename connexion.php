<?php

require($_SERVER['DOCUMENT_ROOT'] . "/projet/athome/product/link.php");

PDOModel::connectDB("127.0.0.1", "athome_user", "zr505CglHCODsIpG", "athome");

echo ($_GET['email']. $_GET['password']); 

userModel::connectUser($_GET['email'],$_GET['password']);
?>