<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>APOS</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link href="style.css" rel="stylesheet">
	</head>
	<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
		<nav class="navbar navbar-default">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			  </button>
			  <br/>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
				<li></li>
			  </ul>
			</div>
		  </div>
		

		<div class="jumbotron text-center">
		  <h1 style="font-size:700%;">A.P.O.S</h1>
		  <i><p style="font-size:250%;">Automatic Plan of Study</p></i>
		</div>
		<img src="/logo.png" style="height: 100px; width:100px; position: absolute; left:0;top:0;">
		<center>
			 <div class="well well-lg">
			 					<div style="text-align:left; font-size: 15px;">
                    <label for="sel1" style="font-size:170%;">Courses Required For Graduation:</label><br>
					<span style='color:red'>*</span> - All courses in this area are required.<br><hr>
										
										
								 



    <?php
		error_reporting( error_reporting() & ~E_NOTICE );
    session_start();
		$courses = $_SESSION['courses'];		//Bring in all courses selected per section
		$coreElec = $_SESSION['coreElec'];
		$relatedArea = $_SESSION['relatedArea'];
		$concenCore = $_SESSION['concenCore'];
		$concenElec = $_SESSION['concenElec'];
    $coreCourse = 34;		//Total Credit hours required for each section
    $coreElecHR = 6;
    $relatedAreaHR = 10;
    $concenCoreHR = 12;
    $concenElecHR = 7;
		$freeElecHR = 16;
		$coreElecRemain = array();		//These two Remain variables hold the remaining courses output
		$concenElecRemain = array();	//In the case that the hours remaining does NOT equal 0
		echo "<br>";
		
	//Generate Passphrase
	$stuff = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	$pass = array(); 
	$alphaLength = strlen($stuff) - 1;
	for ($i = 0; $i < 8; $i++) {
			$num = rand(0, $alphaLength);
			array_push($pass, $stuff[$num]);
	}
		
		
		$servername = 'localhost';
		$DBusername = 'root';
		$DBpassword = '';
		$dbname = "concentration";
		
		// Create connection
		$conn = new mysqli($servername, $DBusername, $DBpassword, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
    $sql = "SELECT * FROM `isystems`";
    $results = $conn->query($sql);
		$sql2 = "SELECT * FROM `isystems` WHERE type = 'CC'";
		$results2 = $conn->query($sql2);
		$sql3 = "SELECT * FROM `isystems` WHERE type='CE'";
		$results3 = $conn->query($sql3);
		$sql4 = "SELECT * FROM `isystems` WHERE type='RAR'";
		$results4 = $conn->query($sql4);
		$sql5 = "SELECT * FROM `isystems` WHERE type='CCE'";
		$results5 = $conn->query($sql5);
		$sql6 = "SELECT * FROM `isystems` WHERE type='CCR'";
		$results6 = $conn->query($sql6);
		//Core Courses
		echo "<label for='sel1' style='font-size:150%;'>Core Courses:<span style='color:red'>*</span></label><br>";
		echo "<div style='margin-left:25px'>";
		$x=0;
    while($row=$results2->fetch_assoc()) {
				$x=0;
				for($x;$x<sizeof($courses);$x++) {
            if($row["number"] == $courses[$x]) {
								$coreCourse = $coreCourse - $row["hours"];
								break;
						}
						else {
							if($x == sizeof($courses)-1) {
								echo $row["prefix"] . $row["number"] . " " . $row["class"] .  " - " .$row["hours"] . "h" . "<br>";
							}
						}
					}
    }
		echo "</div><br><label for='sel1' style='font-size:100%;'>Total Credit Hours Remaining - " . $coreCourse . "</label><br><hr>";
		
		//Core Electives
		echo "<label for='sel1' style='font-size:150%;'>Core Electives:</label><br>";
		echo "<div style='margin-left:25px'>";
		$x=0;
    while($row=$results3->fetch_assoc()) {
			if($coreElecHR <= 0) {
				$coreElecHR = 0;
				break;
			}	
				
			for($x=0;$x<sizeof($coreElec);$x++) {
				if($row["number"] == $coreElec[$x]) {
							$coreElecHR = $coreElecHR - $row["hours"];
							break;
					}
				else {
					if($x==sizeof($coreElec)-1) {
								$course = $row["prefix"] . $row["number"] . " " . $row["class"] .  " - " .$row["hours"] . "h";
								array_push($coreElecRemain, $course);
								
							}
						}
					}
		}
		if($coreElecHR != 0) {
			foreach ($coreElecRemain as $item) {
				echo $item;
				echo "<br>";
			}
		}
		echo "</div><br><label for='sel1' style='font-size:100%;'>Total Credit Hours Remaining - " . $coreElecHR . "</label><br><hr>";
		
		
		
		//Related Area
		echo "<label for='sel1' style='font-size:150%;'>Related Area:<span style='color:red'>*</span></label><br>";
		echo "<div style='margin-left:25px'>";
		$x=0;
		
		while($row=$results4->fetch_assoc()) {
			$x=0;
			for($x;$x<sizeof($relatedArea);$x++) {
				if($row["number"] == $relatedArea[$x]) {
					$relatedAreaHR = $relatedAreaHR - $row["hours"];
					break;
				}
				else {
					if($x==sizeof($relatedArea)-1) {
						echo $row["prefix"] . $row["number"] . " " . $row["class"] .  " - " .$row["hours"] . "h" . "<br>";
					}
					}
				}
			}
				echo "</div><br><label for='sel1' style='font-size:100%;'>Total Credit Hours Remaining - " . $relatedAreaHR . "</label><br><hr>";
		
		//Concentration Core
		echo "<label for='sel1' style='font-size:150%;'>Concentration Core:<span style='color:red'>*</span></label><br>";
		echo "<div style='margin-left:25px'>";
		$x=0;
		
		while($row=$results6->fetch_assoc()) {
			$x=0;
			for($x;$x<sizeof($concenCore);$x++) {
				if($row["number"] == $concenCore[$x]) {
					$concenCoreHR = $concenCoreHR - $row["hours"];
					break;
				}
				else {
					if($x==sizeof($concenCore)-1) {
						echo $row["prefix"] . $row["number"] . " " . $row["class"] .  " - " .$row["hours"] . "h" . "<br>";
					}
					}
				}
			}
				echo "</div><br><label for='sel1' style='font-size:100%;'>Total Credit Hours Remaining - " . $concenCoreHR . "</label><br><hr>";
		
		
				//Concentration Electives
		echo "<label for='sel1' style='font-size:150%;'>Concentration Electives:</label><br>";
		echo "<div style='margin-left:25px'>";
		$x=0;
		
		while($row=$results5->fetch_assoc()) {
			if($concenElecHR <= 0) {
				$concenElecHR = 0;
				break;
			}	
			
			for($x=0;$x<sizeof($concenElec);$x++) {
				if($row["number"] == $concenElec[$x]) {
							$concenElecHR = $concenElecHR - $row["hours"];
							break;
					}
				else {
					if($x==sizeof($concenElec)-1) {
								$course = $row["prefix"] . $row["number"] . " " . $row["class"] .  " - " .$row["hours"] . "h";
								array_push($concenElecRemain, $course);
								
						  }
						}
					}
		}
		if($concenElecHR != 0) {
			foreach ($concenElecRemain as $item) {
				echo $item;
				echo "<br>";
			}
		}
				echo "</div><br><label for='sel1' style='font-size:100%;'>Total Credit Hours Remaining - " . $concenElecHR . "</label><br><hr>";
		
		
		?>
		<div style='margin-left:25px'>
			</div>
			<a href="/index.php" style="color:#009eee" onMouseOver="this.style.color='blue'"><strong>Return to home page</strong></a>
		</div>
	</center>
	<center>
		<!--
		<div class="well well-lg">
		<div style="text-align:left; font-size: 15px;">
			<label for="sel1" style="font-size:170%;">What classification are you?</label><br><hr>
			
			<?php 
			print_r($pass);
							foreach ($pass as $item) {
								echo $item;
							}
			?>
	</div>
		</div>
		<div style="text-align:center;">
			
			</div><br/>
			
			
			
		</div>
		-->
	</center>
	<div class="container-fluid bg-blue" style="text-align:left">
		</div>
		




	</nav>  	
	  
	</body>
</html>
