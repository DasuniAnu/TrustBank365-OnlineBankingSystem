<?php

$username = $_POST['un'];//class name of this input is un 
$password =$_POST['pw'];//class name of this input is pw

$con = new mysqli("localhost","root","","online banking");//database name
if($con->connect_error)
{
  die("Failed to connect: ".$con->connect_error);
}

else {
  $name=$con->prepare("SELECT * from signin where Username=?");//tablename
  $name->bind_param("s",$username);
  $name->execute();
  $name_result = $name->get_result();
  if($name_result -> num_rows > 0)
  {
    $data = $name_result->fetch_assoc();

    if($data['Password']==$password)
    {
      echo 'Login Successfully....';
    }
    else
    {
      echo "Invalid username or password....";
    }
  }


}

?>