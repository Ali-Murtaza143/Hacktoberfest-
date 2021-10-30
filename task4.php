<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab 11(18CS30)</title>
</head>
<body>
<h1>TASK-4</h1>
<div>
<table border="3" cellpadding = "3" cellspacing = "2">
<?php
for($i=1; $i<=6; $i++){
echo "<tr>";
for($j=1; $j<=5; $j++)
{
$ans = $i*$j;
echo"<td> $i * $j = $ans </td>";
}
echo "</tr>";
}
?>
</table>
</div>
</body>
</html>
