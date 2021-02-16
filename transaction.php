  
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Transaction History</title>
	<style type="text/css">
		 table{
            width: 800px;
            height: 100px;
            color: black;
            font-size: 20px;
            border-color: white;
            
        }
        tr, th, td {
        	border: 1px solid #071a3d ;
            width: 800px;
        }
        th,td{
        	text-align: center;
            width: 800px;
        }
        th{
        	background-color: rgb(27, 155, 187) ;
        	color: white;
            width: 800px;
        }
        body{
        	background-image: url("https://images.unsplash.com/photo-1472289065668-ce650ac443d2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80");
        	margin: 0;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .middle{
        	margin-left: auto;
        	margin-right: auto;
            width: 800px;
        }
        h1{
        	text-align: center;
        	font-size: 40px;
            color: black;
        }
        a{
            color: white;
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
<?php include 'connection.php' ?>
    <div class="topnav" id="myTopnav">
        
            
      <a href="index.php" class="active" ><i class="fa fa-home"></i>Home</a>
      <a href="transaction.php">TRANSCATION </a>
      <a href="table.php">USER LIST</a>
     
    </div>
	

	<h1>Transaction History</h1>

	

	<table class="middle">
    <thead>
        <tr>
        <th>Sr. No</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
            <th>Timestamp</th>
        </tr>
    </thead>
    <?php $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "basic banking system";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
     $sql = "SELECT * FROM `trans_list`";
      $result = mysqli_query($conn, $sql);?>
      <?php while( $row = mysqli_fetch_array($result)) : ?>
    <tr>
        <!--Each table column is echoed in to a td cell-->
        <td><?php echo $row['transaction id']; ?></td>
        <td><?php echo $row['sender']; ?></td>
        <td><?php echo $row['reciever']; ?></td>
        <td><?php echo $row['amount']; ?></td>
        <td><?php echo $row['date_time']; ?> </td>
    </tr>
    <?php endwhile ?>
</tbody>
</table>
    <tbody>
    </body>
    </html>