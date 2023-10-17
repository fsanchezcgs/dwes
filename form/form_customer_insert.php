<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Managment System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./img/1f3e8.png">
</head>
<body>
    <form action="./db/db_customer_insert.php" method="post">
        <label for="html">Name</label>
        <input type="text" name="customer_name">
        <label for="html">Surname</label>
        <input type="text" name="customer_surname">
        <label for="html">Phone number</label>
        <input type="number" name="customer_number">
        <label for="html">Email</label>
        <input type="text" name="customer_email">
        <input type="submit">
    </form>
</body>
</html>