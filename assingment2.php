
<form name="calculator"  method="GET">
    
     <b>First Number:</b>   <input type="text" name="firstnum" placeholder="Enter first number" required><br>
    <b>Second Number:</b>  <input type="text" name="secondnum"  placeholder="Enter second number" required><br>
           <b>Operator:</b> <input type="text" name="operator" size="1"  required><br>
           <input type="submit" name="cal" value="Calculate" style="height :25px;width: 100px;"><br>
      <br><b>Result is:<b>
</form>

<?php
if(isset($_GET['cal'])){
   
$fnum = $_GET['firstnum'];
$snum = $_GET['secondnum'];
$opr= $_GET['operator'];
if($opr == "+")

  echo $fnum+ $snum;

elseif($opr == "-")

  echo $fnum-$snum;

elseif($opr == "*")

    echo $fnum*$snum;

elseif($opr == "/")

       echo $fnum/ $snum;

elseif($opr == "%")

    echo $fnum% $snum;

else
   echo "invalid operator";
}
  ?>
