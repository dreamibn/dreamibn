<?php

include 'dbconnection.php';

if(isset($_POST['submit1'])) {

    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $attend = $_POST['attend'];

    $query = "INSERT INTO rsvp000 (Nama,`Nombor Telefon`,Kehadiran)
              VALUES ('$name', '$tel', '$attend')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run){
		echo "<script>alert('RSVP anda sudah dihantar.')</script>";
        header("Location: index.php");
	} else {
		echo "<script>alert('RSVP anda gagal dihantar.')</script>";
        header("Location: index.php");
	}
    
}

?>