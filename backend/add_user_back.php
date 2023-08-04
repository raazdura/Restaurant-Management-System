<?php
    //Creating Connection With Database
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

    
        

    if(isset($_POST['submit']))
    {    
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["photo"]["name"])). " has been uploaded.";
            } else {
            echo "Sorry, there was an error uploading your file.";
            }
        }

        $photo =  $_FILES["photo"]["name"];
        $date = date("Y-m-d");
         $username = $_POST['username'];
         $password = $_POST['password'];
         $firstname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $phone = $_POST['phone'];
         $email = intval($_POST['email']);
         $gender = intval($_POST['gender']);

         $sql = "INSERT INTO users (photo,username,password,email,firstname,lastname,phone,gender)
         VALUES ('$photo','$username','$password','$firstname','$email','$lastname','$phone','$gender')";

         if (mysqli_query($con, $sql)) {
            echo "New record has been added successfully !";
            header("location: ../manage_user.php");

         } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
         }
         mysqli_close($con);

         header("location: ../manage_user.php");
    }
?>