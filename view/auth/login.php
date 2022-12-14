<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
          crossorigin="anonymous">
    <title>Մուտք</title>
</head>
<body>
<section class="vh-100 bg-image"
         style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Մուտքանուն</h2>
                            <form action="http://accountant.loc/server/web.php" method="post">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3cg">Էլ․փոստ՝</label>
                                    <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email">
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cg" >Գաղտնաբառ՝</label>
                                    <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button style="font-size: 20px;" name="action" value="login" class="btn btn-primary">Մուտք</button>
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