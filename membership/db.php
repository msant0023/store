<?php
/* Database connection settings */
$dbhost = 'cis282store.clhtej6ajnfm.us-east-1.rds.amazonaws.com';
$dbuser = 'santiagostore';
$dbpass = 'Jordan1!';
$dbname = 'cis282store';
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($mysqli->error);
