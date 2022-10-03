<div style="text-align: center;">
<?php 
    $new_message = array(
        "location" => $_POST['location'],
        "food" => $_POST['food'],
        "Payment" => $_POST['Payment'],
        "time" => $_POST['time']
        );
      
    if(filesize("order_list.json") == 0){ //append
        $first_record = array($new_message);
         $data_to_save = $first_record;
    }else{
        $old_records = json_decode(file_get_contents("order_list.json"));
        array_push($old_records, $new_message);
        $data_to_save = $old_records;
    }
      
    $encoded_data = json_encode($data_to_save, JSON_PRETTY_PRINT);
    //Pretty printing is a form of stylistic formatting including indentation and colouring
      
    if(!file_put_contents("order_list.json", $encoded_data, LOCK_EX)){
        //Lock the file if LOCK_EX is set; LOCK_EX - Put an exclusive lock on the file while writing to it
        echo "<h5><span style = 'color:red;'>Error storing order details, please try again</span></h5>";
    }else{
        echo "<h5><span style = 'color:red;'>Order details stored successfully</span> <br> </h5>";
    }
    ?>
    </div>