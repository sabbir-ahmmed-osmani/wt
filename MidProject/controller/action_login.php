<div style="display:inline-block;">
    <?php include '../view/header.php' ?>
  </div>
  
<?php 
  $username = $psw = "";
  $usernameErr = $pswErr = "";
  $login_status = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $counter = 0;
      if (isset($_POST["username"]) & !empty($_POST["username"])) {
       $username = $_POST["username"];
      }

      else {
        $usernameErr = "Invalid username";
        $counter = $counter + 1;
      }
      if (isset($_POST["psw"]) & !empty($_POST["psw"])) {
       $psw = $_POST["psw"];
      }
      else {
        $pswErr = "Invalid password";
        $counter = $counter + 1;
      }

      $userFound = false;

      $myfile = fopen("../data/users.txt", "r") or die("Unable to open file!");

          while ($line = fgets($myfile)) {
            $words = explode(",",$line);
            if(strcmp($username,$words[2]) == 0 && strcmp($psw."\n",$words[3]) == 0 ) {
              $userFound = true;
            }
          }
          fclose($myfile);

        
          if($userFound == false) {
            $counter = $counter + 1;
          }

          if($counter == 0) {
            echo "<p>Login Successful</p>";

            echo "<a href='../view/home.php'>Home</a>";
          }
          else {
            echo "<p>Login Unsuccessful or Invalid username/password!</p>";
            echo "<a href='../view/login.php'>Try Again!</a>";
          }
      
    }

?>
<?php
if ($userFound){
  session_start();
  $_SESSION["id"] = $username;
}
  else{
    echo "<br/> <br/>username or password  incorrect";
  }
?>


 <div>
    <?php include '../view/footer.php' ?>
  </div>
