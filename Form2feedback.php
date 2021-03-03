<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Обратная связь</title>
	<link rel="stylesheet" href="https://d35z3p2poghz10.cloudfront.net/ecwid-sdk/css/1.3.9/ecwid-app-ui.css"/>
</head>
<body>
	<form action="#" method="post" class="settings-page cf settings-page__header settings-page__titles settings-page__titles--left">
		<h1 class="settings-page__title">Форма обратной связи</h1>

		<div class="named-area__body">
			<input type="text" name="name" id="name" value="Имя" tabindex="1" />
		</div>

		<div class="named-area__body">
			<input type="text" name="email" id="email" value="Email" tabindex="2" />
		</div>

		<div class="named-area__body">
			<input type="text" name="tel" id="tel" value="Телефон" tabindex="3" />
		</div>

		<div class="named-area__body">
			<input type="text" name="date" id="date" value="Дата рождения" tabindex="4" />
		</div>
		
		<div class="named-area__body">
			<textarea cols="40" rows="8" name="textarea" id="textarea" value="Поле для вопроса"></textarea>
		</div>

		<div class="named-area__body">
			<button class="btn btn-medium btn-primary"><span class="svg-icon"><svg xml:space="http://www.w3.org/2000/svg" viewBox="0 0 12 12" focusable="false"><path d="M6.712 5.314H11v1.39H6.712V11H5.267V6.706H1V5.314h4.267V1h1.446v4.314z"></path></svg></span>Отправить</button>
		</div>
	</form>
	<script src="https://d35z3p2poghz10.cloudfront.net/ecwid-sdk/css/1.3.9/ecwid-app-ui.min.js"></script>
</body>
</html>