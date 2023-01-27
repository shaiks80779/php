<h1>Student Form</h1>
<form method="POST">
	<table>
		<tr>
			<td>Student</td>
			<td><input type="text" name="student"></td>
		</tr>
		<tr>
			<td>Father</td>
			<td><input type="text" name="father"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="add" value="Add Book"></td>
		</tr>
	</table>
</form>
<?php
$conn = new mysqli('localhost','root','','mydb');
if (isset($_POST['add'])) {
	$student = $_POST['student'];
	$father = $_POST['father'];
	$sql = "INSERT INTO students (student,father) VALUES ('$student','$father')";
	if($conn->query($sql)===true){
		echo "Student added - ".$student;
	} else {
		echo "Error: ".$conn->error;
	}
}
if (isset($_POST['delete'])) {
	$id = $_POST['id'];
	$conn->query("DELETE FROM students WHERE id = $id");
}
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>
<hr>
<h1>List of Students</h1>
<table>
	<tr>
		<th>Student</th>
		<th>Father</th>
	</tr>
	<?php
	while ($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td><?php echo $row["student"]; ?></td>
			<td><?php echo $row["father"]; ?></td>
			<td>
				<form method="POST">
					<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
					<input type="submit" name="edit" value="Edit">
					<input type="submit" name="delete" value="Delete">
				</form>
			</td>
		</tr>
		<?php
	}
	?>
</table>
<style type="text/css">
	table,td,th{
		border: 1px solid;
		padding: 10px;
		border-collapse: collapse;
	}
	*{
		font-size: 20px;
		font-family: Arial;
	}
	h1{
		font-size: 25px;
		text-decoration: underline;
		color: darkblue;
	}
	form{
		margin: 0;
	}
</style>
<script>
	if ( window.history.replaceState ) {
		window.history.replaceState( null, null, window.location.href );
	}
</script>