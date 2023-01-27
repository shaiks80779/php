<form>
	Bookname: <input type="text" name="bookname"><br><br>
	Price: <input type="text" name="price"><br><br>
	Year: <input type="text" name="year"><br><br>
	<input type="submit" name="add" value="Add Book">
</form>
<?php
$conn = new mysqli('localhost','root','','mydb');
if (isset($_GET['add'])) {
	$bookname = $_GET['bookname'];
	$price = $_GET['price'];
	$year = $_GET['year'];
	$sql = "INSERT INTO books (bookname,price,year) VALUES ('$bookname','$price','$year')";
	if($conn->query($sql)===true){
		echo "Book added";
	} else {
		echo "Error: ".$conn->error;
	}
}
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