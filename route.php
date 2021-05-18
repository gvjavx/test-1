<?php
/*
route function
*/
$url = $_GET['url'] ?? null;
$sub_link = $_GET['sub_link'] ?? null;
$sub_sub_link = $_GET['sub_sub_link'] ?? null;
// $sub_sub_sub_link = $_GET['sub_sub_sub_link'] ?? null;

function route() {
    global $url, $sub_link, $sub_sub_link;

    if($url == 'admin' && $sub_link == null && $sub_sub_link == null ){
        return include 'pages/admin/index.php';
    }
    else if($url == 'admin' && $sub_link == 'login' && $sub_sub_link == null ){
        return include 'pages/login/admin.php';
    }
    else if($url == 'admin' && $sub_link == 'item-management' && $sub_sub_link == null ){
        return include 'pages/admin/item_management/index.php';
    }
    else if($url == 'admin' && $sub_link == 'item-management' && $sub_sub_link == 'form'){
        return include 'pages/admin/item_management/form.php';
    }
    else if($url == 'admin' && $sub_link == 'item-management' && $sub_sub_link == 'form' && !empty($sub_sub_sub_link)){
        return include 'pages/admin/item_management/form.php';
    }
    else if($url == 'admin' && $sub_link == 'item-management' && $sub_sub_link == 'delete' && !empty($sub_sub_sub_link)){
        return include 'pages/admin/item_management/delete.php';
    }
    else if($url == 'admin' && $sub_link == 'item-management' && $sub_sub_link == 'view' && !empty($sub_sub_sub_link)){
        return include 'pages/admin/item_management/view.php';
    }
    else if($url == 'admin' && $sub_link == 'customer' && $sub_sub_link == null){
        return include 'pages/admin/customer/index.php';
    }
    else if($url == 'admin' && $sub_link == 'customer' && $sub_sub_link == 'view'){
        return include 'pages/admin/customer/view.php';
    }
    else if($url == 'admin' && $sub_link == 'transaction' && $sub_sub_link == null){
        return include 'pages/admin/transactions/index.php';
    }
    else if($url == 'admin' && $sub_link == 'transaction' && $sub_sub_link == 'view'){
        return include 'pages/admin/transactions/view.php';
    }
    else if($url == 'register' && $sub_link == null && $sub_sub_link == null){
        return include 'pages/user/register.php';
    }
    else if($url == 'register' && $sub_link == null && $sub_sub_link == null){
        return include 'pages/user/login.php';
    }
    else if($url == null && $sub_link == null && $sub_sub_link == null){
        return include 'pages/user/index.php';
    }
    else if($url == 'checkout' && $sub_link == null && $sub_sub_link == null){
        return include 'pages/user/checkout.php';
    }
    else if($url == 'transaction' && $sub_link == null && $sub_sub_link == null){
        return include 'pages/user/transaction.php';
    }
    else {
        return '';
    }
}
?>