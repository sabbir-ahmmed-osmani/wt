<!DOCTYPE html>
<html>
<head>
  <title>Update Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php

$firstname = $lastname = $email = $psw = $psw_repeat = "";
$firstnameErr = $lastnameErr = $emailErr = $pswErr = $psw_repeatErr = "";
$signup_status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = 0;
  if (isset($_POST["firstname"]) & !empty($_POST["firstname"])) {
    $firstname = test_input($_POST["firstname"]);
  }
  else {
    $firstnameErr = "Invalid FirstName";
    $counter = $counter + 1;
  }

  if (isset($_POST["lastname"]) & !empty($_POST["lastname"])) {
    $lastname = test_input($_POST["lastname"]);
  }
  else {
    $lastnameErr = "Invalid LastName";
    $counter = $counter + 1;
  }

  if (isset($_POST["email"]) & !empty($_POST["email"])) {
    $email = test_input($_POST["email"]);
  }
  else {
    $emailErr = "Invalid Email";
    $counter = $counter + 1;
  }

  if (isset($_POST["psw"]) & !empty($_POST["psw"])) {
    $psw = test_input($_POST["psw"]);
  }
  else {
    $pswErr = "Invalid Password";
    $counter = $counter + 1;
  }

  if (isset($_POST["psw_repeat"]) & !empty($_POST["psw_repeat"])) {
    $psw_repeat = test_input($_POST["psw_repeat"]);
  }
  else {
    $psw_repeatErr = "Invalid Password Repeat";
    $counter = $counter + 1;
  }

  if($counter == 0) {
    $updateprofile_status = "Profile Information Updated";

    $user = fopen("../data/users.txt", "w") or die("Unable to open file!");
    fwrite($user, $firstname. "," . $lastname. ",". $email. ",". $psw);
    fwrite($user, "\n");
    fclose($user);
  }
  else {
    $updateprofile_status = "Update Failed";
    $counter = 0;
  }
}
else {
	$updateprofile_status = "Update Failed";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<div style="display:inline-block;">
    <?php include '../view/header.php' ?>
  </div>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <div>
    <h2>Update Profile Information</h2>
    <p>Please fill in this form to update your profile information.</p>
    <br />

    <div>
      <label for="firstname"><b>First Name</b></label>
      <input type="text" placeholder="Enter your firstname" name="firstname">
      <span><?php echo $firstnameErr;?></span>
    </div>

    <br />

    <div>
      <label for="lastname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter your lastname" name="lastname">
      <span><?php echo $lastnameErr;?></span>
    </div>

    <br />

    <div>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email">
      <span><?php echo $emailErr;?></span>
    </div>

    <br />

    <div>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw">
      <span><?php echo $pswErr;?></span>
    </div>

    <br />
    
    <div>
      <label for="psw_repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw_repeat">
      <span><?php echo $psw_repeatErr;?></span>
    </div>

    <br />

    <div>
      <button type="button" onClick="document.location.href='/Find_Your_Job/view/home.php'">Go Home</button>
      <button type="submit" onClick="document.location.href='/Find_Your_Job/view/home.php'">Update</button>

    </div>
  </div>
</form>

<br />

<?php 
  echo $updateprofile_status;
?>



 <div>
    <?php include '../view/footer.php' ?>
  </div>
</body>
</html>
