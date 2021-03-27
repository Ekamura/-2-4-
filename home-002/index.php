<pre>
<?php
$animals = [
   "слон"=> [
           "name" => "Слон - это одно из самых крупных животных на Земле",
        "Вид" => "Травоядное",
       "weight" => ["count" => 6.5, "units" => "Т"],
       "img"=>"Слон.jpg",
       "Дом"=>"Вольер"
    ],

    "лев"=>[
        "name" => "Лев - Царь зверей",
        "Вид" => "Хищник",
        "weight" => ["count" => 200, "units" => "Кг"],
        "img"=>"Лев.jpeg",
        "Дом"=>"Загон",
    ],
    "Кролик"=> [
        "name" => "Карликовый кролик - Самый маленький и редкий кролик в мире",
        "Вид" => "Травоядное",
        "weight" => ["count" => 400, "units" => "Г"],
        "img"=>"кролик.jpg",
        "Дом"=>"Клетка"
    ],
];

$buildings = [
   "Вольер"=> [
        "Место" => "вольер"."<br>",
        "Этажи" => "2 этажа"."<br>",
        "Крыша" => "Цвет крыши - синий"
    ],
    "Загон"=>[
        "Место" => "загон"."<br>",
        "Этажи" => "1 этаж"."<br>",
        "Крыша" => "цвет крыши - зеленый"
    ],
    "Клетка"=>[
        "Место" => "клетка"."<br>",
        "Этажи" => "1 этаж"."<br>",
        "Крыша" => "цвет крыши - желтый"
    ]
];
$animals["слон"]["Дом"]="Вольер";
$animals["лев"]["Дом"]="Загон";
$animals["Кролик"]["Дом"]="Клетка";
print_r($animals);
$myZoo = [
    "animals" => $animals,
    "buildings" => $buildings
];
echo($myZoo["animals"]["Кролик"]["вид"])."<br>";
echo($myZoo["buildings"]["Клетка"]["Крыша"])."<br>";
echo(implode( $myZoo["animals"]["слон"]["weight"]));
?>
    </pre>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table{
            margin: auto;
            width: 760px;
            border: 1px solid black;
            height: 300px;
        }
        td{
            border: 1px solid black;
            padding: 15px;
        }
        img{
            width: 300px;
            height: 300px;
        }
        .treugol1 {
            position: absolute;
            left: 800px;
            width: 0;
            height: 0;
            border-left: 50px solid transparent;
            border-right: 50px solid transparent;
            border-bottom: 100px solid blue;
        }
        .treugol2{
            position: absolute;
            left: 800px;
            top: 1100px;
            width: 0;
            height: 0;
            border-left: 50px solid transparent;
            border-right: 50px solid transparent;
            border-bottom: 100px solid green;
        }
        .treugol3 {
            position: absolute;
            left: 815px;
            top: 1390px;
            width: 0;
            height: 0;
            border-left: 50px solid transparent;
            border-right: 50px solid transparent;
            border-bottom: 100px solid yellow;
        }
    </style>
    <title>Document</title>
</head>
<body>

<table>
<!-- <div class="treugol1"></div>-->
<!--    <div class="treugol2"></div>-->
<!--    <div class="treugol3"></div>-->
    <tr>
        <td>Имя</td>
        <td>Вид</td>
        <td>Вес</td>
        <td>Место жительства</td>
        <td>Фото</td>
    </tr>
    <tr> <?php
        foreach ($animals as $k=>$v){
        ?>
        <td><?=$animals["$k"]["name"]?>.</td>
        <td><?=$animals["$k"]["Вид"]?></td>
        <td><?= $v["weight"]["count"].$v["weight"]["units"] ?></td>
        <td><?= implode(" -",$buildings[$v["Дом"]])?></td>
        <td><img src=res/<?=$animals[$k]["img"]?>>

    </tr>
    <? } ?>
</table>
</body>
</html>