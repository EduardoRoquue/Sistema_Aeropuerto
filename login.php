<?php
session_start();
?>

<?php require_once("includes//connection.php"); ?>
<?php include("includes//header.php"); ?>

<?php

if(isset($_SESSION["session_username"]))
{
    //echo "Session is set; //for testing purposes
    header("Location: intropage.php");
}

if(isset($_POST["login"]))
{
    if(isset($_SESSION["session_username"]) && !empty($_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
//TODO: revisar esta wea
        $query = new mysqli($host ="localhost", $username = "username", $password = "", $dbname = "usuarios");
        $numrows='mysql_num_rows'($query);
        if($numrows!=0)
        {
            while($row=mysqli_fetch_assoc($query))
            {
                $dbusername=$row['username'];
                $dbpassword=$row['password'];
            }

            if($username == $dbusername && $password == $dbpassword)
            {
                $_SESSION['session_username']=$username;
                /*Redirect browser*/
                header("Location: intropage.php");
            }
        } else {
            $message = "Nombre o contraseña incorrectos";
        }
    } else {
        $message = "Todos los campos requeridos";
    }
} //TODO: Revisar toda la wea anterior
?>

<div class="container mlogin">
    <div id="login">
        <h1>Logueo</h1>
        <form name="loginform" id="loginform" action="" method="POST">
            <p>
                <label for="user_login">Nombre de usuario<br/>
                <input type="text" name="username" id="username" class="input" value="" size="20"/>
            </label>
            </p>
            <p>
                <label for="user_pass">Contraseña<br />
            <input type="password" name="password" id="password" class="input" value="" size="20" /> 
        </label>
            </p>
            <p class="submit">
                <input type="submit" name="login" class="button" value="Entrar"/>
            </p> 
            <p class="regtext">No estas registrado <a href="register.php">Registrate aqui</a>!</p>
        </form>
    </div>
</div>
<?php include("includes/footer.php"); ?>
<?php if(!empty($message))
{
echo "<p class=\"error\">" . "MESSAGE: ".$message. "</p";
} 
?>