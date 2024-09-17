<?php include('depdataphp.php')?>
<!DOCTYPE html>
<html>
<title>DASHBOARD PAGE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-black w3-large"
  onclick="w3_close()">Close &times;</button>
  <a class="w3-bar-item w3-button w3-black" href="home.php">HOME</a>
  <a class="w3-bar-item w3-button w3-black" href="department.php">DEPARTMENT</a>
  <a class="w3-bar-item w3-button w3-black" href="employee.php">EMPLOYEE</a>
  <a class="w3-bar-item w3-button w3-black" href="employee-payment.php">PAYMENT PARAMETERS</a>
  <a class="w3-bar-item w3-button w3-black" href="employee-payslip.php">PAY SLIP</a>
  <a class="w3-bar-item w3-button w3-black" href="employee-setsalary.php">SET SALARY</a>
  <a class="w3-bar-item w3-button w3-black" href="employee-payhistory.php">PAYMENT HISTORY</a>
  <a href="index.php"><Button class="w3-bar-item w3-button w3-black" > LOGOUT</Button></a>
</div>

<div id="main">

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()" id="openNav">&#9776;</button>
  <div class="w3-container">
    <h1>ADD EMPLOYEE</h1>
  </div>
</div>
 
 

 
<div class="w3-container">
           
      <div class="w3-container" style="padding: 50px 200px 20px 200px">
      <form class="w3-panel w3-card-4" action="empinfophp.php" method="post">
          
                 <p><label>Employee id</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="number" name="empid"></p>
                 <p>
                     <label>Name</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="text" name="name">
                </p>
                <p>
                        <label>Date of Birth</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="date" name="dob">
                </p>
                <p>
                        <label>Gender</label><br>
                        <input class="w3-radio" type="radio" name="gender" value="male" checked> Male<br>
                        <input class="w3-radio" type="radio" name="gender" value="female"> Female<br>
                        
                </p>
                <p>
                        <label>Joining date</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="date" name="sdate">
                </p>
              
                 <p>
                     <label>Email</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="email" name="email"></p>
                 <p>
                     <label>Phone</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="text" name="phone"></p>
              
             
          <label>Jobtitle</label>
                 <select class="w3-input w3-light-grey w3-animate-input" name="jobtitle">
                  <option value="executive">Executive</option>
                   <option value="manager">Manager</option>
                   <option value="director">Director</option>
                    <option value="accountant">Accountant</option>
                      <option value="chief">Chief</option>
              </select>
               <p>
                     <label>Salary
                                       </label>
                       <input class="w3-input w3-light-grey w3-animate-input" type="number" name="salary"></p>
          <p><label>Bank Account No</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="number" name="bacc"></p>
          
                      
                 <p>
                     <label>Address</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="text" name="address">
                </p>
                 
                    <p><label>Employee Department</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="number" name="depid"></p>
          
                 
                 <p>
                     <input type="submit" value="Submit" class="w3-input w3-green w3-round-xxlarge w3-animate-input w3-hover-blue">
</p>    
       
                 
               
            </form>
      
      
      
      </div>
   
      
<div class="w3-teal w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right"><a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity"></a></p></div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</body>
</html>



 

  
 
      
          
   