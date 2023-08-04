<?php 
    include 'config.php';
    
    if (isset($_POST['submit'])) {
        $table_id = intval($_POST['table_id']); echo $table_id . "</br>";
        $date = date("Y/m/d h:i:sa");

        $sql = "INSERT INTO orders (t_id, o_time, status) VALUES ($table_id, '$date', 1)";
        if (mysqli_query($con,$sql)) {
            $last_id = $con->insert_id;
            $sql2 = "CREATE TABLE order{$last_id} (order_id int, food_code varchar(255), qnty int , amount int)";
            if (mysqli_query($con,$sql2)) {
                $sql1 = "SELECT * FROM food";
                if($result1 = mysqli_query($con,$sql1)) {
                    while($row1 = mysqli_fetch_assoc($result1)) {
                        $food_code = $_POST['code'.$row1['f_code']];
                        $quantity = $_POST['qnty'.$row1['f_code']];
                        $amount = intval($quantity) * $row1['price'];
                        echo "food code = " . $food_code . "    " . "quantity = " . $quantity . "<br/>";

                        if ( $quantity > 0)  {
                            $sql3 = "INSERT INTO order{$last_id} VALUES ('$last_id', '$food_code', '$quantity', '$amount');";
                            if (mysqli_query($con,$sql3))   {                            
                                echo "Order table created";    
                            }
                            $sql4 = "UPDATE tables SET active = 1 WHERE id = $table_id;";
                            mysqli_query($con,$sql4);
                            header('Location: take_order.php');
                        }
                        else {
                            echo "unable to insert into the table";
                        }
                    }
                }
                else {
                    echo "unable to create table";
                }
            }
            else {
                echo "submit is not set";
            }
        }
            
            
        }
        
?>