<?php 

function getFolderProject(){
   if (strpos(__DIR__, '/') !== false) {
       $root = str_replace('/opt/lampp/htdocs/', '/', __DIR__);
     } else {
       $root = str_replace('C:\\xampp\\htdocs\\', '/', __DIR__);
     }
     $root = str_replace('config', '', $root);
     return $root;
}
/* functions saveimage($file){
   $imageName = str_replace(" ", $file["imagen"]["name"]);
   $imgTmp = $file["imagen"]["tmp_name"];
   move_uploaded_file($imgTmp, $_SERVER["DOCUMENT_ROOT"].getFolderProyect(). "/imagenes/".$imageName);
   return $imageName;
} */



?>