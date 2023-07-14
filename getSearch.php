<?php


$con = include 'conection.php';

if(isset($_POST['type'])){
   $type = $_POST['type'];
}

// Search result
if($type == 1){
   // $searchText = mysqli_real_escape_string($con,$_POST['search']);
   $searchText = $_POST['search'];
   $sql = "SELECT id,nombre FROM colonia where nombre like '%".$searchText."%' order by nombre asc limit 5";

    $result = mysqli_query($con,$sql);

    $search_arr = array();

    while($fetch = mysqli_fetch_assoc($result)){
        $id = $fetch['id'];
        $name = $fetch['nombre'];

        $search_arr[] = array("id" => $id, "nombre" => $name);
    }

    echo json_encode($search_arr);
}

// get User data
if($type == 2){
    $userid = mysqli_real_escape_string($con,$_POST['userid']);

    $sql = "SELECT nombre FROM colonia where id=".$userid;

    $result = mysqli_query($con,$sql);

    $return_arr = array();
    
    while($fetch = mysqli_fetch_assoc($result)){
        $username = $fetch['id'];
        $email = $fetch['nombre'];

        $return_arr[] = array("id"=>$username, "nombre"=> $email);
    }

    echo json_encode($return_arr);
}

?>


