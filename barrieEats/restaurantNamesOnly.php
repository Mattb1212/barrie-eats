<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant Names</title>
</head>
<body>




<?php
//CRUD Create, Read, Update, Delete

//connect to database
$db = new PDO('mysql:host=localhost;dbname=barrieEats', 'root', '');

//set up query
$sql = "SELECT name FROM restaurants";
$cmd = $db->prepare($sql);

//fetch the data
$cmd->execute();
$restaurants = $cmd->fetchAll();

//loop through that data and print 1 record at a time
forEach($restaurants as $r){
    echo $r['name'] . "<br/>";
}

//disconnect
$db = null;

?>

</body>
</html>