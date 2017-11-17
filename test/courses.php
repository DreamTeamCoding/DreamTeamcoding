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
    $csc240 = $csc300 = $csc315 = $csc322 = $csc409 = $csc412 = $csc413 = $csc415 = 0;
    $csc420 = $csc421 = $csc430 = $csc435 = $csc452 = $math360 = $math410 = 0;
    //Related Area Requirements
    $math165 = $math262 = $math351 = 0;
    //Concentration Core
    $csc305 = $csc318 = $csc414 = $csc451 = 0;
    //Concentration Electives
    $math265 = $math267 = $math275 = $math345 = $math350 = $math352 = $math354 = $math358 = 0;
    $math360 = $math365 =$math366 =$math400 =$math410 =$math450 =$math452 =$math454 = $math455 = 0;
    $math465 = $biol101 = $biol102 = $biol210 = $biol220 = $biol221 = $biol300 = $chem103 = $chem1031 = 0;
    $chem102 = $chem1021 = $chem200 = $chem202 = $chem2021 = $chem205 = $chem215 = $chem219 = $chem301 = 0;
    $chem3011 = $chem302 =  $chem3021 = $phys181 = $phys191 = $phys182 = $phys192 = $stat351 = 0;

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
          if($_POST["csc315"] == 1) {
            array_push($coreElec, "315");
          }
          if($_POST["csc322"] == 1) {
            array_push($coreElec, "322");
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
          if($_POST["csc415"] == 1) {
            array_push($coreElec, "415");
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
          if($_POST["csc452"] == 1) {
            array_push($coreElec, "452");
          }
          if($_POST["math360"] == 1) {
            array_push($coreElec, "360");
          }
          if($_POST["math410"] == 1) {
            array_push($coreElec, "410");
          }

          //Core Electives
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
          if($_POST["csc305"] == 1) {
            array_push($concenCore, "305");
          }
          if($_POST["csc318"] == 1) {
            array_push($concenCore, "318");
          }
          if($_POST["csc414"] == 1) {
            array_push($concenCore, "414");
          }
          if($_POST["csc451"] == 1) {
            array_push($concenCore, "451");
          }

          //Concentration Electives
          if($_POST["math265"] == 1) {
            array_push($concenElec, "265");
          }
          if($_POST["math267"] == 1) {
            array_push($concenElec, "267");
          }
          if($_POST["math275"] == 1) {
            array_push($concenElec, "275");
          }
          if($_POST["math345"] == 1) {
            array_push($concenElec, "345");
          }
          if($_POST["math350"] == 1) {
            array_push($concenElec, "350");
          }
          if($_POST["math352"] == 1) {
            array_push($concenElec, "352");
          }
          if($_POST["math354"] == 1) {
            array_push($concenElec, "354");
          }
          if($_POST["math358"] == 1) {
            array_push($concenElec, "358");
          }
          if($_POST["math360"] == 1) {
            array_push($concenElec, "360");
          }
          if($_POST["math365"] == 1) {
            array_push($concenElec, "365");
          }
          if($_POST["math366"] == 1) {
            array_push($concenElec, "366");
          }
          if($_POST["math400"] == 1) {
            array_push($concenElec, "400");
          }
          if($_POST["math410"] == 1) {
            array_push($concenElec, "410");
          }
          if($_POST["math450"] == 1) {
            array_push($concenElec, "450");
          }
          if($_POST["math452"] == 1) {
            array_push($concenElec, "452");
          }
          if($_POST["math454"] == 1) {
            array_push($concenElec, "454");
          }
          if($_POST["math455"] == 1) {
            array_push($concenElec, "455");
          }
          if($_POST["math465"] == 1) {
            array_push($concenElec, "465");
          }
          if($_POST["biol101"] == 1) {
            array_push($concenElec, "101");
          }
          if($_POST["biol102"] == 1) {
            array_push($concenElec, "102");
          }
          if($_POST["biol210"] == 1) {
            array_push($concenElec, "210");
          }
          if($_POST["biol220"] == 1) {
            array_push($concenElec, "220");
          }
          if($_POST["biol221"] == 1) {
            array_push($concenElec, "221");
          }
          if($_POST["biol300"] == 1) {
            array_push($concenElec, "300");
          }
          if($_POST["chem103"] == 1) {
            array_push($concenElec, "103");
          }
          if($_POST["chem1031"] == 1) {
            array_push($concenElec, "1031");
          }
          if($_POST["chem102"] == 1) {
            array_push($concenElec, "102");
          }
          if($_POST["chem1021"] == 1) {
            array_push($concenElec, "1021");
          }
          if($_POST["chem200"] == 1) {
            array_push($concenElec, "200");
          }
          if($_POST["chem202"] == 1) {
            array_push($concenElec, "202");
          }
          if($_POST["chem2021"] == 1) {
            array_push($concenElec, "2021");
          }
          if($_POST["chem205"] == 1) {
            array_push($concenElec, "205");
          }
          if($_POST["chem215"] == 1) {
            array_push($concenElec, "215");
          }
          if($_POST["chem219"] == 1) {
            array_push($concenElec, "219");
          }
          if($_POST["chem301"] == 1) {
            array_push($concenElec, "301");
          }
          if($_POST["chem3011"] == 1) {
            array_push($concenElec, "3011");
          }
          if($_POST["chem302"] == 1) {
            array_push($concenElec, "302");
          }
          if($_POST["chem3021"] == 1) {
            array_push($concenElec, "3021");
          }
          if($_POST["phys181"] == 1) {
            array_push($concenElec, "181");
          }
          if($_POST["phys191"] == 1) {
            array_push($concenElec, "191");
          }
          if($_POST["phys182"] == 1) {
            array_push($concenElec, "182");
          }
          if($_POST["phys192"] == 1) {
            array_push($concenElec, "192");
          }
          if($_POST["stat351"] == 1) {
            array_push($concenElec, "351");
          }



                  //Start session and send courses
                  session_start();
                  $_SESSION['courses'] = $coreCourses;
                  $_SESSION['coreElec'] = $coreElec;
                  $_SESSION['relatedArea'] = $relatedArea;
                  $_SESSION['concenCore'] = $concenCore;
                  $_SESSION['concenElec'] = $concenElec;
                  header('Refresh: 2; URL = results.php');
              
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
                            <label><input type="checkbox" value="<?php echo  $csc315 = 1?>" name="csc315">Programming Languages</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc322 = 1?>" name="csc322">UNIX Administration & System Programming</label>
                            </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc409 = 1?>" name="csc409">Artificial Intelligence		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc412 = 1?>" name="csc412">Software Methodology & Engineering		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc413 = 1?>" name="csc413">System Analysis & Design		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc415 = 1?>" name="csc415">Computer Graphics		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc420 = 1?>" name="csc420">Operating System		</label>
                          </div>
                            <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc421 = 1?>" name="csc421">Special Topics in Computer Science</label>
                          </div>
                            <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc430 = 1?>" name="csc430">Undergraduate Research in Computer Science</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc435 = 1?>" name="csc435">Advanced Web Design		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc452 = 1?>" name="csc452">Internship		</label>
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
                            <label><input type="checkbox" value="<?php echo  $csc305= 1?>" name="csc305">Introduction to Bioinformatics		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc318 = 1?>" name="csc318">Algorithms		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc414 = 1?>" name="csc414">Python Programming & Visualization		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $csc451 = 1?>" name="csc451">Numerical & Symbolic Computing		</label>
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
                            <label><input type="checkbox" value="<?php echo  $math265 = 1?>" name="math265">Calculus II		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math267 = 1?>" name="math267">Calculus III		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math275 = 1?>" name="math275">Foundation of Mathematics		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math345 = 1?>" name="math345">History of Mathematics		</label>
                            </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math350 = 1?>" name="math350">Number Theory		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math352 = 1?>" name="math352">College Algebra		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math354 = 1?>" name="math354">Abstract Algebra I		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math358 = 1?>" name="math358">Differential Equations		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math360 = 1?>" name="math360">Applied Cryptography & Data Security		</label>
                          </div>
                            <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math365 = 1?>" name="math365">Junior Exit Seminar		</label>
                          </div>
                            <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math366 = 1?>" name="math366">Complex Variables		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math400 = 1?>" name="math400">Operations Research Techniques		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math410 = 1?>" name="math410">Linear Optimization		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math450 = 1?>" name="math450">Advanced Calculus		</label>
                          </div>
                          <div class="checkbox">
                           <label><input type="checkbox" value="<?php echo  $math452 = 1?>" name="math452">Internship		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math454 = 1?>" name="math454">Abstract Algebra II		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math455 = 1?>" name="math455">Elements of Real Analysis		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $math465 = 1?>" name="math465">Exit Seminar in Mathematics			</label>
                            </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $biol101 = 1?>" name="biol101">General Biology for Majors I/Lab			</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $biol102 = 1?>" name="biol102">General Biology for Majors II/Lab			</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $biol210 = 1?>" name="biol210">Genetics/Lab			</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $biol220 = 1?>" name="biol220">General Zoology/Lab		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $biol221 = 1?>" name="biol221">General Botany/Lab			</label>
                          </div>
                            <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $biol300 = 1?>" name="biol300">General Ecology/Lab		</label>
                          </div>
                            <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $chem103 = 1?>" name="chem103">General Chemistry I		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $chem1031 = 1?>" name="chem1031">General Chemistry I Lab			</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $chem102 = 1?>" name="chem102">General Chemistry II		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $chem1021 = 1?>" name="chem1021">General Chemistry II Lab			</label>
                          </div>
                          <div class="checkbox">
                           <label><input type="checkbox" value="<?php echo  $chem200 = 1?>" name="chem200">Additional Topics in General Chemistry			</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $chem202 = 1?>" name="chem202">Quantiative Chemistry			</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $chem2021 = 1?>" name="chem2021">Quantiative Chemistry Lab		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $chem205 = 1?>" name="chem205">Inorganic Chemistry/Lab			</label>
                            </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $chem215 = 1?>" name="chem215">Introduction to Biomedical Science 		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $chem219 = 1?>" name="chem219">Basic Principles of Research		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $chem301 = 1?>" name="chem301">Organic Chemistry I			</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $chem3011 = 1?>" name="chem3011">Organic Chemistry I/Lab			</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $chem302 = 1?>" name="chem302">Organic Chemistry II			</label>
                          </div>
                            <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $chem3021 = 1?>" name="chem3021">Organic Chemistry II Lab			</label>
                          </div>
                            <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $phys181 = 1?>" name="phys181">University Physics I	</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $phys191 = 1?>" name="phys191">University Physics I Lab		</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $phys182 = 1?>" name="phys182">University Physics II	</label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="<?php echo  $phys192 = 1?>" name="phys192">University Physics II Lab	</label>
                          </div>
                          <div class="checkbox">
                           <label><input type="checkbox" value="<?php echo  $stat351 = 1?>" name="stat351">Probability & Statistics I		</label>
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