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
for($counter=1; $counter<=6; $counter++){
echo "<tr>";
for($j=1; $j<=5; $j++)
{
$ans = $counter*$j;
echo"<td> $counter * $j = $ans </td>";
}
echo "</tr>";
}
?>
</table>
</div>
</body>
</html>
