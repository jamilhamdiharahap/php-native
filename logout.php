<?php
session_start();
unset($_SESSION['log_admin']);
unset($_SESSION['admin']);
session_destroy();
header('location:index.php');
