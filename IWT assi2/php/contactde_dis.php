<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Us </title>
    <link rel = "stylesheet" href = "styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .Contact-in
    {
      font-size: 15px;
      margin-right: 50%;
      margin-left: 20%;
      font-size: 20px;
      margin-bottom: 10%;
    }
    .Form-input{
    font-size: 20px;
    width: 400px;
    height: 40px;
    }
    .Form-button{
    font-size: 20px;
    width: 200px;
    height: 50px;
    margin-left: 20%;
    cursor: pointer;
    border-radius: 20px;
    transition: 0.3s ease;
    }
    .Form-button:hover{
        background-color: #FF6600;
    }
    </style>
</head>
<body>
    
       <div class = "Contact-in">
          <h2>DELETE DATA </h2><br>
          <form method="post" action="contact_delete.php">
            <input type = "text" name="CID" placeholder="Enter your ID" required class = "Form-input"><br><br>
            <input type = "submit" value = "Submit" class = "Form-button">
          </form>
       </div>
</body>
</html>