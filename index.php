<?php
    include_once "connection.php";
    $query = mysqli_query($connection,"SELECT * FROM php_mini_project_wepb");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>connection</title>
</head>
<body>
<a href="edit.php" class = "btn btn-primary">Add new student</a>
    <table>
        <tr>
            <th>ID</th>
            <th>FullName</th>
            <th>action</th>
        </tr>
        <?php
        while($result = mysqli_fetch_array($query)){
            ?>
        <tr>
            <td><?php echo $result['id']; ?></td>
            <td><?php echo $result['fullName']; ?></td>
            <td><a href="edit.php ?id=<?php echo $result['id']; ?>">Edit</a></td>

        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>