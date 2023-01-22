<?php
$t = 10;
$l = 10;
if (isset($_GET['t'])) {
	$t = $_GET['t'];
}
if (isset($_GET['l'])) {
	$l = $_GET['l'];
}
?>
<h1>Dynamic Multiplication Tables using PHP HTML CSS</h1>
<form>
	Tables:<input type="number" name="t" required value="<?php echo $t; ?>">
	Lines:<input type="number" name="l" required value="<?php echo $l; ?>">
	<button>Generate</button>
</form>
<?php
for ($n=1; $n <= $t; $n++) { 
	echo '<div class="table"><div>';
	for ($i=1; $i <= $l; $i++) { 
		echo '<p>' . $n .' x '. $i . ' = ' . ($n*$i) .'</p>';
	}
	echo '</div></div>';
}
?>
<style type="text/css">
	*{
		font-size: 18px;
		font-family: Arial;
	}
	h1{
		font-size: 25px;
		background: pink;
		padding: 10px;
	}
	.table{
		display: inline-block;
		width: 10%;
		float: left;
	}
	.table>div{
		background: skyblue;
		padding: 5px;
		margin: 2px;
		border: 1px solid;
	}
	p{
		margin: 0;
	}
</style>