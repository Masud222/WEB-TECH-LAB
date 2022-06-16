<?php
$isPost=false;

$username = $password = $gender = $skill = $department = $address= "";


if(isset($_POST["btnlogin"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];

		if($_POST["pass"]!="")
		$password=$_POST["pass"];

		



	//echo "button clicked!";
}
if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

if (empty($_POST["department"])) {
    $departmentErr = "Department is required";
  } else {
    $departemnt = test_input($_POST["department"]);
  }

  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

  function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }
?>
<form action="#" method="post">
Username:<input type="text" id="uname" name="uname">

<?php
if($isPost==true && $username=="")
{
	echo "<span style='color:red;'><small>User Name required</small></span>";
}
?>

<br><br>
Password:<input type="password" id="pass" name="pass">
<?php
if($isPost==true && $password=="")
{
	echo "<span style='color:red;'><small>Password is required</small></span>";
}
?>
<br><br>
Gender:<input type="radio" id="gender" name="gender" value="Male">Male
<input type="radio"  id="gender" name="gender" value="Female">Female
<input type="radio"  id="gender" name="gender" value="Others">Others
<?php
if($isPost==true && $gender=="")
{
	echo "<span style='color:red;'><small>Gender is required</small></span>";
}
?>
<br><br>
Skills:<input type="checkbox" name="skill[]" value="C">C
<input type="checkbox" name="skill[]" value="C++">C++
<input type="checkbox" name="skill[]" value="C#">C#
<input type="checkbox" name="skill[]" value="Python">Python
<?php
if($isPost==true && $skill=="")
{
	echo "<span style='color:red;'><small>Skill is required</small></span>";
}
?>
<br><br>
Department:<select name="department">

<option value="cse">CSE</option>
<option value="eee">EEE</option>
<option value="bba">BBA</option>
</select>
<?php
if($isPost==true && $department=="")
{
	echo "<span style='color:red;'><small>Deaparment is required</small></span>";
}
?>
<br><br>
Address:<textarea name="address" rowspan="4" colspan="30"></textarea>
<?php
if($isPost==true && $address=="")
{
	echo "<span style='color:red;'><small>Address is required</small></span>";
}
?>

<br><br>
<input type="submit" value="Log in" name="btnlogin">
</form>