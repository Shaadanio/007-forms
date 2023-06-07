<?php 
if( $_POST['file_name'] == "" || !isset($_FILES['file_name'])){
    header("Location: index.php");
}else{
    $uploaddir = '/uploads/'; //прописать точный путь
    $uploadfile = $uploaddir . basename($_POST['file_name']);

    if (move_uploaded_file($_FILES['file_name']['tmp_name'], $uploadfile)) {
        echo "Файл загружен " . $uploadfile . " " . $_FILES['file_name']['size'] . " байт \n";
    }

}
