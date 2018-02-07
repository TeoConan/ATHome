<?php

require($_SERVER['DOCUMENT_ROOT'] . "/athome/product/link.php");

userModel::connectUser($_GET['email'],$_GET['password']);

echo "end connexion.php";
?>