<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab 11(18CS30)</title>
</head>
<body>
<h1>TASK-1</h1>
<form method="POST">
<input type="text" name="number" placeholder="Enter a number">
<input type="submit" value="submit" name="submit">
</form>
<?php
if($_POST["submit"]){
$number = isset($_POST["number"]) ? $_POST['number'] : "0" ; // default value = zero
for($i=1; $i<=10; $i++){
$ans = $i*$number;
echo "<p>" .$number . " x " . $i . " = ". $ans. "</p>";
}}
?>
