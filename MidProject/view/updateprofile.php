<!DOCTYPE html>
<html>
<head>
  <title>Update Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

  <div style="display:inline-block;">
    <?php include 'header.php' ?>
  </div>

  <form action="/Find_Your_Job/controller/action_updateprofile.php" method="POST">
  <div>
    <h2>Update Profile Information</h2>
    <p>Please fill in this form to update your profile information.</p>
    <br />

    <div>
      <label for="firstname"><b>First Name</b></label>
      <input type="text" placeholder="Enter your firstname" name="firstname">
    </div>

    <br />

    <div>
      <label for="lastname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter your lastname" name="lastname">
    </div>

    <br />

    <div>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email">
    </div>

    <br />

    <div>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw">
    </div>

    <br />
    
    <div>
      <label for="psw_repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw_repeat">
    </div>

    <br />

    <div>
      <button type="button" onClick="document.location.href='/Find_Your_Job/view/home.php'">Go Home</button>
      <button type="update" onClick="document.location.href='/Find_Your_Job/view/home.php'">Update</button>
    </div>
  </div>
</form>

 <div>
    <?php include 'footer.php' ?>
  </div>
</body>
</html>
