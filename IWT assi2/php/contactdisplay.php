<?php
include_once 'connection.php';
?>
<!doctype html>
<html lang = "en">
    <head>
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
            <head>
    <meta charset="UTF-8">
    <title>Contact Us </title>
    <link rel = "stylesheet" href = "styles.css">
    <link rel = "stylesheet" href = "Reg.CSS.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
        
        <table>
            <thead>
            <tr>
                <th>CID</th>
                <th>Full_Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Operation</th>
           </tr>
        </thead>

<tbody>
<?php
$sql ="SELECT * FROM contact_us";
$result = mysqli_query($conn,$sql);
 
  while($row =mysqli_fetch_assoc($result))
  {
    echo"<tr><td>".$row['CID'].
    "</td><td>".$row['Full_Name'].
    "</td><td>".$row['Email'].
    "</td><td>".$row['Subject'].
    "</td><td>".$row['Message'].
    "</td><td><button><a href=\"contactup_dis.php\">Update</a></button><br><br>
    <button><a href= \"contactde_dis.php\">Delete</a></button></td></tr>";

  }
  mysqli_close($conn);
  ?>
  </tbody>
  </table>
  </div>
  </body>
  </html>
  


