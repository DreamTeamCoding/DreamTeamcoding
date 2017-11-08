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
  
    
    <?php
    $courses = array();

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
          

                  session_start();
                  $_SESSION['courses'] = $courses;
      
                  header('Refresh: 2; URL = results.php');
              
          }


    ?>
		<center>
			 <div class="well well-lg">
                    <label for="sel1" style="font-size:150%">Select courses taken:</label>

                    <div class="container" style="text-align:left">
                        <p><strong>Core Courses:</strong></p>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $courses["114"]?>">Introduction to Computer Science</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $courses["115"]?>">Programming I</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $courses["160"]?>">Computer Science Major Orientation Seminar</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $courses["218"]?>">Data Structures		</label>
                            </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $courses["215"]?>">Programming II		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $courses["114"]?>">Sophomore Seminar in Computer Science		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $courses["114"]?>">Computer Architecture		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $courses["114"]?>">Database and Intelligent Systems		</label>
                          </div>
                            <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $courses["114"]?>">Introduction to Web Design		</label>
                          </div>
                            <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $courses["114"]?>">Data Mining & Machine Learning		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $courses["114"]?>">Net-Centric Computing		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $courses["114"]?>">Senior Seminar in Computer Science		</label>
                            </div>
                            </div>
                            <div style="text-align:center;">
                                    <button onclick="pageLoad()" class="btn" role="button">Submit</button>
                                </div><br/>
                        </form>
                    </div>
			</div>
		</center>
		
		<div class="container-fluid bg-blue">
		</div>
		
	</nav>  	
	  
	</body>
</html>