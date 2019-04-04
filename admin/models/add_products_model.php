<?php
session_start();



if(isset($_POST["submitForm"])) {
        //Get form data
        $product_name = mysqli_real_escape_string($connection, $_POST['product_name']);
        $list_price = mysqli_real_escape_string($connection, $_POST['list_price']);
        $date_added = mysqli_real_escape_string($connection, $_POST['date_added']);
        
    
        $query = "INSERT INTO cis282store.products(
                product_name
                , list_price
                , date_added
                
                ) VALUES
                (
                '$product_name'
                , '$list_price'
                , '$date_added'
                )


        ";

        if (mysqli_query($connection, $query)) {
  
          $_SESSION['message'] = "Record has been saved!";
          $_SESSION['msg_type'] = "success";  
        }
        else {
          $_SESSION['message'] = "An Error occurred while Saving. " . mysqli_error($connection);
          $_SESSION['msg_type'] = "danger";
        }

    }        

