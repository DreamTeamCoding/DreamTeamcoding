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
			 					<div style="text-align:left">
                    <label for="sel1" style="font-size:170%;">Courses Required For Graduation:</label><br><hr>
										
										
								 



    <?php
		error_reporting( error_reporting() & ~E_NOTICE );
    session_start();
		$courses = $_SESSION['courses'];
		$coreElec = $_SESSION['coreElec'];
		$relatedArea = $_SESSION['relatedArea'];
		$concenCore = $_SESSION['concenCore'];
    $coreCourse = 34;
    $coreElecHR = 6;
    $relatedAreaHR = 10;
    $concenCoreHR = 12;
    $concenElecHR = 7;
    $freeElecHR = 16;

		echo "<br>";
		
		
		
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
		
    $sql = "SELECT * FROM `dscience`";
    $results = $conn->query($sql);
		//$sql2 = "SELECT * FROM `dscience` WHERE prefix = 'CSC' AND (number != 240 ) AND (number != 300 )AND (number != 315 )AND (number != 322 )AND (number != 409 )AND (number != 412 )AND (number != 413 )AND (number != 415 )AND (number != 420 )AND (number != 421 )AND (number != 430 )AND (number != 435 )AND (number != 452 )";
		$sql2 = "SELECT * FROM `dscience` WHERE type='CC'";
		$results2 = $conn->query($sql2);
		$sql3 = "SELECT * FROM `dscience` WHERE type='CE'";
		$sql4 = "SELECT * FROM `dscience` WHERE type='RAR'";
		$sql5 = "SELECT * FROM `dscience` WHERE type='CCR'";
		$sql6 = "SELECT * FROM `dscience` WHERE type='CCE'";
		$results3 = $conn->query($sql3);
		$results4 = $conn->query($sql4);
		$results5 = $conn->query($sql5);
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
								echo $row["prefix"] . $row["number"] . " " . $row["class"] . "<br>";

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
			echo $row;
				$x=0;
				for($x;$x<sizeof($coreElec);$x++) {
            if($row["number"] == $coreElec[$x]) {
								$coreElecHR = $coreElecHR - $row["hours"];
								break;
						}
						else {
							if($x==sizeof($courses)-1) {
								echo $row["prefix"] . $row["number"] . " " . $row["class"] . "<br>";

							}
						}
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
					if($x==sizeof($courses)-1) {
						echo $row["prefix"] . $row["number"] . " " . $row["class"] . "<br>";

					}
					}
				}
			}
				echo "</div><br><label for='sel1' style='font-size:100%;'>Total Credit Hours Remaining - " . $relatedAreaHR . "</label><br><hr>";

		
		//Concentration Core
		echo "<label for='sel1' style='font-size:150%;'>Concentration Core:<span style='color:red'>*</span></label><br>";
		echo "<div style='margin-left:25px'>";
		$x=0;
		
		while($row=$results5->fetch_assoc()) {
			$x=0;
			for($x;$x<sizeof($concenCore);$x++) {
				if($row["number"] == $concenCore[$x]) {
					$concenCoreHR = $concenCoreHR - $row["hours"];
					break;
				}
				else {
					if($x==sizeof($courses)-1) {
						echo $row["prefix"] . $row["number"] . " " . $row["class"] . "<br>";

					}
					}
				}
			}
				echo "</div><br><label for='sel1' style='font-size:100%;'>Total Credit Hours Remaining - " . $concenCoreHR . "</label><br><hr>";



		//Concentration Electives
		echo "<label for='sel1' style='font-size:150%;'>Concentration Electives:</label><br>";
		echo "<div style='margin-left:25px'>";
		$x=0;
		
		while($row=$results6->fetch_assoc()) {
			$x=0;
			for($x;$x<sizeof($concenElec);$x++) {
				if($row["number"] == $concenElec[$x]) {
					$concenElecHR = $concenElecHR - $row["hours"];
					break;
				}
				else {
					if($x==sizeof($courses)-1) {
						echo $row["prefix"] . $row["number"] . " " . $row["class"] . "<br>";

					}
					}
				}
			}
			if($concenElecHR < 0) {
				$concenElecrHR = 0;
			}
				echo "</div><br><label for='sel1' style='font-size:100%;'>Total Credit Hours Remaining - " . $concenElecHR . "</label><br><hr>";
		?>
		</div>

			</div>
		</center>
		
		<div class="container-fluid bg-blue" style="text-align:left">
		</div>
		
	</nav>  	
	  
	</body>
</html>