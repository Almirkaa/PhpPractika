<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?

    // задание 1
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
    echo $name;
    echo '<br>';
    $expelled = array_pop($array);
    echo $expelled;

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
</body>

</html>