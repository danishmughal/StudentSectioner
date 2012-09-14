
<!-- saved from url=(0026)http://my.gcd.ie/login.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Add New Classes - Griffith Student Sectioner</title>
	
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
<font color="#8e0c08" size="3"><b>Add New Class to Database</b></font>
<img src="./theme/info.gif" title="header=[New Student]body=[Here you may add new classes to the application's database. Please make sure your information is accurate. You will have to add a new instance for each occurrence of the same class.]">
<br>
<br>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td align="center">
			<div class="loginheadercorners">
				<font color="#FFFFFF" size="3" face="Verdana, Arial, Helvetica, sans-serif">
					Add New Class				</font>
				</div>
		</td>
  </tr>
  <tr>
    <td>
		<div class="loginmaincorners">
<br /><br />
<a href='index.php'><--Click here to go back to the Main Page</a><br /><br />
      
Add information about the class. <br />
You must fill out this form separately for each occurrence of the class. <br /> 
If a class occurs 2 times in the week, you must fill out this form 2 times. <br />
<br />

<?php 
echo "<form action='addnewclasses2.php' method='post'>";
echo "<b>Class Name: </b><input type='text' name='classname'> <br /><br />";
echo "<b>Subject Code:</b> <input type='text' name='subjectcode'> <br /><br />";
echo "<b>Major:</b> <input type='text' name='major'> <br /><br />";
echo "<b>Start Time:</b> <input type='text' name='starttime' value='HH:MM:SS'><br />";
echo " <b>End Time:</b> <input type='text' name='endtime' value='HH:MM:SS'><br /><br />";
echo " <b>Day:</b> <select name='dropdown' value='options'>
		<option value='Monday'>Monday</option>
		<option value='Tuesday'>Tuesday</option>
		<option value='Wednesday'>Wednesday</option>
		<option value='Thursday'>Thursday</option>
		<option value='Friday'>Friday</option>
		<option value='Saturday'>Saturday</option>
		<option value='Sunday'>Sunday</option>
		</select>";

echo "<br /><br />";
echo "<input type='submit' value='Add to Database'>";
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









</body>
</html>