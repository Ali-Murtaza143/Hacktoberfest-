<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab 11(18CS30)</title>
</head>
<body>
<h1>TASK-1</h1>
<form method="POST" action="" >
<input type="text" name="number" placeholder="Enter a number">
<input type="submit" value="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"])){
$number = $_POST["number"];
for($i=1; $i<=10; $i++){
$ans = $i*$number;
echo "<p>" .$number . " x " . $i . " = ". $ans. "</p>";
}}
?>
