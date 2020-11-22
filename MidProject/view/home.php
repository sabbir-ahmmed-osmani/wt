<!DOCTYPE html>
<?php
   session_start();
?>

<html>
<head>
  <title>Find_Your_Job</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div style="display:inline-block;">
    <?php include 'header.php' ?>
  </div>

    <div>
      <p align="left">Best way to get your desired employee.</p>
    </div>  

     <p align="right">
       <input type="button" onClick="document.location.href='/Find_Your_Job'" value="Log Out" />
    </p>

<div>
<p> Welcome <span><?php echo $_SESSION["id"] ?> </span></p>
</div>   

   
   	<div style="display:left;">
    <nav>
      <ul>
         <li><a href="home.php">Home</a></li>
         <li><a href="myjobs.php">My Jobs</a></li>
         <li><a href="updateprofile.php">Update Profile</a></li>
      </ul>
    </nav>
  </div>


   <div>
    <h2 align="Center">Notice_Board</h2>
    <p align="center">We want to remind all of you that the public Health Officials state that the risk of contracting the virus is low at this time. However, to help you protect yourself from possible infections, Health Officials recommend you:</p>
    	<p align="center">1. Wash your hands frequently and properly with soap and water.</p>
    	<p align="center">2. Don't forget to wear mask.</p>
    	<p align="center">3. Try to use alcohol-based hand sanitizer and avoid touching your nose,eyes and mouth when you are outside.</p>
   </div> 	


   <div>
      <button type="button" onClick="document.location.href='/Find_Your_Job/view/requirements.php'">Create_Jobs</button>
      <button type="button" onClick="document.location.href='/Find_Your_Job/view/cvlists.php'">CV_Lists</button>
      
    </div>
   
    

   
  <div>
    <?php include 'footer.php' ?>
  </div>
</body>
</html>
