<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="Styles/Home.css">
		<link rel="stylesheet" href="styles/Header.css">  
		
		<title>Home</title>
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
				<img src="images/profile.jpg" alt="Profile Picture" class="profile-picture">
				<button class="profile-button">Profile</button>
			</div>
		</div>
		
		<div class="navi">
			<ul>
			<li><a href="submitInfo.php" class="active">HOME</a></li>
			<li><a href="login.html">LOGIN</a></li>
			<li><a href="register.html">REGISTRATION</a></li>
			<li><a href="account.html">ACCOUNTS</a></li>
			<li><a href="payment history.html">PAYMENT HISTORY</a></li>
			<li><a href="transaction.html">TRANSACTIONS</a></li>
			<li><a href="bill payments.html">BILL PAYMENTS</a></li>
			<li><a href="loans.html">LOANS</a></li>
			<li><a href="contact us.html">CONTACT US</a></li>
			<li><a href="FAQ.html">FAQs</a></li>
			</ul>
		</div><hr>
		
		<div class="adjust"> 
			<!-- Ref: https://www.educative.io/answers/how-to-create-an-animated-calendar-with-html-and-css 
			     Date/time : 14/10/2023 13:54, Line 45 to 75 -->
			<div class="calendar">
				<div class="calendar-header">
					<span class="month-picker" id="month-picker" style="color: #003366;">April</span>
					<div class="year-picker">
						<span class="year-change" id="prev-year">
							<pre><</pre>
						</span>
						<span id="year">2022</span>
						<span class="year-change" id="next-year">
							<pre>></pre>
						</span>
					</div>
				</div>
				<div class="calendar-body">
					<div class="calendar-week-day">
						<div>Sun</div>
						<div>Mon</div>
						<div>Tue</div>
						<div>Wed</div>
						<div>Thu</div>
						<div>Fri</div>
						<div>Sat</div>
					</div>
					
					<div class="calendar-days"></div>
				</div>
       
				<div class="month-list"></div>
			</div>
			
			<script src="js/calendar.js"></script>
   
		
			<table align= right style="width: 49.6%; height: 400px; background-color: #D3D3D3; border: none; border-radius: 25px; opacity: 0.8;">
				<tr>
					<th>Account No</th>
					<th>Balance</th>
				</tr>
				
				<tr>
					<td style="text-align: center;">XXXXXXXXXXXX</td>
					<td style="text-align: center;">00000000</td>
				</tr>
				
				<tr>
					<td style="text-align: center;">XXXXXXXXXXX</td>
					<td style="text-align: center;">11111111111</td>
				</tr>
			
				<tr>
					<td style="text-align: center;">XXXXXXXXXXXX</td>
					<td style="text-align: center;">222222222222</td>
				</tr>
			</table>	
		
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

			<h1 style="text-align: center; color: #FF6600;">Set a reminder</h1>
		
			<div class="board2">	
				<form name="reminderForm" method="POST" action="submitInfo.php">
					<p style="color: #003366;">ID: </p>
					<input name="ID" type="text" value="" placeholder="Number(max 10 digits)" required>
					
					<br><br><br>
				
					<p style="color: #003366;">Date:</p>
					<input name="Date" type="Date" required>
					
					<br><br><br>
				
					<p style="color: #003366;">Time:</p>
					<input name="Time" type="Time" required>
					
					<br><br><br>
				
					<p style="color: #003366;">Description:</p>
					<input name="Description" type="text" value="" style="width: 290px;" required>
					
					<br><br><br>
				
					<input name="BtnSubmit" type="submit" value="Create" style="color: #003366;">
					<input name="BtnSubmit" type="submit" value="Edit" style="color: #003366;">
					<input name="BtnSubmit" type="submit" value="Delete" style="color: #003366;">
				
					<!-- Ref: https://www.youtube.com/watch?v=qm4Eih_2p-M , Date: 13/10/2023, Time: 20:29, Line 136 to 175 -->
					<?php
						if(!empty($_POST['ID']))
						{
							$btnType = $_POST['BtnSubmit'];
							$ID = $_POST['ID'];
							$Date = $_POST['Date'];
							$Time = $_POST['Time'];
							$Description = $_POST['Description'];
					
							if ($btnType == "Create")
							{
								if (!empty($ID) || !empty($Date) || !empty($Time) || !empty($Description))
								{
									include 'config.php';
						
									$SELECT = "SELECT ID From reminder2 Where ID = ? Limit 1";
									$INSERT = "INSERT Into reminder2 (ID ,Date, Time, Description) values (?, ?, ?, ?)";

									$stmt = $conn->prepare($SELECT);
									$stmt->bind_param("i", $ID);
									$stmt->execute();
									$stmt->bind_result($ID);
									$stmt->store_result();
									$rnum = $stmt->num_rows;
						
									if($rnum==0)
									{
										$stmt = $conn->prepare($INSERT);
										$stmt -> bind_param("ssss", $ID, $Date, $Time, $Description);
										$stmt->execute();
									}
									else
									{
										echo"<script> alert('ID has already been used!') </script>";
									}
						
									$stmt->close();
									$conn->close();
								}
								else
								{
									die("All fields are required");
								}
							}
							else if($btnType == "Edit")
							{
								include 'config.php';
						
								$sql = "UPDATE reminder2 SET Date = '$Date', Time = '$Time', Description = '$Description'  WHERE ID = $ID";
								$result=mysqli_query($conn, $sql);
						
								$conn->close();
							}
							else
							{
								include 'config.php';
						
								$sql = "DELETE FROM reminder2 WHERE ID = $ID";
								$result=mysqli_query($conn, $sql);
						
								$conn->close();
							}
						}
					?>
				</form>
			</div>
				
			<div class="board">
				<!-- Ref: https://www.w3schools.com/php/php_mysql_select.asp , Date: 13/10/2023, Time: 20:30, Line: 181 to 200 -->
				<?php
					include 'config.php';
				
					$sql = "SELECT ID, Date, Time, Description FROM reminder2 ORDER BY Date, Time ASC";
					$result = $conn->query($sql);
				
					if($result->num_rows > 0)
					{
						while( $row = $result->fetch_assoc())
						{
							echo "<p style='color: #003366;'>ID: " . $row["ID"] . "<br>Date: " . $row["Date"] . "<br>Time: " . $row["Time"] . "<br>Description: " . $row["Description"] . "</p><br><br>";
						}
					}
					else
					{
						echo"<p style='color:#003366;'>No active reminders</p>";
					}
				
					$conn->close();
				?>
			</div>
		
			<h1 align= center style="color: #FF6600;"> PROMOTIONS </h1>
			
			<!-- Ref: https://www.w3schools.com/tags/tryit.asp?filename=tryhtml_figcaption
				 Date/Time: 14/10/2023 15:55, Lines 138 to 146 -->
			<figure style="float:left;">
				<a href="HomeStudent.html"><img src="images/Books.jpg" alt="Students" style="width: 300px; height: 222px;" alt="Students"></a>
				<figcaption align=center style="color: #003366;">Students</figcaption>
			</figure>
			
			<figure style="float:right;">
				<a href="HomeSenior.html"><img src="images/corporateSenior.jpg" style="width: 300px; height: 222px;" alt="Senior Citizens"></a>
				<figcaption align=Center style="color: #003366;">Senior Citizens</figcaption>
			</figure>
			
			<a href="HomeChildren.html"><img src="images/corporateChildren.jpg" style="width: 300px; height: 222px; display: block; margin-left: auto; margin-right: auto;" alt="Children"></a>
			<p style="text-align: center; color: #003366;">Children</p>
	
		</div>
	</body>
</html>



