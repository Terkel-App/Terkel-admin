<?php

session_start();
session_destroy();

header("Location: lockscreen.php");
die();
exit;?>