<?php
session_start();
if(!isset($_SESSION['user'])) {
    $_SESSION['msg'] = 'Login Please';
    header("location:http://accountant.loc/view/auth/login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home pages</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/inc/bootstrap.php'; ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/inc/navbar.php'; ?>



</body>
</html>
