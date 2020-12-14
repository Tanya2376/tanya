<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>

	<link rel="shortcut icon" href="img/23log.ico" type="img/23log.png">
	<title>Когтеточки для кошек "Пушистые лапки"</title>
	<link rel="stylesheet" href="css/Main_style.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="only screen and (max-width: 1080px)">


</head>
	<body>


		<a name=top></a>
		<header>

			<img src="img/logotip.png" alt="Логотип сайта">
			<a id="link_main" href="index.html">Главная</a>
			<a id="link_shop" href="shop.html">Магазин</a>
			<a id="link_catalog" href="katalog.html">Каталог</a>
			<a id="link_catal" href="otziv.html">Отзывы</a>
			<a id="link_reg" href="otziv.html">Регистрация</a>
		</header>

        <div class="fotorama1">

            <img src="img/posilka.png">

        </div>

		<div class="fotorama">
			<img src="img/73578.png">

		</div>
		
		


		<a name="our_contacts"></a>
		<div id="contacts">
			<p id="contacts_head">Наши контакты</p>
			<a id="phone" href="tel:89969262734">&#128222 +7 (996) 9262734</a>
			<a href="https://wa.me/89969262734"><img src="img/whatsapp.png" alt="WhatsApp"></a>
			<a href="viber://chat?number=%2B379969262734"><img src="img/viber.png" alt="Viber"></a>
			<a href="https://www.instagram.com/cake_makurina/"> <img src="img/inst.png" alt="instagram"></a>
		</div>


		<div id="adress">
			<p>Ярославская область, г. Ярославль,<br>р-н Фрунзе, 1-я Тормозная , д. 59</p>
			<div style="position:relative;overflow:hidden;" id="maps"><a href="https://yandex.ru/maps/16/yaroslavl/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Ярославль</a><a href="https://yandex.ru/maps/16/yaroslavl/house/1_ya_tormoznaya_ulitsa_59/Z0AYfwNiT0QOQFttfXl0cX9qbA==/?from=api-maps&ll=39.943371%2C57.550056&origin=jsapi_2_1_74&utm_medium=mapframe&utm_source=maps&z=18.4" style="color:#eee;font-size:12px;position:absolute;top:14px;">1-я Тормозная улица, 59 — Яндекс.Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUAbQqQXB" width="90%" height="512" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
		</div>

		<a name=status_order></a>
		<div id="check_status_order">
			<form id="check_order_form" method="post">
				<p>Введите код заказа:</p>
				<input name="kod_order">
				<input type="submit" value="Проверить заказ">
			</form>


			<div id="result_form"></div>
		</div>
		<footer>
			<img src="img/logotip.png" alt="Логотип сайта">
			<a id="link_main" href="index.html">Главная</a>
			<a id="link_shop" href="shop.html">Магазин</a>
			<a id="phone" href="tel:89969262734">&#128222 +7 (996) 9262734</a>
			<div id="dev"><p><br>created&powered by Химкова Т.Е. E-mail: asdrewq.99@mail.ru</p></div>
		</footer>

		<script>
            $(function () {
                $('#check_order_form').submit(function (e) {
                    e.preventDefault(); //отменяем стандартное действие при отправке формы
                    var m_method = $(this).attr('method'); //берем из формы метод передачи данных
                    var m_action = $(this).attr('action'); //получаем адрес скрипта на сервере, куда нужно отправить форму
                    var m_data = $(this).serialize(); //получаем данные, введенные пользователем в формате input1=value1&input2=value2...,то есть в стандартном формате передачи данных формы
                    $.ajax({
                        type: m_method,
                        url: m_action,
                        data: m_data,
                        success: function (result) {
                            $('#result_form').html(result);
                        }
                    });
                });
            });
		</script>
	</body>
</html>