<?php

define('SERVER'		 ,'localhost');
define('USER'		 ,'root');
define('PASSWORD'	 ,'');
define('DB_NAME'	 ,'app_ludicas');

function ejecutar_query($query){
    $con = mysqli_connect(SERVER, USER, PASSWORD, DB_NAME) or die ("Error " . mysqli_error($con));
    return mysqli_query($con, $query);
}
