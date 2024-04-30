<?php 

if (isset($_POST["submit"])) {
require ("../common.php");

try {
    require_once ('../src/DBconnect.php');
    
    $new_user = array(
        "Username" => escape($_POST['Username']),
        "Password" => escape($_POST['Password']),
        "email" => escape($_POST['email']),
    );

    $sql = sprintf( "INSERT INTO %s (%s) values (%s)", "users", implode(", ", array_keys($new_user)), ":" . implode(", :", array_keys($new_user)) );
    $statement = $connection->prepare($sql);
    $statement->execute($new_user);

}   catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
    }
}

require "templates/header.php";
if (isset($_POST['submit']) && $statement)
{
    echo $new_user['Username']. ' successfully added';
}
?>

<h2>Create An Account</h2>
    <form method="post">
        <label for="Username">Username</label>
        <input type="text" name="Username" id="Username" required>
        <label for="Password">Password</label>
        <input type="text" name="Password" id="Password" required>
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" required>
        <input type="submit" name="submit" value="Submit">
    </form>

    <a href="index.php">Back to home</a>

<?php include "templates/footer.php"; ?>

