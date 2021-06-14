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
    </style>
</head>
<body>
    <?php 
    include_once 'DatabaseUtilities.php';

    $connection = DatabaseUtilities::getConnection();
    $sql = "select * from customer";
    $resultSet = $connection->query($sql);
    ?>
    <form name = "customerForm" method = "post" action = "Transfer.php">
    <?php 
       include 'header.php';
      ?>  
    <input type = "hidden" name="senderId" value = " "/>
    <br>
    <br>
    <div class="container">
    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
        <thead>
          <tr>
            <th scope="col" class="center" >Name</th>
            <th scope="col" class="center">Email</th>
            <th scope="col" class="center">Current balance</th>
          </tr>
        </thead>
        <?php 
         if($resultSet->num_rows > 0)
         while($row = $resultSet->fetch_assoc())
         { ?>
        <tbody>
          <tr scope = "row">
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['current_balance']; ?></td>
            <td><a href="customerDetails.php?id= <?php echo $row['id'] ;?>"> <button type="button" class="btn btn-primary">View</button></a></td> 
          </tr>  
        <?php }  ?>    
        </tbody>
      </table>
    </div>
    <footer class="text-center mt-5 py-2" style = "background-color: lightgrey;">
        <p>&copy 2021. Made by <b>SUMANA M R</b> <br> The Sparks Foundation</p>
    </footer>
    </form>
 
</body>
</html>