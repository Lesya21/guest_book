<!DOCTYPE html>
<html>
<head>
	<title>Гостевая книга</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	 <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<h1>Добро пожаловать на сайт Гостевой книги!</h1>
	<section class="inner">
		<h2>Оставьте ваш отзыв</h2>
		<div class="form-wrapper">
			<form method="POST" action="ajax/send.php">
				<input type="text" name="user_name" placeholder="Ваше имя">
				<input type="text" name="user_mail" placeholder="Ваш E-mail">
				<input type="text" name="user_link" placeholder="Ваш url">
				<textarea name="user_text" placeholder="Ваше сообщение"></textarea>
				<input type="submit" name="send">
			</form>
		</div>
	</section>
</body>
</html>



