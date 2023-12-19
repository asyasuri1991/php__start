<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_POST['age']>0 && $_POST['age']<120)
            {
                echo $_POST['age'];
            } else {
                echo 'ERROR';
            }
?>  
</body>
</html>