<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>

<?php

if(isset($_POST["register"]))
{
    if(!empty($_POST['nombre']) && !empty($_POST['ap_pat']) && !empty($_POST['ap_mat']) && !empty($_POST['username']) && !empty($_POST['password']))
    {
        $nombre = $_POST['nombre'];
        $ap_pat = $_POST['ap_pat'];
        $ap_mat = $_POST['ap_mat'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = new mysqli($host ="localhost", $username = "username", $password = "", $dbname = "usuarios");
        $numrows=mysql_num_rows($query);
        if($numrows!=0)
        {
            $sql="INSERT INTO usuarios
            (nombre, ap_pat, ap_mat, username, password)
            VALUES('$nombre', '$ap_pat', '$ap_mat', '$username', '$password')";

            $result = mysql_query($sql);

            if($result)
            {
                $message = "Cuenta correctamente creada";
            } else {
                $message = "Error al ingresar la informacion";
            }
        } else {
            $message ="El nombre de usuario ya existe";
        }
    } else {
        $message = "Llene todos los campos";
    }
}
?>
