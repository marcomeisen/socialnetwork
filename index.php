<?php
$con= mysqli_connect("localhost", "root", "", "social");
if(mysqli_connect_errno()) {
    echo "Fail to connect: ". mysqli_connect_errno();
}
$query = mysqli_query($con, "INSERT INTO test VALUES(NULL, 'Marco')");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Swirlfeet</title>
</head>
<body>
    Hello Marco!
</body>
</html>