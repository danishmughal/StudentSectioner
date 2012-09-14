
<!-- saved from url=(0026)http://my.gcd.ie/login.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>View Schedule - Griffith Student Sectioner</title>
	
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
<font color="#8e0c08" size="3"><b>View Student's Schedule</b></font>
<img src="./theme/info.gif" title="header=[New Student]body=[Here you can view the selected student's schedule]">
<br>
<br>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td align="center">
			<div class="loginheadercorners">
				<font color="#FFFFFF" size="3" face="Verdana, Arial, Helvetica, sans-serif">
					Schedule				</font>
				</div>
		</td>
  </tr>
  <tr>
    <td>
		<div class="loginmaincorners">
<br /><br /><br/>      

<?php 
include 'functions.php';

echo "<a href='index.php'><--Click here to go back to the Main Page</a><br /><br />";

//clear schedule 
mysql_query("DELETE FROM schedule");


$studentid = $_GET["studentid"];

$query = mysql_query("SELECT * FROM students WHERE studentID='$studentid'");
while ($a = mysql_fetch_array($query)) {
	$firstname = $a['FirstName'];
	$middlename = $a['MiddleName'];
	$lastname = $a['LastName'];
		
}

echo "<b>Student name: ".$firstname." ".$middlename." ".$lastname."</b><br />";
echo "<b>Student ID: ".$studentid."</b><br /><br />";

$result = mysql_query("SELECT * FROM studentchoices WHERE StudentID='$studentid' 
						AND isScheduled='Yes'");


while($row = mysql_fetch_array($result))  {
	$subjectcode = $row['SubjectCode'];
	mysql_query("INSERT INTO schedule SELECT * FROM classes 
				WHERE SubjectCode='$subjectcode'");
}

displayschedule('x');


//Counts how many subjects have been able to be scheduled --------
$counter = 0;
$result2 = mysql_query("SELECT distinct(SubjectCode) FROM schedule");
while($row = mysql_fetch_array($result2)) {
	$counter++;
}
//-------------------------------------------------------------------	

echo "<br /><br /><b>Total amount of unique subjects</b>: $counter possible out of 6 chosen.";

displayomitted($studentid);

echo "<br /><br /><b>These are the classes you can add to your schedule without any clashes:</b>";
echo "<br /><br />";


$resultc1 = mysql_query("SELECT * FROM studentchoices WHERE StudentID='$studentid' 
							AND ChoiceNumber='1'");
while($row = mysql_fetch_array($resultc1))  {
	$class1 = $row['SubjectCode'];
}


$resultc2 = mysql_query("SELECT * FROM studentchoices WHERE StudentID='$studentid' 
							AND ChoiceNumber='2'");
while($row = mysql_fetch_array($resultc2))  {
	$class2 = $row['SubjectCode'];
}


$resultc3 = mysql_query("SELECT * FROM studentchoices WHERE StudentID='$studentid' 
							AND ChoiceNumber='3'");
while($row = mysql_fetch_array($resultc3))  {
	$class3 = $row['SubjectCode'];
}


$resultc4 = mysql_query("SELECT * FROM studentchoices WHERE StudentID='$studentid' 
							AND ChoiceNumber='4'");
while($row = mysql_fetch_array($resultc4))  {
	$class4 = $row['SubjectCode'];
}


$resultc5 = mysql_query("SELECT * FROM studentchoices WHERE StudentID='$studentid' 
							AND ChoiceNumber='5'");
while($row = mysql_fetch_array($resultc5))  {
	$class5 = $row['SubjectCode'];
}


$resultc6 = mysql_query("SELECT * FROM studentchoices WHERE StudentID='$studentid' 
							AND ChoiceNumber=6");
while($row = mysql_fetch_array($resultc6))  {
	$class6 = $row['SubjectCode'];
}

$resulta1 = mysql_query("SELECT * FROM students WHERE StudentID='$studentid'
							AND  ");

selectalternativeclasses($counter, $class1, $class2, $class3, $class4, $class5, $class6, $studentid);

mysql_close($con);


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


