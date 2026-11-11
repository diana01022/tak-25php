<?php
require "./database.php";
$message='';
If ($_SERVER['REQUEST METHOD']=== 'POST'); {

$first_name = $_POST['first-name'];
$last_name = $_POST['last_name'];
$sql = 'INSERT INTO authors (first_name), (last_name) VALUES (first_name: :last_name)';
$stmt = $pdo->prepare($sql);

$stmt->execute ([
    'first_name'=>$first_name,
    'last_name'=>$last_name
]);

$message ='Author added sccesfully';
}

?> 
<!DOCTYPE html>
<html lang='en'>
<head> 
    <meta charset='UTF-8'>
    <title>Add author</title>    
</head> 
<body> 
    <h1>A new author<h1>
        <p><?= htmlspecialchars($message)?></p>
     <form method="POST" action="add_author.php">
            <label>:First name</label>
            <input type="text" name="first_name" required>
            <br><br>
            <button type="sumbit">Add author</button>
     </form>    
</body>
</html>



