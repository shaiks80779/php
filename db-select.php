<?php
$conn = new mysqli('localhost','root','','mydb');
$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>
<table>
	<tr>
		<th>Book Name</th>
		<th>Price</th>
		<th>Year</th>
	</tr>
	<?php
	while ($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td><?php echo $row["bookname"]; ?></td>
			<td><?php echo $row["price"]; ?></td>
			<td><?php echo $row["year"]; ?></td>
		</tr>
		<?php
	}
	?>
</table>