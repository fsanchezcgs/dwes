<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Managment System</title>
    <link rel="icon" href="./img/1f3e8.png">
</head>
<body>
    <?php include ('./header.php'); ?>

    <form action="./db_reservations_select.php" method="post">
        <label for="html">Day of arraible</label>
        <input type="date" name="date_in">
        <label for="html">Day of exit</label>
        <input type="date" name="date_out">
        <input type="submit">
    </form>
</body>
</html>