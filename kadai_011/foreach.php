<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>PHPの課題です</title>
</head>

<body>
    <p>
        <?php
        $vegetable_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

        foreach ($vegetable_data as $key => $value){
            echo "{$key} : {$value}<br>";
        }
        ?>
    </p>
</body>
</html>