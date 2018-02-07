<?php

require($_SERVER['DOCUMENT_ROOT'] . "/athome/product/link.php");

//echo ($_GET['email']. $_GET['password']); 

userModel::connectUser($_GET['email'],$_GET['password']);
?>