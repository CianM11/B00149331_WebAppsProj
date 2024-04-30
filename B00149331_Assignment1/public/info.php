<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Online Store</title>

        <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>
        <h1>Online Store</h1>

        <?php

try {
    require "../common.php";
    require_once '../src/DBconnect.php';

    $sql = "SELECT * FROM users";

    $statement = $connection->prepare($sql);
    $statement->execute();

    $result = $statement->fetchAll();
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>

<?php require "templates/header.php"; ?>

<h2>Account Information</h2>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email Address</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $row) : ?>
        <tr>
            <td><?php echo escape($row["id"]); ?></td>
            <td><?php echo escape($row["Username"]); ?></td>
            <td><?php echo escape($row["Password"]); ?></td>
            <td><?php echo escape($row["email"]); ?></td>
            
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php require "templates/footer.php"; ?>

        <div class="ud">
        <ul>
            <li>
                <a href="info.php"><button class="button" type="button">Account Information</button></a>
            </li>
            <li>
                <a href="update.php"><button class="button" type="button">Update Account Details</button></a>
            </li>
            <li>
                <a href="delete.php"><button class="button" type="button">Delete Account</button></a>
            </li>
            <li><a href="home.php"><button class="button" type="button">Home</button></a></li>
        </ul>
        </div>

        <?php include "templates/footer.php"; ?>
    </body>
</html>