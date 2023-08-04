<?php 
    include 'config.php';
    echo "This is bill payment";

    if ( isset($_POST['submit']) )   {
        $payment_payment = $_POST['paymentmethod'];
        $order_id = $_POST['orderid'];
        $amount = $_POST['amount'];
        $table_id = $_POST['tableid'];

        echo $payment_payment. " " . $order_id. " ". $amount;
        $sql = "INSERT INTO bill (o_id, amount, payment_method) VALUES ($order_id, $amount, '$payment_payment')";
        if (mysqli_query($con,$sql))   {
            $last_id = $con->insert_id;
            echo "Insertion Successfull";
            $sql1 = "UPDATE tables SET active = 0 WHERE id = $table_id";
            if (mysqli_query($con,$sql1))   {
                $sql2 = "UPDATE orders SET status = 0, amount = $amount, bill_id = $last_id WHERE o_id = $order_id";
                mysqli_query($con,$sql2);
                header('Location: take_order.php');       
            }              
        }
    }
    else {
        echo "Submit is not set";
    }
?>