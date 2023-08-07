<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  *{
  margin:0;
  padding:0;
  box-sizing: border-box;
  }

  html{
    background-color:#fff;
    color:#555;
    font-family: 'Lato', 'Arial','sans-serif';
    /* font-weight:300; */
    /* font-size:20px; */
    text-rendering: optimizeLegibility;
  }

  .row{
    max-width: 1140px;
    margin: 0 auto;
    background-color: lightblue;
  }


  header{
   border: 1px solid black;
   background-color: #086788;
   height: 100px;
  }


  .logo{
    height: 50px;
    width:auto;
    float:left;
    margin-top:20px;
  }


  .main-nav{
    float:right;
    list-style:none;
    margin-top:55px;
  }

  .main-nav li{
    display: inline-block;
    margin-left:40px;
  }

  .main-nav li a:link, .main-nav li a:visited{
    color: #fff;
    text-decoration:none;
    text-transform:uppercase;
    font-size: 14px;
    font-weight: 700;
    border-bottom: 2px solid transparent;
    transition:border-bottom .2s;
    /* padding: 5px 0; */
    /* text-shadow: 2px 2px 9px rgba(0, 0, 10, .8); */

  }

  .main-nav li a:hover, .main-nav li a:active{
    border-bottom: 2px solid #fff;
    
  }



  @media only screen and (max-width: 1140px) {
    .row{
        width:940px;
    }
  }


  @media only screen and (max-width: 960px) {
    .row{
        width:840px;
    }
  }


  @media only screen and (max-width: 960px) {
    .row{
        width:740px;
    }
  }

  @media only screen and (max-width: 740px) {
    .row{
        width:640px;
    }
    
  .btn:link,.btn:visited{
    display:inline-block;
    padding: 8px 15px;
    font-weight:300;
    text-decoration:none;
    border-radius:30px;
    color:#fff;
    font-size:16px;
  }
  }


  @media only screen and (max-width: 640px) {
    .row{
        width:540px;
    }
    .logo{
      height:50px;
    }
    
  .btn:link,.btn:visited{
    display:inline-block;
    padding: 8px 15px;
    font-weight:300;
    text-decoration:none;
    border-radius:30px;
    color:#fff;
    font-size:16px;
  }
  }


  @media only screen and (max-width: 430px) {
    .row{
        width:340px;
    }
    
    .logo{
      height:100px;
      position:absolute;
      top: 26%;
      left:0;
    }
    
  .btn:link,.btn:visited{
    display:inline-block;
    padding: 8px 15px;
    font-weight:300;
    text-decoration:none;
    border-radius:30px;
    color:#fff;
    font-size:12px;
  }
    
    .main-nav li{
    display: inline-block;
    margin-left:10px;
  }
    
    .main-nav{
    float:right;
    list-style:none;
    margin-top:15px;
  }
    
  }
</style>
<style>
  .bill-section {
    display: flex;
    margin: 0.8%;
  }
  .bill {
    width: 50%;
    background-color: lightsalmon;
    text-align: center;
    padding: 10px;
    margin-right: 0.5%;
  }
  .bill h2 {
    margin-bottom: 10px;
  }
  table {
    margin: auto;
    margin-top: 50px;
    border: 0.5px solid #555;
    font-size: 18px;
  }
  table th, td {
    padding: 5px 10px;
  }
  table:last-child {
    border-top: 0.5px solid #555;
  }

  .payment {
    background-color: lightblue;
    width: 50%;
    text-align: center;
    padding: 10px;
    margin-left: 0.5%;
  }
  .payment h2 {
    padding: 20px;
  }
  .payment .payment-method {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
  }
  .payment .payment-method div {
    font-size: 16px;
    margin: 10px;
    padding: 10px 50px;
  }
  .payment .payment-method .cash:hover,
  .payment .payment-method .card:hover {
    background-color: darkgreen;
    cursor: pointer;
  }
  .payment .payment-method .cash {
    background-color: green;
    color: #fff;
    
  }
  .payment .payment-method .card {
    background-color: green;
    color: #fff;

  }
  .payment .payment-method .wallet {
    background-color: #f2f4f3;
    color: #fff;
    width: 80%;
    padding: 0;
    margin-top: 30px;

  }
  .payment .payment-method .wallet .title {
    background-color: green;
    margin: 0;
  }
  .payment .payment-method .wallet img {
    width: 100px;
    margin: 10px;
    padding: 10px;
  }
  .payment .payment-method .wallet img:hover {
    cursor: pointer;
  }
  .bill-section form {
    margin: auto;
    width: 30%;
  }
  .bill-section form input {
    margin: 20px 0;
    padding: 15px;
    font-size: 18px;
    font-weight: 700;
    background-color: green;
    color: #fff;
    border: none;
  }
  .bill-section form input:hover {
    background-color: darkgreen;
  }
</style>
</head>
<body>
      <header>
        <nav>
            <div class="row">
                <a href="index.php"><img src="1.png" class="logo"></a>
                <ul class="main-nav">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="take_order.php">Take Order</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
      </header>
      <h1 style="text-align: center; margin: 20px;">Bill and Payment</h1>
      <section class="bill-section">
        <div class="bill">
            
                <h2>The Sudip's Restro</h2>
                <h3>Bill Receipt</h3>

                <?php 
                    include 'config.php';
                    $tid = $_GET['tid'];

                    $sql1 = "SELECT o_id 
                    FROM orders WHERE t_id = $tid AND status = 1";
                    
                    $result1 = mysqli_query($con,$sql1);
                    $row1 = mysqli_fetch_assoc($result1);    
                    $orderId = $row1['o_id'];
                    
                    $sql2 = "SELECT o.food_code, f.f_name, o.qnty, o.amount, f.price
                    FROM order$orderId as o
                    INNER JOIN food as f
                    ON o.food_code = f.f_code";
                    
                    $result2 = mysqli_query($con,$sql2);
                    ?>
                    <h2>Order Id: <?php echo $orderId ?></h2>
            <table>
                <tr>
                    <th>Dish Name</th>
                    <th>Quantity</th>
                    <th>Price(Rs.)</th>
                    <th>Amount(Rs.)</th>
                </tr>
                <?php
                    while($row2 = mysqli_fetch_assoc($result2)) {
                        ?>
                        <tr>
                            <td><?php echo $row2['f_name']; ?></td>
                            <td><?php echo $row2['qnty']; ?></td>
                            <td><?php echo $row2['price'] . "/-"; ?></td>
                            <td><?php echo $row2['amount'] ."/-"; ?></td>

                        </tr>

                        <?php
                    }
                ?>
                <tr>
                    <th colspan="3">Total:</th>
                    <td>
                        <?php 
                        $sql3 = "SELECT SUM(amount) as total_amount FROM order$orderId WHERE order_id = $orderId";
                        $result3 = mysqli_query($con,$sql3);
                        $row3 = mysqli_fetch_assoc($result3);
                        echo $row3['total_amount'] . "/-";
                        ?>
                    </td>
                </tr>
            </table>
        </div>

        <div class="payment">
          <h2>Payment Method</h2>
          <div class="payment-method">
            <div class="cash" id="cash" onclick="cash();">
              <i class="fa-solid fa-money-bills"></i>
              <span>Cash</span>
            </div>
            <div class="card" id="card" onclick="card();">
              <i class="fa-regular fa-credit-card"></i>
              <span>Card</span>
            </div>
            <div class="wallet">
              <div class="title">
                <i class="fa-solid fa-wallet"></i>
                <span>Digital Wallet</span>
              </div>
              <img src="esewa-seeklogo.com.svg" alt="" id="esewa" onclick="esewa();">
              <img src="fonepay-seeklogo.com.ai" alt="" id="">
              <img src="khalti-seeklogo.com.svg" alt="" id="khalti" onclick="khalti();">
            </div>
          </div>
          <form action="billpayment.php" method="POST">
            <input type="text" name="paymentmethod" id="paymentmethod" style="display: none;">
            <input type="text" name="orderid" id="" value="<?php echo $orderId ?>" style="display: none;">
            <input type="text" name="amount" id="" value="<?php echo $row3['total_amount']; ?>" style="display: none;">
            <input type="text" name="tableid" id="" value="<?php echo $tid; ?>" style="display: none;">
            <input type="submit" name="submit" value="Payment Confirm">
          </form>
        </div>
        
      </section>
      <script>
        function cash()  {
          document.getElementById("cash").style.backgroundColor = "red";
          document.getElementById("cash").style.border = "1px solid black";

          document.getElementById("paymentmethod").value = "cash";
          
          document.getElementById("card").style.backgroundColor = "green";
          document.getElementById("cash").style.border = "none";
          document.getElementById("esewa").style.backgroundColor = "transparent";
          document.getElementById("esewa").style.border = "none";
          document.getElementById("khalti").style.backgroundColor = "transparent";
          document.getElementById("khalti").style.border = "none";
        }

        function card()  {
          document.getElementById("card").style.border = "1px solid black";
          document.getElementById("card").style.backgroundColor = "red";
          document.getElementById("paymentmethod").value = "card";
          
          document.getElementById("cash").style.backgroundColor = "green";
          document.getElementById("cash").style.border = "none";
          document.getElementById("esewa").style.backgroundColor = "transparent";
          document.getElementById("eswa").style.border = "none";
          document.getElementById("khalti").style.backgroundColor = "transparent";
          document.getElementById("khalti").style.border = "none";
        }

        function esewa()  {
          document.getElementById("esewa").style.border = "1px solid black";
          document.getElementById("esewa").style.backgroundColor = "red";
          document.getElementById("paymentmethod").value = "esewa";
          
          document.getElementById("cash").style.backgroundColor = "green";
          document.getElementById("cash").style.border = "none";
          document.getElementById("card").style.backgroundColor = "green";
          document.getElementById("card").style.border = "none";
          document.getElementById("khalti").style.backgroundColor = "transparent";
          document.getElementById("khati").style.border = "none";
        }

        function khalti()  {
          document.getElementById("khalti").style.border = "1px solid black";
          document.getElementById("khalti").style.backgroundColor = "red";
          document.getElementById("paymentmethod").value = "khalti";
          
          document.getElementById("cash").style.backgroundColor = "green";
          document.getElementById("cash").style.border = "none";
          document.getElementById("card").style.backgroundColor = "green";
          document.getElementById("card").style.border = "none";
          document.getElementById("esewa").style.backgroundColor = "transparent";
          document.getElementById("eswa").style.border = "none";
        }
      </script>
</body>
</html>
