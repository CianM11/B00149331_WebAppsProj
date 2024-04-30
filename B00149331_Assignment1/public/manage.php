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


        <?php include "templates/header.php"; ?>
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