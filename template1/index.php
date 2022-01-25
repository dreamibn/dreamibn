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
	} else {
		echo "<script>alert('Ucapan anda gagal dihantar.')</script>";
	}
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Majlis Perkahwinan Fakhri dan Fitriyani</title> <!-- change title on website tab -->
    <meta name="description" content="Majlis Perkahwinan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link rel = "stylesheet" href = "assets/fonts/font.css">
    <!-- Fontawesome js -->
    <link rel = "stylesheet" href = "assets/font-awesome/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <!-- custom style css -->
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/lightslider.css">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<!-- favicons title bar -->
	<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
  </head>
  <body>
  <!-- RSVP -->
  <div class="dropdown-item">
		<div class="imgBox" onclick="myFunction()">
			<a class ="rounded-button">
				<ion-icon name="mail-outline" size="large"></ion-icon>
			</a>
		</div>
			<div class="dropdown-content">
				<div class="name">RSVP</div>
				<form method="post" action="rsvpinsert.php">
					<h5>Adakah anda hadir ke majlis kami ?<h5>
					<input type="radio" name="attend" id="attend-r" value="Hadir" checked> Ya <input type="radio" name="attend" id="attend-r" value="Tidak Hadir"> Tidak
					<br>
					<br>
					<div class="Box1" style="display:block">
						<div class="input-group">
							<input type="text" name="name" id="name" placeholder="Nama anda" required>
						</div>
						<div class="input-group">
							<input type="tel" name="tel" id="tel" placeholder="Nombor Telefon" required>
						</div>
						<div class="input-group">
							<button class="btn1" name="submit1">Hantar</button>
						</div>
					</div>	
				</form>
			</div>
		</div>
	</div>
	<!-- Calendar -->
	<div class="dropdown-item-2">
		<div class="imgBox-2" onclick="myFunction2()">
			<a class ="rounded-button-2">
				<ion-icon name="calendar-number-outline" size="large"></ion-icon>
			</a>
		</div>
			<div class="dropdown-content-2">
				<div class="content-2">
					<div class="name-2">Calendar</div>
					<br>
						<a href="">
						<img src="assets/images/google-logo.png" width="50px" height="50px" align="middle">&nbsp;&nbsp;Add Google Calendar
						</a>
					<br>
					<br>
					<a href="apple/myevents.ics">
						<img src="assets/images/apple-logo.png" width="50px" height="50px" align="middle">&nbsp;&nbsp;Add Apple Calendar
						</a>
					<br>
					<br>
				</div>
			</div>
		</div>
	</div>
	<!-- Map -->
	<div class="dropdown-item-3">
		<div class="imgBox-3" onclick="myFunction4()">
			<a class ="rounded-button-3">
				<ion-icon name="map-outline" size="large"></ion-icon>
			</a>
		</div>
			<div class="dropdown-content-3">
				<div class="content-3">
					<div class="name-3">Location</div>
							<iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.1938013723525!2d114.9136581147711!3d4.907209641198653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3222f55b33f6dd99%3A0xb65fad2a7c554e!2sFratini&#39;s%20Restaurant!5e0!3m2!1sen!2sbn!4v1634321815735!5m2!1sen!2sbn" width="200" height="200"  style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
						<a href="">
						<img src="assets/images/waze.png" width="50px" height="50px" align="middle">
						<h4>Waze</h4>
						</a>
					<a href="apple/myevents.ics">
						<img src="assets/images/google-maps.png" width="50px" height="50px" align="middle">
						<h4>Google Maps</h4>
						</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact -->
	<div class="dropdown-item-4">
		<div class="imgBox-4" onclick="myFunction5()">
			<a class ="rounded-button-4">
				<ion-icon name="call-outline" size="large"></ion-icon>
			</a>
		</div>
			<div class="dropdown-content-4">
				<div class="content-4">
					<div class="name-4">Contact</div>
						<a href="https://wa.me/6738232676">
						<img src="assets/images/whatsapp.png" width="50px" height="50px" align="middle">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fakhri
						</a>
					<br>
					<br>
					<a href="https://wa.me/6738226877">
						<img src="assets/images/whatsapp.png" width="50px" height="50px" align="middle">&nbsp;&nbsp;Noorfithriyaani
						</a>
					<br>
					<br>
				</div>
			</div>
		</div>
	</div>
	<!-- box -->
		<div class="box">
			<div id="adddarkbg" class="left"> <!-- box-effect -->
					<div class="bg1"> <!-- background-image-1 -->
						<div class="bg1a"></div>
					</div>	
					<div class="bg2"> <!-- background-image-2 -->
						<div id="bg2-effect">
							<div class="content">
								<br>
								<h3>بِسْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</h3>
								<div class="tabs-content">
									<div style="text-align: center; ">
										<h2>السلام عليكم ورحمة الله وبركاته</h2>
									</div>
									<div style="text-align: center;">&nbsp;</div>
									<div style="text-align: center; ">
										<span style="color:#000000;">
											<span style="font-family:Montserrat;">
												<b>Hashim Bin Hj Johar</b> <!-- Nama Bapa Pengantin lelaki/perempuan -->
											</span>
										</span>
									</div>
									<div style="text-align: center; ">
										<span style="font-family:Montserrat;">
											<b>
												<font color="#636363">&amp;</font>
											</b> 
										</span>
									</div>
									<div style="text-align: center; ">
										<span style="color:#000000;">
											<span style="font-family:Montserrat;">
												<b>Masdiwi Binti Hj Besar</b> <!-- Nama Ibu Pengantin lelaki/perempuan -->
											</span>
										</span>
									</div>
									<div style="text-align: center;">&nbsp;</div>
									<div style="text-align: center;">
										<span style="font-family:Montserrat;">
											<font color="#636363">DENGAN SEGALA HORMATNYA MENJEMPUT</font>
										</span>
										<span style="font-family:Montserrat;">
										<font color="#636363">DATO’ / DATIN / TUAN / PUAN</font>
										</span>
										<span style="font-family:Montserrat;">
										<font color="#636363">DAN SEISI KELUARGA KE MAJLIS PERKAHWINAN PUTERA&nbsp;KAMI BERSAMA PASANGANNYA</font>
										</span>
									</div>
									<div style="text-align: center;">&nbsp;</div>
									<div style="text-align: center; ">
										<span style="color:#000000;">
											<span style="font-family:Montserrat;">
												<b>Ahmad Zulfakhri Bin Hashim</b> <!-- Nama Pengantin Lelaki -->
											</span>
										</span>
									</div>
									<div style="text-align: center; ">
										<span style="font-family:Montserrat;">
											<b>
												<font color="#636363">&amp;</font>
											</b> 
										</span>
									</div>
									<div style="text-align: center; ">
										<span style="color:#000000;">
											<span style="font-family:Montserrat;">
												<b>Noorfithriyaani Binti Matsalleh</b> <!-- Nama Pengantin Perempuan -->
											</span>
										</span>
									</div>
									<div style="text-align: center;">&nbsp;</div>
									<div>
										<b>
											<font>
												<img alt="" src="assets/images/calendar-blue.png" style="width: 35px; height: 35px;" align="center">
											</font>
										<b>
									</div>
									<div style="text-align: center;">&nbsp;</div>
									<div style="text-align: center;">
										<strong>
											<span style="font-family:Montserrat;">
												<font color="#636363">AHAD, 23&nbsp;MAY&nbsp;2021</font> <!-- Tarikh Perkahwinan -->
											</span>
										</strong>
									</div>
									<div style="text-align: center;">&nbsp;</div>
									<div>
										<b>
											<font>
												<img alt="" src="assets/images/clock.png" style="width: 35px; height: 35px;" align="center">
											</font>
										<b>
									</div>
									<div style="text-align: center;">&nbsp;</div>
									<div style="text-align: center;">
										<strong>
											<span style="font-family:Montserrat;">
												<font color="#636363">11:00 AM - 5:00 PM</font> <!-- jam aturcara -->
											</span>
										</strong>
									</div>
									<div style="text-align: center;">&nbsp;</div>
									<div>
										<b>
											<font>
												<img alt="" src="assets/images/address.png" style="width: 35px; height: 35px;" align="center">
											</font>
										<b>
									</div>
									<div style="text-align: center;">&nbsp;</div>
									<div style="text-align: center;">
										<strong>
											<span style="font-family:Montserrat;">
												<font color="#636363">BRIDEX HALL 2 JERUDONG</font> <!-- Tempat majlis -->
											</span>
										</strong>
									</div>
									<div style="text-align: center;">&nbsp;</div>
									<button class="blockb" onclick="myFunction3()">
										<i class="fa fa-clock-o" style="font-size:20px; padding:0 5px 3px 0"></i>
										Aturcara Majlis
									</button>
									<div id="myDIV" style="display: block;">
									<br>
									11:00 AM - Ketibaan Tetamu &amp; Doa
									<br>
									12:00 PM - Ketibaan Pengantin
									<br>
									5:00 PM - Majlis selesai
									<br>
									<br>
								</div>
							</div>
							<br>
								<img src="assets/images/border-1.png">
							</br>
							<h5>
								<font color="#339966">Majlis selesai. Terima Kasih</font>
							</h5>
							<div id="countdown" class="countdown">
								<div class="time">
									<h4 id="days">00</h4>
									<small>Hari</small>
								</div>
								<div class="time">
									<h4 id="hours">00</h4>
									<small>Jam</small>
								</div>
								<div class="time">
									<h4 id="minutes">00</h4>
									<small>Minit</small>
								</div>
								<div class="time">
									<h4 id="seconds">00</h4>
									<small>Saat</small>
								</div>
							</div>
							<br>
								<img src="assets/images/border-1.png">
							</br>
							<section class="area">
								<div class="box-container">
							<!-- Image Slider -->
									<div class="slider">
										<img alt="Image One" src="assets/images/1.jpg" />
										<img alt="Image Two" src="assets/images/2.jpg" />
										<img alt="Image Three" src="assets/images/3.jpg" />
										<!--you can add more images as you want--> 
									</div>
								</div>
							</section>	
							<div id="ucapantitle">Sampaikan Ucapan</div>
								<div class="wrapper">
									<form action="" method="POST" class="form">
										<div class="input-group">
											<input type="text" name="name" id="name" placeholder="Nama anda" required>
										</div>
										<div class="input-group textarea">
											<textarea id="comment" name="comment" placeholder="Tuliskan ucapan anda disini..." required></textarea>
										</div>
										<div class="input-group">
											<button class="btn" name="submit">Hantar Ucapan</button>
										</div>
									</form>
									<div class="prev-comments">
									<?php
										
										$sql = "SELECT * FROM ucapan";
										$result = mysqli_query($conn, $sql);
										$results_per_pages = 10;
										$number_of_results = mysqli_num_rows($result);
										$number_of_pages = ceil($number_of_results/$results_per_pages);

										if(!isset($_GET['page'])) {
											$page = 1;
										} else {
											$page = $_GET['page'];
										}

									$this_page_first_result = ($page-1)*$results_per_pages;

									$sql = "SELECT * FROM ucapan LIMIT " . $this_page_first_result . ',' . $results_per_pages;
									$result=mysqli_query($conn, $sql);

									for ($page=1;$page<=$number_of_pages;$page++) {
										echo '<a href="index.php?page=' . $page . '"> ' . $page . '</a>';
									}

										if (mysqli_num_rows($result) > 0) {
										while ($row = mysqli_fetch_assoc($result)) {
											
									?>
									<div class="single-item">
										<h4><?php echo $row['name']; ?></h4>
										<p><?php echo $row['message']; ?></p>
									</div>
									<?php
										
										}
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
  <!-- end of box -->		
  </body>
	<script>
		function myFunction3(){var x=document.getElementById("myDIV");
		if(x.style.display==="block")
		{x.style.display="none";}else{x.style.display="block";}}
	</script>
	<script>
		function myFunction() {
			var dropdownContent = document.querySelector('.dropdown-content');
			dropdownContent.classList.toggle('dropdown-toggle');
		}
	</script>
	<script>
		function myFunction2() {
			var dropdownContent = document.querySelector('.dropdown-content-2');
			dropdownContent.classList.toggle('dropdown-toggle-2');
		}
	</script>
	<script>
		function myFunction4() {
			var dropdownContent = document.querySelector('.dropdown-content-3');
			dropdownContent.classList.toggle('dropdown-toggle-3');
		}
	</script>
	<script>
		function myFunction5() {
			var dropdownContent = document.querySelector('.dropdown-content-4');
			dropdownContent.classList.toggle('dropdown-toggle-4');
		}
	</script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script src="js/script.js"></script> 
	<script src="js/script1.js"></script>
	<script src="js/timer.js"></script> 
 </html>