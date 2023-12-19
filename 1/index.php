<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="showData.php" method="post">
        <table>
            <tr>
                <td>Фамилия</td>
                <td><input type="text" name="surname" required></td>
            </tr>
            <tr>
                <td>Имя</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Отчество</td>
                <td><input type="text" name="middle-name" required></td>
            </tr>
            <tr>
                <td>Отдел</td>
                <td><select name="office">
                    <option>ИТ</option>
                    <option>Бухгалтерия</option>
                    <option>Продажи</option>
                    <option>Логистика</option>
                </select></td>
            </tr>
            <tr>
                <td>Должность</td>
                <td><input type="text" name="post"></td>
            </tr>
        </table>
        <input type="submit" value="send">
    </form>
</body>
</html>