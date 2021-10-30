<title>Lab 11(18CS30)</title>
</head>
<body>
<h1>TASK-2</h1>
<form method="POST" action="" >
<input type="text" name="num" placeholder="Enter a number">
<button type="submit" value="submit" name="submit"></button>
</form>
<?php
if(isset($_POST["submit"])){
$check = $_POST["num"];
if($check%2==0){
echo "<h3>".$check. "   is Even </h3>";
}
else
echo "<h3>".$check. "  is Odd </h3>";
}
?>
