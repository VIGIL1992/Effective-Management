<?php 

   
    include('config/dbcon.php');


    if($dbconfig)

    {


    }
    else{


        header("Location: config/dbcon.php");


    }


    if(!$_SESSION['username'])

    {

        header("Location:login.php");
    }
?>