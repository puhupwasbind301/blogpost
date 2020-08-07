<?php 



$servername = "localhost";
$username = "root";
$db = "ajaxcrudprojectdb";

// Create connection
$conn = mysqli_connect($servername, $username, '', $db);

// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo '<pre>';
// echo print_r($conn);
// echo '</pre>';

if(isset($_POST['search'])){
//	echo 'yes';
 $search = $_POST['search'];

if(!empty($search)){

	$query = "SELECT * FROM cars WHERE cars_name LIKE '$search%' ";

			// if($query){
			// 	echo 'hi';
			// }
			$run = mysqli_query($conn,$query);
			if(!$run){
				die("Query Failed:". mysqli_error($conn));
			}

echo "<ul id='slide' type='none' style=' background: rgba(0,0,255,0.3)' >";
	while($row = mysqli_fetch_array($run)){
		 $brand = $row['cars_name'];
		 //echo $brand;
		
		 
		echo "<li>".$brand."</li>";
	 	
		
		}
		echo "</ul>";


}}



 ?>

 