<!DOCTYPE html>
<html>
<head>
  <title>My Jobs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

  <div style="display:inline-block;">
    <?php include 'header.php' ?>
  </div>

  <form action="/Find_Your_Job/controller/action_myjobs.php" method="POST">
  <div>
    <h2>My Jobs</h2>
    <br />

  <div>
    <h2 align="Center">My Job List</h2>
    
      <p align="left">1. SAO foils ltd.</br> 
        Assistant Manager, Everything that a smart assistant manager does, 25 thosand taka with 2 yearly bonus, Masters in Business Studies, Minimum2 years of experience, vacancy: 2,For any info: sajedulislam@gmail.com, 01917283187
      </p>

      <p align="left">2. akij group ltd.</br> 
        Safety Engineer, Everything that a smart Safety Engineer does, 20 thosand taka with 2 yearly bonus, BSc in EEE, Minimum 2 years of experience, vacancy: 5,For any info: sahadat@gmail.com, 01917283187
      </p>


      <p align="left">3. Forever green ltd.</br> 
        Accountant, Everything that a smart accountant does, 30 thosand taka with 2 yearly bonus, Masters in Business Studies, Minimum 2 years of experience, vacancy: 1,For any info: sabbir@gmail.com, 01917283187
   </div>   

   

    <div>
      <button type="button" onClick="document.location.href='/Find_Your_Job/view/home.php'">Go Home</button>
    </div>
  </div>
</form>

 <div>
    <?php include 'footer.php' ?>
  </div>
</body>
</html>
