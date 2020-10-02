<?php

$db = mysqli_connect('localhost','root','','trans')
or die('Error connecting to MySQL server');
mysqli_set_charset($db,'utf8');
if(isset($_POST['bulk_delete_submit'])){
    if(!empty($_POST['checked_id'])){
        $idStr=implode(',', $_POST['checked_id']);
        
        $delete=$db->query("DELETE FROM ruta WHERE ID_ruta in ($idStr)");

        if($delete){
            $statusMsg='Рутата е успешно избришана!';

        }
        else{
            $statusMsg='Некоја од селектираните рути има постоечка резервација. Види во преглед резервации.';
        }

    }
    else {
        $statusMsg='Не е селектирана ниедна рута.';
    }
}
?>