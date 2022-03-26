<!DOCTYPE HTML>
<html>
<head>
    <title>Тег BODY</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="ie.css">
    <link rel="alternate" type="application/rss+xml"
          title="Статьи с сайта htmlbook.ru" href="http://htmlbook.ru/rss.xml">
    <link rel="shortcut icon" href="http://htmlbook.ru/favicon.ico">
</head>
<body onload="alert('Документ загружен')">

<details>
    <summary>Информация об авторе</summary>
    <p>Бендер Родригез</p>
</details>

<section>
    <h1>Съёмки фильма Полипропилен</h1>
    <p>История о том, как снимали фильм, где герои отдыхали на пляже,
        потом пришёл антагонист, избил протагонистов, сбросил их в бассейн,
        и что из этого получилось.</p>
</section>
<section>
    <h1>Хороший язык</h1>
    <p>История о том, как проходила студия изучения языка эсперанто,
        в то время, как над ней, на веранде велась студия приколистов,
        где травились анекдоты, и что из этого получилось.</p>
</section>

<p>Проверка, поддерживает браузер JavaScript 1.3 или нет.</p>
<p><code>
        &lt;script language=&quot;JavaScript1.3&quot;&gt; JS13 = 1;
        &lt;/script&gt;<Br>
        &lt;script language=&quot;JavaScript&quot;&gt;<Br>
        if (window.JS13) document.write(&quot;Ваш браузер поддерживает JavaScript
        1.3&quot;);<Br>
        &lt;/script&gt;
    </code></p>
<p>В результате выполнения скрипта вы увидите текст <samp>Ваш
        браузер поддерживает JavaScript 1.3</samp>, в том случае, если браузер
    работает с версией 1.3.</p>

<p>Пример программы</p>
<xmp>
    while (<>) {
    $org=$_;
    s/\\["']//g;
    s/\/\/[^:].*//;
    s/\/\*.*\*\///g;
    if ($comment == 1) {
    if (s/.*\*\///) {
    $comment = 0;
    }
    else {
    next;
    }
    }
    if (s/\/\*.*//) {
    $comment = 1;
    }
    if (/^\s*#/) {
    next;
    }
    }</xmp>

<header>
    <h1>Чебурашка и крокодил Гена</h1>
</header>
<nav><a href="1.html">Чебурашка</a> | <a href="2.html">Гена</a> |
    <a href="3.html">Шапокляк</a> | <a href="4.html">Лариска</a></nav>

<form action="handler.php">
    <p><select>
            <optgroup label="Цвет">
                <option value="c1">Апельсиновый</option>
                <option value="c2">Лимонный</option>
                <option value="c3">Персиковый</option>
            </optgroup>
            <optgroup label="Тон">
                <option value="s1">Светлый</option>
                <option value="s2">Нормальный</option>
                <option value="s3">Темный</option>
            </optgroup>
        </select></p>
    <p><input type="submit" value="Отправить"></p>
</form>

<form oninput="result.value=(cm.value/2.54).toFixed(2)">
    <p>Введите длину в сантиметрах:
        <input type="number" name="cm" autofocus></p>
    <p>Длина в дюймах: <output name="result">0</output></p>
</form>

<p>Пожалуйста, подождите, фотографии загружаются.</p>
<progress max="100" value="25">
    Загружено на <span id="value">25</span>%
</progress>

<dl>
    <dt>GIF</dt>
    <dd>Формат графических файлов, широко применяемый при создании сайтов.
        GIF использует 8-битовый цвет и эффективно сжимает сплошные цветные области,
        при этом сохраняя детали изображения.</dd>
    <dt>JPEG</dt>
    <dd>Популярный формат графических файлов, широко применямый при создании
        сайтов и хранения изображений. JPEG поддерживает 24-битовый цвет и сохраняет
        яркость и оттенки цветов в фотографиях. Данный формат называют сжатием с потерями,
        поскольку алгоритм JPEG выборочно отвергает данные. Метод сжатия может исказить
        деталь в рисунке, особенно содержащий текст или изображение с четкими краями.
        Формат JPEG не поддерживает прозрачность, когда вы сохраняете фотографию в формате
        JPEG, прозрачные пиксели заполняются определенным цветом.</dd>
</dl>

<div>
    <menu>
    <commandn type='checkbox' onclick="alert('Слава роботам!')" label="Выполнить директиву №1">
        <command onclick="alert('Сдавайтесь, людишки!')" label="Выполнить директиву №2">
            <command onclick="alert('Убить всех человеков!')" label="Выполнить директиву №3">

    </menu>
</div>

<p>Выберите любимого персонажа:</p>
<p><input list="character">
    <datalist id="character">
        <option value="Чебурашка"></option>
        <option value="Крокодил Гена"></option>
        <option value="Шапокляк"></option>
    </datalist></p>

<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem
    nonummy nibh euismod tincidunt ut lacreet dolore magna aliguam erat volutpat.</p>
<p>Ut wisis enim ad minim veniam, quis nostrud exerci tution ullamcorper
    suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

<p>Для быстрого закрашивания выделенной области цветом переднего плана
    используйте комбинацию клавиш <kbd>&lt;Alt&gt;+&lt;Backspace&gt;</kbd>
    или <kbd>&lt;Alt&gt;+&lt;Delete&gt;</kbd>.
    Для закрашивания выделенной области фоновым цветом
    воспользуйтесь комбинацией
    <kbd>&lt;Ctrl&gt;+&lt;Backspace&gt;</kbd> или
    <kbd>&lt;Ctrl&gt;+&lt;Delete&gt;</kbd>.</p>

<marquee behavior="alternate" direction="left" bgcolor="#ffcc00">
    Lorem ipsum dolor sit amet...
</marquee>

<p>Температура воды</p>
<meter value="0" max="100" low="10" high="60">Низкая</meter>
<meter value="30" max="100" low="10" high="60">Нормальная</meter>
<meter value="80" max="100" low="10" high="60">Горячая</meter>
<meter value="100" max="100">Кипяток</meter>

<br>
<ruby>
    текст
    <rp>текст</rp><rt>аннотация</rt><rp>текст</rp>
</ruby>
<br>

</body>
<?php
echo 'Test me <br>';
echo '<h2>My research of mind</h2>';
include 'console.php';

echo '<br/>';
class Test
{
	static public $quantity = 0;
	public function __construct(){
		++ self::$quantity ;
		echo get_class($this).__CLASS__.'quantity='.self::$quantity.'</br>';
		
	}
    static public function getNew()
    {
        return new static;
    }
	static public function getNewSelf()
    {
        return new self;
    }
}

class Child extends Test
{}

$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);
?>
</html>

