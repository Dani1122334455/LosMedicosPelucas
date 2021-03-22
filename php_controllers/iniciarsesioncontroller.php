<?php
	$usuario="root";
	$pass="";
	$serv="localhost";
	$bd="broggi";
	session_start();
	$con= mysqli_connect($serv, $usuario, $pass);
	$db=mysqli_select_db($con, $bd);

	$sql="SELECT * FROM usuaris2 WHERE username='".$_POST['username']."'";
	$resultado = mysqli_query($con, $sql) or die ($sql);
	if($row = mysqli_fetch_array($resultado)){
		if($_POST['password']==$row['contrasenya']){
			$_SESSION['username']=$_POST['username'];
			header('Location: ../php_partials/navbar.php');
		}else{
		header('Location: ../paginas/iniciarsesion.php');
		}
	}else{
		header('Location: ../paginas/iniciarsesion.php');
	}
?>