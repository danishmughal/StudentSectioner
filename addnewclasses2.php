
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
					Class Added Successfully				</font>
				</div>
		</td>
  </tr>
  <tr>
    <td>
		<div class="loginmaincorners">
<br /><br />
<?php
include 'functions.php';
$classname = $_POST["classname"];
$subjectcode = $_POST["subjectcode"];
$major = $_POST["major"];
$starttime = $_POST["starttime"];
$endtime = $_POST["endtime"];
$day = $_POST["dropdown"];

mysql_query("INSERT INTO classids (SubjectCode, ClassName) VALUES ('$subjectcode', '$classname')");
mysql_query("INSERT INTO classes (SubjectCode, Major, StartTime, EndTime, Day) VALUES ('$subjectcode', '$major', '$starttime', '$endtime', '$day')");

echo "The class has been added to the database.";
echo "<br /><br />";
echo "<a href='addnewclasses1.php'><--Add more classes</a>";
echo "<br />";
echo "<br />";
echo "<a href='index.php'><--Click here to go back to the Main Page</a><br /><br />";

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