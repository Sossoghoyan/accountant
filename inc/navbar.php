<?php

if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
}

?>

<nav  class="navbar navbar-expand-lg" style="background-color: #84fab0">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content: space-between">
            <div class="nav-item dropdown">
                <a id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img style=" width:30px; height:30px;" src="http://accountant.loc/server/assets/uploads/images/menu.png" alt="">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="left: 0px; width: max-content; padding: 10px">
                    <li><hr class="dropdown-divider"></li>
                    <b><a class="nav-link" href=http://accountant.loc/view/home.php>* Վերադառնալ գլխավոր էջ</a></b><br>
                    <b><a class="nav-link" href="http://accountant.loc/view/customers/index.php">* Հաճախորդներ</a></b><br>
                    <b><a class="nav-link" href="http://accountant.loc/view/customers/create_customer.php">* Ավելացնել հաճախորդ</a></b>
                </ul>
            </div>
                <div class="nav-item dropdown" style="">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $user['first_name']; ?>
                        <?php echo $user['last_name']; ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="left: -77px">
                        <li><hr class="dropdown-divider"></li>
                        <a class="dropdown-item" href="http://accountant.loc/server/web.php?action=logout"><b>Դուրս գալ</b></a>
                    </ul>
            </div>
        </div>
    </div>
</nav>