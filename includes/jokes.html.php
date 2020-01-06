<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	  <title>Lista cartilor </title>
	  <meta http-equiv="content-type"
		content="text/html; charset=utf-8""/>
	</head>
	<body>
		<p>Cartile din baza de date:</p>
		<?php foreach ($jokes as $joke): ?>
		<form action = "?deletejoke" method="post">
			<blockquote>
			<p>
			<?php echo htmlspecialchars($joke['text'], ENT_QUOTES, 'UTF-8'); ?>
			<input type="hidden" name="id" value="<?php
				echo $joke['id']; ?>"/>
			<input type="submit" value="Delete"/>
			</p>
		</blockquote>
	    </form>
	<?php endforeach; ?>
	</body>
 </html>