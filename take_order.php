<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    text-align: center;
    padding: 20px;
    background-color: #f2f4f3;
  }
  .tables {
    background-color: #06aed5;
    margin: 20px;
    text-align: center;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(17rem, 1fr));
    gap: 20px;
    padding: 25px;
  }
  h2 {
    width: 100%
  }
  .tables a {
    text-decoration: none;
    font-weight: 1000;
    color: #fff;
    padding: 10px 0;
  }
  .tables .table-1 {
    padding: 10px;
    background-color: #dd1c1a;
    text-decoration: none;
  }
  .tables .table-1 .bill {
    font-size: 12px;
    font-weight: 700;
    background-color: #f0c808;
    margin: 1px 35px;
    border-radius: 10px;
    padding: 2px;
  }
  .tables .table-0 {
    padding: 20px;
    background-color: #228B22;
    text-decoration: none;
    cursor: default;
  }
  .tables .table-0:hover {
    background-color: #008000;
  }
  .tables .table span {
    text-decoration: none;

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
        <h2>Select Table</h2>
        <div class="tables">
          <?php  
            include 'config.php';
            $sql = "SELECT * FROM tables";
            if($result = mysqli_query($con,$sql))
            {
                while($row = mysqli_fetch_assoc($result))
                {
                  if ( $row['available'] != 0 ) {
                    if ( $row['active'] == 1) {
                      ?>
                        <div class="table-1">
                          <a href="">
                            <?php echo "Table NO.:" . " " . $row['table_name'] ; ?>
                          </a>
                          <a href="bill.php?tid=<?php echo $row['id']?>" class="bill" style="display:block">Show Bill</a>
                        </div>
                      <?php
                    }
                    else {
                      ?>
                        <div class="table-0">
                            <a href="select-dishes.php?tid=<?php echo $row['id'];?>">
                              <?php echo "Table NO.:" . " " . $row['table_name'] ; ?>
                            </a>
                        </div>
                      <?php
                    }
                  }
                }
            } 
          ?>
          <div class="table">
            <span></span>
          </div>
        </div>
      </section>
</body>
</html>
