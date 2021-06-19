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
            $sql="INSERT INTO usuariosdb
            (nombre, ap_pat, ap_mat, username, password)
            VALUES('$nombre', '$ap_pat', '$ap_mat', '$username', '$password')";

            $result = mysqli_query($sql);

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

<?php if(!empty($message))
{
    echo "<p class=\"error\">" . "Mensaje:" . $message . "</p";
}
?>
<div class="container mregister">
<div id="login">
<h1>Registrar</h1>
<form name="registerform" id="registerform" action="register.php" method="POST">

<p>
<label for="user_login">Nombre<br/>
<input type="text" name="nombre" id="nombre" class="input" size="32" value="" /></label>
</p>

<p>
<label for="user_login">Apellido Paterno<br/>
<input type="text" name="ap_pat" id="ap_pat" class="input" size="32" value="" /></label>
</p>

<p>
<label for="user_login">Apellido Materno<br/>
<input type="text" name="ap_mat" id="ap_mat" class="input" size="32" value="" /></label>
</p>

<p>
<label for="user_pass">Nombre de usuario<br/>
<input type="text" name="username" id="username" class="input" size="32" value="" /></label>
</p>

<p>
<label for="user_pass">Contraseña<br/>
<input type="password" name="password" id="password" class="input" size="32" value="" /></label>
</p>

</form>
</div>
</div>

<?php include("includes/footer.php"); ?>
