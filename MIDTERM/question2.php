$connection = mysqli_connect("localhost", "username", "password", "databasename");
  if (!$connection) { 
    echo "Cannot connect to MySQL.". mysqli_connect_error();
    exit();
  }
