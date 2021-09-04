<?php

    include_once("connect.php");
    include 'AddToCart.php';
    $cart = new Cart;

if(isset($_POST["country_id"]) && !empty($_POST["country_id"])){
    //Get all state data
    $q1=$_POST['country_id'];
    $query = $con->query("SELECT * FROM locations WHERE country_id = '$q1' GROUP BY state_name ORDER BY state_id ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select state</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>';
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}

if(isset($_POST["state_id"]) && !empty($_POST["state_id"])){
    //Get all city data
    $q2=$_POST['state_id'];
    $query = $con->query("SELECT * FROM locations WHERE state_id = '$q2' GROUP BY city_name ORDER BY city_id ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}

if(isset($_POST["city_id"]) && !empty($_POST["city_id"])){
    //Get all city data
    $q3=$_POST['city_id'];
    $query = $con->query("SELECT * FROM locations WHERE city_id = '$q3' ORDER BY pincode ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select Pincode</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['id'].'">'.$row['pincode'].'</option>';
        }
    }else{
        echo '<option value="">Pincode not available</option>';
    }
}
?>