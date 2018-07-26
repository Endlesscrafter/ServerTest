<?php
/**
 * Created by PhpStorm.
 * User: Philipp
 * Date: 26.07.2018
 * Time: 12:54
 */
if (isset($_POST['rauf'])) {
    exec('sudo /usr/bin/python3 python_test.py ');
}
if (isset($_POST['runter'])) {
    exec('sudo /usr/bin/python3 python_test.py ');
}