<?php
require "../common.php";

if (isset($_GET["id"])) {
    try {
        require_once '../src/DBconnect.php';
        $id = $_GET["id"];
        $sql = "DELETE FROM users WHERE id = :id";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $success = "User ". $id. " successfully deleted";
        } catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
    }
}
try {
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

<h2>Delete users</h2>

<?php if ($success) echo $success; ?>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email Address</th>
            <th>Delete</th>
        </tr>
    </thead>
<tbody>

<?php foreach ($result as $row) : ?>
    <tr>
        <td><?php echo escape($row["id"]); ?></td>
        <td><?php echo escape($row["Username"]); ?></td>
        <td><?php echo escape($row["Password"]); ?></td>
        <td><?php echo escape($row["email"]); ?></td>
        <td><a href="delete.php?id=<?php echo escape($row["id"]);
?>">Delete</a></td>
    </tr>   
    <?php endforeach; ?>
    </tbody>
</table>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>