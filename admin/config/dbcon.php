<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "effective";

// pixell Demo
// $server_name = "localhost";
// $db_username = "pixellme_studio";
// $db_password = "t^WyJlxQWJ;K";
// $db_name = "pixellme_studio";

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);
$dbconfig = mysqli_select_db($connection,$db_name);

if($connection)

{

    // echo "Database Connected";

}

else{

echo "Database Connection Faild";

}




?>