<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        body
        {
            background-color: bisque;
        }
        .sender
       {
          margin:auto;
          max-width: 500px;
          align-items: center;
          font-size : 30px;
        }
        .btn
        {
           margin-left:250px;
        }
    </style>
    <script>
        function submit()
        {

            document.transferForm.submit();
        }
    </script>    

</head>
<body>
    <form name = "transferForm" method = "post" action = "TransferDaoImpl.php">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <img src="images/sparks.png" width=50 height=50;/><a class="navbar-brand" href="#">&nbsp; SPARKS BANK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmenu"></button>
         

    <div class="collapse navbar-collapse" id="navbarmenu"> 
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="Home.php">Home&emsp;&emsp;</a>
             </li>
             <li class="nav-item">
              <a href="Customers.php" class="nav-link">View Customers&emsp;&emsp;</a>
           </li>
           <li class="nav-item">
              <a href="About.php" class="nav-link">About Us&emsp;&emsp;</a>
           </li>

        </ul>  
    </div>
    </nav>
    <input type = "hidden" name="send" value="<?php echo $_POST['senderName'];?>"/>
    <br>
    <br>
    <br>
    <div class = "sender">
    <label>Send To : </label>
    <input class="form-control form-control-lg" name = "receiver" type="text" placeholder=""/>
    <br>
    <label>Amount : </lablel>
    <input class="form-control form-control-lg" name = "amount" type="text" placeholder="amount"/>
    <div class ="btn">
    <br>
    <button type = "button" class="btn btn-secondary" onClick = "submit()">Transfer</button>
    </div>
    </div>

    </form>
</body>
</html>    