<?php
	require_once('scripts/config.php');
    confirm_logged_in();

	$allgenre = getAll("tbl_genre");

	if(isset($_POST['submit'])){
		$cover = $_FILES['cover'];
		$title = $_POST['title'];
		$year = $_POST['year'];
		$run = $_POST['run'];
		$story = $_POST['story'];
		$trailer = $_POST['trailer'];
		$release = $_POST['release'];
		$genre = $_POST['genList'];

		$result = addMovies($cover, $title, $year, $run, $story, $trailer, $release, $genre);
		$message = $result;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Movie</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.1/css/foundation-float.css">
</head>
<body>
	<?php if(!empty($message)):?>
		<p><?php echo $message;?></p>
	<?php endif;?>
	<form class="row" action="admin_addmovie.php" method="post" enctype="multipart/form-data">
		<label class="columns" for="cover">Cover Image:</label>
		<input class="columns" type="file" name="cover" id="cover" value="">

		<label class="columns" for="title">Movie Title:</label>
		<input class="columns" type="text" name="title" id="title" value="">

		<label class="columns" for="year">Movie Year:</label>
		<input class="columns" type="text" name="year" id="year" value="">

		<label class="columns" for="run">Movie Runtime:</label>
		<input class="columns" type="text" name="run" id="run" value="">

		<label class="columns" for="release">Movie Release:</label>
		<input class="columns" type="text" name="release" id="release" value="">

		<label class="columns" for="trailer">Movie Trailer:</label>
		<input class="columns" type="text" name="trailer" id="trailer" value="">

		<label class="columns" for="story">Movie Story:</label>
		<input class="columns" type="text" name="story" id="story" value="">
		
		<select class="columns" name="genList">
			<option>Please select a movie genre..</option>

			<?php while($found_genre = $allgenre->fetch(PDO::FETCH_ASSOC)):?>	
				<option value="<?php echo $found_genre['genre_id'];?>">
					<?php echo $found_genre['genre_name'];?>
				</option>
			<?php endwhile;?>

		</select>

		<button class="columns button" type="submit" name="submit">Add Movie</button>
		
	</form>
</body>
</html>