<?php

if (isset($_POST["submit"])) {
    require "../config.php";

try {
    $connection = new PDO($dsn, $username, $password, $options);
    
    $new_user = array(
        "Username" => $_POST['Username'],
        "Password" => $_POST['Password'],
        "email" => $_POST['email']
    );

    $sql = sprintf( "INSERT INTO %s (%s) values (%s)", "users", implode(", ", array_keys($new_user)), ":" . implode(", :", array_keys($new_user)) );

    $statement = $connection->prepare($sql);
    $statement->execute($new_user);

}   catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
    }
}