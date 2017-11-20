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
		
      <img src="/logo.png" style="height: 100px; width:100px; position: absolute; left:0;top:0;">
		<div class="jumbotron text-center">
		  <h1 style="font-size:700%;">A.P.O.S</h1>
		  <i><p style="font-size:250%;">Automatic Plan of Study</p></i>
		</div>
  
    
    <?php
    error_reporting( error_reporting() & ~E_NOTICE );
    //Core Courses
    $csc114 = $csc115 = $csc160 = $csc215 = $csc218 = $csc230 = $csc260 = $csc314 = 0;
    $csc325 = $csc335 = $csc401 = $csc410 = $csc460 = 0;
    //Core Electives
    $csc240 = $csc300 = $csc315 = $csc318 = $csc322 = $csc414 = $csc409 = $csc412 = 0;
    $csc413 = $csc415 = $csc420 = $csc421 = $csc430 = $csc435 = $csc451 = $csc452 = 0;
	$math360 = $math410 = 0;
    //Related Area Requirements
    $math165 = $math262 = $math351 = 0;
    //Concentration Core
    $buad115 = $buad190 = $acct210 = $mngt221 = $bmis380 = 0;
    //Concentration Electives
    $bmis386 = $bmis485 = $bmis489 = 0;

    $coreCourses = array();
    $coreElec = array();
    $relatedArea = array();
    $concenCore = array();
    $concenElec = array();

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
          //Core Courses
          if($_POST["csc114"] == 1) {
            array_push($coreCourses, "114");
          }
          if($_POST["csc115"] == 1) {
            array_push($coreCourses, "115");
          }
          if($_POST["csc160"] == 1) {
            array_push($coreCourses, "160");
          }
          if($_POST["csc215"] == 1) {
            array_push($coreCourses, "215");
          }
          if($_POST["csc218"] == 1) {
            array_push($coreCourses, "218");
          }
          if($_POST["csc230"] == 1) {
            array_push($coreCourses, "230");
          }
          if($_POST["csc260"] == 1) {
            array_push($coreCourses, "260");
          }
          if($_POST["csc314"] == 1) {
            array_push($coreCourses, "314");
          }
          if($_POST["csc325"] == 1) {
            array_push($coreCourses, "325");
          }
          if($_POST["csc335"] == 1) {
            array_push($coreCourses, "335");
          }
          if($_POST["csc401"] == 1) {
            array_push($coreCourses, "401");
          }
          if($_POST["csc410"] == 1) {
            array_push($coreCourses, "410");
          }
          if($_POST["csc460"] == 1) {
            array_push($coreCourses, "460");
          }

          //Core Electives
          if($_POST["csc240"] == 1) {
            array_push($coreElec, "240");
          }
          if($_POST["csc300"] == 1) {
            array_push($coreElec, "300");
          }
          if($_POST["csc305"] == 1) {
            array_push($coreElec, "305");
          }
          if($_POST["csc315"] == 1) {
            array_push($coreElec, "315");
          }
          if($_POST["csc418"] == 1) {
            array_push($coreElec, "418");
          }
          if($_POST["csc322"] == 1) {
            array_push($coreElec, "322");
          }
          if($_POST["csc414"] == 1) {
            array_push($coreElec, "414");
          }
          if($_POST["csc409"] == 1) {
            array_push($coreElec, "409");
          }
          if($_POST["csc412"] == 1) {
            array_push($coreElec, "412");
          }
          if($_POST["csc413"] == 1) {
            array_push($coreElec, "413");
          }
          if($_POST["csc420"] == 1) {
            array_push($coreElec, "420");
          }
          if($_POST["csc421"] == 1) {
            array_push($coreElec, "421");
          }
          if($_POST["csc430"] == 1) {
            array_push($coreElec, "430");
          }
		   if($_POST["csc435"] == 1) {
            array_push($coreElec, "435");
          }
		   if($_POST["csc451"] == 1) {
            array_push($coreElec, "451");
          }
		   if($_POST["csc452"] == 1) {
            array_push($coreElec, "452");
          }
          if($_POST["math360"] == 1) {
            array_push($coreElec, "360");
          }
          if($_POST["math410"] == 1) {
            array_push($coreElec, "410");
          }

          //Related Area Requirements
          if($_POST["math165"] == 1) {
            array_push($relatedArea, "165");
          }
          if($_POST["math262"] == 1) {
            array_push($relatedArea, "262");
          }
          if($_POST["math351"] == 1) {
            array_push($relatedArea, "351");
          }
          
          //Concentration Core
          if($_POST["buad115"] == 1) {
            array_push($concenCore, "115");
          }
          if($_POST["buad190"] == 1) {
            array_push($concenCore, "190");
          }
          if($_POST["acct210"] == 1) {
            array_push($concenCore, "210");
          }
          if($_POST["mngt221"] == 1) {
            array_push($concenCore, "221");
          }
		  if($_POST["bmis"] == 1) {
            array_push($concenCore, "380");
          }

          //Concentration Electives
          if($_POST["bmis386"] == 1) {
            array_push($concenElec, "386");
          }
          if($_POST["bmis485"] == 1) {
            array_push($concenElec, "485");
          }
          if($_POST["bmis489"] == 1) {
            array_push($concenElec, "489");
          }



                  //Start session and send courses
                  session_start();
                  $_SESSION['courses'] = $coreCourses;
                  $_SESSION['coreElec'] = $coreElec;
                  $_SESSION['relatedArea'] = $relatedArea;
                  $_SESSION['concenCore'] = $concenCore;
                  $_SESSION['concenElec'] = $concenElec;
                  header('Refresh: 2; URL = results2.php');
              
          }


    ?>
		<center>
			 <div class="well well-lg">
                    <label for="sel1" style="font-size:170%">Select courses taken:</label>

                    <!--  CORE COURSES  -->
                    <div class="container" style="text-align:left">
                        <p style="font-size:130%"><strong>Core Courses:</strong></p>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc114 = 1?>" name="csc114">Introduction to Computer Science</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc115 = 1?>" name="csc115">Programming I</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc160 = 1?>" name="csc160">Computer Science Major Orientation Seminar</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc218 = 1?>" name="csc218">Data Structures		</label>
                            </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc215 = 1?>" name="csc215">Programming II		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc230 = 1?>" name="csc230">Object-Oriented Programming		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc260 = 1?>" name="csc260">Sophomore Seminar in Computer Science		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc314 = 1?>" name="csc314">Computer Architecture		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc325 = 1?>" name="csc325">Database and Intelligent Systems		</label>
                          </div>
                            <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc335 = 1?>" name="csc335">Introduction to Web Design		</label>
                          </div>
                            <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc401 = 1?>" name="csc401">Data Mining & Machine Learning		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc410 = 1?>" name="csc410">Net-Centric Computing		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc460 = 1?>" name="csc460">Senior Seminar in Computer Science		</label>
                            </div>
                            </div>
                            <div style="text-align:center;">
                            
                                </div><br/>
                        
                    </div>

                    
			</div>
      <div class="well well-lg">
                    

                    <!--  RELATED AREA REQUIREMENTS  -->
                    <div class="container" style="text-align:left">
                        <p style="font-size:130%"><strong>Core Electives:</strong></p>
                        
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc240 = 1?>" name="csc240">Introduction to Cybersecurity</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc300 = 1?>" name="csc300">Introduction to Mobile Robots</label>
                          </div>
						  <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc305 = 1?>" name="csc305">Introduction to Bioinformatics</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc315 = 1?>" name="csc315">Programming Languages</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc318 = 1?>" name="csc318">Algorithms</label>
                            </div>
						  <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc322 = 1?>" name="csc322">UNIX Administration & System Programming</label>
                            </div>
						  <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc414 = 1?>" name="csc414">Python Visualization</label>
                            </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc409 = 1?>" name="csc409">Artificial Intelligence</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc412 = 1?>" name="csc412">Software Methodology & Engineering</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc413 = 1?>" name="csc413">System Analysis & Design</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc415 = 1?>" name="csc415">Computer Graphics</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc420 = 1?>" name="csc420">Operating System</label>
                          </div>
                            <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc421 = 1?>" name="csc421">Special Topics in Computer Science</label>
                          </div>
                            <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc430 = 1?>" name="csc430">Undergraduate Research in Computer Science</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc435 = 1?>" name="csc435">Advanced Web Design</label>
                          </div>
						  <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc451 = 1?>" name="csc451">Numerical & Symbolic Computing</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc452 = 1?>" name="csc452">Internship</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math360 = 1?>" name="math360">Introduction to Cryptography & Data Security</label>
                          </div>
                          <div class="checkbox">
                           <label><input type="checkbox" value="<?php echo  $math410 = 1?>" name="math410">Linear Optimization	</label>
                          </div>
                            </div>
                            <div style="text-align:center;">
                           
                                </div><br/>
                        
                    </div>

                    
			</div>
      <div class="well well-lg">
                    

                    <!--  Related Area  -->
                    <div class="container" style="text-align:left">
                        <p style="font-size:130%"><strong>Related Area Requirements:</strong></p>
                        
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math165= 1?>" name="math165">Calculus I		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math262 = 1?>" name="math262">Discrete Methods		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math351 = 1?>" name="math351">Linear Algebra		</label>
                          </div>
                            </div>
                            <div style="text-align:center;">
                            
                                </div><br/>
                        
                    </div>

                    
			</div>

      <div class="well well-lg">
                    

                    <!--  Concentration Core  -->
                    <div class="container" style="text-align:left">
                        <p style="font-size:130%"><strong>Concentration Core:</strong></p>
                        
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $buad115= 1?>" name="buad115">Introduction to Business</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $buad190 = 1?>" name="buad190">Management Information Systems I</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $acct210 = 1?>" name="acct210">Financial Accounting</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $mngt221 = 1?>" name="mngt221">Principles of Management</label>
                          </div>
						  <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $bmis380 = 1?>" name="bmis380">Management Information Systems II</label>
                          </div>
                            </div>
                            <div style="text-align:center;">
                            
                                </div><br/>
                        
                    </div>

                    
			</div>



      <div class="well well-lg">
                    

                    <!--  CONCENTRATION ELECTIVES  -->
                    <div class="container" style="text-align:left">
                        <p style="font-size:130%"><strong>Core Electives:</strong></p>
                        
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $bmis386 = 1?>" name="bmis386">MIS System Analysis</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $bmis485 = 1?>" name="bmis485">Decision Support Systems</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $bmis489 = 1?>" name="bmis489">IS Project Management</label>
                          </div>
                            </div>
                            <div style="text-align:center;">
                            <input type="submit"value="Submit" class="btn" role="button">
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
