<!DOCTYPE html>
<html>
<title>DASHBOARD PAGE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-black w3-large"
  onclick="w3_close()">Close &times;</button>
   
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
    <h1>PAYROLL SYSTEM</h1>
  </div>
</div>

<img src="images/home.jpg"  style="width:100%">

<div class="w3-container">
 
 </div>

</div>

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



 