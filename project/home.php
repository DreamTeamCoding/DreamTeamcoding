<!DOCTYPE HTML>  
<html>
<head>
<title>Electric Company</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php

session_start();
$user = $_SESSION['login_user'];

$usernameErr = $monthErr = $yearErr = $unitsErr =  "";
$username = $month= $year = $units = "";
$usernameDB = $monthDB = $yearDB = $unitsDB =  0;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
		if (empty($_POST["username"])) 
	{
		$usernameErr = "Username is required";
		$usernameDB = 0;
	} 
		else
		{
			$username = test_input($_POST["username"]);
			$usernameDB = 1;
		}
 
  if (empty($_POST["month"])) 
  {
    $monthErr = "Month is required";
    $monthDB = 0;
  } 
  else
	{
		$month = test_input($_POST["month"]);
		$monthDB = 1;
	}
  
  if (empty($_POST["year"])) 
  {
    $yearErr = "Year is required";
    $yearDB = 0;
  } 
  else 
  {
    $year = test_input($_POST["year"]);
    $yearDB = 1;
  }
 

  if (empty($_POST["units"])) 
  {
    $unitsErr = "Units is required";
    $unitsDB = 0;
  } 
  else 
  {
    $units = test_input($_POST["units"]);
    $unitsDB = 1;
  }
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$servername = 'localhost';
$uname = 'root';
$password = '';
$dbname = "electric";




// Create connection
$conn = new mysqli($servername, $uname, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


// insert query
	$sql2 = "SELECT * FROM `user` WHERE `username` like '$user' AND `role` = 0";
	$sql3 = "SELECT * FROM `user` WHERE `username` like '$user' AND `role` = 1";
	$sql = "SELECT * FROM `usage` WHERE `username` like '$user' ORDER BY year, month";
	$results = $conn->query($sql);
	$results2 = $conn->query($sql2);
	$results3 = $conn->query($sql3);

	if($results2->num_rows > 0) 	//User Page
	{
		if ($results->num_rows >0)
		{
			?>
				<h1>Electric Company</h1>
 				<br>
 				<h3>Welcome!</h3>
				<table border=1>
					<tr>
						<td>Month</td>
						<td>Year</td>
						<td>Units</td>
					</tr>
				
				
			<?php
			while ($row=$results->fetch_assoc())
			{
				?>
				<tr>
					<td>
				<?php
					echo $row["month"] . "</td><td>" . $row["year"] . "</td><td>" . $row["units"] . "</td></tr>";
			}
			?>
			</table>
			<?php
		}
		else
		{
			?>
			<h1>Electric Company</h1>
 			<br>
 			<h3>Welcome!</h3>
			<?php
			echo "You have no units sold.";

		}
	}
	else if($results3->num_rows > 0) 	//Admin Page
	{
		if(($usernameDB==1) && ($monthDB==1) && ($yearDB==1) && ($unitsDB==1))
		{
		
		// insert query
		$sql4 = "INSERT INTO usage (username, month, year, units) VALUES ('$username','$month', '$year', '$units')";
		if ($conn->query($sql4) === TRUE) {
			echo "Your entry has been successfully inserted";
		} else {
			echo "Error entering into the database: " . $conn->error;
		}
		
		$conn->close();
		}
			
			?>
				
				<h1>Electric Company Admin Access</h1>
				<br>
				<h3>Enter information:</h3>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<table>
				<tr><td>Username</td><td><input type="text"value="<?php echo $username;?>"name="username"/></td>
				<td><span class="error">* <?php echo $usernameErr;?></span></td></tr>
				 <tr><td>Month</td><td><input type="text"value="<?php echo $month;?>"name="month"/></td>
				<td><span class="error">* <?php echo $monthErr;?></span></td></tr>
				<tr><td>Year</td><td><input type="text"value="<?php echo $year;?>"name="year"/></td>
				 <td><span class="error">* <?php echo $yearErr;?></span></td></tr>
				 <tr><td>Units</td><td><input type="text"value="<?php echo $units;?>"name="units"/></td>
				 <td><span class="error">* <?php echo $unitsErr;?></span></td></tr>

				 <tr><td>Submit</td><td><input type="submit"value="Submit"></td>
				</table>
				</form>
				
				
				<?php

		}
	

	






?> 


</body>

</html>