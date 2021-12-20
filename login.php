<?php

session_start();

$_SESSION['id'] = session_id();

header('Location:dashboard.php');


?>