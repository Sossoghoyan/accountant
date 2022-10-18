<?php

function customers($data){
    global $conn;
    $name = $data['name'];
    $created_by = $_SESSION['user']['id'];
    $pin = $data['pin'];
    $puk = $data['puk'];
    $e_invoicing_login = $data['e_invoicing_login'];
    $e_invoicing_password = $data['e_invoicing_password'];
    $taxservise_login = $data['taxservise_login'];
    $taxservise_password = $data['taxservise_password'];
    $avc = $data['avc'];
    $sql_register = "INSERT INTO customers VALUES (null, '$name', '$created_by', '$pin', '$puk', '$e_invoicing_login', 
    '$e_invoicing_password', '$taxservise_login', '$taxservise_password', '$avc', now())";
    $result = mysqli_query($conn, $sql_register);
    if($result) {
        $_SESSION['msg'] = 'created';
        header('location:http://accountant.loc/view/customers/index.php');
    }
}

function get_customers(){
    global $conn;
    $sql = "SELECT * FROM customers ";
    $result = mysqli_query($conn, $sql);
    $get_customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return json_encode($get_customers);
}

function search_by_name($name){
    global $conn;
    $sql = "SELECT * FROM customers WHERE name LIKE '%$name%' OR avc LIKE '%$name%'";
    $result = mysqli_query($conn, $sql);
    $user_name = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return json_encode($user_name);
}

function delete_customer($id){
    global $conn;
    $sql_delete="DELETE FROM customers WHERE id = $id";
    $result_delete = mysqli_query($conn, $sql_delete);

}

function edit_Customer($id) {
    global $conn;
    $sql = "SELECT * FROM customers WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    return json_encode(mysqli_fetch_all($result, MYSQLI_ASSOC));
}

function update_customer($id, $data) {
    global $conn;
    $name = $data['name'];
    $created_by = $_SESSION['user']['id'];
    $pin = $data['pin'];
    $puk = $data['puk'];
    $e_invoicing_login = $data['e_invoicing_login'];
    $e_invoicing_password = $data['e_invoicing_password'];
    $taxservise_login = $data['taxservise_login'];
    $taxservise_password = $data['taxservise_password'];
    $avc = $data['avc'];
    $sql = "UPDATE customers SET name='$name', created_by='$created_by', pin='$pin', puk='$puk', e_invoicing_login='$e_invoicing_login',
        e_invoicing_password='$e_invoicing_password', taxservise_login='$taxservise_login', taxservise_password='$taxservise_password',
        avc='$avc' WHERE id=$id";;
    $result = mysqli_query($conn, $sql);
    header('location:http://accountant.loc/view/customers/index.php');

}
