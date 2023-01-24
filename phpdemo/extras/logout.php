<?php
session_start();

//destroy the session
session_destroy();
header('Location: /SP404/phpdemo/13_Sessions.php');