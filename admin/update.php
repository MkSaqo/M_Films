<?php 
$db = mysqli_connect('localhost','root','root','Filmer');
mysqli_set_charset($db, "utf8");
$id = $_GET['id'];
$sql = "SELECT * FROM `kinoner` WHERE id = $id";
$conn = mysqli_query($db,$sql);
$result = mysqli_fetch_assoc($conn);

$name = $result['name'];
$country = $result['country'];
$genres = $result['genres'];
$date = $result['date'];
$url = $result['url'];
$home_img = $result['home_img'];
$desc = $result['desc'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<form class="update" method="post" action="action.php">
	 		<table>
	 			<tr>			
					<th><label for="name"> Name :</label></th>
					<td><input id="name" type="text" name="name" value="<?php echo $name ?>"></td>
	 			</tr>		
	 			<tr>			
					<th><label for="country"> Country :</label></th>
					<td><input id="country" type="text" name="country" value="<?php echo $country ?>"></td>
	 			</tr>		
	 			<tr>			
					<th><label for="genres"> Genres :</label></th>
					<td><input id="genres" type="text" name="genres" value="<?php echo $genres ?>"></td>
	 			</tr>		
	 			<tr>			
					<th><label for="date"> Date :</label></th>
					<td><input id="date" type="number" name="date" value="<?php echo $date ?>"></td>
	 			</tr>		
	 			<tr>			
					<th><label for="home_img"> Home img :</label></th>
					<td><input id="home_img" type="text" name="home_img" value="<?php echo $home_img ?>"></td>
	 			</tr>		
	 			<tr>		
					<th><label for="url"> Url :</label></th>
					<td><textarea id="url" name="url"> <?php echo $url ?> </textarea>
	 			</tr>		
	 			<tr>			
					<th><label for="desc1"> Description :</label></th>
					<td><textarea id="desc1" name="desc"> <?php echo $desc ?> </textarea>
				</tr>
				<input type="hidden" name="id" value="<?php echo $id ?>">
			</table>
			<input type="submit" name="update">
		</form>

	</body>
</html>


<?php
	
// 	$sql = "UPDATE `kinoner`
// 		SET `id`='$id',
// 			`name`='$name',
// 			`country`='$country',
// 			`genres`='$genres',
// 			`date`='$date',
// 			`desc`='$desc',
// 			`home_img`='$home_img',
// 			`url`='$url'
// 		WHERE `id` = $id";
// }

?>