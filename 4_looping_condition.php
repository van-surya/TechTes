<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 4 Looping Condition</title>
</head>

<body>
    <?php
    foreach (range(1, 50) as $angka) {
        if ($angka % 3 != 0 && $angka % 5 != 0) {
            echo $angka . '<br>';
            continue;
        }
        if ($angka % 3 == 0) echo 'Foo';
        if ($angka % 5 == 0) echo 'Bar';
        if ($angka % 3 == 0 && $angka % 5 == 0);
        echo '<br>';
    }
    ?>
</body>

</html>