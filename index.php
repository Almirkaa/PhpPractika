<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="mx_w">
    <div class="block">
    <h2>Задание 1</h2>
    <?

    
    $array = ['Гарифуллина', 'Сидоров', 'Тарасова', 'Федоров', 'Петрова', 'Климов'];
    $name;

    foreach ($array as $surname) {
        echo $surname;
        echo '<br>';

        if ($surname == 'Сидоров') {
            $name = 'Есть в списке';
        } else {
            $name = 'Такого в списке нет';
        }
    }
    echo '<br>';
    echo '<br>';

    echo $name;
    echo '<br>';
    echo '<br>';

    $expelled = array_pop($array);
    echo $expelled;
?>
</div>

<div class="block">
    <h2>Задание 2</h2>

<?
    // задание 2
    $hobby = [
        "Спортивный" => "Сидоров",
        "Художественный" => "Емелина",
        "Музыкальный"
        => "Иванова",
        "Литературный" => "Петров",
        "Биологический" => "Антонова"
    ];
    echo '<br>';
    $element = [];
    asort($hobby);

    foreach ($hobby as $key => $value) {
        echo $key . ' - ' . $value;
        echo '<br>';
        array_push($element, $value);
    }
?>
</div>
<div class="block">
    <h2>Задание 3</h2>
<?
    // задание 3
    $student = ['Имя' => 'Альмира', 'Фамилия' => 'Гарифуллина', 'Группа' => '425ВЕБ', 'Хобби' => ['Ушу', 'Тренерство'], 'Соцсети' => ['Telegram' => '@Aaalllmmmiii', 'vk' => 'Almira']];

 foreach ($student as $key => $value) {
        
        if(!is_array($value)){
            echo $key . ' : ' . $value;
        echo '<br>';
        }else{
            foreach($value as $value1){
                echo $key . ' : ' .$value1;
                echo '<br>';
            }
        }
    }
    ?>
    </div>
</body>

</html>