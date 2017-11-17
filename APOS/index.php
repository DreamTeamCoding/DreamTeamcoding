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

		<?php
        


        $choice = 1;

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
		
        if($choice == 1) {
            session_start();
            $_SESSION['user_choice'] = $choice;

            header('Refresh: 2; URL = courses.php');
        }
    }
		?>




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
				<div class="form-group" align="center">
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form-group">
                            <label for="sel1">Select concentration:</label>
                            <select class="form-control"  style="width:40%" id="concen">
                              <option value="<?php echo $choice=1;?>" name="dsci">Data Science</option>
                              <option value="<?php echo $choice=2;?>" name="infor">Information Systems</option>
                            </select>
                          </div>
						<div style="text-align:center;">
							<input type="submit" class="btn" role="button"></input>
						</div><br/>
						<p> Need help?
						<a href="/help.php" style="color:#009eee" onMouseOver="this.style.color='blue'"><strong>Click here</strong></a>
						<img src="/logo.png" style="height: 100px; width:100px; position: absolute; left:0;top:0;">
						</p>
					</form> 
				</div>	
			</div>	
			</div>
		</center>
		
		<div class="container-fluid bg-blue">
		</div>
		
	</nav>  	
	  
	</body>
</html>