<?php
include('emp-up-deletephp.php');

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    //echo $id;
    $rec = mysqli_query($connection, "SELECT * FROM employee WHERE Employee_id=$id;");
    $record=mysqli_fetch_array($rec);
    
$name=$record['Name'];
$dob=$record['d_birth'];
$gender=$record['gender'];
$sdate=$record['Start_date'];
$email=$record['Email'];
$phone=$record['Phone_no'];
$loan=$record['loan'];
$pfund=$record['pfund'];
$salary=$record['salary'];
$jobtitle=$record['jobtitle'];
$address=$record['Address'];
$depid=$record['Depart_id'];
$manid=$record['managesDepart_id'];
$bacc=$record['b_accno'];
    
}
?>
<!DOCTYPE html>
<html>
<title>EDITEMPLOYEE PAGE</title>
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
    <h1>UPDATE EMPLOYEE </h1>
    <?php
    echo "WITH EMPLOYEE ID:$id";
    ?>
  </div>
</div><div class="w3-container">
           
<div class="w3-container" style="padding: 50px 200px 20px 200px">
<form class="w3-panel w3-card-4" action="em-updatephp.php" method="post">
    
<p>
                      <input class="w3-input w3-light-grey w3-animate-input" type="hidden" name="empid" value="<?php echo $id;?>"></p>
                 <p>
                     <label>Name</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="text" name="name" value="<?php echo $name;?>">
                </p>
                <p>
                        <label>Date of Birth</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="date" name="dob" value="<?php echo $dob;?>">
                </p>
                <p>
                        <label>Gender</label><br>
                        <input class="w3-radio" type="radio" name="gender" value="male" checked> Male<br>
                        <input class="w3-radio" type="radio" name="gender" value="female"> Female<br>
                        
                </p>
                <p>
                        <label>Joining date</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="date" name="sdate" value="<?php echo $sdate;?>">
                </p>
              
                 <p>
                     <label>Email</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="email" name="email" value="<?php echo $email;?>"></p>
                 <p>
                     <label>Phone</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="text" name="phone" value="<?php echo $phone;?>"></p>
              <p>
                     <label>Loan</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="number" name="loan" value="<?php echo $loan;?>"></p>
              <p>
                     <label>Provident fund
                                       </label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="number" name="pfund" value="<?php echo $pfund;?>"></p>
               <p>
                     <label>Salary
                                       </label>
                       <input class="w3-input w3-light-grey w3-animate-input" type="number" name="salary" value="<?php echo $salary;?>"></p>
          <p><label>Bank Account No</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="number" name="bacc" value="<?php echo $bacc;?>"></p>
          
                      <label>Jobtitle</label>
                 <select class="w3-input w3-light-grey w3-animate-input" name="jobtitle" value="<?php echo $jobtitle;?>">
                  <option value="executive">Executive</option>
                   <option value="manager">Manager</option>
                   <option value="director">Director</option>
                    <option value="accountant">Accountant</option>
                      <option value="chief">Chief</option>
              </select>
                 <p>
                     <label>Address</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="text" name="address" value="<?php echo $address;?>">
                </p>
                 
                    <p><label>Employee Department</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="number" name="depid" value="<?php echo $depid;?>"></p>
           <p><label>Manager id</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="number" name="manid" value="<?php echo $manid;?>"></p>
                 
                 <P> 
                     <input type="submit" value="Update" class="w3-input w3-green w3-round-xxlarge w3-animate-input w3-hover-blue">
                     </P>   
       
                 
               
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
