<!DOCTYPE html>
<html>
	<head>
		<title>Page Title</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<h3>Using CSS to style an HTML Form</h3>
		<div>
			<form action="add-action.php" method="post">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" placeholder="Your name..">
				<?php if (is_flash('nameError')){?>
					<span class="error-message"><?php echo pop_flash('nameError'); ?></span>
				<?php } ?>
				<label for="age">Age</label>
				<input type="text" id="age" name="age" placeholder="Your age..">
				<!-- <span class="error-message">Password is a required field.</span> -->
				<label for="email">Email</label>
				<input type="text" id="email" name="email" placeholder="Your email.."> 
				<!-- <span class="error-message">Password is a required field.</span> -->
				<input type="submit" value="Add">
			</form>
		</div>
	</body>
</html> 