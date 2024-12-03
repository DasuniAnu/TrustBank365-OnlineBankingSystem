
<?php
if(isset($_POST['Full_Name'], $_POST['E-mail'], $_POST['Subject'], $_POST['Message']))
{
    $Name = $_POST['Full_Name'];
    $email = $_POST['E-mail'];
    $sub = $_POST['Subject'];
    $msg= $_POST['Message'];
    

    $conn = new mysqli('localhost', 'root','', 'online banking');
        if ($conn->connect_error) {
            die("Connection failed: " .$conn->connect_error);
        }
        else
        {
            $details = $conn->prepare("insert into contact_us (Full_Name, Email, Subject, Message) 
            values(?, ?, ?, ?)");
            $details->bind_param("ssss", $Name, $email, $sub, $msg);

            $details->execute();
            header("Location:contactdisplay.php");
    echo"<script>alert('record inserted Successfully')</script>";
            $details->close();



        }
    }
    

?>
