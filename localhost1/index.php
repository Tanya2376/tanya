
<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>

    <link rel="shortcut icon" href="img/23log.ico" type="img/23log.png">
    <title>Кондитерская "Сладости для Вашей радости" </title>
    <link rel="stylesheet" href="css/Main_style.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="only screen and (max-width: 1080px)">

    <link rel="stylesheet" type="text/css" href="css/sim-slider-styles.css">




</head>



<body>

    <a name=top></a>


    <header>
        <img src="img/logotip.png" alt="Логотип сайта">
        <a id="link_main" href="index.html">Главная</a>
        <a id="link_shop" href="shop.html">Магазин</a>
        <a id="link_catalog" href="katalog.html">Каталог</a>
        <a id="link_catal" href="otziv.html">Отзывы</a>
        <a id="link_reg" href="registr.php">Регистрация</a>

    </header>

    
<?php
$goods = [
[
'id' => 1,
'name' => 'Меренговый рулет',
'desc' => 'Описание для когтеточки',
'img' => 'img/rulet.jpg',
'price' => '1200 Р Р'

],
[
'id' => 2,
'name' => 'Торт "Сникерс" ',
'desc' => 'Описание',
'img' => 'img/superman.jpg',
'price' => '1100 р/кг'
],
[
'id' => 3,
'name' => 'Торт "Брауни"',
'desc' => 'Описание',
'img' => 'img/brauni.jpg',
'price' => '1000 р/кг'
],
[

'id' => 4,
'name' => 'Пирожное "Павлова"',
'desc' => 'Описание',
'img' => 'img/pavlova.jpg',
'price' => '120 р/шт'
],
[

'id' => 5,
'name' => 'Торт "Терпкая вишня"',
'desc' => 'Описание',
'img' => 'img/tortik.jpg',
'price' => '1000 р/кг'
],
[

'id' => 6,
'name' => 'Капкейки с ягодной начинкой"',
'desc' => 'Описание',
'img' => 'img/capkeyk.jpg',
'price' => '550 р - 4шт'
]
];

 


$page= $_GET['page'];

if (!isset($page)) {
require('./templates/main.php'); // путь к главной странице
}
elseif ($page == 'shop') {
require('./templates/shop.php');
}// путь к каталогу товаров
elseif ($page == 'katalog') {
require('./templates/katalog.php');
}

elseif ($page == 'product')
{
$id= $_GET['id']; // получаемidпродукта
$good= []; //созданиеконтейнерадлятовара
foreach ($goods as $product)
{// получениезначенийтовара
if ($product['id'] == $id)
{
$good = $product;
break;
}
}
require('./templates/product.php');
}
elseif ($page == 'otziv') {
require('./templates/otziv.php');
}
?>


<br><br>

 <footer>
        <img src="img/logotip.png" alt="Логотип сайта">
        <a id="link_main" href="index.html">Главная</a>
        <a id="link_shop" href="shop.html">Магазин</a>
        <a id="phone" href="tel:89969262734">&#128222 +7 (996) 9262734</a>
        <div id="dev"><p><br>created&powered by Химкова Т.Е. E-mail: asdrewq.99@mail.ru</p></div>
    </footer>

</body>
</html>