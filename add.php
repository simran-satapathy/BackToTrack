<html>
<head>
	<title>Add Routine</title>
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script>
function SubForm (){
    $.ajax({
        url:'https://api.apispreadsheets.com/data/0JtIeZACPtUdXbC4/',
        type:'post',
        data:$("#myForm").serializeArray(),
        success: function(){
          alert("Form Data Submitted :)")
        },
        error: function(){
          alert("There was an error :(")
        }
    });
}
</script>
	<link rel=stylesheet href="style.css">
</head>
<body align="center">
	<br/><br/>
	<h1>Back To Track</h1>
	<form action="add.php" method="post" name="form1" >
	<fieldset >
  		<legend>Enter Details</legend>
		<table width="25%" border="0">
			<div  class="field">
			<tr> 
				<td>Date:</td>
				<td><input type="date" name="date"></td>
			</tr>
			<tr> 
				<td>Eating:</td>
				<td><input type="text" name="eating"></td>
			</tr>
			<tr> 
				<td>Studying:</td>
				<td><input type="text" name="studying"></td>
			</tr>
			<tr> 
				<td>Sleeping:</td>
				<td><input type="text" name="sleeping"></td>
			</tr>
			<tr> 
				<td>Essentials:</td>
				<td><input type="text" name="essentials"></td>
			</tr>
			<tr> 
				<td>Washing Clothes:</td>
				<td><input type="text" name="washingclothes"></td>
			</tr>
			<tr> 
				<td>Exam Prep:</td>
				<td><input type="text" name="examprep"></td>
			</tr>
			<tr> 
				<td>Lab Work:</td>
				<td><input type="text" name="labwork"></td>
			</tr>
			<tr> 
				<td>Health driven rest:</td>
				<td><input type="text" name="healthrest"></td>
			</tr>
			<tr> 
				<td>Assignment:</td>
				<td><input type="text" name="assignemnt"></td>
			</tr>
			<tr> 
				<td>Post Class Refreshment:</td>
				<td><input type="text" name="postclass"></td>
			</tr>
			<tr> 
				<td>Social Media:</td>
				<td><input type="text" name="socialmedia"></td>
			</tr>
			<tr> 
				<td>Chilling with Friends:</td>
				<td><input type="text" name="chilling"></td>
			</tr>
			<tr> 
				<td>Calling Home/Friends:</td>
				<td><input type="text" name="calling"></td>
			</tr>
			<tr> 
				<td>Movie/Series/Youtube/Match:</td>
				<td><input type="text" name="movie"></td>
			</tr>
			<tr> 
				<td>Other liesures:</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr> 
				<td>Effectiveness:</td>
				<td><input type="radio" name="effectiveness" value="yes">Yes
				<input type="radio" name="effectiveness" value="no">No<td>
			</tr>
			<tr> 
				<td></td>
				<td><button onclick="SubForm()">Click to Submit</td>
			</tr>
		</div>
		</table>
	</fieldset>
	</form>
</body>
</html>
