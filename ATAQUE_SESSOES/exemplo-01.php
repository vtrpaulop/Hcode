<?php

session_start();

//Depois de verificar  login e senha reinice o ID
session_destroy();

session_start();

session_regenerate_id();

echo session_id();