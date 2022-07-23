<?php
require_once("config.php");
?>

<html>

<head>
	<title>Admin Reservation Details</title>

	<link rel='stylesheet' href='css/all.css'>
	<link rel='icon' href='image/TRANSPARENT BG.png'>
</head>


<style>
	body {
		background-color: #a9a1a1;
		padding: 50px;
	}

	* {
		font-family: 'Raleway', sans-serif;
		font-family: 'Source Sans Pro', sans-serif;
		margin: 0 auto;
		padding: 0;
	}

	.reservation-box {
		background-color: #fff4f3;
		position: relative;
		margin: 0 auto;
		height: 550px;
		height: 140%;
		width: 450px;
		border: 1px solid #fff4f3;
		border-radius: 20px;
		float: center:
	}

	.img-ebts_logo {
		padding-left: 100px;
		padding-right: 100px;
		width: 50%;
		margin: 0 auto;
		position: relative;
		float: center;
	}

	.fa-circle-xmark {
		font-size: 15px;
		color: #786462;
		position: absolute;
		top: 10;
		right: 15;
	}

	.fa-circle-xmark:hover,
	.fa-circle-xmark:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
	}

	.details {
		font-family: "Times New Roman", Times, serif;
		font-size: 15px;
		font-weight: bold;
		color: #786462;
		margin-left: 10px;
		margin-top: 20px;
	}

	.border1 {
		position: relative;
		width: 355px;
		height: 130px;
		border: 2px solid #766260;
		margin: 0 auto
	}
    
	.border22 {
		position: relative;
		width: 355px;
		height: 115px;
		border: 2px solid #766260;
		margin: 0 auto
	}

	.fa-house-chimney {
		font-size: 25px;
		color: #74605e;
		position: absolute;
		top: 10;
		left: 5;
	}

	.fa-money-bills {
		font-size: 25px;
		color: #74605e;
		position: absolute;
		top: 50;
		left: 5;
	}

	.fa-location-dot {
		font-size: 25px;
		color: #74605e;
		position: absolute;
		top: 90;
		left: 10;
	}

	.fa-circle-check {
		font-size: 80px;
		color: #1e1312;
		text-align: center;
		margin-top: 20px;
		margin-left: 220px;
	}

	.houseName {
		position: absolute;
		top: 10;
		left: 55;
		height: 25px;
		width: 290px;
	}

	.rate {
		position: absolute;
		top: 50;
		left: 55;
		height: 25px;
		width: 180px;
	}

	.perNight {
		position: absolute;
		top: 50;
		left: 245px;
		height: 25px;
		width: 100px;
	}

	.location {
		position: absolute;
		top: 90;
		left: 55;
		height: 25px;
		width: 290px;
	}

	.text2 {
		font-family: "Times New Roman", Times, serif;
		font-size: 12px;
		color: #786462;
		margin-left: 10px;
		margin-top: 6px;
	}

	.cdeets {
		position: absolute;
		top: 20;
		left: 10;
		height: 25px;
		width: 300px;
	}

	.text3 {
		font-family: "Times New Roman", Times, serif;
		font-size: 12px;
		color: #786462;
		margin-left: 10px;
		margin-top: 30px;
	}

    
	.text33 {
		font-family: "Times New Roman", Times, serif;
		font-size: 12px;
		color: #786462;
		margin-left: 190px;
		margin-top: -15px;
	}

	.cnum {
		position: absolute;
		top: 70;
		left: 10;
		height: 25px;
		width: 170px;
	}

    .eadd {
		position: absolute;
		top: 70;
		left: 190;
		height: 25px;
		width: 160px;
	}

	.reservation-details {
		font-family: "Times New Roman", Times, serif;
		font-size: 15px;
		font-weight: bold;
		color: #786462;
		margin-left: 10px;
		margin-top: 20px;
	}

	.border2 {
		position: relative;
		width: 355px;
		height: 140px;
		border: 2px solid #766260;
		margin: 0 auto;
	}

	.current-date {
		font-family: "Times New Roman", Times, serif;
		font-size: 15px;
		font-weight: bold;
		color: #786462;
		margin-left: 5px;
		margin-top: 10px;
	}

	.text4 {
		font-family: "Times New Roman", Times, serif;
		font-size: 12px;
		color: #786462;
		margin-left: 5px;
		margin-top: 10px;
	}

	.text5 {
		font-family: "Times New Roman", Times, serif;
		font-size: 12px;
		color: #786462;
		margin-left: 150px;
		margin-top: -14px;

	}

	.text6 {
		font-family: "Times New Roman", Times, serif;
		font-size: 12px;
		color: #786462;
		margin-left: 5px;
		margin-top: 14px;
	}

	.h2 {
		margin-top: 15px;
		text-align: center;
	}

	.text7 {
		margin-top: 10px;
		text-align: center;
	}

	.crrnt-date {
		font-family: "Times New Roman", Times, serif;
		font-size: 15px;
		font-weight: bold;
		color: #786462;
		margin-left: 135px;
		margin-top: -17px;
	}

	.date-in {
		height: 25px;
		margin-left: 5px;
	}

	.date-out {
		height: 25px;
		margin-left: 25px;
	}

	.numguest {
		height: 25px;
		width: 83px;
		margin-left: 5px;
		text-align: center;
	}

	.confirm-btn {
		background-color: #74605e;
		border: none;
		color: white;
		margin-top: 20px;
		height: 25px;
		width: 170px;
		border-radius: 5px;
		font-family: "Times New Roman", Times, serif;
		text-align: center;
		text-decoration: none;
		display: inline-block;
	}

    .cancel-btn {
		background-color: #74605e;
		border: none;
		color: white;
		margin-top: -25px;
        margin-left: 190px;
		height: 25px;
		width: 170px;
		border-radius: 5px;
		font-family: "Times New Roman", Times, serif;
		text-align: center;
		text-decoration: none;
		display: inline-block;
	}

	.modal {
		display: none;
		position: fixed;
		z-index: 1;
		left: 0;
		top: 0;
		height: 120%;
		width: 100%;
		overflow: auto;
		background-color: rgba(0, 0, 0, 0.5);
	}

	.modal-content {
		background-color: #fff4f3;
		margin: 15% auto;
		padding: 20px;
		height: 30%;
		width: 40%;
		border-radius: 20px;
		box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 7px 20px 0 rgba(0, 0, 0, 0.17);
	}

	.cancelpopup {
		background-color: #fff4f3;
		margin: 15% auto;
		padding: 20px;
		height: 30%;
		width: 40%;
		border-radius: 20px;
		box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 7px 20px 0 rgba(0, 0, 0, 0.17);
	}

	.closeBttn {
		color: #ccc;
		float: right;
		font-size: 30px;
	}

	.closeBttn:hover,
	.closeBttn:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
	}

	.doneBttn {
		background-color: #1e1312;
		height: 50px;
		width: 120px;
		border-radius: 20px;
		margin-top: 15px;
		margin-left: 200px;
		font-family: "Times New Roman", Times, serif;
		font-size: 15px;
		color: white;
		text-align: center;
	}

	.doneBttn:hover {
		background: #333;
	}

    .reference {
		font-family: "Times New Roman", Times, serif;
		font-size: 15px;
		font-weight: bold;
		color: #786462;
		margin-left: 10px;
		margin-top: -5px;
	}
</style>


<body>
	<div class="reservation-box">
		<img class="img-ebts_logo" src="image/ebts_trans.png">
		<a href="booking.php">
			<i class="fa-solid fa-circle-xmark"></i>
		</a>
        <p class="reference">Reference Number: </p>
		<p class="details">DETAILS</p>

		<div class="border1">
			<i class="fa-solid fa-house-chimney"></i>
			<input class="houseName" type="text" name="houseName" readonly/>
			<i class="fa-solid fa-money-bills"></i>
			<input class="rate" type="text" name="cost" /> <input class="perNight" type="text" name="perNight" placeholder="          /per night" readonly/>
			<i class="fa-solid fa-location-dot"></i>
			<input class="location" type="text" name="address" readonly/>
		</div>

        <p class="details">CUSTOMER DETAILS</p>
        <div class="border22">
        <p class="text2">Full Name</p>
			<input class="cdeets" type="text" name="cdeets" readonly/>
			<p class="text3">Contact Number</p>
			<input class="cnum" type="text" name="cnum" readonly/>
            <p class="text33">Exail Address</p>
			<input class="eadd" type="text" name="eadd" readonly/>
        </div>
		<p class="reservation-details">RESERVATION DETAILS</p>
		<div class="border2">
			<form class="" action="" method="post">
				<p class="current-date">CURRENT DATE:</p>
				<p id="crrnt_date" class="crrnt-date"></p>
				<p class="text4">Check-in</p>
				<p class="text5">Check-out</p>
				<input type="date" class="date-in" name="from_date" placeholder="MM/DD/YY">
				<input type="date" class="date-out" name="to_date" placeholder="MM/DD/YY">
				<p class="text6">Number of Guest</p>
				<input type="number" class="numguest" name="number_guest" placeholder="--" min="1" max="12">
				<div id="simpleModal" class="modal">
					<div class="modal-content">
						<span class="closeBttn">&times;</span>
						<i class="fa-regular fa-circle-check"></i>
						<h2 class="h2">RESERVATION CONFIRMED</h2>
						<p class="text7">Customer's reservation has been confirmed.</p>
						<button class="doneBttn">DONE</button>
					</div>
				</div>
			</form>
			<button id="confirmBttn" class="confirm-btn">CONFIRM</button>
			<button type= "cancel" class="cancel-btn" >CANCEL</button>
			<div class="modal">
			<div class = "cancelpopup">
			<i class="fa-regular fa-circle-x"></i>
			<h2 class="h2">RESERVATION CANCELLED</h2>
			<p class="text7">Customer's reservation has been cANCELLED.</p>
			<button class="doneBttn">DONE</button>
		</div>
	</div>

	<script>
		date = new Date();
		year = date.getFullYear();
		month = date.getMonth() + 1;
		day = date.getDate();

		if (month == "1") {
			month = "January";
		} else if (month == "2") {
			month = "February";
		} else if (month == "3") {
			month = "March";
		} else if (month == "4") {
			month = "April";
		} else if (month == "5") {
			month = "May";
		} else if (month == "6") {
			month = "June";
		} else if (month == "7") {
			month = "July";
		} else if (month == "8") {
			month = "August";
		} else if (month == "9") {
			month = "September";
		} else if (month == "10") {
			month = "October";
		} else if (month == "11") {
			month = "November";
		} else if (month == "12") {
			month = "December";
		}

		document.getElementById("crrnt_date").innerHTML = month + " " + day + ", " + year;
	</script>

	<script>
		var modal = document.getElementById('simpleModal');
		var modalBtn = document.getElementById('confirmBttn');
		var closeBtn = document.getElementsByClassName('closeBttn')[0];
		var doneBtn = document.getElementById('doneBttn');

		modalBtn.onclick = function() {
			modal.style.display = "block";
		}
		closeBtn.onclick = function() {
			modal.style.display = "none";
		}

		doneBtn.onclick = function() {
			modal.style.display = "none";
		}
	</script>

</body>


</html>