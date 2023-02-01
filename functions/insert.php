<?php

    $token = random_strings();
    $fall = "";
    $winter = "";
    $spring = "";
    $summer = "";
  
    $errorMessage = "";
    
    if($_SERVER["REQUEST_METHOD"] === 'POST') {
        $fall = $_POST["fall"];
        $winter = $_POST["winter"];
        $spring = $_POST["spring"];
        $summer = $_POST["summer"];
    }

    $sql = "INSERT INTO plans (token, fall_q, winter_q, spring_q, summer_q)
    VALUES('$token', '$fall', '$winter' , '$spring', '$summer')";

    $result = $conn->query($sql);

    if (!$result) {
        $errorMessage = "Invalid query: " . $conn->error;
    }

?>