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
		<nav class="navbar navbar-default navbar-fixed-top">
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
  
		<center>
			 <div class="well well-lg">
                    <label for="sel1" style="font-size:150%">Select courses taken:</label>


	<p>
    <?php
    session_start();
    $courses = $_SESSION['courses'];
    $coreCourse = 34;
    $coreElec = 6;
    $relatedArea = 10;
    $concenCore = 12;
    $concenElec = 7;
    $freeElec = 16;

		$x=0;
		foreach($courses[$x] as $courses) {
			echo $courses[$x], '<br>';
			$x++;
		}
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      
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
    echo sizeof($courses);
    while($row=$results->fetch_assoc()) {

        for($x=0;$x<sizeof($courses);$x++) {
            if($row["number"] == $courses[$x]) {
								$coreCourse = $coreCourse - $row["hours"];

            }

        }
    }

    }

		?>
		</p>
			</div>
		</center>
		
		<div class="container-fluid bg-blue">
		</div>
		
	</nav>  	
	  
	</body>
</html>