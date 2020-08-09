<?php 



$servername = "ec2-34-200-15-192.compute-1.amazonaws.com";
$username = "iloiilkwablohj";
$db = "d2anv05ljnbqct";
$password = '376ae073f6793a36bde44362cb4459998b56ebab5e6f4b63b1d27d6194b71821';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

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

 
