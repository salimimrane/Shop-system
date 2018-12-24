<?php
		require'config.php';
		$mail = $_POST['mail'];
		$name=$_POST['name'];
		$pass = md5($_POST['password']);		
		
	    $sql = "INSERT INTO users(user, password, email) VALUES (?,?,?)";
	    $query = $conn->prepare($sql);
	    $query->execute(array($name,$pass,$mail));					    
	    header('Location: index.php');
		exit();
	    
		

	?>