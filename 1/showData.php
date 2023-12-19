<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Фамилия</td>
            <td><?=$_POST['surname'] ?></td>
        </tr>
        <tr>
            <td>Имя</td>
            <td><?=$_POST['name'] ?> </td>
        </tr>
        <tr>
            <td>Отчество</td>
            <td> <?=$_POST['middle-name'] ?></td>
        </tr>
        <tr>
            <td>Отдел</td>
            <td><?=$_POST['office'] ?></td>
        </tr>
        <tr>
            <td>Должность</td>
            <td><?=$_POST['post'] ?></td>
        </tr>
    </table>
    <p>
        <a href="showPerson.php?surname=<?=$_POST['surname']?>&<?=$_POST['post']?>">next page</a>
    </p>
</body>
</html>