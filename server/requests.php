<?php

    if(isset($_POST['signup'])){
        echo "User Name is ".$_POST['username']. "<br />";
        echo "User Email is ".$_POST['email']. "<br />";
        echo "User Password is ".$_POST['password']. "<br />";
        echo "User Re Type Password is ".$_POST['retype-password']. "<br />";
        echo "User Address is ".$_POST['address']. "<br />";
    }

?>