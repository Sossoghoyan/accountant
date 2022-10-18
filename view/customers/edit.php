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
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="http://accountant.loc/server/assets/js/customers.js"></script>
    <title>Edit customers</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/inc/bootstrap.php'; ?>
</head>
<body>
<span style="display: none" id="customer_id"><?php echo $_GET['customer_id'] ?></span>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/inc/navbar.php'; ?>

<section class="vh-100 bg-image"
         style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h5 class="text-uppercase text-center mb-5">Փոփոխել հաճախորդին</h5>
                            <form action="http://accountant.loc/server/web.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" value="<?php echo $_GET['customer_id'] ?>" name="customer_id">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="name" class="form-control form-control-lg" name="name" />
                                            <label class="form-label" for="form3Example1cg">Անվանումը</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="pin" class="form-control form-control-lg" name="pin" />
                                            <label class="form-label" for="form3Example1cg">Պին կոդ</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="puk" class="form-control form-control-lg" name="puk"/>
                                            <label class="form-label" for="form3Example1cg">Պուկ կոդ</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="e_invoicing_login" class="form-control form-control-lg" name="e_invoicing_login"/>
                                            <label class="form-label" for="email">Ե-Ինվոիսինգ մուտքանուն</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="e_invoicing_password" class="form-control form-control-lg" name="e_invoicing_password" />
                                            <label class="form-label" for="form3Example4cg">Ե-Ինվոիսինգ գաղտնաբառ</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="taxservise_login" class="form-control form-control-lg" name="taxservise_login" />
                                            <label class="form-label" for="form3Example4cdg">Տաք-սերվիս մուտքանուն</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="taxservise_password" class="form-control form-control-lg" name="taxservise_password" />
                                            <label class="form-label" for="form3Example1cg">Տաք-սերվիս գաղտնաբառ</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="avc" class="form-control form-control-lg" name="avc" />
                                            <label class="form-label" for="form3Example1cg">ՀՎՀՀ</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button name="action" value="update_customer" class="btn btn-success" style="margin: 8px">Փոփոխել</button>
                                    <button class="btn btn-danger" style="margin: 8px">
                                        <a href="http://accountant.loc/view/customers/index.php" style="color: white">Չեղարկել</a>
                                    </button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
