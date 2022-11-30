<?php
// http://localhost:3000/exercices_get.php?nb1=10&nb2=20&operator=addition
$nb1 = $_GET['nb1'] ?? '';
$nb2 = $_GET['nb2'] ?? '';
$operator = $_GET['operator'] ?? '';


var_dump($_GET);