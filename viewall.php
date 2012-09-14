
<!-- saved from url=(0026)http://my.gcd.ie/login.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>View All Students - Griffith Student Sectioner</title>
	
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
<font color="#8e0c08" size="3"><b>View All Students</b></font>
<img src="./theme/info.gif" title="header=[New Student]body=[Here you can see all student's currently in the database]">
<br>
<br>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td align="center">
			<div class="loginheadercorners">
				<font color="#FFFFFF" size="3" face="Verdana, Arial, Helvetica, sans-serif">
					New Student Form				</font>
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


echo "These are all of the students that are currently in the database.";
echo "<br />You may click to view and edit their schedule.<br /><br />";

$result = mysql_query("SELECT *	FROM students GROUP BY LastName");

echo "<table border='1'>
<tr>
<th>First Name</th>
<th>Last Name</th>

<th>Student ID</th>
<th>Schedule</th>
</tr>";


while($row = mysql_fetch_array($result)) {
  	$studentid = $row['StudentID'];
	echo "<tr>";
	echo "<td>" . $row['FirstName'] . "</td>";
	echo "<td>" . $row['LastName'] . "</td>";
	echo "<td>" . $row['StudentID'] . "</td>";
	echo "<td>" ."<a href='viewstudent.php?studentid=$studentid'>Schedule</a>". "</td>";  
	echo "</tr>";
	
}

?>


<br />
Delete a Student
<br />
<form action="deletestudent.php" method="get">
Student ID: <input type='text' name='studentid' />
<input type='submit' value='Delete Student' />
</form>

<br />
				
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


