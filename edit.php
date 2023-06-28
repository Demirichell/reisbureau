<?php
session_start();
if (isset($_SESSION['admin'])) :

    include_once('include/connect.php');


    $stmt = $conn->prepare("SELECT * FROM trips WHERE id =:id");
    $stmt->execute(['id' => $_GET['id']]);
    $data = $stmt->fetch();
    if (isset($_POST["veranderen"])) {

        $sql = "UPDATE trips SET
        name = :name,
        description = :description ,
        price = :price, 
        img = :img
        WHERE ID =:id";


        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':description ', $_POST['description ']);
        $stmt->bindParam(':price', $_POST['price']);
        $stmt->bindParam(':path', $_POST['path']);
        $stmt->bindParam(':id', $data['id']);
        $stmt->execute();
        //$stmt->debugDumpParams();
        header("location: admin.php");
    }

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

                <form action="" method="post">
                    <input type="text" name="name" id="" value="<?php echo $data['name']; ?>" placeholder="naam">
                    <input type="text" name="description" id="" value="<?php echo $data['beschrijving']; ?>" placeholder="beschrijving">
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