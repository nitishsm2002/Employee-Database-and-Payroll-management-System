<?php include('depdataphp.php')?>
<!DOCTYPE html>
<html>
<title>DEPARTMENT PAGE</title>
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
    <h1>DEPARTMENT DATA</h1>
  </div>
</div>
 

<img src="images/banner.jpg"  style="width:100%">

<div class="w3-container">
 
  <P> 
       <a href="department-add.php" class="w3-button w3-blue w3-right">Add Department <span class="w3-text-red">+</span></a>
       </P>     
  <table class="w3-table w3-striped">
  <tr><th>Department id</th><th>Department Name</th><th colspan="2">Action</th></tr>
           <?php while($row=mysqli_fetch_array($result)) {?>
           <tr>
               <td><?php echo $row['Depart_id']; ?></td>
               <td><?php echo $row['Depart_name']; ?></td>
              
               <td><a href="dep-deletephp.php?del=<?php echo $row['Depart_id']; ?>" class="w3-button w3-red">Delete</a></td>
           </tr>
           <?php } ?>
     </div>
           </table>
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



 

  
 
      
          
   