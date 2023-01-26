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
	$sql = "INSERT INTO books (bookname,price,year) VALUES ('$bookname',$price,$year)";
	$conn->query($sql);
	echo "Book added";
}
?>