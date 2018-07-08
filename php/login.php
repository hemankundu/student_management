<?php
if (isset($_POST['login'])){

    
    $link = mysqli_connect("127.0.0.1", "root", "rootpass", $dbname);

    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    echo "Successfully connected to $dbname";

    if(!mysqli_query($link, "INSERT INTO students VALUES('0','$fname','$mname','$lname','$regno')")){
        printf("Error: %s\n", mysqli_error($link));
    }else{
        echo "\n$regno inserted!";
    }

    mysqli_close($link);
}