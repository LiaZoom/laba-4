<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $task_name = $_POST['task_name'];
        $city = $_POST['city'];
        $deadline = $_POST['deadline'];
        // $comment = $_POST['comment'];

        $xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");
        
        $task = $xml->addChild('item', '');
        $task->addAttribute('deadline', $deadline);
        $task->addChild('name', $task_name);
        $task->addChild('city', $city);
        // $task->addChild('comment', $city);
        $task->addAttribute('id', $xml->count());

        $xml->saveXML('data.xml');
    }
    ?>
    <form method="POST" action="create.php">
        ФИО: <input type="text" name="task_name" required /><br />
        Город: <input type="text" name="city" /><br />
        Дата рождения: <input type="date" name="deadline" /><br />
        <input type="submit" value="Сохранить" />
    </form>
</body>

</html>