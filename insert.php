<!DOCTYPE html>
<html lang="en">


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/insert.css">
    <title>add</title>
</head>

<body>
    <link rel="stylesheet" href="./css/login.css">
    <div class="itemtoevoegen">
        <?php if (isset($message) && !empty($message)) {
            echo $message;
        }
        ?>

        <form action='./include/CRUDinsert.php' method="post">
            <input type="text" name="name" placeholder="naam bestemming"><br>
            <input type="text" name="description" placeholder="beschrijving"><br>
            <input type="text" name="price" placeholder="prijs"><br>
            <input type="text" name="path" placeholder="img url"><br>
            <input class="addbutton" type="submit" value="toevoegen" name="submit">
        </form>
    </div>
</body>

</html>