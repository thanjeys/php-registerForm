<?php

    // Register Form Inputs and

    if($_POST) { 

        echo "<h2>User Submitted Details </h2>"; 
        echo "Name : " . $_POST['name'] . "<br />";
        echo "Email : " . $_POST['email']. "<br />";
        echo "Password : " . $_POST['password']. "<br />";
        echo "Mobile : " . $_POST['mobile']. "<br />";
        echo "Country : " . $_POST['country']. "<br>"; 
    }
?>