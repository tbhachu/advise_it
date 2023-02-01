<?php
   
    $token = random_strings();
    $fall = "";
    $winter = "";
    $spring = "";
    $summer = "";
    
    if(isset($_POST['submitForm'])) {
        $fall = $_POST["fall"];
        $winter = $_POST["winter"];
        $spring = $_POST["spring"];
        $summer = $_POST["summer"];

        $sql = "INSERT INTO plans(id, token, fall_q, winter_q, spring_q, summer_q, time_updated) VALUES(DEFAULT, '$token', '$fall', '$winter', '$spring', '$summer', DEFAULT);";
        $execute = mysqli_query($conn, $sql);
        if($execute) {
            echo "Plan saved successfully!";
        } else {
            echo "Something went wrong.";
        }
    }


?>