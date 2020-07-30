<?php

include './database/database_configuration.php';
if (isset($_POST['username'])) {
    $user = test_input($_POST["username"]);
    $sql = "SELECT * FROM `login` where `userName`='$user'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        echo $row['password'];
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
