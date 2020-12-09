<!DOCTYPE html>
<html>
<head>
  <title>Requirements</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php

$company_name = $job_post = $responsibilities = $salary = $educational_background = $job_experience = $vacancy = $email = $phone = "";
$company_nameErr = $job_postErr = $responsibilitiesErr = $salaryErr = $educational_backgroundErr = $job_experienceErr = $vacancyErr = $emailErr = $phone_Err = "";
$requirements_status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = 0;
  if (isset($_POST["company_name"]) & !empty($_POST["firstname"])) {
    $company_name = test_input($_POST["company_name"]);
  }
  else {
    $company_nameErr = "Invalid company_name";
    $counter = $counter + 1;
  }

  if (isset($_POST["job_post"]) & !empty($_POST["job_post"])) {
    $job_post = test_input($_POST["job_post"]);
  }
  else {
    $job_postErr = "Invalid job_post";
    $counter = $counter + 1;
  }

  if (isset($_POST["responsibilities"]) & !empty($_POST["responsibilities"])) {
    $responsibilities = test_input($_POST["responsibilities"]);
  }
  else {
    $responsibilitiesErr = "Invalid responsibilities";
    $counter = $counter + 1;
  }

  if (isset($_POST["salary"]) & !empty($_POST["salary"])) {
    $salary = test_input($_POST["salary"]);
  }
  else {
    $salaryErr = "Invalid salary";
    $counter = $counter + 1;
  }

  if (isset($_POST["educational_background"]) & !empty($_POST["educational_background"])) {
    $educational_background = test_input($_POST["educational_background"]);
  }
  else {
    $educational_backgroundErr = "Invalid educational_background";
    $counter = $counter + 1;
  }

  if (isset($_POST["job_experience"]) & !empty($_POST["job_experience"])) {
    $job_experience = test_input($_POST["job_experience"]);
  }
  else {
    $job_experienceErr = "Invalid job_experience";
    $counter = $counter + 1;
  }

  if (isset($_POST["vacancy"]) & !empty($_POST["vacancy"])) {
    $vacancy = test_input($_POST["vacancy"]);
  }
  else {
    $vacancyErr = "Invalid vacancy";
    $counter = $counter + 1;
  }

  if (isset($_POST["email"]) & !empty($_POST["email"])) {
    $email = test_input($_POST["email"]);
  }
  else {
    $emailErr = "Invalid email";
    $counter = $counter + 1;
  }

  if (isset($_POST["phone"]) & !empty($_POST["phone"])) {
    $phone = test_input($_POST["phone"]);
  }
  else {
    $phone_Err = "Invalid phone";
    $counter = $counter + 1;
  }

  if($counter == 0) {
    $requirements_status = "job created";

    $user = fopen("../data/users.txt", "w") or die("Unable to open file!");
    fwrite($user, $company_name. "," . $job_post. ",". $responsibilities. ",". $salary. ",". $educational_background. ",". $job_experience. ",". $vacancy. ",". $email. ",". $phone);
    fwrite($user, "\n");
    fclose($user);
  }
  else {
    $requirements_status = "Job creation Failed";
    $counter = 0;
  }
}
else {
	$requirements_status = "Job creation Failed";
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
    <h2>Requirements</h2>
    <p>Please fill in this form to create a job.</p>
    <br />

    <div>
      <label for="company_name"><b>Company_Name</b></label>
      <input type="text" placeholder="Enter your company_name" name="company_name">
      <span><?php echo $company_nameErr;?></span>
    </div>

    <br />

    <div>
      <label for="job_post"><b>Job Post</b></label>
      <input type="text" placeholder="Enter your job_post" name="job_post">
      <span><?php echo $job_postErr;?></span>
    </div>

    <br />

    <div>
      <label for="responsibilities"><b>Responsibilities</b></label>
      <input type="text" placeholder="Enter responsibilities" name="responsibilities">
      <span><?php echo $responsibilitiesErr;?></span>
    </div>

    <br />

    <div>
      <label for="salary"><b>Salary</b></label>
      <input type="salary" placeholder="Enter salary" name="salary">
      <span><?php echo $salaryErr;?></span>
    </div>

    <br />
    
    <div>
      <label for="educational_background"><b>Educational Background</b></label>
      <input type="text" placeholder="educational_background" name="educational_background">
      <span><?php echo $educational_backgroundErr;?></span>
    </div>

    <br />

    <div>
      <label for="job_experience"><b>Job Experience</b></label>
      <input type="text" placeholder="job_experience" name="job_experience">
      <span><?php echo $job_experienceErr;?></span>
    </div>

    <br />

    <div>
      <label for="vacancy"><b>Vacancy</b></label>
      <input type="text" placeholder="vacancy" name="vacancy">
      <span><?php echo $vacancyErr;?></span>
    </div>

    <br />

    <div>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="email" name="email">
      <span><?php echo $emailErr;?></span>
    </div>

    <br />

    <div>
      <label for="phone"><b>Phone</b></label>
      <input type="text" placeholder="phone" name="phone">
      <span><?php echo $phone_Err;?></span>
    </div>

    <br />


    <div>
      <button type="button" onClick="document.location.href='/Find_Your_Job/view/home.php'">Cancel</button>
      <button type="submit" onClick="document.location.href='/Find_Your_Job/view/myjobs.php'">Submit</button>
      
    </div>
  </div>
</form>

<br />

<?php 
  echo $requirements_status;
?>

 <div>
    <?php include '../view/footer.php' ?>
  </div>
</body>
</html>
