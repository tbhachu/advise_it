<?php

  $serverName = "localhost";
  $username = "dbuser1";
  $password = "mysql";
  $dbName = "db1";

  // create connection
  $con = mysqli_connect($serverName, $username, $password, $dbName);

  // verify connection
  /*
  if(mysqli_connect_errno()) {
    echo "Failed to connect";
  }
  echo "Connection sucess";
  */

  

  ?>