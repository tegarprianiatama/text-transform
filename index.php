<?php

	if (isset($_GET['submit'])) {
		require 'Text.php';

		$text = new Text;

		$output = $text->process($_GET['textInput'], $_GET['transformInput']);

		$output = implode('', $output);
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Text Transform</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<div class="container mt-2 text-center">
		<h1>Text Transform</h1>
	</div>
	<div class="container mt-3 text-center">
		<form action="#" method="GET">
			<div class="form-group">
				<div class="row">
					<label for="textInput">Masukkan Text</label>
					<textarea name="textInput" class="form-control">
					<?php
						if (isset($_GET['textInput'])) {
							echo $_GET['textInput'];
						}
					?>
					</textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label for="transformInput text-left">Masukkan Perintah</label>
					<input type="text" class="form-control" name="transformInput" 
					value="<?php
								if (isset($_GET['transformInput'])) {
									echo $_GET['transformInput'];
								}
							?>">
				</div>
			</div>
			<div>
				<button type="submit" class="btn btn-primary" name="submit" value="Transform">Ubah</button>
			</div>
		</form>
		<p>
			<?php
				if (isset($output)) { 
			?>
		<h1> Hasil : <?php echo $output;  ?> </h1> 
			<?php
				} 
			?>
		</p>
	</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>