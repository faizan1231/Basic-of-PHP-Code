<style>
  .frm {
    height: 400px;
    width: 400px;
    border: 3px black;
    margin-left: 50px;
    margin-top: 50px;
    padding-left: 30px;
    padding-top: 30px;
    padding-bottom: 20px;
    background-color: blueviolet;
    color: gray;
    
    text-align: center;
  }
 
  .tbl input[type="submit"]{
    background-color:whitesmoke;
    padding: 10px 20px;
    font-size: medium;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
   text-align: center;
  }
  h1{
    color:whitesmoke;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  }
  label {
      color: whitesmoke; /* Set the color to red */
      font-weight: bold;
    }

  .tbl {
    width: 100%;
  }

  .tbl td {
    padding: 15px;
  }
  .custom-textbox {
      width: 200px; /* Set the width of the textbox */
      height: 30px; /* Set the height of the textbox */
      padding: 5px; /* Optional: Add padding for better appearance */
      font-size: 14px;
  }
</style >
<center>
<form method="get" class="frm" >
    
  <table border="1" class="tbl">
    <caption><h1>Registration Form</h1></caption>
    <tr>
      <td><label> Name:</label></td>
      <td><input type="text" name="stname" style="height: 30px ; " placeholder="Enter Student Name" required></td>
    </tr>
    <tr>
      <td><label>Father Name:</label></td>
      <td><input type="text" name="fathername" style="height: 30px ; "placeholder="Enter Father Name" required></td>
    </tr>
    <tr>
      <td><label>Email:</label></td>
      <td><input type="email" name="email"style="height: 30px ; "placeholder="Enter Email" required></td>
    </tr>
    <tr>
      <td><label>CNIC:</label></td>
      <td><input type="text" name="cnic"style="height: 30px ; " placeholder="Enter CNIC"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="Submit" name="register" value="Submit" size="10"  width="50px" height="40"    style="background-color: blue;"></td>
    </tr>
    
  </table>
</form>
</center>


<table class="tbl" border="1">

<?php

if(isset($_GET['register']))
{
$sname=$_GET['stname'];
$fname=$_GET['fathername'];
$mail=$_GET['email'];
$cn=$_GET['cnic'];
echo  "<tr><td>"."Student Name:"."</td><td>".$sname."</td></tr>"."<br>" ; 
echo "<tr><td>"."Father Name:"."</td><td>". $fname."</td></tr>"."<br>"  ;
echo "<tr><td>"."Email:"."</td><td>".$mail."</td></tr>"."<br>";
echo "<tr><td>"."CNIC:"."</td><td>".$cn."</td></tr>"."<br>";
}
?>
</table>