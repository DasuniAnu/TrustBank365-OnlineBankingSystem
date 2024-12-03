<!DOCTYPE html>
<html lang="en">
<html>
    <head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> DraftTransferMoney|www.trustbank365.com</title>
    <link rel  ="stylesheet" href="reg1.css">
    <link rel  ="stylesheet" href="stylesheet2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script rel = "transfermoney.js"></script>

<style>
            table{
                font-family: arial,sans-serif;
                border collapse:collapse;
                width:100%;
            }
            td,th{
                border: 1px solid #dddddd;
                text-align:left;
                padding:8px;

            }
            tr:nth-child(even){
                background-color:#dddddd;
            }
            button{
                width:80px;
                background-color:#21cdd3;
                border:none;
                color:#fff;
                padding:15px;
                border-right:4px;
                font-size:16px;
                transition:all 0.3s ease;
                border-radius:8px;
            }

            button:hover{
                cursor:pointer;
                background-color:#024b45;
            }
            </style>
    </head>

        <body>
            <div class="header">                                                                         <!-- header -->
                <div class="header-logo">
                  <img src="logo.jpeg" alt="Logo" width="120px">
                </div>
                <div class="header-topic">
                  <h1>Trust Bank 365</h1>
                </div>
                <button class="button" type="button" id="btn1" >LOG OUT</button>
                <div class="profile-section">
                  <img src="pp.jpg" alt="Profile Picture" class="profile-picture">
                  <button class="profile-button">Profile</button>
                  
                </div>
              </div>
              <div class="navi">
              <ul>
              <li><a href="home.html">HOME</a></li>
              <li><a href="login.html">LOGIN</a></li>
              <li><a href="register.html">REGISTRARTION</a></li>
              <li><a href="account.html">ACCOUNTS</a></li>
              <li><a href="payment history.html">PAYMENT HISTORY</a></li>
              <li><a href="transaction.html">TRANSACTIONS</a></li>
              <li><a href="bill payments.html">BILL PAYEMNTS</a></li>
              <li><a href="loans.html">LOANS</a></li>
              <li><a href="contact us.html">CONTACT US</a></li>
              <li><a href="FAQs.html">FAQs</a></li>
              </ul></div>
            <br>
                   
            <!-- header -->


            <table border="1" width="100%" class="displaytable" >
    <tr>

        <th>Transaction ID</th>
        <th>To Account Number</th>
        <th>From Account Number</th>
        <th>Transfer Amount</th>
        <th>Sender Remarks</th>
        <th>Beneficiary Remarks</th>
        <th>Username</th>
        <th>Password</th>

    </tr>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $Database = "online banking";
  // Creating the connection
  
  $conn = new mysqli($servername, $username, $password,$Database);
  // Checking the  connection
  
  
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";//to see if database connected or not

    $sql = "SELECT * FROM transfermoney";

    $result = mysqli_query($conn, $sql);
    if($result -> num_rows > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>

            <td>".$row["TBID"]."</td>
            <td>".$row["ToAccountNumber"]."</td>
            <td>".$row["FromAccountNumber"]."</td>
            <td>".$row["TransferAmount"]."</td>
            <td>".$row["SenderRemarks"]."</td>
            <td>".$row["BeneficiaryRemarks"]."</td>
            <td>".$row["Username"]."</td>
            <td>".$row["Password"].'</td>
            <td><button><a href= "transfermoney2.html"> Update </a></button></td>
            <td ><button > <a href = "delete.html" >Delete</a></button</td>
            

            </tr>';
        }
    }

    echo'</table>';

?>
            

        </body>
<html>
