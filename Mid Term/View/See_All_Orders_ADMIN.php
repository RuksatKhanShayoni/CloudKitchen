<?php 

	 include('Styling_Admin.php');

    $jsondata = file_get_contents("order_list.json");

    $json = json_decode($jsondata,true);
    print_r($json);
    
?>