<?php 

session_id('ntgfpip524o22gkav2qtbg1cn2');

require_once "config.php";

session_regenerate_id();

echo session_id();

var_dump($_SESSION);



 ?>