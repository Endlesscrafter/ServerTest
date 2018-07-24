<?php
if (isset($_POST['testpy'])) {
    exec('/usr/bin/python3 python_test.py ');
}
