
<!-- saved from url=(0026)http://my.gcd.ie/login.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Create Student - Griffith Student Sectioner</title>
	
	<script type="text/javascript" src="./theme/flyintext.js"></script>
	<script type="text/javascript" src="./theme/boxover.js"></script>
	<script type="text/javascript" src="./theme/focus.js"></script>
  <link rel="stylesheet" href="theme/stylesheet.css">


</head>

<body marginwidth="0" marginheight="0" id="template">

  <table width="100%" height="100%&quot;" cellspacing="0" style="top: 0px;">
    <tbody><tr bgcolor="#555555" height="10">
    <td>
			<div id="headerbg">
				<div id="header"></div>
			</div>	
   </td>
   </tr>
   <tr bgcolor="#000000" height="1"><td></td></tr>
   <tr><td bgcolor="#ffffff" align="center" valign="top">

		<br>

    <!-- PAGE CONTENT STARTS HERE -->

<h2>Student Sectioning Program</h2><!-- login box -->
<br>
<font color="#8e0c08" size="3"><b>Student Created</b></font>
<img src="./theme/info.gif" title="header=[New Student]body=[Student has been created successfully]">
<br>
<br>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td align="center">
			<div class="loginheadercorners">
				<font color="#FFFFFF" size="3" face="Verdana, Arial, Helvetica, sans-serif">
					Student Created Successfully				</font>
				</div>
		</td>
  </tr>
  <tr>
    <td>
		<div class="loginmaincorners">
<br /><br /><br/>      


<?php

//The Function File
include 'functions.php';



//clears table for new use
mysql_query("DELETE FROM schedule");

$class1 = $_POST["ClassName1"];
$class2 = $_POST["ClassName2"];
$class3 = $_POST["ClassName3"];
$class4 = $_POST["ClassName4"];
$class5 = $_POST["ClassName5"];
$class6 = $_POST["ClassName6"];
$middlename = $_POST['middlename'];

if ($_POST["firstname"]){
	$firstname = $_POST['firstname'];
	
}

if ($_POST["lastname"]){
	$lastname = $_POST['lastname'];
}

if ($_POST["studentid"]){
	$studentid = $_POST['studentid'];
}

if ($firstname && $lastname && $studentid)
{

createschedule($class1, $class2, $class3, $class4, $class5, $class6); //creates optimal schedule

createstudent($firstname, $middlename, $lastname, $studentid, $class1, $class2, $class3, $class4, $class5, $class6); //creates a student in the STUDENT table

createstudentchoices($studentid, $class1, $class2, $class3, $class4, $class5, $class6);

updatestudentchoices($studentid); //Updates students to show which classes are currently scheduled


echo "<b>".$firstname." ".$middlename." ".$lastname."</b>, your student info and schedule has been added to the database. <br />";
echo "<a href='viewstudent.php?studentid=$studentid'>Click here to view your schedule.</a>";


mysql_close($con);
}

else {
	echo "Sorry, you did not fill out all of the fields. Please go back and check to make sure you have filled out all of the fields.";
	echo "<br /><a href='createstudentform.php'><--Click here to go back to the form</a><br /><br />";
}
?>
				
				</p>
      </form>
      <div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b>

			</b></font><br><br></div>
		</div>
    </td>
  </tr>
</tbody></table>

	<script type="text/javascript">
		set_focus();
	</script>

	<!-- PAGE CONTENT ENDS HERE -->
  
		<br>

    </td></tr>
    <tr bgcolor="#000000" height="1">
    <td></td>
    </tr>
    <tr bgcolor="#555555" height="100"><td align="right"><img src="./theme/footer.png">&nbsp;</td></tr>
  </tbody></table>








</body>
</html>