<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
//connect
$db = new PDO('mysql:host=localhost;dbname=barrieEats', 'root', '');

// set up query
$sql = "SELECT * FROM restaurants";
//execute and store the result
$cmd = $db->prepare($sql);
$cmd->execute();
$teams = $cmd->fetchAll();

echo '<table class="table table-hover">
<thead>
<th>Name</th>
<th>Adddress</th>
<th>Phone</th>
</thead>';
foreach ($teams as $t) {
    echo '<tr>
         <td>' . $t['name'] . '</td>
         <td>' . $t['address'] . '</td>
         <td>' . $t['form'] . '</td>
         </tr>';
}
echo '</table>';
$db = null;
?>
</body>
</html>