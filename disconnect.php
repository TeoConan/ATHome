<?php

require($_SERVER['DOCUMENT_ROOT'] . "/athome/product/link.php");

PDOModel::connectDB("127.0.0.1", "athome_user", "zr505CglHCODsIpG", "athome");

userModel::disconnectUser();


?>