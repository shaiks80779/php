<?php
$conn = new mysqli('localhost','root','','mydb');
if (isset($_POST['delete'])) {
	$id = $_POST['id'];
	$sql = "DELETE FROM books WHERE id = $id";
	$result = $conn->query($sql);	
}
$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>
<table>
	<tr>
		<th>No.</th>
		<th>Book Name</th>
		<th>Price</th>
		<th>Year</th>
		<th>Action</th>
	</tr>
	<?php
	$i = 1;
	while ($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td><?php echo $i++; ?>.</td>
			<td><?php echo $row["bookname"]; ?></td>
			<td><?php echo $row["price"]; ?></td>
			<td><?php echo $row["year"]; ?></td>
			<td>
				<form method="POST">
					<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
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
		border: 2px solid;
		border-collapse: collapse;
		padding: 5px;
	}
	form{
		margin: 0;
	}
</style>