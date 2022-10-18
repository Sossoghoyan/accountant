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
    <title>Customers pages</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="http://accountant.loc/server/assets/js/customers.js"></script>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/inc/bootstrap.php'; ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/inc/navbar.php'; ?>


<div class="container mt-5">

    <div class="d-flex justify-content-end" style="margin-top: 2%">
        <input type="search" id="search_inp" placeholder="Ըստ անվանման">
        <button id="search_name" class="btn btn-outline-success" >Որոնում</button>
    </div>

    <h1>Հաճախորդներ</h1>
    <table class="table table-hover table-bordered mb-0" >
        <thead>
        <tr style="font-size:15px; font-style: normal">
            <th>#</th>
            <th>Անուն</th>
            <th>Փին</th>
            <th>Փուկ</th>
            <th>Ինվոիսինգ մուտքանուն</th>
            <th>Ինվոիսինգ գաղտնաբառ</th>
            <th>Տաքսերվիս մուտքանուն</th>
            <th>Տաքսերվիս գաղտնաբառ </th>
            <th>ՀՎՀՀ</th>
            <th>Ամսաթիվ</th>
            <th>Փոփոխել</th>
        </tr>
        </thead>
        <tbody id="all_customers">

        </tbody>
    </table>
</div>

</body>
</html>