<!DOCTYPE html>
<html>
<head>
	<title>Гостевая книга</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script> 
	<script type="text/javascript" src="js/form.js"></script>
</head>
<body>
	<h1>Добро пожаловать на сайт Гостевой книги!</h1>
	<section class="inner">
		<h2>Оставьте ваш отзыв</h2>
		<div class="form-wrapper">
			<form method="POST" action="" id="sendForm">
				<input type="text" name="user_name" placeholder="Ваше имя">
				<input type="text" name="user_mail" placeholder="Ваш E-mail">
				<input type="text" name="user_link" placeholder="Ваш url">
				<textarea name="user_text" placeholder="Ваше сообщение"></textarea>
				<input type="button" id="btn" name="send" value="Отправить">
			</form>
		</div>
	</section>
	<section class="inner">
		<div class="table-wrapper">
			<table>
				<tbody>
					<tr>
						<td>Имя пользователя</td>
						<td>E-mail</td>
						<td>Дата добавления</td>
						<td>Сообщение</td>
					</tr>
					<?php include_once ('mysql.php');
					foreach ($data as $row) {?>
					<tr>
					    <td><?=$row['name']?></td>
				    	<td><?=$row['email']?></td>
						<td><?=$row['homepage']?></td>
						<td><?=$row['text']?></td>
					<?php }?>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
</body>
</html>
<?php

