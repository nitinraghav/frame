<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="addimage.php" method="POST" enctype="multipart/form-data">
		
		<p>Artwork name:</p>
		<input type="text" name="artwork_name" size=255></p>
	
		<p>Picture:</p>
		<input type="file" name="filep" size=255>
		
		<p>Artist:</p>
		<input type="text" name="artist_name" size=255>
					
		<input type="submit" name="action" value="Add New Artwork">
				
	</form>
</body>
</html>