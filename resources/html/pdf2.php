<html>
<body>
<?php
if(isset($_GET["y"]) && isset($_GET["d"]))
{
echo "notes";
if($_GET["y"]=="first" && ($_GET["d"]=="cs" || $_GET["d"]=="cse"  || $_GET["d"]=="ce" || $_GET["d"]=="bt" || $_GET["d"]=="it" || $_GET["d"]=="me" || $_GET["d"]=="en" || $_GET["d"]=="ec")&& $_GET["s"]=="c")
{
	echo "<br><br><a href='vt/u1.pdf'>Unit 1</a><br>";
echo "<a href='vt/u2.pdf'>Unit 2</a><br>";
echo "<a href='vt/u3.pdf'>Unit 3</a><br>";
echo "<a href='vt/arrayandfunction.pdf'>Unit 4</a><br>";
echo "<a href='vt/loop.pdf'>Unit 5</a><br>";
echo "<a href='ag/aunit1.pdf'>Unit 1</a><br><br>";
echo "Or<br><br><br> ";
}
}
?>

</html>
