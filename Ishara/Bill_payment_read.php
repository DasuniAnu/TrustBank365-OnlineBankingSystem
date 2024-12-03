<?php
// Create a database connection
$conn = new mysqli('localhost', 'root', '', 'online banking');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html>
<head>
  
<link rel="stylesheet" type="text/css" href="Bill_Payment.css">
  <title>Bill Payment</title>
  <a href><center>www.trustbank365.com</center></a>

<br>
</head>
<!---------------------Header-------------------------->
<header>
	<div class="header">
	<div class="header-logo">
		<img src="logo.jpg" alt="Logo" width="120px">
	</div>
	<div class="header-topic">
		<h1>Trust Bank 365</h1>
	</div>
		<button class="button" type="button" id="btn1" >LOG OUT</button>
	<div class="profile-section">
		<img src="dp.jpg" alt="Profile Picture" class="profile-picture">
		<button class="profile-button">Profile</button>
	
	</div>
</div>

<!----------------------Navigation Bar--------------------------->
<div class="navi">
<ul>
<li><a href="home.html">HOME</a></li>
<li><a href="login.html">LOGIN</a></li>
<li><a href="register.html">REGISTRARTION</a></li>
<li><a href="Account.html">ACCOUNTS</a></li>
<li><a href="payment history.html">PAYMENT HISTORY</a></li>
<li><a href="transaction.html">TRANSACTIONS</a></li>
<li><a href="Bill payments.html">BILL PAYEMNTS</a></li>
<li><a href="loans.html">LOANS</a></li>
<li><a href="contact us.html">CONTACT US</a></li>
<li><a href="FAQs.html">FAQs</a></li>
</ul></div><hr>

  </div>
  
  <?php
    // Retrieve data from the database
    $sql = "SELECT * FROM billpayment"; 
    $result = $conn->query($sql);

    // Display the data in an HTML table
    echo "<table border='1' width='100%'>";

    echo "<tr>
    <th>TID</th>
    <th>Account Type</th>
    <th>Payee</th>
    <th>Phone Number</th>
    <th>Amount</th>
    <th>References</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['TID'] . "</td><td>" . $row['AccountType'] . "</td><td>" . $row['Payee'] . "</td><td>" . $row['PNumber'] . "</td><td>" . $row['Amount'] . "</td><td>" . $row['Ref'] . "</td>
        <td ><a href='Update_form.html'<button>Update</button></a></td>
        <td ><a href='Delete_form.html'<button>Delete</button></a></td></tr>";
    }
    echo "</table>";

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>