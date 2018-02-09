
	<form class="insert" method="post" action="action.php" enctype="multipart/form-data">
		<table>
			<tr>
				<th> <label for="name">Name :</label></th>
				<th><label for="genres">Genres :</label></th>
				<th><label for="country">Country :</label></th>
				<th><label for="date">Date :</label></th>
				<th><label for="url">Url :</label></th>
				<th><label for="desc">Description :</label></th>
				<th><label for="home_img">Home_img :</label></th>
			</tr>
			<tr>
				<td> <input id="name" type="text" name="name"></td>
				<td><input id="genres" type="text" name="genres"></td>
				<td><input id="country" type="text" name="country"></td>
				<td><input id="date" type="number" name="date"></td>
				<td><input id="url" type="text" name="url"></td>
				<td><input id="desc" type="text" name="desc"></td>
				<td><input id="home_img" type="file" name="home_img"></td>
			</tr>
		</table>
		<input type="submit" name="insert" value="NEW">
	</form>