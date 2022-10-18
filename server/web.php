<?php

session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . "/server/lib/db.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/server/app/login.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/server/app/customers.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/server/lib/input.php");
$conn = db_connect("accountant");
$action = "";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else if (isset($_POST['action'])) {
    $action = $_POST['action'];

}

if ($action == "login") {
    $email = inp($_POST['email']);
    $password = inp($_POST['password']);
    login([
        'email' => $email,
        'password' => hashing($password),
    ]);

} else if ($action == "logout"){
    logout();

} else if ($action == "customer") {
    $name = inp($_POST['name']);
    $pin = inp($_POST['pin']);
    $puk = inp($_POST['puk']);
    $e_invoicing_login = inp($_POST['e_invoicing_login']);
    $e_invoicing_password = inp($_POST['e_invoicing_password']);
    $taxservise_login = inp($_POST['taxservise_login']);
    $taxservise_password = inp($_POST['taxservise_password']);
    $avc = inp($_POST['avc']);

    customers([
        'name' => $name,
        'pin' => $pin,
        'puk' => $puk,
        'e_invoicing_login' => $e_invoicing_login,
        'e_invoicing_password' => $e_invoicing_password,
        'taxservise_login' => $taxservise_login,
        'taxservise_password' => $taxservise_password,
        'avc' => $avc,

    ]);

} else if($action == "getCustomers") {
    echo get_customers();

}else if($action == "Search") {
    echo search_by_name ($_GET['name']);


} else if ($action == "del_customer") {

    delete_customer($_GET["id"]);

} else if($action == "edit_customer") {
    echo edit_Customer($_GET['customer_id']);

} else if ($action == "update_customer") {
    $name = inp($_POST['name']);
    $pin = inp($_POST['pin']);
    $puk = inp($_POST['puk']);
    $e_invoicing_login = inp($_POST['e_invoicing_login']);
    $e_invoicing_password = inp($_POST['e_invoicing_password']);
    $taxservise_login = inp($_POST['taxservise_login']);
    $taxservise_password = inp($_POST['taxservise_password']);
    $avc = inp($_POST['avc']);

    update_customer($_POST['customer_id'],[
        'name' => $name,
        'pin' => $pin,
        'puk' => $puk,
        'e_invoicing_login' => $e_invoicing_login,
        'e_invoicing_password' => $e_invoicing_password,
        'taxservise_login' => $taxservise_login,
        'taxservise_password' => $taxservise_password,
        'avc' => $avc,

    ]);

}