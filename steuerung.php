<?php
/**
 * Created by PhpStorm.
 * User: Philipp
 * Date: 26.07.2018
 * Time: 12:54
 */
if (isset($_POST['rauf'])) {
    exec('sudo /usr/bin/python3 rauf.py ');
    header("Location: http://192.168.17.155/");
    die();
}
if (isset($_POST['runter'])) {
    exec('sudo /usr/bin/python3 runter.py ');
    header("Location: http://192.168.17.155/");
    die();
}
if (isset($_POST['fix'])) {
    exec('sudo /usr/bin/python3 fix.py ');
    header("Location: http://192.168.17.155/");
    die();
}