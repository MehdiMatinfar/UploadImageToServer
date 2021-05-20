<?php

$target_dir = "Data/images";
$image_path=$_POST["image"];
$target_dir=$target_dir."/".rand()."_".time()."jpeg";


if(file_put_contents($target_dir,base64_decode($image_path))){

echo json_encode(array("message" => "OK!"));
}
else{

    echo json_encode([

        "Message"=>"NO!"
    ]);
}

?>