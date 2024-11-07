<?php

    include('../common/db.php');

    echo "<br />";

    if (isset($_POST['signup'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
    
        $user = $conn->prepare("Insert into `users`
    (`id`,`username`,`email`,`password`,`address`)
    values(NULL,'$username','$email','$password','$address');
    ");
    
        $result = $user->execute();
        $user->insert_id;
        if ($result) {
    
            $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id" => $user->insert_id];
            header("location: /discuss");
        } else {
            echo "New user not registered";
        }
    
    }

?>