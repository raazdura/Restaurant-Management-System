<?php include 'config.php'; ?>
<?php $table_id = $_GET['tid'];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" 
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
  .take-order {
    background-color: #f2f4f3;
  }
  .take-order h2 {
    text-align: center;
    width: 100%;
    padding: 20px;
  }
  .dishes {
    width: 85%;
    height: 100%;
    margin: auto;
  }
  .dishes .normal-dishes {
    display: flex;
    flex-direction: left;
    flex-wrap: wrap;
    border: 0.5px solid black;
    background-color: #fff;
    margin-bottom: 20px;
  }
  .dishes .cold-drinks {
    display: flex;
    flex-direction: left;
    flex-wrap: wrap;
    border: 0.5px solid black;
    background-color: #fff;
    margin-bottom: 20px;
  }
  .dishes .deserts {
    display: flex;
    flex-direction: left;
    flex-wrap: wrap;
    border: 0.5px solid black;
    background-color: #fff;
    margin-bottom: 20px;
  }
  .normal-dishes h2, .cold-drinks h2, .deserts h2 {
    border-bottom: 1px solid black;
    padding: 5px;
    background-color: #f0c808;
  }
  .dish-name {
    border: 0.5px solid black;
    margin: 20px 10px;
    min-width: 200px;
    padding: 10px;
    cursor: pointer;
    background-color: #dd1c1a;
    color: #fff;
  }
  .dish-name span {
    font-weight: 700;

  }
  .dish-name .quantity-div {
    float: right;
    background-color: #fff;
    border: 0.5px solid black;
  }
  .dish-name .quantity-div span {
    font-size: 18px;
    font-weight: 700;
    width: 20px;
    border: none;
    padding: 0 5px;
    color: #000;
  }
  #quantity {
    width: 50px;
  }
  .dishes .order-btn {
    margin: 10px 10px 20px 0;
    padding: 18px;
    font-size: 20px;
    font-weight: 700;
    background: #086788;
    border: none;
    color: #fff;
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
      <section class="take-order">
        <h2>Select Dishes</h2>
            <form action="insert_order.php" method="POST" class="dishes">
                <input type="text" name="table_id" style="display: none;"
                                      value="<?php echo $table_id; ?>">
                <div class="normal-dishes" id="normal-dishes">
                  <h2>The Dishes</h2>
                  <?php
                      $sql2 = "SELECT * FROM food WHERE cat_id = 1";
                      if($result2 = mysqli_query($con,$sql2))
                      {
                          while($row2 = mysqli_fetch_assoc($result2))
                          {
                          ?>
                              <div class="dish-name">
                                  <span><?php echo $row2['f_name'] ; ?></span>
                                  <div class="quantity-div">
                                    <span onclick="minus('<?php echo $row2['f_code'] ; ?>');">-</span>
                                    <span id="quantity<?php echo $row2['f_code'] ; ?>">0</span>
                                    <span onclick="plus('<?php echo $row2['f_code'] ; ?>');">+</span>
                                    <input type="text" name="qnty<?php echo $row2['f_code'] ; ?>" 
                                      id="<?php echo $row2['f_code'] ; ?>" style="display: none;"
                                      value="0">
                                      <input type="text" name="code<?php echo $row2['f_code'] ; ?>" style="display: none;"
                                      value="<?php echo $row2['f_code'] ; ?>">
                                  </div>
                              </div>
                          <?php  
                          }
                      } 
                  ?>
                </div>
                <div class="cold-drinks" id="cold-drinks">
                  <h2>Cold Drinks</h2>
                  <?php
                      $sql2 = "SELECT * FROM food WHERE cat_id = 2";
                      if($result2 = mysqli_query($con,$sql2))
                      {
                          while($row2 = mysqli_fetch_assoc($result2))
                          {
                          ?>
                              <div class="dish-name">
                                  <span><?php echo $row2['f_name'] ; ?></span>
                                  <div class="quantity-div">
                                    <span onclick="minus('<?php echo $row2['f_code'] ; ?>');">-</span>
                                    <span id="quantity<?php echo $row2['f_code'] ; ?>">0</span>
                                    <span onclick="plus('<?php echo $row2['f_code'] ; ?>');">+</span>
                                    <input type="text" name="qnty<?php echo $row2['f_code'] ; ?>" 
                                      id="<?php echo $row2['f_code'] ; ?>" style="display: none;"
                                      value="0">
                                      <input type="text" name="code<?php echo $row2['f_code'] ; ?>" style="display: none;"
                                      value="<?php echo $row2['f_code'] ; ?>">
                                  </div>
                              </div>
                          <?php  
                          }
                      } 
                  ?>
                </div>
                <div class="deserts" id="deserts">
                  <h2>Deserts</h2>
                  <?php
                      $sql2 = "SELECT * FROM food WHERE cat_id = 3";
                      if($result2 = mysqli_query($con,$sql2))
                      {
                          while($row2 = mysqli_fetch_assoc($result2))
                          {
                          ?>
                              <div class="dish-name">
                                  <span><?php echo $row2['f_name'] ; ?></span>
                                  <div class="quantity-div">
                                    <span onclick="minus('<?php echo $row2['f_code'] ; ?>');" class="MP">-</span>
                                    <span id="quantity<?php echo $row2['f_code'] ; ?>">0</span>
                                    <span onclick="plus('<?php echo $row2['f_code'] ; ?>');" class="MP">+</span>
                                    <input type="text" name="qnty<?php echo $row2['f_code'] ; ?>" 
                                      id="<?php echo $row2['f_code'] ; ?>" style="display: none;"
                                      value="0">
                                      <input type="text" name="code<?php echo $row2['f_code'] ; ?>" style="display: none; "
                                      value="<?php echo $row2['f_code'] ; ?>">
                                  </div>
                              </div>
                              </div>
                          <?php  
                          }
                      } 
                  ?>
                </div>
                <!-- <div class="order-btn"> -->
                  <input type="submit" name="submit" value="Order" class="order-btn" style="">
                <!-- </div> -->
            </form>
      </section>
  <script>
    function plus(f_code) {
      var qnty = document.getElementById(f_code).value;
      q  = parseInt(qnty);
      document.getElementById('quantity'+f_code).innerHTML = q + 1;
      document.getElementById(f_code).value = q + 1;
    }

    function minus(f_code) {
      var qnty = document.getElementById(f_code).value;
      q  = parseInt(qnty);
      if (q != 0) {
        document.getElementById('quantity'+f_code).innerHTML = q - 1;
        document.getElementById(f_code).value = q - 1;
      }
      
    }
  </script>
</body>
</html>
