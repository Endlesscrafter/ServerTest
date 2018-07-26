<?php
if (isset($_POST['testpy'])) {
    exec('sudo /usr/bin/python3 python_test.py ');
    header("Location: http://192.168.17.155/");
    die();
}
