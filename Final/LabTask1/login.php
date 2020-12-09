<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
     
    <form method="POST" action="#" >
        <input type="text" name="name" >  
        <input type="text" name="password" p> 
        <input type="submit" name="submit" value="Login">
    </form>
    
    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $password= $_POST['password'];

            $sql = "Select * from user where name = '$name' and password='$password'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)){
               echo "login done";
            
            }
            else
            {
                echo "Login failed!";
            }
        }
    ?>
</body>
</html>
