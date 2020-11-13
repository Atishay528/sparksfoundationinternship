<?php
session_start();
$con=mysqli_connect('localhost','root','','spark_foundation');
//mysqli_select_db($con,'test');
$q="select name from spark";
$result=mysqli_query($con,$q);
//echo $_POST["transfer"];
$_SESSION['to']=$_POST["transfer"];
?>
<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="html.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

  <style>


  input[type=text] {
    width: 100%;
 padding: 12px;
 border: 3px solid #555;
 border-radius: 4px;
 resize: vertical;
  }

  input[type=text]:focus {
    border: 3px solid #ccc;
  }



      body{
background-image:url('images1.png');
        height: 100%;
    	width:100%;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;


    	font-family:'Sofia';

      }
      .button {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 25px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
    }
      .button2 {
      background-color: white;
      color: black;
      border: 2px solid  #4CAF50;
      border-radius: 12px;
    }

    .button2:hover {
      background-color:  #4CAF50;
      color: white;
    }




    </style>
    </head>
    <body>
      <div class="container-fluid">
      <div class='row'>
      <div class="col-md-9"></div>
      <div class="col-md-3">
     <form action="checkcredit.php" method="post"  style="position: relative; top:20%; ">
          <div class="view">
            <br>

              <h1><strong>Transfer Amount:</strong></h1>
          <br>

          <input type="text" name="transfer"><br>
          <br>

          <button class='button2 button'>Transfer</button>
</div>
        </div>
        </form>


    </body>
</html>
