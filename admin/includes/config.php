<?php 
    $dbhost = 'cis282store.clhtej6ajnfm.us-east-1.rds.amazonaws.com';
    $dbuser = 'santiagostore';
    $dbpass = 'Jordan1!';
    $dbname = 'cis282store';
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (! $connection)
    {
        die('Could Not Connect To Instance: ' . mysqli_error($connection));
    }
    ?>