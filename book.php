
<?php

require 'database.php';

$id = $_GET['id'];

$isSuccess = $_GET['update'];

$stmt = $pdo->prepare('SELECT * FROM books WHERE id = :id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();

$stmt = $pdo->prepare('siia panen õige paringu');
$stmt->execute(['id' => $id]);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="vievport" content="width=device_width; inital-scal>
    <title><?= $book['title'] ?></title>
</head>
<body>

<?php if ( $isSuccess == 'success' ) { ?>
    <p>Book updated successfully!</p>
<?php } ?>
