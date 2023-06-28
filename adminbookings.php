<?php
session_start();
if (isset($_SESSION['admin'])) :
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title> Boendemi</title>
        <script src="myFunction.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/admin.css">
        <link rel="stylesheet" href="./css/login.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <script defer src="login.js"></script>
    </head>

    <body>
        <table>
            <tr>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Email</th>
                <th>Telefoonnummer</th>
                <th>Country</th>
                <th>City</th>
                <th>Hotel</th>
                <th>Price</th>
                <th>People</th>
                <th>Date of departure</th>
                <th>Date of return</th>
                <th>Approved</th>
            </tr>
            <?php include_once 'header.php';

            include './include/connect.php';

            $stmt = $conn->prepare("SELECT users.firstname, users.lastname, users.email, users.phone, 
        bookings.startdate, bookings.enddate, bookings.people, bookings.confirm,
        trips.hotel, trips.price, places.city, country.country, bookings.id
        FROM bookings
        JOIN users
        ON bookings.user_id = users.id
        JOIN trips
        ON bookings.trips_id = trips.id
        JOIN places
        ON trips.place_id = places.id
        JOIN country
        ON places.country_id = country.id");
            $stmt->execute();
            $data = $stmt->fetchAll();

            foreach ($data as $key => $value) : ?>
                <tr>
                    <td><?php echo $value['firstname']; ?></td>
                    <td><?php echo $value['lastname']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['phone']; ?></td>
                    <td><?php echo $value['country']; ?></td>
                    <td><?php echo $value['city']; ?></td>
                    <td><?php echo $value['hotel']; ?></td>
                    <td>€<?php echo $value['price']; ?></td>
                    <td><?php echo $value['people']; ?></td>
                    <td><?php echo $value['startdate']; ?></td>
                    <td><?php echo $value['enddate']; ?></td>
                    <?php if ($value['confirm'] == 0) {
                        $confirm = "No";
                    } else {
                        $confirm = "Yes";
                    }
                    ?>
                    <td><?php echo $confirm; ?></td>
                    <td>
                        <form method="post" action="./include/approve.php?id=<?php echo $value['id'] ?>">
                            <input type="submit" name="submit" value="<?php echo $value['confirm'] == 0 ? "Approve"  : "Deny" ?>">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

    </body>

    </html>
<?php else :
    header("location: index.php");
endif; ?>