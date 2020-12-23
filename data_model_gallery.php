<?php 
include_once "config.php";

# Here we fetch from "Gallery" table
function get_all_gallery(){

    global $conn;
    $sql = "SELECT * FROM gallery";

    $result = mysqli_query($conn, $sql);

    $galleries = [];

    if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc($result)){
                 array_push($galleries, $row);
        }
        return $galleries;

    } else {
        return false;
    }
}
?>