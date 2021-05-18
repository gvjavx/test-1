<?php

if(isset($_POST['submit'])){

    $data->name = $_POST['item_name'];
    $data->price = $_POST['price'];
    $data->created_at = date('Y-m-d H:i:s');
    $data->updated_at = date('Y-m-d H:i:s');

    $db->query("INSERT INTO item_management VALUE ('', '$data->name', '$data->price', '$data->created_at', '$data->updated_at')");

	echo "<script>location.href='" . url() . 'admin/item-management' . "'</script>";

    
}
?>