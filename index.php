<?php
include 'class/fetch.class.php';

$db = new Getdata;
$users = $db->read();

foreach($users as $user){
    $data[] = $user;
    //echo json_encode($users);
    echo $user['username'].'<br>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br>
    <form action="functions/add_user.php" method="post">
        <input type="text" name="username" placeholder="Username...">
        <input type="password" name="password" placeholder="Password...">
            <input type="submit" name="add" value="Add User">
    </form>

</body>
</html>