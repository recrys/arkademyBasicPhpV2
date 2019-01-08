    <?php
    include "koneksi.php";

    $sql = "SELECT * FROM user";
    $res = $koneksi->query($sql);
    foreach($res as $r){
        $id = $r['id'];
        $name = $r['nama'];
        $role = $r['role'];
        $ava = $r['availability'];
        $age = $r['age'];
        $l = $r['location'];
        $exp = $r['years_experience'];
        $email = $r['email'];
    }

    ?>