<?php

$con = mysqli_connect('localhost', 'root', '', 'event_master');
if(!$con) {
    echo mysqli_connect_error();
}

$con->set_charset('utf8');

?>