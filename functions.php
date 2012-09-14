<html>
<body>


<?php
##########################################################
#          												 #
# All the functions used in the program are located here #
#														 #
##########################################################




$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
					  

mysql_select_db("ss", $con);



function createschedule($c1,$c2,$c3,$c4,$c5,$c6) {
	
	$result1 = mysql_query("SELECT * FROM classids WHERE ClassName='$c1'");
	while($row = mysql_fetch_array($result1))
  	{
  		$class1 = $row['SubjectCode'];
  	}
	
  	$result2 = mysql_query("SELECT * FROM classids WHERE ClassName='$c2'");
	while($row = mysql_fetch_array($result2))
  	{
  		$class2 = $row['SubjectCode'];
  	}
	
  	$result3 = mysql_query("SELECT * FROM classids WHERE ClassName='$c3'");
	while($row = mysql_fetch_array($result3))
  	{
  		$class3 = $row['SubjectCode'];
   	}
	
  	$result4 = mysql_query("SELECT * FROM classids WHERE ClassName='$c4'");
	while($row = mysql_fetch_array($result4))
  	{
  		$class4 = $row['SubjectCode'];
   	}
	
  	$result5 = mysql_query("SELECT * FROM classids WHERE ClassName='$c5'");
	while($row = mysql_fetch_array($result5))
  	{
  		$class5 = $row['SubjectCode'];
  	}
	
  	$result6 = mysql_query("SELECT * FROM classids WHERE ClassName='$c6'");
	while($row = mysql_fetch_array($result6))
  	{
  		$class6 = $row['SubjectCode'];
   	}
	
	
	mysql_query("INSERT INTO schedule SELECT * FROM classes WHERE SubjectCode='$class1'");
	mysql_query("INSERT INTO schedule SELECT * FROM classes WHERE SubjectCode='$class2'");
	
	if (checkforclash() == true) {
		delete_from_table($class2);
	}
	
	mysql_query("INSERT INTO schedule SELECT * FROM classes WHERE SubjectCode='$class3'");
	if (checkforclash() == true) {
		delete_from_table($class3);
	}
	
	mysql_query("INSERT INTO schedule SELECT * FROM classes WHERE SubjectCode='$class4'");
	if (checkforclash() == true) {
		delete_from_table($class4);
	}
	mysql_query("INSERT INTO schedule SELECT * FROM classes WHERE SubjectCode='$class5'");
	if (checkforclash() == true) {
		delete_from_table($class5);
	}
	mysql_query("INSERT INTO schedule SELECT * FROM classes WHERE SubjectCode='$class6'");
	if (checkforclash() == true) {
		delete_from_table($class6);
	}
	
}

function checkforclash() //scans the table for any clashes 
{
	$result = mysql_query("SELECT * 
				FROM schedule a
				JOIN schedule b ON a.starttime < b.endtime
				AND a.endtime > b.starttime
				AND a.subjectcode != b.subjectcode
				AND a.day = b.day");
	
	$choice = mysql_fetch_array($result);
	
	if (is_null($choice)) {
			return false;		
	 }
	 
	 else {	 		
		while($row = mysql_fetch_array($result)) {
	  	    return true;	  	
		}
	 }
}

function delete_from_table($class) { //deletes last attempted entry to schedule
	mysql_query("DELETE FROM schedule WHERE SubjectCode='$class'");
}

function displayschedule($param) {//displays final schedule
	$result = mysql_query("SELECT SubjectCode, Day, Major, DATE_FORMAT(StartTime,'%h:%i %p') as startftime, DATE_FORMAT(EndTime,'%h:%i %p') as endftime FROM schedule Order By Field(Day,'Mon','Tue','Wed','Thu','Fri'), starttime");

	echo "<table border='1'>
	<tr>
	<th>SubjectCode</th>		
	<th>Day</th>
	<th>Starting Time</th>
	<th>Ending Time</th>	
	<th>Major</th>
	
	</tr>";
	
	
	while($row = mysql_fetch_array($result))
	  {
	  	$classcode = $row['SubjectCode'];
	 	$newresult= mysql_query("SELECT * FROM classids WHERE SubjectCode='$classcode'");
		while($row2 = mysql_fetch_array($newresult))
  		{
  			$classname = $row2['ClassName'];
  		}
	 	
	  	
	  	
	  echo "<tr>";
	  echo "<td>" .$classcode." (".$classname.")"."</td>";
	  echo "<td>" . $row['Day'] . "</td>";
	  echo "<td>" . $row['startftime'] . "</td>";
	  echo "<td>" . $row['endftime'] . "</td>";
	  echo "<td>" . $row['Major'] . "</td>";
	  
	  echo "</tr>";
	  }
	echo "</table>";	
	

}

function createstudent($firstname, $middlename, $lastname, $studentid) {
	mysql_query("INSERT INTO students (StudentID, FirstName, MiddleName, LastName) VALUES ('$studentid', '$firstname', '$middlename', '$lastname')");
}

function createstudentchoices($studentid, $class1, $class2, $class3, $class4, $class5, $class6) {
	
	$result1 = mysql_query("SELECT * FROM classids WHERE ClassName='$class1'");
	while($row = mysql_fetch_array($result1))
  	{
  		$c1 = $row['SubjectCode'];
  	}
  	
	$result1 = mysql_query("SELECT * FROM classids WHERE ClassName='$class2'");
	while($row = mysql_fetch_array($result1))
  	{
  		$c2 = $row['SubjectCode'];
  	}
	$result1 = mysql_query("SELECT * FROM classids WHERE ClassName='$class3'");
	while($row = mysql_fetch_array($result1))
  	{
  		$c3 = $row['SubjectCode'];
  	}
	$result1 = mysql_query("SELECT * FROM classids WHERE ClassName='$class4'");
	while($row = mysql_fetch_array($result1))
  	{
  		$c4 = $row['SubjectCode'];
  	}
	$result1 = mysql_query("SELECT * FROM classids WHERE ClassName='$class5'");
	while($row = mysql_fetch_array($result1))
  	{
  		$c5 = $row['SubjectCode'];
  	}
	$result1 = mysql_query("SELECT * FROM classids WHERE ClassName='$class6'");
	while($row = mysql_fetch_array($result1))
  	{
  		$c6 = $row['SubjectCode'];
  	}
	
	mysql_query("INSERT INTO studentchoices (StudentID, SubjectCode, ClassName, ChoiceNumber)
					VALUES ('$studentid','$c1', '$class1', '1')");
	mysql_query("INSERT INTO studentchoices (StudentID, SubjectCode, ClassName, ChoiceNumber)
					VALUES ('$studentid','$c2', '$class2', '2')");
	mysql_query("INSERT INTO studentchoices (StudentID, SubjectCode, ClassName, ChoiceNumber)
					VALUES ('$studentid','$c3', '$class3', '3')");
	mysql_query("INSERT INTO studentchoices (StudentID, SubjectCode, ClassName, ChoiceNumber)
					VALUES ('$studentid','$c4', '$class4', '4')");
	mysql_query("INSERT INTO studentchoices (StudentID, SubjectCode, ClassName, ChoiceNumber)
					VALUES ('$studentid','$c5', '$class5', '5')");
	mysql_query("INSERT INTO studentchoices (StudentID, SubjectCode, ClassName, ChoiceNumber)
					VALUES ('$studentid','$c6', '$class6', '6')");
	
}


function updatestudentchoices($id) {
	$result = mysql_query("SELECT distinct(SubjectCode) FROM schedule");
	while($row = mysql_fetch_array($result)) {
		$subjectcode = $row["SubjectCode"];
		mysql_query("UPDATE studentchoices
					SET isScheduled='Yes'
					WHERE SubjectCode='$subjectcode' 
					AND StudentID ='$id'");
		
	}
}

function displayomitted($studentID) {	
	
	$result = mysql_query("SELECT distinct(SubjectCode) FROM studentchoices WHERE StudentID='$studentID' 
							AND isScheduled='' ");
	
	echo "<br /><br /><b>These are the classes you chose but caused clashes and so were not added to the schedule:</b> ";
	while($row = mysql_fetch_array($result)) {
		
		$classcode = $row['SubjectCode'];
		$result2 = mysql_query("SELECT * FROM classids WHERE SubjectCode='$classcode'");
		while($row = mysql_fetch_array($result2))
  			{
  				$classname = $row['ClassName'];
  			}
		
		echo "<br />";		
		echo $classcode." (".$classname.")";
		
	}
}


function selectalternativeclasses($counter, $class1, $class2, $class3, $class4, $class5, $class6, $studentid) {
	$result = mysql_query("SELECT distinct(SubjectCode) FROM classes 
	WHERE SubjectCode!='$class1' 
	AND SubjectCode!='$class2'
	AND SubjectCode!='$class3'
	AND SubjectCode!='$class4'
	AND SubjectCode!='$class5'
	AND SubjectCode!='$class6'");
	
	
	$classes = array();
	while($row = mysql_fetch_array($result)) {
		$classcode = $row['SubjectCode'];
		mysql_query("INSERT INTO schedule SELECT * FROM classes WHERE SubjectCode='$classcode'");
		if (checkforclash('x') == true) {
		delete_from_table($classcode);
		}
		else {
		 $classes[] = $classcode;
		 delete_from_table($classcode);		 
		}
	}
	
	
	
	echo "<form action='addclass.php?studentid=$studentid' method='post'>";
	echo "<select name='alternatives' id='alternatives'>\n";
	foreach($classes as $v){
			
		$result2 = mysql_query("SELECT * FROM classids WHERE SubjectCode='$v'");
		while($row = mysql_fetch_array($result2))
  			{
  				$classname = $row['ClassName'];
  			}
		
		
		if ($classes == $v) {
			echo "<option name='classchoice' value=\"$v\" selected='selected'>$classname</option>";
		} 
			
		else {
			echo "<option name='classchoice' value=\"$v\">$classname</option>";
		}
		echo "<br />";
		
	}	
	echo "</select>";
	
	
	echo "<br />";
	echo "<input type='submit' value='Add This Class'>";
	echo "</form>";
	
	
}

?>





</body>
</html>