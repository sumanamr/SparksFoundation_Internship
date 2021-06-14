<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <?php 
      include 'header.php';
      ?>
    
            <div class="container-fluid">
            <div class="row intro py-1" style="background-color:linen">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <br><br><br>
                  <marquee scrollamount="10"
                      direction="left"
                      behavior="scroll">
                      <h3>Welcome to</h3>
                      <h1>SPARKS BANK</h1>
                    </marquee>
                  
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
              <img class="images" src = "images/bank1.jpg" height = "400" width="400"/> 
              </div>
            </div>
            <br>
            <br>

  
            <div class="row text-center">
                  <div class="col-md ">
                    <img src="images/users.png" class="img-fluid" height="400" width = "400">
                    <br>
                    <a href="Customers.php"><button class="btn btn-secondary">View Customers</button></a>
                  </div>
                  &nbsp;&nbsp;
                  <div class="col-md ">
                    <img src="images/contact2.jpg" class="img-fluid" >
                    <br>
                    <br>
                    <br>
                    <br>
                    <a href="ContactUs.php"><button class="btn btn-secondary">Contact Us</button></a>
                  </div>
                  &nbsp;&nbsp;
                  <div class="col-md ">
                    <img src="images/transaction history.jpg" class="img-fluid"  height="400" width = "400">
                    <br>
                    <a href="TransactionHistory.php"><button class="btn btn-secondary">Transaction History</button></a>
                  </div>
            </div>
      </div>
   
   
    <footer class="text-center mt-5 py-2" style = "background-color: lightgrey;">
        <p>&copy 2021. Made by <b>SUMANA M R</b> <br> The Sparks Foundation</p>
    </footer>
   
</body>
</html>