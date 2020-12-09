<!DOCTYPE html>

<?php
$cookie_name = "anonymoususer1";
$cookie_value = "demo";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

$myfile = fopen("data/cookies.txt", "w") or die("Unable to open file!");
fwrite($myfile, $cookie_name . " " . $cookie_value . " ");
fclose($myfile);
?>

<html>
<head>
  <title>Find_Your_Job</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div style="display:right;">
    <?php include 'view/header.php' ?>
  </div>
  <div style="display:right;">
    <nav>
      <a href="view/signup.php">Sign Up</a> |
      <a href="view/login.php">Login</a>
    </nav>
  </div>
  <div>
  </div>

  <div>
    <ol> 
    <?php
      $myfile = fopen("data/products.txt", "r") or die("Unable to open file!");
      #echo fread($myfile, filesize("data/products.txt"));
      while ($line = fgets($myfile)) {
        echo "<li>".$line."</li><button>Add to cart</button>";
      }
      fclose($myfile);
    ?> 
    </ol>
  </div>

  <div>
    <?php include 'view/footer.php' ?>
  </div>
</body>
</html>
