<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form1</title>
</head>

<body>
    <style>
        body{
            font-size: 18px;
        }
        input {
            padding: 5px 10px;
            margin: 10px 20px;
        }
    </style>
    <form action="welcome_get.php" method="get">
        <h2>Coctact</h2>
        <label>Name:</label><input type="text" name="name"><br>
        <label>E-mail:</label><input type="text" name="email"><br>
        <label>Phone number:</label><input type="number" name="number"><br>
        <label>Address:</label><input type="text" name="address"><br>
        <input type="submit">
    </form>
</body>

</html>