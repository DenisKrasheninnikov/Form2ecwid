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
			<input type="text" name="name" id="name" value="Имя" onblur="if(this.value.length == 0) this.value = 'Имя'" onfocus="if(this.value == 'Имя') this.value = '' "/>
			<label for="name">Имя</label>
		</div>

		<div class="named-area__body">
			<input type="text" name="email" id="email" value="name@example.com" onblur="if(this.value.length == 0) this.value = 'name@example.com'" onfocus="if(this.value == 'name@example.com') this.value = '' " />
			<label for="email">E-Mail</label>
		</div>

		<div class="named-area__body">
			<input type="text" name="tel" id="tel" value="Телефон" onblur="if(this.value.length == 0) this.value = 'Телефон'" onfocus="if(this.value == 'Телефон') this.value = '' " />
			<label for="tel">Телефон</label>
		</div>

		<div class="named-area__body">
			<input type="text" name="date" id="date" value="Дата рождения" onblur="if(this.value.length == 0) this.value = 'Дата рождения'" onfocus="if(this.value == 'Дата рождения') this.value = '' " />
			<label for="date">Дата рождения</label>
		</div>
		
		<div class="named-area__body">
			<textarea cols="40" rows="8" name="textarea" id="textarea" onblur="if(this.value.length == 0) this.value = 'Текст сообщения'" onfocus="if(this.value == 'Текст сообщения') this.value=''">Текст сообщения</textarea>
		</div>

		<div class="named-area__body">
			<button type="button" class="btn btn-primary btn-medium" tabindex="5">Отправить</button>
		</div>
	</form>
	<script src="https://d35z3p2poghz10.cloudfront.net/ecwid-sdk/css/1.3.9/ecwid-app-ui.min.js"></script>
</body>
</html>