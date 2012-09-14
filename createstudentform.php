
<!-- saved from url=(0026)http://my.gcd.ie/login.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Create New Student - Griffith Student Sectioner</title>
	
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
<font color="#8e0c08" size="3"><b>Create New Student</b></font>
<img src="./theme/info.gif" title="header=[New Student]body=[Enter the student's information to continue]">
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
<br /><br />   
<a href='index.php'><--Click here to go back to the Main Page</a><br /><br />

<?php 
include 'functions.php';



$num = 1;

echo "Choose the classes that you want to take:<br />";
echo "<b>Please do not select one class more than once.</b><br /><br />";
echo "<form action='createstudentprocess.php' method='post'>";

echo "First Name: <input type='text' name='firstname' /><br />";
echo "Middle Name: <input type='text' name='middlename' /> (optional)<br />";
echo "Last Name: <input type='text' name='lastname' /><br />";

echo "Student ID: <input type='text' name='studentid' /><br />";

echo "<br />";
while ($num <= 6)
{		
	echo "Choose Class ".$num.": ";
	$query="SELECT distinct(ClassName) FROM classids ORDER BY ClassName";
	$result = mysql_query ($query);
	echo "<select name='ClassName$num' value='choose'>class Name</option>";
	while($nt=mysql_fetch_array($result))
	{
		$name = $nt["ClassName"];	
		echo "<option name='ClassName$num' value=\"$name\">$name</option>";
	}
	echo "</select>";
	echo "<br />";
	
	
	$num++;
}

echo "<br />";
echo "<input type='submit' value='GO'>";
echo "</form>";


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




