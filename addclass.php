
<!-- saved from url=(0026)http://my.gcd.ie/login.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Add Class - Griffith Student Sectioner</title>
	
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
<font color="#8e0c08" size="3"><b>Added Extra Class?</b></font>
<img src="./theme/info.gif" title="header=[New Student]body=[Successfully added an extra class]">
<br>
<br>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td align="center">
			<div class="loginheadercorners">
				<font color="#FFFFFF" size="3" face="Verdana, Arial, Helvetica, sans-serif">
					Extra Class Added Successfully			</font>
				</div>
		</td>
  </tr>
  <tr>
    <td>
		<div class="loginmaincorners">
<br /><br /><br/>      
<?php 
include 'functions.php';

$classcode = $_POST['alternatives'];
$studentid = $_GET['studentid'];

$result = mysql_query("SELECT * FROM students WHERE StudentID='$studentid'");
while($row = mysql_fetch_array($result)) {
	$studentname = $row['FirstName'];
}

$result2 = mysql_query("SELECT * FROM classids WHERE SubjectCode='$classcode'");
while($row = mysql_fetch_array($result2))
  	{
  		$classname = $row['ClassName'];
  	}
  	
mysql_query("INSERT INTO studentchoices (StudentID, SubjectCode, ClassName, ChoiceNumber, isScheduled)
			 VALUES ('$studentid','$classcode', '$classname', 'Alternative', 'Yes')");

echo "Your new choice has been added to the schedule. <br />";
echo "<a href='viewstudent.php?studentid=$studentid'>Click here to go back</a>";

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