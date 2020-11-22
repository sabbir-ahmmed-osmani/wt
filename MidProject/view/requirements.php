<!DOCTYPE html>
<html>
<head>
  <title>Requirements</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

  <div style="display:inline-block;">
    <?php include 'header.php' ?>
  </div>

  <form action="/Find_Your_Job/controller/action_requirements.php" method="POST">
  <div>
    <h2>Requirements</h2>
    <p>Add some requirements for your job.</p>
    <br />


    <div>
      <label for="company_name"><b>Company_Name</b></label>
      <input type="text" placeholder="Enter company_name" name="company_name">
    </div>

    <br />

    <div>
      <label for="job_post"><b>Job_Post</b></label>
      <input type="text" placeholder="Enter job_post" name="job_post">
    </div>

    <br />

    <div>
      <label for="responsibilities"><b>Responsibilities</b></label>
      <input type="text" placeholder="Enter responsibilities" name="responsibilities">
    </div>

    <br />

    <div>
      <label for="salary"><b>Salary</b></label>
      <input type="text" placeholder="Enter salary" name="salary">
    </div>

    <br />

    <div>
      <label for="educational_background"><b>Educational_Background</b></label>
      <input type="text" placeholder="Enter educational_background" name="educational_background">
    </div>

    <br />

    <div>
      <label for="job_experience"><b>Job_Experience</b></label>
      <input type="text" placeholder="Enter job_experience" name="job_experience">
    </div>

    <br />

    <div>
      <label for="vacancy"><b>Vacancy</b></label>
      <input type="text" placeholder="Enter vacancy" name="vacancy">
    </div>

    <br />

    <div>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email">
    </div>

    <br />

    <div>
      <label for="phone"><b>Phone</b></label>
      <input type="text" placeholder="Enter phone" name="phone">
    </div>

    <br />



    <div>
      <button type="button" onClick="document.location.href='/Find_Your_Job/view/home.php'">Cancel</button>
      <button type="submit" onClick="document.location.href='/Find_Your_Job/view/myjobs.php'">Submit</button>
      
    </div>
  </div>
</form>

 <div>
    <?php include 'footer.php' ?>
  </div>
</body>
</html>
