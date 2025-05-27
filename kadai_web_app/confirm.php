<?php
// POSTリクエストから入力データを取得
$name = $_POST['employee_name'];
$age = $_POST['employee_age'];
$department = $_POST['department'];
?>

<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
</head>

<body>
    <h2>入力内容をご確認ください。</h2>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <th>社員名</th>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <th>年齢</th>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <th>所属部署</th>
            <td><?php echo $department; ?></td>
        </tr>
    </table>

    <p>
        <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>
    </p>
</body>
</html>