 <?php

 if(isset($_POST['submit'])){
 	include ('dbconnection.php');/////////////////

 	$name = $_POST['name'];
 	$nic = $_POST['nic'];
 	$tel = $_POST['tel'];
 	$address = $_POST['address'];
////////////////////////////////////////insert///////////////
 	$sql = "INSERT INTO student (name, nic, tel, address) VALUES ('$name', '$nic', '$tel', '$address')";

	mysqli_query($connection, $sql); //Passing SQL

////////////////////////Select//////////////////////////////
	$retrieve = 'SELECT * FROM student'; //Selecting all data from Table
	$result = mysqli_query($connection, $retrieve); //Passing SQL

	echo "<table border=1>
						<tr>			
							<th>Name</th>
							<th>NIC</th>
							<th>Telephone</th>	
						</tr>";

	while($row = mysqli_fetch_assoc($result)){
		
		echo "<tr>
				<td>".$row['name']."</td>
				<td>".$row['nic']."</td>
				<td>".$row['tel']."</td>
			</tr>";
	}	

	echo "</table>";
/////////////////////////////////////////////////////////////
	mysqli_close($connection);
}
?>