<?php
    //nome do arquivo config.php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'Loja_de_tênis');

    $conn = new MySQLi( HOST,USER,PASS,BASE);