<?php 
include_once'config.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Registrationpage.css">
  <link rel="stylesheet" href="headerfooter.css"> 
  <script src="../IWT ASSIGNMENT2/Registrationpage.js"></script>
  <title>Trust bank 365</title>
  <a href><center>www.trustbank365.com</center></a>
  <style>
            table{
                font-family: arial,sans-serif;
                border collapse:collapse;
                width:100%;
                background-color:white;
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
                color:red;
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
<br>
</head>
<body>
<div class="header">
  <div class="header-logo">
    <img src="images/logo4.jpg" alt="Logo" width="120px">
  </div>
  <div class="header-topic">
    <h1>Trust Bank 365</h1>
  </div>
  <button class="button" type="button" id="btn1" >LOG OUT</button>
  <div class="profile-section">
    <img src="images/profile.jpeg" alt="Profile Picture" class="profile-picture">
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
</ul></div><hr>

  </div>
  <table class=""border="1" width="100%">
    <tr>
       <th>rid</th>
        <th>first name</th>
        <th>last name</th>
        <th>idetity card</th>
        <th>dob</th>
        <th>address line 1</th>
        <th>address line 2</th>
        <th>phone</th>
        <th>email</th>
        <th>username</th>
        <th>password</th>
        <th>confirm password</th>
    </tr>
  <?php
    $sql = "SELECT * FROM users";

    $result = $conn ->query($sql);
 
    if($result -> num_rows > 0){
        while ($row = $result -> fetch_assoc()){
            echo "<tr>
            <td>".$row["rid"]."</td>
            <td>".$row["first_name"]."</td>
            <td>".$row["last_name"]."</td>
            <td>".$row["identity_card"]."</td>
            <td>".$row["dob"]."</td>
            <td>".$row["address_line1"]."</td>
            <td>".$row["address_line2"]."</td>
            <td>".$row["phone1"]."</td>
            <td>".$row["email"]."</td>
            <td>".$row["username"]."</td>
            <td>".$row["passwordd"]."</td>
            <td>".$row["confirm_password"]."</td>
            <td ><a href='reg2.html'<button>Update</button></a></td>
            <td ><a href='delete.html'<button>Delete</button></a></td>
            </tr>";
        }
    }

    echo"</table>";

    mysqli_close($conn);
?>
</body>
</html>