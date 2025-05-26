 <?php
  include(__DIR__ . '/../config/dbcon.php');
  


  
  // Function to retrieve data from the database
  function getAll($table){
      global $connection;
      $getall_query = "SELECT * FROM $table";
      $getall_query_run = mysqli_query($connection, $getall_query);

      return $getall_query_run;
  }

  function redirect($url, $message){
    $_SESSION['message'] = $message;
    header("Location:" . $url);
    exit();
  }




  function getByID($table, $id){
    global $connection;
    $query = "SELECT * FROM $table WHERE id='$id' ";
    return $query_run = mysqli_query($connection, $query); 
  }
    

      



?> 