<?php
include 'connection/connection.class.php';

$_connection = new Connection();

print_r($_connection->getData('Select * from numeros'));
