<?php
$error="";
if (array_key_exists("submit",$_POST)) {
	if (!$_POST['email']) {
		$error.="An Email is required<br>";
	}
	if (!$_POST['password']) {
		$error.="A Password is required<br>";
	}
	if ($error!="") {
		$error="There are following Error(s)".$error;
		
	}else{

	}
}
?>

	<form method="post">
		<div><? echo $error; ?></div>
		<input type="email" name="email" placeholder="Email">
		<input type="password" name="password">
		<input type="submit" name="submit">
	</form>