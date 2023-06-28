<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include './include/CRUDupdate.php';
if (isset($_SESSION['admin'])) :
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/insert.css">
        <title>edit</title>
    </head>

    <body>

        <div class="editform">
            <div class="itemtoevoegen">
                <?php if (isset($message) && !empty($message)) {
                    echo $message;
                }
                ?>

                <form action="./include/CRUDupdate.php?id=<?php echo $data['id'] ?>" method="post">
                    <input type="text" name="hotel" id="" value="<?php echo $data['hotel']; ?>" placeholder="naam">
                    <input type="text" name="description" id="" value="<?php echo $data['description']; ?>" placeholder="beschrijving">
                    <input type="text" name="price" id="" value="<?php echo $data['price']; ?>" placeholder="prijs">
                    <input type="text" name="path" id="" value="<?php echo $data['path']; ?>" placeholder="img">
                    <input type="submit" value="veranderen" name="veranderen">
                </form>
            </div>
    </body>

    </html>
<?php else :
    header("location: index.php");
endif; ?>