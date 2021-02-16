<?php ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>user list</title>
    <style type="text/css">
        table, th,tr,td{
            border: 2px solid black;
        }
        .center{
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            
            
        }
        table{
            width: 900px;
            height: 500px;
            color: black;
            font-size: 30px;
            border-color: rgb(179, 36, 36);
        }
        h1{
            text-align: center;
            color: rgb(179, 60, 60);
            font-size: 40px;
            margin-top:10px;


        }
        body{
            background-image: url("https://images.unsplash.com/photo-1528459584353-5297db1a9c01?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1075&q=80");
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
        }
        th, td{
            text-align: center;
            /* border: 2px solid black; */
            
        }
        th{
            background-color: rgb(35, 201, 173) ;
            color: white;
            border: 2px solid black;

        }
        a{
            font-size:20px;
        }
        tr{
            font-size:25px;
            border: 2px solid black;    
            background-color: #f2f2f2;
            
        }
        tr:hover{
            background-color: #d279a6;
        }
        

    </style>
    <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
    <div class="topnav" id="myTopnav">
        
            
      <a href="index.php" class="active" ><i class="fa fa-home"></i>Home</a>
      <a href="transaction.php">TRANSCATION </a>
      <a href="table.php">USER LIST</a>
     
    </div>
  <h1><u>User List</u></h1>
  <table class="center">
  <thead>
      <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Balance</th>
      </tr>
  </thead>
  <tbody>
      <!--Use a while loop to make a table row for every DB row-->
      <?php $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "basic banking system";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
      $sql = "SELECT `ID`, `NAME`, `EMAIL`, `BALANCE` FROM `userlist`";
      $result = mysqli_query($conn, $sql);?>
      <?php while( $row = mysqli_fetch_array($result)) : ?>
      
      <tr>
          <!--Each table column is echoed in to a td cell-->
          <td><?php echo $row['ID']; ?></td>
          <td><?php echo $row['NAME']; ?></td>
          <td><?php echo $row['EMAIL']; ?></td>
          <td><?php echo $row['BALANCE']; ?></td>
      </tr>
      <?php endwhile ?>
  </tbody>
</table>

</body>
</html>