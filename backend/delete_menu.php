<?php
    $id = $_GET['id'];

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "project1";

    $con = mysqli_connect($server,$username,$password,$database);

    if($con === false)
    {
        die('Connection cannot be established'. mysqli_connect_error());
    }
    else
    {

       $sql = " DELETE FROM food WHERE f_id = $id";

        if (mysqli_query($con, $sql)) {
            echo "New record has been deleted successfully !";
            header("location: manage_menu.php");
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
        mysqli_close($con);
    }
        
?>