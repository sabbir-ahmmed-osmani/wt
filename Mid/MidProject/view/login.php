<!DOCTYPE html>
<html>
<head>
  <title>Log In</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

  <div style="display:inline-block;">
    <?php include 'header.php' ?>
  </div>
   <div>
    <h2>Login</h2>
   <br />
   <form action = "/Find_Your_Job/controller/action_login.php" method = "POST">
      <div>
         <label for="username"><b>Username</b></label>
         <input type="text" name="username"/>
         
      </div>
      <br /><br />
      <div>
         <label for="psw"><b>Password</b></label>
         <input type="password" name="psw"/>

      </div>
      <br /><br />
      <div>
         <button type="button" onClick="document.location.href='/Find_Your_Job'">Cancel</button>
         <button type="button" onClick="document.location.href='/Find_Your_Job/view/signup.php'">Sign Up</button>
         <input type="submit" value=" Submit"/>
      </div>
   </form>

    <div>
    <?php include 'footer.php' ?>
  </div>
</body>
</html>
