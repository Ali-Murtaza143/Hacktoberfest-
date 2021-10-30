<h1> TASK-3(18CS30)</h1>
<form action="" method="post">
<label for="name">Name:</label><input type="text" name="name" id="name"><br><br>
<label for="password">Password:</label><input type="password" name="password" id="password"><br><br>
<input type="submit" value="submit" name="submit"><br><br></form>

<?php
$name = "";
$password = "";
if($_POST["submit"])
{
if($_POST["name"]=="18CS30"&&$_POST["password"]=="18CS30"){ $name = $_POST["name"];
$password = $_POST["password"]; echo "<p> WELCOME ".$name. "</p>";}
else{die("Wrong Credentials");
}
}

?>
