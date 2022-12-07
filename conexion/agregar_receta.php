<?php

include("bd.php");

$result = $database->select("tb_datos", "*");
$id= count($result)+1;

function guardar_img($img){
    $temp = $img["tmp_name"];
    $dir_url = dirname(__FILE__)."/imgs";

    if (!file_exists($dir_url)) {
        mkdir($dir_url, 0777, true);
    };

    $file_name = $img["name"];
    $target_url = str_replace("\\","/",$dir_url)."/".$file_name;

    if (move_uploaded_file($temp, $target_url)) {
        return "imgs/$file_name";
    }

    return null;
}

if(isset($_POST['guardar'])){

    $raza= $_POST['sub_titulo'];
    $resumen= $_POST['resumen'];
    $descripcion= $_POST['descripcion'];
    $img_peque= $_FILES['img_p'];
    $img_grande= $_FILES['img_g'];

    $img_peque_url = guardar_img($img_peque);
    $img_grande_url = guardar_img($img_grande);

    $resultado=$database->insert("tb_datos",[
        "sub_titulo"=> $raza,
        "resumen"=> $resumen,
        "id"=> $id,
        "descripcion"=> $descripcion,
        "img_p"=> $img_peque_url,
        "img_g"=> $img_grande_url

        
    ]);

    if(!$resultado){
        die("Query failed");
    }

    header("Location: front.php");
}
?>