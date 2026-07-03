<?php require 'config/db.php';
$id = $_GET['id'];
if ($_POST) {
    $s = $pdo->prepare("UPDATE students SET name=?,email=?,course=? WHERE id=?");
    $s->execute([$_POST['name'], $_POST['email'], $_POST['course'], $id]);
    header("Location:index.php");
}
$r = $pdo->prepare("SELECT * FROM students WHERE id=?");
$r->execute([$id]);
$d = $r->fetch(); ?>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
<div class='container py-4'>
    <form method='post'><input class='form-control mb-2' name='name' value='<?= $d['name'] ?>'><input class='form-control mb-2' name='email' value='<?= $d['email'] ?>'><input class='form-control mb-2' name='course' value='<?= $d['course'] ?>'><button class='btn btn-primary'>Update</button></form>
</div>