<?php

include 'dbconnection.php';

if (isset($_POST['submit'])) { // check press or not post comment button
	$name = $_POST['name'];
	$message = $_POST['comment'];

	$sql = "INSERT INTO ucapan000 (name, message)
			VALUES ('$name', '$message')";
	$result = mysqli_query($conn, $sql);
	if ($result){
		echo "<script>alert('Ucapan anda sudah dihantar.')</script>";
        header("Location: index.html");
	} else {
		echo "<script>alert('Ucapan anda gagal dihantar.')</script>";
	}
    header("Location: index.html");
}

?>