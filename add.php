<?php require 'config/db.php';
if ($_POST) {
    $s = $pdo->prepare("INSERT INTO students(name,email,course) VALUES(?,?,?)");
    $s->execute([$_POST['name'], $_POST['email'], $_POST['course']]);
    header("Location:index.php");
} ?>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
<div class='container py-4'>
    <form method='post'><input class='form-control mb-2' name='name' placeholder='Name'><input class='form-control mb-2' name='email'><input class='form-control mb-2' name='course'><button class='btn btn-success'>Save</button></form>
</div>