<?php

    function check($_POST) {
        $login = $_POST['Login'];
        $password = $_POST['Password'];
    }

    $dbSourse = 'authorizations/dataBase/db.csv';
    $open = fopen($dbSourse, 'r');
    dd($open);

    function db_parser($open) {

        $csvToArray = str_getcsv();
    }
