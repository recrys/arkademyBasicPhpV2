<?php

if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $role = $_POST['role'];
    $ava = $_POST['ava'];
    $age= $_POST['age'];
    $l = $_POST['location'];
    $exp = $_POST['exp'];
    $email = $_POST['email'];

    $sql = "UPDATE `user` SET 
     `nama` = '".$name."',
      `role` = '".$role."',
       `availability` ='".$ava."',
        `age` = '".$age."',
         `location` = '".$l."',
          `years_experience` = '".$exp."',
           `email` = '".$email."' 
      WHERE id = '".$id."'  ";

    if($koneksi->query($sql) == true){
        echo "update data berhasil";
    }else{
        echo "update data gagal";
    }

}

?>