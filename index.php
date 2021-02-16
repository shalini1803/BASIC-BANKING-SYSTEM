 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>basic banking system</title>
</head>
<style>
    
    body{
		
			background-repeat: no-repeat;
  			background-size: 1600px 800px;
        margin: 0;
    }  
    .bgimg {
background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20190221/ourmid/pngtree-simple-gradient-e-commerce-web-page-image_21108.jpg');
height: 100%;
background-position: center;
background-size: cover;
position: relative;
color: black;
font-family: "Courier New", Courier, monospace;
font-size: 25px;
text-decoration: solid;

}


    .navbar{
        padding: 0px;
  margin: 0px;
  text-align: center;
  display:inline-block;
  vertical-align:top;
}
    
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.img:hover{
  background-color: #ddd;
  color:blue;
}
/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color:gray;
}

/* Add an active class to highlight the current page */
.topnav .active {
  background-color:#ffae42;
  color: white;
  float:left;
}
.heading h1{
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);


}
.heading h3{
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);


}
.container{
    padding-left: 530px;
}
button{
      font-size: 30px;
      padding: 10px 30px;
      justify-content: center;
      background-color: #d89a16;
      color: rgba(243, 90, 19, 0.74);
      text-decoration: none;
      margin-top: 45%;
      
      
      

}
button a{
  color:blueviolet;
}
button:hover{
    background-color: rgba(19, 135, 243, 0.74);
      text-align: center;
}
.footer {
     position: fixed;
     left: 0;
     bottom: 0;
     width: 100%;
     background-color: rgb(46, 45, 48);
     color: white;
     text-align: center;
     margin-bottom:0px;
    
}
@media screen and (max-width: 500px) {
.navbar a {
  float: none;
  display: block;
}
}
</style>
<body>
<?php include 'connection.php' ?>
    <div class="bgimg">
    <div class="topnav" id="myTopnav">
        
            
        
      <a href="index.php" class="active" ><i class="fa fa-home"></i>Home</a>
      <a href="transaction.php">TRANSACTION </a>
      <a href="table.php">USER LIST</a>
     
    </div>
   
     <element class="heading">
       <h1><b>WELCOME TO JSM BANK</b></h1>
       <H3>TRANSFER MONEY SAFELY AND EASLY</H3>
     </element>
     <div class="container">
      <button><a href="money.php"><b>SEND MONEY</b></a></button>
      <!--\ <button id="user"><a href="table.php">View user list</button>
        <button><a href="transaction.php">Transaction History</a></button> -->
    </div>
    
    </div>
    <div class="footer">
        <marquee behavior="scroll" direction="left">
        <p>Made By|shalini yadav|The Sparks Foundation|</p></marquee>
      </div>
      
      
</body>
</html>