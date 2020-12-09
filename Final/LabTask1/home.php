<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  

<form method="POST" action="#">
    <input type="text" name="amount" >
    <input type="submit" name="submit" value="Deposit">
</form>

<?php
        if(isset($_POST['submit'])){
            $amount = $_POST['amount'];           
            
        }
    ?>

</body>
</html>
