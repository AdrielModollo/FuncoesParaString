<html>
<body>
<form action="test.php" name="test" method="get">
Name1:<input type="text" name="name1" /><br />
Name2:<input type="text" name="name2" /><br />
<input type="submit" name="submit" value="compare" />
</form>

<!--php code begins here -->

<?php
if(isset($_GET['submit']))
{
$str1 = $_GET['name1'];
$str2 = $_GET['name2'];
$meta_one=metaphone($str1);
$meta_two=metaphone($str2);
echo "metaphone code for ".$str1." is ". $meta_one;
echo "<br />";
echo "metaphone code for ".$str2." is ". $meta_two."<br>";
if($meta_one==$meta_two)
{
echo "metaphone codes are matching";
}
else
{
echo "metaphone codes are not matching";
}
}
?>

</body>
</html>