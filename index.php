<form method="POST">
	Teacher name: <input type="text" name="teachername"><br><br>
	Phone: <input type="text" name="phone"><br><br>
	Gender: <select name="gender">
		<option>Male</option>
		<option>Female</option>
	</select>
	<br><br>
	<button>Add</button>
</form>
<?php
if (isset($_POST['teachername'])){
	$conn = new mysqli('localhost', 'root', '', 'college');

	$g = $_POST['gender'];
	$p = $_POST['phone'];
	$n = $_POST['teachername'];

	$sql = "INSERT INTO teachers (gender, teachername, phone) VALUES ('$g' ,'$n' , '$p')";

	if ($conn->query($sql) === TRUE) {
	    echo "success";
	} else {
	    echo "Error: " . $conn->error;
	}
}