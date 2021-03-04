<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Обратная связь</title>
	<link rel="stylesheet" href="https://d35z3p2poghz10.cloudfront.net/ecwid-sdk/css/1.3.9/ecwid-app-ui.css"/>
	<link rel="stylesheet" type="text/css" href="Form2feedback_style.css">
</head>
<body>
	<div id="container">
		<h2>Форма обратной связи</h2>
		<form name="contact_form" action="Form2feedback_mail.php" method="post">
			<div class="named-area__body">
				<input type="text" name="name" id="name" placeholder="Имя" required />
			</div>

			<div class="named-area__body">
				<input type="text" name="email" id="email" placeholder="name@example.com" required />
			</div>

			<div class="named-area__body">

				<input type="text" name="phone" id="phone" placeholder="Телефон" required />
			</div>

			<div class="named-area__body">
				<input type="date" name="date" id="date" placeholder="Дата рождения" required />
			</div>

			<div class="field named-area__body">
				<textarea class="field__textarea" cols="40" rows="8" name="message" id="textarea" placeholder="Текстовое сообщение" required="required" ></textarea>
			</div>

			<div class="form-area__action">
				<p class="send"><input class="btn btn-primary btn-medium" id="submit" type="submit" value="Отправить"  /></p>
			</div>
			<input type="hidden" name="a" value="1">
		</form>
	</div>
</body>
</html>