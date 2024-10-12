<form method="POST" enctype="multipart/form-data">

    <input type="file" name="fileUpload">
    <button type="submit">enviar</button>


</form>

<?php   

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $file = $_FILES['fileUpload'];

    if($file["error"]){

        throw new Exception("Error: " . $file["error"]);
    }

    $dirUploads = "uploads";

    if(!is_dir($dirUploads)){
        mkdir($dirUploads);

}

if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {
echo "Arquivo enviado com sucesso"; 
} else {

    throw new Exception("Não foi possivel enviar o arquivo");
}

}




?>