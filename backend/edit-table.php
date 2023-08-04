<?php
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
        echo "Connection Established Successfully";
    }

    if(!isset($_POST['submit']))    {
        header("location: ../tables.php");
        echo "Submit id not set";
    }
    else {
        $id = $_POST['table-id'];
        $tablename = $_POST['table-name'];
        $capacity = intval($_POST['capacity']);
        
        echo "$username";
        echo "save is set";

       $sql = " UPDATE tables SET table_name = '$tablename', capacity = '$capacity'
        WHERE id = $id";

        if (mysqli_query($con, $sql)) {
            echo "New record has been added successfully !";
            header("location: ../tables.php");
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
        mysqli_close($con);
    }

?>